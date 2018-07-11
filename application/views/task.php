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


		  <div class="col s12 m3">
		  	<div class="leftt ">
        <a class="btn tastbtn">create new task</a>
        <div id="generalform">
            <form name="servers" action="" method="post">
                <input id="saveToken" type="hidden" name="saveToken" value="46b59d7a49f80fca96686a78e3902b63b2b5baec">                <input type="hidden" name="saveType" id="saveType" value="create">                <div class="leftt">
                    <h3>CREATED DATE</h3>
                    <input type="text" class="datepicker">
                    <h3>DUE DATE</h3>
                   <input type="text" class="datepicker">
                    <h3>COMPLETED DATE</h3>
                    <input type="text" class="datepicker">
                    <h3>CONTACT STATUS</h3>
                    <select name="nn" >
                        <option value="Lead : Follow Up">Lead : Follow Up</option>
                        <option value="Lead : New Lead">Lead : New Lead</option>
                        <option value="Lead : VM 2">Lead : VM 2</option>
                        <option value="Lead : VM 3">Lead : VM 3</option>
                        <option value="Lead : Docs Out">Lead : Docs Out</option>
                        <option value="Lead : VM 1">Lead : VM 1</option>
                        <option value="Lead : Returned File">Lead : Returned File</option>
                        <option value="Lead : Do Not Call">Lead : Do Not Call</option>
                    </select>
                    <h3>Completion Status</h3>
                     <select name="nn" >
                        <option value="all task">all task</option>
                        <option value="Completed">Completed</option>
                        <option value="Incomplete">Incomplete</option>
                        <option value="Overdue">Overdue</option>
                    </select>
                     <h3>TASK TYPE</h3>
                     <select name="nn" >
                        <option value="14600-Returned Payment">14600-Returned Payment</option>
                        <option value="14597-Submit to DOE">14597-Submit to DOE</option>
                    </select>

                     <h3>ASSIGNED TO</h3>
                     <select name="nn" >
                      <option class="search-choice"><span>Vargas, Alex</span><a class="search-choice-close" data-option-array-index="11"></a></option><option class="search-choice"><span>Cannon, Jeff</span><a class="search-choice-close" data-option-array-index="3"></a></option><option class="search-choice"><span>Anderson, Richard</span><a class="search-choice-close" data-option-array-index="2"></a></option><option class="search-choice"><span>Goodman, Alex</span><a class="search-choice-close" data-option-array-index="4"></a></option><option class="search-field"><input type="text" value="search users" class="" autocomplete="off" style="width: 25px;"></option>
                    </select>

                    </select>
                    <h3>ASSIGNED TEAM</h3>
                     <select name="nn" >
                        <option value="Super Admins">Super Admins</option>
                        <option value="Sales">Sales</option>
                    </select>

                     <h3>CREATED BY</h3>
                     <select name="nn" >
                        <option value="Super Admins">Alex Goodman</option>
                        <option value="Alex Vargas">Alex Vargas</option>
                    </select>
                    
                </div>
            </form>
        </div>
    </div>
		  </div>

		  <div class="col s12 m8">
		  	 <h5>Incomplete Tasks 0</h5>
             <h2 class="title">There are no results. Adjust your filters on the left panel.</h2>
		  	 
		  </div>
	</div>
</div>