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
			<div class="col s1 m1">
				<div class="left">
                <h4>Category Name</h4>
                <input type="text" name="cat_name" value="">
                  </div>
			</div>

			<div class="col s1 m1">
				<div class="left">
                <h4>Parent Category</h4>
                <select id="parent_id" name="paren_cat" class="">
					<option value="">--Select--</option>
					<?php foreach ($c as $key => $cc) { ?>
					<option value="<?php echo $cc['cat_name']; ?>"><?php echo $cc['cat_name']; ?></option>
					  <?php } ?>
					</select>
            </div>
			</div>

			<div class="col m10 s10">
				<div class="btnboc"><a href="#" class="btn catbrnn">save</a></div>
			</div>

			</form>
		</div>

		<div class="catlist">
				<ul>
					<?php foreach ($c as $key => $cc) { ?>
					<li><a><?php echo $cc['cat_name']; ?></a><br>
						<a href="#" class="parcat"><?php echo $cc['paren_cat']; ?></a></li>

				   <?php } ?>
				</ul>
			</div>

	</div>
</div>