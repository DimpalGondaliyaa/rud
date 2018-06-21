<div class="main-box">
	<div class="cmdtitle">
		<a href="<?php echo base_url(); ?>Files">Files</a> > <a href="<?php echo base_url(); ?>Servers">FTP Servers</a>
	</div>

	<div class="main-menu row">
		  <nav class="contactnav">
		    <div class="nav-wrapper connavwapp">
		      <ul id="nav-mobile" class="hide-on-med-and-down">
		        <li><a href="#!"><img class="iconstyle" src="<?php echo base_url() ?>html/images/accept.png">save connection</a></li>
		    </div>
		  </nav>


		  <div class="col s12 m4">
		  	<div class="left w30">
        <h2 class="title">Add / Edit Server</h2>
        <div id="generalform">
            <form name="servers" action="" method="post">
                <input id="saveToken" type="hidden" name="saveToken" value="46b59d7a49f80fca96686a78e3902b63b2b5baec">                <input type="hidden" name="saveType" id="saveType" value="create">                <div class="left">
                    <h3>Server Name</h3>
                    <input name="ftpname" size="35" id="ftpname" type="text" value="">
                    <p class="notation">Title / Alias</p>
                    <h3>Absolute File Path</h3>
                    <input type="text" size="35" name="abspath" id="abspath" value="">
                    <p class="notation">e.g. http://www.domain.com/upload/</p>
                    <h3>Host or IP</h3>
                    <input name="host" size="35" id="host" type="text" value="">
                    <p class="notation">e.g. ftp.domain.com or 111.111.111.111</p>
                    <h3>Username</h3>
                    <input name="username" size="35" id="username" type="text" value="">
                    <h3>Password</h3>
                    <input name="password" size="35" id="password" type="password" value="">
                    <h3>Directory Path</h3>
                    <input name="ftpdir" size="35" id="ftpdir" type="text" value="">
                    <p class="notation">e.g. httpdocs/upload/</p>
                    <div style="padding-bottom:10px;"></div>                    <p><a href="#null" id="testconn" class="editlink">Test Connection</a></p>
                    <div style="padding-bottom:10px;"></div>                    <div class="f14 strong" id="msg"></div>
                </div>
            </form>
        </div>
    </div>
		  </div>

		  <div class="col s12 m8">
		  	 <h2 class="title">Existing Servers</h2>
		  	 <h5>You do not have any FTP servers setup</h5>
		  </div>
	</div>
</div>