 <div class="row">
    <form class="col s12" id="usereg">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="f_name" name="f_name" type="text" class="validate">
        </div>

         <div class="input-field col s6">
          <input placeholder="l_name" name="l_name" maxlength="10" type="text" class="validate">
        </div>

        <div class="input-field col s6">
          <input placeholder="u_email" name="u_email" type="text" class="validate">
        </div>

        <div class="input-field col s6">
          <input placeholder="passwords" name="passwords" type="text" class="validate">
        </div>

          <div class="input-field col s6">
		    <select name="gender">
		      <option value="" disabled selected>Choose your gender</option>
		      <option value="male">male</option>
		      <option value="female">female</option>
		    </select>
		  </div>

		<div class="input-field col s6">
          <input placeholder="phone" name="phone" maxlength="10" type="text" class="validate">
        </div>

        <div class="input-field col s6">
          <input placeholder="mobile" name="mobile" maxlength="10" type="text" class="validate">
        </div>

        <div class="input-field col s6">
          <input placeholder="income" name="income"  type="text" class="validate">
        </div>

        <div class="input-field col s6">
          <input type="text" class="datepicker" placeholder="bod" name="dob">
        </div>

         <div class="input-field col s6">
          <input type="text" class="datepicker" placeholder="timeofresidency" name="timeofresidency">
        </div>

        <div class="input-field col s6">
          <input placeholder="state" name="state" type="text" class="validate">
        </div>

        <div class="input-field col s6">
          <input placeholder="city" name="city" type="text" class="validate">
        </div>

        <div class="input-field col s6">
          <input placeholder="zipcode" name="zipcode" type="text" class="validate">
        </div>

        <div class="input-field col s6">
          <input placeholder="address" name="address" type="text" class="validate">
        </div>

     </div>
   </form>
</div>


<script type="text/javascript">
	$(document).ready(function(){
    $('.datepicker').datepicker();
  });
</script>