<div class="row conrow">
 	
    <form class="col s12" id="edtCompany">
      <div class="row">

        <div class="input-field col s6 m6">
          <input placeholder="Company Name" value="<?php echo $c_name; ?>" name="c_name" type="text" class="validate">
        </div>

         <div class=" col s6 m6">
           <label>
              <input name="c_status" value="active" type="radio" <?php if($c_status=='active') { ?>checked <?php } ?>  />
              <span>Active</span>
            </label>
            <label> &nbsp;&nbsp;
              <input name="c_status" value="de-active" type="radio" <?php if($c_status=='de-active') { ?>checked <?php } ?> />
              <span>De-active</span>
            </label>
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
</style>