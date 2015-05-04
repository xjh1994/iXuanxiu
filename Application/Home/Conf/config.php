<?php

//定义回调URL通用的URL
define('URL_CALLBACK', 'http://blog.xjh1994.com/ixuanxiu/index.php?m=Home&a=callback&type=');

return array(
	//'配置项'=>'配置值'
   
    'USER_AUTH_KEY' => 'user',

    //人人网配置
    'THINK_SDK_RENREN' => array(
        'APP_KEY'    => '269101', //应用注册成功后分配的 APP ID
        'APP_SECRET' => '100a566becb649adbb17dc02c1d3e7b6', //应用注册成功后分配的KEY
        'CALLBACK'   => URL_CALLBACK . 'renren',
    ),
);