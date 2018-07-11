<div class="main-box">
	<div class="cmdtitle">
		<a href="<?php echo base_url(); ?>Administration">user & administration</a>
	</div>

	<div class="main-menu">
		  <nav class="contactnav">
		    <div class="nav-wrapper connavwapp">
		      <ul id="nav-mobile" class="hide-on-med-and-down">
		        <li><a href="#!"><img class="iconstyle" src="<?php echo base_url() ?>html/images/accept.png">save</a></li>
		        </ul>
		    </div>
		  </nav>


		  <table width="100%">
            <tbody><tr>
                <td valign="top">
                    <div id="newevent">
                        <table id="tCalAdd">
                            <tbody><tr>
                                <td bgcolor="#f5f5f5">Contact</td>
                                <td>
                                                                            <input class="search ui-autocomplete-input" size="35" type="text" autocomplete="off" name="t_searchcont" id="t_searchcont">
                                        <div style="z-index:9000; text-align:left;" class="searchresults" id="t_searchresults"></div>
                                        <input type="hidden" name="contact_id" id="contact_id" value="">
                                                                        </td>
                            </tr>
                            <tr>
                                <td bgcolor="#f5f5f5">Title</td>
                                <td><input style="width:60%" id="title" name="title" type="text" value=""> <select id="event_type" name="event_type" class="">
<option value="">--Event Type--</option><option value="3261">CXCXC</option>
<option value="1">Meeting</option>
<option value="7">Phone Call</option>
<option value="3122">Welcome Call</option>

</select>
</td>
                            </tr>
                            <tr>
                                <td valign="top" bgcolor="#f5f5f5">When</td>
                                <td width="470">
                              
                                    <div id="timeselects">
                                        <p>Assigned To</p>
                                        <select id="assigned_to" name="assigned_to" class="">
<option value="">--Select--</option><option value="3254259">Alex Goodman</option>
<option value="3142430">Alex Vargas</option>
<option value="3166850">Anthony Harrison</option>
<option value="3133547">Debt PayPro</option>
<option value="3167522">Devin Lee</option>
<option value="3177659">Greg Smith</option>
<option value="3170984">James Morris</option>
<option value="3177071">Jeff Cannon</option>
<option value="3193601">Raymond Richardson</option>
<option value="3204459">Richard Anderson</option>
<option value="3177203">Samantha Williams</option>

</select>
                                        <div class="spacer10"></div>

                                        <div class="myyyy">
                                            Public / Private Event
                                            <select id="public" name="public" class="">
<option value="1">Public</option>
<option value="0" selected="selected">Private</option>

</select>
                                        </div>
                                        <div class="spacer10"></div>
                                        <hr size="1" noshade="">
                                        <div class="spacer10"></div>
                                        <div class="myyyy">
                                            Starts: <input class="datepicker" name="start_date" type="text" value="07/09/2018">
                                        </div>
                                        <div class="myyyy">
                                            Time: <select id="start_time" name="start_time" class="">
