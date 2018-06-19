<div class="main-box">
	<div class="cmdtitle">
		<a href="<?php echo base_url(); ?>Enrollments">Enrollments</a>><a href="<?php echo base_url(); ?>Settings">Settings</a>
	</div>

	<div class="main-menu row">
		  <nav class="contactnav">
		    <div class="nav-wrapper connavwapp">
		      <ul id="nav-mobile" class="hide-on-med-and-down" style="position: relative;left: 5px;}">
		        <li><a href="<?php echo base_url(); ?>Html_document"><img class="iconstyle" src="<?php echo base_url() ?>html/images/accept.png">save settings</a></li>
		      </ul>
		    </div>
		  </nav>

		  <div class="chantitlw">Status Changes</div>

		  <div class="col s2 m2">
		  	<div class="labeltitle">On Submission</div>
		  </div>
		  <div class="col s10 m10">
		  	<div class="selectbox">
		  		<select id="submit_status" name="submit_status" class="">
					<option value="">--Select--</option><option value="126752">Lead : Follow Up</option>
					<option value="126776" selected="selected">Underwriting : Submitted</option>
					<option value="126782">Client : Enrolled/Active</option>
					<option value="126785">Client : Enrolled/Paused</option>
					<option value="126788">Client : Enrolled/NSF Returned</option>
					<option value="126791">Client : Graduated</option>
					<option value="126794">Client : Cancelled</option>
					<option value="126746">Lead : New Lead</option>
					<option value="126779">Underwriting : Approved</option>
					<option value="126758">Lead : VM 2</option>
					<option value="126761">Lead : VM 3</option>
					<option value="126764">Lead : Docs Out</option>
					<option value="126755">Lead : VM 1</option>
					<option value="126767">Lead : Returned File</option>
					<option value="126770">Lead : Do Not Call</option>
					<option value="126773">Lead : Dead</option>
					</select>
		  	</div>
		  </div>

		  <div class="col s2 m2">
		  	<div class="labeltitle">On Returned</div>
		  </div>
		  <div class="col s10 m10">
		  	<div class="selectbox">
		  	<select id="return_status" name="return_status" class="">
				<option value="">--Select--</option><option value="126752">Lead : Follow Up</option>
				<option value="126776">Underwriting : Submitted</option>
				<option value="126782">Client : Enrolled/Active</option>
				<option value="126785">Client : Enrolled/Paused</option>
				<option value="126788">Client : Enrolled/NSF Returned</option>
				<option value="126791">Client : Graduated</option>
				<option value="126794">Client : Cancelled</option>
				<option value="126746">Lead : New Lead</option>
				<option value="126779">Underwriting : Approved</option>
				<option value="126758">Lead : VM 2</option>
				<option value="126761">Lead : VM 3</option>
				<option value="126764">Lead : Docs Out</option>
				<option value="126755">Lead : VM 1</option>
				<option value="126767" selected="selected">Lead : Returned File</option>
				<option value="126770">Lead : Do Not Call</option>
				<option value="126773">Lead : Dead</option>

				</select>
		  	</div>
		  </div>


		  <div class="col s2 m2">
		  	<div class="labeltitle">On Reject</div>
		  </div>
		  <div class="col s10 m10">
		  	<div class="selectbox">
		  		<select id="reject_status" name="reject_status" class="">
					<option value="">--Select--</option><option value="126752">Lead : Follow Up</option>
					<option value="126776">Underwriting : Submitted</option>
					<option value="126782">Client : Enrolled/Active</option>
					<option value="126785">Client : Enrolled/Paused</option>
					<option value="126788">Client : Enrolled/NSF Returned</option>
					<option value="126791">Client : Graduated</option>
					<option value="126794">Client : Cancelled</option>
					<option value="126746">Lead : New Lead</option>
					<option value="126779">Underwriting : Approved</option>
					<option value="126758">Lead : VM 2</option>
					<option value="126761">Lead : VM 3</option>
					<option value="126764">Lead : Docs Out</option>
					<option value="126755">Lead : VM 1</option>
					<option value="126767">Lead : Returned File</option>
					<option value="126770">Lead : Do Not Call</option>
					<option value="126773">Lead : Dead</option>

					</select>
		  	</div>
		  </div>


		  <div class="col s2 m2">
		  	<div class="labeltitle">On Approval</div>
		  </div>
		  <div class="col s10 m10">
		  	<div class="selectbox">
		  	<select id="approve_status" name="approve_status" class="">
				<option value="">--Select--</option><option value="126752">Lead : Follow Up</option>
				<option value="126776">Underwriting : Submitted</option>
				<option value="126782">Client : Enrolled/Active</option>
				<option value="126785">Client : Enrolled/Paused</option>
				<option value="126788">Client : Enrolled/NSF Returned</option>
				<option value="126791">Client : Graduated</option>
				<option value="126794">Client : Cancelled</option>
				<option value="126746">Lead : New Lead</option>
				<option value="126779" selected="selected">Underwriting : Approved</option>
				<option value="126758">Lead : VM 2</option>
				<option value="126761">Lead : VM 3</option>
				<option value="126764">Lead : Docs Out</option>
				<option value="126755">Lead : VM 1</option>
				<option value="126767">Lead : Returned File</option>
				<option value="126770">Lead : Do Not Call</option>
				<option value="126773">Lead : Dead</option>

				</select>
		  	</div>
		  </div>


		  <div class="col s2 m2">
		  	<div class="labeltitle">On Second Approval</div>
		  </div>
		  <div class="col s10 m10">
		  	<div class="selectbox">
		  <select id="approve_status2" name="approve_status2" class="">
