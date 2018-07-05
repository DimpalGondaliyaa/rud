
<div class="main-box">
	<div class="cmdtitle">
		<a href="<?php echo base_url(); ?>home">contact</a> > <a href="<?php echo base_url(); ?>Campaigns">Campaigns</a>
	</div>

	<div class="main-menu row">
		<div class="col s4 m4">
			<form name="campfrm" id="campfrm">
			<div class="ctitle">Add / Edit Campaign</div>
			<div class="col s12 m4">
				<div class="ltitle">Active</div>
			</div>
			<div class="col s12 m8">
				<input type="checkbox" name="active" value="1" >
			</div>

			<div class="col s12 m4">
				<div class="ltitle">Campaign Title</div>
			</div>
			<div class="col s12 m8">
				<input type="textbox" name="title" value="<?= $tt['title'];  ?>">
			</div>

			<div class="col s12 m4">
				<div class="ltitle">Start Date</div>
			</div>
			<div class="col s12 m8">
				<input type="textbox" name="start_date" class="datepicker" value="<?= $tt['start_date'];  ?>">
			</div>

			<div class="col s12 m4">
				<div class="ltitle">end Date</div>
			</div>
			<div class="col s12 m8">
				<input type="textbox" name="end_date" class="datepicker" value="<?= $tt['end_date'];  ?>">
			</div>


			<div class="col s12 m4">
				<div class="ltitle">Source</div>
			</div>
			<div class="col s12 m8">
				<select id="source_id" name="source" class="" >
<option selected value="<?= $tt['source'];  ?>"><?= $tt['source'];  ?></option><option value="addnew">--add new--</option>
<option value="gfgfg">gfgfg</option>

</select>
			</div>


			<div class="col s12 m4">
				<div class="ltitle">Media Type</div>
			</div>
			<div class="col s12 m8">
				<select id="media_type" name="media_type" class="">
<option selected="true" value="<?= $tt['media_type'];  ?>"><?= $tt['media_type'];  ?></option><option value="Billboard">Billboard</option>
<option value="DirectMail">DirectMail</option>
<option value="Email">Email</option>
<option value="Internal Transfer">Internal Transfer</option>
<option value="Internet">Internet</option>
<option value="Other">Other</option>
<option value="Radio">Radio</option>
<option value="Television">Television</option>

</select>
			</div>


	<div class="col s12 m4">
				<div class="ltitle">Priority</div>
			</div>
			<div class="col s12 m8">
			<select id="priority" name="priority" class="">
<option value="<?= $tt['priority'];  ?>"><?= $tt['priority'];  ?></option><option value="0" selected="selected">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>

</select>
			</div>




				<div class="col s12 m4">
				<div class="ltitle">Campaign Cost</div>
			</div>
			<div class="col s12 m8">
				<input type="text" class="money" value="<?= $tt['Campaign_Cost'];  ?>" name="Campaign_Cost" >
			</div>



				<div class="col s12 m4">
				<div class="ltitle">
# Leads Purchased</div>
			</div>
			<div class="col s12 m8">
				<input type="text" class="money" name="Leads_Purchased" value="<?= $tt['Leads_Purchased'];  ?>">
			</div>
			<?php $r = $this->session->userdata("email"); ?>
			<input type="hidden" name="created_by" value="<?= $r; ?>">
			<input type="hidden" name="id" value="<?php echo  $tt['id']; ?>">
			<div class="col s12 m4"></div>
			<div class="col s12 m8">
				<?php if ($tt['id']=="") { ?>
				<a href="#!" class="savecampbtn btn">save campaigns</a>
				<?php } else{ ?>
					<a href="#!" class="edtcampbtn btn">edt campaigns</a>
					<a href="#!" data-id="<?php echo $tt['id']; ?>" class="deletecampbtn btn red white-text">delete </a>
				<?php } ?>

			</form>
		</div></div>

<?php 
$f = $this->db->query("select * from Campaigns");
$b = $f->result_array();
?>


		<div class="col s8 m8">
			<div class="table-box">
			<table id="example1" class="ui celled table responsive nowrap striped highlight" style="width:100%">
		        <thead>
		            <tr>
		            	<th>active</th>
		            	<th>created at </th>
		            	<th>created by</th>
		            	<th>title</th>
		            	<th>sourece</th>
		            	<th>cost</th>
		            	<th>prirority</th>
		            	<th>media</th>
		            	<th>#leads purchased</th>
		            	<th></th>
		            </tr>
		        </thead>
		        <tbody>
		        	<?php foreach ($b as $key => $v) { ?>
		        <tr>
					<td><?php echo $v['active']; ?></td>
					<td><?php echo $v['created_at']; ?></td>
					<td><?php echo $v['created_by']; ?></td>
					<td><?php echo $v['title']; ?></td>
					<td><?php echo $v['source']; ?></td>
					<td><?php echo $v['Campaign_Cost']; ?></td>
					<td><?php echo $v['priority']; ?></td>
					<td><?php echo $v['media_type']; ?></td>
					<td><?php echo $v['Leads_Purchased']; ?></td>
					<td> 
						<a href="<?= base_url(); ?>Campaigns/edtCampaigns/<?php echo $v['id']; ?>"><img src="<?= base_url(); ?>html/images/book_edit.png"> </a>
					</td>
				</tr>
				<?php } ?>
		        </tbody>
		    </table>
		</div> 
		</div>
	</div>
</div>