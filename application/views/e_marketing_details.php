<div class="main-box">
	<div class="cmdtitle">
		<a href="<?php echo base_url(); ?>E_marketing">Email Marketing</a>
	</div>

	<div class="main-menu row">
		  <nav class="contactnav">
		    <div class="nav-wrapper connavwapp">
		      <ul id="nav-mobile" class="hide-on-med-and-down">
		        <li><a href="#!"><img class="iconstyle" src="<?php echo base_url() ?>html/images/accept.png">save design</a></li>
		        <li><a href="#!"><img class="iconstyle" src="<?php echo base_url() ?>html/images/accept.png">save as new</a></li>
		        <li><a href="#!"><img class="iconstyle" src="<?php echo base_url() ?>html/images/cross.png">delete design</a></li>
		      </ul>  
		    </div>
		  </nav>

		  <div class="col s12 m6">
		  	<div class="input-field col s12 m3">
	          <input placeholder="ClixSign Introduction" value="ClixSign Introduction" type="text" class="validate">
	          <label for="Campaign Title:">Campaign Title:</label>
	        </div>

	        <div class="input-field col s12 m3">
	          <input placeholder="Welcome To ClixSign" value="Welcome To ClixSign" type="text" class="validate">
	          <label for="Campaign Title:">Email Subject:</label>
	        </div>

	         <div class="input-field col s12 m3">
			    <select>
			      <option value="" disabled selected>Choose your option</option>
			      <option value="1">Option 1</option>
			      <option value="2">Option 2</option>
			      <option value="3">Option 3</option>
			    </select>
			 </div>

			 <div class="html_laybox col s12 m12">
			 	<div class="htmllaytitle">html layout</div>
			 	<div class="htmlpdf">
			 		<head>
					  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.3.2/ckeditor.js" ></script>
					</head>
					<body>
					<textarea cols="80" rows="10" id="ckeExample">
					  This is not
					</textarea>
					  <input type="button" onclick="javascript:fnConsolePrint();" value="Console" />
					</body>
			 	</div>
			 </div>

			 <div class="col s12 m9">
			 	<div class="htmllaytitle">plain text alternative </div>
			 	<div class="textcon">
			 		<textarea cols="80" rows="50"></textarea>
			 	</div>
			 </div>
		  </div>


		    <div class="col s12 m6 right">
		    	<div class="col s12 m12">
		    	<h5>Shared With</h5>
		    	<select style="width:160px;" multiple="multiple" size="8" name="sharedwith[]" id="sharedwith"><option value="0" selected="selected">--Everyone--</option><optgroup label="Teams"><option value="t_10562">Super Admins</option><option value="t_10568">Sales</option><option value="t_10807">xteam</option></optgroup><optgroup label="Users"><option value="3204459">Canchola, Don</option><option value="3177071">Cannon, Jeff</option><option value="3166835">Goodman, Alexander</option><option value="3187787">Harrison, Eric</option><option value="3166850">Harrison, Anthony</option><option value="3177239">Kelly, Jennie</option><option value="3167522">Lee, Devin</option><option value="3209961">Major, Marcus</option><option value="3170984">Morris, James</option><option value="3187583">Parker, Jacob</option><option value="3133547">PayPro, Debt</option><option value="3177254">Rashad, Khalil</option><option value="3184343">Reaves, Colin</option><option value="3193601">Richardson, Raymond</option><option value="3177659">Smith, Greg</option><option value="3142430">Vargas, Alex</option><option value="3177203">Williams, Samantha</option></optgroup></select>
		       </div>

		       <div class="col s12 m12">
		       	<h5>Add Attachments</h5>
		       	<input type="text" name="">
		       </div>

		       <div class="col s12 m12">
		       	<div id="moreoptions">
                    <strong>Replaceables:</strong><br>
                    {FIRSTNAME}<br>
                    {LASTNAME}<br>
                    {FULLNAME}<br>
                    {EMAIL}<br>
                    {SYSTEMUSER_SIGNATURE}<br>
                    {SYSTEMUSER_FULLNAME}<br>
                    {SYSTEMUSER_EMAIL}<br>
                    {SYSTEMUSER_PHONE}<br>
                    {SYSTEMUSER_FAX}<br>
                    It is best to provide both an HTML and non-HTML version of the email.<br><br>
                    Styles within the email should all be 'inline'. Do not use references to css classes or ids. Instead use style= tags in the elements.

                    See all available tags at http://support.debtpaypro.com                </div>
		       </div>
		    </div>






	</div>
</div>
		
