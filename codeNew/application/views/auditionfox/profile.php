<?php include 'header.php'; ?>
<div class="container" style="background-color:#fbfbfb;width:100%;">

	<div class="row clearfix">
		<div class="col-md-1 column">
		</div>
		<div class="col-md-7 column">
			<div class="row clearfix">
				<div class="col-md-12 column">
					<h3 class="text-left">
						Profile
					</h3>
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="tabbable" id="tabs"  >
				
				<ul class="nav nav-tabs">
					
					<li >
					
						<a href="#tab1" class="anchor font3 active" data-toggle="tab"> Overview</a>
					
					</li>
					<li >
					
						<a href="#tab2" class="anchor font3" data-toggle="tab">Settings</a>
					
					</li>
					<li >
					
						<a href="#tab3" class="anchor font3" data-toggle="tab">Preview my profile</a>
					
					</li>
					
					
				</ul>
				

					</div>

				</div>
			</div>
              <br>

      <div class="tab-content col-md-12 column " >
                  
		            <div class="tab-pane active" id="tab1">
		<div class="col-md-12 column round" style="background-color:#FFFFFF;border-width: 1px; border-style: solid; border-color: black;" >

         <form method="post" action="<?php echo base_url(); ?>index.php?/auditionfox/editProfile"
      <p class="text-left">
						<h4 class="font1">General Information</h4>
					</p>
					<br>
					<div class="row clearfix">
						<div class="col-md-12 column">
							<p>
								Screen Name
							</p>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-md-4 column">
							<p>
								<input type="text" name="first" placeholder="First name" id="" class="paddingtopbottom">
							</p>
						</div>
						<div class="col-md-4 column">
							<p>
								<input type="text" name="second" placeholder="Middle name(optional)" id="" class="paddingtopbottom">
							</p>
						</div>
						<div class="col-md-4 column">
							<p>
								<input type="text" name="last" placeholder="last name" id="" class="paddingtopbottom">
							</p>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-md-12 column">
							<p>
								Job title/type of actor
							</p>
							<p>
								<input type="text" name="jobTitle" placeholder="last name" id="" class="paddingtopbottom">
							</p>
						</div>
					</div>
					
					<div class="row clearfix">
						<div class="col-md-12 column">
							<p>
								Gender
							</p>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-md-12 column" >
							<select style="height:30px;width:150px" name="gender" id="gender">
                             <option>Male</option>
                               <option>Female</option>
                               
                           </select>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-md-12 column">
							<p class="font1">
								<br>Date of birth
							</p>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-md-1 column">
						<input type="text" name="dd" placeholder="DD" maxlength="2" id="" style="padding-right:10px;width:50px" >
						</div>
						<div class="col-md-1 column">
						<input type="text" name="mm" placeholder="MM" maxlength="2" id="" style="padding-right:10px;width:50px">
						</div>
						<div class="col-md-2 column">
						<input type="text" name="yy" placeholder="YYYY" maxlength="4" id="" style="padding-right:10px;width:70px" >
						</div>
						<br>
						<div class="col-md-8 column">
							<p class="font1">
								Your DOB will not be shared with Casting Directors
							</p>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-md-12 column">
							<p>
								<input type="checkbox" id="indian" name="indian" class="myCheckBox" value="1"/><label for="indian" class="font3" style="font-weight:500 !important;"><span></span>&nbsp; I m indian citizen</label>
							</p>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-md-5 column">
							<p>
								 <input type="checkbox" id="passport" name="passport" class="myCheckBox" value="1"/><label for="passport" class="font3" style="font-weight:500 !important;"><span></span>&nbsp;I have passport expiry date</label>
							</p>
						</div>
						<div class="col-md-1 column">
						<input type="text" name="dd1" placeholder="DD" maxlength="2" id="" style="width:40px">
						</div>
						<div class="col-md-1 column">
						<input type="text" name="mm1" placeholder="MM"  maxlength="2" id="" style="width:40px">
						</div>
						<div class="col-md-2 column">
						<input type="text" name="yy1" placeholder="YYYY"  maxlength="4" id="" style="width:60px">
						</div>
						<div class="col-md-3 column">
						</div>
					</div>
					<p>
						<hr>
					</p>
					
					
						<h4 class="font1">Physical characteristics</h4>
					<br>
					
					<div class="row clearfix">
						<div style="height:40px;width:640px">
							<div style="height:40px;width:160px;float:left">
								Age range (I can play):
						</div>
						<div style="height:40px;width:160px;float:left">
								<input type="text" name="min_age">
							</div>
	                       <div style="height:40px;width:20px;float:left">
								to
							</div>
							<div style="height:40px;width:160px;float:left">
								<input type="text" name="max_age">
							</div>
								<div style="height:40px;width:40px;float:left">
								yrs
							</div>
	
						</div>
					</div>
					<br>
					<div class="row clearfix">
						<div class="col-md-4 column">
							<p>
								Complexion
							</p>
							<p>
								<select style="height:30px;width:150px" name="complexion">
                             <option>Select</option>
                               <option>Albino</option>
                               <option>white(US/European)</option>
                               <option>Fair(Kareena Kapoor)</option>
                               <option>Wheatish-(Sonakshi Sinha)</option>
                               <option>Dusky (BipashaBasu)</option>
                               <option>African (Naomi Campbell)</option>

                               
                           </select>
							</p>
						</div>
						<div class="col-md-2 column">
							<p>
								
							</p>
						</div>
						<div class="col-md-2 column">
							<p>
								Weight
							</p>
							<p style="float:left">
								<input type="text" style="width:60px" name="weight">

							</p>
							<p style="float:left">
								&nbsp;kg

							</p>

						</div>

						<div class="col-md-1 column">
							
							
						</div>
						<div class="col-md-3 column">
						</div>
					</div>
					
					<div class="row clearfix">
						<div class="col-md-4 column">
						</div>
						<div class="col-md-2 column">
						</div>
						<div class="col-md-2 column">
						</div>
						<div class="col-md-1 column">
						</div>
						<div class="col-md-3 column">
						</div>
					</div>
					<br>
					<div class="row clearfix">
						<div class="col-md-4 column">
							<p>
								Hair length
							</p>
								

							<select style="height:30px;width:150px" name="hairLength">
                             <option>Select</option>
                               <option>Bald (total)</option>
                               <option>Bald on top</option>
                               <option>Fair(Kareena Kapoor)</option>
                               <option>Receding hairline</option>
                               <option>Crew cut/Buzz cut</option>
                               <option>Ear-length</option>
                                <option>Short hair</option>
                                 <option>Chin-length</option>
                                  <option>Shoulder-length</option>
                                   <option>Below shoulder</option>


                           </select>


						</div>
						<div class="col-md-4 column">
							<p>
								Hair Color
							</p>
							<p>

							<select style="height:30px;width:150px" name="hairColor">
                             <option>Select</option>
                               <option>Bald</option>
                               <option>Dark brown</option>
                               <option>Light brown</option>
                               <option>Salt and pepper
                               </option>
                               <option>Grey
                              </option>
                               <option>Blonde/Yellow</option>
                               <option>Red
                               </option>
                               <option>Mixed/other</option>

                               



                           </select>
