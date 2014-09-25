<?php include 'header.php';?>
<body >
<div class="container1 containerBG2">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row clearfix">
				<div class="col-md-2 column">
				</div>
				<div class="col-md-8 column">
					<h2 class="text-center font9" style="padding: 15px 0px" >
					  POST YOUR CASTING.
					</h2>
					<div class="row clearfix" style="background-color:#fbfbfb;">
					<br/>
					<br/>
						<div class="col-md-2 column">
						</div>
						<div class="col-md-8 column">
						<form action="<?php echo base_url();?>castingfox/newSignUp" method="post">
						<div class='text-center font2' style="font-size:18px;">COMPLETE YOUR REGISTRATION.</div><br/>
						<div class ="text-center">
						<div class="fontsize12"><span class="font3">Already Registered?</span><a href="#" class="orangeanchor"data-toggle="modal" data-target="#loginModal">Log in here</a>
						</div><br/><br/>
							<div class="row clearfix">
								<div class="col-md-6 column">
									 <input type="text" class="paddingtopbottom fontsize12" name="email" placeholder="Email Id" style="width:240px;"/>
								</div>
								<div class="col-md-6 column">
									 <input type="text" class="paddingtopbottom fontsize12" name="password" placeholder="Password(Min. 8 character)" style="width:240px;" />
								</div>
							</div><br/>
							<div class="row clearfix">
								<div class="col-md-4 column">
									 <input type="text" class="paddingtopbottom fontsize12" name="first" placeholder="First name" style="width:155px;height:26px;"/>
								</div>
								<div class="col-md-4 column">
									  <input type="text" class="paddingtopbottom fontsize12" name="middle" placeholder="Middle name" style="width:155px;height:26px;"/>
								</div>
								<div class="col-md-4 column">
									  <input type="text" class="paddingtopbottom fontsize12" name="last" placeholder="Last name" style="width:155px;height:26px;"/>
								</div>
							</div><br/>
							<div class="row clearfix">
								<div class="col-md-4 column">
										 <select class="font7 paddingtopbottom fontsize12" name="dropdown" style="width:155px;height:26px;">
										 <option>Gender</option>
										 <option >Male</option>
										 <option >Female</option>	</select>															</div>
								<div class="col-md-4 column">
									  <input type="text" class="paddingtopbottom fontsize12" name="companyname" placeholder="Company name" style="width:155px;height:26px;"/>
								</div>
								<div class="col-md-4 column">
									  <input type="text" class="paddingtopbottom fontsize12" name="pincode" placeholder="pincode" style="width:155px;height:26px;"/>
								</div>
							</div><br/>
							<div class="row clearfix">
								<div class="col-md-4 column">
									  <input type="text" class="paddingtopbottom fontsize12" name="mobileno" placeholder="Mobile no" style="width:155px;height:26px;"/>
								</div>
								<div class="col-md-8 column">
									<p class="font5 fontsize12">
										Your mobile no. will not be shared with actors.
									</p>
								</div>
							</div><br/>
							<div style="display:table;padding-left: 15px;" class="fontsize12"><input type="checkbox" name="informed" value="1" style="width:20px;height:20px;"/>&nbsp;&nbsp;<span class="font1" style="vertical-align:middle;display:table-cell;">
							 Keep me informed about new features on Casting Fox.
							</span></div><br/>
							<div class="text-center"><input type="submit" value="Sign Up" class="myBtn button1 fontsize12"/></div>
							<br/>
							</form>
							<p class="text-center font3" style="font-size:10px;">
								By signing up, you agree to our <a class="anchortext" >Privacy Policy</a> and <a class="anchortext" href="#">Terms of Service</a>.
							</p>
						</div>
						<div class="col-md-2 column">
						</div>
					</div>

				</div>
				<br/>
				 <br/>
				<div class="col-md-2 column">
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'loginModal.php';?>
<?php include 'footer.php';  ?>