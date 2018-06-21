<div class="main-box">
	<div class="cmdtitle">
		<a href="<?php echo base_url(); ?>Accounting">Accounting</a> ><a href="<?php echo base_url(); ?>Summaries">Summaries</a>
	</div>

	<div class="main-menu">
	
			<form name="frm" action="" method="post">
		           <p>NOTE: The pipeline exclude scheduled credits from clients on a gateway hold</p>
		            	<div class="condcont">
		                    <div class="left">
			                    <h4>Payee</h4>
			                    <select id="paid_to" name="paid_to" class="">
								    <option value="">--Select--</option>
								</select>
		                    </div>
                        <div class="left">
								<h4>Month</h4>
								<select id="month" name="month" class="">
								<option value="">--Select--</option>
								<option value="January">January</option>
								<option value="February">February</option>
								<option value="March">March</option>
								<option value="April">April</option>
								<option value="May">May</option>
								<option value="June" selected="selected">June</option>
								<option value="July">July</option>
								<option value="August">August</option>
								<option value="September">September</option>
								<option value="October">October</option>
								<option value="November">November</option>
								<option value="December">December</option>
		                        </select>
                        </div>
                        <div class="left">
						<h4>Year</h4>
						    <select id="year" name="year" class="">
								<option value="">--Select--</option><option value="2009">2009</option>
								<option value="2010">2010</option>
								<option value="2011">2011</option>
								<option value="2012">2012</option>
								<option value="2013">2013</option>
								<option value="2014">2014</option>
								<option value="2015">2015</option>
								<option value="2016">2016</option>
								<option value="2017">2017</option>
								<option value="2018" selected="selected">2018</option>
								<option value="2019">2019</option>
								<option value="2020">2020</option>
                    	</select>
					   </div>
			           <div class="left">
			                <h4>Paused Clients</h4>
							<select id="paused" name="paused" class="">
							<option value="exclude">Exclude from expected</option>
							<option value="include">Included in expected</option>
                           </select>
			           </div>
			            <div class="left">
			                <h4>&nbsp;</h4>
			                <input type="submit" name="filter" value="filter">
			            </div>
			       </div>
        </form>

        <div class="row srow">
        	  <div class="note">Note: The expected amount may vary, depending on the success of clients payments, whether they are paused or on a gateway hold.</div>
        	<div class="col s12 m12">
        		<div class="excv">
        			  <i class="material-icons">file_download</i><a href="<?= base_url(); ?>html/images/doc/1_files.pdf" download>Export To CSV</a>
        		</div>
        		<table id="example" class="ui celled table responsive nowrap striped highlight" style="width:100%">
		        <thead>
		            <tr>
		            	<th>Date</th>
		            	<th>Expected To Process</th>
		            	<th>Actual Processed</th>
		            	<th>Cleared</th>
		            	<th>In-Active</th>
		            	<th>Pending</th>
		            </tr>
		        </thead>
		        <tbody>
				<tr>
					<td>june 1 , 2018</td>
					<td>$0.00</td>
					<td>$0.00</td>
					<td>$0.00</td>
					<td>$0.00</td>
					<td>$0.00</td>
				</tr>
				<tr>
					<td>june 1 , 2018</td>
					<td>$0.00</td>
					<td>$0.00</td>
					<td>$0.00</td>
					<td>$0.00</td>
					<td>$0.00</td>
				</tr>
				<tr>
					<td>june 1 , 2018</td>
					<td>$0.00</td>
					<td>$0.00</td>
					<td>$0.00</td>
					<td>$0.00</td>
					<td>$0.00</td>
				</tr>
				<tr>
					<td>june 1 , 2018</td>
					<td>$0.00</td>
					<td>$0.00</td>
					<td>$0.00</td>
					<td>$0.00</td>
					<td>$0.00</td>
				</tr>
				</tbody>
			</table>
        	</div>
        </div>
	</div>
</div>

<script type="text/javascript">
	  $(document).ready(function(){
    $('.datepicker').datepicker();
  });
</script>
