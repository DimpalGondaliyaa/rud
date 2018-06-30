<div class="main-box">
	<div class="cmdtitle">
		<a href="<?php echo base_url(); ?>Administration">user & administration</a>
	</div>

	<div class="main-menu">
		  <nav class="contactnav">
		    <div class="nav-wrapper connavwapp">
		      <ul id="nav-mobile" class="hide-on-med-and-down">
		        <li><a href="<?= base_url(); ?>Add_User"><img class="iconstyle" src="<?php echo base_url() ?>html/images/add.png">add user</a></li>
		        <li><a href="<?= base_url(); ?>Companies"><img class="iconstyle" src="<?php echo base_url() ?>html/images/house.png">Companies</a></li>
		        <li><a href="<?= base_url(); ?>Roles"><img class="iconstyle" src="<?php echo base_url() ?>html/images/layout_edit.png">Roles</a></li>
		        <li><a href="<?= base_url(); ?>Teams"><img class="iconstyle" src="<?php echo base_url() ?>html/images/group.png">team</a></li>
		        <li><a href="<?= base_url(); ?>System_Log"><img class="iconstyle" src="<?php echo base_url() ?>html/images/report.png">system log</a></li>
		        <li><a href="<?= base_url(); ?>System_Settings"><img class="iconstyle" src="<?php echo base_url() ?>html/images/application_side_list.png">setting</a></li>
		        <li><a href="#"><img class="iconstyle" src="<?php echo base_url() ?>html/images/chart_bar.png">usage</a></li>
		        
		        </ul>
		    </div>
		  </nav>
<?php 
$d = $this->db->query("select * from add_user");
$t = $d->result_array();

?>
		  	<div class="table-box">
					
				<table id="example1" class="ui celled table responsive nowrap striped highlight" style="width:100%">
		        <thead>
		            <tr>
		            	<th>status</th>
		            	<th>username</th>
		            	<th>full name</th>
		            	<th>email</th>
		            	<th>role</th>
		            	<th>company</th>
		            	<th>last login</th>
		            	<th></th>
		            </tr>
		        </thead>
		        <tbody>
			<?php foreach ($t as $key => $v) { ?>
				<tr>
					<td><?php echo $v['status']; ?></td>
					<td><?php echo $v['username']; ?></td>
					<td><?php echo $v['f_name']; ?><?php echo $v['l_name']; ?></td>
					<td><?php echo $v['email']; ?></td>
					<td><?php echo $v['role']; ?></td>
					<td><?php echo $v['company']; ?></td>
					<td><?php echo $v['last_login']; ?></td>
					<td><a href="<?php echo base_url(); ?>Edit_User/edituserdata/<?php echo $v['id']; ?>" ><i class="fas fa-arrow-right"></i></a></td>
				</tr>
			<?php } ?>	
				</tbody>
			</table>
			</div> 




	</div>
</div>	
		

