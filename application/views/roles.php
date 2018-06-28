<div class="main-box">
	<div class="cmdtitle">
		<a href="<?php echo base_url(); ?>Administration">user & administration</a>
	</div>

	<div class="main-menu row">
		  <nav class="contactnav">
		    <div class="nav-wrapper connavwapp">
		      <ul id="nav-mobile" class="hide-on-med-and-down">
		      	<li><select id="whatrole" name="whatrole" class="">
<option value="">--Select--</option><option value="20342">20342-Super Admin</option>
<option value="20369">20369-Admin</option>
<option value="20372">20372-Manager</option>
<option value="20375">20375-Sales</option>
<option value="20378">20378-Processor</option>
<option value="20381">20381-Lead Vendor</option>

</select></li>
<li></li>
		        <li><a href="#">edit</a></li>
		        <li><a href="<?= base_url(); ?>Companies"><img class="iconstyle" src="<?php echo base_url() ?>html/images/house.png">Companies</a></li>
		        <li><a href="#"><img class="iconstyle" src="<?php echo base_url() ?>html/images/accept.png">save</a></li>
		        <li><a href="#"><img class="iconstyle" src="<?php echo base_url() ?>html/images/delete.png">delete</a></li>
		        <li><a href="<?= base_url(); ?>Field_level_permissions"><img class="iconstyle" src="<?php echo base_url() ?>html/images/server_delete.png">Field Level Permissions</a></li>
		        </ul>
		    </div>
		  </nav>



		<div class="fbox ">
			<div class="left">
                <h4>Role Name</h4>
                <input type="text" size="25" name="rolename" id="rolename" value="">
            </div>
		    <div class="left">
                <h4>Parent Role</h4>
                <select id="parent_id" name="parent_id" class="">
					<option value="">--Select--</option><option value="20342">20342-Super Admin</option>
					<option value="20369">20369-Admin</option>
					<option value="20372">20372-Manager</option>
					<option value="20375">20375-Sales</option>
					<option value="20378">20378-Processor</option>
					<option value="20381">20381-Lead Vendor</option>
					</select>
            </div>	

            <div class="left">
                <h4>Default Note Type</h4>
                <select id="def_note_type" name="def_note_type" class="">
					<option value="">--Select--</option><option value="1">General</option>
					<option value="2">Call</option>
					<option value="3">Creditor</option>
					<option value="4">Settlement</option>
					<option value="5">Attorney</option>
					<option value="6">Compliance</option>
					<option value="7">Sales</option>
					<option value="8">Legal</option>
					<option value="10">Document</option>
					<option value="11">Payment</option>
					<option value="16">Accounting</option>
					<option value="17">Cal Event</option>
					<option value="25">Email</option>
					<option value="103">Schedule Change</option>
					<option value="277">Customer Portal</option>
					</select>
            </div>

            <div class="left">
                <h4>Assignable</h4>
                <input type="checkbox" name="assignable" value="1" style="border: none;">
            </div>

		</div>

				<div class="condcont" id="guid">
			<div class="row">
				<div class="col s2 m2">
					<label class="gui">Guidelines  <input type="checkbox" ></label>
				</div>
				<div class="col s10 m10">
					<div class="col s12 m12">
						<p>Select All | Select None</p>
					</div>

					<div class="col s4 m4">
						<ul><li><input type="checkbox" name="mod_contacts[]" value="VIEW_ALL_CONTACTS" style="border: none;"> Add Guidelines</li></ul>
					</div>

					<div class="col s4 m4">
						<ul>
                            <li><input type="checkbox" name="mod_contacts[]" value="SEND_EXT_FORMS" style="border: none;">  Edit Guidelines</li></ul>
					</div>

					<div class="col s4 m4">
						<ul>
                            <li><input type="checkbox" name="mod_contacts[]" value="EXECUTE_WEBHOOKS" style="border: none;">  Delete Guidelines</li></ul>
					</div>


				</div>
			</div>
		</div>

		<div class="condcont" id="moddivguidelines">
			<div class="row">
				<div class="col s2 m2">
					<label class="gui">contact <input type="checkbox" ></label>
				</div>
				<div class="col s10 m10">
					<div class="col s12 m12">
						<p>Select All | Select None</p>
					</div>

					<div class="col s4 m4">
						<ul><li><input type="checkbox" name="mod_contacts[]" value="VIEW_ALL_CONTACTS" style="border: none;"> View All Contacts</li><li><input type="checkbox" name="mod_contacts[]" value="SEARCH_ALL_CONTACTS" style="border: none;"> Search All, Can Edit</li><li><input type="checkbox" name="mod_contacts[]" value="CREATE_CONTACTS" style="border: none;"> Create Contacts</li><li><input type="checkbox" name="mod_contacts[]" value="EDIT_CONTACTS" style="border: none;"> Edit Contacts</li><li><input type="checkbox" name="mod_contacts[]" value="DELETE_CONTACTS" style="border: none;"> Delete Contacts</li><li><input type="checkbox" name="mod_contacts[]" value="VIEW_CONTACTS_DETAILS" style="border: none;"> View Contact Details</li><li><input type="checkbox" name="mod_contacts[]" value="MARK_PUBLIC" style="border: none;"> Mark Contacts Public</li><li><input type="checkbox" name="mod_contacts[]" value="MARK_PRIVATE" style="border: none;"> Mark Contacts Private</li><li><input type="checkbox" name="mod_contacts[]" value="CHANGE_ASSIGNED" style="border: none;"> Change Primary Assigned</li><li><input type="checkbox" name="mod_contacts[]" value="UPDATE_ASSIGNMENT" style="border: none;"> Change Secondary Assignment</li><li><input type="checkbox" name="mod_contacts[]" value="CHANGE_STATUS" style="border: none;"> Change Contact Status</li><li><input type="checkbox" name="mod_contacts[]" value="ADD_NOTES" style="border: none;"> Add Notes</li><li><input type="checkbox" name="mod_contacts[]" value="ATT_NOTES" style="border: none;"> View Attorney Notes</li><li><input type="checkbox" name="mod_contacts[]" value="DELETE_NOTES" style="border: none;"> Delete Notes</li><li><input type="checkbox" name="mod_contacts[]" value="GENERATE_PDF" style="border: none;"> Generate PDFs</li><li><input type="checkbox" name="mod_contacts[]" value="SEND_ESIGN" style="border: none;"> Send To E-Sign</li><li><input type="checkbox" name="mod_contacts[]" value="SEND_CLIXSIGN" style="border: none;"> Send To Clixsign</li><li><input type="checkbox" name="mod_contacts[]" value="DOWNLOAD_FILES" style="border: none;"> Download Files</li><li><input type="checkbox" name="mod_contacts[]" value="DELETE_CONTACT_DOCS" style="border: none;"> Delete Documents</li><li><input type="checkbox" name="mod_contacts[]" value="CREATE_ALERTS" style="border: none;"> Create Alerts</li><li><input type="checkbox" name="mod_contacts[]" value="EDIT_ALERTS" style="border: none;"> Edit Alerts</li><li><input type="checkbox" name="mod_contacts[]" value="DELETE_ALERTS" style="border: none;"> Delete Alerts</li><li><input type="checkbox" name="mod_contacts[]" value="SEND_EMAILS_TO_CONTACTS" style="border: none;"> Send Emails</li></ul>
					</div>

					<div class="col s4 m4">
						<ul>
