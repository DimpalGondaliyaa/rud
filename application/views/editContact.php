
<div class="main-box">
 <div class="main-menu">
 	<div class="row">
 		<form name="fromContact" id="fromContact" method="POST">
 	<div class="edit-contactBox">
 			<div class="leftSide-container">
 				<div class="col s12 m3">
 				<div class="left-top">
 					<div>
 						<select id="whatform" name="whatform" class="" style="display: none;">
							<option value="">--Select--</option><option value="11855" selected="selected">In-Take Form</option>
						</select>
 					</div>
 					<?php if($get['c_id']>0){?>
 					<div class="action-box">
 						<ul class="iconfarm">
                			<li><a data-id="<?php echo $get['c_id']; ?>" class="addNote" href="#!"><i class="fas fa-sticky-note"></i></a></li>
                			<li><a href="#!"><i class="fas fa-envelope"></i></a></li>
                			<li><a href="#!"><i class="fas fa-phone"></i></a></li>
                			<li><a data-id="<?php echo $get['c_id']; ?>" class="addEvnt" href="#!"><i class="fas fa-calendar"></i></a></li>
                			<li><a href="#!"><i class="fas fa-tasks"></i></a></li>
                			<li><a href="#!"><i class="fas fa-upload"></i></a></li>
                			<li><a data-id="<?php echo $get['c_id']; ?>" class="changeStatus" href="#!"><i class="fas fa-th"></i></a></li>
                		</ul>
 					</div>
 				<?php } else { } ?>
 				</div>
 				<div class="bottom-box">
 					<div>
 						<ul class="settlistthin">
 							<li data-id="tab_0" class="noicon active tb"><a href="#!" class="tab_0">Contact Info</a></li>
 							<li data-id="tab_1" class="noicon tb"><a href="#!" class="tab_1">Address Info</a></li>
 							<li data-id="tab_2" class="noicon tb"><a href="#!" class="tab_2">Employer</a></li>
 							<li data-id="tab_3" class="noicon tb"><a href="#!" class="tab_3">Additional Info</a></li>
 							<li data-id="tab_4" class="noicon tb"><a href="#!" class="tab_4">Reference #1</a></li>
 							<li data-id="tab_5" class="noicon tb"><a href="#!" class="tab_5">Reference #2</a></li>
				            <div class="row valign-wrapper btn-box">
				                <div class="col s12 m8">
				                  <button type="button" name="lowsave"  class="btn green btn-savensty" id="savebtn">Save and Exit</button>
				                  <button type="button" name="savenstay" onclick="$('#saveBtn').click();" class="btn green btn-save" id="savestay">Save</button>
				                </div>
				                <div class="col s12 m4">
				                    <a class="txt-btn" href="#" onclick="updateview();">Switch Layout</a>
				                </div>
					        </div>
					    </ul>
 					</div>
 				</div>
 			</div>
 		</div>
 		<div class="rightSide-container">
 			<div class="col s12 m9">
 				<div class="row no-gutter">
                    <div id="contact-details">
                        <div class="col s12 m7 left ttl">
                        	<input type="hidden" name="c_id" value="<?php echo $get['c_id']; ?>">
                            <p><span class="ttl-g" style=" font-size: 20px !important;letter-spacing: 0 !important;font-family: sans-serif;"><?php echo $get['f_name'].''.$get['l_name']; ?> > </span><span class="infobox" id="infobox">Contact Info</span></p>
                            <p style="font-size: 12px;line-height: 0;letter-spacing: 0;font-family: sans-serif;">Lead > Follow Up</p>
                        </div>
                        <div class="col s12 m5 right-top-box">
                        <div class="statsbar">
                            <ul class="tBox">
                                <div class="col s4 m2" style="border-right: 1px solid #0000002e;height: 40px;">
                                    <p>public</p>
                                    <p style="resize: horizontal;right: -25px;top: -15px;"><input type="checkbox" name="public" value="1" ></p>
                                </div>
                                <div class="col s4 m4" style="border-right: 1px solid #0000002e;height: 40px;">
                                    <p class="title">Company</p>
                                    <p class="stat"><select id="company_id" name="company_id" class="">
                                    <option value="">--Select--</option>
									<option value="22493" selected="selected">United Students Of America</option>
									</select>
									</p>
								</div>
                                <div class="col s4 m4">
                                    <p class="title">Assigned To</p>
                                    <p class="stat" id="assigned">
                                    <select id="assigned_to" name="assigned_to" class="">
										<option value="">--Select--</option><option value="-1">--UNASSIGN--</option>
										<option value="3166835" selected="selected">Alexander Goodman</option>
									</select>
									</p>
                                </div>
							</ul>
                        </div>

			 			</div>
			 		</div>
			 	</div>
			 	<div class="from-container">
			 		<div class="form-top-box"></div>
			 		<div class="form-Box">
			 			<div class="frmBox activeBox" id="tab_0">
			 				<div class="top-header center">
						 		<div class="col s4 m2"></div>
						 		<div class="col s6 m5 ttl-hd" style="text-align: left;">Applicant</div>
						 		<div class="col s6 m5 ttl-hd" style="text-align: left;">Co-Applicant</div>
						 	</div>

			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">First Name</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="f_name" value="<?php echo $get['f_name']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="c_f_name"  value="<?php echo $get['c_f_name']; ?>">
			 				</div>
			 			  </div>
			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">Middle Name</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="middle_name" value="">
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="c_middle_name" value="">
			 				</div>
			 			  </div>
			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">Last Name</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="l_name" value="<?php echo $get['l_name']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="c_l_name" value="<?php echo $get['c_l_name']; ?>">
			 				</div>
			 			  </div>
			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">Maiden Name</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="maiden_name" value="<?php echo $get['maiden_name']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="c_maiden_name"  value="<?php echo $get['c_maiden_name']; ?>">
			 				</div>
			 			  </div>
			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">SSN</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="ssn" value="<?php echo $get['ssn']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="c_ssn"  value="<?php echo $get['c_ssn']; ?>">
			 				</div>
			 			  </div>
			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">Date Of Birth</span>
			 				</div>
			 				<div class="col s5 m5" style="padding: 0px;">
			 					<div class="col s4 m5" style="padding: 0px;width: calc(41% - 15px) !important;">
			 						<select id="month_dob" name="dob_m" class="" style="display: none;">
										<option value="">--Select--</option><option value="01">January</option>
										<option value="02">February</option>
										<option value="03">March</option>
										<option value="04">April</option>
										<option value="05">May</option>
										<option value="06">June</option>
										<option value="07">July</option>
										<option value="08" selected="selected">August</option>
										<option value="09">September</option>
										<option value="10">October</option>
										<option value="11">November</option>
										<option value="12">December</option>
									</select>
			 					</div>
			 					<div class="col s4 m2">
			 						<input type="text" name="dob_d" style="width: calc(100% - 27px) !important;margin-top:-1px;height: 13px !important; border: 1px solid #ccc !important;border-radius: 3px !important;position: relative;left: -12.5px;" placeholder="Day" value="14">
			 					</div>
			 					<div class="col s4 m5" style="padding: 0;width: calc(45% - 20px) !important;">
			 						<select id="year_dob" name="dob_y" class="" style="display: none;">
										<option value="">--Select--</option>
										<option value="1900">1900</option>
										<option value="1901">1901</option>
										<option value="1902">1902</option>
										<option value="1903">1903</option>
										<option value="1904">1904</option>
										<option value="1905">1905</option>
										<option value="1906">1906</option>
										<option value="1907">1907</option>
										<option value="1908">1908</option>
										<option value="1909">1909</option>
										<option value="1910">1910</option>
										<option value="1911">1911</option>
										<option value="1912">1912</option>
										<option value="1913">1913</option>
										<option value="1914">1914</option>
										<option value="1915">1915</option>
										<option value="1916">1916</option>
										<option value="1917">1917</option>
										<option value="1918">1918</option>
										<option value="1919">1919</option>
										<option value="1920">1920</option>
										<option value="1921">1921</option>
										<option value="1922">1922</option>
										<option value="1923">1923</option>
										<option value="1924">1924</option>
										<option value="1925">1925</option>
										<option value="1926">1926</option>
										<option value="1927">1927</option>
										<option value="1928">1928</option>
										<option value="1929">1929</option>
										<option value="1930">1930</option>
										<option value="1931">1931</option>
										<option value="1932">1932</option>
										<option value="1933">1933</option>
										<option value="1934">1934</option>
										<option value="1935">1935</option>
										<option value="1936">1936</option>
										<option value="1937">1937</option>
										<option value="1938">1938</option>
										<option value="1939">1939</option>
										<option value="1940">1940</option>
										<option value="1941">1941</option>
										<option value="1942">1942</option>
										<option value="1943">1943</option>
										<option value="1944">1944</option>
										<option value="1945">1945</option>
										<option value="1946">1946</option>
										<option value="1947">1947</option>
										<option value="1948">1948</option>
										<option value="1949">1949</option>
										<option value="1950">1950</option>
										<option value="1951">1951</option>
										<option value="1952">1952</option>
										<option value="1953">1953</option>
										<option value="1954">1954</option>
										<option value="1955">1955</option>
										<option value="1956">1956</option>
										<option value="1957">1957</option>
										<option value="1958">1958</option>
										<option value="1959">1959</option>
										<option value="1960">1960</option>
										<option value="1961" selected="selected">1961</option>
										<option value="1962">1962</option>
										<option value="1963">1963</option>
										<option value="1964">1964</option>
										<option value="1965">1965</option>
										<option value="1966">1966</option>
										<option value="1967">1967</option>
										<option value="1968">1968</option>
										<option value="1969">1969</option>
										<option value="1970">1970</option>
										<option value="1971">1971</option>
										<option value="1972">1972</option>
										<option value="1973">1973</option>
										<option value="1974">1974</option>
										<option value="1975">1975</option>
										<option value="1976">1976</option>
										<option value="1977">1977</option>
										<option value="1978">1978</option>
										<option value="1979">1979</option>
										<option value="1980">1980</option>
										<option value="1981">1981</option>
										<option value="1982">1982</option>
										<option value="1983">1983</option>
										<option value="1984">1984</option>
										<option value="1985">1985</option>
										<option value="1986">1986</option>
										<option value="1987">1987</option>
										<option value="1988">1988</option>
										<option value="1989">1989</option>
										<option value="1990">1990</option>
										<option value="1991">1991</option>
										<option value="1992">1992</option>
										<option value="1993">1993</option>
										<option value="1994">1994</option>
										<option value="1995">1995</option>
										<option value="1996">1996</option>
										<option value="1997">1997</option>
										<option value="1998">1998</option>
										<option value="1999">1999</option>
										<option value="2000">2000</option>
										<option value="2001">2001</option>
										<option value="2002">2002</option>
										<option value="2003">2003</option>
										<option value="2004">2004</option>
										<option value="2005">2005</option>
										<option value="2006">2006</option>
										<option value="2007">2007</option>
										<option value="2008">2008</option>
										<option value="2009">2009</option>
										<option value="2010">2010</option>
										<option value="2011">2011</option>
										<option value="2012">2012</option>
										<option value="2013">2013</option>
										<option value="2014">2014</option>
										<option value="2015">2015</option>
										<option value="2016">2016</option>
										<option value="2017">2017</option>
										<option value="2018">2018</option>
									</select>
			 					</div>
			 					<!-- <input type="text" name="f_name" value=""> -->
			 				</div>
			 				<div class="col s5 m5">
			 					<div class="col s4 m5" style="padding: 0px;width: calc(41% - 15px) !important;width: calc(45% - 10px) !important;margin-left: -15px;">
			 						<select id="month_dob" name="c_dob_m" class="" style="display: none;">
										<option value="">--Select--</option><option value="01">January</option>
										<option value="02">February</option>
										<option value="03">March</option>
										<option value="04">April</option>
										<option value="05">May</option>
										<option value="06">June</option>
										<option value="07">July</option>
										<option value="08" selected="selected">August</option>
										<option value="09">September</option>
										<option value="10">October</option>
										<option value="11">November</option>
										<option value="12">December</option>
									</select>
			 					</div>
			 					<div class="col s4 m2">
			 						<input type="text" name="c_dob_d" style="width: calc(100% - 27px) !important;margin-top:-1px;height: 13px !important; border: 1px solid #ccc !important;border-radius: 3px !important;position: relative;left: -12.5px;" placeholder="Day">
			 					</div>
			 					<div class="col s4 m5" style="padding: 0;width: calc(45% - 20px) !important;">
			 						<select id="year_dob" name="c_dob_y" class="" style="display: none;">
										<option value="">--Select--</option>
										<option value="1900">1900</option>
										<option value="1901">1901</option>
										<option value="1902">1902</option>
										<option value="1903">1903</option>
										<option value="1904">1904</option>
										<option value="1905">1905</option>
										<option value="1906">1906</option>
										<option value="1907">1907</option>
										<option value="1908">1908</option>
										<option value="1909">1909</option>
										<option value="1910">1910</option>
										<option value="1911">1911</option>
										<option value="1912">1912</option>
										<option value="1913">1913</option>
										<option value="1914">1914</option>
										<option value="1915">1915</option>
										<option value="1916">1916</option>
										<option value="1917">1917</option>
										<option value="1918">1918</option>
										<option value="1919">1919</option>
										<option value="1920">1920</option>
										<option value="1921">1921</option>
										<option value="1922">1922</option>
										<option value="1923">1923</option>
										<option value="1924">1924</option>
										<option value="1925">1925</option>
										<option value="1926">1926</option>
										<option value="1927">1927</option>
										<option value="1928">1928</option>
										<option value="1929">1929</option>
										<option value="1930">1930</option>
										<option value="1931">1931</option>
										<option value="1932">1932</option>
										<option value="1933">1933</option>
										<option value="1934">1934</option>
										<option value="1935">1935</option>
										<option value="1936">1936</option>
										<option value="1937">1937</option>
										<option value="1938">1938</option>
										<option value="1939">1939</option>
										<option value="1940">1940</option>
										<option value="1941">1941</option>
										<option value="1942">1942</option>
										<option value="1943">1943</option>
										<option value="1944">1944</option>
										<option value="1945">1945</option>
										<option value="1946">1946</option>
										<option value="1947">1947</option>
										<option value="1948">1948</option>
										<option value="1949">1949</option>
										<option value="1950">1950</option>
										<option value="1951">1951</option>
										<option value="1952">1952</option>
										<option value="1953">1953</option>
										<option value="1954">1954</option>
										<option value="1955">1955</option>
										<option value="1956">1956</option>
										<option value="1957">1957</option>
										<option value="1958">1958</option>
										<option value="1959">1959</option>
										<option value="1960">1960</option>
										<option value="1961" selected="selected">1961</option>
										<option value="1962">1962</option>
										<option value="1963">1963</option>
										<option value="1964">1964</option>
										<option value="1965">1965</option>
										<option value="1966">1966</option>
										<option value="1967">1967</option>
										<option value="1968">1968</option>
										<option value="1969">1969</option>
										<option value="1970">1970</option>
										<option value="1971">1971</option>
										<option value="1972">1972</option>
										<option value="1973">1973</option>
										<option value="1974">1974</option>
										<option value="1975">1975</option>
										<option value="1976">1976</option>
										<option value="1977">1977</option>
										<option value="1978">1978</option>
										<option value="1979">1979</option>
										<option value="1980">1980</option>
										<option value="1981">1981</option>
										<option value="1982">1982</option>
										<option value="1983">1983</option>
										<option value="1984">1984</option>
										<option value="1985">1985</option>
										<option value="1986">1986</option>
										<option value="1987">1987</option>
										<option value="1988">1988</option>
										<option value="1989">1989</option>
										<option value="1990">1990</option>
										<option value="1991">1991</option>
										<option value="1992">1992</option>
										<option value="1993">1993</option>
										<option value="1994">1994</option>
										<option value="1995">1995</option>
										<option value="1996">1996</option>
										<option value="1997">1997</option>
										<option value="1998">1998</option>
										<option value="1999">1999</option>
										<option value="2000">2000</option>
										<option value="2001">2001</option>
										<option value="2002">2002</option>
										<option value="2003">2003</option>
										<option value="2004">2004</option>
										<option value="2005">2005</option>
										<option value="2006">2006</option>
										<option value="2007">2007</option>
										<option value="2008">2008</option>
										<option value="2009">2009</option>
										<option value="2010">2010</option>
										<option value="2011">2011</option>
										<option value="2012">2012</option>
										<option value="2013">2013</option>
										<option value="2014">2014</option>
										<option value="2015">2015</option>
										<option value="2016">2016</option>
										<option value="2017">2017</option>
										<option value="2018">2018</option>
									</select>
			 					</div>
			 				</div>
			 			  </div>

			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">Home Phone</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<span class="prefix"><i class="fas fa-phone"></i></span>
			 					<input type="text" name="phone" value="<?php echo $get['phone']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 					<span class="prefix"><i class="fas fa-phone"></i></span>
			 					<input type="text" name="c_phone"  value="<?php echo $get['c_phone']; ?>">
			 				</div>
			 			  </div>

			 			   <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">Email</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<span class="prefix ml"><i class="fas fa-envelope"></i></span>
			 					<input type="text" name="u_email" value="<?php echo $get['u_email']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 					<span class="prefix ml"><i class="fas fa-envelope"></i></span>
			 					<input type="text" name="c_email"  value="<?php echo $get['c_email']; ?>">
			 				</div>
			 			  </div>

			 			</div>

			 			<!-- Addfress Info -->


			 			<div class="frmBox " id="tab_1">
			 					<div class="top-header center">
						 		<div class="col s4 m2"></div>
						 		<div class="col s6 m5 ttl-hd" style="text-align: left;">Applicant</div>
						 	</div>

			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">Address 1</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="address" value="<?php echo $get['address']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 				</div>
			 			  </div>
			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">Address 1</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="address2" value="<?php echo $get['address2']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 				</div>
			 			  </div>
			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">City</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="city" value="<?php echo $get['city'];?>">
			 				</div>
			 				<div class="col s5 m5">
			 				</div>
			 			  </div>
			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">State</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="state" value="<?php echo $get['state']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 				</div>
			 			  </div>
			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">Zip</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="zipcode" value="<?php echo $get['zipcode']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 				</div>
			 			  </div>
			 			</div>

	<!-- Employer -->
			 			<div class="frmBox" id="tab_2">
			 				<div class="top-header center">
						 		<div class="col s4 m2"></div>
						 		<div class="col s6 m5 ttl-hd" style="text-align: left;">Applicant</div>
						 		<div class="col s6 m5 ttl-hd" style="text-align: left;">Co-Applicant</div>
						 	</div>

			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">Occupation</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="occupation" value="<?php echo $get['occupation']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="c_occupation"  value="<?php echo $get['c_occupation']; ?>">
			 				</div>
			 			  </div>
			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">Employer</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="employer" value="<?php echo $get['employer']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="c_employer" value="<?php echo $get['c_employer']; ?>">
			 				</div>
			 			  </div>
			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">Position</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="position" value="<?php echo $get['position']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="c_position" value="<?php echo $get['position']; ?>">
			 				</div>
			 			  </div>
			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">Length of Employment</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="length_of_employmen" value="<?php echo $get['length_of_employmen']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="c_length_of_employmen"  value="<?php echo $get['length_of_employmen']; ?>">
			 				</div>
			 			  </div>
			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">Employer Address</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="employer_address" value="<?php echo $get['employer_address']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="c_employer_address"  value="<?php echo $get['c_employer_address']; ?>">
			 				</div>
			 			  </div>
			 			   <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">Employer Address 2</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="employer_address2" value="<?php echo $get['employer_address2']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="c_employer_address2"  value="<?php echo $get['c_employer_address2']; ?>">
			 				</div>
			 			  </div>
			 			   <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">Employer City</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="emp_city" value="<?php echo $get['emp_city']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="c_emp_city"  value="<?php echo $get['emp_city']; ?>">
			 				</div>
			 			  </div>
			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">Employer State</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<select id="f_294923" name="emp_state" class="" style="display: none;">