</p>
						</div>
						<div class="col-md-4 column">
							<p>
								Eye color
							</p>
							<p>
 
							<select style="height:30px;width:150px" name="eyeColor">
                             <option>Select</option>
                               <option>Black</option>
                               <option>Brown</option>
                               <option>Hazel</option>
                               <option>Grey
</option>
                               <option>Green</option>
                               

                               
						
                           </select>
</p>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-md-4 column">
						</div>
						<div class="col-md-4 column">
						</div>
						<div class="col-md-4 column">
						</div>
					</div>

<div>
My ethnic appearance:
</div>
<div style="border:1px solid black">
	<span style="padding-left: 25px;"><input type="checkbox" class="myCheckBox" name="ethnicapp[]" value="North-Indian" id="NI"><label for="NI"><span></span></label>North Indian</span>
	<span style="padding-left: 135px;"><input type="checkbox" class="myCheckBox" name="ethnicapp[]" value="Caucasian-(US/European)" id="CC"><label for="CC"><span></span></label>Caucasian (US/European)</span><br/>
	<span style="padding-left: 25px;"><input type="checkbox" class="myCheckBox" name="ethnicapp[]" value="South-Indian" id="SI"><label for="SI"><span></span></label>South Indian</span>
	<span style="padding-left: 134px;"><input type="checkbox" class="myCheckBox" name="ethnicapp[]" value="Arabic/Middle-Eastern" id="AME"><label for="AME"><span></span></label>Arabic/Middle Eastern</span><br/>
	<span style="padding-left: 25px;"><input type="checkbox" class="myCheckBox" name="ethnicapp[]" value="North-East-Indian" id="NEI"><label for="NEI"><span></span></label>North-East Indian</span>
	<span style="padding-left: 101px;"><input type="checkbox" class="myCheckBox" name="ethnicapp[]" value="East-Asian-(e.g. Chinese)" id="EA"><label for="EA"><span></span></label>East Asian (e.g. Chinese)</span><br/>
	<span style="padding-left: 25px;"><input type="checkbox" class="myCheckBox" name="ethnicapp[]" value="Sikh" id="SIKH"><label for="SIKH"><span></span></label>Sikh</span>
	<span style="padding-left: 187px;"><input type="checkbox" class="myCheckBox" name="ethnicapp[]" value="African" id="AFR"><label for="AFR"><span></span></label>African</span><br/>
	<span style="padding-left: 25px;"><input type="checkbox" class="myCheckBox" name="ethnicapp[]" value="Nepali" id="NEP"><label for="NEP"><span></span></label>Nepali</span>
	<span style="padding-left: 172px;"><input type="checkbox" class="myCheckBox" name="ethnicapp[]" value="Mixed" id="MIX"><label for="MIX"><span></span></label>Mixed</span><br/><br/>
	
	
</div>
<br/>
<div>Body type</div>
<select class="font5" name="bodytype">
	<option>Select</option>
	<option>Average</option>
	<option>Thin/Slender</option>
	<option>Athletic/Toned</option>
	<option>Curvy</option>
	<option>Muscular/Body builder</option>
	<option>Heavyset/Stocky</option>
	<option>Plus-size</option>
</select><br/><br/>
<div><input type="checkbox" class="myCheckBox" name="piercing" value="1" id="piercing"><label for="piercing"><span></span></label> I have visible piercings (besides nose/ears).</div>
<div><input type="checkbox" class="myCheckBox" name="tattoo" value="1" id="tattoo"><label for="tattoo"><span></span></label>I have visible tattoos.</div>
<div class="linelightgrey" style="padding-top: 30px;"></div>
<div style="padding-top: 30px;">Athletic skills</div>
<div style="padding-top: 40px;"><input type="checkbox" class="myCheckBox" name="licence" value="1" id="licence"><label for="licence"><span></span></label>I have a valid Driver’s License.</div><br/><br/>
<div class="row-clearfix">
<div class="col-md-3 column" style="padding-left: 0px;padding-right: 0px;">
<span><input type="checkbox" class="myCheckBox" name="athletics[]" value="Badminton" id="badminton"><label for="badminton"><span></span></label>Badminton</span><br/>
<span><input type="checkbox" class="myCheckBox" name="athletics[]" value="Body-building" id="bodybuild"><label for="bodybuild"><span></span></label>Body building</span><br/>
<span><input type="checkbox" class="myCheckBox" name="athletics[]" value="Cycling" id="cycling"><label for="cycling"><span></span></label>Cycling</span><br/>
<span><input type="checkbox" class="myCheckBox" name="athletics[]" value="Stunts-(car)" id="stunts"><label for="stunts"><span></span></label>Stunts (car)</span><br/>
<span><input type="checkbox" class="myCheckBox" name="athletics[]" value="Golf" id="golf"><label for="golf"><span></span></label>Golf</span><br/>
<span><input type="checkbox" class="myCheckBox" name="athletics[]" value="Running" id="running"><label for="running"><span></span></label>Running</span><br/>
<span><input type="checkbox" class="myCheckBox" name="athletics[]" value="Skateboarding" id="skateboarding"><label for="skateboarding"><span></span></label>Skateboarding</span><br/>
<span><input type="checkbox" class="myCheckBox" name="athletics[]" value="Swimming" id="swimming"><label for="swimming"><span></span></label>Swimming</span><br/>
<span><input type="checkbox" class="myCheckBox" name="athletics[]" value="Wrestling" id="wrestling"><label for="wrestling"><span></span></label>Wrestling</span>