<li><input type="checkbox" name="mod_contacts[]" value="SEND_EXT_FORMS" style="border: none;"> Send External Forms</li><li><input type="checkbox" name="mod_contacts[]" value="CREATE_CALL_ACTIVITY" style="border: none;"> Create Call Activity</li><li><input type="checkbox" name="mod_contacts[]" value="VIEW_CONTACTS_LISTS" style="border: none;"> View Contact List</li><li><input type="checkbox" name="mod_contacts[]" value="VIEW_LIST_DATA" style="border: none;"> View List Data</li><li><input type="checkbox" name="mod_contacts[]" value="CREATE_CONTACTS_LISTS" style="border: none;"> Create Lists</li><li><input type="checkbox" name="mod_contacts[]" value="EDIT_CONTACTS_LISTS" style="border: none;"> Edit Lists</li><li><input type="checkbox" name="mod_contacts[]" value="DELETE_CONTACTS_LISTS" style="border: none;"> Delete Lists</li><li><input type="checkbox" name="mod_contacts[]" value="SEARCH_CONTACTS" style="border: none;"> Search Contacts</li><li><input type="checkbox" name="mod_contacts[]" value="EXPORT_CONTACTS" style="border: none;"> Export Contacts</li><li><input type="checkbox" name="mod_contacts[]" value="UPLOAD_MAIL_DATA" style="border: none;"> Upload Direct Mail Data</li><li><input type="checkbox" name="mod_contacts[]" value="VIEW_CUSTOM_FIELDS" style="border: none;"> View Custom Fields</li><li><input type="checkbox" name="mod_contacts[]" value="CREATE_CUSTOM_FIELDS" style="border: none;"> Create Custom Fields</li><li><input type="checkbox" name="mod_contacts[]" value="EDIT_CUSTOM_FIELDS" style="border: none;"> Edit Custom Fields</li><li><input type="checkbox" name="mod_contacts[]" value="DELETE_CUSTOM_FIELDS" style="border: none;"> Delete Custom Fields</li><li><input type="checkbox" name="mod_contacts[]" value="VIEW_SETTINGS" style="border: none;"> View Workflow</li><li><input type="checkbox" name="mod_contacts[]" value="CREATE_SETTINGS" style="border: none;"> Create Workflow</li><li><input type="checkbox" name="mod_contacts[]" value="EDIT_SETTINGS" style="border: none;"> Edit Workflow</li><li><input type="checkbox" name="mod_contacts[]" value="DELETE_SETTINGS" style="border: none;"> Delete Workflow</li><li><input type="checkbox" name="mod_contacts[]" value="MANAGE_CAMPAIGNS" style="border: none;"> Manage Campaigns</li><li><input type="checkbox" name="mod_contacts[]" value="CREATE_DATA_SOURCES" style="border: none;"> Create Data Sources</li><li><input type="checkbox" name="mod_contacts[]" value="EDIT_DATA_SOURCES" style="border: none;"> Edit Data Sources</li><li><input type="checkbox" name="mod_contacts[]" value="DELETE_DATA_SOURCES" style="border: none;"> Delete Data Sources</li><li><input type="checkbox" name="mod_contacts[]" value="EDIT_HTTP_POSTS" style="border: none;"> Edit Webhooks</li></ul>
					</div>

					<div class="col s4 m4">
						<ul>
