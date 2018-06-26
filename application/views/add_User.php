<div class="main-box">
	<div class="cmdtitle">
		<a href="<?php echo base_url(); ?>Administration">user & administration</a>
	</div>

	<div class="main-menu">
		  <nav class="contactnav">
		    <div class="nav-wrapper connavwapp">
		      <ul id="nav-mobile" class="hide-on-med-and-down">
		        <li><a href="<?= base_url(); ?>Schedule_E_marketing"><img class="iconstyle" src="<?php echo base_url() ?>html/images/add.png">add user</a></li>
		        <li><a href="<?php echo base_url(); ?>E_marketing_details"><img class="iconstyle" src="<?php echo base_url() ?>html/images/house.png">Companies</a></li>
		        <li><a href="<?php  echo base_url(); ?>setup_sender"><img class="iconstyle" src="<?php echo base_url() ?>html/images/layout_edit.png">Roles</a></li>
		        <li><a href="<?php  echo base_url(); ?>setup_sender"><img class="iconstyle" src="<?php echo base_url() ?>html/images/group.png">team</a></li>
		        <li><a href="<?php  echo base_url(); ?>setup_sender"><img class="iconstyle" src="<?php echo base_url() ?>html/images/report.png">system log</a></li>
		        <li><a href="<?php  echo base_url(); ?>setup_sender"><img class="iconstyle" src="<?php echo base_url() ?>html/images/application_side_list.png">setting</a></li>
		        <li><a href="<?php  echo base_url(); ?>setup_sender"><img class="iconstyle" src="<?php echo base_url() ?>html/images/chart_bar.png">usage</a></li>
		        
		        </ul>
		    </div>
		  </nav>

		  <div class="adduserbox row">
		  	<div class="addusertitle">Add A New User</div>
		  	<form id="add_user">
		  	<div class="input-field col s4 m4">
	          <input placeholder="username" name="username" type="text" class="validate">
	          <label for="username">username</label>
	        </div>
	        <div class="input-field col s4 m4">
	          <input placeholder="password" name="password" type="text" class="validate">
	          <label for="password">password</label>
	        </div>
	        <div class="input-field col s4 m4">
	          <input placeholder="confirm" name="confirm" type="text" class="validate">
	          <label for="confirm">Confirm</label>
	        </div>
	        <div class="input-field col s4 m4">
			    <select name="company">
			      <option value="" disabled selected>Choose your company</option>
			      <option value="United Students Of America">United Students Of America</option>
			    </select>
			  
			</div>
			<div class="col s12 m12 btncol">
				<a href="#" class="addusaerBTN btn"><img src="<?php echo base_url() ?>html/images/add.png"> save user</a>
			</div>
		</form>

		  </div>





	</div>
</div>	
		

