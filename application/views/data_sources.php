<div class="main-box">
	<div class="cmdtitle">
		<a href="<?php echo base_url(); ?>home">contact</a>
	</div>

	<div class="main-menu row">

		 <nav class="contactnav">
		    <div class="nav-wrapper connavwapp">
		      <ul id="nav-mobile" class="hide-on-med-and-down">
		        <li><select id="dsources" name="dsources" class=""><option value="">--Select--</option></select></li>
		        <li><a href="#">edit</a></li>
		        <li><a href="#!"><img class="iconstyle" src="<?php echo base_url(); ?>html/images/accept.png">save data source</a></li>
		       </ul>
		    </div>
		  </nav>

		  <div class="leftt"><h2>Add A Data Source</h2></div>

		  <div class="genderform">
		  	<h3 class="title theme">Name / Field Assignment</h3>

		  	<div class="formsection">

                    <div class="left">
                        <h3>Source Name:</h3><input size="40" type="text" id="sourcename" name="source_name" value="">
                    </div>

                    <div class="left">
                        <h3>Type:</h3> <select id="source_type" name="source_type" class="">
<option value="">--Select--</option><option value="Web Form">Web Form</option>
<option value="Import">Import</option>

</select>
                    </div>


                    <div class="left">
                        <h3>File Type:</h3>
                        <select id="file_type" name="file_type" class="">
<option value="12">Student Loans</option>

</select>
                    </div>

                    <div class="left">

                        <h3>Stage / Status</h3>
                        <div id="stage_dd"><select id="lead_status" name="lead_status" class="">
<option value="">--Select--</option><option value="126752">Lead : Follow Up</option>
<option value="126746">Lead : New Lead</option>
<option value="126758">Lead : VM 2</option>
<option value="126761">Lead : VM 3</option>
<option value="126764">Lead : Docs Out</option>
<option value="126755">Lead : VM 1</option>
<option value="126767">Lead : Returned File</option>
<option value="126770">Lead : Do Not Call</option>
<option value="126773">Lead : Dead</option>
<option value="126776">Underwriting : Submitted</option>
<option value="126779">Underwriting : Approved</option>
<option value="126782">Client : Enrolled/Active</option>
<option value="126785">Client : Enrolled/Paused</option>
<option value="126788">Client : Enrolled/NSF Returned</option>
<option value="126791">Client : Graduated</option>
<option value="126794">Client : Cancelled</option>

</select>
</div>

                    </div>

                    <div class="left">
                        <h3>Campaign:</h3>
                        <select id="campaign_id" name="campaign_id" class="">
<option value="">--Select--</option><option value="68073">ggffgfg</option>

</select>
                    </div>

                    <div class="left">
                        <h3>De-Dupe Field</h3>
                        <select id="dedupe" name="dedupe" class="">
<option value="">--Select--</option><option value="" selected="selected">--No De-Duping--</option>
<option value="phone">Phone</option>
<option value="email">Email</option>
<option value="tp_id">My ID</option>
<option value="work_phone">Work Phone</option>

</select>
                    </div>
                    <div class="left">
                        <h3>De-Dupe Action</h3>
                        <select id="dedupe_action" name="dedupe_action" class="">
<option value="">--Select--</option><option value="reject">Reject Contact</option>
<option value="flag">Flag As Dupe</option>

</select>
                    </div>
                    <div class="left">
                        <h3>De-Dupe Status</h3>
                        <div id="dd_dedupe_status"><select id="dedupe_status" name="dedupe_status" class="">
<option value="">--Select--</option><option value="126752">Lead : Follow Up</option>
<option value="126746">Lead : New Lead</option>
<option value="126758">Lead : VM 2</option>
<option value="126761">Lead : VM 3</option>
<option value="126764">Lead : Docs Out</option>
<option value="126755">Lead : VM 1</option>
<option value="126767">Lead : Returned File</option>
<option value="126770">Lead : Do Not Call</option>
<option value="126773">Lead : Dead</option>
<option value="126776">Underwriting : Submitted</option>
<option value="126779">Underwriting : Approved</option>
<option value="126782">Client : Enrolled/Active</option>
<option value="126785">Client : Enrolled/Paused</option>
<option value="126788">Client : Enrolled/NSF Returned</option>
<option value="126791">Client : Graduated</option>
<option value="126794">Client : Cancelled</option>

</select>
</div>
                    </div>
                    <div class="clear"></div>
                </div>
<h3 class="title theme">Create An Auto-Responder
                        <p class="notation">This is an automatic email that gets sent when a contact is entered from
                            this datasource. You can design the template from the E-Marketing module and choose it here
                        </p>
                    </h3>



                    <div class="formsection">

                        <div class="left">
                            <h3>On</h3>
                            <input type="checkbox" name="esend_on" value="1" style="border: none;">
                        </div>

                        <div class="left">
                                                        <h3>E-Category:</h3>
                            <select id="ecategory" name="ecategory" class="" onchange="showCampSelect('campselect',$('ecategory').value)">
<option value="">--Select--</option><option value="2">Auto Responders</option>
<option value="3">Marketing</option>
<option value="1">Notifications</option>
<option value="4">Trigger</option>

</select>
                        </div>

                        <div class="left">
                            <h3>Template</h3>
                            <div id="campselect"><select name="ecampaign"><option value="">--Select Campaign--</option><option value="94136">Client Portal Welcome</option><option value="94139">ClixSign Introduction</option><option value="94142">Clixsign Request</option><option value="96606">Client Portal Welcome</option></select></div>
                        </div>

                        <div class="left">
                            <h3>Sender</h3>
                            <select id="esender" name="esender" class="">
