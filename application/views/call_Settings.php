<div class="main-box">
	<div class="cmdtitle">
		<a href="<?php echo base_url(); ?>Administration">user & administration</a> > <a href="<?php echo base_url(); ?>Call_Settings">Call_Settings</a>
	</div>

	<div class="main-menu row">
		 <nav class="contactnav">
		    <div class="nav-wrapper connavwapp">
		      <ul id="nav-mobile" class="hide-on-med-and-down" style="position: relative;left: 5px;}">
		       <li><a href="#!"><img class="iconstyle" src="<?php echo base_url() ?>html/images/accept.png">save state</a></li>
		       <li><a href="#!"><img class="iconstyle" src="<?php echo base_url() ?>html/images/phone.png">Dispositions</a></li>
		       </ul>
		    </div>
		  </nav>

		  <div class="callbox">
		  	<input type="checkbox" name="">
		  	<p>Copy Call Notes To General Notes</p>
		  </div>

		  <div class="col s12 m12" style="width: 60%;">
		  	<div class="col s12 m3">
		  		<div class="left">
				    <h2 class="title theme">Connected Dispositions</h2>
				    <select id="call_success" name="call_success[]" class=""  multiple="multiple" size="6">
				<option value="">--Select--</option><option value="9">Already In Program</option>
				<option value="6">Busy</option>
				<option value="2">Connected</option>
				<option value="5">Disconnected</option>
				<option value="8">Do Not Contact</option>
				<option value="7">Hung Up</option>
				<option value="3">Left Message</option>
				<option value="1">No Answer</option>
				<option value="4">Wrong Number</option>

				</select>
				  </div>
		  	</div>

		  	<div class="col s12 m3">
		  		<div class="left">
				    <h2 class="title theme">Conversion Dispositions</h2>
				    <select id="convert_status" name="convert_status[]" class="" multiple="multiple" size="6">
				<option value="">--Select--</option><option value="9">Already In Program</option>
				<option value="6">Busy</option>
				<option value="2">Connected</option>
				<option value="5">Disconnected</option>
				<option value="8">Do Not Contact</option>
				<option value="7">Hung Up</option>
				<option value="3">Left Message</option>
				<option value="1">No Answer</option>
				<option value="4">Wrong Number</option>

				</select>
				  </div>
		  	</div>

		  	<div class="col s12 m3"><div class="left">
    <h2 class="title theme">Lost Dispositions</h2>
    <select id="lost_status" name="lost_status[]" class="" multiple="multiple" size="6">
<option value="">--Select--</option><option value="9">Already In Program</option>
<option value="6">Busy</option>
<option value="2">Connected</option>
<option value="5">Disconnected</option>
<option value="8">Do Not Contact</option>
<option value="7">Hung Up</option>
<option value="3">Left Message</option>
<option value="1">No Answer</option>
<option value="4">Wrong Number</option>

</select>
  </div></div>
		  	<div class="col s12 m3"><div class="left">
    <h2 class="title theme">Follow Up Dispositions</h2>
    <select id="followup_status" name="followup_status[]" class="" multiple="multiple" size="6">
<option value="">--Select--</option><option value="9">Already In Program</option>
<option value="6">Busy</option>
<option value="2">Connected</option>
<option value="5">Disconnected</option>
<option value="8">Do Not Contact</option>
<option value="7">Hung Up</option>
<option value="3">Left Message</option>
<option value="1">No Answer</option>
<option value="4">Wrong Number</option>

</select>
  </div></div>
<div class="col s12 m12">
  <h2 class="reletitle">rule actions</h2></div>
		  </div>



		  <div class="sbox s12 m4">
		  	<div class="col s12 m6 mytilt">Follow Call (1)</div>
		  	<div class="col s12 m6">
		  			<div class="left">
     Every <input type="text" name="followup_time" value="" size="2"> <select style="height: 30px !important;" id="followup_inc" name="followup_inc" class="">
<option value="">--Select--</option><option value="minutes">Minutes</option>
<option value="Hours">Hours</option>
<option value="Days">Days</option>

</select>
     <br>
     <select id="followup_disp" name="followup_disp[]" class="" multiple="multiple" size="10">
<option value="9">Already In Program</option>
<option value="6">Busy</option>
<option value="2">Connected</option>
<option value="5">Disconnected</option>
<option value="8">Do Not Contact</option>
<option value="7">Hung Up</option>
<option value="3">Left Message</option>
<option value="1">No Answer</option>
<option value="4">Wrong Number</option>

</select>
  </div>
		  	</div>
		  </div>


		   <div class="sbox s12 m4">
		  	<div class="col s12 m6 mytilt">Assign On (1)</div>
		  	<div class="col s12 m6">
		  			<div class="left">
		  				<select id="assign_on" name="assign_on[]" class="" multiple="multiple" size="10">
<option value="">--Select--</option><option value="9">Already In Program</option>
<option value="6">Busy</option>
<option value="2">Connected</option>
<option value="5">Disconnected</option>
<option value="8">Do Not Contact</option>
<option value="7">Hung Up</option>
<option value="3">Left Message</option>
<option value="1">No Answer</option>
<option value="4">Wrong Number</option>

</select>
     
  
  </div>
		  	</div>
		  </div>

		   <div class="sbox s12 m4">
		  	<div class="col s12 m6 mytilt">Un-Assign On (1)</div>
		  	<div class="col s12 m6">
		  			<div class="left">
		  				<select id="unassign_on" name="unassign_on[]" class="" multiple="multiple" size="10">
