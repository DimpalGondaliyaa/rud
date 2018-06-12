<div class="main-box">
	<div class="cmdtitle">
		<a href="<?php echo base_url(); ?>Docs">document creator</a>><a href="<?php echo base_url(); ?>Html_document">create new document</a>
	</div>

	<div class="main-menu">

		  <nav class="contactnav">
		    <div class="nav-wrapper connavwapp">
		      <ul id="nav-mobile" class="hide-on-med-and-down">
		        <li><a href="<?php echo base_url(); ?>Add_Contact"><img class="iconstyle" src="<?php echo base_url() ?>html/images/accept.png">save document</a></li>
		        <li><a href="<?php echo base_url(); ?>Add_Contact"><img class="iconstyle" src="<?php echo base_url() ?>html/images/eye.png">preview document</a></li>
		        <li><a href="<?php echo base_url(); ?>Add_Contact"><img class="iconstyle" src="<?php echo base_url() ?>html/images/bug.png">debug html</a></li>
		    </div>
		  </nav>

		<div class="row">
			 <div class="input-field col s6 m3">
		          <input placeholder="Placeholder" id="first_name" type="text" class="validate">
		          <label for="first_name">First Name</label>
		        </div>
		    <div class="col s1 m1"></div>
			<div class="col s12 m8 textlab">
					<head>
					  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.3.2/ckeditor.js" ></script>
					</head>

					<body>
						<div class="testtitle">template body</div>
					<textarea cols="80" rows="10" id="ckeExample">
					  This is not
					</textarea>
					  <input type="button" onclick="javascript:fnConsolePrint();" value="Console" />
					</body>
			</div>
		</div>	
	</div>
</div>