</div>
<div class="col-md-3 column" style="padding-left: 0px;padding-right: 0px;">
<span><input type="checkbox" class="myCheckBox" name="athletics[]" value="Basketball" id="basketball"><label for="basketball"><span></span></label>Basketball</span><br/>
<span><input type="checkbox" class="myCheckBox" name="athletics[]" value="Boxing" id="boxing"><label for="boxing"><span></span></label>Boxing</span><br/>
<span><input type="checkbox" class="myCheckBox" name="athletics[]" value="Diving" id="diving"><label for="diving"><span></span></label>Diving</span><br/>
<span><input type="checkbox" class="myCheckBox" name="athletics[]" value="Stunts-(bike)" id="bikestunt"><label for="bikestunt"><span></span></label>Stunts (bike)</span><br/>
<span><input type="checkbox" class="myCheckBox" name="athletics[]" value="Gymnastics" id="gym"><label for="gym"><span></span></label>Gymnastics</span><br/>
<span><input type="checkbox" class="myCheckBox" name="athletics[]" value="Scuba-diving" id="scubadiving"><label for="scubadiving"><span></span></label>Scuba diving</span><br/>
<span><input type="checkbox" class="myCheckBox" name="athletics[]" value="Sky-diving" id="skydiving"><label for="skydiving"><span></span></label>Sky diving</span><br/>
<span><input type="checkbox" class="myCheckBox" name="athletics[]" value="Table-tennis" id="tabletennis"><label for="tabletennis"><span></span></label>Table tennis</span>
</div>
<div class="col-md-3 column" style="padding-left: 0px;padding-right: 0px;">
<span><input type="checkbox" class="myCheckBox" name="athletics[]" value="Billiards/Pool" id="pool"><label for="pool"><span></span></label>Billiards/Pool</span><br/>
<span><input type="checkbox" class="myCheckBox" name="athletics[]" value="Cheerleading" id="cheerleading"><label for="cheerleading"><span></span></label>Cheerleading</span><br/>
<span><input type="checkbox" class="myCheckBox" name="athletics[]" value="Equestrian" id="equestrian"><label for="equestrian"><span></span></label>Equestrian</span><br/>
<span><input type="checkbox" class="myCheckBox" name="athletics[]" value="Stunts-(Cycle)" id="cyclestunts"><label for="cyclestunts"><span></span></label>Stunts (Cycle)</span><br/>
<span><input type="checkbox" class="myCheckBox" name="athletics[]" value="Lawn-Tennis" id="lawntennis"><label for="lawntennis"><span></span></label>Lawn Tennis</span><br/>
<span><input type="checkbox" class="myCheckBox" name="athletics[]" value="Shooting" id="shooting"><label for="shooting"><span></span></label>Shooting</span><br/>
<span><input type="checkbox" class="myCheckBox" name="athletics[]" value="Snow-skiing" id="showskiing"><label for="showskiing"><span></span></label>Snow skiing</span><br/>
<span><input type="checkbox" class="myCheckBox" name="athletics[]" value="Volleyball" id="volleyball"><label for="volleyball"><span></span></label>Volleyball</span>
</div>
<div class="col-md-3 column" style="padding-left: 0px;padding-right: 0px;">
<span><input type="checkbox" class="myCheckBox" name="athletics[]" value="Boating/Rowing" id="boating"><label for="boating"><span></span></label>Boating/Rowing</span><br/>
<span><input type="checkbox" class="myCheckBox" name="athletics[]" value="Cricket" id="cricket"><label for="cricket"><span></span></label>Cricket</span><br/>
<span><input type="checkbox" class="myCheckBox" name="athletics[]" value="Stunts-(fighting)" id="fightstunt"><label for="fightstunt"><span></span></label>Stunts (fighting)</span><br/>
<span><input type="checkbox" class="myCheckBox" name="athletics[]" value="Football" id="football"><label for="football"><span></span></label>Football</span><br/>
<span><input type="checkbox" class="myCheckBox" name="athletics[]" value="Pilot" id="pilot"><label for="pilot"><span></span></label>Pilot</span><br/>
<span><input type="checkbox" class="myCheckBox" name="athletics[]" value="Skating" id="skating"><label for="skating"><span></span></label>Skating</span><br/>
<span><input type="checkbox" class="myCheckBox" name="athletics[]" value="Squash" id="squash"><label for="squash"><span></span></label>Squash</span><br/>
<span><input type="checkbox" class="myCheckBox" name="athletics[]" value="Weight-lifting" id="weightlift"><label for="weightlift"><span></span></label>Weight lifting</span><br/>
</div>
</div>
<div style="padding-top: 245px;">Martial arts:</div><br/>
<div class="col-md-3 column" style="padding-left: 0px;padding-right: 0px;">
<span><input type="checkbox" class="myCheckBox" name="martial[]" value="Judo" id="judo"><label for="judo"><span></span></label>Judo</span><br/>
</div>
<div class="col-md-3 column" style="padding-left: 0px;padding-right: 0px;">
<span><input type="checkbox" class="myCheckBox" name="martial[]" value="Karate" id="karate"><label for="karate"><span></span></label>Karate</span><br/>
</div>
<div class="col-md-3 column" style="padding-left: 0px;padding-right: 0px;">
<span><input type="checkbox" class="myCheckBox" name="martial[]" value="Kick-boxing" id="kickboxing"><label for="kickboxing"><span></span></label>Kick boxing</span><br/>
</div>
<div class="col-md-3 column" style="padding-left: 0px;padding-right: 0px;">
<span><input type="checkbox" class="myCheckBox" name="martial[]" value="Taekwondo" id="taek"><label for="taek"><span></span></label>Taekwondo</span><br/>
</div>
<div class="linelightgrey" style="padding-top: 55px;"></div>
<div style="padding-top: 30px; padding-bottom: 15px;">Performance skills</div>
<div class="col-md-4 column" style="padding-left: 0px; padding-right: 0px; padding:6px;">
<div>Musical instruments</div>
<div class="line"></div>
<span><input type="checkbox" class="myCheckBox" name="musical[]" value="Accordian" id="accordian"><label for="accordian"><span></span></label>Accordion</span><br/>
<span><input type="checkbox" class="myCheckBox" name="musical[]" value="Acoustic-guitar" id="acoustic"><label for="acoustic"><span></span></label>Acoustic guitar</span><br/>
<span><input type="checkbox" class="myCheckBox" name="musical[]" value="Drums/Percussion" id="drums"><label for="drums"><span></span></label>Drums/Percussion</span><br/>
<span><input type="checkbox" class="myCheckBox" name="musical[]" value="Electric-guitar" id="electric"><label for="electric"><span></span></label>Electric guitar</span><br/>
<span><input type="checkbox" class="myCheckBox" name="musical[]" value="Flute/Woodwinds" id="flute"><label for="flute"><span></span></label>Flute/Woodwinds</span><br/>
<span><input type="checkbox" class="myCheckBox" name="musical[]" value="Harmonica" id="harmonica"><label for="harmonica"><span></span></label>Harmonica</span><br/>
<span><input type="checkbox" class="myCheckBox" name="musical[]" value="Harmonium" id="harmonium"><label for="harmonium"><span></span></label>Harmonium</span><br/>
<span><input type="checkbox" class="myCheckBox" name="musical[]" value="Horns/Brass" id="horns"><label for="horns"><span></span></label>Horns/Brass</span><br/>
<span><input type="checkbox" class="myCheckBox" name="musical[]" value="Keyboard-(Electronic)" id="keyboard"><label for="keyboard"><span></span></label>Keyboard (Electronic)</span><br/>
<span><input type="checkbox" class="myCheckBox" name="musical[]" value="Piano" id="piano"><label for="piano"><span></span></label>Piano</span><br/>
<span><input type="checkbox" class="myCheckBox" name="musical[]" value="Sitar/Indian strings" id="sitar"><label for="sitar"><span></span></label>Sitar/Indian strings</span><br/>
<span><input type="checkbox" class="myCheckBox" name="musical[]" value="Tabla" id="tabla"><label for="tabla"><span></span></label>Tabla</span><br/>
<span><input type="checkbox" class="myCheckBox" name="musical[]" value="Violin/Strings" id="violin"><label for="violin"><span></span></label>Violin/Strings</span><br/>
</div>
<div class="col-md-4 column" style="padding-left: 0px; padding-right: 0px; padding:6px;">
<div>Performances</div>
<div class="line"></div>
<span><input type="checkbox" class="myCheckBox" name="performance[]" value="Compere/Hosting" id="hosting"><label for="hosting"><span></span></label>Compere/Hosting</span><br/>
<span><input type="checkbox" class="myCheckBox" name="performance[]" value="DJ-(Disc Jockey)" id="dj"><label for="dj"><span></span></label>DJ (Disc Jockey)</span><br/>
<span><input type="checkbox" class="myCheckBox" name="performance[]" value="Flair-bartending" id="flair"><label for="flair"><span></span></label>Flair bartending</span><br/>
<span><input type="checkbox" class="myCheckBox" name="performance[]" value="Impressionist" id="impressionist"><label for="impressionist"><span></span></label>Impressionist</span><br/>
<span><input type="checkbox" class="myCheckBox" name="performance[]" value="Juggling" id="juggling"><label for="juggling"><span></span></label>Juggling</span><br/>
<span><input type="checkbox" class="myCheckBox" name="performance[]" value="Magician" id="magician"><label for="magician"><span></span></label>Magician</span><br/>
<span><input type="checkbox" class="myCheckBox" name="performance[]" value="Modelling" id="modelling"><label for="modelling"><span></span></label>Modelling</span><br/>
<span><input type="checkbox" class="myCheckBox" name="performance[]" value="Puppetry" id="puppetry"><label for="puppetry"><span></span></label>Puppetry</span><br/>
<span><input type="checkbox" class="myCheckBox" name="performance[]" value="Rapper" id="rapper"><label for="rapper"><span></span></label>Rapper</span><br/>
<span><input type="checkbox" class="myCheckBox" name="performance[]" value="Singer" id="singer"><label for="singer"><span></span></label>Singer</span><br/>
<span><input type="checkbox" class="myCheckBox" name="performance[]" value="Stand-up-comedy" id="standup"><label for="standup"><span></span></label>Stand-up comedy</span><br/>
<span><input type="checkbox" class="myCheckBox" name="performance[]" value="Stunts" id="stunts"><label for="stunts"><span></span></label>Stunts</span><br/>
<span><input type="checkbox" class="myCheckBox" name="performance[]" value="Ventriloquist" id="ventriloquist"><label for="ventriloquist"><span></span></label>Ventriloquist</span><br/>
</div>
<div class="col-md-4 column" style="padding-left: 0px; padding-right: 0px; padding:6px;">
<div>Dance styles</div>
<div class="line"></div>
<span><input type="checkbox" class="myCheckBox" name="dance[]" value="Ballet" id="ballet"><label for="ballet"><span></span></label>Ballet</span><br/>
<span><input type="checkbox" class="myCheckBox" name="dance[]" value="Ballroom" id="ballroom"><label for="ballroom"><span></span></label>Ballroom</span><br/>
<span><input type="checkbox" class="myCheckBox" name="dance[]" value="Belly-dancing" id="belly"><label for="belly"><span></span></label>Belly dancing</span><br/>
<span><input type="checkbox" class="myCheckBox" name="dance[]" value="Bhangra" id="bhangra"><label for="bhangra"><span></span></label>Bhangra</span><br/>
<span><input type="checkbox" class="myCheckBox" name="dance[]" value="Bharat-Natyam" id="bn"><label for="bn"><span></span></label>Bharat Natyam</span><br/>
<span><input type="checkbox" class="myCheckBox" name="dance[]" value="Breakdance" id="brk"><label for="brk"><span></span></label>Breakdance</span><br/>
<span><input type="checkbox" class="myCheckBox" name="dance[]" value="Hip-hop/Street" id="hiphop"><label for="hiphop"><span></span></label>Hip hop/Street</span><br/>
<span><input type="checkbox" class="myCheckBox" name="dance[]" value="Jazz" id="jazz"><label for="jazz"><span></span></label>Jazz</span><br/>
<span><input type="checkbox" class="myCheckBox" name="dance[]" value="Kathak" id="kathak"><label for="kathak"><span></span></label>Kathak</span><br/>
<span><input type="checkbox" class="myCheckBox" name="dance[]" value="Kathakali" id="kathakkali"><label for="kathakkali"><span></span></label>Kathakali</span><br/>
<span><input type="checkbox" class="myCheckBox" name="dance[]" value="Kuchipudi" id="kuchi"><label for="kuchi"><span></span></label>Kuchipudi</span><br/>
<span><input type="checkbox" class="myCheckBox" name="dance[]" value="Manipuri" id="manipuri"><label for="manipuri"><span></span></label>Manipuri</span><br/>
<span><input type="checkbox" class="myCheckBox" name="dance[]" value="Modern/Contemp." id="contemp"><label for="contemp"><span></span></label>Modern/Contemp.</span><br/>
<span><input type="checkbox" class="myCheckBox" name="dance[]" value="Mohiniattam" id="mohiniattam"><label for="mohiniattam"><span></span></label>Mohiniattam</span><br/>
<span><input type="checkbox" class="myCheckBox" name="dance[]" value="Odissi" id="odissi"><label for="odissi"><span></span></label>Odissi</span><br/>
<span><input type="checkbox" class="myCheckBox" name="dance[]" value="Pole-dancing" id="poledance"><label for="poledance"><span></span></label>Pole dancing</span><br/>
<span><input type="checkbox" class="myCheckBox" name="dance[]" value="Salsa/Rumba/Samba" id="salsa"><label for="salsa"><span></span></label>Salsa/Rumba/Samba</span><br/>
</div>
<div class="linelightgrey" style="padding-top: 495px;"></div>
<div style="padding-top: 30px;">Fluent languages</div><br/>
<span class="font5">Important:  Only mark languages that you can speak and understand fluently.</span>
<div class="col-md-6 column font3 text-center" style="padding-top:30px;padding-bottom:10px;">Indian</div>
<div class="col-md-6 column font3 text-center" style="padding-top:30px;padding-bottom:10px;">International</div>

                                   <div class="col-md-4 column" style="padding-left: 0px; padding-right: 0px;">
                                   <div class="linelightgrey" style="width: 100%;"></div>   
                                          <div style="padding-top: 10px;" ><input type="checkbox" name="indianfluentlang[]" value="English" id="eng" class="myCheckBox" /><label for="eng" class="font3" ><span></span></label><span class="font3">&nbsp;English</span></div>
                                          <div ><input type="checkbox" name="indianfluentlang[]" value="Hindi" id="hindi" class="myCheckBox" /><label for="hindi" class="font3" ><span></span></label><span class="font3">&nbsp;Hindi</span></div>
                                          <div ><input type="checkbox" name="indianfluentlang[]" value="Bengali/Bangla" id="bengali" class="myCheckBox" /><label for="bengali" class="font3" ><span></span></label><span class="font3">&nbsp;Bengali/Bangla</span></div>
                                          <div ><input type="checkbox" name="indianfluentlang[]" value="Telugu" id="telugu" class="myCheckBox" /><label for="telugu" class="font3" ><span></span></label><span class="font3">&nbsp;Telugu</span></div>
                                          <div ><input type="checkbox" name="indianfluentlang[]" value="Marathi" id="marathi" class="myCheckBox" /><label for="marathi" class="font3" ><span></span></label><span class="font3">&nbsp;Marathi</span></div>
                                          <div ><input type="checkbox" name="indianfluentlang[]" value="Tamil" id="tamil" class="myCheckBox" /><label for="tamil" class="font3" ><span></span></label><span class="font3">&nbsp;Tamil</span></div>
                                          <div ><input type="checkbox" name="indianfluentlang[]" value="Urdu" id="urdu" class="myCheckBox" /><label for="urdu" class="font3" ><span></span></label><span class="font3">&nbsp;Urdu</span></div>
                                   </div>
                                   <div class="col-md-4 column" style="padding-left: 0px; padding-right: 0px;">
                                   <div class="linelightgrey"></div>   
                                          <div style="padding-top: 10px;"><input type="checkbox" name="indianfluentlang[]" value="Gujarati" id="gujrati" class="myCheckBox" /><label for="gujrati" class="font3" ><span></span></label><span class="font3">&nbsp;Gujarati</span></div>
                                          <div ><input type="checkbox" name="indianfluentlang[]" value="Kannada" id="kannad" class="myCheckBox" /><label for="kannad" class="font3" ><span></span></label><span class="font3">&nbsp;Kannada</span></div>
                                          <div ><input type="checkbox" name="indianfluentlang[]" value="Punjabi" id="punjabi" class="myCheckBox" /><label for="punjabi" class="font3" ><span></span></label><span class="font3">&nbsp;Punjabi</span></div>
                                          <div ><input type="checkbox" name="indianfluentlang[]" value="Malayalam" id="malayalam" class="myCheckBox" /><label for="malayalam" class="font3" ><span></span></label><span class="font3">&nbsp;Malayalam</span></div>
                                          <div ><input type="checkbox" name="indianfluentlang[]" value="Oriya" id="oriya" class="myCheckBox" /><label for="oriya" class="font3" ><span></span></label><span class="font3">&nbsp;Oriya</span></div>
                                          <div ><input type="checkbox" name="indianfluentlang[]" value="Bhojpuri" id="bhojpuri" class="myCheckBox" /><label for="bhojpuri" class="font3" ><span></span></label><span class="font3">&nbsp;Bhojpuri</span></div>
                                          <div ><input type="checkbox" name="indianfluentlang[]" value="Rajasthani" id="rajasthani" class="myCheckBox" /><label for="rajasthani" class="font3" ><span></span></label><span class="font3">&nbsp;Rajasthani</span></div>
                                   </div>
