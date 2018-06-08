

<div class="main-box">
	<div class="main-menu">

		 <div class="row conrow">
		 	<div class="contacttitle">
		 		uplode file
		 	</div>
		    <form class="col s12" id="filefrm">
		      <div class="row">

		      	  <div class="input-field col s6 m3">
				    <select name="file_type">
				      <option value="" disabled selected>Choose your category</option>
				      <option value="document">document</option>
				      <option value="image">image</option>
				      <option value="misc">misc</option>
				      <option value="video">video</option>
				    </select>
			    </div>

		        <div class="input-field col s6 m3">
		          <input placeholder="file" name="file" type="file" class="validate">
		        </div>

		         <div class="input-field col s6 m3">
		          <input placeholder="file name" name="file_name" type="text" class="validate">
		        </div>

		        <a class="waves-effect waves-light btn addfiledata">Save</a>

		       </div>
		   </form>
	    </div>

	</div>
</div>

<?php $p = $this->db->query("select * from up_files");
	  $data = $p->result_array();	 ?>

<div class="main-box">
	<div class="main-menu">
			<div class="max-width">
				<div class="table-box">
				<h5>List of Contact Details Inserted by Admin</h5>
				<table id="example" class="ui celled table responsive nowrap" style="width:100%">
		        <thead>
		            <tr>
		            	<th>#</th>
		            	<th>file type</th>
		            	<th>file</th>
		            	<th>file name</th>
		            	<th>Action</th>
		            </tr>
		        </thead>
		        <tbody>
				<?php
				$i=1;
				foreach ($data as $key => $value) { ?>
				<tr>
					<td><?php echo $i++; ?></td>
					<td><?php echo $value['file_type']; ?></td>
					<td> <img class="materialboxed responsive-img" width="100" src="<?= base_url(); ?>html/images/files/<?php echo $value['file'] ?>"></td>

					<td><?php echo $value['file_name']; ?></td>
					<td><a data-id="<?php echo $value['id']; ?>" class="edtfiledata btn" href="#!"><i class="fas fa-edit"></i></a> | <a href="#!" data-id="<?php echo $value['id']; ?>"  class="filedltbtn btn"><i class="fas fa-trash"></i></a> </td>
				</tr>
				<?php } ?>
				</tbody>
			</table>
			</div> 
		</div>

	  <!-- Modal Structure -->
	  <div id="fileedtmodel" class="modal">
	    <div class="modal-content">
	    	
	    </div>
	    <div class="modal-footer">
	      <a href="#!" class="modal-close waves-effect waves-green btn-flat edtdatabtn">Agree</a>
	    </div>
	  </div>
	</div>
</div>

<style type="text/css">
select {
    display: none !important;
}
	::placeholder
	{
		text-transform: capitalize;
	}
	.main-box {
    position: relative;
    min-height: 250px;
    display: block;
    overflow: hidden;
    max-width: 1280px;
    padding: 15px;
    margin: 0 auto;
}
.row.conrow
{
	overflow:none;
}
</style>