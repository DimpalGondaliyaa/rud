<div class="row conrow">
 	
    <form class="col s12" id="edtStatusfrm">
      <div class="row">
        <h6>Change Stage / Status: John Dragonetti</h6>
        <span class="col s12" style="color: #9e9e9e;font-size: 10px;text-align: center;">Stage / Status updates may trigger emails to be sent</span>
        <div class="row"></div>
        <div class="col s12 m12">
          <div class="col s4 m2">
        <label>Stage </label></div>
        <div class="col s8 m10">
        <select id="stage" name="stage" class="">
          <option value="">--Select--</option>
          <option value="Lead" <?php if($stage=='Lead') { ?> selected="selected" <?php } ?>>Lead</option>
          <option value="Underwriting" <?php if($stage=='Underwriting') { ?> selected="selected" <?php } ?>>Underwriting</option>
          <option value="Client" <?php if($stage=='Client') { ?> selected="selected" <?php } ?>>Client</option>
        </select>
        </div>
        </div>
        <div class="col s12 m12">
          <div class="col s2 m2">
          <label>Status </label></div>
          <div class="col s10 m10">
          <select id="status" name="status" class="">
            <option value="">--Select--</option>
            <option value="New Lead" <?php if($status=='New Lead') { ?> selected="selected" <?php } ?>>New Lead</option>
            <option value="Follow Up" <?php if($status=='Follow Up') { ?> selected="selected" <?php } ?>>Follow Up</option>
            <option value="VM 1" <?php if($status=='VM 1') { ?> selected="selected" <?php } ?>>VM 1</option>
            <option value="VM 2" <?php if($status=='VM 2') { ?> selected="selected" <?php } ?>>VM 2</option>
            <option value="VM 3" <?php if($status=='VM 3') { ?> selected="selected" <?php } ?>>VM 3</option>
            <option value="Docs Out" <?php if($status=='Docs Out') { ?> selected="selected" <?php } ?>>Docs Out</option>
            <option value="Returned File" <?php if($status=='Returned File') { ?> selected="selected" <?php } ?>>Returned File</option>
            <option value="Do Not Call" <?php if($status=='Do Not Call') { ?> selected="selected" <?php } ?>>Do Not Call</option>
            <option value="Dead" <?php if($status=='Dead') { ?> selected="selected" <?php } ?>>Dead</option>
          </select>
          </div>
        </div>
         <input placeholder="c_id" name="c_id" type="hidden" value="<?php echo $c_id; ?>" class="validate">
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