<div class="col-md-4" style="padding-left: 0px; padding-right: 0px;">
                 
                               
                               <div class="linelightgrey"></div>   
                                  
                                          <div style="padding-top: 10px;" ><input type="checkbox" name="internationalfluentlang[]" value="Sign-language" id="signlang" class="myCheckBox" /><label for="signlang" class="font3" ><span></span></label><span class="font3">&nbsp;Sign language</span></div>
                                          <div ><input type="checkbox" name="internationalfluentlang[]" value="Arabic" id="arabic" class="myCheckBox" /><label for="arabic" class="font3" ><span></span></label><span class="font3">&nbsp;Arabic</span></div>
                                          <div ><input type="checkbox" name="internationalfluentlang[]" value="Cantonese/Mandarin" id="mandarin" class="myCheckBox" /><label for="mandarin" class="font3" ><span></span></label><span class="font3">&nbsp;Cantonese/Mandarin</span></div>
                                          <div ><input type="checkbox" name="internationalfluentlang[]" value="French" id="french" class="myCheckBox" /><label for="french" class="font3" ><span></span></label><span class="font3">&nbsp;French</span></div>
                                          <div ><input type="checkbox" name="internationalfluentlang[]" value="German" id="german" class="myCheckBox" /><label for="german" class="font3" ><span></span></label><span class="font3">&nbsp;German</span></div>
                                          <div ><input type="checkbox" name="internationalfluentlang[]" value="Italian" id="italian" class="myCheckBox" /><label for="italian" class="font3" ><span></span></label><span class="font3">&nbsp;Italian</span></div>
                                          <div ><input type="checkbox" name="internationalfluentlang[]" value="Japanese" id="japanese" class="myCheckBox" /><label for="japanese" class="font3" ><span></span></label><span class="font3">&nbsp;Japanese</span></div>
                                          <div ><input type="checkbox" name="internationalfluentlang[]" value="Nepali" id="nepali" class="myCheckBox" /><label for="nepali" class="font3" ><span></span></label><span class="font3">&nbsp;Nepali</span></div>
                                          <div ><input type="checkbox" name="internationalfluentlang[]" value="Pashto" id="pashto" class="myCheckBox" /><label for="pashto" class="font3" ><span></span></label><span class="font3">&nbsp;Pashto</span></div>
                                          <div ><input type="checkbox" name="internationalfluentlang[]" value="Russian" id="russian" class="myCheckBox" /><label for="russian" class="font3" ><span></span></label><span class="font3">&nbsp;Russian</span></div>
                                          <div ><input type="checkbox" name="internationalfluentlang[]" value="Spanish" id="spanish" class="myCheckBox" /><label for="spanish" class="font3" ><span></span></label><span class="font3">&nbsp;Spanish</span></div>

