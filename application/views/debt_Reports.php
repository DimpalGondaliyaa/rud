<div class="main-box">
	<div class="cmdtitle">
	<a  href="<?php echo base_url(); ?>Ccreditors">Ccreditors</a> > <a href="<?php echo base_url(); ?>Debt_Reports">DebtReports</a>
	</div>

	<div class="main-menu row">
		 <nav class="contactnav">
		    <div class="nav-wrapper connavwapp">
		      <ul id="nav-mobile" class="hide-on-med-and-down" style="position: relative;left: 5px;}">
		       <li><a href="#!" id="creatrepa"><img class="iconstyle" src="<?php echo base_url() ?>html/images/add.png" >create new report </a></li>
		       </ul>
		    </div>
		  </nav>

		  <div class="col s12 m3">
		  	<div class="left w15 formsection_light">
			    <div style="padding-bottom:10px;"></div>    <h3 class="theme">Reports (1)</h3>
			    <ul class="settlist_small">
			        <li><a href="#!">ggff</a></li>    </ul>
			    <div class="spacer15"></div>
			</div>
		  </div>

		  <div class="col s12 m9"  id="nodata">
		  	<p>no data selected. choose a report on the left.</p>
		  </div>

		   <div class="col s12 m9" id="creatrep" style="display: none;">
		  	<div class="topbox">
		  		<div class="left">
		  			<h3>Customize Report</h3>
		  		</div>
		  		<div class="right">
		  			My Default Report
		  			<input type="checkbox" class="mycheck">
		  			<a href="#!" class="btn saverepbtn">save report</a>
		  		</div>
		  	</div>

		  	<div class="bottomleftbox col s12 m8" >
		  		<div class="generalform" id="filtersa">
        <h3 class="theme title">Filters</h3>

                   
                 <div class="col s12 m2">  
                <label>File Type</label></div>
                <div class="col s12 m10">
                <select id="file_type" name="file_type" class="">
<option value="">--Any--</option><option value="12">Student Loans</option>

</select></div>
          
        
  <div class="col s12 m2">             <label>Created By</label>
</div>             <div class="col s12 m10">
 <select id="created_by" name="created_by" class="">
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
       
 <div class="col s12 m2"> <label>Assigned To User</label></div>
   <div class="col s12 m10"><select id="assigned_to" name="assigned_to" class="">
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

         <div class="col s12 m2"> 
            <label>Assigned To Users Of Team</label></div>
               <div class="col s12 m10">
            <select id="team_id" name="team_id" class="">
<option value="">--Select--</option><option value="11040">gggg</option>
<option value="10568">Sales</option>
<option value="10562">Super Admins</option>

</select>
</div>

 <div class="col s12 m2"> 
            <label>Assigned Company</label></div>
               <div class="col s12 m10">
            <select id="company_id" name="company_id[]" class="" size="5" multiple="multiple">
<option value="">--Select--</option><option value="22493">United Students Of America</option>

</select>
</div>

                    <div class="col s12 m2"> <label>Law Firm</label></div>
                    <div class="col s12 m10">
                    	<select id="ctype3" name="ctype3[]" class="" size="5" multiple="multiple">
<option value="22493">United Students Of America</option>
</select>
</div>        
        
        <div class="col s12 m2"> 
            <label>Contact Status</label></div>
            <div class="col s12 m10">
            <select id="leadstatus" name="leadstatus[]" class="" size="6" data-placeholder="--select Statuses--" multiple="multiple">
<option value="126752">Student Loans : Lead : Follow Up</option>
<option value="126746">Student Loans : Lead : New Lead</option>
<option value="126758">Student Loans : Lead : VM 2</option>
<option value="126761">Student Loans : Lead : VM 3</option>
<option value="126764">Student Loans : Lead : Docs Out</option>
<option value="126755">Student Loans : Lead : VM 1</option>
<option value="126767">Student Loans : Lead : Returned File</option>
<option value="126770">Student Loans : Lead : Do Not Call</option>
<option value="126773">Student Loans : Lead : Dead</option>
<option value="126776">Student Loans : Underwriting : Submitted</option>
<option value="126779">Student Loans : Underwriting : Approved</option>
<option value="126791">Student Loans : Client : Graduated</option>
<option value="126785">Student Loans : Client : Enrolled/Paused</option>
<option value="126788">Student Loans : Client : Enrolled/NSF Returned</option>
<option value="126782">Student Loans : Client : Enrolled/Active</option>
<option value="126794">Student Loans : Client : Cancelled</option>