<option value="">--Select--</option><option value="126752">Lead : Follow Up</option>
<option value="126776">Underwriting : Submitted</option>
<option value="126782">Client : Enrolled/Active</option>
<option value="126785">Client : Enrolled/Paused</option>
<option value="126788">Client : Enrolled/NSF Returned</option>
<option value="126791">Client : Graduated</option>
<option value="126794">Client : Cancelled</option>
<option value="126746">Lead : New Lead</option>
<option value="126779">Underwriting : Approved</option>
<option value="126758">Lead : VM 2</option>
<option value="126761">Lead : VM 3</option>
<option value="126764">Lead : Docs Out</option>
<option value="126755">Lead : VM 1</option>
<option value="126767">Lead : Returned File</option>
<option value="126770">Lead : Do Not Call</option>
<option value="126773">Lead : Dead</option>

</select>
		  	</div>
		  </div>



		  <div class="col s2 m2">
		  	<div class="labeltitle">On Enrollment</div>
		  </div>
		  <div class="col s10 m10">
		  	<div class="selectbox">
		  <select id="enroll_status" name="enroll_status" class="">
<option value="">--Select--</option><option value="126752">Lead : Follow Up</option>
<option value="126776">Underwriting : Submitted</option>
<option value="126782" selected="selected">Client : Enrolled/Active</option>
<option value="126785">Client : Enrolled/Paused</option>
<option value="126788">Client : Enrolled/NSF Returned</option>
<option value="126791">Client : Graduated</option>
<option value="126794">Client : Cancelled</option>
<option value="126746">Lead : New Lead</option>
<option value="126779">Underwriting : Approved</option>
<option value="126758">Lead : VM 2</option>
<option value="126761">Lead : VM 3</option>
<option value="126764">Lead : Docs Out</option>
<option value="126755">Lead : VM 1</option>
<option value="126767">Lead : Returned File</option>
<option value="126770">Lead : Do Not Call</option>
<option value="126773">Lead : Dead</option>

</select>
		  	</div>
		  </div>


		  <div class="col s2 m2">
		  	<div class="labeltitle">De-Enroll</div>
		  </div>
		  <div class="col s10 m10">
		  	<div class="selectbox">
		  	<select id="deenroll_status" name="deenroll_status" class="">
<option value="">--Select--</option><option value="126752">Lead : Follow Up</option>
<option value="126776">Underwriting : Submitted</option>
<option value="126782">Client : Enrolled/Active</option>
<option value="126785">Client : Enrolled/Paused</option>
<option value="126788">Client : Enrolled/NSF Returned</option>
<option value="126791">Client : Graduated</option>
<option value="126794">Client : Cancelled</option>
<option value="126746">Lead : New Lead</option>
<option value="126779">Underwriting : Approved</option>
<option value="126758">Lead : VM 2</option>
<option value="126761">Lead : VM 3</option>
<option value="126764">Lead : Docs Out</option>
<option value="126755">Lead : VM 1</option>
<option value="126767">Lead : Returned File</option>
<option value="126770">Lead : Do Not Call</option>
<option value="126773">Lead : Dead</option>