<option value="">--Select--</option><optgroup label="US"><option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AS">American Samoa</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District of Columbia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="GU">Guam</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="PR">Puerto Rico</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="VI">U.S. Virgin Islands</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option></optgroup><optgroup label="AF"><option value="AA">AA-Armed Forces Americas</option><option value="AE">AE-Armed Forces Other</option><option value="AP">AP-Armed Forces Pacific</option></optgroup><optgroup label="CA"><option value="AB">Canada-Alberta</option><option value="BC">Canada-British Columbia</option><option value="MB">Canada-Manitoba</option><option value="NB">Canada-New Brunswick</option><option value="NL">Canada-Newfoundland</option><option value="NT">Canada-Northwest Territories</option><option value="NS">Canada-Nova Scotia</option><option value="NU">Canada-Nunavet</option><option value="ON">Canada-Ontario</option><option value="PE">Canada-Prince Edward Island</option><option value="QC">Canada-Quebec</option><option value="SK">Canada-Saskatchewan</option><option value="YT">Canada-Yukon</option></optgroup><optgroup label="AU"><option value="NSW">AU-New South Wales</option><option value="ANT">AU-Northern Territory</option><option value="QLD">AU-Queensland</option><option value="SA">AU-South Australia</option><option value="TAS">AU-Tasmania</option><option value="VIC">AU-Victoria</option><option value="WAU">AU-Western Australia</option></optgroup>
</select>
			 				</div>
			 				<div class="col s5 m5">
			 					<select id="coapp_f_294923" name="c_emp_state" class="" style="display: none;">
