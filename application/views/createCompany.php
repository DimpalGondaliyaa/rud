<div class="main-box">
	<div class="main-menu">

		 <div class="row conrow table-box">
		 	<div class="contacttitle">
		 		Create Company
		 	</div>
		    <form class="col s12" id="companies">
		      <div class="row">

		        <div class="input-field col s6 m5">
		          <input placeholder="Company Name" name="c_name" type="text" class="validate">
		        </div>

		        <div class=" col s6 m5">
		          <label>
			        <input name="c_status" value="active" type="radio" checked />
			        <span>Active</span>
			      </label>
			      <label> &nbsp;&nbsp;
			        <input name="c_status" value="de-active" type="radio" />
			        <span>De-active</span>
			      </label>
			    </div>

		        <div class="input-field col s6 m2">
		        <a class="waves-effect waves-light btn create-company">Save</a>
		    	</div>
		      </div>
		   </form>
	    </div>

	    <div class="row">
	    	<div class="companies-container">
	    		<div class="companies-box">
						<div class="table-box">
						<h5>Company List</h5>
						<table id="example" class="ui celled table responsive nowrap" style="width:100%">
				        <thead>
				            <tr>
				            	<th>#</th>
				            	<th>Company Name</th>
				            	<th>Status</th>
				            	<th>Created On</th>				            	
				            	<th>Action</th>
				            </tr>
				        </thead>
				        <tbody>
						<?php
						$i=1;
						foreach ($company as $key => $value) { ?>
						<tr>
							<td><?php echo $i++; ?></td>
							<td><?php echo $value['c_name']; ?></td>
							<td><?php echo $value['c_status'] ?></td>
							<td><?php echo $value['createdOn'] ?></td>
							<td><a data-id="<?php echo $value['c_id']; ?>" class="cmp-btn btn" href="#!"><i class="fas fa-edit"></i></a> | <a href="#!" data-id="<?php echo $value['c_id']; ?>"  class="dltCompany btn"><i class="fas fa-trash"></i></a> </td>
						</tr>
						<?php } ?>
						</tbody>
					</table>
					</div> 
				</div>

						  <!-- Modal Structure -->
			  <div id="CompanyEdit" class="modal">
			    <div class="modal-content">
			    	
			    </div>
			    <div class="modal-footer">
			      <a href="#!" class="modal-close waves-effect waves-green btn-flat editCompany">Agree</a>
			    </div>
			  </div>
			</div>
		</div>
	</div>
</div>


<style type="text/css">
	::placeholder
	{
		text-transform: capitalize;
	}
</style>