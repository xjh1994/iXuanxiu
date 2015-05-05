<?php
namespace Home\Controller;
use Think\Controller;
use Org\ThinkSDK\ThinkOauth;
use Home\Event;

class IndexController extends BaseController {
    
    //SNS登录首页
    public function index(){

        $courses = M("course")->limit("7")->select();

        $this->course();    //评论最多
        $this->nosign();    //不点名

        $this->comment();   //评论

        $this->display();
    }

    //登录地址
    public function login($type = null){
        empty($type) && $this->error('参数错误');

        //加载ThinkOauth类并实例化一个对象
        // import("ORG.ThinkSDK.ThinkOauth");
        $sns  = ThinkOauth::getInstance($type);

        //跳转到授权页面
        redirect($sns->getRequestCodeURL());
    }

    public function logout() {
        session_unset();
        session_destroy();

        $this->success('退出成功！', U('Index/index'));
    }

    //授权回调地址
    public function callback($type = null, $code = null){
        header("Content-type:text/html;charset=utf-8");
        (empty($type) || empty($code)) && $this->error('参数错误');
        
        //加载ThinkOauth类并实例化一个对象
        // import("ORG.ThinkSDK.ThinkOauth");
        $sns  = ThinkOauth::getInstance($type);

        //腾讯微博需传递的额外参数
        $extend = null;
        if($type == 'tencent'){
            $extend = array('openid' => $this->_get('openid'), 'openkey' => $this->_get('openkey'));
        }

        //请妥善保管这里获取到的Token信息，方便以后API调用
        //调用方法，实例化SDK对象的时候直接作为构造函数的第二个参数传入
        //如： $qq = ThinkOauth::getInstance('qq', $token);
        $token = $sns->getAccessToken($code , $extend);

        //获取当前登录用户信息
        if(is_array($token)){
            // var_dump(A('Type', 'Event'));die;
            // var_dump($type);die;
            $user_info = A('Type', 'Event')->$type($token);            

            $user_id = $user_info['response']['id'];
            $user_name = $user_info['response']['name'];
            $user_avatar = $user_info['response']['avatar'][1]['url'];
            $user_homepage = "http://www.renren.com/" . $user_id;

            // var_dump($user_info);die;

            $this->register_renren($user_id, $user_name, $user_homepage, $user_avatar);

//          echo("<h1>恭喜！使用 {$type} 用户登录成功</h1><br>");
//          echo("授权信息为：<br>");
//          dump($token);
//          echo("当前登录用户信息为：<br>");
//          dump($user_info);

//            $$type = ThinkOauth::getInstance('renren', $token);
//            $data = $$type->call('status/get');
//            dump($data);
        }
    }

    private function register_renren($user_id, $username, $homepage = "", $avatar = "") {
        $where = array(
            "uid" => $user_id
        );
        $user = M('user')->where($where)->find();
        $_SESSION[C('USER_AUTH_KEY')] = $user_id;
        $_SESSION[C('USER_NAME')] = $user['username'];

        if($user) {
//            $this->error("用户已存在");            
            $this->success("登录成功", U("Index/index"));
        } else {
            $data = array(
                "username" => $username,
                "uid" => $user_id,
                "homepage" => $homepage,
                "avatar" => $avatar
            );
            if(M('user')->add($data)) {
                $this->success("登录成功", U("Index/index"));
            } else {
                $this->error("登录失败");
            }
        }
    }

    private function course()
    {
        $limit = 9;
        $courses = M("course")->order("comment_times DESC")->limit($limit)->select();

        $this->assign("comment_course", $courses);
    }

    public function nosign()
    {
        $limit = 9;
        $where['nosign'] = array('gt', 0);
        $courses = M("course")->where($where)->order("nosign DESC")->limit($limit)->select();
        // var_dump($courses);die;
        $this->assign("nosign_course", $courses);
    }

    private function comment($limit = 6)
    {
        $comments = M("comment")->order('ctime DESC')->limit($limit)->select();

        foreach ($comments as $key => $value) {
            // var_dump($value);die;
            $course = M("course")->where(array("id" => $value['cid']))->find();
            $user = M("user")->where(array("id" => $value['uid']))->find();

            $comments[$key]['course_name'] = $course['course_name'];
            $comments[$key]['username'] = $user['username'];
        }

        $this->assign("comments", $comments);
    }

}