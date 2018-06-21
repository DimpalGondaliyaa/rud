<div class="main-box">
	<div class="cmdtitle">
		<a href="<?php echo base_url(); ?>Accounting">Accounting</a>
	</div>

	<div class="main-menu">
		  <nav class="contactnav">
		    <div class="nav-wrapper connavwapp">
		      <ul id="nav-mobile" class="hide-on-med-and-down">
		        <li><a href="#!" id="disply"><img class="iconstyle" src="<?php echo base_url() ?>html/images/add.png">Create New Report</a></li>
		        <li><a href="<?php echo base_url(); ?>Pipeline"><img class="iconstyle" src="<?php echo base_url() ?>html/images/money.png">Pipeline</a></li>
		        <li><a href="<?php echo base_url(); ?>Summaries"><img class="iconstyle" src="<?php echo base_url() ?>html/images/timeline_marker.png">Summaries</a></li>
		    </div>
		  </nav>

		  <div class="row">
		  	<div class="col s12 m2">
				<div class="left w15 formsection_light">
				    <div style="padding:6px;">
					    <p><strong>Pending Debits</strong></p>
					    <p class="statnum">$0.00</p>

					    <p><strong>Pending Credits</strong></p>
					    <p class="statnum">$0.00</p>

					    <p><strong>Returns This Month</strong></p>
					    <p class="statnum">0 / 0  <span class="notation">0%</span></p>

					    <p><strong>Returns Last 30 Days</strong></p>
					    <p class="statnum">0 / 0  <span class="notation">0%</span></p>
				    </div>
				    <div style="padding-bottom:10px;"></div>   
				    <h3 class="theme">Reports (17)</h3>
				    <ul class="settlist_small">
				        <li><a href="#" id="clmonth">Cleared Last Month</a></li>
				        <li><a href="#"  id="clweek">Cleared Last Week</a></li>
				        <li><a href="#" id="ctmonth">Cleared This Month</a></li>
				        <li><a href="#" id="ctweek">Cleared This Week</a></li>
				        <li><a href="#" id="ctdate">Cleared Year to Date</a></li>
				        <li><a href="#" id="pnmonth">Processing Next Month</a></li>
				        <li><a href="#" id="pnweek">Processing Next Week</a></li>
				        <li><a href="#" id="pnyear">Processing Next Year</a></li>
				        <li><a href="#" id="proyear">Processing Remainder of Year</a></li>
				        <li><a href="#" id="ptmonth">Processing This Month</a></li>
				        <li><a href="#" id="ptweek">Processing This Week</a></li>
				        <li><a href="#" id="rlmonth">Returned Last Month</a></li>
				        <li><a href="#" id="rlweek">Returned Last Week</a></li>
				        <li><a href="#" id="rtmonth">Returned This Month</a></li>
				        <li><a href="#" id="rtweek">Returned This Week</a></li>
				        <li><a href="#" id="rytdate">Returned Year to Date</a></li>
				        <li><a href="#" id="tsasasias">tsasasias</a></li>   
				    </ul>
				    <div class="spacer15"></div>
				</div>
		  	</div>

		  	<div class="col s12 m10 ">

		  	<div id="displayed" style="display: none;">	
		  		<div class="titleeecp">Customize Report</div>
		  		<div class="col s12 m12">
		  		<form>
		  		<div class="left">
		            <h4>Report Title:</h4>
		            <input type="text" name="title" id="title" size="45" value="">
		        </div>
		        <div class="left">
		            <h4>Date Format</h4>
		            <select id="date_format" name="date_format" class="">
						<option value="">--Select--</option><option value="M d Y">Jun 21 2018</option>
						<option value="F d Y">June 21 2018</option>
						<option value="m/d/Y">06/21/2018</option>
						<option value="n/j/y">6/21/18</option>
						<option value="Ymd">20180621</option>
					</select>
                </div>
                <div class="left">
		            <h4>Report Title:</h4>
		            <input type="text" name="title" id="title" size="4" value="">
		        </div>

		         <div class="right">
		         	<a href="#" class="btn spbtn">save report</a>
		         </div>
		        </form>
		    </div>

		        <div class="col s12 m6">
		        	<div class="titleeecp" style="color: #213F66;">filter</div>

		        	<div class="col s12 m3"><div class="titlebox">file type</div></div>
		        	<div class="col s12 m9">
		        		<div class="contentbox">
			        		   <select  id="file_type" name="file_type" class="sstyle">
			                     <option value="">--Any--</option><option value="12">Student Loans</option>
			                   </select>
			            </div>
		            </div>

		            <div class="col s12 m3"><div class="titlebox">Created By</div></div>
		        	<div class="col s12 m9">
		        		<div class="contentbox">
			        		  <select id="created_by" name="created_by" class="sstyle">
	<option value="">--Select--</option><option value="3142430">Alex Vargas</option>
	<option value="3166835">Alexander Goodman</option>
	<option value="3166850">Anthony Harrison</option>
	<option value="3133547">Debt PayPro</option>
	<option value="3167522">Devin Lee</option>
	<option value="3204459">Glenn Hawkins</option>
	<option value="3177659">Greg Smith</option>
	<option value="3187583">Jacob Parker</option>
	<option value="3170984">James Morris</option>
	<option value="3177071">Jeff Cannon</option>
	<option value="3177239">Jennie Kelly</option>
	<option value="3177254">Khalil Rashad</option>
	<option value="3193601">Raymond Richardson</option>
	<option value="3177203">Samantha Williams</option>

	</select>
			            </div>
		            </div>


		        	<div class="col s12 m3"><div class="titlebox">State</div></div>
		        	<div class="col s12 m9">
		        		<div class="contentbox">
			        		<select id="contact_state" name="contact_state" class="sstyle">
