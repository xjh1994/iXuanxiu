<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
            <li><a href="">课程</a></li>
            <li><a href="">推荐</a></li>
            <li><a href="<?php echo U('My/index');?>">我的选修</a></li>
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
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenu1" aria-expanded="true"><?php echo ($user["username"]); ?><span class="caret"></span></a>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" role="menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo U('Index/logout');?>">退出</a></li>
                      </ul>
                    </li><?php endif; ?>
            </li>
            <li><a href="http://202.119.248.199/default2.aspx" target="_blank">选课系统</a></li>
            <li><a href="<?php echo U('Index/about');?>">关于本站</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- 搜索框 -->
    <div class="container" id="search">
        <div class="row">
          <div class="col-lg-4 col-lg-offset-8">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="输入要查找的课程名称">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">搜索</button>
              </span>
            </div><!-- /input-group -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div>

    <!-- 主体 -->
    <div class="container" id="hot">

      <div class="row">
        <!-- <h4><strong>选修指南</strong></h4> -->
          <div class="col-md-3">
              <h4 class="title"><span class="glyphicon glyphicon-edit"></span> 评论最多</h4>
              <hr />
              <ul class="list-unstyled">
                  <?php if(is_array($comment_course)): $i = 0; $__LIST__ = $comment_course;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$course): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Course/index?id=' . $course['id']);?>"><?php echo ($course["course_name"]); ?> <?php echo ($course["course_tid"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
              </ul>
          </div>
          <div class="col-md-3">
              <h4 class="title"><span class="glyphicon glyphicon-star-empty"></span> 得分最多</h4>
              <hr />
              <ul class="list-unstyled">
                  <li><a href="">公务员能力基础 卞春荣</a></li>
                  <li><a href="">品牌策划 薛业清</a></li>
                  <li><a href="">书法欣赏 朱仁洲</a></li>
                  <li><a href="">品牌策划 付昌义</a></li>
                  <li><a href="">企业家精神培养 于志杰</a></li>
                  <li><a href="">科学与艺术 薛业清</a></li>
                  <li><a href="">品牌策划 付昌义</a></li>
                  <li><a href="">企业家精神培养 于志杰</a></li>
                  <li><a href="">科学与艺术 薛业清</a></li>
              </ul>
          </div>
          <div class="col-md-3">
              <h4 class="title"><span class="glyphicon glyphicon-heart-empty"></span> 不点名</h4>
              <hr />
              <ul class="list-unstyled">
                  <?php if(is_array($nosign_course)): $i = 0; $__LIST__ = $nosign_course;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nosign): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Course/index?id=' . $nosign['id']);?>"><?php echo ($nosign["course_name"]); ?> <?php echo ($nosign["course_tid"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
              </ul>
          </div>
          <div class="col-md-3" id="user">
              <h4 class="title"><span class="glyphicon glyphicon-user"></span> 活跃度</h4>
              <hr />
              <ul class="list-unstyled">
                  <li><span class="username"><a href=""><img src="/ixuanxiu/Public/images/head.jpg" width="32px" height="32px"> 徐精华</a></span> <span>话题[4] &nbsp;&nbsp;评论[5]</span></li>
                  <li><span class="username"><a href=""><img src="/ixuanxiu/Public/images/head.jpg" width="32px" height="32px"> 薛明良</a></span> <span>话题[7] &nbsp;&nbsp;评论[8]</span></li>
                  <li><span class="username"><a href=""><img src="/ixuanxiu/Public/images/head.jpg" width="32px" height="32px"> 王鑫</a></span> <span>话题[6] &nbsp;&nbsp;评论[1]</span></li>
                  <li><span class="username"><a href=""><img src="/ixuanxiu/Public/images/head.jpg" width="32px" height="32px"> 王欣平</a></span> <span>话题[4] &nbsp;&nbsp;评论[5]</span></li>
                  <li><span class="username"><a href=""><img src="/ixuanxiu/Public/images/head.jpg" width="32px" height="32px"> 周晶</a></span> <span>话题[1] &nbsp;&nbsp;评论[6]</span></li>
                  <li><span class="username"><a href=""><img src="/ixuanxiu/Public/images/head.jpg" width="32px" height="32px"> 金鑫</a></span> <span>话题[4] &nbsp;&nbsp;评论[8]</span></li>
              </ul>
          </div>
      </div>

    </div> <!-- /container -->

    <div class="container">
        <div class="row">
            <div class="col-md-8" id="comments">
                <h4><span class="glyphicon glyphicon-edit"></span> 课程评论</h4>
                <hr />
                <?php if(is_array($comments)): $i = 0; $__LIST__ = $comments;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$comments): $mod = ($i % 2 );++$i;?><div class="comment_box">
                      <a href="" class="pull_left"><img src="/ixuanxiu/Public/images/head.jpg" width="" height="" class="comment_avatar"></a>
                      <h5><a href=""><?php echo ($comments["username"]); ?></a> <span class="comment_font">评论</span> <a href=""><?php echo ($comments["course_name"]); ?></a> <span class="comment_date"><?php echo ($comments["ctime"]); ?> &nbsp;<span><a href="">赞(<?php echo ($comments["good"]); ?>)</a> / <a href="">踩(<?php echo ($comments["bad"]); ?>)</a></span></span></h5> 
                      <p><?php echo ($comments["content"]); ?></p>
                  </div><hr /><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="col-md-4 " id="video_course">
                <h4><a href="http://202.119.248.93/" target="_blank"><span class="glyphicon glyphicon-facetime-video"></span> 视频课</a></h4>
                <hr />
                <div class="video_box">
                    <a href="" class="pull_left"><img src="/ixuanxiu/Public/images/video_course/ts010.jpg" width="100px" height="100px"></a>
                    <h5><a href="">从爱因斯坦到霍金的宇宙 &nbsp;&nbsp;&nbsp;赵峥</a></h5>
                    <p class="video_intro">
                        该课程结合历史时间顺序以及现实理论基础展开叙述，主要包括爱因斯坦的生平，量子论以及相对论的诞生，宇宙的发展历程探索，放射性与原子弹的研究，广义相对论...
                    </p>
                </div><hr />
                <div class="video_box">
                    <a href="" class="pull_left"><img src="/ixuanxiu/Public/images/video_course/ts008.jpg" width="100px" height="100px"></a>
                    <h5><a href="">中华诗词之美 &nbsp;&nbsp;&nbsp;叶嘉莹</a></h5>
                    <p class="video_intro">
                        中华诗词滥觞于先秦，是有节奏、有韵律并富有感情色彩的一种语言艺术形式，也是世界上最古老、最基本的文学形式。严格的格律韵脚、凝练的语言、绵密的章法、充沛...
                    </p>
                </div><hr />
                <div class="video_box">
                    <a href="" class="pull_left"><img src="/ixuanxiu/Public/images/video_course/ts016.jpg" width="100px" height="100px"></a>
                    <h5><a href="">美学原理 &nbsp;&nbsp;&nbsp;叶朗</a></h5>
                    <p class="video_intro">
                        美学是哲学主要分支学科之一，主要研究美、艺术和审美经验。《美学原理》作为一门概论性的美学课程，将集中讲解中外美学史上关于美、艺术和审美经验的代表性理...
                    </p>
                </div><hr />
                <div class="video_box">
                    <a href="" class="pull_left"><img src="/ixuanxiu/Public/images/video_course/ts016.jpg" width="100px" height="100px"></a>
                    <h5><a href="">美学原理 &nbsp;&nbsp;&nbsp;叶朗</a></h5>
                    <p class="video_intro">
                        美学是哲学主要分支学科之一，主要研究美、艺术和审美经验。《美学原理》作为一门概论性的美学课程，将集中讲解中外美学史上关于美、艺术和审美经验的代表性理...
                    </p>
                </div><hr />
            </div>
        </div>
    </div>

    <div class="container" id="post">
        <div class="row">
            <div class="col-md-8" id="recommend">
                <h4><span class="glyphicon glyphicon-book"></span> 推荐文章 <a href="" title="写文章"><span class="glyphicon glyphicon-edit pull_right"></span></a></h4>
                <hr />
                <div class="post">                    
                    <h5>《公务员能力基础》读后感 <span class="comment_date"><a href="" target="_blank">徐精华</a></span></h5>
                    <p>机会在每一个人的身边。有的人抱怨机会太少，没有认识到责任就是机会，见到责任就躲，结果把机会也躲掉了。每一项工作对于我们都是一个机遇，必须用罗文精神来指引我们，从根源上改变自己对待工作的态度。</p>
                    <hr />
                </div>
                <div class="post">                    
                    <h5>《公务员能力基础》读后感 <span class="comment_date"><a href="" target="_blank">徐精华</a></span></h5>
                    <p>机会在每一个人的身边。有的人抱怨机会太少，没有认识到责任就是机会，见到责任就躲，结果把机会也躲掉了。每一项工作对于我们都是一个机遇，必须用罗文精神来指引我们，从根源上改变自己对待工作的态度。</p>
                    <hr />
                </div>
                <div class="post">                    
                    <h5>《公务员能力基础》读后感 <span class="comment_date"><a href="" target="_blank">徐精华</a></span></h5>
                    <p>机会在每一个人的身边。有的人抱怨机会太少，没有认识到责任就是机会，见到责任就躲，结果把机会也躲掉了。每一项工作对于我们都是一个机遇，必须用罗文精神来指引我们，从根源上改变自己对待工作的态度。</p>
                    <hr />
                </div>
            </div>
            <div class="col-md-4" id="comments">
                <h4><span class="glyphicon glyphicon-user"></span> 受欢迎的老师</h4><hr />
                <div class="teacher">
                    <div class="col-md-3 teacher_avatar">
                        <img src="/ixuanxiu/Public/images/avatar.jpg" />
                        <p>卞春荣</p>
                    </div>
                    <div class="col-md-3 teacher_avatar">
                        <img src="/ixuanxiu/Public/images/avatar.jpg" />
                        <p>卞春荣</p>
                    </div>
                    <div class="col-md-3 teacher_avatar">
                        <img src="/ixuanxiu/Public/images/avatar.jpg" />
                        <p>卞春荣</p>
                    </div>
                    <div class="col-md-3 teacher_avatar">
                        <img src="/ixuanxiu/Public/images/avatar.jpg" />
                        <p>卞春荣</p>
                    </div>
                    <div class="col-md-3 teacher_avatar">
                        <img src="/ixuanxiu/Public/images/avatar.jpg" />
                        <p>卞春荣</p>
                    </div>
                    <div class="col-md-3 teacher_avatar">
                        <img src="/ixuanxiu/Public/images/avatar.jpg" />
                        <p>卞春荣</p>
                    </div>
                    <div class="col-md-3 teacher_avatar">
                        <img src="/ixuanxiu/Public/images/avatar.jpg" />
                        <p>卞春荣</p>
                    </div>
                    <div class="col-md-3 teacher_avatar">
                        <img src="/ixuanxiu/Public/images/avatar.jpg" />
                        <p>卞春荣</p>
                    </div>
                    <div class="col-md-3 teacher_avatar">
                        <img src="/ixuanxiu/Public/images/avatar.jpg" />
                        <p>卞春荣</p>
                    </div>
                    <div class="col-md-3 teacher_avatar">
                        <img src="/ixuanxiu/Public/images/avatar.jpg" />
                        <p>卞春荣</p>
                    </div>
                    <div class="col-md-3 teacher_avatar">
                        <img src="/ixuanxiu/Public/images/avatar.jpg" />
                        <p>卞春荣</p>
                    </div>
                    <div class="col-md-3 teacher_avatar">
                        <img src="/ixuanxiu/Public/images/avatar.jpg" />
                        <p>卞春荣</p>
                    </div>                    
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="links">
        <div class="row">
            <div class="col-md-8" id="links">
                <h4><span class="glyphicon glyphicon-link"></span> 友情链接</h4><hr />
                <div class="col-md-2 links">
                    <a href="http://green.njtech.edu.cn" target="_blank">绿荫工作室</a>
                </div>
                <div class="col-md-2 links">
                    <a href="http://blog.xjh1994.com" target="_blank">X的博客</a>
                </div>
                <div class="col-md-2 links">
                    <a href="http://www.zts1993.com" target="_blank">Z的博客</a>
                </div>
                <div class="col-md-2 links">
                    <a href="http://cms.xjh1994.com" target="_blank">GreenCMS</a>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
      <div class="container">
        <p class="text-muted">©2014 <a href="http://green.njtech.edu.cn" target="_blank">GreenStudio</a> <a href="<?php echo U('Admin/Index');?>">爱选修</a></p>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/ixuanxiu/Public/js/jquery.min.js"></script>
    <script src="/ixuanxiu/Public/dist/js/bootstrap.min.js"></script>
  </body>
</html>