<?php 
$y = $this->db->query("select * from gd_categories");
$c = $y->result_array();
?>

<div class="main-box">
	<div class="cmdtitle">
		<a href="<?php echo base_url(); ?>Guidelines ">Guidelines </a>
	</div>
	<div class="main-menu">

		<div class="Guidelines-title">Guidelines Categories</div>


		<div class="gbox">
			<form id="catfrm">
				<input type="hidden" name="id" value="<?= $n['id']; ?>">
			<div class="col s1 m1">
				<div class="left">
                <h4>Category Name</h4>
                <input type="text"44 name="cat_name" value="<?= $n['cat_name']; ?>">
                  </div>
			</div>

			<div class="col s1 m1">
				<div class="left">
                <h4>Parent Category</h4>
                <select id="parent_id" name="paren_cat" class="">
					<option selected="true" value="<?= $n['paren_cat']; ?>"><?= $n['paren_cat']; ?></option>
					<?php foreach ($c as $key => $cc) { ?>
					<option value="<?php echo $cc['cat_name']; ?>"><?php echo $cc['cat_name']; ?></option>
					  <?php } ?>
					</select>
            </div>
			</div>

			<div class="col m10 s10">
				<div class="btnboc"><a href="#" class="btn <?php if($n['id']=="") { ?>catbrnn<?php } else{ ?>edtcatbtn <?php } ?>">save</a>
				<?php if($n['id']=="") { ?>
				
				<?php }else { ?>
					<a href="#" data-id="<?= $n['id']; ?>" class="btndelete btn">delete</a>
				<?php } ?></div>
			</div>

			</form>
		</div>

		<div class="catlist">
				<ul>
					<?php foreach ($c as $key => $cc) { ?>
					<li><a href="<?= base_url(); ?>Gd_Categories/edtGd_Categories/<?php echo $cc['id']; ?>"><?php echo $cc['cat_name']; ?></a><br>
						<a href="#" class="parcat"><?php echo $cc['paren_cat']; ?></a></li>
				   <?php } ?>
				</ul>
			</div>

	</div>
</div>