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

				<div class="additional-info-container">
					<div class="add-info-box">
						<div class="addinfo-ttl">
							<h6>Additional Information</h6>
						</div>
						<div class="infoBox">
							<div class="col s12 m6"><p>Adjusted Gross Income:</p></div>
							<div class="col s12 m6"><p><?= $get['gross_income']; ?></p></div>

							<div class="col s12 m6"><p>Current Status of Loans:</p></div>
							<div class="col s12 m6"><p><?= $get['status_of_loans']; ?></p></div>

							<div class="col s12 m6"><p>Family Size:</p></div>
							<div class="col s12 m6"><p><?= $get['family_size']; ?></p></div>

							<div class="col s12 m6"><p>Filing Status:</p></div>
							<div class="col s12 m6"><p><?= $get['filing_status']; ?></p></div>

							<div class="col s12 m6"><p>REF1 First Name:</p></div>
							<div class="col s12 m6"><p><?= $get['ref_f_name']; ?></p></div>

							<div class="col s12 m6"><p>REF1 Phone:</p></div>
							<div class="col s12 m6"><p><?= $get['ref_phone']; ?></p></div>

							<div class="col s12 m6"><p>REF1 Relationship:</p></div>
							<div class="col s12 m6"><p><?= $get['ref_relationship']; ?></p></div>

							<div class="col s12 m6"><p>REF2 First Name:</p></div>
							<div class="col s12 m6"><p><?= $get['ref2_f_name']; ?></p></div>

							<div class="col s12 m6"><p>REF2 Phone:</p></div>
							<div class="col s12 m6"><p><?= $get['ref2_phone']; ?></p></div>

							<div class="col s12 m6"><p>REF2 Relationship: Sister:</p></div>
							<div class="col s12 m6"><p><?= $get['ref2_phone']; ?></p></div>

							<div class="col s12 m6"><p>Taxable Income:</p></div>
							<div class="col s12 m6"><p><?= $get['taxable_income']; ?></p></div>

						</div>
					</div>
				</div>
			</div>
			<div class="col s12 m9">
				<div class="right-top-menu">
					<div id="csubnav">
						<ul>
							<li data-id="tab_1" id="btn_Thistory" class="tab_btn active">
								<a href="#!">History</a>
							</li>
							<li data-id="tab_2" class="tab_btn" id="btn_Tcallactivity">
								<a href="#!">Calls</a>
							</li>
							<li data-id="tab_3" class="tab_btn" id="btn_Temailactivity">
								<a href="#!">Emails</a>
							</li>
							<li data-id="tab_4" class="tab_btn" id="btn_Tnotes">
								<a href="#!">Notes</a>
							</li>
							<li data-id="tab_5" class="tab_btn" id="btn_Temarketing">
								<a href="#!">E-Marketing</a>
							</li>
							<li data-id="tab_6" class="tab_btn" id="btn_Tdocs">
								<a href="#!">Docs</a>
							</li>
							<li data-id="tab_7" class="tab_btn" id="btn_Tevents">
								<a href="#!">Events</a>
							</li>
							<li data-id="tab_8" class="tab_btn" id="btn_Ttasks">
								<a href="#!">Tasks</a>
							</li>
							<li data-id="tab_9" class="tab_btn" id="btn_Tstuprog">
								<a href="#!">Loan Programs</a>
							</li>
							<li data-id="tab_10" class="tab_btn" id="btn_Tcc">
								<a href="#!">Credit Card</a>
							</li>
							<li data-id="tab_11" class="tab_btn" id="btn_Tbanks">
								<a href="#!">Bank Account</a>
							</li>
							<li data-id="tab_12" id="btn_debts" class="tab_btn">
								<a href="#!">Debts</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="right-body-container">
					<div class="right-body">
						<div class="col s12 m12">
							<div class="tab_1 xbox active">
								First
							</div>
							<div class="tab_2 xbox">
								<h6>Call Activity</h6>
								<p>There is no call activity for this contact</p>
							</div>
							<div class="tab_3 xbox">
								<div class="mail-box">
									<h6>Email Activity</h6>
									<p>There is no email activity for this contact</p>
								</div>
							</div>
							<div class="tab_4 xbox">
								4
							</div>
							<div class="tab_5 xbox">
								<div class="marketing-summery-box">
									<h6>E-Marketing Summary</h6>
									<p>This contact has not received any email campaigns</p>
								</div>
							</div>
							<div class="tab_6 xbox">
								6
							</div>
							<div class="tab_7 xbox">
								<div class="marketing-summery-box">
									<h6>Calendar Events</h6>
									<div class="small-ttl">
										<h6>Upcoming</h6>
										<div class="t-box">
											<table>
												<thead>
													<tr>
														<th>Title</th>
														<th>When</th>
														<th>Assign to </th>
														<th>Type</th>
														<th>Description</th>
														<th>Dismiss</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><?= 'Events'; ?></td>
														<td><?= 'Thursday, June 21 @ 2:00 am - 2:30 am, US/Pacific'; ?></td>
														<td><?= 'Alexander Goodman'; ?></td>
														<td><?= 'This is only for Test.'; ?></td>
														<td><?= 'Completed'; ?></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="tab_8 xbox">
								<div class="task-box">
									<div class="task-body">
										<div  class="col s12 m9">
										<h5>All Tasks <span class="task-bedge">0</span></h5>
										</div>
										<div class="col s12 m3">
											<div class="col s12 m8">
											<span class="pre-srch-icon"><i class="fas fa-search"></i></span>
											<input type="search" name="srch">
											</div>
											<div class="col s12 m3 btn-bx">
												<button type="button" class="btn-xport-task">Export Task</button>
											</div>
											<div class="col s12 m1">
												<a href="#!" class="add-task"><img src="<?= base_url(); ?>html/images/add.png"></a>
											</div>
										</div>
										<div class="task-tbl-box">
											<div class="table-body">
												<table class="table">
													<thead>
														<tr>
															<th>
															<th>Task</th>
															<th>Status</th>
															<th>Assigned To</th>
															<th>Created By</th>
															<th>Created Time</th>
															<th>Due Date</th>
															<th>Days</th>
															<th>ID</th>
															<th>Actions</th>
														</tr>
													</thead>
													<tbody>
														<tr><td></td>
															<td>
																<?= 'Returned Payment'; ?><br>
																<label><?= 'This is Task.'; ?></label>
															</td>
															<td></td>
															<td><?= 'Alexander Goodman'; ?></td>
															<td><?= 'Alexander Goodman'; ?></td>
															<td><?= '06/19/2018 2:07 am'; ?></td>
															<td><?= '06/20/2018';?></td>
															<td><?= '1'; ?></td>
															<td><?= '10769305'; ?></td>
															<td><a href="#!"><i class="fas fa-edit"></i></a> &nbsp; <a href="#!"><i class="fas fa-check-square green-text"></i></a></td>

														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab_9 xbox">
								<div class="loan-box">
									<div class="col s10 m10">
										<h6>Student Loan Programs</h6>
									</div>
									<div class="col s2 m2">
										<a href="#!" class="btn-tgl-add"><button type="button" class="btn-add-program">Manually Add Program</button></a>
									</div>
									<div class="row">
										<p class="col s12 m12">No loan program information available</p>
									</div>
									<div class="add-prog-container">
										<div class="add-box">
											<div class="col s2 m2">
												<label>Program*</label>
												<select id="stu_program" name="stu_program" class="">
													<option value="">--Select--</option>
													<option value="40">Borrower's Defense to Repayment</option>
													<option value="62">Death Discharge</option>
													<option value="25">Disability Discharge</option>
													<option value="52">Disability Discharge / Income Driven Repayment</option>
													<option value="55">Disability Discharge / Non-Income Driven Repayment</option>
													<option value="12">Extended Fixed</option>
													<option value="15">Extended Graduated</option>
													<option value="3">Fixed Monthly</option>
													<option value="7">Fixed Monthly Payment Option</option>
													<option value="1">Graduated</option>
													<option value="4">Graduated Monthly</option>
													<option value="8">Graduated Monthly Payment Option</option>
													<option value="72">IBR / FFEL</option>
													<option value="24">IBR For New Borrowers</option>
													<option value="6">Income Based</option>
													<option value="5">Income Contingent</option>
													<option value="9">Income-Based</option>
													<option value="18">Income-Based Repayment (IBR)</option>
													<option value="21">Income-Contingent Repayment (ICR)</option>
													<option value="10">Pay As You Earn</option>
													<option value="37">Pay As You Earn (PAYE)</option>
													<option value="78">Permantent Disability</option>
													<option value="58">Public Service Loan Forgiveness - Only</option>
													<option value="28">Public Service Only</option>
													<option value="84">Recertification</option>
													<option value="34">Rehab</option>
													<option value="66">Rehab / IBR</option>
													<option value="69">Rehab / Standard</option>
													<option value="35">Revised Pay As You Earn (REPAYE)</option>
													<option value="43">School Closure</option>
													<option value="46">School Closure Discharge / Income Driven Repayment</option>
													<option value="49">School Closure Discharge / Non-Income Driven Repayment</option>
													<option value="2">Standard</option>
													<option value="31">Teacher Loan Forgiveness</option>
												</select>
											</div>
											<div class="col s2 m1">
												<label>Months*</label>
												<input type="text" name="l_month">
											</div>
											<div class="col s2 m1">
												<label>Payment*</label>
												<input type="text" name="l_payment">
											</div>
											<div class="col s2 m1">
												<label>P&I</label>
												<input type="text" name="l_P_I">
											</div>
											<div class="col s2 m1">
												<button type="button" class="btn-save-loan green white-text btn"> save</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab_10 xbox">
								<div class="Credit-Card-Box">
									<div class="credit-ttl">
										<h6>Credit Card Account</h6>
									</div>
									<div class="col s6 6">
										<div class="col s6 m6">
											<div class="pnl-ttl">
												<h6>Card Info</h6>
											</div>
											<div>
												<label>Debit / Credit</label>
												<select id="debit_credit" name="debit_credit" class="">
													<option value="">--Select--</option><option value="DC">Debit Card</option>
													<option value="CC">Credit Card</option>
													<option value="PP">Pre-Paid Card</option>
												</select>
											</div>
											<div>
												<label>Card Type *</label>
												<select id="card_type" name="card_type" class="">
													<option value="0">--Select--</option><option value="visa">Visa</option>
													<option value="mc">Mastercard</option>
													<option value="amex">American Express</option>
													<option value="disc">Discover</option>
												</select>
											</div>
											<div>
												<label>Card Issuer</label>
												<input type="text" name="">
											</div>
											<div>
												<label>Name on Card *</label>
												<input type="text" name="">
											</div>
											<div>
												<label>Card Number *</label>
												<input type="text" name="">
											</div>
											<div>
												<label class="col s12" style="padding: 0;">Expiration Date *</label>
												<div class="col s6 m6" style="padding: 0;">
												<select id="exp_mo" name="exp_mo" class="notempty">
													<option value="">--Select--</option><option value="01">01</option>
													<option value="02">02</option>
													<option value="03">03</option>
													<option value="04">04</option>
													<option value="05">05</option>
													<option value="06">06</option>
													<option value="07">07</option>
													<option value="08">08</option>
													<option value="09">09</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
												</select>
												</div>
												<div class="col s6 m6" style="padding: 0;">
												<select id="exp_yr" name="exp_yr" class="notempty">
													<option value="">--Select--</option><option value="2011">2011</option>
													<option value="2012">2012</option>
													<option value="2013">2013</option>
													<option value="2014">2014</option>
													<option value="2015">2015</option>
													<option value="2016">2016</option>
													<option value="2017">2017</option>
													<option value="2018">2018</option>
													<option value="2019">2019</option>
													<option value="2020">2020</option>
													<option value="2021">2021</option>
													<option value="2022">2022</option>
													<option value="2023">2023</option>
													<option value="2024">2024</option>
													<option value="2025">2025</option>
													<option value="2026">2026</option>
													<option value="2027">2027</option>
													<option value="2028">2028</option>
													<option value="2029">2029</option>
													<option value="2030">2030</option>
													<option value="2031">2031</option>
													<option value="2032">2032</option>
													<option value="2033">2033</option>
												</select>
											</div>
											</div>
											<div>
												<label>CVV</label>
												<input type="text" name="">
											</div>
										</div>
										<div class="col s6 m6">
											<div class="pnl-ttl">
												<h6>Billing Info</h6>
											</div>
											<div>
												<label>Address</label>
												<input type="text" name="">
											</div>
											<div>
												<label>Address 2</label>
												<input type="text" name="">
											</div>
											<div>
												<label>City</label>
												<input type="text" name="">
											</div>
											<div>
												<label>State</label>
												<select id="billing_state" name="billing_state" class="">
													<option value="">--Select--</option>
													<option value="AA">AA-Armed Forces Americas</option>
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
													<option value="MN" selected="selected">Minnesota</option>
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
											<div>
												<label>Zip</label>
												<input type="text" name="">
											</div>
										</div>
									</div>
									<div class="col s12 m12">
										<button type="button" class="btn-save-credit green white-text btn">Save Card</button>
									</div>
								</div>
							</div>
							<div class="tab_11 xbox">
								11
							</div>
							<div class="tab_12 xbox">
								12
							</div>
						</div>
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