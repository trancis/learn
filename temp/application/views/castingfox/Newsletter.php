<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Bootstrap 3, from LayoutIt!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">

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
</head>

<body class="containerBG1">

<div class="container ">
	<div class="row clearfix">
		<div class="col-md-12 column">
		<br/>
		<br/>
		<div align="center"><img src="assets/img/logo/CastingFoxLogo.png" alt="casting fox"/><br/><br/>
			<h3 class="text-center font2">
				JUMPSTART YOUR CASTING
			</h3>
			<p class="text-center font1">
				Post your casting to agents/actors in Mumbai. Manage photos conveniently.
			</p><br/>
			<div class="row clearfix">
				<div class="col-md-4 column">
				</div>
				<div class="col-md-4 column text-center roundeddiv"><br/>
					<p class="font9">
						ARE YOU A CASTING DIRECTOR?JOIN US!
					</p>
					</br> <form action="<?php echo base_url();?>castingfox/newsletter" method="post">
					<div class="row clearfix" >
					
						<div class="col-md-8 column">
							 <input type="text" style="275px"  name="email" placeholder="Email-Id" class="mytextbox paddingleft"/>
						</div>
						<div class="col-md-4 column" >
							 <input type="submit" value="Get an Invite" class="squareBtn button1"/>				</div>
						</div></form>
					<br/>
						<div class="line"> </div>
						<br/>
						<div align="center" >
						<a href="#"><span style="display:inline-block;" class="socialIcon-facebook"></span></a>
						<a href="#"><span style="display:inline-block;" class="socialIcon-twitter"></span></a>
						<a href="#"><span style="display:inline-block;" class="socialIcon-linkdin"></span></a>
						<a href="#"><span style="display:inline-block;" class="socialIcon-googleplus"></span></a>
						<a href="#"><span style="display:inline-block;" class="socialIcon-youtube"></span></a>
						</div>
                <br/>
				</div>
                
   				<div class="col-md-4 column">
				</div>
                
			</div>
		</div>
	</div>
			<br/>
				<br/>
</div>
<?php include 'footer.php'; ?>
