<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../favicon.ico"> -->

    <title>爱选修 -- 工大选修课交流社区</title>

    <!-- Bootstrap core CSS -->
    <link href="/ixuanxiu/Public/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/ixuanxiu/Public/css/sticky-footer.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo U('Index/index');?>">爱选修</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">课程</a></li>
            <li><a href="#about">推荐</a></li>
            <li><a href="">我的选修</a></li>
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li> -->
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li>
              <?php if(($islogin == '0')): ?><a href="<?php echo U('Index/login?type=renren');?>"><img src="/ixuanxiu/Public/images/renren132X22.png" /></a>
              <?php else: ?>
                  <a href="<?php echo U('Index/logout');?>">退出</a><?php endif; ?>
            </li>
            <li><a href="http://202.119.248.199/default2.aspx" target="_blank">选课系统</a></li>
            <li class="active"><a href="<?php echo U('Index/about');?>">关于本站</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- 主体 -->
    <div class="container">
      <div class="jumbotron">
        <h3>爱选修</h3>
        <p style="font-size: 16px;">爱选修是一个为工大学生服务的选修课交流平台，在这里你可以寻找感兴趣的选修课程，及时评价老师的讲课，和同学交流学习经历，寻找选修同一门课的同学......当然，还可以把你的选修课分享给社交网络上的好友，邀请他们一起来参加选修课。</p>
        <p><!-- 
          <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a> -->
        </p>
      </div>
    </div> <!-- /container -->

    <div class="footer">
      <div class="container">
        <p class="text-muted">©2014 <a href="http://green.njtech.edu.cn" target="_blank">GreenStudio</a> 爱选修</p>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="/ixuanxiu/Public/dist/js/bootstrap.min.js"></script>
  </body>
</html>