<option value="">--Select--</option><option value="12:00 am">12:00 am</option>
<option value="12:15 am">12:15 am</option>
<option value="12:30 am">12:30 am</option>
<option value="12:45 am">12:45 am</option>
<option value="1:00 am">1:00 am</option>
<option value="1:15 am">1:15 am</option>
<option value="1:30 am">1:30 am</option>
<option value="1:45 am">1:45 am</option>
<option value="2:00 am">2:00 am</option>
<option value="2:15 am">2:15 am</option>
<option value="2:30 am">2:30 am</option>
<option value="2:45 am">2:45 am</option>
<option value="3:00 am" selected="selected">3:00 am</option>
<option value="3:15 am">3:15 am</option>
<option value="3:30 am">3:30 am</option>
<option value="3:45 am">3:45 am</option>
<option value="4:00 am">4:00 am</option>
<option value="4:15 am">4:15 am</option>
<option value="4:30 am">4:30 am</option>
<option value="4:45 am">4:45 am</option>
<option value="5:00 am">5:00 am</option>
<option value="5:15 am">5:15 am</option>
<option value="5:30 am">5:30 am</option>
<option value="5:45 am">5:45 am</option>
<option value="6:00 am">6:00 am</option>
<option value="6:15 am">6:15 am</option>
<option value="6:30 am">6:30 am</option>
<option value="6:45 am">6:45 am</option>
<option value="7:00 am">7:00 am</option>
<option value="7:15 am">7:15 am</option>
<option value="7:30 am">7:30 am</option>
<option value="7:45 am">7:45 am</option>
<option value="8:00 am">8:00 am</option>
<option value="8:15 am">8:15 am</option>
<option value="8:30 am">8:30 am</option>
<option value="8:45 am">8:45 am</option>
<option value="9:00 am">9:00 am</option>
<option value="9:15 am">9:15 am</option>
<option value="9:30 am">9:30 am</option>
<option value="9:45 am">9:45 am</option>
<option value="10:00 am">10:00 am</option>
<option value="10:15 am">10:15 am</option>
<option value="10:30 am">10:30 am</option>
<option value="10:45 am">10:45 am</option>
<option value="11:00 am">11:00 am</option>
<option value="11:15 am">11:15 am</option>
<option value="11:30 am">11:30 am</option>
<option value="11:45 am">11:45 am</option>
<option value="12:00 pm">12:00 pm</option>
<option value="12:15 pm">12:15 pm</option>
<option value="12:30 pm">12:30 pm</option>
<option value="12:45 pm">12:45 pm</option>
<option value="1:00 pm">1:00 pm</option>
<option value="1:15 pm">1:15 pm</option>
<option value="1:30 pm">1:30 pm</option>
<option value="1:45 pm">1:45 pm</option>
<option value="2:00 pm">2:00 pm</option>
<option value="2:15 pm">2:15 pm</option>
<option value="2:30 pm">2:30 pm</option>
<option value="2:45 pm">2:45 pm</option>
<option value="3:00 pm">3:00 pm</option>
<option value="3:15 pm">3:15 pm</option>
<option value="3:30 pm">3:30 pm</option>
<option value="3:45 pm">3:45 pm</option>
<option value="4:00 pm">4:00 pm</option>
<option value="4:15 pm">4:15 pm</option>
<option value="4:30 pm">4:30 pm</option>
<option value="4:45 pm">4:45 pm</option>
<option value="5:00 pm">5:00 pm</option>
<option value="5:15 pm">5:15 pm</option>
<option value="5:30 pm">5:30 pm</option>
<option value="5:45 pm">5:45 pm</option>
<option value="6:00 pm">6:00 pm</option>
<option value="6:15 pm">6:15 pm</option>
<option value="6:30 pm">6:30 pm</option>
<option value="6:45 pm">6:45 pm</option>
<option value="7:00 pm">7:00 pm</option>
<option value="7:15 pm">7:15 pm</option>
<option value="7:30 pm">7:30 pm</option>
<option value="7:45 pm">7:45 pm</option>
<option value="8:00 pm">8:00 pm</option>
<option value="8:15 pm">8:15 pm</option>
<option value="8:30 pm">8:30 pm</option>
<option value="8:45 pm">8:45 pm</option>
<option value="9:00 pm">9:00 pm</option>
<option value="9:15 pm">9:15 pm</option>
<option value="9:30 pm">9:30 pm</option>
<option value="9:45 pm">9:45 pm</option>
<option value="10:00 pm">10:00 pm</option>
<option value="10:15 pm">10:15 pm</option>
<option value="10:30 pm">10:30 pm</option>
<option value="10:45 pm">10:45 pm</option>
<option value="11:00 pm">11:00 pm</option>
<option value="11:15 pm">11:15 pm</option>
<option value="11:30 pm">11:30 pm</option>
<option value="11:45 pm">11:45 pm</option>

</select>
                                        </div>
                                        <div class="spacer10"></div>
                                        <div class="myyyy">
                                            Ends: <input  class="datepicker" id="end_date" name="end_date" type="text" value="07/09/2018">
                                        </div>
                                        <div class="myyyy">
                                            Time: <select id="end_time" name="end_time" class="">