<li><input type="checkbox" name="mod_contacts[]" value="EXECUTE_WEBHOOKS" style="border: none;"> Execute Webhooks</li><li><input type="checkbox" name="mod_contacts[]" value="UPDATE_SL_PROGRAMS" style="border: none;"> Manually Update SL Programs</li><li><input type="checkbox" name="mod_contacts[]" value="VIEW_BANKCC" style="border: none;"> View Saved Bank Account / CC</li><li><input type="checkbox" name="mod_contacts[]" value="DELETE_CALLS" style="border: none;"> Delete Call Logs</li><li><input type="checkbox" name="mod_contacts[]" value="DELETE_BANK_ACCOUNT" style="border: none;"> Delete Bank Accounts / CC</li><li><input type="checkbox" name="mod_contacts[]" value="SHOW_ACCT_NUM" style="border: none;"> Show Account Numbers</li><li><input type="checkbox" name="mod_contacts[]" value="DELETE_HISTORY" style="border: none;"> Delete Contact History</li><li><input type="checkbox" name="mod_contacts[]" value="RESET_PORTAL_PASS" style="border: none;"> Reset Portal Password</li><li><input type="checkbox" name="mod_contacts[]" value="MASS_EDIT" style="border: none;"> Mass Edit</li><li><input type="checkbox" name="mod_contacts[]" value="MASS_DELETE" style="border: none;"> Mass Delete</li><li><input type="checkbox" name="mod_contacts[]" value="DL_SLOAN_FILE" style="border: none;"> Download Student Loan File</li><li><input type="checkbox" name="mod_contacts[]" value="CREATE_INCOME_REPORT" style="border: none;"> Create Contact Budgets</li><li><input type="checkbox" name="mod_contacts[]" value="DELETE_INCOME_REPORT" style="border: none;"> Delete Contact Budgets</li><li><input type="checkbox" name="mod_contacts[]" value="ADD_EDIT_DEBT" style="border: none;"> Add / Edit Debts</li><li><input type="checkbox" name="mod_contacts[]" value="DELETE_DEBT" style="border: none;"> Delete Debts</li><li><input type="checkbox" name="mod_contacts[]" value="ADD_DEBT_NOTES" style="border: none;"> Add Debt Notes</li></ul>
					</div>


				</div>
			</div>
		</div>

		<div class="condcont" id="Creditors">
			<div class="row">
				<div class="col s2 m2">
					<label class="gui">Creditors   <input type="checkbox" ></label>
				</div>
				<div class="col s10 m10">
					<div class="col s12 m12">
						<p>Select All | Select None</p>
					</div>

					<div class="col s4 m4">
						<ul><li><input type="checkbox" name="mod_creditors[]" value="ADD_CREDITORS" style="border: none;"> Add Creditors</li><li><input type="checkbox" name="mod_creditors[]" value="EDIT_CREDITORS" style="border: none;"> Edit Creditors</li><li><input type="checkbox" name="mod_creditors[]" value="MERGE_CREDITORS" style="border: none;"> Merge Creditors</li></ul>
					</div>

					<div class="col s4 m4">
						<ul>
