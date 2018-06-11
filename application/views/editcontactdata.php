<div class="row conrow">
 	
    <form class="col s12" id="edtcontactfrm">
      <div class="row">

        <div class="input-field col s6 m6">
          First Name
          <input placeholder="first name" value="<?php echo $f_name; ?>" name="f_name" type="text" class="validate">
        </div>

         <div class="input-field col s6 m6">
          Last Name
          <input placeholder="last name" name="l_name" value="<?php echo $l_name; ?>" type="text" class="validate">
        </div>

         <div class="input-field col s6 m6">
          E-mail
          <input placeholder="user email" name="u_email" value="<?php echo $u_email; ?>" type="text" class="validate">
        </div>

         <div class="input-field col s12 m6">
          Password
          <input placeholder="password" name="password" value="<?php echo $password; ?>" type="text" class="validate">
        </div>

        <div class="col s6 m6" style="margin-top: 15px;">
          Gender
              <label>
                <input name="gender" value="0" type="radio" <?php if($gender==0){ ?>checked <?php } ?> />
                <span>Male</span>
              </label>
              &nbsp;&nbsp;
              <label>
                <input name="gender" value="1" type="radio" <?php if($gender==1){ ?>checked <?php } ?>/>
                <span>Female</span>
              </label>
              &nbsp;&nbsp;
              <label>
                <input name="gender" value="2" type="radio" <?php if($gender==2){ ?>checked <?php } ?>/>
                <span>Other</span>
              </label>
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