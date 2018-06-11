<?php 
	$t = $this->db->query("select * from docs");
	$tt = $t->result_array();
?>

<div class="main-box">
	<div class="main-menu">
		 <nav class="contactnav">
		    <div class="nav-wrapper connavwapp">
		      <ul id="nav-mobile" class="hide-on-med-and-down">
		        <li><a href="<?php echo base_url(); ?>uplode_pdf">create a new pdf document</a></li>
		        <li><a href="badges.html">create a new html document</a></li>
		      </ul>
		    </div>
		  </nav>
		  <div class="col s12 m6">
				<h5>Select User to Assign With</h5>
				<table id="example1" class="celled table responsive" style="width:100%">
				        <thead>
				            <tr><th>#</th>
				            	<th>category</th>
				            	<th>document title</th>
				            	<th>created at</th>
				            	<th>created by </th>
				            	<th></th>
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
							<td><?php echo $cc; ?></td>
							<td><a href="<?php echo base_url(); ?>Docs_details/get_docdata/<?php echo $value['id'] ?>"><i class="fa fa-arrow-right"  aria-hidden="true"></i></a></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
	</div>
</div>