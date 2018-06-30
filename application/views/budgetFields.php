
<div class="main-box">
	<div class="cmdtitle">
		Users & Administration > <a href="<?php echo base_url(); ?>BudgetFields">Budget Setup</a>
	</div>

	<div class="main-menu row">
		 <nav class="contactnav">
		    <div class="nav-wrapper connavwapp">
		      <ul id="nav-mobile" class="hide-on-med-and-down" style="position: relative;left: 5px;}">
		        <li><a href="#!"><img class="iconstyle" src="<?php echo base_url() ?>html/images/accept.png">save settings</a></li>
		        <li><a href="<?= base_url(); ?>Email_Trigger"><img class="iconstyle" src="<?php echo base_url() ?>html/images/email_open.png">Email Triggers</a></li>
		        <li><a href="<?= base_url(); ?>State_Setup"><img class="iconstyle" src="<?php echo base_url() ?>html/images/flag_red.png">State Setup</a></li>
		         <li><a href="<?php echo base_url(); ?>Call_Settings"><img class="iconstyle" src="<?php echo base_url() ?>html/images/phone.png">call setting</a></li>

		         <li><a href="<?php echo base_url(); ?>Note_Templates"><img class="iconstyle" src="<?php echo base_url() ?>html/images/note.png">note template</a></li>
		         <li><a href="<?php echo base_url(); ?>Clixsign"><img class="iconstyle" src="<?php echo base_url() ?>html/images/clixsign.png">clixsign</a></li>
		         <li><a href="#!"><img class="iconstyle" src="<?php echo base_url() ?>html/images/email_edit.png">e-sing</a></li>
		         <li><a href="#!"><img class="iconstyle" src="<?php echo base_url() ?>html/images/calculator.png">Budget Fields</a></li>
		        
		      </ul>
		    </div>
		  </nav>
	<div class="row">
		<div class="body-box">
			<form name="budgetForm" id="budgetForm" method="POST">
				<input type="hidden" name="id" value="<?= $up_bdgt['id']; ?>">
			<div class="col s12 m10">
			<div class="col s12 m2">
				<div class="hdr-tl">
					<label>Item Name</label>
				</div>
				<input type="text" name="item_name" value="<?= $up_bdgt['item_name']; ?>">
			</div>
			<div class="col s12 m2">
				<label>Type</label>
				<select id="type" name="type" class="">
					<option value="">--Select--</option>
					<option value="GI" <?php if($up_bdgt['type']=='GI') { ?> selected <?php } ?>>Gross Income</option>
					<option value="I" <?php if($up_bdgt['type']=='I') { ?> selected <?php } ?>>Income</option>
					<option value="E" <?php if($up_bdgt['type']=='E') { ?> selected <?php } ?>>Expense</option>
					<option value="LA" <?php if($up_bdgt['type']=='LA') { ?> selected <?php } ?>>Liquid Asset</option>
					<option value="A" <?php if($up_bdgt['type']=='A') { ?> selected <?php } ?>>Other Asset</option>
				</select>
			</div>
			<div class="col s12 m3">
				<label>Hover Hint</label>
				<input type="text" name="hover_hint" value="<?= $up_bdgt['hover_hint']; ?>">
			</div>
			<div class="col s12 m2">
				<label>Replace Tag</label>
				<input type="text" name="replace_tag" value="<?= $up_bdgt['replace_tag']; ?>">
			</div>
			<div class="col s12 m2">
				<div class="btn-box">
					<?php if($up_bdgt['id']>0) { ?>
					<button type="button" class="btn btn-flat btn-update-budget"><img src="<?= base_url();?>html/images/add.png"> &nbsp;Save</button>
					<button type="button" data-value="<?= $up_bdgt['id']; ?>" class="btn btn-flat btn-delete-budget"><img src="<?= base_url();?>html/images/delete.png"> &nbsp;Delete</button>
					<?php } else{ ?>
					<button type="button" class="btn btn-flat btn-save-budget"><img src="<?= base_url();?>html/images/add.png"> &nbsp;Save</button>
					<?php } ?>
				</div>
			</div>
		</div>
		</form>
		</div>
	</div>
	<div class="row">
		<div class="ndBox">
			<h6>Drag to reorder fields</h6>
			<div class="row tab-container">
				<div class="tab-box">
					<label>Gross Income</label>
				</div>
				<div class="col s12 m12 tBox">
					<?php foreach ($all as $key => $value) { ?>
					<div class="tabBox">
						<div class="col s12 m3">
							<p><?= $value['item_name']; ?></p>
						</div>
						<div class="col s12 m4">
							<p><?= $value['hover_hint'];?></p>
						</div>
						<div class="col s12 m4">
							<p><?= $value['replace_tag'];?></p>
						</div>
						<div class="col s12 m1">
							<a href="<?= base_url();?>BudgetFields/editBudgets/<?= $value['id'];?>" class="edt-bdgt" data-value="<?= $value['id'];?>"><img src="<?= base_url();?>html/images/application_edit.png"></a>
						</div>
					</div>
				<?php } ?>
				</div>
			</div>

			<div class="row tab-container">
				<div class="tab-box">
					<label>Income</label>
				</div>
				<div class="col s12 m12 tBox">
					<?php foreach ($all1 as $key => $value) { ?>
					<div class="tabBox">
						<div class="col s12 m3">
							<p><?= $value['item_name']; ?></p>
						</div>
						<div class="col s12 m4">
							<p><?= $value['hover_hint'];?></p>
						</div>
						<div class="col s12 m4">
							<p><?= $value['replace_tag'];?></p>
						</div>
						<div class="col s12 m1">
							<a href="<?= base_url();?>BudgetFields/editBudgets/<?= $value['id'];?>" class="edt-bdgt" data-value="<?= $value['id'];?>"><img src="<?= base_url();?>html/images/application_edit.png"></a>
						</div>
					</div>
				<?php } ?>
				</div>
			</div>

			<div class="row tab-container">
				<div class="tab-box">
					<label>Expenses</label>
				</div>
				<div class="col s12 m12 tBox">
					<?php foreach ($all2 as $key => $value) { ?>
					<div class="tabBox">
						<div class="col s12 m3">
							<p><?= $value['item_name']; ?></p>
						</div>
						<div class="col s12 m4">
							<p><?= $value['hover_hint'];?></p>
						</div>
						<div class="col s12 m4">
							<p><?= $value['replace_tag'];?></p>
						</div>
						<div class="col s12 m1">
							<a href="<?= base_url();?>BudgetFields/editBudgets/<?= $value['id'];?>" class="edt-bdgt" data-value="<?= $value['id'];?>"><img src="<?= base_url();?>html/images/application_edit.png"></a>
						</div>
					</div>
				<?php } ?>
			</div>
			</div>

			<div class="row tab-container">
				<div class="tab-box">
					<label>Liquid Assets</label>
				</div>
				<div class="col s12 m12 tBox">
					<?php foreach ($all3 as $key => $value) { ?>
					<div class="tabBox">
						<div class="col s12 m3">
							<p><?= $value['item_name']; ?></p>
						</div>
						<div class="col s12 m4">
							<p><?= $value['hover_hint'];?></p>
						</div>
						<div class="col s12 m4">
							<p><?= $value['replace_tag'];?></p>
						</div>
						<div class="col s12 m1">
							<a href="<?= base_url();?>BudgetFields/editBudgets/<?= $value['id'];?>" class="edt-bdgt" data-value="<?= $value['id'];?>"><img src="<?= base_url();?>html/images/application_edit.png"></a>
						</div>
					</div>
				<?php } ?>
			</div>
			</div>

			<div class="row tab-container">
				<div class="tab-box">
					<label>Other Assets</label>
				</div>
				<div class="col s12 m12 tBox">
					<?php foreach ($all4 as $key => $value) { ?>
					<div class="tabBox">
						<div class="col s12 m3">
							<p><?= $value['item_name']; ?></p>
						</div>
						<div class="col s12 m4">
							<p><?= $value['hover_hint'];?></p>
						</div>
						<div class="col s12 m4">
							<p><?= $value['replace_tag'];?></p>
						</div>
						<div class="col s12 m1">
							<a href="<?= base_url();?>BudgetFields/editBudgets/<?= $value['id'];?>" class="edt-bdgt" data-value="<?= $value['id'];?>"><img src="<?= base_url();?>html/images/application_edit.png"></a>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	</div>
</div>