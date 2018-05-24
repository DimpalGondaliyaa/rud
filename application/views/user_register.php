 <div class="row">
    <form class="col s12" id="usereg">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="First Name" name="f_name" type="text" class="validate">
        </div>

         <div class="input-field col s6">
          <input placeholder="Last Name" name="l_name" maxlength="10" type="text" class="validate">
        </div>

        <div class="input-field col s6">
          <input placeholder="Email" name="u_email" type="text" class="validate" id="u_email">
          <div id="MobileMsg"></div>
        </div>

        <div class="input-field col s6">
          <input placeholder="Passwords" name="passwords" type="text" class="validate">
        </div>

        <div class="input-field col s6">
		    <select name="gender">
		      <option value="" disabled selected>Choose your Gender</option>
		      <option value="male">Male</option>
		      <option value="female">Female</option>
		    </select>
		  </div>

		<div class="input-field col s6">
          <input placeholder="Phone" name="phone" maxlength="10" type="text" class="validate">
        </div>

        <div class="input-field col s6">
          <input placeholder="Mobile" name="mobile" maxlength="10" type="text" class="validate" maxlength="10" minlength="10">
        </div>

        <div class="input-field col s6">
          <input placeholder="Income" name="income"  type="text" class="validate">
        </div>

        <div class="input-field col s6">
          <input type="text" class="datepicker" placeholder="Date Of Birth" name="dob">
        </div>

         <div class="input-field col s6">
          <input type="text" class="datepicker" placeholder="Time of Residency" name="timeofresidency">
        </div>

        <div class="input-field col s6">
          <input placeholder="State" name="state" type="text" class="validate">
        </div>

        <div class="input-field col s6">
          <input placeholder="City" name="city" type="text" class="validate">
        </div>

        <div class="input-field col s6">
          <input placeholder="Zipcode" name="zipcode" type="text" class="validate">
        </div>

        <div class="input-field col s6">
          <input placeholder="Address" name="address" type="text" class="validate">
        </div>

     </div>
   </form>
</div>


<script type="text/javascript">
	$(document).ready(function(){
    $('.datepicker').datepicker();
  });
</script>