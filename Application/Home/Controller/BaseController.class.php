<?php

namespace Home\Controller;
use Think\Controller;

class BaseController extends Controller {

    protected $current_user;
    
    public function __construct() {
        parent::__construct();

        if($this->isLogin()) {
            $this->current_user = $_SESSION [C('USER_NAME')];

            $user_id = $_SESSION [C('USER_AUTH_KEY')];
            $where = array(
                "uid" => $user_id
            );
            $user = M("user")->where($where)->find();
            // var_dump($user);die;
            $this->assign("user", $user);

            $this->assign("islogin", '1');
        } else {
            $this->assign("islogin", '0');
        }
    }

    protected function _initialize() {
        if(!$_SESSION[C('USER_AUTH_KEY')]) {
//            echo "未登录";
        }
    }

    public function isLogin() {
        if(!$_SESSION[C('USER_AUTH_KEY')]) {
            return false;
        }
        return true;
    }
}