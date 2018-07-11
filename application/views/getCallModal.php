<?php 
$u=$this->db->query("SELECT f_name,l_name FROM contactdetails WHERE c_id='".$c_id."'");
$uu=$u->row_array();
?>
<div class="row conrow">
 	
    <form class="col s12" id="addCallLogs" name="addCallLogs" method="POST">
<input type="hidden" name="u_id" value="<?php echo $c_id; ?>">
      <div class="row">
        <div class="top-blue-menu">
            <button type="button" class="btn-add-call-Details"><img src="<?php echo base_url(); ?>html/images/add.png"> &nbsp;Save Call</button>
            <button type="button"><img src="<?php echo base_url(); ?>html/images/add.png"> &nbsp;Save Call & Email</button>
        </div>
      </div>
      <div class="row">
        <h6 style="font-family: Arial, sans-serif;
    text-align: left;
    font-size: 12px;
    letter-spacing: 0;
    font-weight: bolder;
}">Log Call Activity for <span style="color: #213f66;"><?php echo $uu['f_name'].' '.$uu['l_name']; ?></span></h6>
<span class="right"></span></div>
<div class="col s12 m6">
        <div class="row"></div>
        <div class="row">
          <div class="col s6 m4 bx">
            <label>Call Type </label>
              <select id="call_type" name="call_type" class="">
                <option value="outgoing">Outgoing</option>
                <option value="incoming">Incoming</option>
              </select>
          </div>
          <div class="col s6 m4 bx">
            <label>Call Result</label>
            <select id="call_result" name="call_result" class="">
              <option value="">--Select--</option>
              <option value="Already In Program">Already In Program</option>
              <option value="Busy">Busy</option>
              <option value="Connected">Connected</option>
              <option value="Disconnected">Disconnected</option>
              <option value="Do Not Contact">Do Not Contact</option>
              <option value="Hung Up">Hung Up</option>
              <option value="Left Message">Left Message</option>
              <option value="No Answer">No Answer</option>
              <option value="Wrong Number">Wrong Number</option>
            </select>            
          </div>
          <div class="col s6 m2 bx">
            <label>Duration</label>
            <input type="text" name="dur_hr" placeholder="00">
          </div>
          <div class="col s6 m2 bx">
            <label>:</label>
            <input type="text" name="dur_mnt" placeholder="00">
          </div>
        </div>

        <div class="row">
          <div class="col s12 m12 tx">
            <label>Notes about this call</label>
          </div>
          <div class="col s12 m12 tx">
            <textarea name="note"></textarea>
          </div>
        </div>

        <div class="row">
          <div class="col s12 m6" style="padding: 0;margin-top: 10px;">
            <label>Event Type For This Call</label>
            <select id="c_event" name="c_event" class="">
              <option value="">--Select--</option>
              <option value="CXCXC">CXCXC</option>
              <option value="Welcome Call">Welcome Call</option>
            </select>
          </div>
          <div class="col s12 m6" style="padding: 0;margin-top: 10px;">
             <label>Update Status</label>
             <select id="status" name="status" class="">
                <option value="">--Select--</option>
              </select>
            </div>
          </div>
        </div>

     </div>
   </form>

<!--   <div class="col s12 m6">
    <div class="row"></div>
      <div class="row">
        <div class="col s6 m4 bx">
          <label><h6>Activity History</h6></label>
            <select id="call_type" name="call_type" class="">
              <option value="outgoing">Outgoing</option>
              <option value="incoming">Incoming</option>
            </select>
        </div>
      </div>
  </div> -->

</div>


<style type="text/css">




.top-blue-menu button {
    background: transparent;
    border: none;
    padding: 12px;
    color: #fff;
}

.top-blue-menu {
    background-color: #213f66;
    margin-bottom: 12px;
    border-radius: 3px;
    color: white;
    margin-top: 15px;
}

label{
 line-height: 2; 
 color: #838383;
}
.row {
    margin-bottom: 0px;
}

.col.s12.m12.tx {
    padding: 0;
}
textarea { height: 75px; }
.datepicker-modal {
    position: absolute;
    width: 100%;
    padding: 0;
    margin-top: -30px;
}
.modal .modal-content{
      max-width: max-content;
      padding: 0;
}

span.prefix {
    position: absolute;
    margin-top: 22px;
    margin-left: -25px;
}
input.select-dropdown.dropdown-trigger {
    display: none;
}
.datepicker-table-wrapper {
    padding: 0px 15px;
}
select {
    width: 100%;
    height: 25px !important;
    line-height: 0 !important;
    font-size: 12px;
    padding-left: 5px !important;
}

input[type="text"] {
    height: 22px !important;
    line-height: 0px !important;
    position: relative;
    top: 1px;
}

.bx{
    padding: initial !important;
    margin-right: 0;
    padding-right: 5px !important;
}
input[type="text"] {
    margin-bottom: 25px !important;
}
	::placeholder
	{
		text-transform: capitalize;
	}
  option {
    font-size: 14px !important;
}



.top-blue-menu {
    background-color: #213f66;
    margin-bottom: 12px;
    border-radius: 3px;
    color: white;
}
.top-blue-menu ul li {
    display: inline-block;
    padding: 10px 12px;
    cursor: pointer;
}
.top-blue-menu ul a{ color: #fff; padding: 10px 0px;}

</style>
<script type="text/javascript">
   $(document).ready(function(){
    $('.datepicker').datepicker();
  });

   $(function(){

    var baseurl=$('#base_url').val();

     $(".btn-add-call-Details").on("click", function()
    {/*
        var t = $('#task').val();

        if(t==''){
          swal('Select Task');
          return false;
        }*/
        var addCallLog = new FormData($("#addCallLogs")[0]); 
        $.ajax({
            url : baseurl+"Home/addCallLogDetails",
            type :"POST",
            data :addCallLog,  
            contentType:false,
            processData:false,
            success:function(res)
            {
                swal("Good job!", "Call Log has been Saved Successfully!", "success")
                $('.swal-button--confirm').on('click',function(){
                    window.location.reload();
                });
            }
         });
    });

   });
</script>