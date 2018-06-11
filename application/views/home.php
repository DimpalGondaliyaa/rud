<?php 
/*
$this->load->helper('date');
$email=$this->session->userdata('email');

$datestring = ('%Y-%m-%d - %h:%i %a');
$time = time();
$better_date= mdate($datestring, $time,strtotime("-1 day"));

echo $c_date=date("Y-m-d H:i:s",strtotime("-24 hour"));

echo '<br>';

$post_date = ('%Y-%m-%d');
$now = time();

echo timespan($post_date, $now) . ' ago';
*/
?>


<div class="main-box">
	<div class="main-menu">

		 <nav class="contactnav">
		    <div class="nav-wrapper connavwapp">
		      <ul id="nav-mobile" class="hide-on-med-and-down">
		        <li><a class="valign-wrapper" href="<?php echo base_url(); ?>Add_Contact"> <img src="<?php echo base_url(); ?>html/images/add.png" class="responsive-img">  add contact</a></li>
		    </div>
		  </nav>
			<div class="max-width">
			
				<div class="table-box">
				<h5>List of Contact Details Inserted by Admin</h5>
				<table id="example" class="ui celled table responsive nowrap" style="width:100%">
		        <thead>
		            <tr>
		            	<th>#</th>
		            	<th>First Name</th>
		            	<th>Last Name</th>
		            	<th>Email</th>
		            	<th>Password</th>
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
					<td><a href="mailto:<?php echo $value['u_email']; ?>"><i class="fas fa-envelope grey-text"><?php echo $value['u_email']; ?></i></a></td>
					<td><?php echo $value['password']; ?></td>
					<td><?php if($value['gender']==0){ echo  'Male';} else if($value['gender']==1){ echo 'Female';} else { echo 'Other';}; ?></td>
					<td><?php echo $value['phone']; ?></td>
					<td><?php echo $value['mobile']; ?></td>
					<td><?php echo $value['income']; ?></td>
					<td><?php echo $value['dob']; ?></td>
					<td><?php echo $value['address']; ?></td>
					<td><?php echo $value['city']; ?></td>
					<td><?php echo $value['zipcode']; ?></td>
					<td><?php echo $value['state']; ?></td>
					<td><a data-id="<?php echo $value['c_id']; ?>" class="conedtbtn btn" href="#!"><i class="fas fa-edit"></i></a> | <a href="#!" data-id="<?php echo $value['c_id']; ?>"  class="condltbtn btn"><i class="fas fa-trash"></i></a> </td>
				</tr>
				<?php } ?>
				</tbody>
			</table>
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