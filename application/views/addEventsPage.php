<?php 

$u=$this->db->query("SELECT f_name,l_name FROM contactdetails WHERE c_id='".$c_id."'");
$uu=$u->row_array();
?>
<div class="row conrow">
 	
    <form class="col s12" id="addEvent">
      <div class="row">
        <h6 style="font-family: Arial, sans-serif;
    text-align: center;
    font-size: 16px;
    letter-spacing: 0;
    font-weight: bold;
}">Schedule An Event With <?php echo $uu['f_name'].' '.$uu['l_name']; ?></h6>
        <div class="row"></div>
        <div class="col s12 m12 valign-wrapper">
          <div class="col s2 m2">
          <label>Title </label></div>
          <div class="col s10 m10">
          <input type="text" name="e_title" name="note">
          </div>
        </div>
        <div class="col s12 m12">
          <div class="col s4 m3 bx">
            <label>When</label>
            <span class="prefix"><i class="far fa-calendar-alt"></i></span>
            <input type="text" class="datepicker" name="e_date" style="position: relative;top: 0;padding-left: 30px !important;width: calc(100% - 35px) !important;">
          </div>

          <div class="col s4 m2 bx">
            <label>Time </label>
              <select id="time" name="e_time" class="MB_focusable">
                <option value="">--Select--</option><option value="12:00 am">12:00 am</option>
                <option value="12:15 am">12:15 am</option>
                <option value="12:30 am">12:30 am</option>
                <option value="12:45 am">12:45 am</option>
                <option value="1:00 am">1:00 am</option>
                <option value="1:15 am">1:15 am</option>
                <option value="1:30 am">1:30 am</option>
                <option value="1:45 am">1:45 am</option>
                <option value="2:00 am">2:00 am</option>
                <option value="2:15 am">2:15 am</option>
                <option value="2:30 am">2:30 am</option>
                <option value="2:45 am">2:45 am</option>
                <option value="3:00 am">3:00 am</option>
                <option value="3:15 am">3:15 am</option>
                <option value="3:30 am">3:30 am</option>
                <option value="3:45 am">3:45 am</option>
                <option value="4:00 am">4:00 am</option>
                <option value="4:15 am">4:15 am</option>
                <option value="4:30 am">4:30 am</option>
                <option value="4:45 am">4:45 am</option>
                <option value="5:00 am">5:00 am</option>
                <option value="5:15 am">5:15 am</option>
                <option value="5:30 am">5:30 am</option>
                <option value="5:45 am">5:45 am</option>
                <option value="6:00 am">6:00 am</option>
                <option value="6:15 am">6:15 am</option>
                <option value="6:30 am">6:30 am</option>
                <option value="6:45 am">6:45 am</option>
                <option value="7:00 am">7:00 am</option>
                <option value="7:15 am">7:15 am</option>
                <option value="7:30 am">7:30 am</option>
                <option value="7:45 am">7:45 am</option>
                <option value="8:00 am">8:00 am</option>
                <option value="8:15 am">8:15 am</option>
                <option value="8:30 am">8:30 am</option>
                <option value="8:45 am">8:45 am</option>
                <option value="9:00 am">9:00 am</option>
                <option value="9:15 am">9:15 am</option>
                <option value="9:30 am">9:30 am</option>
                <option value="9:45 am">9:45 am</option>
                <option value="10:00 am">10:00 am</option>
                <option value="10:15 am">10:15 am</option>
                <option value="10:30 am">10:30 am</option>
                <option value="10:45 am">10:45 am</option>
                <option value="11:00 am">11:00 am</option>
                <option value="11:15 am">11:15 am</option>
                <option value="11:30 am">11:30 am</option>
                <option value="11:45 am">11:45 am</option>
                <option value="12:00 pm">12:00 pm</option>
                <option value="12:15 pm">12:15 pm</option>
                <option value="12:30 pm">12:30 pm</option>
                <option value="12:45 pm">12:45 pm</option>
                <option value="1:00 pm">1:00 pm</option>
                <option value="1:15 pm">1:15 pm</option>
                <option value="1:30 pm">1:30 pm</option>
                <option value="1:45 pm">1:45 pm</option>
                <option value="2:00 pm">2:00 pm</option>
                <option value="2:15 pm">2:15 pm</option>
                <option value="2:30 pm">2:30 pm</option>
                <option value="2:45 pm">2:45 pm</option>
                <option value="3:00 pm">3:00 pm</option>
                <option value="3:15 pm">3:15 pm</option>
                <option value="3:30 pm">3:30 pm</option>
                <option value="3:45 pm">3:45 pm</option>
                <option value="4:00 pm">4:00 pm</option>
                <option value="4:15 pm">4:15 pm</option>
                <option value="4:30 pm">4:30 pm</option>
                <option value="4:45 pm">4:45 pm</option>
                <option value="5:00 pm">5:00 pm</option>
                <option value="5:15 pm">5:15 pm</option>
                <option value="5:30 pm">5:30 pm</option>
                <option value="5:45 pm">5:45 pm</option>
                <option value="6:00 pm">6:00 pm</option>
                <option value="6:15 pm">6:15 pm</option>
                <option value="6:30 pm">6:30 pm</option>
                <option value="6:45 pm">6:45 pm</option>
                <option value="7:00 pm">7:00 pm</option>
                <option value="7:15 pm">7:15 pm</option>
                <option value="7:30 pm">7:30 pm</option>
                <option value="7:45 pm">7:45 pm</option>
                <option value="8:00 pm">8:00 pm</option>
                <option value="8:15 pm">8:15 pm</option>
                <option value="8:30 pm">8:30 pm</option>
                <option value="8:45 pm">8:45 pm</option>
                <option value="9:00 pm">9:00 pm</option>
                <option value="9:15 pm">9:15 pm</option>
                <option value="9:30 pm">9:30 pm</option>
                <option value="9:45 pm">9:45 pm</option>
                <option value="10:00 pm">10:00 pm</option>
                <option value="10:15 pm">10:15 pm</option>
                <option value="10:30 pm">10:30 pm</option>
                <option value="10:45 pm">10:45 pm</option>
                <option value="11:00 pm" selected="selected">11:00 pm</option>
                <option value="11:15 pm">11:15 pm</option>
                <option value="11:30 pm">11:30 pm</option>
                <option value="11:45 pm">11:45 pm</option>
              </select>
          </div>
          <div class="col s2 m2 bx">
            <label>Timezone</label>
            <select id="timezone" name="e_timezone" class="MB_focusable">
              <option value="US/Eastern">Eastern</option>
              <option value="US/Central">Central</option>
              <option value="US/Mountain">Mountain</option>
              <option value="US/Pacific" selected="selected">Pacific</option>
              <option value="America/Anchorage">Alaska</option>
              <option value="Etc/GMT+10">Hawaii</option>
            </select>
          </div>
          <div class="col s2 m2 bx">
            <label>View</label>
            <select id="public" name="e_public" class="MB_focusable">
              <option value="Public">Public</option>
              <option value="Private" selected="selected">Private</option>
            </select>
          </div>
          <div class="col s2 m2 bx">
            <label>Event Type</label>
            <select id="event_type" name="e_event_type" class="MB_focusable">
              <option value="">--Select--</option><option value="Meeting">Meeting</option>
              <option value="Phone Call">Phone Call</option>
              <option value="Welcome Call">Welcome Call</option>
            </select>
          </div>
          <div class="col s2 m2 bx">
            <label>Assigned To</label>
            <select id="event_type" name="e_assign_to" class="MB_focusable">
              <option value="<?= $c_id;?>"><?= $uu['f_name'].' '.$uu['l_name']; ?></option>
            </select>
          </div>

        </div>
        <div class="col s12 m12"></div>
        <div class="col s12 m12 valign-wrapper">
          <div class="col s2 m2">
            <label>Location </label></div>
          <div class="col s10 m10">
            <input type="text" name="e_location">
          </div>
        </div>
        <div class="col s12 m12 valign-wrapper">
          <div class="col s2 m2">
          <label>Description </label></div>
          <div class="col s10 m10">
          <textarea style="height: 100px;" name="e_desc"></textarea>
          </div>
        </div>
         <input name="c_id" type="hidden" value="<?php echo $c_id; ?>" class="validate">
       </div>
   </form>