<option value="">--Select--</option><option value="9">Already In Program</option>
<option value="6">Busy</option>
<option value="2">Connected</option>
<option value="5">Disconnected</option>
<option value="8">Do Not Contact</option>
<option value="7">Hung Up</option>
<option value="3">Left Message</option>
<option value="1">No Answer</option>
<option value="4">Wrong Number</option>

</select>
  </div>
		  	</div>
		  </div>

		   <div class="sbox s12 m4">
		  	<div class="col s12 m6 mytilt">Goto Dashboard On (1)</div>
		  	<div class="col s12 m6">
		  			<div class="left">
		  				<select id="dashboard" name="dashboard[]" class="" multiple="multiple" size="10">
<option value="">--Select--</option><option value="9">Already In Program</option>
<option value="6">Busy</option>
<option value="2">Connected</option>
<option value="5">Disconnected</option>
<option value="8">Do Not Contact</option>
<option value="7">Hung Up</option>
<option value="3">Left Message</option>
<option value="1">No Answer</option>
<option value="4">Wrong Number</option>

</select>
  </div>
		  	</div>
		  </div>

		   <div class="sbox s12 m4">
		  	<div class="col s12 m6 mytilt">Update Status</div>
		  	<div class="col s12 m6">
		  		<div class="left">
    <h4 class="sl">Student Loans</h4>        
      <div>
      <select id="12_disp" name="12_disp[]" class="" style="height: 30px !important;">
<option value="">--Select--</option><option value="9">Already In Program</option>
<option value="6">Busy</option>
<option value="2">Connected</option>
<option value="5">Disconnected</option>
<option value="8">Do Not Contact</option>
<option value="7">Hung Up</option>
<option value="3">Left Message</option>
<option value="1">No Answer</option>
<option value="4">Wrong Number</option>

</select>
      <select id="12_leadstatus" name="12_leadstatus[]" class="" style="height: 30px !important;">
<option value="">--Select--</option>
</select>
      </div>

    
      <div>
      <select id="12_disp" name="12_disp[]" class="" style="height: 30px !important;">
<option value="">--Select--</option><option value="9">Already In Program</option>
<option value="6">Busy</option>
<option value="2">Connected</option>
<option value="5">Disconnected</option>
<option value="8">Do Not Contact</option>
<option value="7">Hung Up</option>
<option value="3">Left Message</option>
<option value="1">No Answer</option>
<option value="4">Wrong Number</option>

</select>
      <select id="12_leadstatus" name="12_leadstatus[]" class="" style="height: 30px !important;">
<option value="">--Select--</option>
</select>
      </div>

    
      <div>
      <select id="12_disp" name="12_disp[]" class="" style="height: 30px !important;">
<option value="">--Select--</option><option value="9">Already In Program</option>
<option value="6">Busy</option>
<option value="2">Connected</option>
<option value="5">Disconnected</option>
<option value="8">Do Not Contact</option>
<option value="7">Hung Up</option>
<option value="3">Left Message</option>
<option value="1">No Answer</option>
<option value="4">Wrong Number</option>

</select>
      <select id="12_leadstatus" name="12_leadstatus[]" class="" style="height: 30px !important;">
<option value="">--Select--</option>
</select>
      </div>

    
      <div>
      <select id="12_disp" name="12_disp[]" class="" style="height: 30px !important;">
<option value="">--Select--</option><option value="9">Already In Program</option>
<option value="6">Busy</option>
<option value="2">Connected</option>
<option value="5">Disconnected</option>
<option value="8">Do Not Contact</option>
<option value="7">Hung Up</option>
<option value="3">Left Message</option>
<option value="1">No Answer</option>
<option value="4">Wrong Number</option>

</select>
      <select id="12_leadstatus" name="12_leadstatus[]" class="" style="height: 30px !important;"> 
<option value="">--Select--</option>
</select>
      </div>

    
      <div>
      <select id="12_disp" name="12_disp[]" class="" style="height: 30px !important;">
<option value="">--Select--</option><option value="9">Already In Program</option>
<option value="6">Busy</option>
<option value="2">Connected</option>
<option value="5">Disconnected</option>
<option value="8">Do Not Contact</option>
<option value="7">Hung Up</option>
<option value="3">Left Message</option>
<option value="1">No Answer</option>
<option value="4">Wrong Number</option>

</select>
      <select id="12_leadstatus" name="12_leadstatus[]" class="" style="height: 30px !important;">
<option value="">--Select--</option>
</select>
      </div>

    
      <div>
      <select id="12_disp" name="12_disp[]" class="" style="height: 30px !important;">
<option value="">--Select--</option><option value="9">Already In Program</option>
<option value="6">Busy</option>
<option value="2">Connected</option>
<option value="5">Disconnected</option>
<option value="8">Do Not Contact</option>
<option value="7">Hung Up</option>
<option value="3">Left Message</option>
<option value="1">No Answer</option>
<option value="4">Wrong Number</option>

</select>
      <select id="12_leadstatus" name="12_leadstatus[]" class="" style="height: 30px !important;">
<option value="">--Select--</option>
</select>
      </div>

    
      </div>
		  	</div>
		  </div>




	</div>
</div>