</div>
<div class="linelightgrey" style:"width:100%;"></div>
<div style="padding-top: 30px;">Accents</div>
<div class="col-md-6 column font3 text-center" style="padding-top:30px;padding-bottom:10px;">Indian</div>
<div class="col-md-6 column font3 text-center" style="padding-top:30px;padding-bottom:10px;">International</div>

                                   <div class="col-md-4 column" style="padding-left: 0px; padding-right: 0px;">
                                   <div class="linelightgrey" style="width: 100%;"></div>   
                                          <div style="padding-top: 10px;" ><input type="checkbox" name="indianfluentaccent[]" value="Telugu/Hyderabadi" id="hyderabadi" class="myCheckBox" /><label for="hyderabadi" class="font3" ><span></span></label><span class="font3">&nbsp;Telugu/Hyderabadi</span></div>
                                          <div ><input type="checkbox" name="indianfluentaccent[]" value="Bengali" id="bengali2" class="myCheckBox" /><label for="bengali2" class="font3" ><span></span></label><span class="font3">&nbsp;Bengali</span></div>
                                          <div ><input type="checkbox" name="indianfluentaccent[]" value="Bhopali" id="bhopali2" class="myCheckBox" /><label for="bhopali2" class="font3" ><span></span></label><span class="font3">&nbsp;Bhopali</span></div>
                                          <div ><input type="checkbox" name="indianfluentaccent[]" value="Bihari" id="bihari2" class="myCheckBox" /><label for="bihari2" class="font3" ><span></span></label><span class="font3">&nbsp;Bihari</span></div>
                                          <div ><input type="checkbox" name="indianfluentaccent[]" value="Gujrati" id="gujrati2" class="myCheckBox" /><label for="gujrati2" class="font3" ><span></span></label><span class="font3">&nbsp;Gujarati</span></div>
                                          <div ><input type="checkbox" name="indianfluentaccent[]" value="Harayanvi" id="haryanvi2" class="myCheckBox" /><label for="haryanvi2" class="font3" ><span></span></label><span class="font3">&nbsp;Harayanvi</span></div>
                                          <div ><input type="checkbox" name="indianfluentaccent[]" value="Karnataka/Kannada" id="karnatak2" class="myCheckBox" /><label for="karnatak2" class="font3" ><span></span></label><span class="font3">&nbsp;Karnataka/Kannada</span></div>
                                   </div>
                                   <div class="col-md-4 column" style="padding-left: 0px; padding-right: 0px;">
                                   <div class="linelightgrey"></div>   
                                          <div style="padding-top: 10px;"><input type="checkbox" name="indianfluentaccent[]" value="Kashmiri" id="kashmiri2" class="myCheckBox" /><label for="kashmiri2" class="font3" ><span></span></label><span class="font3">&nbsp;Kashmiri</span></div>
                                          <div ><input type="checkbox" name="indianfluentaccent[]" value="Kerala/Malayali" id="keral2" class="myCheckBox" /><label for="keral2" class="font3" ><span></span></label><span class="font3">&nbsp;Kerala/Malayali</span></div>
                                          <div ><input type="checkbox" name="indianfluentaccent[]" value="Marathi" id="marathi2" class="myCheckBox" /><label for="marathi2" class="font3" ><span></span></label><span class="font3">&nbsp;Marathi</span></div>
                                          <div ><input type="checkbox" name="indianfluentaccent[]" value="Punjabi" id="punjabi2" class="myCheckBox" /><label for="punjabi2" class="font3" ><span></span></label><span class="font3">&nbsp;Punjabi</span></div>
                                          <div ><input type="checkbox" name="indianfluentaccent[]" value="Rajasthani" id="rajasthani2" class="myCheckBox" /><label for="rajasthani2" class="font3" ><span></span></label><span class="font3">&nbsp;Rajasthani</span></div>
                                          <div ><input type="checkbox" name="indianfluentaccent[]" value="Tamil" id="tamil2" class="myCheckBox" /><label for="tamil2" class="font3" ><span></span></label><span class="font3">&nbsp;Tamil</span></div>
                                          
                                   </div>
