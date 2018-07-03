<div class="main-box">
	<div class="cmdtitle">
		<a href="<?php echo base_url(); ?>Administration">user & administration</a>
	</div>

	<div class="main-menu row">
		  <nav class="contactnav">
		    <div class="nav-wrapper connavwapp">
		      <ul id="nav-mobile" class="hide-on-med-and-down">
		        <li><a href="#!"><img class="iconstyle" src="<?php echo base_url() ?>html/images/accept.png">Save Enrollment Plan</a></li>
		        <li><a href="#!"><img class="iconstyle" src="<?php echo base_url() ?>html/images/page_go.png">Save & Generate Contract</a></li>
		      </ul>
		    </div>
		  </nav>

		  <div class="stitle">Student Loans Enrollment Plan</div>
		  <div class="ybox">
		  	<div class="subtitle">test test -</div>
		  	<p>Available Monthly: $0.00 / mo.</p>
		  </div>

		  <div class="col s4 m4">
		  	<div class="">

  <h2 class="title theme">Program Checklist</h2>
  <div class="condcont" style="height: 20px;border: 1px solid #ddd;">
      </div>

  <h2 class="title theme">Enrollment Plans</h2>
    
  <div class="condcont">


    <div id="plans"><label>Choose Base Plan</label><select style="width:95%;" name="plan" onchange="setPlan(this.value)"><option value="">--select plan--</option><option value="18873"> James Plan</option><option value="18404"> $1,392 Enrollment Plan</option><option value="18407"> $1,984 Enrollment Plan</option><option value="18410"> $3,056 Enrollment Plan</option></select></div>

          <div id="varload">
      <input type="hidden" name="est_settlement" id="est_settlement" value="">
      <input type="hidden" name="select_first_payment" id="select_first_payment" value="">
      <input type="hidden" name="time_in_program" id="time_in_program" value="">
      <input type="hidden" id="fee2_starts" value="">
      <input type="hidden" id="fee3_starts" value="">
      <input type="hidden" id="fee4_starts" value="">
      <input type="hidden" id="fee5_starts" value="">
      <input type="hidden" id="separate_service_fee" value="">
      <input type="hidden" id="fee1_ends" value="">
      <input type="hidden" id="fee2_ends" value="">
      <input type="hidden" id="fee3_ends" value="">
      <input type="hidden" id="fee4_ends" value="">
      <input type="hidden" id="fee5_ends" value="">
      <input type="hidden" id="fee6_ends" value="">
      <input type="hidden" id="savings_p1_length" value="0">
      <input type="checkbox" style="display: none; border: none;" id="feeextra">
  </div>


    <input type="hidden" name="deduction" id="deduction" value="0">
    <input type="hidden" name="payout" id="payout" value="0.00">
    <input type="hidden" name="payment_date" id="payment_date" value="">
    <input type="hidden" name="plan_id" id="plan_id" value="">

  </div>

 

  <h2 class="title theme">Recurring Start Date</h2>
        <div class="relative">
         <input type="text" class="datepicker">
    </div>
    <div id="cal_start" style="display:none; border:1px solid #ccc;"></div>
    <div class="clear"></div>

    
    

    <div style="display:none;" id="biweek">

        <h2 class="title theme">Second Payment Date</h2>
            <input name="second_date" value="08/02/2018" autocomplete="off" style="display: none;"><input class="datebox hasDatepicker" name="second_date" id="second_date" value="08/02/2018" autocomplete="off">
        <input type="hidden" id="sstart_date_end">
    <div id="scal_start" style="display:none; border:1px solid #ccc;"></div>
    <div class="clear"></div>

        </div>
  <input type="hidden" id="gateway_id" name="gateway_id" value="6">    <h2 class="title theme">Choose Comp Template</h2><div class="condcont"><select id="split_template" name="split_template" class="">
<option value="10079">Blank</option>

</select>
</div>            

  </div>
		  </div>


		  <div class="col s8 m8">
		  	<div class="">
        <h2 class="title theme">Program Snapshot</h2>
    <div class="condcont">
    <div class="left">
  <h4 class="title theme">Total Debt</h4>
  <p id="total_debt" class="statnum">$0.00</p>
</div>

<div class="left ml20">
  <h4 class="title theme">Total Fees</h4>
  <p class="statnum" id="enrollfee">$0.00</p>
</div>

<div class="left ml20">
  <h4 class="title theme">Re-payment Plan</h4>
  <p class="statnum">N/A</p>
</div>
<div class="left ml20">
  <h4 class="title theme">Payment</h4>
  <p class="statnum">$0.00 @  months</p>
</div>
<div class="clear"></div>
<div id="msgbox" class="strong red"></div>
    </div>

    <h2 class="title theme">Choose Debts To Enroll</h2>
      <div id="debtstoenroll"></div>
      <div class="condcont">
          <div>
        <table style="text-align:left;" width="100%">
        <thead><tr><th width="30">&nbsp;</th><th>Creditor</th><th>Type</th><th>Amount</th></tr></thead><tbody id="debtbody"></tbody></table></div></div>            
    <h2 class="title theme">Payment Schedule</h2>
   

   <div class="table-box">
					
				<table id="example1" class="ui celled table responsive nowrap striped highlight" style="width:100%">
		        <thead>
		            <tr>
		            	<th>#</th>
		            	<th>	Date</th>
		            	<th>Total Payment</th>
		            	
		            </tr>
		        </thead>
		        <tbody>
			
				<tr>
					<td></td>
					<td></td>
					<td>0</td>
				</tr>
			
				</tbody>
			</table>
			</div> 
  </div>
		  </div>
	</div>
</div>		  