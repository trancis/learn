<?php include 'header.php';?>
<div class="containerBG">
<div class="container1 " >
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row clearfix">
				<div class="col-md-4 column">
				</div>
				<div class="col-md-8 column" style="padding-top:110px;">
					<h3 class="text-center font9" style="font-size:45px;">
						Find Your Next Audition
					</h3>
					<p class="text-center">
					</p>
					<div>
						<center><small><span class="font8" style="font-size: 15px;">Be your own agent. Access every casting call in town.</span></small></center>
					</div></br></br></br>
					<form action="<?php echo base_url();?>index.php?/auditionfox/signupactor" method="post" onsubmit="return validateMe();">
					<p class="text-center font9" style="font-size: 15px;">
						ENTER YOUR E-MAIL ID TO GET STARTED.
					</p>
					<br>
					
						<div style="display:block;text-align:center;margin:0px auto">
							<input type="text" name="email" id='email' class="font7" placeholder="E-mail ID" style="padding:11px;width:330px" />						
  

							 <button type="submit" class="squareBtn button1" style="padding:12px 44px" >SignUp</button>
					    </div>
					    </form>
							 
						<div style="position: fixed;bottom: 10px;right: 20px;" align="right" >
						<a href="#"><span style="display:inline-block;" class="socialIcon-facebook"></span></a>
						<a href="#"><span style="display:inline-block;" class="socialIcon-twitter"></span></a>
						<a href="#"><span style="display:inline-block;" class="socialIcon-linkdin"></span></a>
						<a href="#"><span style="display:inline-block;" class="socialIcon-googleplus"></span></a>
						<a href="#"><span style="display:inline-block;" class="socialIcon-youtube"></span></a></div>
				
					
				</div>
			</div>
		</div>
	</div>
</div>
<script>
     function validateMe(){
	 var email=$("#email").val();
	 if ($.trim(email).length == 0) 
        {

            alert('Please Enter Email Address');
            $("#email").addClass("has-error1");
            return false;
        }
     if (validateEmail(email)) 
     {

		return true;
	 }

	else {

		alert('Provide Valid Email Address');
		return false;
		}
   }
// Function that validates email address through a regular expression.

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
<?php include 'footer.php';?>