<div class="main-box">
	<div class="cmdtitle">
		<a href="<?php echo base_url(); ?>Administration">user & administration</a>
	</div>

	<div class="main-menu row">
		<div class="col s12 m4">
            <form class="etfrm" name="etfrm" id="etfrm">
            	<input type="hidden" name="id" value="<?php echo $yy['id']; ?>" placeholder="">
			<div class="col s12 m4"><label>File Type</label></div>
			<div class="col s12 m8"><select id="file_type" name="file_type" class="">
                 <option value="<?php echo $yy['file_type']; ?>"><?php echo $yy['file_type']; ?></option><option value="Student Loans">Student Loans</option></select>
            </div>

            <div class="col s12 m4"><label>Event Type Title</label></div>
			<div class="col s12 m8"><input type="text" name="title" value="<?php echo $yy['title']; ?>" id="typename" size="30">
            </div>

            <div class="col s12 m4"><label>Length *(minutes)</label></div>
			<div class="col s12 m8"><input type="text" name="length" value="<?php echo $yy['length']; ?>" id="typename" size="30">
            </div>

            <div class="col s12 m4"><label>Shared With *</label></div>
			<div class="col s12 m8"><select multiple="multiple" size="7" name="sharewith" id="sharedwith"><option value="<?php echo $yy['sharewith']; ?>"><?php echo $yy['sharewith']; ?></option><optgroup label="Teams"><option value="t_10562">Super Admins</option><option value="t_10568">Sales</option><option value="t_11040">gggg</option></optgroup><optgroup label="Users"><option value="3204459">Anderson, Richard</option><option value="3177071">Cannon, Jeff</option><option value="3166835">Goodman, Alexander</option><option value="3254259">Goodman, Alex</option><option value="3166850">Harrison, Anthony</option><option value="3167522">Lee, Devin</option><option value="3170984">Morris, James</option><option value="3133547">PayPro, Debt</option><option value="3193601">Richardson, Raymond</option><option value="3177659">Smith, Greg</option><option value="3142430">Vargas, Alex</option><option value="3177203">Williams, Samantha</option></optgroup></select>
            </div>

            <div class="col s12 m4"><label>Status Change</label></div>
			<div class="col s12 m8"><select id="form_id" name="status" class=""><option value="<?php echo $yy['status']; ?>"><?php echo $yy['status']; ?></option></select>
            </div>

            <?php if($yy['id']==""){ ?>
            <a class="btn saveevent">save</a>
        <?php }else{  ?>
        	<a class="btn editevent">edit</a>
        	<a class="btn deleteevent" data-id="<?php echo $yy['id']; ?>">delete</a>
        <?php } ?>

            </form>

		</div>

<?php

$t = $this->db->query("select * from event_types");
$y = $t->result_array();

?>
		<div class="col s12 m8">

				<table id="example" class="ui celled table responsive nowrap striped highlight" style="width:100%">
		        <thead>
		            <tr>
		            	<th>name</th>
		            	<th>length</th>
		            	<th>status change</th>
		            	<th>Possible Results</th>
		            	<th></th>
		            	</tr>
		        </thead>
		        <tbody>
		        	<?php foreach ($y as $key => $v) { ?>
		        <tr>
					<td><?php echo $v['title']; ?></td>
					<td><?php echo $v['length']; ?></td>
					<td><?php echo $v['status']; ?></td>
					<td></td>
					<td><a href="<?php echo base_url(); ?>Event_Types/edit_eventt/<?php echo $v['id']; ?>">view</a></td>
				</tr>
			<?php } ?>
				</tbody>
			</table>


		</div>
	</div>
</div>