<option value="">--Select--</option><option value="AA">AA-Armed Forces Americas</option>
<option value="AE">AE-Armed Forces Other</option>
<option value="AL">Alabama</option>
<option value="AK">Alaska</option>
<option value="AS">American Samoa</option>
<option value="AP">AP-Armed Forces Pacific</option>
<option value="AZ">Arizona</option>
<option value="AR">Arkansas</option>
<option value="NSW">AU-New South Wales</option>
<option value="ANT">AU-Northern Territory</option>
<option value="QLD">AU-Queensland</option>
<option value="SA">AU-South Australia</option>
<option value="TAS">AU-Tasmania</option>
<option value="VIC">AU-Victoria</option>
<option value="WAU">AU-Western Australia</option>
<option value="CA">California</option>
<option value="AB">Canada-Alberta</option>
<option value="BC">Canada-British Columbia</option>
<option value="MB">Canada-Manitoba</option>
<option value="NB">Canada-New Brunswick</option>
<option value="NL">Canada-Newfoundland</option>
<option value="NT">Canada-Northwest Territories</option>
<option value="NS">Canada-Nova Scotia</option>
<option value="NU">Canada-Nunavet</option>
<option value="ON">Canada-Ontario</option>
<option value="PE">Canada-Prince Edward Island</option>
<option value="QC">Canada-Quebec</option>
<option value="SK">Canada-Saskatchewan</option>
<option value="YT">Canada-Yukon</option>
<option value="CO">Colorado</option>
<option value="CT">Connecticut</option>
<option value="DE">Delaware</option>
<option value="DC">District of Columbia</option>
<option value="FL">Florida</option>
<option value="GA">Georgia</option>
<option value="GU">Guam</option>
<option value="HI">Hawaii</option>
<option value="ID">Idaho</option>
<option value="IL">Illinois</option>
<option value="IN">Indiana</option>
<option value="IA">Iowa</option>
<option value="KS">Kansas</option>
<option value="KY">Kentucky</option>
<option value="LA">Louisiana</option>
<option value="ME">Maine</option>
<option value="MD">Maryland</option>
<option value="MA">Massachusetts</option>
<option value="MI">Michigan</option>
<option value="MN">Minnesota</option>
<option value="MS">Mississippi</option>
<option value="MO">Missouri</option>
<option value="MT">Montana</option>
<option value="NE">Nebraska</option>
<option value="NV">Nevada</option>
<option value="NH">New Hampshire</option>
<option value="NJ">New Jersey</option>
<option value="NM">New Mexico</option>
<option value="NY">New York</option>
<option value="NC">North Carolina</option>
<option value="ND">North Dakota</option>
<option value="OH">Ohio</option>
<option value="OK">Oklahoma</option>
<option value="OR">Oregon</option>
<option value="PA">Pennsylvania</option>
<option value="PR">Puerto Rico</option>
<option value="RI">Rhode Island</option>
<option value="SC">South Carolina</option>
<option value="SD">South Dakota</option>
<option value="TN">Tennessee</option>
<option value="TX">Texas</option>
<option value="VI">U.S. Virgin Islands</option>
<option value="UT">Utah</option>
<option value="VT">Vermont</option>
<option value="VA">Virginia</option>
<option value="WA">Washington</option>
<option value="WV">West Virginia</option>
<option value="WI">Wisconsin</option>
<option value="WY">Wyoming</option>

</select>
			            </div>
		            </div>

		            <div class="col s12 m3"><div class="titlebox">Assigned To User</div></div>
		        	<div class="col s12 m9">
		        		<div class="contentbox">
			        		   <select id="assigned_to" name="assigned_to" class="sstyle">
<option value="">--Select--</option><option value="3142430">Alex Vargas</option>
<option value="3166835">Alexander Goodman</option>
<option value="3166850">Anthony Harrison</option>
<option value="3133547">Debt PayPro</option>
<option value="3167522">Devin Lee</option>
<option value="3204459">Glenn Hawkins</option>
<option value="3177659">Greg Smith</option>
<option value="3187583">Jacob Parker</option>
<option value="3170984">James Morris</option>
<option value="3177071">Jeff Cannon</option>
<option value="3177239">Jennie Kelly</option>
<option value="3177254">Khalil Rashad</option>
<option value="3193601">Raymond Richardson</option>
<option value="3177203">Samantha Williams</option>

</select>
			            </div>
		            </div>


		            <div class="col s12 m3"><div class="titlebox">Assigned To Users Of Team</div></div>
		        	<div class="col s12 m9">
		        		<div class="contentbox">
			        		 <select id="team_id" name="team_id" class="sstyle">
<option value="">--Select--</option><option value="10568">Sales</option>
<option value="10562">Super Admins</option>
<option value="10807">xteam</option>

</select>
			            </div>
		            </div>



		            <div class="col s12 m3"><div class="titlebox">Assigned Company</div></div>
		        	<div class="col s12 m9">
		        		<div class="contentbox">
			        		<select id="company_id" name="company_id[]" class="sstyle hhh" size="5" multiple="multiple">
<option value="">--Select--</option><option value="22493">United Students Of America</option>

</select>
			            </div>
		            </div>

		            <div class="col s12 m3"><div class="titlebox">Law Firm</div></div>
		        	<div class="col s12 m9">
		        		<div class="contentbox">
			        		<select id="company_id" name="company_id[]" class="sstyle hhh" size="5" multiple="multiple">