<option value="">--Select--</option><optgroup label="US"><option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AS">American Samoa</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District of Columbia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="GU">Guam</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="PR">Puerto Rico</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="VI">U.S. Virgin Islands</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option></optgroup><optgroup label="AF"><option value="AA">AA-Armed Forces Americas</option><option value="AE">AE-Armed Forces Other</option><option value="AP">AP-Armed Forces Pacific</option></optgroup><optgroup label="CA"><option value="AB">Canada-Alberta</option><option value="BC">Canada-British Columbia</option><option value="MB">Canada-Manitoba</option><option value="NB">Canada-New Brunswick</option><option value="NL">Canada-Newfoundland</option><option value="NT">Canada-Northwest Territories</option><option value="NS">Canada-Nova Scotia</option><option value="NU">Canada-Nunavet</option><option value="ON">Canada-Ontario</option><option value="PE">Canada-Prince Edward Island</option><option value="QC">Canada-Quebec</option><option value="SK">Canada-Saskatchewan</option><option value="YT">Canada-Yukon</option></optgroup><optgroup label="AU"><option value="NSW">AU-New South Wales</option><option value="ANT">AU-Northern Territory</option><option value="QLD">AU-Queensland</option><option value="SA">AU-South Australia</option><option value="TAS">AU-Tasmania</option><option value="VIC">AU-Victoria</option><option value="WAU">AU-Western Australia</option></optgroup>
</select>
			 				</div>
			 			  </div>
			 			   <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">Employer Zip</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="emp_zip" value="<?php echo $get['emp_zip']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="c_emp_zip"  value="<?php echo $get['c_emp_zip']; ?>">
			 				</div>
			 			  </div>
			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">Home Phone</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<span class="prefix"><i class="fas fa-phone"></i></span>
			 					<input type="text" name="emp_home_phone" value="<?php echo $get['emp_home_phone']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 					<span class="prefix"><i class="fas fa-phone"></i></span>
			 					<input type="text" name="c_emp_home_phone"  value="<?php echo $get['c_emp_home_phone']; ?>">
			 				</div>
			 			  </div>
			 			</div>

	<!-- Additional Info -->			 			

			 			<div class="frmBox" id="tab_3">
			 				<div class="top-header center">
						 		<div class="col s4 m2"></div>
						 		<div class="col s6 m5 ttl-hd" style="text-align: left;">Applicant</div>
						 	</div>

			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">Adjusted Gross Income</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="gross_income"  value="<?php echo $get['gross_income']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 				</div>
			 			  </div>
			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">Adjusted Gross Income (Spouse)</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="income_spouse" value="<?php echo $get['income_spouse']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 				</div>
			 			  </div>
			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">Current Status of Loans</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<select name="status_of_loans" id="f_294902" style="display: none;"><option value="">--select--</option><option value="Grace Period">Grace Period</option><option value="Deferment">Deferment</option><option value="Defaulted">Defaulted</option><option value="Late">Late</option><option value="Current">Current</option><option value="Making Payments">Making Payments</option><option value="Multiple Statuses">Multiple Statuses</option><option value="Forbearance">Forbearance</option><option value="Garnishment">Garnishment</option></select>
			 				</div>
			 				<div class="col s5 m5">
			 					
			 				</div>
			 			  </div>
			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">Taxable Income</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<select name="taxable_income" id="f_295091" style="display: none;"><option value="">--select--</option><option value="Yes">Yes</option><option value="No">No</option></select>
			 				</div>
			 				<div class="col s5 m5">
			 					
			 				</div>
			 			  </div>
			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">Spouse Indebtedness Amount</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="indebtedness_amoun" value="<?php echo $get['indebtedness_amoun']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 					
			 				</div>
			 			  </div>
			 			   <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">Family Size</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="family_size" value="<?php echo $get['family_size']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 					
			 				</div>
			 			  </div>
			 			   <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">Filing Status</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<select name="filing_status" id="f_294941" style="display: none;"><option value="">--select--</option><option value="Married Filing Jointly">Married Filing Jointly</option><option value="Married Filing Separately">Married Filing Separately</option><option value="Single">Single</option><option value="Head of Household">Head of Household</option></select>
			 				</div>
			 				<div class="col s5 m5">
			 				</div>
			 			  </div>
			 			   <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">File Taxes</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<select name="file_taxes" id="f_294935" style="display: none;"><option value="">--select--</option><option value="Yes">Yes</option><option value="No">No</option></select>
			 				</div>
			 				<div class="col s5 m5">
			 				</div>
			 			  </div>
			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">DL Number</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="dl_number" value="<?php echo $get['dl_number']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 				</div>
			 			  </div>
			 			   <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">DL State</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<select id="f_294908" name="dl_state" class="" style="display: none;">
