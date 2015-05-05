<?php
namespace Home\Controller;
use Think\Controller;

class MyController extends HomeBaseController
{
    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        // var_dump($this->current_user);
        
        $this->display();
    }
}