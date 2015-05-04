<?php
namespace Home\Controller;
use Think\Controller;

class CourseController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $id = I("get.id");

        $course = M("course")->where(array("id" => $id))->find();

        $this->assign("course", $course);

        $this->display();
    }

    public function nosign()
    {
        $id = I("post.id");

        $course = M("course")->where(array("id" => $id))->find();
        $nosign = $course['nosign'];
        $nosign++;

        $data = array(
            "id" => $id,
            "nosign" => $nosign
            );

        M("course")->where(array("id" => $id))->save($data);
    }
}