</div>


<style type="text/css">
div#addEventss {
    width: 800px !important;
    min-width: 900px;
    height: auto;
}
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
select#time {
    padding: 0px 5px !important;
    height: 25px !important;
    font-size: 12px;
    background: transparent;
    border-radius: 2px !important;
    border-color: #d4d4d4 !important;
    position: relative;
    width: max-content;
}
select#timezone{
    padding: 0px 5px !important;
    height: 25px !important;
    font-size: 12px;
    background: transparent;
    border-radius: 2px !important;
    border-color: #d4d4d4 !important;
    position: relative;
    width: max-content;
}
select#public{
    padding: 0px 5px !important;
    height: 25px !important;
    font-size: 12px;
    background: transparent;
    border-radius: 2px !important;
    border-color: #d4d4d4 !important;
    position: relative;
    width: max-content;
}
select#event_type{
    padding: 0px 5px !important;
    height: 25px !important;
    font-size: 12px;
    background: transparent;
    border-radius: 2px !important;
    border-color: #d4d4d4 !important;
    position: relative;
    width: max-content;
}
select#event_type{
    padding: 0px 5px !important;
    height: 25px !important;
    font-size: 12px;
    background: transparent;
    border-radius: 2px !important;
    border-color: #d4d4d4 !important;
    position: relative;
    width: max-content;
}

.bx{
    padding: initial !important;
    margin-right: 0;
    padding-right: 5px !important;
    width: max-content !important;
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
</style>
<script type="text/javascript">
   $(document).ready(function(){
    $('.datepicker').datepicker();
  });
</script>