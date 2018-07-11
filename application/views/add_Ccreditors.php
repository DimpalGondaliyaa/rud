<?php 
echo $ttt['id'];
?>
<div class="main-box">
	<div class="cmdtitle">
		<a  href="<?php echo base_url(); ?>Ccreditors">Ccreditors</a> > <a href="<?php echo base_url(); ?>Add_Ccreditors">Add Creditors</a>
	</div>

	<div class="main-menu row">

		 <nav class="contactnav">
		    <div class="nav-wrapper connavwapp">
		      <ul id="nav-mobile" class="hide-on-med-and-down" style="position: relative;left: 5px;}">
		        <li>
		        	<?php if ($ttt['id']=="") { ?>
		        	<a class="addcadi" href="#!"><img class="iconstyle" src="<?php echo base_url() ?>html/images/accept.png">save Creditors</a></li>
		        <?php }else{ ?>
		        	<a class="editcadi" href="#!"><img class="iconstyle" src="<?php echo base_url() ?>html/images/accept.png">save Creditors</a></li>
		        	<li><a data-id="<?php echo $ttt['id']; ?>" class="deletecadi" href="#!"><img class="iconstyle" src="<?php echo base_url() ?>html/images/delete.png">delete Creditors</a></li>
		        <?php } ?>
		      </ul>
		    </div>
		  </nav>

		  <div id="addcreditor">
                                    <h2 class="title theme">Add A Creditor</h2>
                <form id="addcredifrm">
                	<input type="hidden" name="id" value="<?= $ttt['id']; ?>" placeholder="">
                <div class="col s2 m2">
                                    <label>Active Creditor</label></div>
                                    <div class="col s10 m10">
                    <select id="is_active" name="status" class="">
<option value="<?php echo $ttt['status']; ?>" selected><?php echo $ttt['status']; ?></option><option value="1">Active</option>
<option value="0">Inactive</option>

</select></div>
               
 <div class="col s2 m2">
                <label>Creditor Name</label></div>
                  <div class="col s10 m10">
                <input type="text" name="name" id="company" value="<?php echo $ttt['name']; ?>">
                </div>

 <div class="col s2 m2">
                <label>First Name</label></div>
                  <div class="col s10 m10">
                <input type="text" name="fname" id="firstname" value="<?php echo $ttt['fname']; ?>">
                </div>

 <div class="col s2 m2">
                <label>Last Name</label></div>
                  <div class="col s10 m10">
                <input type="text" name="lname" id="lastname" value="<?php echo $ttt['lname']; ?>">
                <div class="clear"></div></div>

 <div class="col s2 m2">
                <label>Address 1</label></div>
                  <div class="col s10 m10">
                <input type="text" name="address1" id="address1" value="<?php echo $ttt['address1']; ?>">
                <div class="clear"></div></div>

 <div class="col s2 m2">
                <label>Address 2</label></div>
                  <div class="col s10 m10">
                <input type="text" name="address2" id="address2" value="<?php echo $ttt['address2']; ?>">
                <div class="clear"></div></div>

 <div class="col s2 m2">
                <label>City</label></div>
                  <div class="col s10 m10">
                <input type="text" name="city" id="city" value="<?php echo $ttt['city']; ?>">
                <div class="clear"></div></div>

 <div class="col s2 m2">
                <label>State</label></div>
                  <div class="col s10 m10">
                <select id="state" name="state" class="">
<option value="<?php echo $ttt['state']; ?>" selected><?php echo $ttt['state']; ?></option><option value="AA">AA-Armed Forces Americas</option>
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
                <div class="clear"></div></div>

 <div class="col s2 m2">
                <label>Zip</label></div>
                  <div class="col s10 m10">
                <input type="text" name="zip" id="zip" value="<?php echo $ttt['zip']; ?>" size="7">
                <div class="clear"></div></div>

 <div class="col s2 m2">
                <label>Phone</label></div>
                  <div class="col s10 m10">
                <input type="text" name="phone" id="phone" value="<?php echo $ttt['phone']; ?>">
                <div class="clear"></div></div>


 <div class="col s2 m2">
                <label>Phone 2</label></div>
                  <div class="col s10 m10">
                <input type="text" name="phone2" id="phone2" value="<?php echo $ttt['phone2']; ?>">
                <div class="clear"></div></div>

 <div class="col s2 m2">
                <label>Fax</label></div>
                  <div class="col s10 m10">
                <input type="text" name="fax" id="fax" value="<?php echo $ttt['fax']; ?>">
                <div class="clear"></div></div>

 <div class="col s2 m2">
                <label>Email</label></div>
                  <div class="col s10 m10">
                <input type="text" name="email" id="email" value="<?php echo $ttt['email']; ?>">
                <div class="clear"></div></div>

 <div class="col s2 m2">
                <label>Url</label></div>
                  <div class="col s10 m10">
                <input type="text" name="url" id="weburl" value="<?php echo $ttt['url']; ?>">
                <div class="clear"></div></div>

                </form>


            </div>
	</div>
</div>