<style type="text/css">
body{
    letter-spacing: 0;
    font-family: Arial, sans-serif;
}
div#csubnav li{
	display: inline-block;position: relative;
	    display: inline-block;
    font-size: 11px;
    font-weight: bold;
    border: 1px solid #D9D9D9;
    margin: 2px;
    padding: 0;
    background: #D9D9D9;
    border-radius: 4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
}
div#csubnav li:hover{
	border: 1px solid #D9D9D9;
    margin: 2px;
    padding: 0;
    background: #d9d9d970;
}
div#csubnav li.active a {
    border: 1px solid #213f66;
    margin: 0;
    border-radius: 5px;
    color: #fff !important;
    background: #213f66;
    text-decoration: none;
    padding: 5px;
    cursor: pointer;
    letter-spacing: 0px;

}
div#csubnav li a {
	display: inline-block;
	color: #414141;
	text-decoration: none;
	padding: 5px;
	cursor: pointer;
	letter-spacing: 0px;
}
input.top-srch {
    position: relative;
    top: 3px;
    background: #ffffffb5 !important;
    width: 250px !important;
    height: 20px !important;
    padding-left: 25px !important;
}
i.fas.fa-search {
    position: relative;
    font-size: 12px;
    color: #213f66;
}
span.pre-srch {
    position: absolute;
    margin-top: -20px;
    margin-left: 10px;
    z-index: 1;
}
.details-container {
    position: relative;
    padding: 15px;
}
.detailsBox {
    position: relative;
    background: #dddddd;
    overflow: hidden;
    border-radius: 7px;
    padding: 10px;
}
.top-box {
    position: relative;
    overflow: hidden;
    padding-bottom: 25px;
}
button.btn-up-st {
	height: 30px;
    line-height: normal;
    font-size: 12px;
    font-weight: bold;
    letter-spacing: 1px;
    text-transform: lowercase;
    border-radius: 5px;
    margin-left: -10px;
    padding: 5px 7px;
    margin-top: 15px;
}
.lead-box p {
    line-height: 4px;
    position: relative;
}
.top-box {
    position: relative;
    overflow: hidden;
    padding-bottom: 25px;
    border-bottom: 1px solid #00000038;
}
.second-hdr p {
    line-height: 0px;
}
.second-hdr p {
    line-height: 0px;
    letter-spacing: 0;
    font-family: Arial, sans-serif;
    font-size: 11px;
    font-weight: bold;
}
.second-hdr {
    border-bottom: 1px dashed #0000002e;
    overflow: hidden;
}
.third-Box a {
    position: relative;
    color: #213f66;
    font-size: 11px;
    line-height: 5;
}
.details-usr p {
    position: relative;
    font-size: 12px;
}
.third-Box p {
    line-height: 0px;
    font-weight: bold;
    font-family: sans-serif;
    letter-spacing: 0;
    font-size: 12px;
}
.col.s12.m12.spcbox {
    padding-bottom: 5px;
}
.orangeBox {
    position: relative;
    padding: 5px;
    border: 1px solid #ddd;
    margin: 15px 0px;
}
.condcont {
    position: relative;
    background-color: #eb6134;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    text-decoration: none;
    border: 1px solid #eb6134;
    text-align: center;
    color: #fff;
    font-weight: bold;
    padding: 6px;
    cursor: pointer;
}
</style>