</select>
		  	</div>
		  </div>


		  <div class="col s2 m2">
		  	<div class="labeltitle">On Re-Enroll</div>
		  </div>
		  <div class="col s10 m10">
		  	<div class="selectbox">
		  	<select id="reenroll_status" name="reenroll_status" class="">
<option value="">--Select--</option><option value="126752">Lead : Follow Up</option>
<option value="126776">Underwriting : Submitted</option>
<option value="126782" selected="selected">Client : Enrolled/Active</option>
<option value="126785">Client : Enrolled/Paused</option>
<option value="126788">Client : Enrolled/NSF Returned</option>
<option value="126791">Client : Graduated</option>
<option value="126794">Client : Cancelled</option>
<option value="126746">Lead : New Lead</option>
<option value="126779">Underwriting : Approved</option>
<option value="126758">Lead : VM 2</option>
<option value="126761">Lead : VM 3</option>
<option value="126764">Lead : Docs Out</option>
<option value="126755">Lead : VM 1</option>
<option value="126767">Lead : Returned File</option>
<option value="126770">Lead : Do Not Call</option>
<option value="126773">Lead : Dead</option>

</select>
		  	</div>
		  </div>


		  <div class="col s2 m2">
		  	<div class="labeltitle">On Graduation</div>
		  </div>
		  <div class="col s10 m10">
		  	<div class="selectbox">
		  <select id="grad_status" name="grad_status" class="">
<option value="">--Select--</option><option value="126752">Lead : Follow Up</option>
<option value="126776">Underwriting : Submitted</option>
<option value="126782">Client : Enrolled/Active</option>
<option value="126785">Client : Enrolled/Paused</option>
<option value="126788">Client : Enrolled/NSF Returned</option>
<option value="126791" selected="selected">Client : Graduated</option>
<option value="126794">Client : Cancelled</option>
<option value="126746">Lead : New Lead</option>
<option value="126779">Underwriting : Approved</option>
<option value="126758">Lead : VM 2</option>
<option value="126761">Lead : VM 3</option>
<option value="126764">Lead : Docs Out</option>
<option value="126755">Lead : VM 1</option>
<option value="126767">Lead : Returned File</option>
<option value="126770">Lead : Do Not Call</option>
<option value="126773">Lead : Dead</option>

</select>
		  	</div>
		  </div>


		  <div class="col s2 m2">
		  	<div class="labeltitle">On Un-Graduate</div>
		  </div>
		  <div class="col s10 m10">
		  	<div class="selectbox">
		  <select id="ungrad_status" name="ungrad_status" class="">
<option value="">--Select--</option><option value="126752">Lead : Follow Up</option>
<option value="126776">Underwriting : Submitted</option>
<option value="126782">Client : Enrolled/Active</option>
<option value="126785">Client : Enrolled/Paused</option>
<option value="126788">Client : Enrolled/NSF Returned</option>
<option value="126791">Client : Graduated</option>
<option value="126794">Client : Cancelled</option>
<option value="126746">Lead : New Lead</option>
<option value="126779">Underwriting : Approved</option>
<option value="126758">Lead : VM 2</option>
<option value="126761">Lead : VM 3</option>
<option value="126764">Lead : Docs Out</option>
<option value="126755">Lead : VM 1</option>
<option value="126767">Lead : Returned File</option>
<option value="126770">Lead : Do Not Call</option>
<option value="126773">Lead : Dead</option>

</select>
		  	</div>
		  </div>


		  <div class="col s2 m2">
		  	<div class="labeltitle">On Dropped</div>
		  </div>
		  <div class="col s10 m10">
		  	<div class="selectbox">
		  	<select id="dropped_status" name="dropped_status" class="">
<option value="">--Select--</option><option value="126752">Lead : Follow Up</option>
<option value="126776">Underwriting : Submitted</option>
<option value="126782">Client : Enrolled/Active</option>
<option value="126785">Client : Enrolled/Paused</option>
<option value="126788">Client : Enrolled/NSF Returned</option>
<option value="126791">Client : Graduated</option>
<option value="126794" selected="selected">Client : Cancelled</option>
<option value="126746">Lead : New Lead</option>
<option value="126779">Underwriting : Approved</option>
<option value="126758">Lead : VM 2</option>
<option value="126761">Lead : VM 3</option>
<option value="126764">Lead : Docs Out</option>
<option value="126755">Lead : VM 1</option>
<option value="126767">Lead : Returned File</option>
<option value="126770">Lead : Do Not Call</option>
<option value="126773">Lead : Dead</option>

