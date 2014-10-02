<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Casting Fox!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
    <!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
    <!--script src="js/less-1.3.3.min.js"></script-->
    <!--append ‘#!watch’ to the browser URL, then refresh the page. -->

    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/jquery-ui.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="img/favicon.png">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/scripts.js"></script>
    <script type="text/javascript" src="assets/js/enscroll.min.js"></script>
    <script src="assets/js/jquery.lazyload.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>


    <script type="text/javascript" src="external/jquery/jquery.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui.js"></script>
    <script type="text/javascript" src="assets/js/tooltip.js"></script>
    <script type="text/javascript" src="assets/js/popover.js"></script>
  
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,300,800' rel='stylesheet' type='text/css'>

 
 <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/jPages.css">
  <link rel="stylesheet" href="assets/css/animate.css">

  <script src="assets/js/js.js"></script>
  <script src="assets/js/jPages.js"></script>
  <script src="assets/js/jquery.lazyload.js"></script>

  <style type="text/css">
  .holder {
    text-align: right;
    margin: 15px 0;
  }

  .holder a {
    font-size: 12px;
    cursor: pointer;
    margin: 0 5px;
    color: #333;
    text-decoration: none;
  }

  .holder a:hover {
    background-color: #222;
    color: #fff;
  }

  .holder a.jp-previous { margin-right: 15px; }
  .holder a.jp-next { margin-left: 15px; }

  .holder a.jp-current, a.jp-current:hover {
    color: #FF4242;
    font-weight: bold;
  }

  .holder a.jp-disabled, a.jp-disabled:hover {
    color: #bbb;
  }

  .holder a.jp-current, a.jp-current:hover,
  .holder a.jp-disabled, a.jp-disabled:hover {
    cursor: default;
    background: none;
  }

  .holder span { margin: 0 5px; }
  </style>

</head>

<body>
    <div class="container1" style="padding-top: 10px;
padding-bottom: 10px;border-bottom: 1px solid rgb(206, 202, 202);">
        <div class="row clearfix" style="">
            <div>
                <nav class="navbar navbar-default font1" style="padding-left:30px" role="navigation">
                    <div class="navbar-header" style="">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="#">How it works </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php?/castingfox/Actors">Find actor </a>
                            </li>
                            <li>
                                <a href="#">Help/FAQ</a>
                            </li>
                            <li class="more">
                                <a href="#">More<span class="glyphicon glyphicon-chevron-down"></span></a>

                            </li>
                        </ul>

                        </li>

                        </ul>
                        <div style="position:absolute;width:95%;text-align:center;z-index:-1">
                            <img style="margin:0 auto" height="60px" width="130px" src="assets/img/logo/castingFoxLogo.png" alt="">
                        </div>
                        <ul class="nav navbar-nav navbar-right" style="padding-right:80px">
                            <li>
                                <!-- <a href="#">Login</a> -->

                                <a href="#" data-toggle="modal" data-target="#myModal">Login</a>

                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php?/castingfox/signup">Sign up </a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="Modal">I am a actor</a>
                            </li>

                        </ul>
                    </div>

                </nav>
            </div>

        </div>
    </div>
    <div style="position:relative;">
        <div id="TrSlider" class="TrSlideUp" style="background:white;width:100%;border-bottom:1px solid gray">
            <div class="container1">
                <div class="row clearfix">
                    <div class="col-md-6 column" style='padding-left:325px;'>
                        <div style="padding: 21px 0px 15px 0px;">
                            <input type='textbox' class="paddingtopbottom fontsize12" placeholder="Search this site" />
                            <label class="glyphicon glyphicon-search searchicon" style="transform: rotateY(180deg); color:rgb(169,169,169);font-size: 20px;">&nbsp;</label>
                        </div>
                        <ul class="list-unstyled" id="headerMore">

                            <li>
                                <a href="<?php echo base_url();?>index.php?/castingfox/ABOUT_US" class="orangeanchor fontsize12">About</a>
                            </li>
                            <li>
                                <a href="#" class="orangeanchor fontsize12">Help/FAQS</a>
                            </li>
                            <li>
                                <a href="#" class="orangeanchor fontsize12">Privacy and term</a>
                            </li>
                            <li>
                                <a href="#" class="orangeanchor fontsize12">Blog</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php?/castingfox/contact" class="orangeanchor fontsize12">Contact us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 column">
                        <div style="padding: 21px 0px 15px 0px;">Helpline</div>
                        <div class="fontsize12" style="padding-top:5px;">E mail <span style='padding-left:40px;'><a href="#" class="orangeanchor fontsize12" >TheManger@CastingFox.Com</a></span>
                        </div>
                        <div class="fontsize12" style="padding-top:5px;">Phone<span style='padding-left:40px;'>+91 900 407 4435 (online)</span>
                        </div>
                        <div class="fontsize12" style="padding-left:77px; padding-top:5px;">M-F 10AM-7PM</div>
                    </div>

                </div>

            </div>
        </div>
    </div>


