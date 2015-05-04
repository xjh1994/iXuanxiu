<?php

namespace Admin\Controller;
use Think\Controller;

class CourseController extends Controller
{
    public function index()
    {

    }


    public function add()
    {
        // var_dump($_POST);
        $post = $_POST;
        $data = array(
            'course_name' => $post['name'],
            'course_cid' => $post['cate'],
            'course_place' => $post['place'],
            'course_time' => $post['ctime'],
            'course_tid' => $post['teacher'],
            'course_intro' => $post['intro']
        );

        // var_dump($data);
        
        if (M('course')->data($data)->add()) {
           $this->success("添加成功", U('Index/index'));
        } else {
            $this->error("添加失败");
        }
    }
}