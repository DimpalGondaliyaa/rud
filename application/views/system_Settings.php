
<div class="main-box">
	<div class="cmdtitle">
		<a href="<?php echo base_url(); ?>Docs">document creator</a>
	</div>

	<div class="main-menu">
note
		 <nav class="contactnav">
		    <div class="nav-wrapper connavwapp">
		      <ul id="nav-mobile" class="hide-on-med-and-down" style="position: relative;left: 5px;}">
		        <li><a href="#!"><img class="iconstyle" src="<?php echo base_url() ?>html/images/accept.png">save settings</a></li>
		        <li><a href="#!"><img class="iconstyle" src="<?php echo base_url() ?>html/images/email_open.png">Email Triggers</a></li>
		        <li><a href="#!"><img class="iconstyle" src="<?php echo base_url() ?>html/images/flag_red.png">State Setup</a></li>
		         <li><a href="<?php echo base_url(); ?>Document_type"><img class="iconstyle" src="<?php echo base_url() ?>html/images/phone.png">call setting</a></li>

		         <li><a href="#!"><img class="iconstyle" src="<?php echo base_url() ?>html/images/note.png">note template</a></li>
		         <li><a href="#!"><img class="iconstyle" src="<?php echo base_url() ?>html/images/clixsign.png">clixsign</a></li>
		         <li><a href="#!"><img class="iconstyle" src="<?php echo base_url() ?>html/images/email_edit.png">e-sing</a></li>
		         <li><a href="#!"><img class="iconstyle" src="<?php echo base_url() ?>html/images/calculator.png">Budget Fields</a></li>
		        
		      </ul>
		    </div>
		  </nav>


		  <div id="pagecontent_inner">
                        <div class="container generalform">
    <form name="settings" action="" method="post">
        <input id="saveToken" type="hidden" name="saveToken" value="f3e45fa74c60027e9a48aa6379147c66b15d3b49">        <input type="hidden" name="saveType" id="saveType" value="create">        <h3 class="title theme">General</h3>

        <label>Company Name</label>
        <input type="text" name="company_name" id="company" value="">
        <div class="clear"></div>

        <label>Company Logo URL:</label>
        <input type="text" name="logo_url" id="logourl" value="">
        <div class="clear"></div>

        <label>Admin Email</label>
        <input type="text" name="admin_email" id="admin_email" value="">
        <div class="clear"></div>

        <label>No-Reply Email</label>
        <input type="text" name="noreply_email" id="noreply_email" value="">
        <div class="clear"></div>

        <label>Default Theme</label>
        <select id="theme" name="theme" class="">
<option value="">--Select--</option><option value="1" selected="selected">Default</option>
<option value="11">Light</option>
<option value="28">Red/Black</option>
<option value="18">Red/Gray</option>
<option value="2384">USOA</option>

</select>
        <div class="clear"></div>

        <label>Require Pass Reset Every</label>
        <div class="left"><input name="pass_reset_days" type="text" size="3" value="0"> Days</div>
        <div class="clear"></div>

        <label>Announcement</label>
        <textarea name="announcement" rows="5" cols="40" id="announcement"></textarea>
        <div class="clear"></div>

        <label>Co-Applicant Field</label>
        <select id="coapp_field" name="coapp_field" class="">
<option value="">--Select--</option><option value="294896" selected="selected">294896-Co-Applicant</option>

</select>
        <div class="clear"></div>

        <label>Use System Creditors</label>
        <input type="checkbox" name="system_creditors" value="1" style="border: none;">
        <div class="clear"></div>

        <label>Send Assignment Emails</label>
        <input type="checkbox" name="assign_emails" value="1" style="border: none;">
        <div class="clear"></div>

        
        
        
            </form>
</div>
<script type="text/javascript">
    jQuery('#savebtn').click(function () {
        document.forms.settings.submit();
    });
</script>
                    </div>
	</div>
</div>