<option value="">--Select--</option><optgroup label="US"><option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AS">American Samoa</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District of Columbia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="GU">Guam</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="PR">Puerto Rico</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="VI">U.S. Virgin Islands</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option></optgroup><optgroup label="AF"><option value="AA">AA-Armed Forces Americas</option><option value="AE">AE-Armed Forces Other</option><option value="AP">AP-Armed Forces Pacific</option></optgroup><optgroup label="CA"><option value="AB">Canada-Alberta</option><option value="BC">Canada-British Columbia</option><option value="MB">Canada-Manitoba</option><option value="NB">Canada-New Brunswick</option><option value="NL">Canada-Newfoundland</option><option value="NT">Canada-Northwest Territories</option><option value="NS">Canada-Nova Scotia</option><option value="NU">Canada-Nunavet</option><option value="ON">Canada-Ontario</option><option value="PE">Canada-Prince Edward Island</option><option value="QC">Canada-Quebec</option><option value="SK">Canada-Saskatchewan</option><option value="YT">Canada-Yukon</option></optgroup><optgroup label="AU"><option value="NSW">AU-New South Wales</option><option value="ANT">AU-Northern Territory</option><option value="QLD">AU-Queensland</option><option value="SA">AU-South Australia</option><option value="TAS">AU-Tasmania</option><option value="VIC">AU-Victoria</option><option value="WAU">AU-Western Australia</option></optgroup>
</select>
			 				</div>
			 				<div class="col s5 m5">
			 				</div>
			 			  </div>
			 			   <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">Wages Garnished</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<select name="wages_garnished" id="f_295097" style="display: none;"><option value="">--select--</option><option value="Yes">Yes</option><option value="No">No</option></select>
			 				</div>
			 				<div class="col s5 m5">
			 				</div>
			 			  </div>
			 			   <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">PSLF</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<select name="pslf" id="f_295025" style="display: none;"><option value="">--select--</option><option value="Yes">Yes</option><option value="No">No</option></select>
			 				</div>
			 				<div class="col s5 m5">
			 				</div>
			 			  </div>
			 			   <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">FSA PIN</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="fsa_pin" value="<?php echo $get['fsa_pin']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 				</div>
			 			  </div>
			 			</div>

	<!-- Reference -->		 			
			 			<div class="frmBox" id="tab_4">
			 				<div class="top-header center">
						 		<div class="col s4 m2"></div>
						 		<div class="col s6 m5 ttl-hd" style="text-align: left;">Applicant</div>
						 	</div>

			 				<div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">REF1 First Name</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="ref_f_name" value="<?php echo $get['ref_f_name']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 				</div>
			 			  </div>
			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">REF1 Last Name</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="ref_l_name" value="<?php echo $get['ref_l_name']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 				</div>
			 			  </div>
			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">REF1 Relationship</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="ref_relationship" value="<?php echo $get['ref_relationship']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 				</div>
			 			  </div>
			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">REF1 Address</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="ref_addr" value="<?php echo $get['ref_addr']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 				</div>
			 			  </div>
			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">REF1 City</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="ref_city" value="<?php echo $get['ref_city']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 				</div>
			 			  </div>
			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">REF1 State</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<select id="f_295046" name="ref_state" class="" style="display: none;">
