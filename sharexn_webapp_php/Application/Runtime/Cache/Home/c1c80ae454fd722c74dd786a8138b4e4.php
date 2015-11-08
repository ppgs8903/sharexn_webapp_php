<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>分享中心</title>
    <!-- Bootstrap core CSS -->
    <link href="//libs.useso.com/js/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <!--3P FCONT -->
    <!--
    <link href="//cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    -->
    <!-- Custom styles for this template -->

	<link rel="stylesheet" type="text/css" href="/Public/css/sharexn/sharexn.css" />
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!--
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="//libs.useso.com/js/html5shiv/3.6/html5shiv.min.js"></script>
    <script src="//libs.useso.com/js/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
	<body>
        <div class="blog-masthead">
            <div class="container">
                <div class="navbar-header">
                    <a class="blog-nav-item navbar-brand" href="#">
                        <span class="glyphicon glyphicon-home"></span>
                    </a>
                    <button aria-controls="navbar" aria-expanded="false" data-target="#blogNav" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                        <span class="glyphicon glyphicon-list"></span>
                    </button>
                </div>
                <nav class="blog-nav collapse navbar-collapse" id="blogNav">
                    <ul class="nav navbar-nav">
                        <li>
                            <a class="blog-nav-item active" href="#">她在看</a>
                        </li>
                        <li>
                            <a class="blog-nav-item" href="#">都在说</a>
                        </li>
                        <li>
                            <a class="blog-nav-item" href="#">要关注</a>
                        </li>
                        <li>
                            <a class="blog-nav-item" href="#">热分享</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="blog-nav-item" href="#">登录</a>
                        </li>
                        <li>
                            <a class="blog-nav-item" href="#">注册</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="container">

            <div class="blog-header">
            </div>

            <div class="row row-offcanvas row-offcanvas-left">
                <div class="dropup">
                    <button id="offcanvasBtn" type="button" aria-haspopup="true" aria-expanded="true"
                            class="btn btn-default dropdown-toggle" data-toggle="sidebar"
                            style="position: fixed; left:30px; bottom:30px; z-index:30;">
                        <span class="glyphicon glyphicon-transfer"></span>
                    </button>
                </div><!-- /.absolute Button-->
                <div id="sidebar" class="col-sm-2 sidebar-offcanvas">
                    <div class="list-group">
                        <a class="list-group-item active" href="#">Link</a>
                        <a class="list-group-item" href="#">Link</a>
                        <a class="list-group-item" href="#">Link</a>
                        <a class="list-group-item" href="#">Link</a>
                        <a class="list-group-item" href="#">Link</a>
                        <a class="list-group-item" href="#">Link</a>
                        <a class="list-group-item" href="#">Link</a>
                        <a class="list-group-item" href="#">Link</a>
                        <a class="list-group-item" href="#">Link</a>
                        <a class="list-group-item" href="#">Link</a>
                    </div>
                </div><!-- /.blog-sidebar -->

                <div class="col-sm-7 blog-main">

                    <div class="form-group">
                        <div class="input-group">
                                <!--
                                <input type="text" class="form-control" style="height: 100px;">
                                -->
                            <textarea class="form-control" placeholder="我的状态：" style="height:100px; resize: none;"></textarea>
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button" style="height: 100px;">
                                    <span class="glyphicon glyphicon-share-alt"></span>
                                </button>
                                <button class="btn btn-default" type="button" style="height: 100px;">
                                    <span class="glyphicon glyphicon-paperclip"></span>
                                </button>
                            </span>
                        </div>
                    </div><!-- /.statusBar -->

                    <div class="blog-main-selectBar">
                        <ul class="nav nav-tabs">
                            <li role="presentation" class="active"><a href="#">我的朋友圈</a></li>
                            <li role="presentation"><a href="#">我的发布</a></li>
                            <li role="presentation"><a href="#">我的消息</a></li>
                        </ul>
                    </div><!-- /.blog-main-selectBar -->

                    <div>
                        <div class="row-md-12">
                            <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTBkNmQ1ODA0MSB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1MGQ2ZDU4MDQxIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxNC41IiB5PSIzNi41Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="width: 64px; height: 64px;">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">美好的一天</h4>
                                <p class="blog-post-meta">2015年 1月 1日<a href="#">Mark</a></p>
                                一段测试的代码： 1234567890，qertyuiopasdfghjklzxcvbnm.你好12345678
                            </div>
                        </div>

                        <div class="blog-main-discussion">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" placeholder="我也要唠叨一下 ： )">
                                <span class="input-group-btn">
                                    <button type="button" class="btn">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </button>
                                </span>
                                <span class="input-group-btn">
                                    <button type="button" class="btn">
                                        <span class="glyphicon glyphicon-share"></span>
                                    </button>
                                </span>
                                <span class="input-group-btn">
                                    <button type="button" class="btn">
                                        <span class="glyphicon glyphicon-thumbs-up"></span>
                                    </button>
                                </span>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-primary">
                                        <span class="glyphicon glyphicon-link"></span>
                                    </button>
                                </span>
                            </div><!-- /input-group -->
                        </div><!-- /. button like-->
                        <hr>
                    </div><!--end DOC -->


                    <div>
                        <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <video id="myVideo" width="100%" height="100%" controls>
                                    <source src="/i/movie.mp4" type="video/mp4">
                                    <source src="/i/movie.ogg" type="video/ogg">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                        <div class="blog-main-discussion">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" placeholder="我也要唠叨一下 ： )">
                                <span class="input-group-btn">
                                    <button type="button" class="btn">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </button>
                                </span>
                                <span class="input-group-btn">
                                    <button type="button" class="btn">
                                        <span class="glyphicon glyphicon-share"></span>
                                    </button>
                                </span>
                                <span class="input-group-btn">
                                    <button type="button" class="btn">
                                        <span class="glyphicon glyphicon-thumbs-up"></span>
                                    </button>
                                </span>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-primary">
                                        <span class="glyphicon glyphicon-link"></span>
                                    </button>
                                </span>
                            </div><!-- /input-group -->
                        </div><!-- /.col-lg-6 --> <!-- /. button like-->
                        <hr>
                    </div><!--./ end video -->

                    <div>
                        <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div>
                                    <div class="row-md-4">
                                        <div class="col-xs-4 col-md-4">
                                            <a href="#" class="thumbnail">
                                                <img src="" alt="...">
                                            </a>
                                            <div class="caption">
                                                <h4>dsadsadasd</h4>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-md-4">
                                            <a href="#" class="thumbnail">
                                                <img src="" alt="...">
                                            </a>
                                            <div class="caption">
                                                <h4>dsadsadasd</h4>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-md-4">
                                            <a href="#" class="thumbnail">
                                                <img src="" alt="...">
                                            </a>
                                            <div class="caption">
                                                <h4>dsadsadasd</h4>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-md-4">
                                            <a href="#" class="thumbnail">
                                                <img src="" alt="...">
                                            </a>
                                        </div>
                                        <div class="col-xs-6 col-md-4">
                                            <a href="#" class="thumbnail">
                                                <img src="" alt="...">
                                            </a>
                                        </div>
                                        <div class="col-xs-6 col-md-4">
                                            <a href="#" class="thumbnail">
                                                <img src="" alt="...">
                                            </a>
                                        </div>
                                        <div class="col-xs-6 col-md-4">
                                            <a href="#" class="thumbnail">
                                                <img src="" alt="...">
                                            </a>
                                        </div>
                                    </div>
                                </div><!--/. end pic -->
                            </div>
                        </div><!--/. end panel -->
                        <div class="blog-main-discussion">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" placeholder="我也要唠叨一下 ： )">
                                <span class="input-group-btn">
                                    <button type="button" class="btn">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </button>
                                </span>
                                <span class="input-group-btn">
                                    <button type="button" class="btn">
                                        <span class="glyphicon glyphicon-share"></span>
                                    </button>
                                </span>
                                <span class="input-group-btn">
                                    <button type="button" class="btn">
                                        <span class="glyphicon glyphicon-thumbs-up"></span>
                                    </button>
                                </span>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-primary">
                                        <span class="glyphicon glyphicon-link"></span>
                                    </button>
                                </span>
                            </div><!-- /input-group -->
                        </div><!-- /.col-lg-6 --> <!-- /. button like-->
                        <hr style="display: none">
                    </div>

                    <nav>
                        <ul class="pager">
                            <li><a href="#">Previous</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </nav>

                </div><!-- /.blog-main -->

                <div class="col-sm-2 col-sm-offset-1 blog-sidebar">
                    <div class="sidebar-module sidebar-module-inset">
                        <div class="sidebar-module sidebar-module-inset">
                            <label for="searchBox">Search:</label>
                            <div id="searchBox" class="input-group input-group-sm">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                            </span>
                            </div><!-- /input-group -->
                        </div><!-- /.col-lg-6 -->
                        <h4>Tag:</h4>
                        <p>
                            <a>123</a>
                            <a>123</a>
                            <a>123</a>
                            <a>123</a>
                            <a>123</a>
                            <a>123</a>
                            <a>123</a>
                            <a>123</a>
                            <a>123</a>
                            <a>123</a>
                            <a>123</a>
                            <a>123</a>
                            <a>123</a>
                            <a>123</a>
                            <a>123</a>
                        </p>
                    </div>
                    <div class="sidebar-module">
                        <h4>广告</h4>
                        <ol class="list-unstyled">
                            <li><a href="#">March 2014</a></li>
                        </ol>
                    </div>
                    <div class="sidebar-module">
                        <h4>Elsewhere</h4>
                        <ol class="list-unstyled">
                            <li><a href="#">GitHub</a></li>
                        </ol>
                    </div>
                </div><!-- /.blog-sidebar -->
            </div><!-- /.row -->

        </div><!-- /.container -->
        <footer class="blog-footer">
            <p>开发 <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@jason tao</a>.</p>
            <p>
                <a href="#">Back to top</a>
            </p>
        </footer>
    </body>
</html>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="//libs.useso.com/js/jquery/2.1.1/jquery.min.js"></script>
<script src="//libs.useso.com/js/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!--
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
-->
<script type="text/javascript">
    $(document).ready(function () {
        $('#offcanvasBtn').click(function () {
            $('.row-offcanvas').toggleClass('active');
            $('body').toggleClass('offCanvasScroll');
        });
    });
</script>