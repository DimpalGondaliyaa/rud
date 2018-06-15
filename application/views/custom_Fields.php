<div class="main-box">
	<div class="cmdtitle">
		<a href="<?php echo base_url(); ?>home">contact</a> > <a href="<?php echo base_url(); ?>Custom_Fields">Custom Fields</a>
	</div>

	<div class="main-menu row">
		   <nav class="contactnav">
		    <div class="nav-wrapper connavwapp">
		      <ul id="nav-mobile" class="hide-on-med-and-down" style="position: relative;left: 5px;}">
		        <li><a href="<?php echo base_url(); ?>Html_document"><img class="iconstyle" src="<?php echo base_url() ?>html/images/icon-settings.jpg">form builder</a></li>
		                                                                </ul>
		    </div>
		  </nav>

		  <div class="cftitle">Add / Edit Custom Fields</div>

		  <div class="cfboxx">
		  	<div class="row">
		  		<form id="cffrm">
		  		  <div class="input-field col s6 m1">
			         <input placeholder="" id="first_name" name="name" type="text" class="validate">
			         <label for="first_name">Name / Label</label>
			      </div>
		          <div class="input-field col s12 m2">
				   <select id="type" name="type" class="">
						<option value="">--Select--</option><option value="11">Attachment</option>
						<option value="Checkbox">Checkbox</option>
						<option value="Contact">Contact Relationship</option>
						<option value="Date">Date</option>
						<option value="Date/Time">Date/Time</option>
						<option value="Day">Day of Month</option>
						<option value="Integer">Integer</option>
						<option value="Multiple\Choice">Multiple Choice</option>
						<option value="Multiple\Select">Multiple Select</option>
						<option value="Number">Number</option>
						<option value="Paragraph">Paragraph</option>
						<option value="Price">Price</option>
						<option value="Radio\Buttons">Radio Buttons</option>
						<option value="State">State</option>
						<option value="Text">Text</option>
						<option value="True/False">True/False</option>
						<option value="User">User</option>
  				    </select>
				   </div>
                  <div class="col s12 m1"><a id="savebtn" class="editlink" href="#null">Save</a></div>
				</form>
		  	</div>
		  </div>
<?php 

$t = $this->db->query("select * from custom_fields");
$y = $t->result_array();
?>




				<div class="table-box">
				
				<table id="example1" class="ui celled table responsive nowrap striped highlight" style="width:100%">
		        <thead>
		            <tr>
		            	<th>id </th>
		            	<th>type</th>
		            	<th>name</th>
		            	<th></th>
		            </tr>
		        </thead>
		        <tbody>
		       <?php foreach ($y as $key => $value) { ?>
		       <tr>
					<td><?php echo $value['id']; ?></td>
					<td><?php echo $value['name']; ?></td>
					<td><?php echo $value['type']; ?></td>
					<td><a href="<?php echo base_url(); ?>Edt_Custom_Fields/editcfdata/<?php echo $value['id']; ?>" ><img src="<?php echo base_url(); ?>html/images/page_white_edit.png"></td>
					
				</tr>
				<?php } ?>
				</tbody>
			</table>
			</div> 
	</div>
</div>