<li><input type="checkbox" name="mod_creditors[]" value="DELETE_CREDITORS" style="border: none;"> Delete Creditors</li><li><input type="checkbox" name="mod_creditors[]" value="GENERATE_CRED_LETTERS" style="border: none;"> Generate Creditor Letters</li><li><input type="checkbox" name="mod_creditors[]" value="DEBT_REPORT" style="border: none;"> View Debt Reports</li></ul>
					</div>

					<div class="col s4 m4">
						<ul>
<li><input type="checkbox" name="mod_creditors[]" value="EXPORT_DEBT_REPORTS" style="border: none;"> Export Debt Reports</li><li><input type="checkbox" name="mod_creditors[]" value="CREATE_DEBT_REPORT" style="border: none;"> Create Debt Report</li></ul>
					</div>


				</div>
			</div>
		</div>


		<div class="condcont" id="Calendar">
			<div class="row">
				<div class="col s2 m2">
					<label class="gui">Calendar <input type="checkbox" ></label>
				</div>
				<div class="col s10 m10">
					<div class="col s12 m12">
						<p>Select All | Select None</p>
					</div>

					<div class="col s4 m4">
						<ul><li><input type="checkbox" name="mod_calendar[]" value="CREATE_EVENTS" style="border: none;"> Create Events</li><li><input type="checkbox" name="mod_calendar[]" value="EDIT_EVENTS" style="border: none;"> Edit Events</li><li><input type="checkbox" name="mod_calendar[]" value="DELETE_EVENTS" style="border: none;"> Delete Events</li><li><input type="checkbox" name="mod_calendar[]" value="EDIT_EVENT_TYPES" style="border: none;"> Edit Event Types</li><li><input type="checkbox" name="mod_calendar[]" value="CREATE_CUSTOM_CALENDARS" style="border: none;"> Create Custom Calendars</li></ul>
					</div>

					<div class="col s4 m4">
						<ul>
<li><input type="checkbox" name="mod_calendar[]" value="DELETE_CALENDARS" style="border: none;"> Delete Calendars</li><li><input type="checkbox" name="mod_calendar[]" value="ADD_TASKS" style="border: none;"> Add Tasks</li><li><input type="checkbox" name="mod_calendar[]" value="EXPORT_TASKS" style="border: none;"> Export Tasks</li><li><input type="checkbox" name="mod_calendar[]" value="VIEW_ALL_TASKS" style="border: none;"> View All Tasks</li><li><input type="checkbox" name="mod_calendar[]" value="EDIT_MULTIPLE_TASKS" style="border: none;"> Edit Multiple Tasks</li></ul>
					</div>

					<div class="col s4 m4">
						<ul>