</select>
		  	</div>
		  </div>


		  <div class="col s2 m2">
		  	<div class="labeltitle">On Contract Upload</div>
		  </div>
		  <div class="col s10 m10">
		  	<div class="selectbox">
		  <select id="contract_status" name="contract_status" class="">
<option value="">--Select--</option><option value="126752">Lead : Follow Up</option>
<option value="126776">Underwriting : Submitted</option>
<option value="126782">Client : Enrolled/Active</option>
<option value="126785">Client : Enrolled/Paused</option>
<option value="126788">Client : Enrolled/NSF Returned</option>
<option value="126791">Client : Graduated</option>
<option value="126794">Client : Cancelled</option>
<option value="126746">Lead : New Lead</option>
<option value="126779">Underwriting : Approved</option>
<option value="126758">Lead : VM 2</option>
<option value="126761">Lead : VM 3</option>
<option value="126764">Lead : Docs Out</option>
<option value="126755">Lead : VM 1</option>
<option value="126767">Lead : Returned File</option>
<option value="126770">Lead : Do Not Call</option>
<option value="126773">Lead : Dead</option>

</select>
		  	</div>
		  </div>


		  <div class="col s2 m2">
		  	<div class="labeltitle">First Payment Processed</div>
		  </div>
		  <div class="col s10 m10">
		  	<div class="selectbox">
		  	<select id="first_pay_proc_status" name="first_pay_proc_status" class="">
<option value="">--Select--</option><option value="126752">Lead : Follow Up</option>
<option value="126776">Underwriting : Submitted</option>
<option value="126782">Client : Enrolled/Active</option>
<option value="126785">Client : Enrolled/Paused</option>
<option value="126788">Client : Enrolled/NSF Returned</option>
<option value="126791">Client : Graduated</option>
<option value="126794">Client : Cancelled</option>
<option value="126746">Lead : New Lead</option>
<option value="126779">Underwriting : Approved</option>
<option value="126758">Lead : VM 2</option>
<option value="126761">Lead : VM 3</option>
<option value="126764">Lead : Docs Out</option>
<option value="126755">Lead : VM 1</option>
<option value="126767">Lead : Returned File</option>
<option value="126770">Lead : Do Not Call</option>
<option value="126773">Lead : Dead</option>

</select>
		  	</div>
		  </div>


		  <div class="col s2 m2">
		  	<div class="labeltitle">First Payment Cleared</div>
		  </div>
		  <div class="col s10 m10">
		  	<div class="selectbox">
		  <select id="first_pay_status" name="first_pay_status" class="">
<option value="">--Select--</option><option value="126752">Lead : Follow Up</option>
<option value="126776">Underwriting : Submitted</option>
<option value="126782">Client : Enrolled/Active</option>
<option value="126785">Client : Enrolled/Paused</option>
<option value="126788">Client : Enrolled/NSF Returned</option>
<option value="126791">Client : Graduated</option>
<option value="126794">Client : Cancelled</option>
<option value="126746">Lead : New Lead</option>
<option value="126779">Underwriting : Approved</option>
<option value="126758">Lead : VM 2</option>
<option value="126761">Lead : VM 3</option>
<option value="126764">Lead : Docs Out</option>
<option value="126755">Lead : VM 1</option>
<option value="126767">Lead : Returned File</option>
<option value="126770">Lead : Do Not Call</option>
<option value="126773">Lead : Dead</option>

</select>
		  	</div>
		  </div>

		  <div class="col s2 m2">
		  	<div class="labeltitle">First Payment Return</div>
		  </div>
		  <div class="col s10 m10">
		  	<div class="selectbox">
		 <select id="first_pay_nsf_status" name="first_pay_nsf_status" class="">
