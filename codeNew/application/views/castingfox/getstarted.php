<?php include'header.php'; ?>

<div class="container1 containerBGhome">
	<div class="row clearfix">
		<div class="col-md-12 column">
		<br/>
		<br/>
			<h1 class="text-center font2">
				JUMPSTART YOUR CASTING
			</h1>
			<p class="text-center">
			</p>
			<div class="text-center font1" style='font-size:16px;'>
				<span>Post your casting to professional agents/actors.</span><br/>
			
				<span>Manage photos in one convenient place.</span>
			</div><br/><br/><br/>
			
			<div class="row clearfix">
				<div class="column text-center roundeddiv" style="padding:40px;"><br/>
					<p class="font9">POST YOUR CASTING FOR FREE!</p>
					</br>
					<form action="<?php echo base_url();?>index.php?/castingfox/check" id="myform" method="post">
					<div class="row clearfix" >
					 <input type="text" style="width:275px;padding:18px;border-radius:2px;outline:none;border:none"  name="email" placeholder="Email-Id" class="mytextbox paddingleft font1" />
					 <input type="submit"id="getInvite" value="Get Started" class="squareBtn button1"style="padding: 8px 25px;border-radius: 2px;" />
					</div>
					</form>
					<br/>


				</div>

				<div class="col-md-4 column">
                <div style="position: fixed;bottom: 10px;right: 20px;" align="right" >
						<a href="#"><span style="display:inline-block;" class="socialIcon-facebook"></span></a>
						<a href="#"><span style="display:inline-block;" class="socialIcon-twitter"></span></a>
						<a href="#"><span style="display:inline-block;" class="socialIcon-linkdin"></span></a>
						<a href="#"><span style="display:inline-block;" class="socialIcon-googleplus"></span></a>
						<a href="#"><span style="display:inline-block;" class="socialIcon-youtube"></span></a></div>
	
				</div>
			</div>
		</div>
		<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
				
	</div>
</div>


<?php include'footer.php'; ?>
<script>
$('#myform').on('submit', function(ev) {
    
    $('#myModal').modal('show'); 
ev.preventDefault();
    });

</script>