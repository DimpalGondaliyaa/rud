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
		        	<li><a class="valign-wrapper" href="<?php echo base_url(); ?>EditContact/editData/<?= $get['c_id'];?>"> <img src="<?php echo base_url(); ?>html/images/user_edit.png" class="responsive-img" style="margin-right: 5px;">Edit Contacts</a></li>

		        	<li><a class="valign-wrapper condltbtn" href="#!"  data-id="<?php echo $get['c_id']; ?>"><img src="<?php echo base_url(); ?>html/images/user_delete.png" class="responsive-img" style="margin-right: 5px;">Delete Contacts</a></li>

		        	<li><a class="valign-wrapper" href="<?= base_url(); ?>Budget_Analysis"> <img src="<?php echo base_url(); ?>html/images/calculator.png" class="responsive-img" style="margin-right: 5px;">  Budget Analysis</a></li>

		        	<li><a class="valign-wrapper" href="<?= base_url(); ?>Creditors"> <img src="<?php echo base_url(); ?>html/images/book_edit.png" class="responsive-img" style="margin-right: 5px;">  Creditors</a></li>

		        	<li><a class="valign-wrapper" href="<?= base_url(); ?>Contact_Enrollment"> <img src="<?php echo base_url(); ?>html/images/report_add.png" class="responsive-img" style="margin-right: 5px;">  Enrollment</a></li>

		        	<li><a class="valign-wrapper" href="<?= base_url(); ?>Preview_Plans"> <img src="<?php echo base_url(); ?>html/images/add.png" class="responsive-img" style="margin-right: 5px;">  Retrieve Loans and Programs</a></li>

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
								<h6>History</h6>
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
								<div class="note-Box">
									<div class="noteBox">
										<form name="formNote" id="formNote">
											<input type="hidden" name="c_id" value="<?php echo $get['c_id']; ?>">
										<div class="col s4 m4">
											<label>Note Type</label>
											<select id="note_type" name="note_type">
												<option value="General">General</option>
												<option value="Call">Call</option>
												<option value="Creditor">Creditor</option>
												<option value="Settlement">Settlement</option>
												<option value="Attorney">Attorney</option>
												<option value="Compliance">Compliance</option>
												<option value="Sales">Sales</option>
												<option value="Legal">Legal</option>
												<option value="Document">Document</option>
												<option value="Payment">Payment</option>
												<option value="Accounting">Accounting</option>
												<option value="Cal Event">Cal Event</option>
												<option value="Email">Email</option>
												<option value="Schedule Change">Schedule Change</option>
												<option value="Customer Portal">Customer Portal</option>
											</select>
										</div>
										<div class="col s8 m8">
										  <label>Template</label>
										  <select id="note_template" name="note_template" class="" style="width: 99%; display: none;">
										  <option value="">--Select--</option>
										  </select>
										</div>
										<div class="col s12 m12">
											<label>Note</label>
											<textarea name="note" id="note" style="height: 100px;"></textarea>
										</div>
										<div class="col s6 m6">
											<label>Notify Users</label>
											<select id="notifyusers" name="notifyusers[]">
												<option value="">--Select--</option><option value="3142430">Alex Vargas</option>
												<option value="Alexander Goodman">Alexander Goodman</option>
												<option value="3166850">Anthony Harrison</option>
												<option value="3133547">Debt PayPro</option>
												<option value="3167522">Devin Lee</option>
												<option value="3177659">Greg Smith</option>
												<option value="3187583">Jacob Parker</option>
												<option value="3170984">James Morris</option>
												<option value="3177071">Jeff Cannon</option>
												<option value="3177239">Jennie Kelly</option>
												<option value="3177254">Khalil Rashad</option>
												<option value="3193601">Raymond Richardson</option>
												<option value="3204459">Richard Anderson</option>
												<option value="3177203">Samantha Williams</option>
											</select>
										</div>
										<div class="col s6 m6">
											<label>CC Emails <small>separate by comma</small></label>
											<span class="cc_pre"><i class="fas fa-envelope"></i></span>
											<input name="email" id="email" type="email" name="">
										</div>
										<div class="col s12 m12">
											<button type="button" class="btn green white-text btn-save-note">Save Note</button>
										</div>
										<div class="row"><br></div>
										<div class="col s8 m8">
											<label>Existing Notes</label>
											<input type="text" name="" placeholder="Search Notes">
										</div>
										</form>
										<div class="col s4 m4">
											<label><br></label>
											<select id="snote_type" name="snote_type" class="w100" onchange="searchNotes($('snotes').value)" style="display: none;">
												<option value="">--All Types--</option>
												<option value="1">General</option>
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
										<div class="noteBox-container">
											<div class="allNotes-box">
												<?php 
													foreach ($allNotes as $key => $value) {
												?>
												<div class="note_row row">
													<div class="b1">
														<div class="box1">
															<p><b><?= $value['note_type']; ?></b></p>
															<P><?= $value['createdOn']; ?></P>
															<p><?= $value['notify_user'];?></p>
														</div>
													</div>
													<div class="b2">
														<div class="box2">
															<p><?= $value['note']; ?></p>
															<p>Notified: <?= $value['notify_user']; ?>@unitedstudentsofamerica.us, <?= $value['email'];?> </p>
														</div>
													</div>
													<div class="b3">
														<div class="box3">
															<a href="#!" class="dlt_note" data-id="<?= $value['id']; ?>"><i class="fas fa-trash grey-text"></i></a>
														</div>
													</div>
												</div>
											<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab_5 xbox">
								<div class="marketing-summery-box">
									<h6>E-Marketing Summary</h6>
									<p>This contact has not received any email campaigns</p>
								</div>
							</div>
							<div class="tab_6 xbox">
								<h6>Client Documents</h6>
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
												<a href="#!" data-id="<?= $get['c_id']; ?>" class="add-task btn-addTask"><img src="<?= base_url(); ?>html/images/add.png"></a>
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
														<?php foreach ($tsk as $key => $t): 

															/*$c=$this->db->query("SELECT f_name,l_name FROM contactdetails WHERE c_id='".$t['uu_id']."'");
															$cccc=$ccc->row_array($ccc);

															*/

														?>
														<tr><td></td>
															<td>
																<?= $t['task']; ?><br>
																<label><?= $t['note']; ?></label>
															</td>
															<td></td>
															<td><?= $t['assigned_to']; ?></td>
															<td><?php 
																$rr=$this->db->query("SELECT f_name,l_name FROM contactdetails WHERE c_id='".$t['uu_id']."'");
																$r=$rr->row_array();
																echo $r['f_name'].' '.$r['l_name'];
																?>
															</td>
															<td><?= $t['createdOn']; ?></td>
															<td><?= $t['task_date']; ?></td>
															<td><?php

															$from = strtotime('08-07-2018');
															$today = time();
															$difference = $from - $today ;
															echo floor($difference / 86400);
															
															?></td>
															<td><?= '10769305'; ?></td>
															<td><a href="#!" data-id="<?= $t['t_id'];?>" class="btn_upTask"><i class="fas fa-edit"></i></a> &nbsp; <a href="#!" data-id="<?= $t['t_id'];?>"
															 data-value="<?= $r['f_name'].' '.$r['l_name'];?>" class="btn-up-c-status"><i class="fas fa-check-square green-text"></i></a></td>

														</tr>
														<?php endforeach ?>
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
									<form name="formCard" id="formCard" method="POST">
										<input type="hidden" name="c_id" value="<?= $get['c_id'];?>">
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
												<select id="debit_credit" name="card" class="">
													<option value="">--Select--</option>
													<option value="DC" <?php if($getCard['card']=='DC') {?> selected <?php } ?>>Debit Card</option>
													<option value="CC" <?php if($getCard['card']=='CC') {?> selected <?php } ?>>Credit Card</option>
													<option value="PP" <?php if($getCard['card']=='PP') {?> selected <?php } ?>>Pre-Paid Card</option>
												</select>
											</div>
											<div>
												<label>Card Type *</label>
												<select id="card_type" name="card_type" class="">
													<option value="">--Select--</option>
													<option value="visa" <?php if($getCard['card_type']=='visa') {?> selected <?php } ?>>Visa</option>
													<option value="mc" <?php if($getCard['card_type']=='mc') {?> selected <?php } ?>>Mastercard</option>
													<option value="amex" <?php if($getCard['card_type']=='amex') {?> selected <?php } ?>>American Express</option>
													<option value="disc">Discover</option>
												</select>
											</div>
											<div>
												<label>Card Issuer</label>
												<input type="text" name="card_issuer" id="card_issuer" value="<?= $getCard['card_issuer'];?>">
											</div>
											<div>
												<label>Name on Card *</label>
												<input type="text" name="name_on_card" id="name_on_card" value="<?= $getCard['name_on_card'];?>">
											</div>
											<div>
												<label>Card Number *</label>
												<input type="text" name="card_number" id="card_number" value="<?= $getCard['card_number'];?>">
											</div>
											<div>
												<?php 
													$x=explode('/', $getCard['expiration_date']);
												?>
												
												<label class="col s12" style="padding: 0;">Expiration Date *</label>
												<div class="col s6 m6" style="padding: 0;">
												<select id="exp_mo" name="exp_mo" class="notempty">
													<option value="">--Select--</option>
													<option value="01" <?php if($x[0]=='01') {?> selected <?php } ?> >01</option>
													<option value="02" <?php if($x[0]=='02') {?> selected <?php } ?>>02</option>
													<option value="03" <?php if($x[0]=='03') {?> selected <?php } ?>>03</option>
													<option value="04" <?php if($x[0]=='04') {?> selected <?php } ?>>04</option>
													<option value="05" <?php if($x[0]=='05') {?> selected <?php } ?>>05</option>
													<option value="06" <?php if($x[0]=='06') {?> selected <?php } ?>>06</option>
													<option value="07" <?php if($x[0]=='07') {?> selected <?php } ?>>07</option>
													<option value="08" <?php if($x[0]=='08') {?> selected <?php } ?>>08</option>
													<option value="09" <?php if($x[0]=='09') {?> selected <?php } ?>>09</option>
													<option value="10" <?php if($x[0]=='10') {?> selected <?php } ?>>10</option>
													<option value="11" <?php if($x[0]=='11') {?> selected <?php } ?>>11</option>
													<option value="12" <?php if($x[0]=='12') {?> selected <?php } ?>>12</option>
												</select>
												</div>
												<div class="col s6 m6" style="padding: 0;">
												<select id="exp_yr" name="exp_yr" class="notempty">
													<option value="">--Select--</option><option value="2011">2011</option>
													<option value="2012" <?php if($x[1]=='2012') {?> selected <?php } ?>>2012</option>
													<option value="2013" <?php if($x[1]=='2013') {?> selected <?php } ?>>2013</option>
													<option value="2014" <?php if($x[1]=='2014') {?> selected <?php } ?>>2014</option>
													<option value="2015" <?php if($x[1]=='2015') {?> selected <?php } ?>>2015</option>
													<option value="2016" <?php if($x[1]=='2016') {?> selected <?php } ?>>2016</option>
													<option value="2017" <?php if($x[1]=='2017') {?> selected <?php } ?>>2017</option>
													<option value="2018" <?php if($x[1]=='2018') {?> selected <?php } ?>>2018</option>
													<option value="2019" <?php if($x[1]=='2019') {?> selected <?php } ?>>2019</option>
													<option value="2020" <?php if($x[1]=='2020') {?> selected <?php } ?>>2020</option>
													<option value="2021" <?php if($x[1]=='2021') {?> selected <?php } ?>>2021</option>
													<option value="2022" <?php if($x[1]=='2022') {?> selected <?php } ?>>2022</option>
													<option value="2023" <?php if($x[1]=='2023') {?> selected <?php } ?>>2023</option>
													<option value="2024" <?php if($x[1]=='2024') {?> selected <?php } ?>>2024</option>
													<option value="2025" <?php if($x[1]=='2025') {?> selected <?php } ?>>2025</option>
													<option value="2026" <?php if($x[1]=='2026') {?> selected <?php } ?>>2026</option>
													<option value="2027" <?php if($x[1]=='2027') {?> selected <?php } ?>>2027</option>
													<option value="2028" <?php if($x[1]=='2028') {?> selected <?php } ?>>2028</option>
													<option value="2029" <?php if($x[1]=='2029') {?> selected <?php } ?>>2029</option>
													<option value="2030" <?php if($x[1]=='2030') {?> selected <?php } ?>>2030</option>
													<option value="2031" <?php if($x[1]=='2031') {?> selected <?php } ?>>2031</option>
													<option value="2032" <?php if($x[1]=='2032') {?> selected <?php } ?>>2032</option>
													<option value="2033" <?php if($x[1]=='2033') {?> selected <?php } ?>>2033</option>
												</select>
											</div>
											</div>
											<div>
												<label>CVV</label>
												<input type="text" name="cvv" id="cvv">
											</div>
										</div>
										<div class="col s6 m6">
											<div class="pnl-ttl">
												<h6>Billing Info</h6>
											</div>
											<div>
												<label>Address</label>
												<input type="text" name="address" id="address">
											</div>
											<div>
												<label>Address 2</label>
												<input type="text" name="address2" id="address2">
											</div>
											<div>
												<label>City</label>
												<input type="text" name="city" id="city">
											</div>
											<div>
												<label>State</label>
												<select id="billing_state" name="state" class="">
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
												<input type="text" name="zip">
											</div>
										</div>
									</div>
									<div class="col s12 m12">
										<button type="button" class="btn-save-card green white-text btn">Save Card</button>
									</div>
									</form>
								</div>
							</div>
							<div class="tab_11 xbox">
								<h6>Bank Account</h6><br>
								<span class="valign-wrapper"><input type="checkbox" class="chk" name="check_paying_client">&nbsp;  Check Paying Client</span>
								<hr>
								<div class="row">
									<div class="bank-container">
										<form class="form" name="formBank" id="formBank" method="POST">
											<input type="hidden" name="c_id" value="<?= $get['c_id']; ?>">
										<div class="bank-box">
											<div class="col s12 m6">
												<label>Routing Number *</label>
												<input type="text" name="routing_number" value="<?= $bankDetails['routing_number'];?>">
											</div>
											<div class="col s12 m6">
												<label>Bank Name *</label>
												<input type="text" name="bank_name" value="<?= $bankDetails['bank_name']; ?>">
											</div>
											<div class="col s12 m6">
												<label>Account Number *</label>
											   <input type="text" name="account_number" id="acc_no" value="<?= $bankDetails['account_number']; ?>">
											</div>
											<div class="col s12 m6">
												<label>Address</label>
												<input type="text" name="address" value="<?= $bankDetails['address']; ?>">
											</div>
											<div class="col s12 m6">
												<label>Account Type</label>
												<select id="account_type" name="account_type" class="">
													<option value="">--Select--</option>
													<option value="1" <?php if($bankDetails['account_type']==1) { ?>selected="selected" <?php } ?>>Checking</option>
													<option value="2" <?php if($bankDetails['account_type']==2){ ?>selected="selected" <?php } ?>>Savings</option>
												</select>
											</div>
											<div class="col s12 m6">
												<div class="row" style="margin: 0;padding-left: 2px;"><label>City, State Postal Code</label></div>
												<div class="col s12 m4" style="padding: 0px;">
												<input type="text" name="bank_city" value="<?= $bankDetails['bank_city'];?>">
												</div>
												<div class="col s12 m4">
												<select id="bank_state" name="bank_state" class="">
<option value="">--Select--</option><optgroup label="US"><option value="AL" selected="selected">Alabama</option><option value="AK">Alaska</option><option value="AS">American Samoa</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District of Columbia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="GU">Guam</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="PR">Puerto Rico</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="VI">U.S. Virgin Islands</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option></optgroup><optgroup label="AF"><option value="AA">AA-Armed Forces Americas</option><option value="AE">AE-Armed Forces Other</option><option value="AP">AP-Armed Forces Pacific</option></optgroup><optgroup label="CA"><option value="AB">Canada-Alberta</option><option value="BC">Canada-British Columbia</option><option value="MB">Canada-Manitoba</option><option value="NB">Canada-New Brunswick</option><option value="NL">Canada-Newfoundland</option><option value="NT">Canada-Northwest Territories</option><option value="NS">Canada-Nova Scotia</option><option value="NU">Canada-Nunavet</option><option value="ON">Canada-Ontario</option><option value="PE">Canada-Prince Edward Island</option><option value="QC">Canada-Quebec</option><option value="SK">Canada-Saskatchewan</option><option value="YT">Canada-Yukon</option></optgroup><optgroup label="AU"><option value="NSW">AU-New South Wales</option><option value="ANT">AU-Northern Territory</option><option value="QLD">AU-Queensland</option><option value="SA">AU-South Australia</option><option value="TAS">AU-Tasmania</option><option value="VIC">AU-Victoria</option><option value="WAU">AU-Western Australia</option></optgroup>
</select>
											</div>
											<div class="col s12 m4" style="padding: 0px;">
											<input type="text" name="bank_postal_code" value="<?= $bankDetails['bank_postal_code'];?>">
											</div>
											</div>

											<div class="col s12 m6">
												<label>Name On Account *</label>
												<input type="text" name="name_on_account" value="<?= $bankDetails['name_on_account'];?>">
											</div>
											<div class="col s12 m6">
												<label>Phone</label>
												<input type="text"  name="bank_phone" id="bank_phone" value="<?= $bankDetails['bank_phone'];?>">
											</div>
											<div class="col s12 m12 gsp-row"></div>
											<div class="col s12 m12">
												<div class="btn-bank-box">
													<button type="button" class="btn btn-bank btn-save-bank green white-text">Save Bank</button>
													<button type="button" data-id="<?= $bankDetails['id'];?>" class="btn btn-bank btn-delete-bank red white-text">Delete Bank</button>
												</div>
											</div>
										</div>
									</form>
									</div>
								</div>
							</div>
							<div class="tab_12 xbox">
								<div class="row">
									<div class="Debts-Container">
										<div class="Debts-box">
											<div class="enr-ttl">
												<h6>Enrolled Debts</h6>
											</div>
											<!-- <div class="top-gry">
												<ul>
													<li><span># ENROLLED <span class="bdg-gry">0</span></span></li>
													<li><span> CURRENT <span class="bdg-gry">0</span></span></li>
													<li><span> AVERAGE <span class="bdg-gry">0</span></span></li>
												</ul>
											</div>
											<div class="top-small-menu">
												<ul>
													<li><span>Creditor</span></li>
													<li><span>Account #</span></li>
													<li><span>Current</span></li>
													<li><span>Whose Debt</span></li>
													<li><span>Current Payment</span></li>
													<li><span>New Payment</span></li>
													<li><span>Type</span></li>
													<li><span>Status Date</span></li>
												</ul>
											</div>
										</div> -->
										
									</div>
								</div>
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

<!-- ============= Add Task ===============-->

	   <!-- Modal Structure -->
	  <div id="addTask" class="modal" style="max-width: 800px !important;">
	    <div class="modal-content">
	    	
	    </div>
	    <div class="modal-footer">
	      <a href="#!" class="modal-close valign-wrapper waves-effect waves-green btn-flat addTask"><img src="<?php echo base_url(); ?>html/images/accept.png"> Save Task</a>
	    </div>
	  </div>	

<!-- ============= Update Task ===============-->

	   <!-- Modal Structure -->
	  <div id="updateTask" class="modal" style="max-width: 800px !important;">
	    <div class="modal-content">
	    	
	    </div>
	    <div class="modal-footer">
	      <a href="#!" class="modal-close valign-wrapper waves-effect waves-green btn-flat up_Task"><img src="<?php echo base_url(); ?>html/images/accept.png"> Save Task</a>
	    </div>
	  </div>	 	   

	</div>
</div>