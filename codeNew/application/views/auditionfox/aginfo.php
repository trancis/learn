<?php include 'header.php';?>
<div class="container" style="background-color:#fbfbfb;width: 100%;" >
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row clearfix">
				<div class="col-md-1 column">
				</div>
				<div class="col-md-7 column">
					<h3 class="font3" style="color:rgb(173, 167, 167)!important;">
						Account
					</h3>
					<div class="row clearfix">
						<div class="col-md-12 column">
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-md-8 column">
							<p style="padding: 16px 0px 0px 0px; color:rgb(173, 167, 167)!important;" class="font3">
								<i class="glyphicon glyphicon-circle-arrow-left" style="color:rgb(128, 122, 122);"></i>&nbsp;BACK TO ACCOUNT SETTINGS
							</p>
						</div>
						<div class="col-md-4 column">
						</div>
					</div>
					<div class="row clearfix" style="border:2px solid #DDD7D7;">
						<div class="col-md-12 column">
							<p style="padding: 27px 0px 0px 22px; font-size: 15px; color:rgb(173, 167, 167)!important;">
								Edit Agent Info
							</p>
							<div class="row clearfix" style="padding: 49px 11px 25px 49px;">
								<div class="col-md-6 column">
									 <font  class="font3" >Agency name</font><br><input type="text mytextbox"><br><br>
									 <font  class="font3" >City</font><br><input type="text mytextbox"><br><br>
									 <font  class="font3" >Phone no.</font><br><input type="text mytextbox">
								</div>
								<div class="col-md-6 column">
									 <font  class="font3" >Agency division (if applicable)</font><br><input type="text mytextbox paddingleft" placeholder="e.g. Commercial, Children, Dance" style="width:225px;"><br><br>
									  <font  class="font3" >Notes/Clarifications</font><br><textarea rows="5" cols="28" class="mytextbox paddingleft" placeholder="Any additional info which can help us verify your agent."></textarea>
<br><br>
								
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-md-12 column text-center">
									 <br><input type="text mytextbox" placeholder="Enter password to confirm changes." style="width: 265px;padding: 0px 16px;"><br><br> 
									 <button type="button" class="myBtn button1" style="width: 140px;">Update</button>
								</div>
							</div>
							<div class="row clearfix" style="padding: 14px 5px 0px 9px;">
								<div class="col-md-12 column">
									<p>
									</p>
									<div>
										Note: This info will be updated only after we obtain confirmation from the agent. Please
									</div>
									<div>
										<span>allow 3 working days for the change to be reflected.</span>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 column">
					<?php include 'sidebar.php';?>
				</div>
				<div class="col-md-1 column">
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php';?>