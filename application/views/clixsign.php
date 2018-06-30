<div class="main-box">
	<div class="cmdtitle">
		<a href="<?php echo base_url(); ?>Administration">user & administration</a> > <a href="<?php echo base_url(); ?>Clixsign">Clixsign</a>
	</div>

	<div class="main-menu row">
		  <nav class="contactnav">
		    <div class="nav-wrapper connavwapp">
		      <ul id="nav-mobile" class="hide-on-med-and-down" style="position: relative;left: 5px;}">
		      	<li><a href="#!"><img class="iconstyle" src="<?php echo base_url() ?>html/images/accept.png">save setting</a></li>
		       </ul>
		    </div>
		  </nav>

		  <div class="col s12 m3 bgcolor">
			  	<div class="sidebar">
	    
				    <div class="p20">
				        <img src="<?= base_url(); ?>html/images/cs-logo.png">
				    </div>

				    <div class="p20">
				        <a href="#null"  class="btn greenbtn ib w100"><i class="fa fa-check-circle"></i> Save Settings</a>
				    </div>
				    <ul class="settlistthin">
				        <li><a data-id="general" href="#"><i class="fa fa-plus-circle"></i> General</a></li>
				        <li><a data-id="messages" href="#"><i class="fa fa-bars"></i> Messages</a></li>
				        <li><a data-id="ccess"><i class="fa fa-ellipsis-h"></i> Access</a></li>
				    </ul>
	            </div>
		  </div>

		  <div class="col s12 m9 bbdashed" style="    height: 200px;">
		  	<div  class="dashed">
		  		<h1 class="theme">General Settings</h1>
		  		<div class="col s12 m2"><label class="clab">Service Enabled</label></div>
		  		<div class="col s12 m10"><input type="checkbox" name=""></div>

		  		<div class="col s12 m2"><label class="clab">Signature Type</label></div>
		  		<div class="col s12 m6"> <p>
			      <label>
			        <input name="group1" type="radio" checked />
			        <span> Mouse & Typed</span>
			      </label>
			    </p>
			    <p>
			      <label>
			        <input name="group1" type="radio" />
			        <span>Mouse Only</span>
			      </label>
			    </p>
			    <p>
			      <label>
			        <input class="with-gap" name="group1" type="radio"  />
			        <span>Typed Only</span>
			      </label>
			    </p></div>
			</div>
		</div>



		  <div class="col s12 m9 bbdashed" style="    height: 500px;">
		  	<div  class="dashed">
		  		<h1 class="theme">Email Messages</h1>
		  		
		  		<p class="cptitle">You can use email tags such as {FIRSTNAME}, etc in both subject and email message.</p>
		  		<div class="sbtitle">New Signature Request</div>
		  		<div class="col s12 m2"><label class="clab">Subject</label></div>
		  		<div class="col s12 m10"><input style="    width: 57% !important;margin-bottom: 20px;" type="text" name=""></div>

		  		<div class="col s12 m2"><label class="clab">Message</label></div>
		  		<div class="col s12 m6"><textarea></textarea> </div>
		  		<div class="col s12 m12">
		  		<div class="sbtitle">Document Signed</div>
		  		<div class="col s12 m2"><label class="clab">Subject</label></div>
		  		<div class="col s12 m10"><input style="    width: 57% !important;margin-bottom: 20px;" type="text" name=""></div>

		  		<div class="col s12 m2"><label class="clab">Message</label></div>
		  		<div class="col s12 m6"><textarea></textarea> </div>
			</div>
		</div>
	 </div>

	 <div class="col s12 m9 bbdashed" style="    height: 500px;">
		  	<div  class="dashed">
		  		<h1 class="theme">
Company Access</h1>
		  		
		  		<p class="cptitle">Enable company access to Clixsign by checking the enable boxes below. From email addresses and names are optional. Default is notifications@clixsign.com</p>
		  		
		  		<div class="col s12 m2"><label class="clab">United Students Of America</label></div>
		  		<div class="col s12 m10">
		  			<div class="col s1 m1">
		  			<input style="width: 57% !important;margin-bottom: 20px;" type="checkbox" name=""></div>
		  			<div class="col s2 m3">
		  			<div class="left">
                <h1 class="ttt">From Address</h1>
                <input type="text" id="from_addr_22493" name="from_addr_22493" value="" size="40">
            </div>
		  		</div>
		  		<div class="col s2 m3">
		  			<div class="left">
                <h1 class="ttt">From name</h1>
                <input type="text" id="from_addr_22493" name="from_addr_22493" value="" size="40">
            </div>
		  		</div>
		  		</div>


		  	
		</div>
	 </div>


	 
		
	</div>
</div>