<div class="main-box">
	<div class="main-menu">
	 <nav class="contactnav">
		    <div class="nav-wrapper connavwapp">
		      <ul id="nav-mobile" class="hide-on-med-and-down">
		        <li>
		        	<span class="pre-srch"><i class="fas fa-search"></i></span>
		        	<input type="search" name="srch" class="top-srch">
		        </li>
		        <li>
		        	<a class="valign-wrapper" href="#">new list</a></li>
		        	<li><a class="valign-wrapper" href="<?php echo base_url(); ?>editContact"> <img src="<?php echo base_url(); ?>html/images/add.png" class="responsive-img" style="margin-right: 5px;">  add contact</a></li>


		        	<li><a class="valign-wrapper" href="#!"> <img src="<?php echo base_url(); ?>html/images/calculator.png" class="responsive-img" style="margin-right: 5px;">  Quick Quote</a></li>

		        	<li><a class="valign-wrapper" href="<?php echo base_url(); ?>Custom_Fields"> <img src="<?php echo base_url(); ?>html/images/textfield.png" class="responsive-img" style="margin-right: 5px;"> Custom Fields</a></li>

		        	<li><a class="valign-wrapper" href="<?php echo base_url(); ?>workflow"> <img src="<?php echo base_url(); ?>html/images/icon-settings.jpg" class="responsive-img" style="margin-right: 5px;">Workflow</a></li>

		        	<li><a class="valign-wrapper" href="#!"> <img src="<?php echo base_url(); ?>html/images/database_connect.png" class="responsive-img" style="margin-right: 5px;">Data Sources</a>

		        <!-- 	<li><a class="valign-wrapper" href="#!"> <img src="<?php echo base_url(); ?>html/images/calculator.png" class="responsive-img" style="margin-right: 5px;">  Quick Quote</a></li>
		        	<li><a class="valign-wrapper" href="#!> <img src="<?php echo base_url(); ?>html/images/textfield.png" class="responsive-img" style="margin-right: 5px;"> Custom Fields</a></li>
		        	<li><a class="valign-wrapper" href="#!"> <img src="<?php echo base_url(); ?>html/images/icon-settings.jpg" class="responsive-img" style="margin-right: 5px;">Workflow</a></li>
		        	<li><a class="valign-wrapper" href="#!"> <img src="<?php echo base_url(); ?>html/images/database_connect.png" class="responsive-img" style="margin-right: 5px;">Data Sources</a>
 -->
		        </li>
		    </div>
		  </nav>
	<div class="max-width">
	<div class="details-container">
		<div class="row">
			<div class="col s12 m3">
				<div class="detailsBox">
					<div class="top-box">
						<div class="top-hdr valign-wrapper">
							<div class="col s12 m8">
								<h6><b><?php echo $get['f_name'].' '.$get['l_name']; ?></b></h6>
							</div>
							<div class="col s12 m4">
								<div class="">
									<a href="#!" class="grey-text right"><i class="fas fa-envelope"></i></a>
								</div>
							</div>
						</div>
						<div class="col s12 m12">
							<div class="lead-box">
								<p>STUDENT LOANS</p>
								<p>Lead : <?= $get['stage']; ?></p>
							</div>
							<div class="col s12 m12">
								<a data-id="<?php echo $get['c_id']; ?>" class="changeStatus" href="#!">
								<button type="button" class="btn-up-st btn green">Update Status</button>
								</a>
							</div>
						</div>
					</div>

					<div class="second-hdr">
						<div class="col s12 m6">
							<p>Customer ID</p>
						</div>
						<div class="col s12 m6">
							<p>USOA-231282705</p>
						</div>
						<div class="col s12 m6">
							<p>Assigned Company</p>
						</div>
						<div class="col s12 m6">
							<p>United Students Of America</p>
						</div>
					</div>

					<div class="third-Box">
						<div class="col s12 m6"></div>
						<div class="col s12 m6">
							<a href="#!">Change Secondary Assignment</a>
						</div>

						<div class="details-usr">
							<div class="col s12 m4"><p>Created At</p></div>
							<div class="col s12 m8">
								<p><?= $get['createdOn']; ?> - <?= $get['f_name'].' '.$get['l_name'];?></p>
							</div>
							<div class="col s12 m4"><p>Data Source</p></div>
							<div class="col s12 m8"><p>Manual Entry</p></div>

							<div class="col s12 m4"><p>SSN</p></div>
							<div class="col s12 m8"><p><?= $get['ssn']; ?></p></div>

							<div class="col s12 m4"><p>Birthday</p></div>
							<div class="col s12 m8"><p><?= $get['dob_m'].' '.$get['dob_d'].', '.$get['dob_y']; ?></p></div>

							<div class="col s12 m12 spcbox"></div>
							<div class="col s12 m4"><p>Email</p></div>
							<div class="col s12 m8"><p><?= $get['u_email']; ?></p></div>

							<div class="col s12 m4"><p>Cell Phone</p></div>
							<div class="col s12 m8"><p><?= $get['phone']; ?></p></div>

							<div class="col s12 m12 spcbox"></div>
							<div class="col s12 m12 spcbox"></div>
							<div class="col s12 m12 spcbox"></div>
							<div class="col s12 m12 spcbox"></div>

							<div class="col s12 m4"><p>Address</p></div>
							<div class="col s12 m8"><p><?= $get['address']; ?></p></div>
						</div>
					</div>
				</div>

				<div class="orangeBox">
					<div class="condcont">
				        <a class="orangebtn white-text" href="#!">
				            <i class="fa fa-external-link fa-lg"></i> Send External Form Request
				        </a>
				    </div>
				</div>
			</div>
			<div class="col s12 m9">
				<div class="right-top-menu">
					<div id="csubnav">
						<ul>
							<li id="btn_Thistory" class="active"><a onclick="showTab('Thistory');">History</a></li>
							<li id="btn_Tcallactivity"><a onclick="showTab('Tcallactivity');">Calls</a></li>
							<li id="btn_Temailactivity"><a onclick="showTab('Temailactivity');">Emails</a></li>
							<li id="btn_Tnotes"><a onclick="showTab('Tnotes');">Notes</a></li>
							<li id="btn_Temarketing"><a onclick="showTab('Temarketing');">E-Marketing</a></li>
							<li id="btn_Tdocs"><a onclick="showTab('Tdocs');">Docs</a></li>
							<li id="btn_Tevents"><a onclick="showTab('Tevents');">Events</a></li>
							<li id="btn_Ttasks"><a onclick="showTab('Ttasks');">Tasks</a></li>
							<li id="btn_Tstuprog"><a onclick="showTab('Tstuprog');">Loan Programs</a></li>
							<li id="btn_Tcc"><a onclick="showTab('Tcc');">Credit Card</a></li>
							<li id="btn_Tbanks"><a onclick="showTab('Tbanks');">Bank Account</a>
							</li><li id="btn_Tdebts"><a onclick="showTab('Tdebts');">Debts</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>


	</div>

	  <!-- Modal Structure -->
	  <div id="contactedit" class="modal">
	    <div class="modal-content">
	    	
	    </div>
	    <div class="modal-footer">
	      <a href="#!" class="modal-close waves-effect waves-green btn-flat editcontact">Agree</a>
	    </div>
	  </div>

	  <!-- Modal Structure -->
	  <div id="statusChanged" class="modal">
	    <div class="modal-content">
	    	
	    </div>
	    <div class="modal-footer">
	      <a href="#!" class="modal-close valign-wrapper waves-effect waves-green btn-flat editStatus"><img src="<?php echo base_url(); ?>html/images/accept.png"> Update Status</a>
	    </div>
	  </div>


<!-- ============= Add Note ===============-->

	   <!-- Modal Structure -->
	  <div id="addNotee" class="modal">
	    <div class="modal-content">
	    	
	    </div>
	    <div class="modal-footer">
	      <a href="#!" class="modal-close valign-wrapper waves-effect waves-green btn-flat saveNote"><img src="<?php echo base_url(); ?>html/images/accept.png"> Save Note</a>
	    </div>
	  </div>

<!-- ============= Add Events ===============-->

	   <!-- Modal Structure -->
	  <div id="addEventss" class="modal" style="max-width: 800px !important;">
	    <div class="modal-content">
	    	
	    </div>
	    <div class="modal-footer">
	      <a href="#!" class="modal-close valign-wrapper waves-effect waves-green btn-flat addEvents"><img src="<?php echo base_url(); ?>html/images/accept.png"> Save Events</a>
	    </div>
	  </div>	  

	</div>
</div>