<option value="">--Select--</option><option value="126752">Lead : Follow Up</option>
<option value="126776">Underwriting : Submitted</option>
<option value="126782">Client : Enrolled/Active</option>
<option value="126785">Client : Enrolled/Paused</option>
<option value="126788">Client : Enrolled/NSF Returned</option>
<option value="126791">Client : Graduated</option>
<option value="126794">Client : Cancelled</option>
<option value="126746">Lead : New Lead</option>
<option value="126779">Underwriting : Approved</option>
<option value="126758">Lead : VM 2</option>
<option value="126761">Lead : VM 3</option>
<option value="126764">Lead : Docs Out</option>
<option value="126755">Lead : VM 1</option>
<option value="126767">Lead : Returned File</option>
<option value="126770">Lead : Do Not Call</option>
<option value="126773">Lead : Dead</option>

</select>
		  	</div>
		  </div>


		  <div class="col s2 m2">
		  	<div class="labeltitle">Final Payment</div>
		  </div>
		  <div class="col s10 m10">
		  	<div class="selectbox">
		<select id="final_pay_status" name="final_pay_status" class="">
<option value="">--Select--</option><option value="126752">Lead : Follow Up</option>
<option value="126776">Underwriting : Submitted</option>
<option value="126782">Client : Enrolled/Active</option>
<option value="126785">Client : Enrolled/Paused</option>
<option value="126788">Client : Enrolled/NSF Returned</option>
<option value="126791">Client : Graduated</option>
<option value="126794">Client : Cancelled</option>
<option value="126746">Lead : New Lead</option>
<option value="126779">Underwriting : Approved</option>
<option value="126758">Lead : VM 2</option>
<option value="126761">Lead : VM 3</option>
<option value="126764">Lead : Docs Out</option>
<option value="126755">Lead : VM 1</option>
<option value="126767">Lead : Returned File</option>
<option value="126770">Lead : Do Not Call</option>
<option value="126773">Lead : Dead</option>

</select>
		  	</div>
		  </div>

<div class="chantitlw">Workflow Settings</div>

           <div class="col s2 m2">
		  	<div class="labeltitle">Require Plan</div>
		  </div>

		  <div class="col s10 m10">
		   <input type="checkbox" />
		  </div>
	
		  <div class="col s2 m2">
		  	<div class="labeltitle">Require Loan Program</div>
		  </div>
		  <div class="col s10 m10">
			        <input type="checkbox" />
		  </div>

		  <div class="col s2 m2">
		  	<div class="labeltitle">Require Bank</div>
		  </div>
		  <div class="col s10 m10">
			        <input type="checkbox" />
			</div>
		 

		  <div class="col s2 m2">
		  	<div class="labeltitle">Require Credit Card</div>
		  </div>
		  <div class="col s10 m10">
			        <input type="checkbox" />
			</div>
		  
		  <div class="col s2 m2">
		  	<div class="labeltitle">Require Either Bank or CC</div>
		  </div>
		  <div class="col s10 m10">
			        <input type="checkbox" />
			</div>
		  
		  <div class="col s2 m2">
		  	<div class="labeltitle">Require Debts</div>
		  </div>
		  <div class="col s10 m10">
			        <input type="checkbox" />
			</div>
		  
		  <div class="col s2 m2">
		  	<div class="labeltitle">Require Submit</div>
		  </div>
		  <div class="col s10 m10">
			        <input type="checkbox" />
			</div>
		  
		  <div class="col s2 m2">
		  	<div class="labeltitle">Require Contract To Submit</div>
		  </div>
		  <div class="col s10 m10">
			        <input type="checkbox" />
			</div>
		  
		  <div class="col s2 m2">
		  	<div class="labeltitle">Require Contract To Enroll</div>
		  </div>
		  <div class="col s10 m10">
			        <input type="checkbox" />
			</div>
		  
		  <div class="col s2 m2">
		  	<div class="labeltitle">Allow Reject</div>
		  </div>
		  <div class="col s10 m10">
			        <input type="checkbox" />
			</div>
		  

		  <div class="col s2 m2">
		  	<div class="labeltitle">Require Approval</div>
		  </div>
		  <div class="col s10 m10">
			        <input type="checkbox" />
			</div>
		  
		  <div class="col s2 m2">
		  	<div class="labeltitle">Require Secondary Approval</div>
		  </div>
		  <div class="col s10 m10">
			        <input type="checkbox" />
			</div>
		  
		  <div class="col s2 m2">
		  	<div class="labeltitle">Require Inc/Exp</div>
		  </div>
		  <div class="col s10 m10">
			        <input type="checkbox" />
			</div>
		  
		  <div class="col s2 m2">
		  	<div class="labeltitle">Enforce Required Fields</div>
		  </div>
		  <div class="col s10 m10">
			        <input type="checkbox" />
			</div>
		  

		  <div class="col s2 m2">
		  	<div class="labeltitle">Require Comp Template</div>
		  </div>
		  <div class="col s10 m10">
		      <input type="checkbox" />
			</div>