<li><input type="checkbox" name="mod_calendar[]" value="DELETE_TASK" style="border: none;"> Delete Tasks</li><li><input type="checkbox" name="mod_calendar[]" value="EDIT_TASK_TYPES" style="border: none;"> Edit Task Types</li><li><input type="checkbox" name="mod_calendar[]" value="EDIT_TASK_SETTINGS" style="border: none;"> Edit Task Settings</li><li><input type="checkbox" name="mod_calendar[]" value="AVAIL_SCH" style="border: none;"> Availability Schedule</li></ul>
					</div>


				</div>
			</div>
		</div>

			<div class="condcont" id="Enrollments">
			<div class="row">
				<div class="col s2 m2">
					<label class="gui">Enrollments  <input type="checkbox" ></label>
				</div>
				<div class="col s10 m10">
					<div class="col s12 m12">
						<p>Select All | Select None</p>
					</div>

					<div class="col s4 m4">
						<ul><li><input type="checkbox" name="mod_tools[]" value="ENROLL_CLIENT" style="border: none;"> Save Client Enrollments</li><li><input type="checkbox" name="mod_tools[]" value="CREATE_ENROLLMENT_PLAN" style="border: none;"> Create Enrollment Plans</li><li><input type="checkbox" name="mod_tools[]" value="CHANGE_ENROLLMENT_SETTINGS" style="border: none;"> Change Enrollment Settings</li><li><input type="checkbox" name="mod_tools[]" value="EDIT_ENROLLMENT_SETTINGS" style="border: none;"> Edit Enrollment Plans</li><li><input type="checkbox" name="mod_tools[]" value="SUBMIT_FILE" style="border: none;"> Submit File</li><li><input type="checkbox" name="mod_tools[]" value="RESUBMIT_FILE" style="border: none;"> Re-Submit File</li><li><input type="checkbox" name="mod_tools[]" value="APPROVE_FILE" style="border: none;"> Approve File</li><li><input type="checkbox" name="mod_tools[]" value="APPROVE_FILE2" style="border: none;"> Secondary Approval</li><li><input type="checkbox" name="mod_tools[]" value="RETURN_FILE" style="border: none;"> Return File</li><li><input type="checkbox" name="mod_tools[]" value="APPLY_SPLITS" style="border: none;"> Apply Split Templates</li><li><input type="checkbox" name="mod_tools[]" value="APPROVE_ENROLLMENT" style="border: none;"> Complete Enrollment</li></ul>
					</div>

					<div class="col s4 m4">
					<ul>
<li><input type="checkbox" name="mod_tools[]" value="GRAD_CLIENT" style="border: none;"> Graduate Clients</li><li><input type="checkbox" name="mod_tools[]" value="UNGRAD_CLIENT" style="border: none;"> Un-Graduate Clients</li><li><input type="checkbox" name="mod_tools[]" value="CANCEL_ENROLLMENT" style="border: none;"> Cancel Enrollment</li><li><input type="checkbox" name="mod_tools[]" value="LOCKED_ON_SUBMIT" style="border: none;"> Edit Submitted Contacts</li><li><input type="checkbox" name="mod_tools[]" value="EDIT_ENROLLED" style="border: none;"> Edit Enrolled Contacts</li><li><input type="checkbox" name="mod_tools[]" value="PAUSE_PAYMENTS" style="border: none;"> Pause Payments</li><li><input type="checkbox" name="mod_tools[]" value="RESUME_PAYMENTS" style="border: none;"> Resume Payments</li><li><input type="checkbox" name="mod_tools[]" value="RESET_CLIENT" style="border: none;"> Reset Clients</li><li><input type="checkbox" name="mod_tools[]" value="VIEW_LIST_DATA" style="border: none;"> View List Data</li><li><input type="checkbox" name="mod_tools[]" value="SAVINGS_VIEW" style="border: none;"> Savings View</li><li><input type="checkbox" name="mod_tools[]" value="SUMMARY_VIEW" style="border: none;"> Summary View</li></ul>
					</div>

					<div class="col s4 m4">
						<ul>