<option value="">--Select--</option><option value="12:00 am">12:00 am</option>
<option value="12:15 am">12:15 am</option>
<option value="12:30 am">12:30 am</option>
<option value="12:45 am">12:45 am</option>
<option value="1:00 am">1:00 am</option>
<option value="1:15 am">1:15 am</option>
<option value="1:30 am">1:30 am</option>
<option value="1:45 am">1:45 am</option>
<option value="2:00 am">2:00 am</option>
<option value="2:15 am">2:15 am</option>
<option value="2:30 am">2:30 am</option>
<option value="2:45 am">2:45 am</option>
<option value="3:00 am">3:00 am</option>
<option value="3:15 am">3:15 am</option>
<option value="3:30 am">3:30 am</option>
<option value="3:45 am">3:45 am</option>
<option value="4:00 am">4:00 am</option>
<option value="4:15 am">4:15 am</option>
<option value="4:30 am">4:30 am</option>
<option value="4:45 am">4:45 am</option>
<option value="5:00 am">5:00 am</option>
<option value="5:15 am">5:15 am</option>
<option value="5:30 am">5:30 am</option>
<option value="5:45 am">5:45 am</option>
<option value="6:00 am">6:00 am</option>
<option value="6:15 am">6:15 am</option>
<option value="6:30 am">6:30 am</option>
<option value="6:45 am">6:45 am</option>
<option value="7:00 am">7:00 am</option>
<option value="7:15 am">7:15 am</option>
<option value="7:30 am">7:30 am</option>
<option value="7:45 am">7:45 am</option>
<option value="8:00 am">8:00 am</option>
<option value="8:15 am">8:15 am</option>
<option value="8:30 am">8:30 am</option>
<option value="8:45 am">8:45 am</option>
<option value="9:00 am">9:00 am</option>
<option value="9:15 am">9:15 am</option>
<option value="9:30 am">9:30 am</option>
<option value="9:45 am">9:45 am</option>
<option value="10:00 am">10:00 am</option>
<option value="10:15 am">10:15 am</option>
<option value="10:30 am">10:30 am</option>
<option value="10:45 am">10:45 am</option>
<option value="11:00 am">11:00 am</option>
<option value="11:15 am">11:15 am</option>
<option value="11:30 am">11:30 am</option>
<option value="11:45 am">11:45 am</option>
<option value="12:00 pm">12:00 pm</option>
<option value="12:15 pm">12:15 pm</option>
<option value="12:30 pm">12:30 pm</option>
<option value="12:45 pm">12:45 pm</option>
<option value="1:00 pm">1:00 pm</option>
<option value="1:15 pm">1:15 pm</option>
<option value="1:30 pm">1:30 pm</option>
<option value="1:45 pm">1:45 pm</option>
<option value="2:00 pm">2:00 pm</option>
<option value="2:15 pm">2:15 pm</option>
<option value="2:30 pm">2:30 pm</option>
<option value="2:45 pm">2:45 pm</option>
<option value="3:00 pm">3:00 pm</option>
<option value="3:15 pm">3:15 pm</option>
<option value="3:30 pm">3:30 pm</option>
<option value="3:45 pm">3:45 pm</option>
<option value="4:00 pm">4:00 pm</option>
<option value="4:15 pm">4:15 pm</option>
<option value="4:30 pm">4:30 pm</option>
<option value="4:45 pm">4:45 pm</option>
<option value="5:00 pm">5:00 pm</option>
<option value="5:15 pm">5:15 pm</option>
<option value="5:30 pm">5:30 pm</option>
<option value="5:45 pm">5:45 pm</option>
<option value="6:00 pm">6:00 pm</option>
<option value="6:15 pm">6:15 pm</option>
<option value="6:30 pm">6:30 pm</option>
<option value="6:45 pm">6:45 pm</option>
<option value="7:00 pm">7:00 pm</option>
<option value="7:15 pm">7:15 pm</option>
<option value="7:30 pm">7:30 pm</option>
<option value="7:45 pm">7:45 pm</option>
<option value="8:00 pm">8:00 pm</option>
<option value="8:15 pm">8:15 pm</option>
<option value="8:30 pm">8:30 pm</option>
<option value="8:45 pm">8:45 pm</option>
<option value="9:00 pm">9:00 pm</option>
<option value="9:15 pm">9:15 pm</option>
<option value="9:30 pm">9:30 pm</option>
<option value="9:45 pm">9:45 pm</option>
<option value="10:00 pm">10:00 pm</option>
<option value="10:15 pm">10:15 pm</option>
<option value="10:30 pm">10:30 pm</option>
<option value="10:45 pm">10:45 pm</option>
<option value="11:00 pm">11:00 pm</option>
<option value="11:15 pm">11:15 pm</option>
<option value="11:30 pm">11:30 pm</option>
<option value="11:45 pm">11:45 pm</option>

</select>
                                        </div>
                                        <h4>Timezone</h4>
                                        <select id="timezone" name="timezone" class="">
<option value="US/Eastern">Eastern</option>
<option value="US/Central">Central</option>
<option value="US/Mountain">Mountain</option>
<option value="US/Pacific" selected="selected">Pacific</option>
<option value="US/Alaska">Alaska</option>
<option value="US/Hawaii">Hawaii</option>

</select>
                                        <div class="spacer10"></div>
                                        <div>
                                            <input type="checkbox" name="allday" value="1" style="border: none;"> All Day Event
                                        </div>
                                        <div class="spacer25"></div>
                                        <hr size="1" noshade="">
                                        <div class="spacer10"></div>
                                    </div>
                                    <div style="clear:both;"></div>
                                    <div id="repRes" style="display:none;"></div>
                                    <div id="repDaily" style="display:none;">Monday Tuesday Wednesday Thursday Friday</div>
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#f5f5f5">Location</td>
                                <td><input id="location" style="width:90%;" name="location" type="text" value=""></td>
                            </tr>
                            <tr>
                                <td bgcolor="#f5f5f5">Description</td>
                                <td><textarea rows="6" cols="60" class="formMultiTextBox" name="description"></textarea></td>
                            </tr>
                            <tr>
                                <td bgcolor="#f5f5f5">&nbsp;</td>
                            </tr>
                        </tbody></table>
                    </div>
                </td>
                <td valign="top" bgcolor="#dfe8d2">
                    <div id="titlebacking">
                        <div style="padding:15px;">
                                            </div></div></td>
                <td valign="top"></td>
            </tr>
        </tbody></table>
		</div>
	</div>