<div class="col-md-4" style="padding-left: 0px; padding-right: 0px;">
                 
                               
                               <div class="linelightgrey"></div>   
                                  
                                          <div style="padding-top: 10px;" ><input type="checkbox" name="internationalfluentaccent[]" value="Afghan/Pathani" id="afghan" class="myCheckBox" /><label for="afghan" class="font3" ><span></span></label><span class="font3">&nbsp;Afghan/Pathani</span></div>
                                          <div ><input type="checkbox" name="internationalfluentaccent[]" value="American" id="american" class="myCheckBox" /><label for="american" class="font3" ><span></span></label><span class="font3">&nbsp;American</span></div>
                                          <div ><input type="checkbox" name="internationalfluentaccent[]" value="Australian" id="australian" class="myCheckBox" /><label for="australian" class="font3" ><span></span></label><span class="font3">&nbsp;Australian</span></div>
                                          <div ><input type="checkbox" name="internationalfluentaccent[]" value="British" id="british" class="myCheckBox" /><label for="british" class="font3" ><span></span></label><span class="font3">&nbsp;British</span></div>
                                          <div ><input type="checkbox" name="internationalfluentaccent[]" value="Canadian" id="canad" class="myCheckBox" /><label for="canad" class="font3" ><span></span></label><span class="font3">&nbsp;Canadian</span></div>
                                          <div ><input type="checkbox" name="internationalfluentaccent[]" value="French" id="french2" class="myCheckBox" /><label for="french2" class="font3" ><span></span></label><span class="font3">&nbsp;French</span></div>
                                          <div ><input type="checkbox" name="internationalfluentaccent[]" value="German" id="german2" class="myCheckBox" /><label for="german2" class="font3" ><span></span></label><span class="font3">&nbsp;German</span></div>
                                          <div ><input type="checkbox" name="internationalfluentaccent[]" value="Middle-eastern" id="middleeast" class="myCheckBox" /><label for="middleeast" class="font3" ><span></span></label><span class="font3">&nbsp;Middle-eastern</span></div>
                                          <div ><input type="checkbox" name="internationalfluentaccent[]" value="Pakistani" id="pakistani" class="myCheckBox" /><label for="pakistani" class="font3" ><span></span></label><span class="font3">&nbsp;Pakistani</span></div>
                                          <div ><input type="checkbox" name="internationalfluentaccent[]" value="South-African" id="southafr" class="myCheckBox" /><label for="southafr" class="font3" ><span></span></label><span class="font3">&nbsp;South African</span></div>
                                          <div ><input type="checkbox" name="internationalfluentaccent[]" value="Spanish" id="spanish2" class="myCheckBox" /><label for="spanish2" class="font3" ><span></span></label><span class="font3">&nbsp;Spanish</span></div>