<li><input type="checkbox" name="mod_tools[]" value="CREATE_REPORTS" style="border: none;"> Create Reports</li><li><input type="checkbox" name="mod_tools[]" value="VIEW_REPORTS" style="border: none;"> View Reports</li><li><input type="checkbox" name="mod_tools[]" value="VIEW_PAYMENT_DETAILS" style="border: none;"> View Payment Details</li><li><input type="checkbox" name="mod_tools[]" value="MANUAL_TRANSACTIONS" style="border: none;"> Manual Transactions</li><li><input type="checkbox" name="mod_tools[]" value="VIEW_ALL_TRANSACTIONS" style="border: none;"> Search Transactions</li><li><input type="checkbox" name="mod_tools[]" value="EDIT_CANCEL_REASONS" style="border: none;"> Edit Cancel Reasons</li><li><input type="checkbox" name="mod_tools[]" value="SCHEDULE_TRANSFERS" style="border: none;"> Schedule Transfers</li><li><input type="checkbox" name="mod_tools[]" value="EXPORT_REPORTS" style="border: none;"> Export Reports</li><li><input type="checkbox" name="mod_tools[]" value="RESCHEDULE_PAYMENTS" style="border: none;"> Reschedule Payments</li></ul>
					</div>


				</div>
			</div>
		</div>

		<div class="condcont" id="Creditors">
			<div class="row">
				<div class="col s2 m2">
					<label class="gui">Accounting   <input type="checkbox" ></label>
				</div>
				<div class="col s10 m10">
					<div class="col s12 m12">
						<p>Select All | Select None</p>
					</div>

					<div class="col s4 m4">
						<ul><li><input type="checkbox" name="mod_accounting[]" value="CREATE_ACCT_REPORTS" style="border: none;"> Create Reports</li><li><input type="checkbox" name="mod_accounting[]" value="EXPORT_ACCT_REPORTS" style="border: none;"> Export Reports</li><li><input type="checkbox" name="mod_accounting[]" value="MODIFY_ACCT_REPORTS" style="border: none;"> Modify Reports</li></ul>
					</div>

					<div class="col s4 m4">
					<ul>
<li><input type="checkbox" name="mod_accounting[]" value="DELETE_ACCT_REPORTS" style="border: none;"> Delete Reports</li><li><input type="checkbox" name="mod_accounting[]" value="VIEW_FEE_ACCTS" style="border: none;"> View Fee Accounts</li><li><input type="checkbox" name="mod_accounting[]" value="EDIT_FEE_ACCTS" style="border: none;"> Edit Fee Accounts</li></ul>
					</div>

					<div class="col s4 m4">
						<ul>
<li><input type="checkbox" name="mod_accounting[]" value="VIEW_SUMMARIES" style="border: none;"> View Accounting Summaries</li><li><input type="checkbox" name="mod_accounting[]" value="VIEW_PIPELINE" style="border: none;"> View Pipeline Report</li></ul>
					</div>


				</div>
			</div>
		</div>

		<div class="condcont" id="guid" style="margin-top: 19px;">
			<div class="row">
				<div class="col s2 m2">
					<label class="gui">docs   <input type="checkbox" ></label>
				</div>
				<div class="col s10 m10">
					<div class="col s12 m12">
						<p>Select All | Select None</p>
					</div>

					<div class="col s4 m4">
						<ul><li><input type="checkbox" name="mod_docs[]" value="CREATE_DOCS" style="border: none;"> Create Document Templates</li></ul>
					</div>

					<div class="col s4 m4">
					<ul>
<li><input type="checkbox" name="mod_docs[]" value="EDIT_DOCS" style="border: none;"> Edit Document Templates</li></ul>
					</div>

					<div class="col s4 m4">
						<ul>
<li><input type="checkbox" name="mod_docs[]" value="DELETE_DOCS" style="border: none;"> Delete Document Templates</li></ul>
					</div>


				</div>
			</div>
		</div>

		<div class="condcont" id="files" >
			<div class="row">
				<div class="col s2 m2">
					<label class="gui">files   <input type="checkbox" ></label>
				</div>
				<div class="col s10 m10">
					<div class="col s12 m12">
						<p>Select All | Select None</p>
					</div>

					<div class="col s4 m4">
						<ul><li><input type="checkbox" name="mod_files[]" value="UPLOAD_MEDIA" style="border: none;"> Upload Media</li><li><input type="checkbox" name="mod_files[]" value="DELETE_MEDIA" style="border: none;"> Delete Media</li></ul>
					</div>

					<div class="col s4 m4">
					<ul>
<li><input type="checkbox" name="mod_files[]" value="VIEW_FTP" style="border: none;"> View FTP's</li><li><input type="checkbox" name="mod_files[]" value="CREATE_FTP" style="border: none;"> Create FTP's</li></ul>
					</div>

					<div class="col s4 m4">
						<ul>
