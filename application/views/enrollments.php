<?php 
	$t = $this->db->query("select * from docs");
	$tt = $t->result_array();
?>

<div class="main-box">
	<div class="cmdtitle">
		<a href="<?php echo base_url(); ?>Enrollments">Enrollments</a>
	</div>

	<div class="main-menu row">

		 <nav class="contactnav">
		    <div class="nav-wrapper connavwapp">
		      <ul id="nav-mobile" class="hide-on-med-and-down" style="position: relative;left: 5px;}">
		      	<li class="sec"><input type="text" name=""></li>
		        <li><a href="<?= base_url(); ?>plan"><img class="iconstyle" src="<?php echo base_url() ?>html/images/application_side_list.png">plans</a></li>
		        <li><a href="<?= base_url(); ?>Preview_Plans"><img class="iconstyle" src="<?php echo base_url() ?>html/images/magnifier.png">Preview Plans</a></li>
		        <li><a href="#!"><img class="iconstyle" src="<?php echo base_url() ?>html/images/report.png">report</a></li>
		         <li><a href="<?= base_url(); ?>Statistics"><img class="iconstyle" src="<?php echo base_url() ?>html/images/chart_line.png">Statistics</a></li>

		         <li><a href="<?= base_url(); ?>Transactions"><img class="iconstyle" src="<?php echo base_url() ?>html/images/money.png">Transactions</a></li>

		         <li><a href="<?php echo base_url(); ?>Settings"><img class="iconstyle" src="<?php echo base_url() ?>html/images/page_white_gear.png">Settings</a></li>

		      </ul>
		    </div>
		  </nav>

		  <div class="col s12 m6"><div class="entitle">All Enrolled Customers</div></div>
		  <div class="col s12 m6"><div class="ulboxx">
		  	<ul class="enull">
		  		<li><a href="#">enrolled<span>(0)</span></a></li>
		  		<li><a href="#">Submitted<span>(14)</span></a></li>
		  		<li><a href="#">returned<span>(0)</span></a></li>
		  		<li><a href="#">paused<span>(0)</span></a></li>
		  		<li><a href="#">cancelled<span>(0)</span></a></li>
		  		<li><a href="#">graduated<span>(0)</span></a></li>
		  	</ul>
		  </div></div>

		  <div class="fbox">
		  	<div class="col s12 m3">
		  		         <div class="input-field col s12 m4 sbox">
						    <select>
						      <option value="" disabled selected>Choose your option</option>
						      <option value="1">Option 1</option>
						      <option value="2">Option 2</option>
						      <option value="3">Option 3</option>
						    </select>
						    <label>file type</label>
						  </div>

						   <div class="input-field col s12 m4 sbox">
						    <select>
						      <option value="" disabled selected>Choose your option</option>
						      <option value="1">Option 1</option>
						      <option value="2">Option 2</option>
						      <option value="3">Option 3</option>
						    </select>
						    <label>company</label>
						  </div>
		  	</div>
		  </div>

		  <div class="toolbox">
		  	<ul class="tolul">
		  		<li><a><i class="fas fa-share-square"></i>export to csv</a></li>
		  		<li><a><i class="far fa-edit"></i>customize</a></li>
		  		<li><a><i class="fas fa-chart-pie"></i>Analyze This Report</a></li>
		  	</ul>
		  </div>


		  <div class="col s12 m12">
				
				<table id="example1" class="celled table responsive" style="width:100%">
				        <thead>
				            <tr><th>full name</th>
				            	<th>state</th>
				            	<th>next payment date</th>
				            	<th>payment made</th>
				            	<th>balance</th>
				            	<th>enrolled date</th>
				            	<!-- <th>Action</th> -->
				            </tr>
				        </thead>
				        <tbody>
						<?php
						$i=1;
						$cc = $this->session->userdata("email");
						foreach ($tt as $key => $value) {  ?>
						<tr>
			  				<td><?php echo $i++; ?></td>
							<td><?php echo $value['doc_category'] ?></td>
							<td><?php echo $value['doc_title'] ?></td>
							<td><?php echo $value['doc_title'] ?></td>
							<td>10</td>
							<td>3-4-19</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
	</div>
</div>

