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

    <title><?php echo ($course["course_name"]); ?> -- 爱选修 -- 工大选修课交流社区</title>

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
            <li><a href="#">课程</a></li>
            <li><a href="#about">推荐</a></li>
            <li><a href="#contact">我的选修</a></li>
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
            <li><a href="">登录</a></li>
            <li><a href="http://202.119.248.199/default2.aspx" target="_blank">选课系统</a></li>
            <li><a href="">关于本站</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- 主体 -->
    <div class="container">
      <div class="jumbotron">
        <h3>
          <?php echo ($course["course_name"]); ?>
          <span class="course_teacher"><a href=""><img src="/ixuanxiu/Public/images/avatar.jpg" width="24px" height="24px" /> <?php echo ($course["course_tid"]); ?></a></span>
        </h3>  
        <div class="course_intro">
          <!-- <h4>课程信息：</h4> -->
          <h5>【星级评价】 
              <span class="glyphicon glyphicon-star"></span>
              <span class="glyphicon glyphicon-star"></span>
              <span class="glyphicon glyphicon-star"></span>
              <span class="glyphicon glyphicon-star"></span>
              <span class="glyphicon glyphicon-star-empty"></span>
          </h5>
          <h5>【上课地点】 <?php echo ($course["course_place"]); ?></h5>
          <h5>【上课时间】 <?php echo ($course["course_time"]); ?></h5>
          <h5>【所属分类】 <a href=""><?php echo ($course["course_cid"]); ?></a></h5>
          <h5>【课程简介】 <?php echo ($course["course_intro"]); ?></h5>
        </div>

        <div class="course_comment">
          <form role="form">
            <div class="form-group">
              <label for="comment">评价课程</label><button type="button" class="btn btn-success pull_right" id="nosign">不点名？</button>
              <div class="course_star">                
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>


              </div>
              <!-- <input type="text" class="form-control" id="comment" placeholder="输入你的评价"> -->
              <textarea class="form-control" id="comment" placeholder="输入你的评价"></textarea>
            </div>
            <button type="submit" class="btn btn-default">提交</button>
          </form>
        </div>
        <hr />
        <div class="course_comments">
            <div class="row">
              <div class="col-md-8" id="comments">   
                  <h4 style="margin-bottom: 20px;"><span class="glyphicon glyphicon-edit"></span> 最新评论</h4>             
                  <div class="comment_box">
                      <a href="" class="pull_left"><img src="/ixuanxiu/Public/images/head.jpg" width="" height="" class="comment_avatar"></a>
                      <h5><a href="">徐精华</a> <span class="comment_font">评论</span> <a href="">公务员能力基础</a> <span class="comment_date">2014.12.16 &nbsp;<span><a href="">赞(12)</a> / <a href="">踩(7)</a></span></span></h5> 
                      <p>老师讲的不错。老师讲的不错。老师讲的不错。老师讲的不错。老师讲的不错。老师讲的不错。老师讲的不错。老师讲的不错。</p>
                  </div><hr />
                  <div class="comment_box">
                      <a href="" class="pull_left"><img src="/ixuanxiu/Public/images/head.jpg" width="" height="" class="comment_avatar"></a>
                      <h5><a href="">徐精华</a> <span class="comment_font">评论</span> <a href="">公务员能力基础</a> <span class="comment_date">2014.12.16 &nbsp;<span><a href="">赞(12)</a> / <a href="">踩(7)</a></span></span></h5> 
                      <p>老师讲的不错。老师讲的不错。老师讲的不错。老师讲的不错。老师讲的不错。老师讲的不错。老师讲的不错。老师讲的不错。</p>
                  </div><hr />
                  <div class="comment_box">
                      <a href="" class="pull_left"><img src="/ixuanxiu/Public/images/head.jpg" width="" height="" class="comment_avatar"></a>
                      <h5><a href="">徐精华</a> <span class="comment_font">评论</span> <a href="">公务员能力基础</a> <span class="comment_date">2014.12.16 &nbsp;<span><a href="">赞(12)</a> / <a href="">踩(7)</a></span></span></h5> 
                      <p>老师讲的不错。老师讲的不错。老师讲的不错。老师讲的不错。老师讲的不错。老师讲的不错。老师讲的不错。老师讲的不错。</p>
                  </div><hr />
                  <div class="comment_box">
                      <a href="" class="pull_left"><img src="/ixuanxiu/Public/images/head.jpg" width="" height="" class="comment_avatar"></a>
                      <h5><a href="">徐精华</a> <span class="comment_font">评论</span> <a href="">公务员能力基础</a> <span class="comment_date">2014.12.16 &nbsp;<span><a href="">赞(12)</a> / <a href="">踩(7)</a></span></span></h5> 
                      <p>老师讲的不错。老师讲的不错。老师讲的不错。老师讲的不错。老师讲的不错。老师讲的不错。老师讲的不错。老师讲的不错。</p>
                  </div><hr />
                  <div class="comment_box">
                      <a href="" class="pull_left"><img src="/ixuanxiu/Public/images/head.jpg" width="" height="" class="comment_avatar"></a>
                      <h5><a href="">徐精华</a> <span class="comment_font">评论</span> <a href="">公务员能力基础</a> <span class="comment_date">2014.12.16 &nbsp;<span><a href="">赞(12)</a> / <a href="">踩(7)</a></span></span></h5> 
                      <p>老师讲的不错。老师讲的不错。老师讲的不错。老师讲的不错。老师讲的不错。老师讲的不错。老师讲的不错。老师讲的不错。</p>
                  </div><hr />
                  <div class="comment_box">
                      <a href="" class="pull_left"><img src="/ixuanxiu/Public/images/head.jpg" width="" height="" class="comment_avatar"></a>
                      <h5><a href="">徐精华</a> <span class="comment_font">评论</span> <a href="">公务员能力基础</a> <span class="comment_date">2014.12.16 &nbsp;<span><a href="">赞(12)</a> / <a href="">踩(7)</a></span></span></h5> 
                      <p>老师讲的不错。老师讲的不错。老师讲的不错。老师讲的不错。老师讲的不错。老师讲的不错。老师讲的不错。老师讲的不错。</p>
                  </div><hr />
              </div>
              <div class="col-md-4 " id="comments">
                <h4 style="margin-bottom: 20px;"><span class="glyphicon glyphicon-user"></span> 正在修这门课的同学</h4>
                <div class="course_user teacher">
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

                <h4 style="margin-bottom: 20px;"><span class="glyphicon glyphicon-book"></span> 同类课程</h4>
                <div class="same_course">
                  <h5><a href="">品牌策划 薛业清</a></h5>
                  <h5><a href="">企业家精神培养 于志杰</a></h5>
                  <h5><a href="">科学与艺术 付昌义</a></h5>
                  <h5><a href="">书法欣赏 朱仁洲</a></h5>
                  <h5><a href="">品牌策划 薛业清</a></h5>
                  <h5><a href="">企业家精神培养 于志杰</a></h5>
                  <h5><a href="">科学与艺术 付昌义</a></h5>
                  <h5><a href="">书法欣赏 朱仁洲</a></h5>
                </div>
              </div>
          </div>
        </div>
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
    <script src="/ixuanxiu/Public/js/jquery.min.js"></script>
    <script src="/ixuanxiu/Public/dist/js/bootstrap.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        $("#nosign").click(function() {
            $.ajax({
              async : false,
              type: "POST",
              url: "<?php echo U('Course/nosign');?>",
              data: "id=<?php echo ($course['id']); ?>"
              }).done(function(msg){
                // alert("Data Saved: " + msg);
                $("#nosign").attr("disabled", "disabled");
                $("#nosign").text("不点名");
              }).fail(function(xmlHttpRequest, statusText, errorThrown) {
                /*alert(
                "Your form submission failed.\n\n"
                + "XML Http Request: " + JSON.stringify(xmlHttpRequest)
                + ",\nStatus Text: " + statusText
                + ",\nError Thrown: " + errorThrown);*/
              });
        });
      });
    </script>
  </body>
</html>