<option value="">--Select--</option><option value="4724">example@example.com</option>
<option value="-1">--Assigned To User--</option>

</select>
                        </div>

                        <div class="clear"></div>
                    </div>

                    <div class="col s12 m5">
                    	<h3 class="title theme">Assignment Options
                            <p class="notation">This will assign incoming contacts to users of the system. Choose public
                                to make that contact viewable by all users
                            </p>
                        </h3>
<div class="mylefty">
                        <div class="col s5 m5">
                        		 <input id="assigning_on" type="checkbox" name="assign_on" value="1" style="border: none;"> <strong>Assigning On</strong> 
                        </div>
                        <div class="col s5 m5">
                        	<input type="checkbox" name="public" value="1" style="border: none;"><strong> Public</strong>
                        </div>

                         <div class="col s5 m5">
                        		<div class="leftt">
                                    <h4>Company</h4>
                                    <select id="company_id" name="company_id" class="">
<option value="">--Select--</option><option value="22493" selected="selected">United Students Of America</option>

</select>
                                    <script type="text/javascript">
                                        Event.observe('company_id', 'change', function () {
                                            lp('assigned', 'modules/contacts/ajax.php', 'dtype=cousers&multiple=true&company_id=' + this.value + '&assigned_to=');
                                        });
                                                                            </script>
                                    <h4>Assigned To</h4>
                                    <div id="assigned">
                                        <select id="assigned_to" name="assigned_to[]" class="" size="10" multiple="multiple">
<option value="3133547">Debt PayPro--Super Admin</option>
<option value="3254259">Alex Goodman--Super Admin</option>
<option value="3170984">James Morris--Super Admin</option>
<option value="3166850">Anthony Harrison--Super Admin</option>
<option value="3142430">Alex Vargas--Super Admin</option>
<option value="3167522">Devin Lee--Sales</option>
<option value="3177203">Samantha Williams--Sales</option>
<option value="3177659">Greg Smith--Sales</option>
<option value="3193601">Raymond Richardson--Sales</option>
<option value="3204459">Richard Anderson--Sales</option>
<option value="3177071">Jeff Cannon--Sales</option>

</select>
                                    </div>


                                </div> 
                                <div class="leftt"><h4>Additional Company Assignment</h4></div>

                                <div class="col s12 m6">
                                	<div class="left w40"><label>Law Firm</label></div>
                                </div>

                                  <div class="col s12 m6">
                                	<select id="ctype_3" name="ctype_3" class="">
<option value="">--Select--</option><option value="22493">United Students Of America</option>

</select>
                                </div>

                                <div class="leftt"><h4 style="position: relative;top: 14px;">Role Assignment</h4></div>

                                <div class="leftt"><h4>Notification</h4></div>

                                <select id="assign_template" name="assign_template" class="">
<option value="">--Select--</option><option value="94106">Client Approved</option>
<option value="94121">Client Cancelled</option>
<option value="94112">Client Enrolled</option>
<option value="94109">Client File Returned</option>
<option value="94124">Client Paused</option>
<option value="94103">Client Submitted</option>
<option value="94100">E-Sign Completed</option>
<option value="94097">E-Sign Declined</option>
<option value="94145">New Lead Assigned</option>
<option value="94130">Payment Reminder</option>
<option value="94115">Payment Returned</option>

</select>

                        </div>
                        <div class="col s5 m5">
                        	<p class="ppp">Selecting multiple users will randomly assign incoming leads to users.</p>
                        </div>



                    </div>


                    </div>


                    <div class="col s12 m5">
                    	<h3 class="title theme">Send Notifications</h3>
<div class="mylefty">
                        
                         <div class="col s5 m5">
                        		<div class="leftt">
                                    <h4>Template</h4>
                                    <select id="notify_template" name="notify_template" class="">
<option value="">--Select--</option><option value="94106">Client Approved</option>
<option value="94121">Client Cancelled</option>
<option value="94112">Client Enrolled</option>
<option value="94109">Client File Returned</option>
<option value="94124">Client Paused</option>
<option value="96606">Client Portal Welcome</option>
<option value="94133">Client Portal Welcome GENERIC DRAFT</option>
<option value="94103">Client Submitted</option>
<option value="94139">ClixSign Introduction</option>
<option value="94142">Clixsign Request</option>
<option value="94127">DPG Authorization Update</option>
<option value="94100">E-Sign Completed</option>
<option value="94097">E-Sign Declined</option>
<option value="94145">New Lead Assigned</option>
<option value="94118">Payment Error</option>
<option value="94130">Payment Reminder</option>
<option value="94115">Payment Returned</option>
<option value="94094">Payment Returned to Client</option>
<option value="94148">Student Loan Program Table</option>

</select>
         
                                    <div id="assigned">
                                        <select id="notify_users" name="notify_users[]" class="" size="10" multiple="multiple">
<option value="">--Select--</option><option value="3254259">Alex Goodman</option>
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
                              
                                <div class="leftt"><h4 style="position: relative;top: 14px;">More People</h4></div>

                                <div class="leftt"><h4>Seperate Emails By Comma</h4></div>

                                <textarea name="sendaddresses" rows="3" style="width:95%;"></textarea>

                        </div>
                    </div>
				</div>

		  </div>
	</div>
</nav>