<div class="main-box">
	<div class="cmdtitle">
		<a href="<?php echo base_url(); ?>Files">file & media library</a>><a href="<?php echo base_url(); ?>Files">file list</a>
	</div>

	<div class="main-menu row">
		  <nav class="contactnav">
		    <div class="nav-wrapper connavwapp">
		      <ul id="nav-mobile" class="hide-on-med-and-down" style="position: relative;left: 5px;}">
		      	<li class="sec"><input type="text" name=""></li>
		        <li><a href="<?php echo base_url(); ?>UploadFile"><img class="iconstyle" src="<?php echo base_url() ?>html/images/add.png">uplode new file</a></li>
		        <li><a href="#"><img class="iconstyle" src="<?php echo base_url() ?>html/images/icon-server.png">Servers</a></li>
		       </ul>
		    </div>
		  </nav>

		  <div  class="col s12 m6">
		  	<div class="col s12 m2 ftitle">Filter By Type</div>
		  	<div class="col s12 m3"><input type="text" name=""></div>
		  </div>

		  <div class="col s12 m6">
		  	<ul class="ful">
		  		<li><a href="#"><i class="fa fa-list fa-2x"></i></a></li>
		  		<li><a href="#"><i class="fa fa-th fa-2x"></i></a></li>
		  	</ul>
		  </div>
<?php 
	$t = $this->db->query("select * from up_files");
	$y = $t->result_array();
?>
		  	<div class="table-box">
				<table id="example1" class="ui celled table responsive nowrap striped highlight" style="width:100%">
		        <thead>
		            <tr>
		            	<th>type</th>
		            	<th>create at</th>
		            	<th>create by</th>
		            	<th>title</th>
		            	<th>file name</th>
		            	<th></th>
		            </tr>
		        </thead>
		        <tbody>
		        	<?php foreach ($y as $key => $value) { ?>
		         <tr>
				
					<td><?php echo $value['file_type']; ?></td>
					<td><?php echo $value['createdOn']; ?></td>
					<td><?php echo $value['createdBy']; ?></td>
					<td><?php echo $value['file_name']; ?></td>
					<td><?php echo $value['file']; ?></td>
					<td><a href="<?php echo base_url(); ?>html/images/files/<?php echo $value['file']; ?>" target="_page"><i class="fas fa-search-plus" onclick="$('.imgBox').click();"></i></td>
				</tr>
				<?php } ?>
				</tbody>
			</table>
			</div> 





	</div>
</div>
<script type="text/javascript">
	$(function(){
		 $('.materialboxed').materialbox();
		});
</script>