</div>
<div class="linelightgrey" style="padding-top: 400px;"></div>
<div style="padding-top: 30px; padding-bottom:20px;">Other skills</div>
<div class="col-md-4 column" style="padding-left: 0px; padding-right: 0px;">
	<input type="textbox" name="os1" style="width: 98%;"/>
	<div style="height:7px;"></div>
	<input type="textbox" name="os2" style="width: 98%;"/>
	<div style="height:7px;"></div>
	<input type="textbox" name="os3" style="width: 98%;"/>
	<div style="height:7px;"></div>
	<input type="textbox" name="os4" style="width: 98%;"/>
	<div style="height:7px;"></div>
	<input type="textbox" name="os5" style="width: 98%;"/>
</div>
<div class="col-md-4 column" style="padding-left: 0px; padding-right: 0px;">
	<input type="textbox" name="os6" style="width: 98%;"/>
	<div style="height:7px;"></div>
	<input type="textbox" name="os7" style="width: 98%;"/>
	<div style="height:7px;"></div>
	<input type="textbox" name="os8" style="width: 98%;"/>
	<div style="height:7px;"></div>
	<input type="textbox" name="os15" style="width: 98%;"/>
	<div style="height:7px;"></div>
	<input type="textbox" name="os9" style="width: 98%;"/>
</div>
<div class="linelightgrey"></div>
<div class="col-md-4 column" style="padding-left: 0px; padding-right: 0px;">
	<input type="textbox" name="os10" style="width: 98%;"/>
	<div style="height:7px;"></div>
	<input type="textbox" name="os11" style="width: 98%;"/>
	<div style="height:7px;"></div>
	<input type="textbox" name="os12" style="width: 98%;"/>
	<div style="height:7px;"></div>
	<input type="textbox" name="os13" style="width: 98%;"/>
	<div style="height:7px;"></div>
	<input type="textbox" name="os14" style="width: 98%;"/>