<option value="">--Select--</option><optgroup label="US"><option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AS">American Samoa</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District of Columbia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="GU">Guam</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="PR">Puerto Rico</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="VI">U.S. Virgin Islands</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option></optgroup><optgroup label="AF"><option value="AA">AA-Armed Forces Americas</option><option value="AE">AE-Armed Forces Other</option><option value="AP">AP-Armed Forces Pacific</option></optgroup><optgroup label="CA"><option value="AB">Canada-Alberta</option><option value="BC">Canada-British Columbia</option><option value="MB">Canada-Manitoba</option><option value="NB">Canada-New Brunswick</option><option value="NL">Canada-Newfoundland</option><option value="NT">Canada-Northwest Territories</option><option value="NS">Canada-Nova Scotia</option><option value="NU">Canada-Nunavet</option><option value="ON">Canada-Ontario</option><option value="PE">Canada-Prince Edward Island</option><option value="QC">Canada-Quebec</option><option value="SK">Canada-Saskatchewan</option><option value="YT">Canada-Yukon</option></optgroup><optgroup label="AU"><option value="NSW">AU-New South Wales</option><option value="ANT">AU-Northern Territory</option><option value="QLD">AU-Queensland</option><option value="SA">AU-South Australia</option><option value="TAS">AU-Tasmania</option><option value="VIC">AU-Victoria</option><option value="WAU">AU-Western Australia</option></optgroup>
</select>
			 				</div>
			 				<div class="col s5 m5">
			 				</div>
			 			  </div>
			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">REF1 Zip</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="ref_zip" value="<?php echo $get['ref_zip']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 				</div>
			 			  </div>
			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">REF1 Phone</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="ref_phone" value="<?php echo $get['ref_phone']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 				</div>
			 			  </div>
			 			</div>
	<!-- refrence 2 -->			 			
			 			<div class="frmBox" id="tab_5">
			 				<div class="top-header center">
						 		<div class="col s4 m2"></div>
						 		<div class="col s6 m5 ttl-hd" style="text-align: left;">Applicant</div>
						 	</div>
			 				<div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">REF2 First Name</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="ref2_f_name" value="<?php echo $get['ref2_f_name']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 				</div>
			 			  </div>
			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">REF2 Last Name</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="ref2_l_name" value="<?php echo $get['ref2_l_name'] ?>">
			 				</div>
			 				<div class="col s5 m5">
			 				</div>
			 			  </div>
			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">REF2 Relationship</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="ref2_relationship" value="<?php echo $get['ref2_relationship']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 				</div>
			 			  </div>
			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">REF2 Address</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="ref2_addr" value="<?php echo $get['ref2_addr']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 				</div>
			 			  </div>
			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">REF2 City</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="ref2_city" value="<?php echo $get['ref2_city']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 				</div>
			 			  </div>
			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">REF2 State</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<select id="f_295046" name="ref2_state" class="" style="display: none;">