<li><input type="checkbox" name="mod_files[]" value="DELETE_FTP" style="border: none;"> Delete FTP's</li></ul>
					</div>


				</div>
			</div>
		</div>

		<div class="condcont" id="Creditors" >
			<div class="row">
				<div class="col s2 m2">
					<label class="gui">E-Marketing    <input type="checkbox" ></label>
				</div>
				<div class="col s10 m10">
					<div class="col s12 m12">
						<p>Select All | Select None</p>
					</div>

					<div class="col s4 m4">
						<ul><li><input type="checkbox" name="mod_ecampaign[]" value="VIEW_CAMPAIGN_DESIGNS" style="border: none;"> View Campaign Designs</li><li><input type="checkbox" name="mod_ecampaign[]" value="CREATE_CAMPAIGN_DESIGNS" style="border: none;"> Create Campaign Designs</li><li><input type="checkbox" name="mod_ecampaign[]" value="DELETE_CAMPAIGN_DESIGNS" style="border: none;"> Delete Campaign Designs</li></ul>
					</div>

					<div class="col s4 m4">
					<ul>
<li><input type="checkbox" name="mod_ecampaign[]" value="SCHEDULE_LAUNCHES" style="border: none;"> Schedule Campaign Launches</li><li><input type="checkbox" name="mod_ecampaign[]" value="VIEW_CAMPAIGN_STATISTICS" style="border: none;"> View Campaign Statistics</li><li><input type="checkbox" name="mod_ecampaign[]" value="EDIT_CAMPAIGN_CATEGORIES" style="border: none;"> Edit Campaign Categories</li></ul>
					</div>

					<div class="col s4 m4">
						<ul>
<li><input type="checkbox" name="mod_ecampaign[]" value="CREATE_SENDERS" style="border: none;"> Create Senders</li><li><input type="checkbox" name="mod_ecampaign[]" value="DELETE_SENDERS" style="border: none;"> Delete Senders</li></ul>
					</div>


				</div>
			</div>
		</div>

		<div class="condcont" id="Enrollments" >
			<div class="row">
				<div class="col s2 m2">
					<label class="gui">reports    <input type="checkbox" ></label>
				</div>
				<div class="col s10 m10">
					<div class="col s12 m12">
						<p>Select All | Select None</p>
					</div>

					<div class="col s4 m4">
						<ul><li><input type="checkbox" name="mod_stats[]" value="CALL_REPORT" style="border: none;"> Call Report</li><li><input type="checkbox" name="mod_stats[]" value="CAMPAIGN_REPORT" style="border: none;"> Campaign Report</li><li><input type="checkbox" name="mod_stats[]" value="CLIXSIGN_REPORT" style="border: none;"> ClixSign Report</li><li><input type="checkbox" name="mod_stats[]" value="CONVERSION_REPORT" style="border: none;"> Conversions Report</li><li><input type="checkbox" name="mod_stats[]" value="DATASOURCE_REPORT" style="border: none;"> Data Sources Report</li><li><input type="checkbox" name="mod_stats[]" value="DOCS_REPORT" style="border: none;"> Docs Report</li><li><input type="checkbox" name="mod_stats[]" value="EMAIL_REPORT" style="border: none;"> Email Report</li><li><input type="checkbox" name="mod_stats[]" value="ENROLLMENT_REPORT" style="border: none;"> Enrollment Report</li><li><input type="checkbox" name="mod_stats[]" value="ESIGN_REPORT" style="border: none;"> E-Sign Report</li><li><input type="checkbox" name="mod_stats[]" value="FEE_REPORT" style="border: none;"> Fees Report</li></ul>
					</div>

					<div class="col s4 m4">
					<ul>
<li><input type="checkbox" name="mod_stats[]" value="FUNNEL_REPORT" style="border: none;"> Funnel Report</li><li><input type="checkbox" name="mod_stats[]" value="HISTORY_REPORT" style="border: none;"> History Report</li><li><input type="checkbox" name="mod_stats[]" value="NOTES_REPORT" style="border: none;"> Notes Report</li><li><input type="checkbox" name="mod_stats[]" value="PIVOT_REPORT" style="border: none;"> Pivots Report</li><li><input type="checkbox" name="mod_stats[]" value="STATE_REPORT" style="border: none;"> States Report</li><li><input type="checkbox" name="mod_stats[]" value="STATUS_CHANGE_REPORT" style="border: none;"> Status Change Report</li><li><input type="checkbox" name="mod_stats[]" value="STATUS_REPORT" style="border: none;"> Status Report</li><li><input type="checkbox" name="mod_stats[]" value="TASK_REPORT" style="border: none;"> Tasks Report</li><li><input type="checkbox" name="mod_stats[]" value="USER_REPORT" style="border: none;"> Users Report</li><li><input type="checkbox" name="mod_stats[]" value="CREDIT_STACK_APPS" style="border: none;"> Credit Apps</li></ul>
</div>

					<div class="col s4 m4">
						<ul>