<div class="chantitlw">Company Assignment Settings</div>			
		   
		    <div class="col s2 m2">
		  	<div class="labeltitle">Marketing Company</div>
		  </div>
		  <div class="col s10 m10">
		      <input type="checkbox" />
		      <div class="seccc">
		      	<select id="comporder_1" name="comporder_1" class="">
<option value="">--Select--</option><option value="bs">Before Submit</option>
<option value="ba1">Before Approval 1</option>
<option value="ba2">Before Approval 2</option>

</select>
		      </div>
			</div>

			<div class="col s2 m2">
		  	<div class="labeltitle">Servicing Company</div>
		  </div>
		  <div class="col s10 m10">
		      <input type="checkbox" />
		      <div class="seccc">
		      <select id="comporder_2" name="comporder_2" class="">
<option value="">--Select--</option><option value="bs">Before Submit</option>
<option value="ba1">Before Approval 1</option>
<option value="ba2">Before Approval 2</option>

</select>
		      </div>
			</div>

			<div class="col s2 m2">
		  	<div class="labeltitle">Law Firm</div>
		  </div>
		  <div class="col s10 m10">
		      <input type="checkbox" />
		      <div class="seccc">
		      	<select id="comporder_3" name="comporder_3" class="">
<option value="">--Select--</option><option value="bs">Before Submit</option>
<option value="ba1">Before Approval 1</option>
<option value="ba2">Before Approval 2</option>

</select>
		      </div>
			</div>

			<div class="col s2 m2">
		  	<div class="labeltitle">Lead Vendor</div>
		  </div>
		  <div class="col s10 m10">
		      <input type="checkbox" />
		      <div class="seccc">
		      	<select id="comporder_1" name="comporder_1" class="">
<option value="">--Select--</option><option value="bs">Before Submit</option>
<option value="ba1">Before Approval 1</option>
<option value="ba2">Before Approval 2</option>

</select>
		      </div>
			</div>


			<div class="col s2 m2">
		  	<div class="labeltitle">Partner</div>
		  </div>
		  <div class="col s10 m10">
		      <input type="checkbox" />
		      <div class="seccc">
		      	<select id="comporder_1" name="comporder_1" class="">
<option value="">--Select--</option><option value="bs">Before Submit</option>
<option value="ba1">Before Approval 1</option>
<option value="ba2">Before Approval 2</option>

</select>
		      </div>
			</div>

			<div class="chantitlw">Role Assignment Settings</div>			
		   
		    <div class="col s2 m2">
		  	<div class="labeltitle">Marketing Company</div>
		  </div>
		  <div class="col s10 m10">
		      <input type="checkbox" />
		      <div class="seccc">
		      	<select id="comporder_1" name="comporder_1" class="">
<option value="">--Select--</option><option value="bs">Before Submit</option>
<option value="ba1">Before Approval 1</option>
<option value="ba2">Before Approval 2</option>

</select>
		      </div>
			</div>

			<div class="chantitlw">Payment Settings</div>			
		   
		    <div class="col s2 m2">
		  	<div class="labeltitle">Pause On NSF</div>
		  </div>
		  <div class="col s10 m10">
		      <input type="checkbox" />
		  </div>


		  	  <div class="col s2 m2">
		  	<div class="labeltitle">On Pause</div>
		  </div>
		  <div class="col s10 m10">
		  	<div class="selectbox">
		<select id="pause_status" name="pause_status" class="">
