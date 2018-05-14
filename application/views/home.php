<div class="main-box">
	<div class="main-menu">
			<div class="max-width">
				<table id="example" class="ui celled table responsive nowrap" style="width:100%">
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
				foreach ($data as $key => $value) {
				?>
				<tr><td><?php echo $i++; ?></td>
					<td><?php echo $value['f_name']; ?></td>
					<td><?php echo $value['l_name'] ?></td>
					<td><?php echo $value['u_email']; ?></td>
					<td><?php if($value['gender']==0){ echo  'Male';} else if($value['gender']==1){ echo 'Female';} else { echo 'Other';}; ?></td>
					<td><?php echo $value['phone']; ?></td>
					<td><?php echo $value['mobile']; ?></td>
					<td><?php echo $value['income']; ?></td>
					<td><?php echo $value['dob']; ?></td>
					<td><?php echo $value['address']; ?></td>
					<td><?php echo $value['city']; ?></td>
					<td><?php echo $value['zipcode']; ?></td>
					<td><?php echo $value['state']; ?></td>
					<td><a href="#!<?php echo $value['c_id']; ?>"><i class="fas fa-edit"></i></a> | <a href="#!"><i class="fas fa-trash"></i></a> </td>
				</tr>
				<?php	
				}
				?>
				</tbody>
			</table>
			</div>


  <!-- Modal Trigger -->
  <!-- <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a> -->

  <!-- Modal Structure -->
<!--   <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Add Details</h4>
      <div class="col s12 m12">
      	<form class="form" name="addDeatils" id="addDeatils" method="POST">
      		<div>
      			<div class="input-field col s12 m6">
		          <input id="first_name" type="text" class="validate" placeholder="Enter First Name">
		          <label for="first_name">First Name</label>
		        </div>
		        <div class="input-field col s12 m6">
		          <input id="last_name" type="text" class="validate" placeholder="Enter Last Name">
		          <label for="last_name">Last Name</label>
		        </div>
      		</div>
      	</form>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
 -->



	</div>
</div>