<li><input type="checkbox" name="mod_stats[]" value="CREATE_REPORTS" style="border: none;"> Create Reports</li><li><input type="checkbox" name="mod_stats[]" value="COLLECTION_CURVES" style="border: none;"> Collection Curves Report</li></ul>
					</div>


				</div>
			</div>
		</div>

		<div class="condcont" id="admin" >
			<div class="row">
				<div class="col s2 m2">
					<label class="gui">admin    <input type="checkbox" ></label>
				</div>
				<div class="col s10 m10">
					<div class="col s12 m12">
						<p>Select All | Select None</p>
					</div>

					<div class="col s4 m4">
						<ul><li><input type="checkbox" name="mod_administration[]" value="CREATE_COMPANIES" style="border: none;"> Create Companies</li><li><input type="checkbox" name="mod_administration[]" value="EDIT_SMSTRIGGERS" style="border: none;"> Edit SMS Triggers</li><li><input type="checkbox" name="mod_administration[]" value="CREATE_USERS" style="border: none;"> Create Users</li><li><input type="checkbox" name="mod_administration[]" value="EDIT_USERS" style="border: none;"> Edit Users</li><li><input type="checkbox" name="mod_administration[]" value="DELETE_USERS" style="border: none;"> Delete Users</li><li><input type="checkbox" name="mod_administration[]" value="VIEW_ROLES" style="border: none;"> View Roles</li><li><input type="checkbox" name="mod_administration[]" value="CREATE_ROLES" style="border: none;"> Create Roles</li><li><input type="checkbox" name="mod_administration[]" value="DELETE_ROLES" style="border: none;"> Delete Roles</li></ul>
					</div>

					<div class="col s4 m4">
					<ul>
<li><input type="checkbox" name="mod_administration[]" value="CREATE_TEAMS" style="border: none;"> Create Teams</li><li><input type="checkbox" name="mod_administration[]" value="EDIT_TEAMS" style="border: none;"> Edit Teams</li><li><input type="checkbox" name="mod_administration[]" value="DELETE_TEAMS" style="border: none;"> Delete Teams</li><li><input type="checkbox" name="mod_administration[]" value="EDIT_TRIGGERS" style="border: none;"> Edit Triggers</li><li><input type="checkbox" name="mod_administration[]" value="EDIT_PROGRAM_OPTIONS" style="border: none;"> Edit Program Options</li><li><input type="checkbox" name="mod_administration[]" value="EDIT_COMP_TEMPLATES" style="border: none;"> Edit Compensation Templates</li><li><input type="checkbox" name="mod_administration[]" value="EDIT PAYEES" style="border: none;"> Edit Payees</li><li><input type="checkbox" name="mod_administration[]" value="FIELD_SUPPRESS" style="border: none;"> Setup Field Permissions</li></ul>
</div>

					<div class="col s4 m4">
						<ul>
<li><input type="checkbox" name="mod_administration[]" value="VIEW_LOG" style="border: none;"> View System Log</li><li><input type="checkbox" name="mod_administration[]" value="EDIT_SYSTEM_SETTINGS" style="border: none;"> Edit System Settings</li><li><input type="checkbox" name="mod_administration[]" value="LOGIN_AS_USER" style="border: none;"> Login As Other Users</li><li><input type="checkbox" name="mod_administration[]" value="BUDGET_ANALYSIS" style="border: none;"> Budget Setup</li><li><input type="checkbox" name="mod_administration[]" value="VIEW_INTEGRATIONS" style="border: none;"> View Integrations</li><li><input type="checkbox" name="mod_administration[]" value="ADD_EDIT_INTEGRATIONS" style="border: none;"> Add / Edit Integrations</li><li><input type="checkbox" name="mod_administration[]" value="VIEW_USAGE" style="border: none;"> View Usage</li></ul>
					</div>


				</div>
			</div>
		</div>

		 

	</div>
</div>