<option value="">--Select--</option><optgroup label="US"><option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AS">American Samoa</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District of Columbia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="GU">Guam</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="PR">Puerto Rico</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="VI">U.S. Virgin Islands</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option></optgroup><optgroup label="AF"><option value="AA">AA-Armed Forces Americas</option><option value="AE">AE-Armed Forces Other</option><option value="AP">AP-Armed Forces Pacific</option></optgroup><optgroup label="CA"><option value="AB">Canada-Alberta</option><option value="BC">Canada-British Columbia</option><option value="MB">Canada-Manitoba</option><option value="NB">Canada-New Brunswick</option><option value="NL">Canada-Newfoundland</option><option value="NT">Canada-Northwest Territories</option><option value="NS">Canada-Nova Scotia</option><option value="NU">Canada-Nunavet</option><option value="ON">Canada-Ontario</option><option value="PE">Canada-Prince Edward Island</option><option value="QC">Canada-Quebec</option><option value="SK">Canada-Saskatchewan</option><option value="YT">Canada-Yukon</option></optgroup><optgroup label="AU"><option value="NSW">AU-New South Wales</option><option value="ANT">AU-Northern Territory</option><option value="QLD">AU-Queensland</option><option value="SA">AU-South Australia</option><option value="TAS">AU-Tasmania</option><option value="VIC">AU-Victoria</option><option value="WAU">AU-Western Australia</option></optgroup>
</select>
			 				</div>
			 				<div class="col s5 m5">
			 				</div>
			 			  </div>
			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">REF2 Zip</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="ref2_zip" value="<?php echo $get['ref2_zip']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 				</div>
			 			  </div>
			 			  <div class="row valign-wrapper">
			 				<div class="col s2 m2 ">
			 					<span class="lbl">REF2 Phone</span>
			 				</div>
			 				<div class="col s5 m5">
			 					<input type="text" name="ref2_phone" value="<?php echo $get['ref2_phone']; ?>">
			 				</div>
			 				<div class="col s5 m5">
			 				</div>
			 			  </div> 
			 			</div>
			 		</div>
			 	</div>
			 </div>
			</div>
		</div>
		<button type="button" class="hide<?php if($get['c_id']>0){ ?> updateData <?php  } else { ?> saveBtn <?php } ?>" id="saveBtn"></button>
	</form>
