<div class="row conrow">
 	
    <form class="col s12" id="edtcontactfrm">
      <div class="row">

        <div class="input-field col s6 m6">
          <input placeholder="first name" value="<?php echo $f_name; ?>" name="f_name" type="text" class="validate">
        </div>

         <div class="input-field col s6 m6">
          <input placeholder="last name" name="l_name" value="<?php echo $l_name; ?>" type="text" class="validate">
        </div>

         <div class="input-field col s6 m6">
          <input placeholder="user email" name="u_email" value="<?php echo $u_email; ?>" type="text" class="validate">
        </div>

        <div class="input-field col s6 m6">
		    <select name="gender">
		      <option value="<?php echo $gender; ?>" disabled selected><?php echo $gender; ?></option>
		      <option value="0">Male</option>
		      <option value="1">Female</option>
		      <option value="2">Other</option>
		    </select>
	    </div>

         <div class="input-field col s6 m6">
          <input placeholder="phone" name="phone" value="<?php echo $phone; ?>" maxlength="12" type="text" class="validate">
        </div>

         <div class="input-field col s6 m6">
          <input placeholder="mobile" name="mobile" value="<?php echo $mobile; ?>" maxlength="12" type="text" class="validate">
        </div>

         <div class="input-field col s6 m6">
          <input placeholder="income" name="income" value="<?php echo $income; ?>" type="text" class="validate">
        </div>

         <div class="input-field col s6 m6">
          <input placeholder="date of birth" name="dob" value="<?php echo $dob; ?>" type="text" class="datepicker">
        </div>

         <div class="input-field col s6 m6">
          <input placeholder="address" name="address" value="<?php echo $address; ?>" type="text" class="validate">
        </div>

         <div class="input-field col s6 m6">
          <input placeholder="state" name="state" type="text" value="<?php echo $state; ?>" class="validate">
        </div>

         <div class="input-field col s6 m6">
          <input placeholder="city" name="city" type="text" value="<?php echo $city; ?>" class="validate">
        </div>

         <div class="input-field col s6 m6">
          <input placeholder="zipcode" name="zipcode" type="text" value="<?php echo $zipcode; ?>" class="validate">
        </div>

         <div class="input-field col s6 m6">
          <input placeholder="timeofresidency" name="timeofresidency" value="<?php echo $timeofresidency; ?>" type="text" class="validate">
        </div>

         <input placeholder="u_id" name="u_id" type="hidden" value="<?php echo $u_id; ?>" class="validate">

       </div>
   </form>
</div>


<style type="text/css">
	::placeholder
	{
		text-transform: capitalize;
	}
</style>