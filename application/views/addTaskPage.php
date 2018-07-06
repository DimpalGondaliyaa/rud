<?php 
  $u=$this->db->query("SELECT c_id,f_name,l_name FROM contactdetails WHERE c_id='".$c_id."'");
  $uu=$u->row_array();
?>
<div class="row conrow">
 	<form  id="addTasks" name="addTasks" method="POST">
    <div class="row">
      <input type="hidden" name="uu_id" value="<?= $uu['c_id']; ?>">
      <div class="col s12 m12 valign-wrapper">
        <div class="col s12 m4">
          <label for="Task">Task</label>
        </div>
        <div class="col s12 m8">
          <select id="task" name="task" id="task" class="" style="max-width:250px;">
            <option value="">--Select--</option>
            <optgroup label="Everyone">
              <option value="Returned Payment">Returned Payment</option>
              <option value="Submit to DOE">Submit to DOE</option>
            </optgroup>
          </select>
        </div>
      </div>

      <div class="col s12 m12 valign-wrapper">
        <div class="col s12 m4">
          <label>Due Date</label>
        </div>
        <div class="col s12 m8">
        <span class="dt"><i class="far fa-calendar-alt"></i></span><input type="text" class="datepicker" name="task_date" value="">
        </div>
      </div>

      <div class="col s12 m12 valign-wrapper">
        <div class="col s12 m4">
          <label>Assigned to</label>  
        </div>
        <div class="col s12 m2">
          <label>
            <input name="user" value="user" type="radio" checked />
            <span>User</span>
          </label>
        </div>&nbsp;
        <div class="col s12 m2">
          <label>
            <input name="user" value="team" type="radio"  />
            <span>Team</span>
          </label>
        </div>&nbsp;
        <div class="col s12 m4">
          <label>
            <input name="user" value="contact" type="radio"  />
            <span>Contact</span>
          </label>
        </div>
      </div>

      <div class="col s12 m12 valign-wrapper">
          <div class="col s12 m4"></div>
          <div class="col s12 m8">
<?php 
  
  $x=$this->db->query("SELECT f_name,l_name FROM contactdetails ORDER BY c_id DESC");
  $nm=$x->result_array();

?>

            <select id="assigned_to" name="assigned_to" class="">

              <option value="">--Select--</option>
              <?php foreach ($nm as $key => $xx): ?>
              <option value="<?= $xx['f_name'].' '.$xx['l_name'];?>"><?= $xx['f_name'].' '.$xx['l_name'];?></option>    
              <?php endforeach ?>
            </select>
          </div>
      </div>

      <div class="col s12 m12 valign-wrapper">
        <div class="col s12 m4"><label>Contact</label></div>
        <input type="hidden" name="contact" value="<?= $uu['f_name'].' '.$uu['l_name'];?>">
        <div><label><?= $uu['f_name'].' '.$uu['l_name'];?></label></div>
      </div>

      <div class="col s12 m12 valign-wrapper">
        <div class="col s12 m4"><label>Notes</label></div>
        <div class="col s12 m8"><textarea name="note"></textarea></div>
      </div>

    </div>    
  </form>
</div>


<style type="text/css">
div#addTask {
    position: absolute;
    overflow: hidden;
}

span.dt {
    position: absolute;
    margin-top: 15px;
    margin-left: 10px;
    z-index: 5;
}

input[type="datetime-local"] {
    position: relative;
    padding-left: 30px !important;
    width: calc(100% - 30px) !important;
    background: white !important;
}
.datepicker-modal {
    position: absolute;
    width: 100%;
    padding: 0;
    margin-top: -30px;
}

div#addTask .col {
    padding-bottom: 5px;
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

input{
  padding-left: 35px !important;
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
    $('.datepicker').datepicker({format: 'dd/mm/yyyy'});
  });
</script>