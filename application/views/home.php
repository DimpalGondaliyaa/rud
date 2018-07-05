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
		        <li>
		        	<select>
		        		<option>--Select--</option>
		        		<option>-My Contact</option>
		        	</select>
		        </li>
		        <li>
		        	<a class="valign-wrapper" href="<?= base_url(); ?>new_list">new list</a></li>
		        	<li><a class="valign-wrapper" href="<?php echo base_url(); ?>editContact"> <img src="<?php echo base_url(); ?>html/images/add.png" class="responsive-img" style="margin-right: 5px;">  add contact</a></li>


		        	<li><a class="valign-wrapper" href="<?= base_url(); ?>Preview_Plans"> <img src="<?php echo base_url(); ?>html/images/calculator.png" class="responsive-img" style="margin-right: 5px;">  Quick Quote</a></li>

		        	<li><a class="valign-wrapper" href="<?php echo base_url(); ?>Custom_Fields"> <img src="<?php echo base_url(); ?>html/images/textfield.png" class="responsive-img" style="margin-right: 5px;"> Custom Fields</a></li>

		        	<li><a class="valign-wrapper" href="<?php echo base_url(); ?>workflow"> <img src="<?php echo base_url(); ?>html/images/icon-settings.jpg" class="responsive-img" style="margin-right: 5px;">Workflow</a></li>

		        	<li><a class="valign-wrapper" href="<?php echo base_url(); ?>Campaigns"> <img src="<?php echo base_url(); ?>html/images/chart_bar.png" class="responsive-img" style="margin-right: 5px;">Campaigns</a></li>

		        	<li><a class="valign-wrapper" href="<?php echo base_url(); ?>Data_sources"> <img src="<?php echo base_url(); ?>html/images/database_connect.png" class="responsive-img" style="margin-right: 5px;">Data Sources</a>
				  </li>
				  <li><a class="valign-wrapper" href="<?php echo base_url(); ?>webhooks"> <img src="<?php echo base_url(); ?>html/images/world_go.png" class="responsive-img" style="margin-right: 5px;">webhooks</a>
				  </li>
		    </div>
		  </nav>

		   <nav class="contactnav1">
		    <div class="nav-wrapper connavwapp">
		      <ul id="nav-mobile" class="hide-on-med-and-down">
		        <li class="liin">
		        	<input type="text" name="">
		        </li>
		        <li class="lis">search mail record</li>
		      
		    </ul>

		    <ul class="recul">
		    	<li>Recently Viewed:</li>
		    	<li><a href="#">John Dragonetti</a></li>
		    	<li><a href="#">Elizabeth Bennefield</a></li>
		    	<li><a href="#">Taylor Test</a></li>
		    	<li><a href="#">Carrie Young</a></li>
		    	<li><a href="#">Ben Polk</a></li>
		    	<li><a href="#">Joseph Parker</a></li>
		    </ul>
		        	
		    </div>
		  </nav>


			<div class="max-width">
			
				<div class="table-box">
					<h5>My Contacts <span class="badges"><?php echo sizeof($data); ?></span></h5>
				<table id="example" class="ui celled table responsive nowrap striped highlight" style="width:100%">
		        <thead>
		            <tr>
		            	<th>#</th>
		            	<th>Created</th>
		            	<th>Assigned To</th>
		            	<th>Full Name</th>
		            	<th>HomePhone</th>
		            	<th>Email</th>
		            	<th>State</th>
		            	<th>Stage</th>
		            	<th>Status</th>
		            	<th>Last Call Activity</th>
		            	<th>Time In Status </th>
		            	
		            	<th>Action</th>
		            </tr>
		        </thead>
		        <tbody>
				<?php
				$i=1;
				foreach ($data as $key => $value) { ?>
				<tr>
					<td><?php echo $i++; ?></td>
					<td><?php echo $value['createdOn']; ?></td>
					<td><?php 
						$asn=$value['asgn_email']; 
						$aa=$this->db->query("SELECT * FROM users WHERE u_email='".$asn."'"); //contactdetails
						$a=$aa->row_array();
						echo $a['f_name'].' '.$a['l_name'];
						?>
					</td>
					<td><?php echo $value['f_name']; ?> <?php echo $value['l_name'] ?></td>
					<td><?php echo $value['phone']; ?></td>
					<td><a href="mailto:<?php echo $value['u_email']; ?>"><i class="fas fa-envelope grey-text"></i></a></td>
					<td><?php echo $value['state']; ?></td>
					<td><?php echo $value['stage']; ?></td>
					<td><?php echo $value['status'] ?></td>
					<td><?php if($value['last_call_activity']==''){ echo "N/A";} ?></td>
					<td>9 days</td>
				<!--<td><?php  //echo $value['phone']; ?></td>
					<td><?php  //echo $value['mobile']; ?></td>
					<td><?php  //echo $value['income']; ?></td>
					<td><?php  //echo $value['dob']; ?></td>
					<td><?php  //echo $value['address']; ?></td>
					<td><?php  //echo $value['city']; ?></td>
					<td><?php  //echo $value['zipcode']; ?></td> -->
					
					<td class="valign-wrapper">
						<a data-id="<?php echo $value['c_id']; ?>" class="changeStatus" href="#!"><img src="<?php echo base_url(); ?>html/images/color_swatch.png"></a>
						<a data-id="<?php echo $value['c_id']; ?>" class="" href="<?= base_url(); ?>EditContact/editData/<?php echo $value['c_id'];?>"><img src="<?php echo base_url(); ?>html/images/vcard.png"></a> &nbsp;
						<!-- <a data-id="<?php // echo $value['c_id']; ?>" class="conedtbtn btn" href="#!"><img src="<?php // echo base_url(); ?>html/images/vcard.png"></a>  -->
						<!-- <a href="#!"><img src="<?php //echo base_url(); ?>html/images/note_add.png"><a href="#!" data-id="<?php // echo $value['c_id']; ?>"  class="condltbtn btn"><i class="fas fa-trash"></i></a>  -->
						<a data-id="<?php echo $value['c_id']; ?>" class="addNote" href="#!"><img src="<?php echo base_url(); ?>html/images/note_add.png"> </a>&nbsp;

						<a data-id="<?php echo $value['c_id']; ?>" class="addEvnt" href="#!"><img src="<?php echo base_url(); ?>html/images/calendar_add.png"> </a>&nbsp;

						<a href="#" class="upfiless"><img src="<?php echo base_url(); ?>html/images/page_white_get.png"> </a>&nbsp;
						
						<a data-id="<?php echo $value['c_id']; ?>" class="" href="<?= base_url(); ?>EditContact/Details/<?php echo $value['c_id'];?>"><img src="<?php echo base_url();?>html/images/bullet_go.png"></a> &nbsp;
						<!-- <a href="#!"><img src="<?php echo base_url();?>html/images/bullet_go.png"></a> -->

					</td>
				</tr>
				<?php } ?>
				</tbody>
			</table>
			</div> 
		</div>


		  <!-- Modal Structure -->
	  <div id="upcon_file" class="modal">
	    <div class="modal-content">
	    	<?php $this->load->view("uplode_contact_file"); ?>
	    </div>
	    <div class="modal-footer">
	      <a href="#!" class="modal-close waves-effect waves-green btn-flat addconfile ">Agree</a>
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