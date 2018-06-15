<style type="text/css">
	.main-menu{
		overflow: auto;
	}
</style>
<div class="main-box">
<div class="main-menu">

<div id="container">
	<div class="assign-box">
		<h5>Select User to Assign with</h5>
		<div class="row">
		<form method="POST" name="assignForm" id="assignForm">
			<div class="col s12 m6">
				<input type="text" name="user_email" value="" id="asgn_email" placeholder="Assign With">
			</div>
			<div class="col s12 m4">
				<!-- <input type="text" name="asgn_id" value="" id="asgn_id"> -->
				<input type="text" name="asgn_email" id="asgn_email_to" placeholder="Select User to Assign">
			</div>

			<div class="col s12 m2">
				<input type="button" name="assign" value="Assign" id="assign" class="btn bnt-flat btn-asign">
			</div>
		</form>
		</div>
	</div>

<div class="row">
	<div class="tableBox">
	<div class="col s12 m6">
		<h5>Select User to Assign</h5>
		<table id="example" class="celled table responsive" style="width:100%">
		        <thead>
		            <tr><th>#</th>
		            	<th>First Name</th>
		            	<th>Last Name</th>
		            	<th>Email</th>
		            	<!-- <th>Action</th> -->
		            </tr>
		        </thead>
		        <tbody>
				<?php
				$i=1;
				foreach ($user as $key => $value) { ?>
				<tr>
	  				<td>
	  				  <label>
				        <input name="rdo" class="rdo" id="rdo" type="radio" data-id="<?php echo $value['c_id']; ?>" value="<?php echo $value['u_email']; ?>"/>
				        <span><?php echo $i++; ?></span>
				      </label>
				  	</td>
					<td><?php echo $value['f_name']; ?></td>
					<td><?php echo $value['l_name'] ?></td>
					<td><a href="mailto:<?php echo $value['u_email']; ?>"><i class="fas fa-envelope grey-text"> <?php echo $value['u_email']; ?></i></a></td>
					<!-- <td><a data-id="<?php echo $value['c_id']; ?>" class="conedtbtn btn" href="#!"><i class="fas fa-edit"></i></a> | <a href="#!" data-id="<?php echo $value['c_id']; ?>"  class="condltbtn btn"><i class="fas fa-trash"></i></a> </td> -->
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	<div class="col s12 m6">
		<h5>Select User to Assign With</h5>
		<table id="example1" class="celled table responsive" style="width:100%">
		        <thead>
		            <tr><th>#</th>
		            	<th>First Name</th>
		            	<th>Last Name</th>
		            	<th>Email</th>
		            	<!-- <th>Action</th> -->
		            </tr>
		        </thead>
		        <tbody>
				<?php
				$i=1;
				foreach ($assigner as $key => $value) { ?>
				<tr>
	  				<td>
	  				  <label>
				        <input name="rdo" class="rdo" id="rdo" type="radio" data-id="<?php echo $value['u_id']; ?>" value="<?php echo $value['u_email']; ?>"/>
				        <span><?php echo $i++; ?></span>
				      </label>
				  	</td>
					<td><?php echo $value['f_name']; ?></td>
					<td><?php echo $value['l_name'] ?></td>
					<td><a href="mailto:<?php echo $value['u_email']; ?>"><i class="fas fa-envelope grey-text"> <?php echo $value['u_email']; ?></i></a></td>
					<!-- <td><a data-id="<?php echo $value['u_id']; ?>" class="conedtbtn btn" href="#!"><i class="fas fa-edit"></i></a> | <a href="#!" data-id="<?php echo $value['u_id']; ?>"  class="condltbtn btn"><i class="fas fa-trash"></i></a> </td> -->
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	</div>
</div>

<ul id="finalResult"></ul>

</div>
    <div class="row conrow">
	 	<div class="contacttitle">
	 		Assigned User
	 	</div>
	 	<div class="assignedUSer-container">
	 		<table id="example2" class="celled table responsive" style="width:100%">
		        <thead>
		            <tr><th>#</th>
		            	<th>Assigned User</th>
		            	<th>Assigned With</th>
		            	<th>Status</th>
		            	<th>Assigned On</th>
		            	<th>Action</th>
		            </tr>
		        </thead>
		        <tbody>
				<?php
				$i=1;
				foreach ($asignUser as $key => $value) { ?>
				<tr>
	  				<td><?php echo $i++; ?></td>
					<td><?php echo $value['user_email']; ?></td>
					<td><?php echo $value['asgn_email'] ?></td>
					<td><?php echo $value['status'] ?></td>
					<td><?php echo $value['assignedOn'] ?></td>
					<td><a href="#!" data-id="<?php echo $value['asgn_id']; ?>"  class="dlt-rec btn btn-flat circle"><i class="fas fa-trash red-text"></i></a></td>
				</tr>
				<?php } ?>
				</tbody>
			</table>
	 	</div>
	</div>
</div>
</div>

<style type="text/css">
	::placeholder
	{
		text-transform: capitalize;
	}
</style>