</select>
        </div>

<div class="col s12 m2"> 
            <label>Program</label></div>
               <div class="col s12 m10">
                        <select id="program" name="program[]" class="" size="6" data-placeholder="--select programs--" multiple="multiple">
<option value="18404">$1,392 Enrollment Plan</option>
<option value="18407">$1,984 Enrollment Plan</option>
<option value="18410">$3,056 Enrollment Plan</option>
<option value="18547">g,mf;kas fdgps,dfgp[;</option>
<option value="18873">James Plan</option>
<option value="18504">trrtrtrt</option>

</select>
        </div>

<div class="col s12 m2"> 
            <label>Data Source</label></div>
            <div class="col s12 m10">
            <select id="data_source" name="data_source[]" class="" size="6" data-placeholder="--select sources--" multiple="multiple">
<option value="45561">vvv</option>

</select>
        </div>

<div class="col s12 m2"> 
                <label>Campaigns</label>
</div>                <div class="col s12 m10"><select id="campaign" name="campaign[]" class="" size="6" data-placeholder="--select sources--" multiple="multiple">
<option value="68073">ggffgfg</option>

</select>
            </div>
        
        <div class="col s12 m2"> 
            <label>Enrolled</label></div>
            <div class="col s12 m10">
            <select id="contact_enrolled" name="contact_enrolled" value="">
                <option value="-1" selected="selected">--Select--</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>

        <div class="col s12 m2"> 
            <label>Submitted</label>
</div>
<div class="col s12 m10">
            <select id="contact_submitted" name="contact_submitted" value="">
                <option value="-1" selected="selected">--Select--</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>

        <div class="col s12 m2"> 
            <label>Approved</label></div>
            <div class="col s12 m10">
            <select id="contact_approved" name="contact_approved" value="">
                <option value="-1" selected="selected">--Select--</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>

        <div class="col s12 m2"> 
            <label>Rejected</label></div>
            <div class="col s12 m10">
            <select id="contact_rejected" name="contact_rejected" value="">
                <option value="-1" selected="selected">--Select--</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>

        <div class="col s12 m2"> 
            <label>Dropped</label></div>
            <div class="col s12 m10">
            <select id="contact_dropped" name="contact_dropped" value="">
                <option value="-1" selected="selected">--Select--</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>


        <div class="col s12 m2"> 
            <label>paused</label></div>
            <div class="col s12 m10">
            <select id="contact_paused" name="contact_paused" value="">
                <option value="-1" selected="selected">--Select--</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>

        <div class="col s12 m2"> 
            <label>Graduated</label></div>
            <div class="col s12 m10">
            <select id="contact_graduated" name="contact_graduated" value="">
                <option value="-1" selected="selected">--Select--</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>

        <div class="col s12 m2"> 
            <label>Gateway Hold</label></div>
            <div class="col s12 m10">
            <select id="gateway_hold" name="gateway_hold" value="">
                <option value="-1" selected="selected">--Select--</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>

        <div class="col s12 m2"> 
            <label>Gateway Authorization</label></div>
            <div class="col s12 m10">
            <select id="gateway_authorization" name="gateway_authorization" value="">
                <option value="-1" selected="selected">--Select--</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>

        <div class="col s12 m2"> 
            <label>Debt Enrolled</label></div>
            <div class="col s12 m10">
            <select id="debt_enrolled" name="debt_enrolled" value="">
                <option value="-1" selected="selected">--Select--</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>

        
        <div class="col s12 m2"> 
            <label>Whose Debt</label></div>
            <div class="col s12 m10">
            <select id="whose_debt" name="whose_debt" class="">
<option value="">--Select--</option><option value="Applicant">Applicant</option>
<option value="Co-Applicant">Co-Applicant</option>

</select>
        </div>

        <div class="col s12 m2"> 
            <label>Debt Status</label></div>
            <div class="col s12 m10">
            <select id="debt_status" name="debt_status[]" class="" size="6" data-placeholder="--select--" multiple="multiple">

</select>
        </div>

        <div class="col s12 m2"> 
            <label>Debt Types</label></div>
            <div class="col s12 m10">
            <select id="debt_types" name="debt_types[]" class="" size="6" data-placeholder="--select--" multiple="multiple">
<option value="10">Attorney Placed</option>
<option value="125">Auto Loan</option>
<option value="3">Business Debt</option>
<option value="4">Collections</option>
<option value="1">Credit Card</option>
<option value="189">Credit Union</option>
<option value="6">Federal Taxes</option>
<option value="68">Judgement</option>
<option value="8">Medical Bill</option>
<option value="192">Mortgage Debt</option>
<option value="20">Online Pay Day Loan</option>
<option value="195">Other</option>
<option value="2">Personal Loan</option>
<option value="7">State Taxes</option>
<option value="21">Storefront Pay Day Loan</option>
<option value="5">Student Loan</option>
<option value="186">Unknown</option>
<option value="119">Unsecured Loan</option>

</select>
        </div>

        <div class="col s12 m2"> 
            <label>Has Summons</label></div>
            <div class="col s12 m10">
            <select id="has_summons" name="has_summons" value="">
                <option value="-1" selected="selected">--Select--</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>

        <div class="col s12 m2"> 
            <label>POA Sent?</label></div>
            <div class="col s12 m10">
            <select id="poa_sent" name="poa_sent" value="">
                <option value="-1" selected="selected">--Select--</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>

        <div class="col s12 m2"> 
            <label>Modified Date</label></div>
            <div class="col s12 m10">
            	  <input type="text" class="datepicker">
        </div>

        <div class="col s12 m2"> 
            <label>Verified Date</label></div>
            <div class="col s12 m10">
            	  <input type="text" class="datepicker">
        </div>


           <div class="col s12 m2"> 
            <label>Last Status Date</label></div>
            <div class="col s12 m10">
            	  <input type="text" class="datepicker">
        </div>
      
        <div class="col s12 m2"> 
            <label>Creditor</label></div>
            <div class="col s12 m10">
            <input type="text" name="creditor_id" value="">
        </div>

        <div class="col s12 m2"> 
            <label>Creditor Type</label></div>
            <div class="col s12 m10">
            <input type="text" name="creditor_type" value="">
        </div>

        <div class="col s12 m2"> 
            <label>Debt Buyer</label></div>
            <div class="col s12 m10">
            <input type="text" name="debt_buyer" value="">
        </div>

        <div class="col s12 m2"> 
            <label>Original Amount</label></div>
            <div class="col s12 m10">
            <select id="original_amt_sel" name="original_amt_sel" value="">
                <option value="morethan">More Than</option>
                <option value="lessthan">Less Than</option>
                <option value="between">Between</option>
            </select>
            <input type="text" size="4" name="original_amount_min" id="original_amount1" value="">
            <span display:none="" id="original_amount_to" style="display: none;"> To
            <input display:none="" type="text" size="4" name="original_amount_max" id="original_amount2" value="" style="display: none;">
            </span>        </div>

        <div class="col s12 m2"> 
            <label>Current Rate</label></div>
            <div class="col s12 m10">
            <select id="current_rate_sel" name="current_rate_sel" value="">
                <option value="morethan">More Than</option>
                <option value="lessthan">Less Than</option>
                <option value="between">Between</option>
            </select>
            <input type="text" size="4" name="current_rate_min" id="current_rate1" value="">
            <span display:none="" id="current_rate_to" style="display: none;"> To
            <input display:none="" type="text" size="4" name="current_rate_max" id="current_rate2" value="" style="display: none;">
            </span>        </div>

        <div class="col s12 m2"> 
            <label>New Rate</label></div>
             <div class="col s12 m10">
            <select id="new_rate_sel" name="new_rate_sel" value="">
                <option value="morethan">More Than</option>
                <option value="lessthan">Less Than</option>
                <option value="between">Between</option>
            </select>
            <input type="text" size="4" name="new_rate_min" id="new_rate1" value="">
            <span display:none="" id="new_rate_to" style="display: none;"> To
            <input display:none="" type="text" size="4" name="new_rate_max" id="new_rate2" value="" style="display: none;">
            </span>        </div>

        <div class="col s12 m2"> 
            <label>New Payment</label></div>
             <div class="col s12 m10">
            <select id="new_payment_sel" name="new_payment_sel" value="">
                <option value="morethan">More Than</option>
                <option value="lessthan">Less Than</option>
                <option value="between">Between</option>
            </select>
            <input type="text" size="4" name="new_payment_min" id="new_payment1" value="">
            <span display:none="" id="new_payment_to" style="display: none;"> To
            <input display:none="" type="text" size="4" name="new_payment_max" id="new_payment2" value="" style="display: none;">
            </span>        </div>

        <div class="col s12 m2"> 
            <label>Current Amount</label></div>
             <div class="col s12 m10">
            <select id="current_amount_sel" name="current_amount_sel" value="">
                <option value="morethan">More Than</option>
                <option value="lessthan">Less Than</option>
                <option value="between">Between</option>
            </select>
            <input type="text" size="4" name="current_amount_min" id="current_amount1" value="">
            <span display:none="" id="current_amount_to" style="display: none;"> To
            <input display:none="" type="text" size="4" name="current_amount_max" id="current_amount2" value="" style="display: none;">
            </span>        </div>

        <div class="col s12 m2"> 
            <label>Verified Amount</label></div>
             <div class="col s12 m10">
            <select id="verified_amount_sel" name="verified_amount_sel" value="">
                <option value="morethan">More Than</option>
                <option value="lessthan">Less Than</option>
                <option value="between">Between</option>
            </select>
            <input type="text" size="4" name="verified_amount_min" id="verified_amount1" value="">
            <span display:none="" id="verified_amount_to" style="display: none;"> To
            <input display:none="" type="text" size="4" name="verified_amount_max" id="verified_amount2" value="" style="display: none;">
            </span>        </div>

 <div class="col s12 m2"> 
        <label>Payments Made</label></div>
        <div class="col s12 m10">
        <input type="text" size="4" name="payments_made_low" value=""> To <input type="text" name="payments_made_high" size="4" value="">
        <div class="clear"></div>

        <input type="hidden" name="filtersval" id="filtersval" value="">
    </div>
		  	</div></div>


		  	<div class="bottomrightbox col s12 m4">
		  		<div class="right w28 generalform">
                <h3 class="title theme">Fields To Show On Report</h3>
        <ul id="smalllist"><li id="l_1117" style="position: relative;"><input id="fi_1117" type="checkbox" name="fonoff[]" value="1117" style="border: none;"> Account Number</li><li id="l_1132" style="position: relative;"><input id="fi_1132" type="checkbox" name="fonoff[]" value="1132" style="border: none;"> Answer Date</li><li id="l_1072" style="position: relative;"><input id="fi_1072" type="checkbox" name="fonoff[]" value="1072" style="border: none;"> Applicant Name</li><li id="l_1063" style="position: relative;"><input id="fi_1063" type="checkbox" name="fonoff[]" value="1063" style="border: none;"> Applicant SSN</li><li id="l_3683" style="position: relative;"><input id="fi_3683" type="checkbox" name="fonoff[]" value="3683" style="border: none;"> Assigned Attorney</li><li id="l_3617" style="position: relative;"><input id="fi_3617" type="checkbox" name="fonoff[]" value="3617" style="border: none;"> Assigned Company</li><li id="l_1078" style="position: relative;"><input id="fi_1078" type="checkbox" name="fonoff[]" value="1078" style="border: none;"> Balance</li><li id="l_1111" style="position: relative;"><input id="fi_1111" type="checkbox" name="fonoff[]" value="1111" style="border: none;"> Client Status</li><li id="l_1069" style="position: relative;"><input id="fi_1069" type="checkbox" name="fonoff[]" value="1069" style="border: none;"> Co-Applicant</li><li id="l_1096" style="position: relative;"><input id="fi_1096" type="checkbox" name="fonoff[]" value="1096" style="border: none;"> Co-SSN</li><li id="l_3623" style="position: relative;"><input id="fi_3623" type="checkbox" name="fonoff[]" value="3623" style="border: none;"> Collection</li><li id="l_1120" style="position: relative;"><input id="fi_1120" type="checkbox" name="fonoff[]" value="1120" style="border: none;"> Collection Co</li><li id="l_3620" style="position: relative;"><input id="fi_3620" type="checkbox" name="fonoff[]" value="3620" style="border: none;"> Contact ID</li><li id="l_3689" style="position: relative;"><input id="fi_3689" type="checkbox" name="fonoff[]" value="3689" style="border: none;"> Contact Stage</li><li id="l_3686" style="position: relative;"><input id="fi_3686" type="checkbox" name="fonoff[]" value="3686" style="border: none;"> Contact Status</li><li id="l_1084" style="position: relative;"><input id="fi_1084" type="checkbox" name="fonoff[]" value="1084" style="border: none;"> Creditor Name</li><li id="l_5401" style="position: relative;"><input id="fi_5401" type="checkbox" name="fonoff[]" value="5401" style="border: none;"> Creditor Type</li><li id="l_1075" style="position: relative;"><input id="fi_1075" type="checkbox" name="fonoff[]" value="1075" style="border: none;"> Current Amount</li><li id="l_1108" style="position: relative;"><input id="fi_1108" type="checkbox" name="fonoff[]" value="1108" style="border: none;"> Customer ID</li><li id="l_1129" style="position: relative;"><input id="fi_1129" type="checkbox" name="fonoff[]" value="1129" style="border: none;"> Days Enrolled</li><li id="l_3692" style="position: relative;"><input id="fi_3692" type="checkbox" name="fonoff[]" value="3692" style="border: none;"> Debt Status</li><li id="l_1126" style="position: relative;"><input id="fi_1126" type="checkbox" name="fonoff[]" value="1126" style="border: none;"> Enrolled Date</li><li id="l_3611" style="position: relative;"><input id="fi_3611" type="checkbox" name="fonoff[]" value="3611" style="border: none;"> Last Payment Date</li><li id="l_1141" style="position: relative;"><input id="fi_1141" type="checkbox" name="fonoff[]" value="1141" style="border: none;"> Last Status Date</li><li id="l_1123" style="position: relative;"><input id="fi_1123" type="checkbox" name="fonoff[]" value="1123" style="border: none;"> Months Enrolled</li><li id="l_4532" style="position: relative;"><input id="fi_4532" type="checkbox" name="fonoff[]" value="4532" style="border: none;"> Negotiator</li><li id="l_1093" style="position: relative;"><input id="fi_1093" type="checkbox" name="fonoff[]" value="1093" style="border: none;"> Next Payment Amount</li><li id="l_1090" style="position: relative;"><input id="fi_1090" type="checkbox" name="fonoff[]" value="1090" style="border: none;"> Next Payment Date</li><li id="l_1144" style="position: relative;"><input id="fi_1144" type="checkbox" name="fonoff[]" value="1144" style="border: none;"> Notes</li><li id="l_4873" style="position: relative;"><input id="fi_4873" type="checkbox" name="fonoff[]" value="4873" style="border: none;"> Notes Added On</li><li id="l_3614" style="position: relative;"><input id="fi_3614" type="checkbox" name="fonoff[]" value="3614" style="border: none;"> Original Amount</li><li id="l_3680" style="position: relative;"><input id="fi_3680" type="checkbox" name="fonoff[]" value="3680" style="border: none;"> Paused</li><li id="l_4517" style="position: relative;"><input id="fi_4517" type="checkbox" name="fonoff[]" value="4517" style="border: none;"> Payable To</li><li id="l_1105" style="position: relative;"><input id="fi_1105" type="checkbox" name="fonoff[]" value="1105" style="border: none;"> Payment Summary</li><li id="l_1081" style="position: relative;"><input id="fi_1081" type="checkbox" name="fonoff[]" value="1081" style="border: none;"> Pending Balance</li><li id="l_1087" style="position: relative;"><input id="fi_1087" type="checkbox" name="fonoff[]" value="1087" style="border: none;"> Percent</li><li id="l_4505" style="position: relative;"><input id="fi_4505" type="checkbox" name="fonoff[]" value="4505" style="border: none;"> POA Sent Date</li><li id="l_1114" style="position: relative;"><input id="fi_1114" type="checkbox" name="fonoff[]" value="1114" style="border: none;"> Program Name</li><li id="l_1786" style="position: relative;"><input id="fi_1786" type="checkbox" name="fonoff[]" value="1786" style="border: none;"> Settlement Amount</li><li id="l_1066" style="position: relative;"><input id="fi_1066" type="checkbox" name="fonoff[]" value="1066" style="border: none;"> Settlement Commitment</li><li id="l_4520" style="position: relative;"><input id="fi_4520" type="checkbox" name="fonoff[]" value="4520" style="border: none;"> Settlement Date</li><li id="l_1138" style="position: relative;"><input id="fi_1138" type="checkbox" name="fonoff[]" value="1138" style="border: none;"> State</li><li id="l_1102" style="position: relative;"><input id="fi_1102" type="checkbox" name="fonoff[]" value="1102" style="border: none;"> Summons</li><li id="l_1135" style="position: relative;"><input id="fi_1135" type="checkbox" name="fonoff[]" value="1135" style="border: none;"> Summons Date</li><li id="l_1099" style="position: relative;"><input id="fi_1099" type="checkbox" name="fonoff[]" value="1099" style="border: none;"> Whose Debt</li></ul>
        <input id="forder" type="hidden" name="forder" value="">

    </div>
		  	</div>





		  </div>
	</div>
</div>
