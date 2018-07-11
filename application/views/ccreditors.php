<?php 
	$t = $this->db->query("select * from docs");
	$tt = $t->result_array();
?>

<div class="main-box">
	<div class="cmdtitle">
		<a href="<?php echo base_url(); ?>Docs">document creator</a>
	</div>

	<div class="main-menu">

		 <nav class="contactnav">
		    <div class="nav-wrapper connavwapp">
		      <ul id="nav-mobile" class="hide-on-med-and-down" style="position: relative;left: 5px;}">
		        <li><a href="<?= base_url(); ?>Add_Ccreditors"><img class="iconstyle" src="<?php echo base_url() ?>html/images/add.png">add Creditors</a></li>
		        <li><a href="<?= base_url(); ?>Summons"><img class="iconstyle" src="<?php echo base_url() ?>html/images/exclamation.png">Summons</a></li>
		        <li><a href="<?= base_url(); ?>Merge_Creditors"><img class="iconstyle" src="<?php echo base_url() ?>html/images/arrow_join.png">Merge Creditors</a></li>
		         <li><a href="<?= base_url(); ?>Account_Search"><img class="iconstyle" src="<?php echo base_url() ?>html/images/magnifier.png">Account Number Search</a></li>
		         <li><a href="<?= base_url(); ?>debt_Reports"><img class="iconstyle" src="<?php echo base_url() ?>html/images/report_picture.png">Debt Reports</a></li>
		      </ul>
		    </div>
		  </nav>

<?php

$t = $this->db->query("select * from Ccreditors");
$tt = $t->result_array();

 ?>


		  <div class="col s12 m6">
				
				<table id="example1" class="celled table responsive" style="width:100%">
				        <thead>
				            <tr><th>view </th>
				            	<th>company</th>
				            	<th>address</th>
				            	<th>city</th>
				            	<th>state </th>
				            	<th>zip</th>
				            	<th>Action</th> 
				            </tr>
				        </thead>
				        <tbody>
						<?php
						$i=1;
						$cc = $this->session->userdata("email");
						foreach ($tt as $key => $value) {  ?>
						<tr>
			  				<td><?php echo $i++; ?></td>
							<td><?php echo $value['name'] ?></td>
							<td><?php echo $value['address1'] ?></td>
							<td><?php echo $value['city'] ?></td>
							<td><?php echo $value['state']; ?></td>
							<td><?php echo $value['zip']; ?></td>
							<td><a href="<?php echo base_url(); ?>Add_Ccreditors/edt_credit/<?php echo $value['id'] ?>"><i class="fa fa-arrow-right"  aria-hidden="true"></i></a></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
	</div>
</div>