<div class="main-box">
	<div class="cmdtitle">
		<a href="<?php echo base_url(); ?>Administration">user & administration</a> > <a href="<?php echo base_url(); ?>Edit_User">edit user</a>
	</div>

	<div class="main-menu row">
		  <nav class="contactnav">
		    <div class="nav-wrapper connavwapp">
		      <ul id="nav-mobile" class="hide-on-med-and-down">
		        <li><a href="<?= base_url(); ?>Schedule_E_marketing"><img class="iconstyle" src="<?php echo base_url() ?>html/images/accept.png">save user</a></li>
		        <li><a href="#"><img class="iconstyle" src="<?php echo base_url() ?>html/images/delete.png">delete user</a></li>
		        <li><a href="#"><img class="iconstyle" src="<?php echo base_url() ?>html/images/user_red.png">Suspend User</a></li>
		        <li><a href="#"><img class="iconstyle" src="<?php echo base_url() ?>html/images/key.png">login us user</a></li>
		      </ul>
		    </div>
		  </nav>


		 <form class="col s12 m12" id="filefrm">
		 	  <div class="col s12 m12">
		 	  	<div class="edtttitle">User Login Information</div>
		             <div class="row row1" style="padding: 15px;">

					        <div class="input-field col s6 m2" style="padding: 0px;">
					          <input placeholder="Username" name="username" type="text" class="validate">
					           <label>Username*</label>
					        </div>

					         <div class="input-field col s6 m2" style="padding: 0px;">
					          <input placeholder="password" name="password" type="text" class="validate">
					           <label>Password*</label>
					        </div>

					         <div class="input-field col s6 m2" style="padding: 0px;">
					          <input placeholder="confirm" name="confirm" type="text" class="validate">
					           <label>Confirm Password*</label>
					        </div>

					         <div class="input-field col s6 m2" style="padding: 0px;">
					         	<div class="leftt">
				                    <h4>User Role</h4>
				                    <select id="role" name="role" class="">
					                         <option value="">--Select--</option><option value="20369">Admin</option>
					                         <option value="20381">Lead Vendor</option>
					                         <option value="20372">Manager</option>
					                         <option value="20378">Processor</option>
					                         <option value="20375">Sales</option>
					                         <option value="20342">Super Admin</option>
					               </select>
			                   </div>
					        </div>

					         <div class="input-field col s6 m1" style="padding: 0px;">
						         <div class="left">
				                    <h4>Reports To</h4>
				                    <select id="report_to" name="report_to" class="">
										<option value="">--Select--</option><option value="3254265"> </option>
										<option value="3142430">Alex Vargas</option>
										<option value="3166835">Alexander Goodman</option>
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
						    </div>

                           <div class="input-field col s6 m1" style="padding: 0px;">
						        <div class="left">
				                    <h4>Is Attorney?</h4>
				                    <input type="checkbox" name="attorney" value="1" style="border: none;">
				                </div>
			               </div>
		               </div>
		         </div>




		        <div class="col s12 m12">
		 	  	    <div class="edtttitle">Contact Information</div>
				         <div class="row row1" style="padding: 15px;">

						        <div class="input-field col s6 m2" style="padding: 0px;">
						          <input placeholder="f_name" name="f_name" type="text" class="validate">
						           <label>First Name*</label>
						        </div>

						         <div class="input-field col s6 m2" style="padding: 0px;">
						          <input placeholder="l_name" name="l_name" type="text" class="validate">
						           <label>l_name</label>
						        </div>

						         <div class="input-field col s6 m2" style="padding: 0px;">
						         	<div class="leftt">
					                    <h4>Company</h4>
					                    <select name="company" class="">
						                         <option value="">--Select--</option>
						                         <option value="United Students Of America">United Students Of America</option>
						               </select>
				                   </div>
						        </div>

						       <div class="input-field col s6 m2" style="padding: 0px;">
						          <input placeholder="email" name="email" type="text" class="validate">
						           <label>email</label>
						        </div>

						         <div class="input-field col s6 m1" style="padding: 0px;">
							         <div class="left">
					                    <h4>payee</h4>
					                    <select id="payee" name="payee" class="">
						                         <option value="">--Select--</option>

										</select>
					                </div>
							    </div>
                      </div>
		         </div>


		        <div class="col s12 m12">
		 	  	    <div class="edtttitle">Outgoing Mail Settings (SMTP)</div>
				         <div class="row row1" style="padding: 15px;">

						        <div class="input-field col s6 m2" style="padding: 0px;">
						          <input placeholder="out_mail_server" name="out_mail_server" type="text" class="validate">
						           <label>Outgoing Mail Server</label>
						        </div>

						         <div class="input-field col s6 m1" style="padding: 0px;">
						          <input placeholder="port" name="port" type="text" class="validate">
						           <label>port</label>
						        </div>

						        <div class="input-field col s6 m2" style="padding: 0px;">
						          <input placeholder="username" name="username" type="text" class="validate">
						           <label>username</label>
						        </div>

						        <div class="input-field col s6 m2" style="padding: 0px;">
						          <input placeholder="password" name="password" type="text" class="validate">
						           <label>password</label>
						        </div>

						        <div class="input-field col s6 m1" style="padding: 0px;">
						          <div class="left">
				                    <h4>Require AuthUse</h4>
				                    <input type="checkbox" name="attorney" value="1" style="border: none;">
				                  </div>
			                    </div>

			                     <div class="input-field col s6 m1" style="padding: 0px;">
						          <div class="left">
						          	 <h4>SSL / TSL</h4>
									
								      <label>
								        <input name="group1" type="radio" checked />
								        <span>SSL</span>
								      </label>
								   
								      <label>
								        <input name="group1" type="radio" />
								        <span>TSL</span>
								      </label>
								   
								    </div>
								</div>	

								 <div class="input-field col s6 m2" style="padding: 0px;">
						          <input placeholder="t_email" name="t_email" type="text" class="validate">
						           <label>Test Email Address</label>
						        </div>

                      </div>
		         </div>


		         <div class="col s12 m12">
		 	  	    <div class="edtttitle">Custom Fields</div>
				         <div class="row row1" style="padding: 15px;">

						      
						         <div class="input-field col s6 m2" style="padding: 0px;">
						          <input placeholder="Userfield 1" name="Userfield 1" type="text" class="validate">
						           <label>Userfield 1</label>
						        </div>

						        <div class="input-field col s6 m2" style="padding: 0px;">
						          <input placeholder="Userfield2" name="Userfield2" type="text" class="validate">
						           <label>Userfield 2</label>
						        </div>

						        <div class="input-field col s6 m2" style="padding: 0px;">
						          <input placeholder="Userfield3" name="Userfield3" type="text" class="validate">
						           <label>Userfield 3</label>
						        </div>

						        <div class="input-field col s6 m2" style="padding: 0px;">
						          <input placeholder="Userfield4" name="Userfield4" type="text" class="validate">
						           <label>Userfield 4</label>
						        </div>

						        <div class="input-field col s6 m2" style="padding: 0px;">
						          <input placeholder="Userfield5" name="Userfield5" type="text" class="validate">
						           <label>Userfield 5</label>
						        </div>

						        <div class="input-field col s6 m2" style="padding: 0px;">
						          <input placeholder="Userfield6" name="Userfield6" type="text" class="validate">
						           <label>Userfield 6</label>
						        </div>
						     
                      </div>
		         </div>

		          <div class="col s12 m9">
		 	  	    <div class="edtttitle">Shared User Data</div>
		 	  	    <p style="font-size: 11px;padding: 0px 15px;">Select the users whos contacts are visible to the user you are editing. Select --Everyone-- to have access to all contacts, regardless of user.</p>
				         <div class="row row1" style="padding: 15px;">
				         	<div class="formsection">
			                    <strong>Select Users</strong>
			                    <select id="shared_users" name="shared_users[]" class="" style="width:100%" multiple="multiple" size="6">
										<option value="0">--Everyone--</option>
										<option value="3254265"> </option>
										<option value="3142430">Alex Vargas</option>
										<option value="3166835">Alexander Goodman</option>
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
				      </div>
		         </div>

		                   <div class="col s12 m9">
		 	  	    <div class="edtttitle">Shared Enrollment Plans</div>
		 	  	         <div class="row row1" style="padding: 15px;">
				         	<div class="formsection">
                                <strong>Select Plans</strong>
                                   <select name="shared_plans[]" style="width:100%;" multiple="multiple" size="6">
                                       <option value="18404">$1,392 Enrollment Plan</option><option value="18407">$1,984 Enrollment Plan</option><option value="18410">$3,056 Enrollment Plan</option><option value="18873">James Plan</option>                    </select>
                            </div>
				      </div>
		         </div>

		   </form>


	</div>
</div>	


		

