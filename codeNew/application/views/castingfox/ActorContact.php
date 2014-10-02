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
  

<script src="external/jquery/jquery.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<style type="text/css">
  
  
</style>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,700,300,800' rel='stylesheet' type='text/css'>
  
</head>

<body class="container" style="background-color:#47413B;width:100%">
<div style="height:40px"></div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-4 column">
		</div>
		<div class="col-md-8 column font10">
    <h3 class="text-center text-danger">
        <p class="font10"><?php echo $name; ?></p>
      </h3>
      
        <h6 class="text-center font10"><?php echo $job_title; ?></h6>
      <div class="col-md-12 column font10" style="padding-left:80px" align="left">
			
				<div style="height:50px;width:100px;float:left"> <a href="<?php echo base_url();?>index.php?/castingfox/profile/<?php echo $id;?>" class="anchor font1">PROFILE</a></div>     
			    <div style="height:50px;width:100px;float:left"> <a href="#" class="anchor font1"> RESUME</a></div>
			    <div style="height:50px;width:100px;float:left"><a href="#" class="anchor font1"> MEDIA</a></div>
			    <div style="height:50px;width:100px;float:left"> <a href="<?php echo base_url();?>index.php?/castingfox/actorPhotos/<?php echo $id;?>" class="anchor font1">PHOTO</a></div>
			    <div style="height:50px;width:100px;float:left"> <a href="<?php echo base_url();?>index.php?/castingfox/actorContact/<?php echo $id;?>" class="anchor font1" style="color:#FF7F50">CONTACT</a></div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-4 column">
			<div class="row clearfix">
				<div class="col-md-12 column" align="right">
					<div ><img src="<?php echo base_url(); ?>assets/img/uploads/<?php echo $image; ?>" width="200px" height="180px" alt="actor_image"/></div>
				</div>
			</div>
       <div style="height:5px"></div>
			<div class="row clearfix">
				<div class="col-md-12 column" align="right">
          <div style="height:40px;width:200px;border-color:white;background-color:#000000;padding-left:10px" >
            <div style="height:40px;width:180px;float:left;padding-top:10px;color:white;padding-left:10px;"><a href="" class=" anchor1" style="float:left"><i class="glyphicon glyphicon-star orange" ></i>&nbsp;&nbsp;Add to bookmarks</a></div> 
           
          </div>
          <div style="height:5px"></div>
          <div style="height:40px;width:200px;border-color:white;background-color:#000000;padding-left:10px" >
            <div style="height:40px;width:180px;float:left;padding-top:10px;color:white;padding-left:10px;"><a href="<?php echo base_url();?>index.php?/castingfox/actorContact/<?php echo $id;?>" class=" anchor1" style="float:left"><i class="glyphicon glyphicon-envelope orange" ></i>&nbsp;&nbsp;Write a Message</a></div> 
          
          </div>
        </div>
			</div>
		</div>
		<div class="col-md-8 column">
			<div class="row clearfix">
				<div class="col-md-12 column round" style=" background-color:#FFFFFF;padding-left:20px">
					<br>
      <div style="height:30px"><h4 class="font1"> Message me on Audition Fox</h4>
      </div>
      <br>
      <div style="height:100px"><textarea placeholder="Type here to send me a message" class="round" style="height:80px;width:600px"></textarea>  </div>
      <div align="center" >
        <button class="myBtn button1" style="width: 150px">Send message
         </button>
      </div>
      <hr>
      <div style="height:40px" align="left"><h4 class="font1">Contact info
       </h4> 
      </div>
       <div style="padding-left:80px">
         <div style="height:30px;float:left">Email</div>
         <div style="float:left">&nbsp;<u><?php echo $email; ?></u>
       </div>
       </div>   
      

















				</div>

			</div>
		</div>
	</div>

</body>