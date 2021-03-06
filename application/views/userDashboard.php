<div class="main-box">
	<div class="main-menu">
			<div class="max-width">
				<div class="row">
				<div class="table-box">
				<h5>Welcome, <span class="purple-text"><?= $this->session->userdata('email');?></span></h5>
				<table id="example1" class="ui celled table responsive nowrap" style="width:100%">
		        <thead>
		            <tr>
		            	<th>#</th>
		            	<th>First Name</th>
		            	<th>Last Name</th>
		            	<th>Email</th>
		            	<th>Gender</th>
		            	<th>Phone</th>
		            	<th>Mobile</th>
		            	<th>Income</th>
		            	<th>DOB</th>
		            	<th>Address</th>
		            	<th>City</th>
		            	<th>Zipcode</th>
		            	<th>State</th>
		            	<th>Action</th>
		            </tr>
		        </thead>
		        <tbody>
				<?php
				$i=1;
				foreach ($data as $key => $value) { ?>
				<tr>
					<td><?php echo $i++; ?></td>
					<td><?php echo $value['f_name']; ?></td>
					<td><?php echo $value['l_name'] ?></td>
					<td><a href="mailto:<?php echo $value['u_email']; ?>"><i class="fas fa-envelope grey-text"></i></a></td>
					<td><?php if($value['gender']==0){ echo  'Male';} else if($value['gender']==1){ echo 'Female';} else { echo 'Other';}; ?></td>
					<td><?php echo $value['phone']; ?></td>
					<td><?php echo $value['mobile']; ?></td>
					<td><?php echo $value['income']; ?></td>
					<td><?php echo $value['dob']; ?></td>
					<td><?php echo $value['address']; ?></td>
					<td><?php echo $value['city']; ?></td>
					<td><?php echo $value['zipcode']; ?></td>
					<td><?php echo $value['state']; ?></td>
					<td><a data-id="<?php echo $value['u_id']; ?>" class="conedtbtn btn-flat" href="#!"><i class="fas fa-edit purple-text"></i></a> <!-- | <a href="#!" data-id="<?php // echo $value['u_id']; ?>"  class="condltbtn btn"><i class="fas fa-trash"></i></a>  --></td>
				</tr>
				<?php } ?>
				</tbody>
			</table>
			</div>
			</div>

			<div class="asgn-container">
			<div class="row">
				<div class="asgn-box table-box">
					<h5>You have been Assigned with :</h5>
					<table id="example" class="ui celled table responsive nowrap" style="width:100%">
			        <thead>
			            <tr>
			            	<th>#</th>
			            	<th>Name</th>
			            	<th>Email</th>
			            	<th>Mobile</th>
			            	<th>Gender</th>
			            	<th>State</th>
			            	<th>City</th>
			            	<th>Assigned On</th>
			            </tr>
			        </thead>
			        <tbody>
					<?php
					
					$i=1;
					foreach ($assignedData as $key => $value) { ?>
					<tr>
						<td><?php echo $i++; ?></td>
						<td><?php echo $value['f_name']; ?></td>
						<td><a href="mailto:<?php echo $value['user_email']; ?>"><i class="fas fa-envelope green-text">&nbsp; <?php echo $value['user_email']; ?></i></a></td>
						<td><?php echo $value['mobile']; ?></td>
						<td><?php if($value['gender']==0) echo 'Female'; else{ echo 'Male';}; ?></td>
						<td><?php echo $value['state']; ?></td>
						<td><?php echo $value['city']; ?></td>
						<td><?php echo $value['assignedOn']; ?></td>
					</tr>
					<?php } ?>
					</tbody>
				</table>
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
	</div>
</div>