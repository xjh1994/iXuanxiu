<?php
return array(
    //数据库配置信息
    'DB_TYPE'   =>'mysql', // 数据库类型
    'DB_HOST'   => 'localhost', // 服务器地址
    'DB_NAME'   => 'aixuanxiu', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => '', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => '', // 数据库表前缀 
    'DB_CHARSET'=> 'utf8', // 字符集

    'DEFAULT_MODULE'       => 'Home',

    'VAR_FILTERS'       => 'remove_xss',
    'DEFAULT_FILTER'       => 'htmlspecialchars',


    'MODULE_ALLOW_LIST'    => array('Home', 'Admin'),
    'MODULE_DENY_LIST'      =>  array('Common'),
);