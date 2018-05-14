<style type="text/css">
.modal .modal-content {
    padding: 24px;
    height: 400px;
}
</style>


<div class="row">
  <h4 style="text-transform: capitalize;text-align: center; font-size: 20px;">edit your post</h4>
    <form class="col s12" id="updateCategory" name="updateCategory" method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="input-field col s12 m12">
          <input placeholder="Edit Your Category Name" id="category_name" name="category_name" type="text" value="<?php echo $category_name; ?>" class="validate">
         </div>

         <div class="input-field col s12 m12">
          <p>
            <label>
              <input name="cat_status" type="radio" <?php if($cat_status==1){ ?> checked <?php } ?> value="1" />
              <span>Active</span>
            </label>
            &nbsp;&nbsp;
            <label>
              <input name="cat_status" type="radio" <?php if($cat_status==0){ ?> checked <?php } ?> value="0" />
              <span>De-Active</span>
            </label>
          </p>
         </div>

         <div class="input-field col s12 m4">
          <img src="<?php echo base_url() ?>html/images/categories/<?php echo $cat_photo;?>" class="responsive-img" width="100">
           <input type="file" name="up_cat_photo" id="cat_photoo" value="<?php echo $cat_photo;?>" style="display:none;">
           <button type="button" class="btn bnt-flat btn-audio" onclick="$('#cat_photoo').click();"><i class="fas fa-file-image"></i> Category Image</button>
         </div>
       
        <input type="hidden" name="cat_id" value="<?php echo $cat_id; ?>">
      </div>
     
    </form>
  </div>
        

<script type="text/javascript">
  $(document).ready(function(){
    $('select').formSelect();
  });
       
</script>