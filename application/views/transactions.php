<div class="main-box">
    <div class="cmdtitle">
        <a href="<?php echo base_url(); ?>Enrollments">Enrollments</a> ><a href="<?php echo base_url(); ?>Transactions">All Transactions</a>
    </div>

    <div class="main-menu">
    <nav class="contactnav">
            <div class="nav-wrapper connavwapp">
              <ul id="nav-mobile" class="hide-on-med-and-down">
                <li><input type="text" name=""></li>
                <li><a href="<?= base_url(); ?>Transactions_momo"><img class="iconstyle" src="<?php echo base_url() ?>html/images/page_white_text.png">Transactions memos</a></li>
            </div>
    </nav>
    <div class="titlee"><a href="#">All Transactions</a></div>
            <form name="frm" action="" method="post">
                   <a>+ customize</a>
                        <div class="condcont">
                            <div class="left">
                              <h4>TransID</h4>
                              <input size="6" type="text" name="transID" value="">
                            </div>
                            <div class="left">
                              <h4>Amount</h4>
                              <input size="6" type="text" name="amount" value="">
                            </div>
                            <div class="left">
                                <h4>Process Date:</h4>
                               <select id="timeframe" name="timeframe" class="">
                                <option value="">--Select--</option><option value="Today">Today</option>
                                <option value="Yesterday">Yesterday</option>
                                <option value="This Week">This Week</option>
                                <option value="This Month">This Month</option>
                                <option value="This Year">This Year</option>
                                <option value="Last Week">Last Week</option>
                                <option value="Last Month">Last Month</option>
                                <option value="Last Year">Last Year</option>
                                <option value="Custom Range">Custom Range</option>
                                </select>
                            </div>
                            <div class="left">
                                    <h4>Return Date:</h4>
                                   <select id="return_date" name="return_date" class="">
                                        <option value="">--Select--</option><option value="Today">Today</option>
                                        <option value="Yesterday">Yesterday</option>
                                        <option value="This Week">This Week</option>
                                        <option value="This Month">This Month</option>
                                        <option value="This Year">This Year</option>
                                        <option value="Last Week">Last Week</option>
                                        <option value="Last Month">Last Month</option>
                                        <option value="Last Year">Last Year</option>
                                        <option value="Custom Range">Custom Range</option>
                                        </select>
                            </div>
                             <div class="left">
                              <h4>client</h4>
                              <input size="6" type="text" name="amount" value="">
                            </div>
                            <div class="left">
                            <h4>Show</h4>
                             <select id="show" name="show" class="">
                                <option value="">--All Transactions--</option><option value="upcoming">Not Proceesed</option>
                                <option value="completed">Processed</option>
                            </select>
                           </div>
                       <div class="left">
                            <h4>Type</h4>
                            <select id="trans_type" name="trans_type" class="">
                                <option value="">--All Types--</option><option value="D">ACH Client Debit</option>
                                <option value="C">ACH Credit / Fee</option>
                                <option value="AR">Advance Recoup</option>
                                <option value="BF">Balance Forward</option>
                                <option value="BT">Balance Transfer</option>
                                <option value="CPF">Check Paid Fee</option>
                                <option value="CA">Client Advance</option>
                                <option value="CP">Client Check Payment</option>
                                <option value="R">Client Refund</option>
                                <option value="CC">Credit Card Payment</option>
                                <option value="CR">Custodial Reimbursement</option>
                                <option value="SF">Disbursement Fee</option>
                                <option value="DPG">DPG Custodial Fee</option>
                                <option value="DPGR">DPG Reimbursement</option>
                                <option value="PF">Earned Performance Fee</option>
                                <option value="ECHK">eCheck</option>
                                <option value="FAW">Fee Account Withdrawl</option>
                                <option value="FA">Retained Performance Fee</option>
                                <option value="RV">Reversal</option>
                                <option value="SA">Settlement Advance</option>
                                <option value="S">Settlement Payment</option>
                                <option value="TF">Transaction Fee</option>
                                <option value="T">Transfer</option>
                                <option value="TD">Trust Deposit</option>
                            </select>
                        </div>

                        <div class="left">
                            <h4>Sub Type</h4>
                            <select id="sub_type" name="sub_type" class="">
                                <option value="">--All Sub Types--</option><option value="21">ACH / Check By Phone</option>
                                <option value="39">Advance Recoup</option>
                                <option value="6">Bank Wire</option>
                                <option value="17">Cashiers Check</option>
                                <option value="18">Cashiers Check 2nd Day</option>
                                <option value="19">Cashiers Check Overnight</option>
                                <option value="20">Check</option>
                                <option value="15">Check 2nd Day</option>
                                <option value="16">Check Overnight</option>
                                <option value="524">Direct Deposit / Cash</option>
                                <option value="132">DirectPay</option>
                                <option value="527">Money Order</option>
                                <option value="5">Standard Check</option>
                                <option value="92">Stop Payment Fee</option>
                           </select>
                        </div>

                        <div class="left">
                            <h4>Status</h4>
                           <select id="status" name="status" class="">
                                <option value="">--All Status--</option><option value="25">Authorized</option>
                                <option value="3">Cancel</option>
                                <option value="4">Cleared</option>
                                <option value="10">Correction</option>
                                <option value="15">Error Processing</option>
                                <option value="14">Low Balance</option>
                                <option value="30">On Hold</option>
                                <option value="0">Open</option>
                                <option value="1">Pending</option>
                                <option value="21">Pending Approval</option>
                                <option value="2">Pending For Batch</option>
                                <option value="7">Pending For Journal</option>
                                <option value="70">Pending Update</option>
                                <option value="11">Rejected</option>
                                <option value="12">Resubmitted</option>
                                <option value="9">Returned / NSF</option>
                                <option value="13">Reversed</option>
                                <option value="20">Shipped</option>
                                <option value="22">Stop Payment</option>
                                <option value="8">Void</option>
                           </select>
                        </div>

                        <div class="left">
                            <h4>memo</h4>
                            <select id="memo" name="memo" class="">
                            <option value="">--Select--</option>
                            </select>
                        </div>
                       
                   </div>
                   <div class="filter"><a href="#!"><img class="iconstyle" src="<?php echo base_url() ?>html/images/add.png">filter</a></div>
        </form>

        <div class="row srow">
             <div class="titlee"><a href="#">Transaction Total: $0.00</a></div>
            <div class="col s12 m12">
                <div class="excv">
                      <i class="material-icons">file_download</i><a href="<?= base_url(); ?>html/images/doc/1_files.pdf" download>Export To CSV</a>
                </div>
                <table id="example" class="ui celled table responsive nowrap striped highlight" style="width:100%">
                <thead>
                    <tr >
                    <th>Trans ID</th>
                    <th>Full Name</th>
                    <th>Process Date</th>
                    <th>Amount</th>
                    <th>Trans Type</th>
                    <th>Memo</th>
                    <th>Status</th>
                    
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td></td>
                    <td><td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
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
