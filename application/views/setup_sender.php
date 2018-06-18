<div class="main-box">
	<div class="cmdtitle">
		<a href="<?php echo base_url(); ?>E_marketing">email marketing </a>><a href="<?php echo base_url(); ?>setup_sender">email sender</a>
	</div>

	<div class="main-menu row">
		   <div class="col s12 m2">
			    <div class="sendtitle">CREATE / EDIT SENDER INFORMATION</div>
			    <form class="col s12" id="sender_setupfrm" name="sender_setupfrm">
			      <div class="row">
			        <div class="input-field col s12 m12">
			          <input placeholder="" value="<?php echo $tt['Sender_name']; ?>" name="Sender_name" id="Sender_name" type="text" class="validate">
			          <label for="Sender_name">Sender Name*</label>
			        </div>

			        <div class="input-field col s12 m12">
			          <input placeholder="" id="email"  value="<?php echo $tt['email']; ?>" name="email" type="text" class="validate">
			          <label for="email">Sender Email Address*</label>
			        </div>

			        <div class="input-field col s12 m12">
			          <input placeholder="" id="r_address" value="<?php echo $tt['r_address']; ?>" name="r_address" type="text" class="validate">
			          <label for="r_address">Reply-To Address*</label>
			        </div>

			        <div class="input-field col s12 m12">
			          <input placeholder="" id="b_address" value="<?php echo $tt['b_address']; ?>" name="b_address" type="text" class="validate">
			          <label for="b_address">Bounce Address*</label>
			        </div>
			        <input type="hidden" value="<?php echo $tt['Sent_Campaigns']; ?>" name="Sent_Campaigns" value="0">
			          <input type="hidden" value="<?php echo $tt['id']; ?>" name="id" value="0">
			      </div>
			      <div class="setupbtnn"><a href="#" class="<?php if($tt['id']>0) { ?>edtsetupdata<?php } else{ ?>addsetup<?php } ?>">save sender</a></div>

			      <?php if($tt['id']>0) { ?>
			       <a href="#"  style="text-transform: capitalize;color: red;" data-id="<?php echo $tt['id']; ?>" class="deletesetbtn">Delete Sender</a>
			       <?php } ?>

			    </form>
		   </div>

		   <div class="col s12 m4">
		   		 <div class="sendtitle">SMTP SERVER SETTINGS (OPTIONAL)</div>

		   		 <div class="alert inline caution">
					<span class="icon"></span>
					<div class="message">
						<p><strong>NOTE:</strong> Do not use servers like @gmail.com, @hotmail.com, @office365.com, @secureserver.net or any other major email provider.</p>
                      <p class="highlighted" style="color: red;">You <u>will be throttled &amp; blocked</u> by these providers and your messages will not be delivered.</p>
					</div>
				</div>

				<div class="message">
					<p>This section is designed to implement SMTP servers for bulk mail sending like smtp.com, port25.com, sendgrid.com or others.</p>
				</div>


		        <div class="input-field col s12 m10">
		          <input placeholder="" id="host" name="host" type="text" class="validate">
		          <label for="host">SMTP Host & Port</label>
		        </div>

		        <div class="input-field col s12 m2">
		          <input placeholder="Port" id="b_address" type="text" class="validate">
		        </div>

		         <div class="input-field col s12 m12">
		          <input placeholder="" id="username" name="username" type="text" class="validate">
		          <label for="username">SMTP Username</label>
		        </div>

		        <div class="input-field col s12 m12">
		          <input placeholder="" id="password" name="password" type="text" class="validate">
		          <label for="password">SMTP password</label>
		        </div>

		          <p>
				      <label>
				        <input name="type" type="radio" checked />
				        <span>SSL</span>
				      </label>
				    
				      <label>
				        <input name="type" type="radio" />
				        <span>TLS</span>
				      </label>
				 </p>

			   <div class="input-field col s12 m12">
		          <input placeholder="" id="t_email" name="t_email" type="text" class="validate">
		          <label for="t_email">Test Email Address </label>
		        </div>	

		        <div class="message">
					<p>Email Address that will receive the test email.</p>
				</div>   
				<div class="sesstionbtn"><a href="#">test smtp sesstings</a></div> 
		   </div>

<?php 
$d = $this->db->query("select * from sender_setup");
$data = $d->result_array();
?>
		   <div class="col s12 m6">
		   		 <div class="sendtitle">EXISTING EMAIL SENDERS</div>

		   		 	<div class="table-box">
						<table id="example" class="ui celled table responsive nowrap striped highlight" style="width:100%">
				        <thead>
				            <tr>
				            	<th>sender name</th>
				            	<th>email</th>
				            	<th>Sent Campaigns</th>
				            	<th>edit</th>
				            </tr>
				        </thead>
				        <tbody>
						<?php foreach ($data as $key => $value) { ?>
						<tr>
							<td><?php echo $value['Sender_name']; ?></td>
							<td><?php echo $value['email']; ?></td>
							<td><?php echo $value['Sent_Campaigns']; ?></td>
							<td><a class="edtbtnn" href="<?php echo base_url(); ?>Setup_sender/edtsender_data/<?php echo $value['id']; ?>"><i class="material-icons">edit</i></a></td>
					   </tr>
						<?php } ?>
						</tbody>
					</table>
			</div> 
		   </div>

	</div>
</div>