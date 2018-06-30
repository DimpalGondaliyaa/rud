
<div class="main-box">
	<div class="cmdtitle">
		<a href="<?php echo base_url(); ?>Docs">document creator</a>
	</div>

	<div class="main-menu">
		 <nav class="contactnav">
		    <div class="nav-wrapper connavwapp">
		      <ul id="nav-mobile" class="hide-on-med-and-down" style="position: relative;left: 5px;}">
		        <li><a href="#!"><img class="iconstyle" src="<?php echo base_url() ?>html/images/accept.png">save settings</a></li>
		        <li><a href="<?= base_url(); ?>Email_Trigger"><img class="iconstyle" src="<?php echo base_url() ?>html/images/email_open.png">Email Triggers</a></li>
		        <li><a href="<?= base_url(); ?>State_Setup"><img class="iconstyle" src="<?php echo base_url() ?>html/images/flag_red.png">State Setup</a></li>
		         <li><a href="<?php echo base_url(); ?>Call_Settings"><img class="iconstyle" src="<?php echo base_url() ?>html/images/phone.png">call setting</a></li>

		         <li><a href="<?php echo base_url(); ?>Note_Templates"><img class="iconstyle" src="<?php echo base_url() ?>html/images/note.png">note template</a></li>
		         <li><a href="<?php echo base_url(); ?>Clixsign"><img class="iconstyle" src="<?php echo base_url() ?>html/images/clixsign.png">clixsign</a></li>
		         <li><a href="<?php echo base_url(); ?>E_Sign"><img class="iconstyle" src="<?php echo base_url() ?>html/images/email_edit.png">e-sing</a></li>
		         <li><a href="#!"><img class="iconstyle" src="<?php echo base_url() ?>html/images/calculator.png">Budget Fields</a></li>
		        
		      </ul>
		    </div>
		  </nav>

		  <div class="row">
		  	<div class="titleee">general</div>
		  	<div class="col s12 m4">
		  		<div class="col s16 m4"><div class="ftitle">company name</div></div>
		  		<div class="col s16 m8"><div class="ftitle"><input type="text" name=""></div></div>

		  		<div class="col s16 m4"><div class="ftitle">Company Logo URL:</div></div>
		  		<div class="col s16 m8"><div class="ftitle"><input type="text" name=""></div></div>

		  		<div class="col s16 m4"><div class="ftitle">Admin Email</div></div>
		  		<div class="col s16 m8"><div class="ftitle"><input type="text" name=""></div></div>

		  		<div class="col s16 m4"><div class="ftitle">No-Reply Email</div></div>
		  		<div class="col s16 m8"><div class="ftitle"><input type="text" name=""></div></div>

		  		<div class="col s16 m4"><div class="ftitle">Default Theme</div></div>
		  		<div class="col s16 m8"><div class="ftitle">
		  			<select id="theme" name="theme" class="">
					<option value="">--Select--</option><option value="1" selected="selected">Default</option>
					<option value="11">Light</option>
					<option value="28">Red/Black</option>
					<option value="18">Red/Gray</option>
					<option value="2384">USOA</option>
					</select></div>
				</div>

				<div class="col s16 m4"><div class="ftitle">Require Pass Reset Every</div></div>
		  		<div class="col s16 m8"><div class="ftitle"><input type="text" name="" value="0"></div></div>

		  		<div class="col s16 m4"><div class="ftitle">Announcement</div></div>
		  		<div class="col s16 m8"><div class="ftitle"><textarea></textarea></div></div>

		  		<div class="col s16 m4"><div class="ftitle">Co-Applicant Field</div></div>
		  		<div class="col s16 m8"><div class="ftitle"><select id="coapp_field" name="coapp_field" class="">
                  <option value="">--Select--</option><option value="294896" selected="selected">294896-Co-Applicant</option>
                     </select></div></div>

                <div class="col s16 m4"><div class="ftitle">Use System Creditors</div></div>
		  		<div class="col s16 m8"><div class="ftitle"><input type="checkbox" name="" value="0"></div></div>
		  		
		  		<div class="col s16 m4"><div class="ftitle">Send Assignment Emails</div></div>
		  		<div class="col s16 m8"><div class="ftitle"><input type="checkbox" name="" value="0"></div></div>     

		    </div>

	</div>
</div>