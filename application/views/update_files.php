<form class="col s12" id="edtfilefrm">
  <div class="row">

  	  <div class="input-field col s6 m3">
	    <select name="file_type">
	      <option value="<?php echo $file_type; ?>"  selected><?php echo $file_type; ?></option>
	      <option value="document">document</option>
	      <option value="image">image</option>
	      <option value="misc">misc</option>
	      <option value="video">video</option>
	    </select>
    </div>

    <div class="input-field col s6 m3">
      <input placeholder="file" name="file" type="file" class="validate" value="<?php echo $file; ?>">
    </div>

     <div class="input-field col s6 m3">
      <input placeholder="file name" name="file_name" type="text" class="validate" value="<?php echo $file_name; ?>">
    </div>

    <input placeholder="file name" name="id" type="hidden" class="validate" value="<?php echo $id; ?>">

  <!--   <a class="waves-effect waves-light btn edtdatabtn">Save</a> -->

   </div>
</form>



<script type="text/javascript">
$(document).ready(function(){
$('select').formSelect();
});
</script>
