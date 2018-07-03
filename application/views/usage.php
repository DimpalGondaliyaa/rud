<div class="main-box">
	<div class="cmdtitle">
		<a href="<?php echo base_url(); ?>Administration">user administration</a> > <a href="<?php echo base_url(); ?>Usage">Usage</a>
	</div>

	<div class="main-menu row">

		<div class="col s12 m3">
			<ul class="usageul">
				<li style="background-color: #213F66;"><a style="color: #fff !important;" href="#!" id="user_usage_a" >user usage</a></li>
				<li><a href="#!" id="e-sign_usage_a">e-sign usage</a></li>
				<li><a href="#!" id="user_login_a">user login</a></li>
				<li><a href="#!" id="page_view_a">page view</a></li>
				<li><a href="#!" class="billing_a">billing policy</a></li>
			</ul>
		</div>

<!-- Modal Structure -->
  <div id="billing" class="modal">
    <div class="modal-content">
    	<div class="btitle">
             <h4>Billing Policy</h4>
        </div>
        <div class="bp">
        	<span>Invoices</span>
           <p>Invoices are created and sent out within the first 5 days of each calendar month.  Invoices include your usage for the previous calendar month.  Example: An invoice sent to you on January 1st, would include charges for the December usage of your account.  We do not pro-rate usage.  You will be charged for every active user that has a log-in for the prior month. You can view your user detail in the CRM under "Admin > Usage".</p>
        </div>

         <div class="bp">
        	<span>Charges</span>
           <p>Debt Pay, Inc. charges for all active users within the calendar month.  In order not to be charged for a user, that user needs to have zero log-ins during the billing cycle.</p>
        </div>


         <div class="bp">
        	<span>Payment</span>
           <p>Debt Pay, Inc. does not accept payment by check.  We will automatically debit your checking account or charge your credit card on file for the invoice total within 5 days of the invoice being sent to you.  If you choose to pay by credit card a 5% processing fee will apply.  A valid payment method must be on file with Debt Pay, Inc. at all times.  It is your responsibility to keep your contact and billing information current.  It is your responsibility to contact us to notify us if any of your contact or billing information has changed.</p>
        </div>


         <div class="bp">
        	<span>Returned Payment Fees</span>
           <p>If your payment is returned to us or rejected, we will charge your account a $25.00 returned payment fee per occurrence. We will notify you once payment has been returned and a note will be added to the CRM that your payment is past due.</p>
        </div>

         <div class="bp">
        	<span>Account Suspension for Billing</span>
           <p>Invoices not paid in full by the last day of the calendar month the invoice was sent, will result in a temporary suspension of the account until the outstanding balance is paid.  Every attempt will be made to contact you, so that you can make payment prior to suspension.</p>
        </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">close</a>
    </div>
  </div>


		<div class="col s12 m9" id="user_usage" style="display: none;">
			<div class="utitle">
				user usage
			</div>

			<div class="inbox">
				<div class="col s12 m2">
					<div class="left">
					    <h4>Company</h4>
					    <select id="company_id" name="company_id" class="">
					       <option value="">--Select--</option><option value="22493">United Students Of America</option>
					    </select>
					</div>
				</div>

				<div class="col s12 m2">
					<div class="left ">
					    <h4>Range Selector</h4>
					<select id="date_set" name="date_set" class="" onchange="setDate('start_date','end_date');">
					<option value="">--Select--</option><option value="today">Today</option>
					<option value="yesterday">Yesterday</option>
					<option value="wetod">Week to Date</option>
					<option value="lastwe">Last Week</option>
					<option value="motod">Month to Date</option>
					<option value="lastmo">Last Month</option>
					<option value="yetod">Year to Date</option>
					<option value="lasty">Last Year</option>

					</select>
					</div>
				</div>

				<div class="col s12 m2">
					<div class="left ">
					    <h4>Range Selector</h4>
					<select id="date_set" name="date_set" class="" onchange="setDate('start_date','end_date');">
					<option value="">--Select--</option><option value="today">Today</option>
					<option value="yesterday">Yesterday</option>
					<option value="wetod">Week to Date</option>
					<option value="lastwe">Last Week</option>
					<option value="motod">Month to Date</option>
					<option value="lastmo">Last Month</option>
					<option value="yetod">Year to Date</option>
					<option value="lasty">Last Year</option>

					</select>
					</div>
				</div>


				<div class="col s12 m2">
					<div class="left ">
					    <h4>Start Date</h4>
					  <input type="text" class="datepicker">
					</div>
				</div>

				<div class="col s12 m2">
					<div class="left ">
					    <h4>END Date</h4>
					  <input type="text" class="datepicker">
					</div>
				</div>
				<div class="col s12 m2"></div>

				<div class="col s12 m12">
					<div class="exlink">
						<a href="#"><img src="<?php echo base_url(); ?>html/images/page_white_excel.png"> export to cvs</a>
					</div>
				</div>

				<div class="not col s12 m12">
					<p>Reminder: Your most recent invoice is for the previous month's user usage.</p>
				</div>

					<div class="table-box">
					
				<table id="example1" class="ui celled table responsive nowrap striped highlight" style="width:100%">
		        <thead>
		            <tr>
		            	<th>company</th>
		            	<th>	Days Logged In</th>
		            	<th>Total Logins</th>
		            	<th>	Role</th>
		            
		            </tr>
		        </thead>
		        <tbody>
				<tr>
					<td>United Students Of America (1)</td>
					<td>1</td>
					<td>1</td>
					<td>super admin</td>
				</tr>
				</tbody>
			</table>
			</div> 

			</div>
		</div>

		<div class="col s9 m9" id="e-sign_usage" style="display: none;">
			<div class="utitle">
				E-Sign Usage
			</div>

			<div class="inbox">
				

				<div class="col s12 m2">
					<div class="left ">
					    <h4>Range Selector</h4>
					<select id="date_set" name="date_set" class="" onchange="setDate('start_date','end_date');">
					<option value="">--Select--</option><option value="today">Today</option>
					<option value="yesterday">Yesterday</option>
					<option value="wetod">Week to Date</option>
					<option value="lastwe">Last Week</option>
					<option value="motod">Month to Date</option>
					<option value="lastmo">Last Month</option>
					<option value="yetod">Year to Date</option>
					<option value="lasty">Last Year</option>

					</select>
					</div>
				</div>

				<div class="col s12 m2">
					<div class="left ">
					    <h4>Start Date</h4>
					  <input type="text" class="datepicker">
					</div>
				</div>

				<div class="col s12 m2">
					<div class="left ">
					    <h4>END Date</h4>
					  <input type="text" class="datepicker">
					</div>
				</div>


				<div class="col s12 m1 myf"><a href="#" class="btn">filtter</a></div>

				<div class="col s12 m12">
					<div class="exlink">
						<a href="#"><img src="<?php echo base_url(); ?>html/images/page_white_excel.png"> export to cvs</a>
					</div>
				</div>

				<div class="not col s12 m12">
					<p>Reminder: Your most recent invoice is for the previous month's user usage.</p>
				</div>

					<div class="table-box">
					
				<table id="example1" class="ui celled table responsive nowrap striped highlight" style="width:100%">
		        <thead>
		            <tr>
		            	<th>company</th>
		            	<th>Docs Sent</th>
		            	<th>Docs Signed</th>
		            	<th>Senders</th>
		            
		            </tr>
		        </thead>
		        <tbody>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				</tbody>
			</table>
			</div> 

			</div>
		</div>


		<div class="col s9 m9" id="user_login" style="display: none;">
			<div class="utitle">
			 User login
			</div>

			<div class="inbox">
				

				<div class="col s12 m2">
					<div class="left ">
					    <h4>Range Selector</h4>
					<select id="date_set" name="date_set" class="" onchange="setDate('start_date','end_date');">
					<option value="">--Select--</option><option value="today">Today</option>
					<option value="yesterday">Yesterday</option>
					<option value="wetod">Week to Date</option>
					<option value="lastwe">Last Week</option>
					<option value="motod">Month to Date</option>
					<option value="lastmo">Last Month</option>
					<option value="yetod">Year to Date</option>
					<option value="lasty">Last Year</option>

					</select>
					</div>
				</div>

				<div class="col s12 m2">
					<div class="left ">
					    <h4>Start Date</h4>
					  <input type="text" class="datepicker">
					</div>
				</div>

				<div class="col s12 m2">
					<div class="left ">
					    <h4>END Date</h4>
					  <input type="text" class="datepicker">
					</div>
				</div>

				<div class="col s12 m2">
					<div class="left ml10">
					        <h4>User</h4>
					        <select id="user" name="user" class="">
								<option value="">--Select--</option><optgroup label="Active"><option value="3204459">Anderson, Richard</option><option value="3177071">Cannon, Jeff</option><option value="3254259">Goodman, Alex</option><option value="3166850">Harrison, Anthony</option><option value="3167522">Lee, Devin</option><option value="3170984">Morris, James</option><option value="3133547">PayPro, Debt</option><option value="3193601">Richardson, Raymond</option><option value="3177659">Smith, Greg</option><option value="3142430">Vargas, Alex</option><option value="3177203">Williams, Samantha</option></optgroup><optgroup label="Suspended"><option value="3166835">Goodman, Alexander</option></optgroup><optgroup label="Deleted"><option value="3254265">, </option><option value="3187787">Kelly, Jennie</option><option value="3209961">Major, Marcus</option><option value="3187583">Parker, Jacob</option><option value="3177254">Rashad, Khalil</option><option value="3184343">Reaves, Colin</option></optgroup>
								</select>
					    </div>
				</div>
				<div class="col s12 m1 myf"><a href="#" class="btn">filtter</a></div>


					<div class="table-box">
					
				<table id="example1" class="ui celled table responsive nowrap striped highlight" style="width:100%">
		        <thead>
		            <tr>
		            	<th>IP </th>
		            	<th>	User </th>
		            	<th>Company </th>
		            	<th>	Login Time </th>
		            
		            </tr>
		        </thead>
		        <tbody>
				<tr>
					<td>103.107.177.46</td>
					<td>Alex Vargas</td>
					<td>United Students Of America</td>
					<td>	07/01/2018 9:19 pm</td>
				</tr>
				</tbody>
			</table>
			</div> 

			</div>
		</div>

		<div class="col s9 m9" id="page_view">
			<div class="utitle">
			 Page Views
			</div>

			<div class="inbox">
				

				<div class="col s12 m2">
					<div class="left ">
					    <h4>Range Selector</h4>
					<select id="date_set" name="date_set" class="" onchange="setDate('start_date','end_date');">
					<option value="">--Select--</option><option value="today">Today</option>
					<option value="yesterday">Yesterday</option>
					<option value="wetod">Week to Date</option>
					<option value="lastwe">Last Week</option>
					<option value="motod">Month to Date</option>
					<option value="lastmo">Last Month</option>
					<option value="yetod">Year to Date</option>
					<option value="lasty">Last Year</option>

					</select>
					</div>
				</div>

				<div class="col s12 m2">
					<div class="left ">
					    <h4>Start Date</h4>
					  <input type="text" class="datepicker">
					</div>
				</div>

				<div class="col s12 m2">
					<div class="left ">
					    <h4>END Date</h4>
					  <input type="text" class="datepicker">
					</div>
				</div>

				<div class="col s12 m1 myf"><a href="#" class="btn">filtter</a></div>
<div class="not col s12 m12">
					<p>Page View History is only available for a limited amount of time</p>
				</div>

					<div class="table-box">
					
				<table id="example1" class="ui celled table responsive nowrap striped highlight" style="width:100%">
		        <thead>
		            <tr>
		            	<th>Page Title</th>
		            	<th>	User </th>
		            	<th>Company </th>
		            	<th>	Timestamp </th>
		            
		            </tr>
		        </thead>
		        <tbody>
				<tr>
					<td>Budget Setup - Admin</td>
					<td>Alex Vargas</td>
					<td>United Students Of America</td>
					<td>07/01/2018 9:19 pm</td>
				</tr>
				<tr>
					<td>Admin</td>
					<td>Alex Vargas</td>
					<td>United Students Of America</td>
					<td>07/01/2018 9:19 pm</td>
				</tr>
				<tr>
					<td>System Usage - Admin</td>
					<td>Alex Vargas</td>
					<td>United Students Of America</td>
					<td>07/01/2018 9:19 pm</td>
				</tr>
				</tbody>
			</table>
			</div> 

			</div>
		</div>





	</div>
</div>