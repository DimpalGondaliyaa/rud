<?php 
$r = $this->db->query("select * from content WHERE feature_page='1'");
$t= $r->result_array();

?>

<div class="main-box">
	<div class="cmdtitle">
		<a href="<?php echo base_url(); ?>Guidelines">Guidelines</a>
	</div>

	<div class="main-menu">

		 <nav class="contactnav">
		    <div class="nav-wrapper connavwapp">
		      <ul id="nav-mobile" class="hide-on-med-and-down">
		        <li><a href="<?= base_url(); ?>Create_content" id="disply"><img class="iconstyle" src="<?php echo base_url() ?>html/images/add.png">Create Content</a></li>
		        <li><a href="<?php echo base_url(); ?>Gd_Categories"><img class="iconstyle" src="<?php echo base_url() ?>html/images/application_side_tree.png">Categories</a></li>
		    </div>
		  </nav>

		<div class="row">
			<div class="col s12 m3 textlab">
				 <label for="first_name">Search content</label>
				  <input  id="first_name" type="text" class="validate">
		    </div>
		    <div class="col s1 m1"></div>
			<div class="col s12 m8 textlab">
				<div class="content">
					Featured Pages
				</div>
<?php foreach ($t as $key => $f) { ?>
	
				<div class="fbox">
				<div class="ftitle"><a href="<?php echo base_url(); ?>Create_content/edit_content/<?php echo $f['id']; ?>"><?php  echo  $f['title']; ?></a></div>
				<div class="fcontent"><?php echo  $f['description']; ?></div>
			    </div>

<?php } ?>

			</div>
		</div>	
	</div>
</div>

<style type="text/css">
	.main-menu
	{
		height: 100vh;
	}
</style>