<?php

namespace Home\Controller;
use Think\Controller;

class HomeBaseController extends BaseController {
    
    public function __construct() {
        parent::__construct();

        if(!$_SESSION[C('USER_AUTH_KEY')]) {
            $this->error("你还没有登录哦~");
            // $this->redirect('Index/login?type=renren');
        }        
    }

    
}