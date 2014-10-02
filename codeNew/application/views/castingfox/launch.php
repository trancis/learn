
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
<link href='http://fonts.googleapis.com/css?family=Raleway:400,700,300,800' rel='stylesheet' type='text/css'>
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
  

</head>

<body class="containerBG1">

<div class="container ">
	<div class="row clearfix">
		<div class="col-md-12 column">
		<br/>
		<br/>
		<div align="center"><img src="assets/img/logo/CastingFoxLogo.png" alt="casting fox"/><br/><br/>
			<h2 class="text-center font2">
				<b>JUMPSTART YOUR CASTING</b>
			</h2>
			<p class="text-center font6">
				Post your casting to agents/actors in Mumbai. Manage photos conveniently.
			</p><br/><br/><br/>
			<div class="row clearfix" id="newsLetter">
				<div class="column text-center roundeddiv" style="padding:40px;"><br/>
					<p class="font9">ARE YOU A CASTING DIRECTOR? JOIN US!</p>
					 </br>
					 <form method="post" onsubmit="return false;">
		        <div class="row clearfix" >
					 <input type="text" style="width:275px;padding:18px;border-radius:2px;outline:none;border:none"  name="email" id='email' placeholder="Email-Id" class="mytextbox paddingleft " />
					 <input type="submit" id="getInvite" value="Get an Invite" class="squareBtn button1"style="padding: 8px 25px;border-radius: 2px;" />
				</div></form>
				
					<br/>
					<div id="getMessage" class="font13"></div>
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
				</div>
			<div class="row clearfix" id="thankingNewsLetter" style="display:none">
				 <div class="column text-center roundeddiv" style="padding:30px 90px; "><br/>
					<p class="font9">THANKS FOR SIGNING UP!</p>
					</br>
					<div class="row clearfix" >
					   <p class="text-center font8">
						<font size="2px">You'll be the first to know when we launch!</font>
					</p>
					<div class="text-center font8">
						<font size="2px">Meanwhile check us out at facebook (see link below)</font>
					</div>
					</div>
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
                </div>
   				
                
			</div>
                
   				
                
			</div>
		</div>
	</div>
			<br/>
				<br/>
</div>

	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/scripts.js"></script>
<script type="text/javascript">
$(document).ready(function(){




$("#getInvite").click(function(){
  var email=$("#email").val();
    
        if ($.trim(email).length == 0) 
        {

            alert('Please Enter Email Address');
            $("#email").addClass("has-error1");
            return false;
        }

        if (validateEmail(email)) 
        {

                 $.ajax({
                             type: "post",
                             url: "<?php echo base_url();?>index.php?/castingfox/checkemail",
                             dataType: 'html',
                             data:"email="+email,
                               success:function(responseData1)
                               { 
                               	//alert(responseData1);
                               	
                                 if(responseData1==0)
                                  {
                                    $.ajax({
                                    type: "post",
                                    dataType: 'html',
                                    url: "<?php echo base_url();?>index.php?/castingfox/newsletter/", 
                                    data:"email="+email,
                                    success: 
                                    function(data)
                                    {

                                   $("#newsLetter").fadeOut(function(){
                                   $("#thankingNewsLetter").fadeIn();
                                   });
                              
                                    },
		                               error: function()
		                               {
		                                   alert('failure');
		                               }
                       });                                
 

                                  }

                                  else{
                                  	$("#getMessage").html('You have already registered!!');
                                  }
                              
                               },
                               error: function()
                               {
                                   alert('failure');
                               }
                       });
       
             
        }

              else {
                    alert('Please Provide Valid Email Address'); 

                    return false;
                }







});



	});

function validateEmail(sEmail) {
var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
if (filter.test(sEmail)) {
return true;
}
else {
return false;
}
}


</script>