<option value="">--Select--</option><option value="22493">United Students Of America</option>

</select>
			            </div>
		            </div>

		             <div class="col s12 m3"><div class="titlebox">paid To </div></div>
		        	<div class="col s12 m9">
		        		<div class="contentbox">
			        		 <select id="team_id" name="team_id" class="sstyle">
<option value="">--Select--</option>

</select>
			            </div>
		            </div>

		             <div class="col s12 m3"><div class="titlebox">active</div></div>
		        	<div class="col s12 m9">
		        		<div class="contentbox">
			        		 <select id="team_id" name="team_id" class="sstyle">
<option value="">--Select--</option><option value="10568">active</option>
<option value="10562">in-active</option>
</select>
			            </div>
		            </div>

		            <div class="col s12 m3"><div class="titlebox">Enrolled Date</div></div>
			        	<div class="col s12 m9">
			        		<input type="text" class="datepicker">
			            </div>

			            <div class="col s12 m3"><div class="titlebox">Process Date</div></div>
			        	<div class="col s12 m9">
			        		<input type="text" class="datepicker">
			            </div>

                      <div class="col s12 m3"><div class="titlebox">return Date</div></div>
			        	<div class="col s12 m9">
			        		<input type="text" class="datepicker">
			            </div>

			            <div class="col s12 m3"><div class="titlebox">Cleared Date</div></div>
			        	<div class="col s12 m9">
			        		<input type="text" class="datepicker">
			            </div>

			            <div class="col s12 m3"><div class="titlebox">Show</div></div>
		        	<div class="col s12 m9">
		        		<div class="contentbox">
			        		<select id="show" name="show" class="sstyle">
<option value="">--All Transactions--</option><option value="upcoming">Not Processed</option>
<option value="completed">Processed</option>

</select>
			            </div>
		            </div>

		            <div class="col s12 m3"><div class="titlebox">type</div></div>
		        	<div class="col s12 m9">
		        		<div class="contentbox">
			        		<select id="company_id" name="company_id[]" class="sstyle hhh" size="5" multiple="multiple">
<option value="">--All Types--</option><option value="D">ACH Client Debit</option>
<option value="C">ACH Credit / Fee</option>
<option value="AR">Advance Recoup</option>
<option value="BF">Balance Forward</option>
<option value="BT">Balance Transfer</option>
<option value="CPF">Check Paid Fee</option>
<option value="CA">Client Advance</option>
<option value="CP">Client Check Payment</option>
<option value="R">Client Refund</option>
<option value="CC">Credit Card Payment</option>
<option value="CR">Custodial Reimbursement</option>
<option value="SF">Disbursement Fee</option>
<option value="DPG">DPG Custodial Fee</option>
<option value="DPGR">DPG Reimbursement</option>
<option value="PF">Earned Performance Fee</option>
<option value="ECHK">eCheck</option>
<option value="FAW">Fee Account Withdrawl</option>
<option value="FA">Retained Performance Fee</option>
<option value="RV">Reversal</option>
<option value="SA">Settlement Advance</option>
<option value="S">Settlement Payment</option>
<option value="TF">Transaction Fee</option>
<option value="T">Transfer</option>
<option value="TD">Trust Deposit</option>

</select>
			            </div>
		            </div>
		           

		            <div class="col s12 m3"><div class="titlebox">sub type</div></div>
		        	<div class="col s12 m9">
		        		<div class="contentbox">
			        		<select id="company_id" name="company_id[]" class="sstyle hhh" size="5" multiple="multiple">
<option value="">--All Sub Types--</option><option value="21">ACH / Check By Phone</option>
<option value="39">Advance Recoup</option>
<option value="6">Bank Wire</option>
<option value="17">Cashiers Check</option>
<option value="18">Cashiers Check 2nd Day</option>
<option value="19">Cashiers Check Overnight</option>
<option value="20">Check</option>
<option value="15">Check 2nd Day</option>
<option value="16">Check Overnight</option>
<option value="524">Direct Deposit / Cash</option>
<option value="132">DirectPay</option>
<option value="527">Money Order</option>
<option value="5">Standard Check</option>
<option value="92">Stop Payment Fee</option>

</select>
			            </div>
		            </div>


		            <div class="col s12 m3"><div class="titlebox">Transaction Status</div></div>
		        	<div class="col s12 m9">
		        		<div class="contentbox">
			        		<select id="company_id" name="company_id[]" class="sstyle hhh" size="5" multiple="multiple">
<option value="">--All Status--</option><option value="25">Authorized</option>
<option value="3">Cancel</option>
<option value="4">Cleared</option>
<option value="10">Correction</option>
<option value="15">Error Processing</option>
<option value="14">Low Balance</option>
<option value="30">On Hold</option>
<option value="0">Open</option>
<option value="1">Pending</option>
<option value="21">Pending Approval</option>
<option value="2">Pending For Batch</option>
<option value="7">Pending For Journal</option>
<option value="70">Pending Update</option>
<option value="11">Rejected</option>
<option value="12">Resubmitted</option>
<option value="9">Returned / NSF</option>
<option value="13">Reversed</option>
<option value="20">Shipped</option>
<option value="22">Stop Payment</option>
<option value="8">Void</option>

</select>
			            </div>
		            </div>

		             <div class="col s12 m3"><div class="titlebox">memo</div></div>
		        	<div class="col s12 m9">
		        		<div class="contentbox">
			        		<select id="company_id" name="company_id[]" class="sstyle " size="5" multiple="multiple">
