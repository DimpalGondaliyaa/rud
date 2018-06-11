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
		      <ul id="nav-mobile" class="hide-on-med-and-down">
		        <li><a href="<?php echo base_url(); ?>Html_document"><img class="iconstyle" src="<?php echo base_url() ?>html/images/add.png">create a new html document</a>create a new pdf document</a></li>
		        <li><a href="<?php echo base_url(); ?>uplode_pdf"><img class="iconstyle" src="<?php echo base_url() ?>html/images/icon-pdf.png">create a new pdf document</a></li>
		        <li><a href="#"><img class="iconstyle" src="<?php echo base_url() ?>html/images/page_white_stack.png">Categories</a></li>
		         <li><a href="#"><img class="iconstyle" src="<?php echo base_url() ?>html/images/page_white_edit.png">document type</a></li>
		      </ul>
		    </div>
		  </nav>
		  <div class="col s12 m6">
				
				<table id="example1" class="celled table responsive" style="width:100%">
				        <thead>
				            <tr><th>doc id</th>
				            	<th>type</th>
				            	<th>document title</th>
				            	<th>created at</th>
				            	<th>created by </th>
				            	<th>category</th>
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