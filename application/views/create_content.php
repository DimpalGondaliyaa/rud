<?php 
$r = $this->db->query("select * from gd_categories ");
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
		        <li><a href="#!" class="add_content"  id="disply"><img class="iconstyle" src="<?php echo base_url() ?>html/images/accept.png">save page</a></li>
		       
		    </div>
		  </nav>

		<div class="row">
			<form name="contentfrm" id="contentfrm">
			<div class="col s1 m1">
				<div class="left">
            <h4>Featured Page</h4>
            <input type="checkbox" name="feature_page" value="1" style="border: none;">
        </div>
			</div>

			<div class="col s2 m2">
				<div class="left ml20">
		            <h4>Title</h4>
		            <input type="text" name="title" id="title" size="40" value="">
                </div>
			</div>

			<div class="col s1 m1">
				<div class="left ml20">
            <h4>Category</h4>
            <select id="cat" name="category">
            	<?php foreach ($t as $key => $c) { ?>
            	<option value="<?php echo $c['cat_name']; ?>"><?php echo $c['cat_name']; ?></option>
            <?php } ?>
                            </select>
        </div>
			</div>

			<div class="col s2 m2">
				<div class="left ml20">
            <h4>Description</h4>
            <input size="50" type="text" name="description" value="">
        </div>
			</div>

			<div class="col s2 m2">
				<div class="left ml20">
            <h4>Shared With</h4>
            <select style="width:160px; height: 100px;" multiple="multiple" size="9" name="share_with[]" id="sharedwith">
            	<option value="0">--Everyone--</option>
            	<optgroup label="Teams">
            		<option value="Super Admins">Super Admins</option>
            		<option value="Sales">Sales</option>
            		<option value="gggg">gggg</option></optgroup>
            		<optgroup label="Users"><option value="Anderson, Richard">Anderson, Richard</option>
            			<option value="Cannon, Jeff">Cannon, Jeff</option><option value="Goodman, Alexander">Goodman, Alexander</option><option value="Goodman, Alex">Goodman, Alex</option><option value="Harrison, Anthony">Harrison, Anthony</option><option value="Lee, Devin">Lee, Devin</option><option value="Morris, James">Morris, James</option><option value="PayPro, Debt">PayPro, Debt</option><option value="Richardson, Raymond">Richardson, Raymond</option><option value="Smith, Greg">Smith, Greg</option><option value="Vargas, Alex">Vargas, Alex</option><option value="Williams, Samantha">Williams, Samantha</option></optgroup></select>        </div>
			</div>

			</form>
		</div>	
	</div>
</div>

<style type="text/css">
	.main-menu
	{
		height: 100vh;
	}
</style>