</div>
</div>
</div>



<!-- ============= Change Status ===============-->

	  <div id="statusChanged" class="modal">
	    <div class="modal-content">
	    	
	    </div>
	    <div class="modal-footer">
	      <a href="#!" class="modal-close valign-wrapper waves-effect waves-green btn-flat editStatus"><img src="<?php echo base_url(); ?>html/images/accept.png"> Update Status</a>
	    </div>
	  </div>

<!-- ============= Add Note ===============-->

	   <!-- Modal Structure -->
	  <div id="addNotee" class="modal">
	    <div class="modal-content">
	    	
	    </div>
	    <div class="modal-footer">
	      <a href="#!" class="modal-close valign-wrapper waves-effect waves-green btn-flat saveNote"><img src="<?php echo base_url(); ?>html/images/accept.png"> Save Note</a>
	    </div>
	  </div>

<!-- ============= Add Events ===============-->

	   <!-- Modal Structure -->
	  <div id="addEventss" class="modal" style="max-width: 800px !important;">
	    <div class="modal-content">
	    	
	    </div>
	    <div class="modal-footer">
	      <a href="#!" class="modal-close valign-wrapper waves-effect waves-green btn-flat addEvents"><img src="<?php echo base_url(); ?>html/images/accept.png"> Save Events</a>
	    </div>
	  </div>	
			 		

<style type="text/css">
	.frmBox{
		display: none;
	}
	.activeBox{
		display: block;
	}
</style>