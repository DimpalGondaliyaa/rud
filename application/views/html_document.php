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
			 <div class="input-field col s6 m3 boxxx">
			          <input placeholder="" id="document_title" type="text" class="validate">
			          <label for="document_title">document title</label>
			      
				      <div class="input-field  boxxx">
			        	    <select>
						      <option value="" disabled selected>Choose your option</option>
						      <option value="1">Option 1</option>
						      <option value="2">Option 2</option>
						      <option value="3">Option 3</option>
						    </select>
						    <label>Category</label>
				      </div>

				       <div class="input-field  boxxx">
			        	    <select>
						      <option value="" disabled selected>Choose your option</option>
						      <option value="1">Option 1</option>
						      <option value="2">Option 2</option>
						      <option value="3">Option 3</option>
						    </select>
						    <label>Document Type</label>
				      </div>

				      <div class="input-field  boxxx">
				          <input placeholder="" id="document_title" type="text" class="validate">
				          <label for="document_title">CSS File URL</label>
				      </div>

				       <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> All File Type</span>
					      </label>
					    </p>

				    <div class="input-field  boxxx">
				      <select id="file_types" name="file_types[]" class="" size="5" multiple="multiple">
						<option value="12">Student Loans</option>
						</select>
					</div>	

					    <p>
					      <label>
					        <input type="checkbox" />
					        <span class="checklab"> All States</span>
					      </label>
					    </p>

				    <div class="input-field  boxxx">
				     <select id="states" name="states[]" class="" size="5" multiple="multiple">
						<option value="AA">AA-Armed Forces Americas</option>
						<option value="AE">AE-Armed Forces Other</option>
						<option value="AL">Alabama</option>
						<option value="AK">Alaska</option>
						<option value="AS">American Samoa</option>
						<option value="AP">AP-Armed Forces Pacific</option>
						<option value="AZ">Arizona</option>
						<option value="AR">Arkansas</option>
						<option value="NSW">AU-New South Wales</option>
						<option value="ANT">AU-Northern Territory</option>
						<option value="QLD">AU-Queensland</option>
						<option value="SA">AU-South Australia</option>
						<option value="TAS">AU-Tasmania</option>
						<option value="VIC">AU-Victoria</option>
						<option value="WAU">AU-Western Australia</option>
						<option value="CA">California</option>
						<option value="AB">Canada-Alberta</option>
						<option value="BC">Canada-British Columbia</option>
						<option value="MB">Canada-Manitoba</option>
						<option value="NB">Canada-New Brunswick</option>
						<option value="NL">Canada-Newfoundland</option>
						<option value="NT">Canada-Northwest Territories</option>
						<option value="NS">Canada-Nova Scotia</option>
						<option value="NU">Canada-Nunavet</option>
						<option value="ON">Canada-Ontario</option>
						<option value="PE">Canada-Prince Edward Island</option>
						<option value="QC">Canada-Quebec</option>
						<option value="SK">Canada-Saskatchewan</option>
						<option value="YT">Canada-Yukon</option>
						<option value="CO">Colorado</option>
						<option value="CT">Connecticut</option>
						<option value="DE">Delaware</option>
						<option value="DC">District of Columbia</option>
						<option value="FL">Florida</option>
						<option value="GA">Georgia</option>
						<option value="GU">Guam</option>
						<option value="HI">Hawaii</option>
						<option value="ID">Idaho</option>
						<option value="IL">Illinois</option>
						<option value="IN">Indiana</option>
						<option value="IA">Iowa</option>
						<option value="KS">Kansas</option>
						<option value="KY">Kentucky</option>
						<option value="LA">Louisiana</option>
						<option value="ME">Maine</option>
						<option value="MD">Maryland</option>
						<option value="MA">Massachusetts</option>
						<option value="MI">Michigan</option>
						<option value="MN">Minnesota</option>
						<option value="MS">Mississippi</option>
						<option value="MO">Missouri</option>
						<option value="MT">Montana</option>
						<option value="NE">Nebraska</option>
						<option value="NV">Nevada</option>
						<option value="NH">New Hampshire</option>
						<option value="NJ">New Jersey</option>
						<option value="NM">New Mexico</option>
						<option value="NY">New York</option>
						<option value="NC">North Carolina</option>
						<option value="ND">North Dakota</option>
						<option value="OH">Ohio</option>
						<option value="OK">Oklahoma</option>
						<option value="OR">Oregon</option>
						<option value="PA">Pennsylvania</option>
						<option value="PR">Puerto Rico</option>
						<option value="RI">Rhode Island</option>
						<option value="SC">South Carolina</option>
						<option value="SD">South Dakota</option>
						<option value="TN">Tennessee</option>
						<option value="TX">Texas</option>
						<option value="VI">U.S. Virgin Islands</option>
						<option value="UT">Utah</option>
						<option value="VT">Vermont</option>
						<option value="VA">Virginia</option>
						<option value="WA">Washington</option>
						<option value="WV">West Virginia</option>
						<option value="WI">Wisconsin</option>
						<option value="WY">Wyoming</option>
						</select>
					</div>	

					 <div class="input-field  boxxx">
			        	 <select style="width:160px;" multiple="multiple" size="7" name="sharedwith[]" id="sharedwith"><option value="0">--Everyone--</option><optgroup label="Teams"><option value="t_10562">Super Admins</option><option value="t_10568">Sales</option><option value="t_10807">xteam</option></optgroup><optgroup label="Users"><option value="3204459">, </option><option value="3177071">Cannon, Jeff</option><option value="3166835">Goodman, Alexander</option><option value="3187787">Harrison, Eric</option><option value="3166850">Harrison, Anthony</option><option value="3177239">Kelly, Jennie</option><option value="3167522">Lee, Devin</option><option value="3170984">Morris, James</option><option value="3187583">Parker, Jacob</option><option value="3133547">PayPro, Debt</option><option value="3177254">Rashad, Khalil</option><option value="3184343">Reaves, Colin</option><option value="3193601">Richardson, Raymond</option><option value="3177659">Smith, Greg</option><option value="3142430">Vargas, Alex</option><option value="3177203">Williams, Samantha</option></optgroup></select>
						    <label>Document Type</label>
				      </div>

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
