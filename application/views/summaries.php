<div class="main-box">
	<div class="cmdtitle">
		<a href="<?php echo base_url(); ?>Accounting">Accounting</a> ><a href="<?php echo base_url(); ?>Summaries">Summaries</a>
	</div>

	<div class="main-menu">
		<div class="condcont">
            <div class="left">
                <h5>File Type</h5>
                <select id="file_type" name="file_type" class="">
                      <option value="12">Student Loans</option>
               </select>
            </div>
            <div class="left">
	            <h5>Date Field</h5>
	               <select id="date_field" name="date_field" class="">
						<option value="process_date">Process Date</option>
						<option value="cleared_date">Cleared Date</option>
						<option value="enrolled_date">Enrolled Date</option>
						<option value="submitted_at">Submitted Date</option>
	               </select>
           </div>
           <div class="left">
	           <h5>Report Type</h5>
	            <select id="reptype" name="reptype" class="">
						<option value="trans_type">Trans Type</option>
						<option value="company_id">Company</option>
						<option value="assigned_to">Assigned To</option>
						<option value="c_source">Data Source</option>
						<option value="sub_type">Sub Type</option>
						<option value="paid_to">Paid To</option>
						<option value="state">State</option>
						<option value="leadstatus">Client Status</option>
	            </select>
           </div>
           <div class="left">
	            <h5>First Group</h5>
	            <select id="fgroup" name="fgroup" class="">
					<option value="time">Timeframe</option>
					<option value="reptype">Report Type</option>
	            </select>
            </div>
	        <div class="left ml20"></div>

            <div class="left">
	            <h5>Time Period</h5>
	            <select id="time_period" name="time_period" class="">
					<option value="daily">Daily</option>
					<option value="weekly">Weekly</option>
					<option value="monthly">Monthly</option>
					<option value="quarterly">Quarterly</option>
	            </select>
           </div>
	        <div class="left">
	            <h5>Range Selector</h5>
	            <select id="date_set" name="date_set" class="" onchange="setDate('start_date','end_date');">
					<option value="">--Select--</option><option value="today">Today</option>
					<option value="yesterday">Yesterday</option>
					<option value="wetod">Week to Date</option>
					<option value="lastwe">Last Week</option>
					<option value="motod">Month to Date</option>
					<option value="lastmo">Last Month</option>
					<option value="yetod">Year to Date</option>
					<option value="lasty">Last Year</option>
					</select>
	        </div>

	         <div class="left">
	            <h5>START DATE</h5>
	            <input type="text" class="datepicker">
	        </div>

	        <div class="left">
	            <h5>END DATE</h5>
	            <input type="text" class="datepicker">
	        </div>
	     
	        <div class="left">
	            <h5>&nbsp;</h5>
	            <input type="submit" class="editlink" name="submit" value="Filter">
	        </div>
	        <div class="clear"></div>

        </div>

        <div class="row srow">
        	<div class="col s12 m2">
        		<div class="heading">INCLUDE TRANS TYPES</div>
        	</div>
        	<div class="col s12 m10">
        		<div class="excv">
        			  <i class="material-icons">file_download</i><a href="<?= base_url(); ?>html/images/doc/1_files.pdf" download>Export To CSV</a>
        		</div>
        		<table id="example" class="ui celled table responsive nowrap striped highlight" style="width:100%">
		        <thead>
		            <tr>
		            	<th></th>
		            	<th></th>
		            	<th>All</th>
		            </tr>
		        </thead>
		        <tbody>
				<tr>
					<td></td>
					<td>GRAND TOTAL</td>
					<td>	$0.00</td>
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
