<div class="row">
	<div class="col s12 m6">
         <embed class="pdfclass" src="<?php echo base_url();?>html/images/doc/<?php echo $tt['pfd_file']; ?>" type="application/pdf" width="100%" height="600px" />
    </div>

    <div class="col s12 m6">

    	 <form class="col s12 edtpdf" id="edtpdffrm" >
      <div class="row">
        <div class="input-field col s12 m12">
          <input placeholder="pfd_file" value="<?php echo $tt['pfd_file']; ?>" name="pfd_file" type="file" class="validate">
        </div>

         <div class="input-field col s12 m12">
          <input placeholder="doc title" name="doc_title" value="<?php echo $tt['doc_title']; ?>" type="text" class="validate">
        </div>

          <div class="input-field col s12 m12">
		    <select name="doc_category">
		      <option value="<?php echo $tt['doc_category']; ?>"  selected><?php echo $tt['doc_category']; ?></option>
		      <option value="html">html</option>
		      <option value="pdf">pdf</option>
		    </select>
		  </div>

		  <div class="input-field col s12 m12">
			<select name="doc_type" class="w100 bsb">
			  <option value="<?php echo $tt['doc_type']; ?>"  selected><?php echo $tt['doc_type']; ?></option>
			<option value="Audio_Recording">Audio Recording</option>
			<option value="Bank_Statements">Bank Statements</option>
			<option value="Cancellation_Letter" >Cancellation Letter</option>
			<option value="Client_Correspondence">Client Correspondence</option>
			<option value="Contract/Agreement">Contract / Agreement</option>
			<option value="Credit_Report">Credit Report</option>
			<option value="Creditor_Correspondence">Creditor Correspondence</option>
			<option value="Custodial_Account_Application">Custodial Account Application</option>
			<option value="General/Misc.">General / Misc.</option>
			<option value="Legal_Document">Legal Document</option>
			<option value="Power_Of_Attorney">Power Of Attorney</option>
			<option value="Settlement_Letter">Settlement Letter</option>
			<option value="Statement">Statement</option>
			<option value="Voided_Check">Voided Check</option>
			</select>
        </div>

          <div class="input-field col s12 m12">
		    <select name="all_file_type">
		      <option value="<?php echo $tt['all_file_type']; ?>" selected><?php echo $tt['all_file_type']; ?></option>
		      <option value="student_loans">student loans</option>
		    </select>
		  </div>

		  <div class="input-field col s12 m12">
		    <select name="all_states" >
		    	 <option value="<?php echo $tt['all_states']; ?>" selected><?php echo $tt['all_states']; ?></option>
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

		<div class="input-field col s12 m12">
			<select  name="share_with">
				 <option value="<?php echo $tt['share_with']; ?>" selected><?php echo $tt['share_with']; ?></option>
				<option value="0">--Everyone--</option>
				<optgroup label="Teams">
					<option value="t_10562">Super Admins</option>
					<option value="Sales">Sales</option>
					<option value="xteam">xteam</option>
				</optgroup>
				<optgroup label="Users">
					<option value="Cannon,Jeff">Cannon, Jeff</option>
					<option value="Goodman,Alexander">Goodman, Alexander</option>
					<option value="Harrison,Eric">Harrison, Eric</option>
					<option value="Harrison,Anthony">Harrison, Anthony</option>
					<option value="Kelly,Jennie">Kelly, Jennie</option>
					<option value="Lee,Devin">Lee, Devin</option>
					<option value="Morris,James">Morris, James</option>
					<option value="Parker,Jacob">Parker, Jacob</option>
					<option value="PayPro,Debt">PayPro, Debt</option>
					<option value="Rashad,Khalil">Rashad, Khalil</option>
					<option value="Reaves,Colin">Reaves, Colin</option>
					<option value="Richardson,Raymond">Richardson, Raymond</option>
					<option value="Smith,Greg">Smith, Greg</option>
					<option value="Vargas,Alex">Vargas, Alex</option>
					<option value="Williams,Samantha">Williams, Samantha</option>
				</optgroup>
			</select>
			<input type="hidden" name="id" value="<?php echo $tt['id']; ?>">
	   </div>
      </div>
      <div class="ppdfbtn">
	   		<a href="#"  class="edttuppdf btn">save file </a>
	   		<a href="#" class="edttuppdf btn">delete file </a>
	   		<a href="#" class="edttuppdf btn">preview document</a>
	   </div>
    </form>


    </div>
</div>






<style type="text/css">
.pdfclass
{
	height: 72vh !important;
}
form#edtpdffrm {
    position:  relative;
    top: 60px;
    background: #e0e0e075; 
}
.ppdfbtn {
    margin-bottom:  30px;
}
a.edttuppdf.btn {
    background: #402059;
}
input.validate {
    border: none !important;
    background: #fefefe !important;
    padding-left: 11px !important;
}
::placeholder
{
	text-transform: capitalize;
}
</style>