</div>
<div style="padding-top: 30px; padding-bottom:20px;">Disabilities</div>
<div class="col-md-4 column" style="padding-left: 0px;padding-right: 0px;">
<div ><input type="checkbox" name="disability[]" value="Amputee-(Arm)" id="armamputee" class="myCheckBox" /><label for="armamputee" class="font3" ><span></span></label><span class="font3">&nbsp;Amputee (Arm)</span></div>
<div ><input type="checkbox" name="disability[]" value="Amputee-(Leg)" id="legamputee" class="myCheckBox" /><label for="legamputee" class="font3" ><span></span></label><span class="font3">&nbsp;Amputee (Leg)</span></div>
<div ><input type="checkbox" name="disability[]" value="Amputee-(Double)" id="doubleamputee" class="myCheckBox" /><label for="doubleamputee" class="font3" ><span></span></label><span class="font3">&nbsp;Amputee (Double)</span></div>
<div ><input type="checkbox" name="disability[]" value="Autism" id="autism" class="myCheckBox" /><label for="autism" class="font3" ><span></span></label><span class="font3">&nbsp;Autism</span></div>
</div>
<div class="col-md-4 column" style="padding-left: 0px;padding-right: 0px;">
<div ><input type="checkbox" name="disability[]" value="Blind/Low-vision" id="blindvis" class="myCheckBox" /><label for="blindvis" class="font3" ><span></span></label><span class="font3">&nbsp;Blind/Low vision</span></div>
<div ><input type="checkbox" name="disability[]" value="Burn-injuries" id="burninjure" class="myCheckBox" /><label for="burninjure" class="font3" ><span></span></label><span class="font3">&nbsp;Burn injuries</span></div>
<div ><input type="checkbox" name="disability[]" value="Deaf/Hearing-disability" id="deaf" class="myCheckBox" /><label for="deaf" class="font3" ><span></span></label><span class="font3">&nbsp;Deaf/Hearing disability</span></div>
<div ><input type="checkbox" name="disability[]" value="Dwarfism" id="dwarfism" class="myCheckBox" /><label for="dwarfism" class="font3" ><span></span></label><span class="font3">&nbsp;Dwarfism</span></div>
</div>
<div class="col-md-4 column" style="padding-left: 0px;padding-right: 0px;">
<div ><input type="checkbox" name="disability[]" value="Mental-disability" id="mental" class="myCheckBox" /><label for="mental" class="font3" ><span></span></label><span class="font3">&nbsp;Mental disability</span></div>
<div ><input type="checkbox" name="disability[]" value="Speech-disability" id="speech" class="myCheckBox" /><label for="speech" class="font3" ><span></span></label><span class="font3">&nbsp;Speech disability</span></div>
<div ><input type="checkbox" name="disability[]" value="Visible-injuries" id="visible" class="myCheckBox" /><label for="visible" class="font3" ><span></span></label><span class="font3">&nbsp;Visible injuries</span></div>
<div ><input type="checkbox" name="disability[]" value="Wheelchair-user" id="wheelchair" class="myCheckBox" /><label for="wheelchair" class="font3" ><span></span></label><span class="font3">&nbsp;Wheelchair user</span></div>
</div>
<div class="linelightgrey" style="padding-top: 165px;"></div>
<div style="padding-top: 30px; padding-bottom:20px;">Disabilities: Assistive devices</div>
<div class="col-md-4 column" style="padding-left: 0px;padding-right: 0px;">
<div ><input type="checkbox" name="disability[]" value="Cane" id="cane" class="myCheckBox" /><label for="cane" class="font3" ><span></span></label><span class="font3">&nbsp;Cane</span></div>
<div ><input type="checkbox" name="disability[]" value="Crutches-(forearm)" id="crutches" class="myCheckBox" /><label for="crutches" class="font3" ><span></span></label><span class="font3">&nbsp;Crutches (forearm)</span></div>
<div ><input type="checkbox" name="disability[]" value="Crutches-(underarm)" id="underarm_crutch" class="myCheckBox" /><label for="underarm_crutch" class="font3" ><span></span></label><span class="font3">&nbsp;Crutches (underarm)</span></div>

</div>
<div class="col-md-4 column" style="padding-left: 0px;padding-right: 0px;">
<div ><input type="checkbox" name="disability[]" value="Leg-braces" id="legbrace" class="myCheckBox" /><label for="legbrace" class="font3" ><span></span></label><span class="font3">&nbsp;Leg braces</span></div>
<div ><input type="checkbox" name="disability[]" value="Prosthetic_limb:-Arm" id="limb_arm" class="myCheckBox" /><label for="limb_arm" class="font3" ><span></span></label><span class="font3">&nbsp;Prosthetic limb: Arm</span></div>
<div ><input type="checkbox" name="disability[]" value="Prosthetic_limb:Leg" id="limb_leg" class="myCheckBox" /><label for="limb_leg" class="font3" ><span></span></label><span class="font3">&nbsp;Prosthetic limb: Leg</span></div>

</div>
<div class="col-md-4 column" style="padding-left: 0px;padding-right: 0px;">
<div ><input type="checkbox" name="disability[]" value="Walker" id="walker" class="myCheckBox" /><label for="walker" class="font3" ><span></span></label><span class="font3">&nbsp;Walker</span></div>
<div ><input type="checkbox" name="disability[]" value="wheel_chair" id="wheel_chair" class="myCheckBox" /><label for="wheel_chair" class="font3" ><span></span></label><span class="font3">&nbsp;Wheelchair</span></div>
<div ><input type="checkbox" name="disability[]" value="White-cane" id="white_cane" class="myCheckBox" /><label for="white_cane" class="font3" ><span></span></label><span class="font3">&nbsp;White cane</span></div>

</div>
<div class="linelightgrey" style="padding-top: 135px;"></div>
<div class="text-center"><button class="myBtn button1">Update profile</button></div>



					
					
				


		</div>

			</div>

			</div>	

			</div>
		

		<div class="col-md-3 column">
		<?php include'sidebar.php';?>
		</div>
		<div class="col-md-1 column">
		</div>
	</div>
</div>
<?php include 'footer.php';?>