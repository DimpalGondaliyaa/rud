<div class="main-box">
	<div class="cmdtitle">
		<a href="<?php echo base_url(); ?>Administration">user & administration</a> > <a href="<?php echo base_url(); ?>Teams">Teams</a>
	</div>

	<div class="main-menu row">
		  <nav class="contactnav">
		    <div class="nav-wrapper connavwapp">
		      <ul id="nav-mobile" class="hide-on-med-and-down">
		        <li><a href="#" ><img class="iconstyle" src="<?php echo base_url() ?>html/images/accept.png">save</a></li>
		        <li><a href="#"><img class="iconstyle" src="<?php echo base_url() ?>html/images/delete.png">delete team</a></li>
		        </ul>
		    </div>
		  </nav>

		  <div class="col s12 m2">
		  	<div class="ttitle">teams</div>
		  	<h4 class="ntem">create new team</h4>
		  	<input type="text" id="name" name="name" value="Super Admins" size="25">
		  	<ul class="tlist">
		  		<li><a class="sell">sale</a></li>
		  		<li><a class="sell">super admin</a></li>
		  	</ul>
		  </div>

		  <div class="col s10 m10" id="salediv" style="display: none;">
		  		<div class="ttitle">Members In Team</div>
		  		<div class="col s4 m4">
		  				<h4 class="ntem">Companies (0)</h4>
		  				<p class="myp">Selecting a company includes EVERY user within that company as part of the team</p>
		  				<select id="companies" name="companies[]" class="" style="width:200px;" multiple="multiple" size="10">
                               <option value="22493">United Students Of America</option>
						</select>
		  		</div>
		  		<div class="col s4 m4">
		  				<h4 class="ntem">Roles (1)</h4>
		  				<p class="myp">Selecting a role includes EVERY user within that role as part of the team</p>
		  				<select id="roles" name="roles[]" class="" style="width:200px;" multiple="multiple" size="10">
							<option value="20369">Admin</option>
							<option value="20381">Lead Vendor</option>
							<option value="20372">Manager</option>
							<option value="20378">Processor</option>
							<option value="20375" selected="selected">Sales</option>
							<option value="20342" >Super Admin</option>
						</select>			
		  		</div>
		  		<div class="col s4 m4">
		  				<h4 class="ntem">Users (0)</h4>
		  				<p class="myp">Includes any of the selected users</p>
		  				<select id="users" name="users[]" class="" style="width:200px;" multiple="multiple" size="10">
							<option value="3254259">Alex Goodman</option>
							<option value="3142430">Alex Vargas</option>
							<option value="3166850">Anthony Harrison</option>
							<option value="3133547">Debt PayPro</option>
							<option value="3167522">Devin Lee</option>
							<option value="3177659">Greg Smith</option>
							<option value="3170984">James Morris</option>
							<option value="3177071">Jeff Cannon</option>
							<option value="3193601">Raymond Richardson</option>
							<option value="3204459">Richard Anderson</option>
							<option value="3177203">Samantha Williams</option>
						</select>
		  		</div>

		  </div>
	</div>
</div>
