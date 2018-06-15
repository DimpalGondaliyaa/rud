<?php 

$u=$this->db->query("SELECT f_name,l_name FROM contactdetails WHERE c_id='".$c_id."'");
$uu=$u->row_array();
?>
<div class="row conrow">
 	
    <form class="col s12" id="addNote">
      <div class="row">
        <h6 style="font-family: Arial, sans-serif;
    text-align: center;
    font-size: 16px;
    letter-spacing: 0;
    font-weight: bold;
}">Add A Note On File:<?php echo $uu['f_name'].' '.$uu['l_name']; ?></h6>
        <div class="row"></div>
        <div class="col s12 m12">
          <div class="col s4 m2">
        <label>Stage </label></div>
        <div class="col s8 m10">
        <select id="note_type" name="note_type" class="">
          <option value="General" selected="selected">General</option>
          <option value="Call">Call</option>
          <option value="Creditor">Creditor</option>
          <option value="Settlement">Settlement</option>
          <option value="Attorney">Attorney</option>
          <option value="Compliance">Compliance</option>
          <option value="Sales">Sales</option>
          <option value="Legal">Legal</option>
          <option value="Document">Document</option>
          <option value="Payment">Payment</option>
          <option value="Accounting">Accounting</option>
          <option value="Cal_Event">Cal Event</option>
          <option value="Email">Email</option>
          <option value="Schedule_Change">Schedule Change</option>
          <option value="Customer_Portal">Customer Portal</option>
        </select>
        </div>
        </div>
        <div class="col s12 m12"></div>
        <div class="col s12 m12">
          <div class="col s2 m2">
          <label>Note </label></div>
          <div class="col s10 m10">
          <textarea style="height: 100px;" name="note"></textarea>
          </div>
        </div>
         <input name="c_id" type="hidden" value="<?php echo $c_id; ?>" class="validate">
       </div>
   </form>
</div>


<style type="text/css">
	::placeholder
	{
		text-transform: capitalize;
	}
  option {
    font-size: 14px !important;
}
</style>