<option value="">--Select--</option><option value="126752">Lead : Follow Up</option>
<option value="126776">Underwriting : Submitted</option>
<option value="126782">Client : Enrolled/Active</option>
<option value="126785" selected="selected">Client : Enrolled/Paused</option>
<option value="126788">Client : Enrolled/NSF Returned</option>
<option value="126791">Client : Graduated</option>
<option value="126794">Client : Cancelled</option>
<option value="126746">Lead : New Lead</option>
<option value="126779">Underwriting : Approved</option>
<option value="126758">Lead : VM 2</option>
<option value="126761">Lead : VM 3</option>
<option value="126764">Lead : Docs Out</option>
<option value="126755">Lead : VM 1</option>
<option value="126767">Lead : Returned File</option>
<option value="126770">Lead : Do Not Call</option>
<option value="126773">Lead : Dead</option>

</select>
		  	</div>
		  </div>




		  	  <div class="col s2 m2">
		  	<div class="labeltitle">On Resume</div>
		  </div>
		  <div class="col s10 m10">
		  	<div class="selectbox">
		<select id="pause_status" name="pause_status" class="">
<option value="">--Select--</option><option value="126752">Lead : Follow Up</option>
<option value="126776">Underwriting : Submitted</option>
<option value="126782">Client : Enrolled/Active</option>
<option value="126785" selected="selected">Client : Enrolled/Paused</option>
<option value="126788">Client : Enrolled/NSF Returned</option>
<option value="126791">Client : Graduated</option>
<option value="126794">Client : Cancelled</option>
<option value="126746">Lead : New Lead</option>
<option value="126779">Underwriting : Approved</option>
<option value="126758">Lead : VM 2</option>
<option value="126761">Lead : VM 3</option>
<option value="126764">Lead : Docs Out</option>
<option value="126755">Lead : VM 1</option>
<option value="126767">Lead : Returned File</option>
<option value="126770">Lead : Do Not Call</option>
<option value="126773">Lead : Dead</option>

</select>
		  	</div>
		  </div>



		  	  <div class="col s2 m2">
		  	<div class="labeltitle">On Returned Payment</div>
		  </div>
		  <div class="col s10 m10">
		  	<div class="selectbox">
		<select id="pause_status" name="pause_status" class="">
<option value="">--Select--</option><option value="126752">Lead : Follow Up</option>
<option value="126776">Underwriting : Submitted</option>
<option value="126782">Client : Enrolled/Active</option>
<option value="126785" selected="selected">Client : Enrolled/Paused</option>
<option value="126788">Client : Enrolled/NSF Returned</option>
<option value="126791">Client : Graduated</option>
<option value="126794">Client : Cancelled</option>
<option value="126746">Lead : New Lead</option>
<option value="126779">Underwriting : Approved</option>
<option value="126758">Lead : VM 2</option>
<option value="126761">Lead : VM 3</option>
<option value="126764">Lead : Docs Out</option>
<option value="126755">Lead : VM 1</option>
<option value="126767">Lead : Returned File</option>
<option value="126770">Lead : Do Not Call</option>
<option value="126773">Lead : Dead</option>

</select>
		  	</div>
		  </div>



		  	  <div class="col s2 m2">
		  	<div class="labeltitle">On Error Processing</div>
		  </div>
		  <div class="col s10 m10">
		  	<div class="selectbox">
		<select id="pause_status" name="pause_status" class="">
<option value="">--Select--</option><option value="126752">Lead : Follow Up</option>
<option value="126776">Underwriting : Submitted</option>
<option value="126782">Client : Enrolled/Active</option>
<option value="126785" selected="selected">Client : Enrolled/Paused</option>
<option value="126788">Client : Enrolled/NSF Returned</option>
<option value="126791">Client : Graduated</option>
<option value="126794">Client : Cancelled</option>
<option value="126746">Lead : New Lead</option>
<option value="126779">Underwriting : Approved</option>
<option value="126758">Lead : VM 2</option>
<option value="126761">Lead : VM 3</option>
<option value="126764">Lead : Docs Out</option>
<option value="126755">Lead : VM 1</option>
<option value="126767">Lead : Returned File</option>
<option value="126770">Lead : Do Not Call</option>
<option value="126773">Lead : Dead</option>

</select>
		  	</div>
		  </div>



		  	  <div class="col s2 m2">
		  	<div class="labeltitle">Auto-Assign Debit Subtype</div>
		  </div>
		  <div class="col s10 m10">
		  	<div class="selectbox">
		<select id="pause_status" name="pause_status" class="">
<option value="">--Select--</option><option value="126752">Lead : Follow Up</option>

</select>
		  	</div>
		  </div>


			
 

	</div>
</div>