<option value="">--All Status--</option><option value="25">Authorized</option>
</select>
			            </div>
		            </div>

		             <div class="col s12 m3"><div class="titlebox">Contact Status</div></div>
		        	<div class="col s12 m9">
		        		<div class="contentbox">
			        		<select id="company_id" name="company_id[]" class="sstyle hhh" size="5" multiple="multiple">
<option value="">--Select--</option><option value="126752">Student Loans : Lead : Follow Up</option>
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
		            </div>



		             <div class="col s12 m3"><div class="titlebox">Program</div></div>
		        	<div class="col s12 m9">
		        		<div class="contentbox">
			        		<select id="company_id" name="company_id[]" class="sstyle hhh" size="5" multiple="multiple">
<option value="">--Select--</option><option value="18404">$1,392 Enrollment Plan</option>
<option value="18407">$1,984 Enrollment Plan</option>
<option value="18410">$3,056 Enrollment Plan</option>
<option value="18547">g,mf;kas fdgps,dfgp[;</option>
<option value="18504">trrtrtrt</option>
</select>
			            </div>
		            </div>



		             <div class="col s12 m3"><div class="titlebox">Campaigns</div></div>
		        	<div class="col s12 m9">
		        		<div class="contentbox">
			        		<select id="company_id" name="company_id[]" class="sstyle hhh" size="5" multiple="multiple">
<option value="">--Select--</option>
</select>
			            </div>
		            </div>

 <div class="col s12 m3"><div class="titlebox">Comp Template</div></div>
		        	<div class="col s12 m9">
		        		<div class="contentbox">
			        		<select id="company_id" name="company_id[]" class="sstyle hhh" size="5" multiple="multiple">
<option value="">--Select--</option>
</select>
			            </div>
		            </div>

 				<div class="col s12 m3"><div class="titlebox">Exclude Paused Clients</div></div>
		        	<div class="col s12 m9">
		        		<div class="contentbox checkboxx">
			  			      <label>
						        <input type="checkbox" class="filled-in"  />
						        <span></span>
						      </label>
						  </div>
		            </div>

		            <div class="col s12 m3"><div class="titlebox">Exclude Cancelled Clients</div></div>
		        	<div class="col s12 m9">
		        		<div class="contentbox checkboxx">
			  			      <label>
						        <input type="checkbox" class="filled-in"  />
						        <span></span>
						      </label>
						  </div>
		            </div>

		            <div class="col s12 m3"><div class="titlebox">Exclude Hold  Clients</div></div>
		        	<div class="col s12 m9">
		        		<div class="contentbox checkboxx">
			  			      <label>
						        <input type="checkbox" class="filled-in"  />
						        <span></span>
						      </label>
						  </div>
		            </div>





		        </div>

		         <div class="col s12 m6">
		        	<div class="titleeecp" style="color: #213F66;">Fields To Show On Report</div>
		    	
				<div class="alltypebox">
					   <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Full Name</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Process Date</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Amount</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Status</span>
					      </label>
					    </p>

					      <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Trans ID</span>
					      </label>
					    </p>

					      <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Contact ID</span>
					      </label>
					    </p>

					      <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Assigned To</span>
					      </label>
					    </p>

					      <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> #NSFs</span>
					      </label>
					    </p>

					      <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Account</span>
					      </label>
					    </p>

					      <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Acct Num</span>
					      </label>
					    </p>

					      <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Additional</span>
					      </label>
					    </p>

					      <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Address</span>
					      </label>
					    </p>

					      <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Address 2</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Assigned Attorney</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Balance</span>
					      </label>
					    </p>

					    <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Bank Account Type</span>
					      </label>
					    </p>


					    <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Bank Name</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Business Name</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Campaign</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Card Type</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Cell Phone</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> City</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Cleared Date</span>
					      </label>
					    </p>


					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Client Paused</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Client Status</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Comp Template</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Company</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Company</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Company - Law Firm</span>
					      </label>
					    </p>


					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Company - Lead Vendor</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Company - Marketing Company</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Company - Partner</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Company - Servicing Company</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Contract #</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Created By</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Creditor Name</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Custodial Account</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Customer ID</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Data Source</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Debt ID</span>
					      </label>
					    </p>


 <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> DOB</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Draft Date</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Dropped Date</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Dropped Reason</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> DTI %</span>
					      </label>
					    </p>


 <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Email</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Enrolled By</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Enrolled Date</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Enrolled Debt</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> EPF Open</span>
					      </label>
					    </p>


 <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> EPF Paid</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> EPF Pending</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> External ID</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> File Type</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> First Name</span>
					      </label>
					    </p>


 <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> First Payment Amount</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> First Payment Cleared Date</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> FIrst Payment Date</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> First Payment Status</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> First Settlement Date</span>
					      </label>
					    </p>



 <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Gateway Hold</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Gateway Hold Reason</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Home Phone</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> ID</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Last Name</span>
					      </label>
					    </p>


 <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Last Payment Amount</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Last Payment Date</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Last Payment Processed (days ago)</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Last Payment Return Date</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Last Payment Status</span>
					      </label>
					    </p>


 <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Last Task Complete Date</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Last Task Completed</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Law Firm</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Linked Fee Sub Type</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Linked Payment Amount</span>
					      </label>
					    </p>

					    <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Linked Payment Cleared Date</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Linked Payment Date</span>
					      </label>
					    </p>

					      <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Linked Payment Status</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Manager</span>
					      </label>
					    </p>

					    <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Memo</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Month - Enrolled Date</span>
					      </label>
					    </p>


					      <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Month - Submitted Date</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Negotiator</span>
					      </label>
					    </p>

					    <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Next Payment Amount</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Next Payment Date</span>
					      </label>
					    </p>


					      <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Num Payments</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Original Debt</span>
					      </label>
					    </p>

					    <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Paid To</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Pay Freq.</span>
					      </label>
					    </p>


					      <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Payment #</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Payment Created Date</span>
					      </label>
					    </p>

					    <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Payment Summary</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Pending Balance</span>
					      </label>
					    </p>

					      <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Program Length (trans)</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Program Name</span>
					      </label>
					    </p>

					    <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Repayment Program</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Return Code</span>
					      </label>
					    </p>

					      <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Return Date</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Return Reason</span>
					      </label>
					    </p>

					    <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Routing Num</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Second Approver</span>
					      </label>
					    </p>

					      <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Second Payment Amount</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Second Payment Date</span>
					      </label>
					    </p>

					    <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Second Payment Status</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Sett Commit</span>
					      </label>
					    </p>

					      <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Sett Negotiator</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Sett Ref</span>
					      </label>
					    </p>

					    <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Sett. Payment Type</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Settled By</span>
					      </label>
					    </p>

					      <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Settlement Amount</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Settlement Confirmation</span>
					      </label>
					    </p>

					    <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Settlement Date</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> State</span>
					      </label>
					    </p>

					      <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Sub Type</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Submitted By</span>
					      </label>
					    </p>

					    <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Submitted Date</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Third Party Cred</span>
					      </label>
					    </p>

					      <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Third Payment Amount</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Third Payment Date</span>
					      </label>
					    </p>

					    <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Third Payment Status</span>
					      </label>
					    </p>

					     <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> Time In Status</span>
					      </label>
					    </p>

				</div>
			    </div>
	</div>    





	  		<div id="clmonthdiv" style="display: none;">
		  			<div class="actitlee">Cleared Last Month</div>
		  			<div class="acsubtitle">trassaction totle  : $0.00</div>
		  			<div class="ulitems">
		  				<ul class="ulac">
		  					<li><a><i class="fas fa-edit"></i>Customize</a></li>
		  					<li><a><i class="fas fa-share-square"></i>Export To CSV</a></li>
		  					<li><a><i class="far fa-envelope"></i>Email Report</a></li>
		  					<li><a><i class="fas fa-chart-pie"></i>Analyze This Report</a></li>
		  				</ul>

		  			</div>
		  	        <div class="table-box">
							<table id="example" class="ui celled table responsive nowrap striped highlight" style="width:100%">
					        <thead>
					            <tr>
					            	<th>Customer ID</th>
					            	<th>Full Name </th>
					            	<th>Trans ID </th>
					            	<th>Amount </th>
					            	<th>Return Date </th>
					            	<th>Trans Type </th>
					            	<th>Status </th>
					            	<th>Assigned To </th>
					            </tr>
					        </thead>
					        <tbody>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								
							</tr>
							</tbody>
						   </table>
				    </div> 
		  		</div>

		  		<div id="clweekdiv" style="display: none;">
		  			<div class="actitlee">Cleared Last Week</div>
		  			<div class="acsubtitle">trassaction totle  : $0.00</div>
		  			<div class="ulitems">
		  				<ul class="ulac">
		  					<li><a><i class="fas fa-edit"></i>Customize</a></li>
		  					<li><a><i class="fas fa-share-square"></i>Export To CSV</a></li>
		  					<li><a><i class="far fa-envelope"></i>Email Report</a></li>
		  					<li><a><i class="fas fa-chart-pie"></i>Analyze This Report</a></li>
		  				</ul>

		  			</div>
		  	        <div class="table-box">
							<table id="example" class="ui celled table responsive nowrap striped highlight" style="width:100%">
					        <thead>
					            <tr>
					            	<th>Customer ID</th>
					            	<th>Full Name </th>
					            	<th>Trans ID </th>
					            	<th>Amount </th>
					            	<th>Return Date </th>
					            	<th>Trans Type </th>
					            	<th>Status </th>
					            	<th>Assigned To </th>
					            </tr>
					        </thead>
					        <tbody>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								
							</tr>
							</tbody>
						   </table>
				    </div> 
		  		</div>

		  		<div id="ctmonthdiv" style="display: none;">
		  			<div class="actitlee">Cleared This Month</div>
		  			<div class="acsubtitle">trassaction totle  : $0.00</div>
		  			<div class="ulitems">
		  				<ul class="ulac">
		  					<li><a><i class="fas fa-edit"></i>Customize</a></li>
		  					<li><a><i class="fas fa-share-square"></i>Export To CSV</a></li>
		  					<li><a><i class="far fa-envelope"></i>Email Report</a></li>
		  					<li><a><i class="fas fa-chart-pie"></i>Analyze This Report</a></li>
		  				</ul>

		  			</div>
		  	        <div class="table-box">
							<table id="example" class="ui celled table responsive nowrap striped highlight" style="width:100%">
					        <thead>
					            <tr>
					            	<th>Customer ID</th>
					            	<th>Full Name </th>
					            	<th>Trans ID </th>
					            	<th>Amount </th>
					            	<th>Return Date </th>
					            	<th>Trans Type </th>
					            	<th>Status </th>
					            	<th>Assigned To </th>
					            </tr>
					        </thead>
					        <tbody>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								
							</tr>
							</tbody>
						   </table>
				    </div> 
		  		</div>

		  		<div id="ctweekdiv" style="display: none;">
		  			<div class="actitlee">Cleared This week</div>
		  			<div class="acsubtitle">trassaction totle  : $0.00</div>
		  			<div class="ulitems">
		  				<ul class="ulac">
		  					<li><a><i class="fas fa-edit"></i>Customize</a></li>
		  					<li><a><i class="fas fa-share-square"></i>Export To CSV</a></li>
		  					<li><a><i class="far fa-envelope"></i>Email Report</a></li>
		  					<li><a><i class="fas fa-chart-pie"></i>Analyze This Report</a></li>
		  				</ul>

		  			</div>
		  	        <div class="table-box">
							<table id="example" class="ui celled table responsive nowrap striped highlight" style="width:100%">
					        <thead>
					            <tr>
					            	<th>Customer ID</th>
					            	<th>Full Name </th>
					            	<th>Trans ID </th>
					            	<th>Amount </th>
					            	<th>Return Date </th>
					            	<th>Trans Type </th>
					            	<th>Status </th>
					            	<th>Assigned To </th>
					            </tr>
					        </thead>
					        <tbody>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								
							</tr>
							</tbody>
						   </table>
				    </div> 
		  		</div>

		  		<div id="ctdatediv" style="display: none;">
		  			<div class="actitlee">Cleared Year to Date</div>
		  			<div class="acsubtitle">trassaction totle  : $0.00</div>
		  			<div class="ulitems">
		  				<ul class="ulac">
		  					<li><a><i class="fas fa-edit"></i>Customize</a></li>
		  					<li><a><i class="fas fa-share-square"></i>Export To CSV</a></li>
		  					<li><a><i class="far fa-envelope"></i>Email Report</a></li>
		  					<li><a><i class="fas fa-chart-pie"></i>Analyze This Report</a></li>
		  				</ul>

		  			</div>
		  	        <div class="table-box">
							<table id="example" class="ui celled table responsive nowrap striped highlight" style="width:100%">
					        <thead>
					            <tr>
					            	<th>Customer ID</th>
					            	<th>Full Name </th>
					            	<th>Trans ID </th>
					            	<th>Amount </th>
					            	<th>Return Date </th>
					            	<th>Trans Type </th>
					            	<th>Status </th>
					            	<th>Assigned To </th>
					            </tr>
					        </thead>
					        <tbody>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								
							</tr>
							</tbody>
						   </table>
				    </div> 
		  		</div>
		  		
		  		<div id="pnmonthdiv" style="display: none;">
		  			<div class="actitlee">Processing Next Month</div>
		  			<div class="acsubtitle">trassaction totle  : $0.00</div>
		  			<div class="ulitems">
		  				<ul class="ulac">
		  					<li><a><i class="fas fa-edit"></i>Customize</a></li>
		  					<li><a><i class="fas fa-share-square"></i>Export To CSV</a></li>
		  					<li><a><i class="far fa-envelope"></i>Email Report</a></li>
		  					<li><a><i class="fas fa-chart-pie"></i>Analyze This Report</a></li>
		  				</ul>

		  			</div>
		  	        <div class="table-box">
							<table id="example" class="ui celled table responsive nowrap striped highlight" style="width:100%">
					        <thead>
					            <tr>
					            	<th>Customer ID</th>
					            	<th>Full Name </th>
					            	<th>Trans ID </th>
					            	<th>Amount </th>
					            	<th>Return Date </th>
					            	<th>Trans Type </th>
					            	<th>Status </th>
					            	<th>Assigned To </th>
					            </tr>
					        </thead>
					        <tbody>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								
							</tr>
							</tbody>
						   </table>
				    </div> 
		  		</div>
		  		
		  		<div id="pnweekdiv" style="display: none;">
		  			<div class="actitlee">Processing Next week</div>
		  			<div class="acsubtitle">trassaction totle  : $0.00</div>
		  			<div class="ulitems">
		  				<ul class="ulac">
		  					<li><a><i class="fas fa-edit"></i>Customize</a></li>
		  					<li><a><i class="fas fa-share-square"></i>Export To CSV</a></li>
		  					<li><a><i class="far fa-envelope"></i>Email Report</a></li>
		  					<li><a><i class="fas fa-chart-pie"></i>Analyze This Report</a></li>
		  				</ul>

		  			</div>
		  	        <div class="table-box">
							<table id="example" class="ui celled table responsive nowrap striped highlight" style="width:100%">
					        <thead>
					            <tr>
					            	<th>Customer ID</th>
					            	<th>Full Name </th>
					            	<th>Trans ID </th>
					            	<th>Amount </th>
					            	<th>Return Date </th>
					            	<th>Trans Type </th>
					            	<th>Status </th>
					            	<th>Assigned To </th>
					            </tr>
					        </thead>
					        <tbody>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								
							</tr>
							</tbody>
						   </table>
				    </div> 
		  		</div>

		  		<div id="pnyeardiv" style="display: none;">
		  			<div class="actitlee">Processing Next year</div>
		  			<div class="acsubtitle">trassaction totle  : $0.00</div>
		  			<div class="ulitems">
		  				<ul class="ulac">
		  					<li><a><i class="fas fa-edit"></i>Customize</a></li>
		  					<li><a><i class="fas fa-share-square"></i>Export To CSV</a></li>
		  					<li><a><i class="far fa-envelope"></i>Email Report</a></li>
		  					<li><a><i class="fas fa-chart-pie"></i>Analyze This Report</a></li>
		  				</ul>

		  			</div>
		  	        <div class="table-box">
							<table id="example" class="ui celled table responsive nowrap striped highlight" style="width:100%">
					        <thead>
					            <tr>
					            	<th>Customer ID</th>
					            	<th>Full Name </th>
					            	<th>Trans ID </th>
					            	<th>Amount </th>
					            	<th>Return Date </th>
					            	<th>Trans Type </th>
					            	<th>Status </th>
					            	<th>Assigned To </th>
					            </tr>
					        </thead>
					        <tbody>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								
							</tr>
							</tbody>
						   </table>
				    </div> 
		  		</div>
		  		
		  		<div id="proyeardiv" style="display: none;">
		  			<div class="actitlee">Processing Remainder of Year</div>
		  			<div class="acsubtitle">trassaction totle  : $0.00</div>
		  			<div class="ulitems">
		  				<ul class="ulac">
		  					<li><a><i class="fas fa-edit"></i>Customize</a></li>
		  					<li><a><i class="fas fa-share-square"></i>Export To CSV</a></li>
		  					<li><a><i class="far fa-envelope"></i>Email Report</a></li>
		  					<li><a><i class="fas fa-chart-pie"></i>Analyze This Report</a></li>
		  				</ul>

		  			</div>
		  	        <div class="table-box">
							<table id="example" class="ui celled table responsive nowrap striped highlight" style="width:100%">
					        <thead>
					            <tr>
					            	<th>Customer ID</th>
					            	<th>Full Name </th>
					            	<th>Trans ID </th>
					            	<th>Amount </th>
					            	<th>Return Date </th>
					            	<th>Trans Type </th>
					            	<th>Status </th>
					            	<th>Assigned To </th>
					            </tr>
					        </thead>
					        <tbody>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								
							</tr>
							</tbody>
						   </table>
				    </div> 
		  		</div>

		  		<div id="ptmonthdiv" style="display: none;">
		  			<div class="actitlee">Processing this month</div>
		  			<div class="acsubtitle">trassaction totle  : $0.00</div>
		  			<div class="ulitems">
		  				<ul class="ulac">
		  					<li><a><i class="fas fa-edit"></i>Customize</a></li>
		  					<li><a><i class="fas fa-share-square"></i>Export To CSV</a></li>
		  					<li><a><i class="far fa-envelope"></i>Email Report</a></li>
		  					<li><a><i class="fas fa-chart-pie"></i>Analyze This Report</a></li>
		  				</ul>

		  			</div>
		  	        <div class="table-box">
							<table id="example" class="ui celled table responsive nowrap striped highlight" style="width:100%">
					        <thead>
					            <tr>
					            	<th>Customer ID</th>
					            	<th>Full Name </th>
					            	<th>Trans ID </th>
					            	<th>Amount </th>
					            	<th>Return Date </th>
					            	<th>Trans Type </th>
					            	<th>Status </th>
					            	<th>Assigned To </th>
					            </tr>
					        </thead>
					        <tbody>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								
							</tr>
							</tbody>
						   </table>
				    </div> 
		  		</div>

		  		<div id="ptweekdiv" style="display: none;">
		  			<div class="actitlee">Processing this week</div>
		  			<div class="acsubtitle">trassaction totle  : $0.00</div>
		  			<div class="ulitems">
		  				<ul class="ulac">
		  					<li><a><i class="fas fa-edit"></i>Customize</a></li>
		  					<li><a><i class="fas fa-share-square"></i>Export To CSV</a></li>
		  					<li><a><i class="far fa-envelope"></i>Email Report</a></li>
		  					<li><a><i class="fas fa-chart-pie"></i>Analyze This Report</a></li>
		  				</ul>

		  			</div>
		  	        <div class="table-box">
							<table id="example" class="ui celled table responsive nowrap striped highlight" style="width:100%">
					        <thead>
					            <tr>
					            	<th>Customer ID</th>
					            	<th>Full Name </th>
					            	<th>Trans ID </th>
					            	<th>Amount </th>
					            	<th>Return Date </th>
					            	<th>Trans Type </th>
					            	<th>Status </th>
					            	<th>Assigned To </th>
					            </tr>
					        </thead>
					        <tbody>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								
							</tr>
							</tbody>
						   </table>
				    </div> 
		  		</div>

		  		<div id="rlmonthdiv" style="display: none;">
		  			<div class="actitlee">return last month</div>
		  			<div class="acsubtitle">trassaction totle  : $0.00</div>
		  			<div class="ulitems">
		  				<ul class="ulac">
		  					<li><a><i class="fas fa-edit"></i>Customize</a></li>
		  					<li><a><i class="fas fa-share-square"></i>Export To CSV</a></li>
		  					<li><a><i class="far fa-envelope"></i>Email Report</a></li>
		  					<li><a><i class="fas fa-chart-pie"></i>Analyze This Report</a></li>
		  				</ul>

		  			</div>
		  	        <div class="table-box">
							<table id="example" class="ui celled table responsive nowrap striped highlight" style="width:100%">
					        <thead>
					            <tr>
					            	<th>Customer ID</th>
					            	<th>Full Name </th>
					            	<th>Trans ID </th>
					            	<th>Amount </th>
					            	<th>Return Date </th>
					            	<th>Trans Type </th>
					            	<th>Status </th>
					            	<th>Assigned To </th>
					            </tr>
					        </thead>
					        <tbody>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								
							</tr>
							</tbody>
						   </table>
				    </div> 
		  		</div>

		  		<div id="rlweekdiv" style="display: none;">
		  			<div class="actitlee">return last week</div>
		  			<div class="acsubtitle">trassaction totle  : $0.00</div>
		  			<div class="ulitems">
		  				<ul class="ulac">
		  					<li><a><i class="fas fa-edit"></i>Customize</a></li>
		  					<li><a><i class="fas fa-share-square"></i>Export To CSV</a></li>
		  					<li><a><i class="far fa-envelope"></i>Email Report</a></li>
		  					<li><a><i class="fas fa-chart-pie"></i>Analyze This Report</a></li>
		  				</ul>

		  			</div>
		  	        <div class="table-box">
							<table id="example" class="ui celled table responsive nowrap striped highlight" style="width:100%">
					        <thead>
					            <tr>
					            	<th>Customer ID</th>
					            	<th>Full Name </th>
					            	<th>Trans ID </th>
					            	<th>Amount </th>
					            	<th>Return Date </th>
					            	<th>Trans Type </th>
					            	<th>Status </th>
					            	<th>Assigned To </th>
					            </tr>
					        </thead>
					        <tbody>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								
							</tr>
							</tbody>
						   </table>
				    </div> 
		  		</div>

		  		<div id="rtmonthdiv" style="display: none;">
		  			<div class="actitlee">return this month</div>
		  			<div class="acsubtitle">trassaction totle  : $0.00</div>
		  			<div class="ulitems">
		  				<ul class="ulac">
		  					<li><a><i class="fas fa-edit"></i>Customize</a></li>
		  					<li><a><i class="fas fa-share-square"></i>Export To CSV</a></li>
		  					<li><a><i class="far fa-envelope"></i>Email Report</a></li>
		  					<li><a><i class="fas fa-chart-pie"></i>Analyze This Report</a></li>
		  				</ul>

		  			</div>
		  	        <div class="table-box">
							<table id="example" class="ui celled table responsive nowrap striped highlight" style="width:100%">
					        <thead>
					            <tr>
					            	<th>Customer ID</th>
					            	<th>Full Name </th>
					            	<th>Trans ID </th>
					            	<th>Amount </th>
					            	<th>Return Date </th>
					            	<th>Trans Type </th>
					            	<th>Status </th>
					            	<th>Assigned To </th>
					            </tr>
					        </thead>
					        <tbody>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								
							</tr>
							</tbody>
						   </table>
				    </div> 
		  		</div>

		  		<div id="rtweekdiv" style="display: none;">
		  			<div class="actitlee">return this week</div>
		  			<div class="acsubtitle">trassaction totle  : $0.00</div>
		  			<div class="ulitems">
		  				<ul class="ulac">
		  					<li><a><i class="fas fa-edit"></i>Customize</a></li>
		  					<li><a><i class="fas fa-share-square"></i>Export To CSV</a></li>
		  					<li><a><i class="far fa-envelope"></i>Email Report</a></li>
		  					<li><a><i class="fas fa-chart-pie"></i>Analyze This Report</a></li>
		  				</ul>

		  			</div>
		  	        <div class="table-box">
							<table id="example" class="ui celled table responsive nowrap striped highlight" style="width:100%">
					        <thead>
					            <tr>
					            	<th>Customer ID</th>
					            	<th>Full Name </th>
					            	<th>Trans ID </th>
					            	<th>Amount </th>
					            	<th>Return Date </th>
					            	<th>Trans Type </th>
					            	<th>Status </th>
					            	<th>Assigned To </th>
					            </tr>
					        </thead>
					        <tbody>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								
							</tr>
							</tbody>
						   </table>
				    </div> 
		  		</div>

		  		<div id="rytdatediv" style="display: none;">
		  		<div class="actitlee">Returned Year to Date</div>
		  		<div class="acsubtitle">trassaction totle  : $0.00</div>
		  		<div class="ulitems">
		  			<ul class="ulac">
		  				<li><a>Customize</a></li>
		  				<li><a>Export To CSV</a></li>
		  				<li><a>Email Report</a></li>
		  				<li><a>Analyze This Report</a></li>
		  			</ul>

		  		</div>
		  	        <div class="table-box">
							<table id="example" class="ui celled table responsive nowrap striped highlight" style="width:100%">
					        <thead>
					            <tr>
					            	<th>Customer ID</th>
					            	<th>Full Name </th>
					            	<th>Trans ID </th>
					            	<th>Amount </th>
					            	<th>Return Date </th>
					            	<th>Trans Type </th>
					            	<th>Status </th>
					            	<th>Assigned To </th>
					            </tr>
					        </thead>
					        <tbody>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								
							</tr>
							</tbody>
						   </table>
				    </div> 
		  		</div>

		  		<div id="tsasasiasdiv" style="display: none;">
		  		<div class="actitlee">tsasasias</div>
		  		<div class="acsubtitle">trassaction totle  : $0.00</div>
		  		<div class="ulitems">
		  			<ul class="ulac">
		  				<li><a>Customize</a></li>
		  				<li><a>Export To CSV</a></li>
		  				<li><a>Email Report</a></li>
		  				<li><a>Analyze This Report</a></li>
		  			</ul>

		  		</div>
		  	        <div class="table-box">
							<table id="example" class="ui celled table responsive nowrap striped highlight" style="width:100%">
					        <thead>
					            <tr>
					            	<th>Customer ID</th>
					            	<th>Full Name </th>
					            	<th>Trans ID </th>
					            	<th>Amount </th>
					            	<th>Return Date </th>
					            	<th>Trans Type </th>
					            	<th>Status </th>
					            	<th>Assigned To </th>
					            </tr>
					        </thead>
					        <tbody>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
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
		  </div>
		
    </div>
</div>