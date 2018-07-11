<div class="main-box">
	<div class="cmdtitle">
		<a  href="<?php echo base_url(); ?>Calendar">Calendar</a> > <a href="<?php echo base_url(); ?>availability_schedule">availability_schedule</a>
	</div>

	<div class="main-menu row">

		<div class="col s12 m4">
			<div class="left w25">
        <h2 class="title theme">Add Availability</h2>
        <form id="frmavail" name="frmavail" action="/modules/calendar/ajax.php" method="post">
            <input type="hidden" name="action" value="saveavail">
            <div class="left">
                <h4>Start Date</h4>
                <div style="position:relative;"><input style="width: 150px; display: none;" name="start_date"  value="" autocomplete="off"><input style="width:150px;" class="datebox timeframe_field start" name="start_date" id="start_date" onfocus="$('start_date_cal').show();" onblur="$('start_date_cal').hide();" value="" autocomplete="off">
  <input type="hidden" id="start_date_end" class="timeframe_field end" value="">
  <div id="start_date_cal" style="margin-top: 20px; position: absolute; top: 0px; left: 0px; z-index: 5000; background: rgb(204, 204, 204); padding: 3px; border: 1px solid rgb(204, 204, 204); display: none;" class="timeframe_calendar"><ul id="start_date_cal_menu" class="timeframe_menu"><li><a class="timeframe_button previous" href="#" onclick="return false;">←</a></li><li><a class="timeframe_button today" href="#" onclick="return false;">T</a></li><li><a class="timeframe_button reset" href="#" onclick="return false;">R</a></li><li><a class="timeframe_button next" href="#" onclick="return false;">→</a></li></ul><div id="start_date_cal_container"><table id="start_date_cal_calendar_0" border="0" cellspacing="0" cellpadding="5"><caption>July 2018</caption><thead><tr><th scope="col" abbr="Sunday">S</th><th scope="col" abbr="Monday">M</th><th scope="col" abbr="Tuesday">T</th><th scope="col" abbr="Wednesday">W</th><th scope="col" abbr="Thursday">T</th><th scope="col" abbr="Friday">F</th><th scope="col" abbr="Saturday">S</th></tr></thead><tbody><tr><td class="active selectable">1</td><td class="active selectable">2</td><td class="active selectable">3</td><td class="active selectable">4</td><td class="active selectable">5</td><td class="active selectable">6</td><td class="active selectable">7</td></tr><tr><td class="active selectable">8</td><td class="active selectable">9</td><td class="active selectable today">10</td><td class="active selectable">11</td><td class="active selectable">12</td><td class="active selectable">13</td><td class="active selectable">14</td></tr><tr><td class="active selectable">15</td><td class="active selectable">16</td><td class="active selectable">17</td><td class="active selectable">18</td><td class="active selectable">19</td><td class="active selectable">20</td><td class="active selectable">21</td></tr><tr><td class="active selectable">22</td><td class="active selectable">23</td><td class="active selectable">24</td><td class="active selectable">25</td><td class="active selectable">26</td><td class="active selectable">27</td><td class="active selectable">28</td></tr><tr><td class="active selectable">29</td><td class="active selectable">30</td><td class="active selectable">31</td><td class="post beyond selectable">1</td><td class="post beyond selectable">2</td><td class="post beyond selectable">3</td><td class="post beyond selectable">4</td></tr><tr><td class="post beyond selectable">5</td><td class="post beyond selectable">6</td><td class="post beyond selectable">7</td><td class="post beyond selectable">8</td><td class="post beyond selectable">9</td><td class="post beyond selectable">10</td><td class="post beyond selectable">11</td></tr></tbody></table></div></div>
  <div class="clear"></div></div>
    <script type="text/javascript">
     new Timeframe('start_date_cal', {
        months: 1,
        startField: 'start_date',
        endField: 'start_date_end',maxRange:1,
              resetButton: 'reset' });
    </script>                <h4>End Date</h4>
                <div style="position:relative;"><input style="width: 150px; display: none;" name="end_date" onfocus="$('end_date_cal').show();" onblur="$('end_date_cal').hide();" value="" autocomplete="off"><input style="width:150px;"  name="end_date" id="end_date" onfocus="$('end_date_cal').show();" onblur="$('end_date_cal').hide();" value="" autocomplete="off">
  <input type="hidden" id="end_date_end"  value="">
  <div id="end_date_cal" style="margin-top:20px;position:absolute;top:0;left:0;z-index:5000;background:#cccccc;padding:3px;display:none; border:1px solid #ccc;" ><ul id="end_date_cal_menu" class="timeframe_menu"><li><a class="timeframe_button previous" href="#" onclick="return false;">←</a></li><li><a class="timeframe_button today" href="#" onclick="return false;">T</a></li><li><a class="timeframe_button reset" href="#" onclick="return false;">R</a></li><li><a class="timeframe_button next" href="#" onclick="return false;">→</a></li></ul><div id="end_date_cal_container"><table id="end_date_cal_calendar_0" border="0" cellspacing="0" cellpadding="5"><caption>July 2018</caption><thead><tr><th scope="col" abbr="Sunday">S</th><th scope="col" abbr="Monday">M</th><th scope="col" abbr="Tuesday">T</th><th scope="col" abbr="Wednesday">W</th><th scope="col" abbr="Thursday">T</th><th scope="col" abbr="Friday">F</th><th scope="col" abbr="Saturday">S</th></tr></thead><tbody><tr><td class="active selectable">1</td><td class="active selectable">2</td><td class="active selectable">3</td><td class="active selectable">4</td><td class="active selectable">5</td><td class="active selectable">6</td><td class="active selectable">7</td></tr><tr><td class="active selectable">8</td><td class="active selectable">9</td><td class="active selectable today">10</td><td class="active selectable">11</td><td class="active selectable">12</td><td class="active selectable">13</td><td class="active selectable">14</td></tr><tr><td class="active selectable">15</td><td class="active selectable">16</td><td class="active selectable">17</td><td class="active selectable">18</td><td class="active selectable">19</td><td class="active selectable">20</td><td class="active selectable">21</td></tr><tr><td class="active selectable">22</td><td class="active selectable">23</td><td class="active selectable">24</td><td class="active selectable">25</td><td class="active selectable">26</td><td class="active selectable">27</td><td class="active selectable">28</td></tr><tr><td class="active selectable">29</td><td class="active selectable">30</td><td class="active selectable">31</td><td class="post beyond selectable">1</td><td class="post beyond selectable">2</td><td class="post beyond selectable">3</td><td class="post beyond selectable">4</td></tr><tr><td class="post beyond selectable">5</td><td class="post beyond selectable">6</td><td class="post beyond selectable">7</td><td class="post beyond selectable">8</td><td class="post beyond selectable">9</td><td class="post beyond selectable">10</td><td class="post beyond selectable">11</td></tr></tbody></table></div></div>
  <div class="clear"></div></div>
    <script type="text/javascript">
     new Timeframe('end_date_cal', {
        months: 1,
        startField: 'end_date',
        endField: 'end_date_end',maxRange:1,
              resetButton: 'reset' });
    </script>            </div>
            <div class="left">

                <h4>Times</h4>
                <select id="time_in" name="time_in" class="">
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
                to
                <select id="time_out" name="time_out" class="">
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
                <br><br>

                <h4>Event Types</h4>
                <input type="checkbox" name="eventtype[]" value="3122" style="border: none;"> Welcome Call<br><input type="checkbox" name="eventtype[]" value="3261" style="border: none;"> CXCXC<br><input type="checkbox" name="eventtype[]" value="3337" style="border: none;"> rrrr<br>
                
                <br><br>
                <input type="button" id="savebtn" name="savebtn" value="Add To Availablity" class="checkbtn">
        
    </div></form>
</div>
		</div>

		<div class="col s12 m4">
			<div class="left w40">
    <h2 class="title theme">Current Availability Schedule</h2>
    <p><a href="#null" id="clearbtn">Clear All</a></p>
    <div class="condcont" id="schedule"></div>
</div>
		</div>

		<div class="col s12 m4">
			<div class="left w20">
    <h2 class="title theme">Exclude Days</h2>
            <div class="left relative "><div style="position:relative;"><input style="width: 150px; display: none;" name="date1" onfocus="$('date1_cal').show();" onblur="$('date1_cal').hide();" value="" autocomplete="off"><input style="width:150px;" class="datebox timeframe_field start datepicker" name="date1" id="date1" onfocus="$('date1_cal').show();" onblur="$('date1_cal').hide();" value="" autocomplete="off">
  <input type="hidden" id="date1_end" class="timeframe_field end" value="">
  <div id="date1_cal" style="margin-top:20px;position:absolute;top:0;left:0;z-index:5000;background:#cccccc;padding:3px;display:none; border:1px solid #ccc;" class="timeframe_calendar"><ul id="date1_cal_menu" class="timeframe_menu"><li><a class="timeframe_button previous" href="#" onclick="return false;">←</a></li><li><a class="datepicker timeframe_button today" href="#" onclick="return false;">T</a></li><li><a class="timeframe_button reset datepicker" href="#" onclick="return false;">R</a></li><li><a class="timeframe_button next" href="#" onclick="return false;">→</a></li></ul><div id="date1_cal_container"><table id="date1_cal_calendar_0" border="0" cellspacing="0" cellpadding="5"><caption>July 2018</caption><thead><tr><th scope="col" abbr="Sunday">S</th><th scope="col" abbr="Monday">M</th><th scope="col" abbr="Tuesday">T</th><th scope="col" abbr="Wednesday">W</th><th scope="col" abbr="Thursday">T</th><th scope="col" abbr="Friday">F</th><th scope="col" abbr="Saturday">S</th></tr></thead><tbody><tr><td class="active selectable">1</td><td class="active selectable">2</td><td class="active selectable">3</td><td class="active selectable">4</td><td class="active selectable">5</td><td class="active selectable">6</td><td class="active selectable">7</td></tr><tr><td class="active selectable">8</td><td class="active selectable">9</td><td class="datepicker active selectable today">10</td><td class="active selectable">11</td><td class="active selectable">12</td><td class="datepicker active selectable">13</td><td class="active selectable">14</td></tr><tr><td class="active selectable">15</td><td class="datepicker active selectable">16</td><td class="active selectable">17</td><td class="active selectable">18</td><td class="datepicker active selectable">19</td><td class="active selectable">20</td><td class="active selectable">21</td></tr><tr><td class="datepicker active selectable">22</td><td class="active selectable">23</td><td class="active selectable">24</td><td class="datepicker active selectable">25</td><td class="active selectable">26</td><td class="active selectable">27</td><td class="active selectable">28</td></tr><tr><td class="active selectable">29</td><td class="active selectable">30</td><td class="active selectable">31</td><td class="post beyond selectable">1</td><td class="post beyond selectable">2</td><td class="post beyond selectable">3</td><td class="post beyond selectable">4</td></tr><tr><td class="post beyond selectable">5</td><td class="post beyond selectable">6</td><td class="post beyond selectable">7</td><td class="post beyond selectable">8</td><td class="post beyond selectable">9</td><td class="post beyond selectable">10</td><td class="post beyond selectable">11</td></tr></tbody></table></div></div>
  <div class="clear"></div></div>
    <script type="text/javascript">
     new Timeframe('date1_cal', {
        months: 1,
        startField: 'date1',
        endField: 'date1_end',maxRange:1,
              resetButton: 'reset' });
    </script></div>
        <div class="clear"></div>
        <div style="padding-bottom:5px;"></div>            <div class="left relative"><div style="position:relative;"><input style="width: 150px; display: none;" name="date2" onfocus="$('date2_cal').show();" onblur="$('date2_cal').hide();" value="" autocomplete="off"><input style="width:150px;" class="datepicker datebox timeframe_field start" name="date2" id="date2" onfocus="$('date2_cal').show();" onblur="$('date2_cal').hide();" value="" autocomplete="off">
  <input type="hidden" id="date2_end" class="timeframe_field end" value="">
  <div id="date2_cal" style="margin-top:20px;position:absolute;top:0;left:0;z-index:5000;background:#cccccc;padding:3px;display:none; border:1px solid #ccc;" class="timeframe_calendar"><ul id="date2_cal_menu" class="timeframe_menu"><li><a class="timeframe_button previous" href="#" onclick="return false;">←</a></li><li><a class="timeframe_button today" href="#" onclick="return false;">T</a></li><li><a class="timeframe_button reset" href="#" onclick="return false;">R</a></li><li><a class="timeframe_button next" href="#" onclick="return false;">→</a></li></ul><div id="date2_cal_container"><table id="date2_cal_calendar_0" border="0" cellspacing="0" cellpadding="5"><caption>July 2018</caption><thead><tr><th scope="col" abbr="Sunday">S</th><th scope="col" abbr="Monday">M</th><th scope="col" abbr="Tuesday">T</th><th scope="col" abbr="Wednesday">W</th><th scope="col" abbr="Thursday">T</th><th scope="col" abbr="Friday">F</th><th scope="col" abbr="Saturday">S</th></tr></thead><tbody><tr><td class="active selectable">1</td><td class="active selectable">2</td><td class="active selectable">3</td><td class="active selectable">4</td><td class="active selectable">5</td><td class="active selectable">6</td><td class="active selectable">7</td></tr><tr><td class="active selectable">8</td><td class="active selectable">9</td><td class="active selectable today">10</td><td class="active selectable">11</td><td class="active selectable">12</td><td class="active selectable">13</td><td class="active selectable">14</td></tr><tr><td class="active selectable">15</td><td class="active selectable">16</td><td class="active selectable">17</td><td class="active selectable">18</td><td class="active selectable">19</td><td class="active selectable">20</td><td class="active selectable">21</td></tr><tr><td class="active selectable">22</td><td class="active selectable">23</td><td class="active selectable">24</td><td class="active selectable">25</td><td class="active selectable">26</td><td class="active selectable">27</td><td class="active selectable">28</td></tr><tr><td class="active selectable">29</td><td class="active selectable">30</td><td class="active selectable">31</td><td class="post beyond selectable">1</td><td class="post beyond selectable">2</td><td class="post beyond selectable">3</td><td class="post beyond selectable">4</td></tr><tr><td class="post beyond selectable">5</td><td class="post beyond selectable">6</td><td class="post beyond selectable">7</td><td class="post beyond selectable">8</td><td class="post beyond selectable">9</td><td class="post beyond selectable">10</td><td class="post beyond selectable">11</td></tr></tbody></table></div></div>
  <div class="clear"></div></div>
    <script type="text/javascript">
     new Timeframe('date2_cal', {
        months: 1,
        startField: 'date2',
        endField: 'date2_end',maxRange:1,
              resetButton: 'reset' });
    </script></div>
        <div class="clear"></div>
        <div style="padding-bottom:5px;"></div>            <div class="left relative"><div style="position:relative;"><input style="width: 150px; display: none;" name="date3" onfocus="$('date3_cal').show();" onblur="$('date3_cal').hide();" value="" autocomplete="off"><input style="width:150px;" class="datepicker datebox timeframe_field start" name="date3" id="date3" onfocus="$('date3_cal').show();" onblur="$('date3_cal').hide();" value="" autocomplete="off">
  <input type="hidden" id="date3_end" class="timeframe_field end" value="">
  <div id="date3_cal" style="margin-top:20px;position:absolute;top:0;left:0;z-index:5000;background:#cccccc;padding:3px;display:none; border:1px solid #ccc;" class="timeframe_calendar"><ul id="date3_cal_menu" class="timeframe_menu"><li><a class="timeframe_button previous" href="#" onclick="return false;">←</a></li><li><a class="timeframe_button today" href="#" onclick="return false;">T</a></li><li><a class="timeframe_button reset" href="#" onclick="return false;">R</a></li><li><a class="timeframe_button next" href="#" onclick="return false;">→</a></li></ul><div id="date3_cal_container"><table id="date3_cal_calendar_0" border="0" cellspacing="0" cellpadding="5"><caption>July 2018</caption><thead><tr><th scope="col" abbr="Sunday">S</th><th scope="col" abbr="Monday">M</th><th scope="col" abbr="Tuesday">T</th><th scope="col" abbr="Wednesday">W</th><th scope="col" abbr="Thursday">T</th><th scope="col" abbr="Friday">F</th><th scope="col" abbr="Saturday">S</th></tr></thead><tbody><tr><td class="active selectable">1</td><td class="active selectable">2</td><td class="active selectable">3</td><td class="active selectable">4</td><td class="active selectable">5</td><td class="active selectable">6</td><td class="active selectable">7</td></tr><tr><td class="active selectable">8</td><td class="active selectable">9</td><td class="active selectable today">10</td><td class="active selectable">11</td><td class="active selectable">12</td><td class="active selectable">13</td><td class="active selectable">14</td></tr><tr><td class="active selectable">15</td><td class="active selectable">16</td><td class="active selectable">17</td><td class="active selectable">18</td><td class="active selectable">19</td><td class="active selectable">20</td><td class="active selectable">21</td></tr><tr><td class="active selectable">22</td><td class="active selectable">23</td><td class="active selectable">24</td><td class="active selectable">25</td><td class="active selectable">26</td><td class="active selectable">27</td><td class="active selectable">28</td></tr><tr><td class="active selectable">29</td><td class="active selectable">30</td><td class="active selectable">31</td><td class="post beyond selectable">1</td><td class="post beyond selectable">2</td><td class="post beyond selectable">3</td><td class="post beyond selectable">4</td></tr><tr><td class="post beyond selectable">5</td><td class="post beyond selectable">6</td><td class="post beyond selectable">7</td><td class="post beyond selectable">8</td><td class="post beyond selectable">9</td><td class="post beyond selectable">10</td><td class="post beyond selectable">11</td></tr></tbody></table></div></div>
  <div class="clear"></div></div>
    <script type="text/javascript">
     new Timeframe('date3_cal', {
        months: 1,
        startField: 'date3',
        endField: 'date3_end',maxRange:1,
              resetButton: 'reset' });
    </script></div>
        <div class="clear"></div>
        <div style="padding-bottom:5px;"></div>            <div class="left relative"><div style="position:relative;"><input style="width: 150px; display: none;" name="date4" onfocus="$('date4_cal').show();" onblur="$('date4_cal').hide();" value="" autocomplete="off"><input style="width:150px;" class="datepicker datebox timeframe_field start" name="date4" id="date4" onfocus="$('date4_cal').show();" onblur="$('date4_cal').hide();" value="" autocomplete="off">
  <input type="hidden" id="date4_end" class="timeframe_field end" value="">
  <div id="date4_cal" style="margin-top:20px;position:absolute;top:0;left:0;z-index:5000;background:#cccccc;padding:3px;display:none; border:1px solid #ccc;" class="timeframe_calendar"><ul id="date4_cal_menu" class="timeframe_menu"><li><a class="timeframe_button previous" href="#" onclick="return false;">←</a></li><li><a class="timeframe_button today" href="#" onclick="return false;">T</a></li><li><a class="timeframe_button reset" href="#" onclick="return false;">R</a></li><li><a class="timeframe_button next" href="#" onclick="return false;">→</a></li></ul><div id="date4_cal_container"><table id="date4_cal_calendar_0" border="0" cellspacing="0" cellpadding="5"><caption>July 2018</caption><thead><tr><th scope="col" abbr="Sunday">S</th><th scope="col" abbr="Monday">M</th><th scope="col" abbr="Tuesday">T</th><th scope="col" abbr="Wednesday">W</th><th scope="col" abbr="Thursday">T</th><th scope="col" abbr="Friday">F</th><th scope="col" abbr="Saturday">S</th></tr></thead><tbody><tr><td class="active selectable">1</td><td class="active selectable">2</td><td class="active selectable">3</td><td class="active selectable">4</td><td class="active selectable">5</td><td class="active selectable">6</td><td class="active selectable">7</td></tr><tr><td class="active selectable">8</td><td class="active selectable">9</td><td class="active selectable today">10</td><td class="active selectable">11</td><td class="active selectable">12</td><td class="active selectable">13</td><td class="active selectable">14</td></tr><tr><td class="active selectable">15</td><td class="active selectable">16</td><td class="active selectable">17</td><td class="active selectable">18</td><td class="active selectable">19</td><td class="active selectable">20</td><td class="active selectable">21</td></tr><tr><td class="active selectable">22</td><td class="active selectable">23</td><td class="active selectable">24</td><td class="active selectable">25</td><td class="active selectable">26</td><td class="active selectable">27</td><td class="active selectable">28</td></tr><tr><td class="active selectable">29</td><td class="active selectable">30</td><td class="active selectable">31</td><td class="post beyond selectable">1</td><td class="post beyond selectable">2</td><td class="post beyond selectable">3</td><td class="post beyond selectable">4</td></tr><tr><td class="post beyond selectable">5</td><td class="post beyond selectable">6</td><td class="post beyond selectable">7</td><td class="post beyond selectable">8</td><td class="post beyond selectable">9</td><td class="post beyond selectable">10</td><td class="post beyond selectable">11</td></tr></tbody></table></div></div>
  <div class="clear"></div></div>
    <script type="text/javascript">
     new Timeframe('date4_cal', {
        months: 1,
        startField: 'date4',
        endField: 'date4_end',maxRange:1,
              resetButton: 'reset' });
    </script></div>
        <div class="clear"></div>
        <div style="padding-bottom:5px;"></div>            <div class="left relative"><div style="position:relative;"><input style="width: 150px; display: none;" name="date5" onfocus="$('date5_cal').show();" onblur="$('date5_cal').hide();" value="" autocomplete="off"><input style="width:150px;" class="datepicker datebox timeframe_field start" name="date5" id="date5" onfocus="$('date5_cal').show();" onblur="$('date5_cal').hide();" value="" autocomplete="off">
  <input type="hidden" id="date5_end" class="timeframe_field end" value="">
  <div id="date5_cal" style="margin-top:20px;position:absolute;top:0;left:0;z-index:5000;background:#cccccc;padding:3px;display:none; border:1px solid #ccc;" class="timeframe_calendar"><ul id="date5_cal_menu" class="timeframe_menu"><li><a class="timeframe_button previous" href="#" onclick="return false;">←</a></li><li><a class="timeframe_button today" href="#" onclick="return false;">T</a></li><li><a class="timeframe_button reset" href="#" onclick="return false;">R</a></li><li><a class="timeframe_button next" href="#" onclick="return false;">→</a></li></ul><div id="date5_cal_container"><table id="date5_cal_calendar_0" border="0" cellspacing="0" cellpadding="5"><caption>July 2018</caption><thead><tr><th scope="col" abbr="Sunday">S</th><th scope="col" abbr="Monday">M</th><th scope="col" abbr="Tuesday">T</th><th scope="col" abbr="Wednesday">W</th><th scope="col" abbr="Thursday">T</th><th scope="col" abbr="Friday">F</th><th scope="col" abbr="Saturday">S</th></tr></thead><tbody><tr><td class="active selectable">1</td><td class="active selectable">2</td><td class="active selectable">3</td><td class="active selectable">4</td><td class="active selectable">5</td><td class="active selectable">6</td><td class="active selectable">7</td></tr><tr><td class="active selectable">8</td><td class="active selectable">9</td><td class="active selectable today">10</td><td class="active selectable">11</td><td class="active selectable">12</td><td class="active selectable">13</td><td class="active selectable">14</td></tr><tr><td class="active selectable">15</td><td class="active selectable">16</td><td class="active selectable">17</td><td class="active selectable">18</td><td class="active selectable">19</td><td class="active selectable">20</td><td class="active selectable">21</td></tr><tr><td class="active selectable">22</td><td class="active selectable">23</td><td class="active selectable">24</td><td class="active selectable">25</td><td class="active selectable">26</td><td class="active selectable">27</td><td class="active selectable">28</td></tr><tr><td class="active selectable">29</td><td class="active selectable">30</td><td class="active selectable">31</td><td class="post beyond selectable">1</td><td class="post beyond selectable">2</td><td class="post beyond selectable">3</td><td class="post beyond selectable">4</td></tr><tr><td class="post beyond selectable">5</td><td class="post beyond selectable">6</td><td class="post beyond selectable">7</td><td class="post beyond selectable">8</td><td class="post beyond selectable">9</td><td class="post beyond selectable">10</td><td class="post beyond selectable">11</td></tr></tbody></table></div></div>
  <div class="clear"></div></div>
    <script type="text/javascript">
     new Timeframe('date5_cal', {
        months: 1,
        startField: 'date5',
        endField: 'date5_end',maxRange:1,
              resetButton: 'reset' });
    </script></div>
        <div class="clear"></div>
        <div style="padding-bottom:5px;"></div>            <div class="left relative"><div style="position:relative;"><input style="width: 150px; display: none;" name="date6" onfocus="$('date6_cal').show();" onblur="$('date6_cal').hide();" value="" autocomplete="off"><input style="width:150px;" class="datepicker datebox timeframe_field start" name="date6" id="date6" onfocus="$('date6_cal').show();" onblur="$('date6_cal').hide();" value="" autocomplete="off">
  <input type="hidden" id="date6_end" class="timeframe_field end" value="">
  <div id="date6_cal" style="margin-top:20px;position:absolute;top:0;left:0;z-index:5000;background:#cccccc;padding:3px;display:none; border:1px solid #ccc;" class="timeframe_calendar"><ul id="date6_cal_menu" class="timeframe_menu"><li><a class="timeframe_button previous" href="#" onclick="return false;">←</a></li><li><a class="timeframe_button today" href="#" onclick="return false;">T</a></li><li><a class="timeframe_button reset" href="#" onclick="return false;">R</a></li><li><a class="timeframe_button next" href="#" onclick="return false;">→</a></li></ul><div id="date6_cal_container"><table id="date6_cal_calendar_0" border="0" cellspacing="0" cellpadding="5"><caption>July 2018</caption><thead><tr><th scope="col" abbr="Sunday">S</th><th scope="col" abbr="Monday">M</th><th scope="col" abbr="Tuesday">T</th><th scope="col" abbr="Wednesday">W</th><th scope="col" abbr="Thursday">T</th><th scope="col" abbr="Friday">F</th><th scope="col" abbr="Saturday">S</th></tr></thead><tbody><tr><td class="active selectable">1</td><td class="active selectable">2</td><td class="active selectable">3</td><td class="active selectable">4</td><td class="active selectable">5</td><td class="active selectable">6</td><td class="active selectable">7</td></tr><tr><td class="active selectable">8</td><td class="active selectable">9</td><td class="active selectable today">10</td><td class="active selectable">11</td><td class="active selectable">12</td><td class="active selectable">13</td><td class="active selectable">14</td></tr><tr><td class="active selectable">15</td><td class="active selectable">16</td><td class="active selectable">17</td><td class="active selectable">18</td><td class="active selectable">19</td><td class="active selectable">20</td><td class="active selectable">21</td></tr><tr><td class="active selectable">22</td><td class="active selectable">23</td><td class="active selectable">24</td><td class="active selectable">25</td><td class="active selectable">26</td><td class="active selectable">27</td><td class="active selectable">28</td></tr><tr><td class="active selectable">29</td><td class="active selectable">30</td><td class="active selectable">31</td><td class="post beyond selectable">1</td><td class="post beyond selectable">2</td><td class="post beyond selectable">3</td><td class="post beyond selectable">4</td></tr><tr><td class="post beyond selectable">5</td><td class="post beyond selectable">6</td><td class="post beyond selectable">7</td><td class="post beyond selectable">8</td><td class="post beyond selectable">9</td><td class="post beyond selectable">10</td><td class="post beyond selectable">11</td></tr></tbody></table></div></div>
  <div class="clear"></div></div>
    <script type="text/javascript">
     new Timeframe('date6_cal', {
        months: 1,
        startField: 'date6',
        endField: 'date6_end',maxRange:1,
              resetButton: 'reset' });
    </script></div>
        <div class="clear"></div>
        <div style="padding-bottom:5px;"></div>            <div class="left relative"><div style="position:relative;"><input style="width: 150px; display: none;" name="date7" onfocus="$('date7_cal').show();" onblur="$('date7_cal').hide();" value="" autocomplete="off"><input style="width:150px;" class="datepicker datebox timeframe_field start" name="date7" id="date7" onfocus="$('date7_cal').show();" onblur="$('date7_cal').hide();" value="" autocomplete="off">
  <input type="hidden" id="date7_end" class="timeframe_field end" value="">
  <div id="date7_cal" style="margin-top:20px;position:absolute;top:0;left:0;z-index:5000;background:#cccccc;padding:3px;display:none; border:1px solid #ccc;" class="timeframe_calendar"><ul id="date7_cal_menu" class="timeframe_menu"><li><a class="timeframe_button previous" href="#" onclick="return false;">←</a></li><li><a class="timeframe_button today" href="#" onclick="return false;">T</a></li><li><a class="timeframe_button reset" href="#" onclick="return false;">R</a></li><li><a class="timeframe_button next" href="#" onclick="return false;">→</a></li></ul><div id="date7_cal_container"><table id="date7_cal_calendar_0" border="0" cellspacing="0" cellpadding="5"><caption>July 2018</caption><thead><tr><th scope="col" abbr="Sunday">S</th><th scope="col" abbr="Monday">M</th><th scope="col" abbr="Tuesday">T</th><th scope="col" abbr="Wednesday">W</th><th scope="col" abbr="Thursday">T</th><th scope="col" abbr="Friday">F</th><th scope="col" abbr="Saturday">S</th></tr></thead><tbody><tr><td class="active selectable">1</td><td class="active selectable">2</td><td class="active selectable">3</td><td class="active selectable">4</td><td class="active selectable">5</td><td class="active selectable">6</td><td class="active selectable">7</td></tr><tr><td class="active selectable">8</td><td class="active selectable">9</td><td class="active selectable today">10</td><td class="active selectable">11</td><td class="active selectable">12</td><td class="active selectable">13</td><td class="active selectable">14</td></tr><tr><td class="active selectable">15</td><td class="active selectable">16</td><td class="active selectable">17</td><td class="active selectable">18</td><td class="active selectable">19</td><td class="active selectable">20</td><td class="active selectable">21</td></tr><tr><td class="active selectable">22</td><td class="active selectable">23</td><td class="active selectable">24</td><td class="active selectable">25</td><td class="active selectable">26</td><td class="active selectable">27</td><td class="active selectable">28</td></tr><tr><td class="active selectable">29</td><td class="active selectable">30</td><td class="active selectable">31</td><td class="post beyond selectable">1</td><td class="post beyond selectable">2</td><td class="post beyond selectable">3</td><td class="post beyond selectable">4</td></tr><tr><td class="post beyond selectable">5</td><td class="post beyond selectable">6</td><td class="post beyond selectable">7</td><td class="post beyond selectable">8</td><td class="post beyond selectable">9</td><td class="post beyond selectable">10</td><td class="post beyond selectable">11</td></tr></tbody></table></div></div>
  <div class="clear"></div></div>
    <script type="text/javascript">
     new Timeframe('date7_cal', {
        months: 1,
        startField: 'date7',
        endField: 'date7_end',maxRange:1,
              resetButton: 'reset' });
    </script></div>
        <div class="clear"></div>
        <div style="padding-bottom:5px;"></div>            <div class="left relative"><div style="position:relative;"><input style="width: 150px; display: none;" name="date8" onfocus="$('date8_cal').show();" onblur="$('date8_cal').hide();" value="" autocomplete="off"><input style="width:150px;" class="datepicker datebox timeframe_field start" name="date8" id="date8" onfocus="$('date8_cal').show();" onblur="$('date8_cal').hide();" value="" autocomplete="off">
  <input type="hidden" id="date8_end" class="timeframe_field end" value="">
  <div id="date8_cal" style="margin-top:20px;position:absolute;top:0;left:0;z-index:5000;background:#cccccc;padding:3px;display:none; border:1px solid #ccc;" class="timeframe_calendar"><ul id="date8_cal_menu" class="timeframe_menu"><li><a class="timeframe_button previous" href="#" onclick="return false;">←</a></li><li><a class="timeframe_button today" href="#" onclick="return false;">T</a></li><li><a class="timeframe_button reset" href="#" onclick="return false;">R</a></li><li><a class="timeframe_button next" href="#" onclick="return false;">→</a></li></ul><div id="date8_cal_container"><table id="date8_cal_calendar_0" border="0" cellspacing="0" cellpadding="5"><caption>July 2018</caption><thead><tr><th scope="col" abbr="Sunday">S</th><th scope="col" abbr="Monday">M</th><th scope="col" abbr="Tuesday">T</th><th scope="col" abbr="Wednesday">W</th><th scope="col" abbr="Thursday">T</th><th scope="col" abbr="Friday">F</th><th scope="col" abbr="Saturday">S</th></tr></thead><tbody><tr><td class="active selectable">1</td><td class="active selectable">2</td><td class="active selectable">3</td><td class="active selectable">4</td><td class="active selectable">5</td><td class="active selectable">6</td><td class="active selectable">7</td></tr><tr><td class="active selectable">8</td><td class="active selectable">9</td><td class="active selectable today">10</td><td class="active selectable">11</td><td class="active selectable">12</td><td class="active selectable">13</td><td class="active selectable">14</td></tr><tr><td class="active selectable">15</td><td class="active selectable">16</td><td class="active selectable">17</td><td class="active selectable">18</td><td class="active selectable">19</td><td class="active selectable">20</td><td class="active selectable">21</td></tr><tr><td class="active selectable">22</td><td class="active selectable">23</td><td class="active selectable">24</td><td class="active selectable">25</td><td class="active selectable">26</td><td class="active selectable">27</td><td class="active selectable">28</td></tr><tr><td class="active selectable">29</td><td class="active selectable">30</td><td class="active selectable">31</td><td class="post beyond selectable">1</td><td class="post beyond selectable">2</td><td class="post beyond selectable">3</td><td class="post beyond selectable">4</td></tr><tr><td class="post beyond selectable">5</td><td class="post beyond selectable">6</td><td class="post beyond selectable">7</td><td class="post beyond selectable">8</td><td class="post beyond selectable">9</td><td class="post beyond selectable">10</td><td class="post beyond selectable">11</td></tr></tbody></table></div></div>
  <div class="clear"></div></div>
    <script type="text/javascript">
     new Timeframe('date8_cal', {
        months: 1,
        startField: 'date8',
        endField: 'date8_end',maxRange:1,
              resetButton: 'reset' });
    </script></div>
        <div class="clear"></div>
        <div style="padding-bottom:5px;"></div>            <div class="left relative"><div style="position:relative;"><input style="width: 150px; display: none;" name="date9" onfocus="$('date9_cal').show();" onblur="$('date9_cal').hide();" value="" autocomplete="off"><input style="width:150px;" class="datepicker datebox timeframe_field start" name="date9" id="date9" onfocus="$('date9_cal').show();" onblur="$('date9_cal').hide();" value="" autocomplete="off">
  <input type="hidden" id="date9_end" class="timeframe_field end" value="">
  <div id="date9_cal" style="margin-top:20px;position:absolute;top:0;left:0;z-index:5000;background:#cccccc;padding:3px;display:none; border:1px solid #ccc;" class="timeframe_calendar"><ul id="date9_cal_menu" class="timeframe_menu"><li><a class="timeframe_button previous" href="#" onclick="return false;">←</a></li><li><a class="timeframe_button today" href="#" onclick="return false;">T</a></li><li><a class="timeframe_button reset" href="#" onclick="return false;">R</a></li><li><a class="timeframe_button next" href="#" onclick="return false;">→</a></li></ul><div id="date9_cal_container"><table id="date9_cal_calendar_0" border="0" cellspacing="0" cellpadding="5"><caption>July 2018</caption><thead><tr><th scope="col" abbr="Sunday">S</th><th scope="col" abbr="Monday">M</th><th scope="col" abbr="Tuesday">T</th><th scope="col" abbr="Wednesday">W</th><th scope="col" abbr="Thursday">T</th><th scope="col" abbr="Friday">F</th><th scope="col" abbr="Saturday">S</th></tr></thead><tbody><tr><td class="active selectable">1</td><td class="active selectable">2</td><td class="active selectable">3</td><td class="active selectable">4</td><td class="active selectable">5</td><td class="active selectable">6</td><td class="active selectable">7</td></tr><tr><td class="active selectable">8</td><td class="active selectable">9</td><td class="active selectable today">10</td><td class="active selectable">11</td><td class="active selectable">12</td><td class="active selectable">13</td><td class="active selectable">14</td></tr><tr><td class="active selectable">15</td><td class="active selectable">16</td><td class="active selectable">17</td><td class="active selectable">18</td><td class="active selectable">19</td><td class="active selectable">20</td><td class="active selectable">21</td></tr><tr><td class="active selectable">22</td><td class="active selectable">23</td><td class="active selectable">24</td><td class="active selectable">25</td><td class="active selectable">26</td><td class="active selectable">27</td><td class="active selectable">28</td></tr><tr><td class="active selectable">29</td><td class="active selectable">30</td><td class="active selectable">31</td><td class="post beyond selectable">1</td><td class="post beyond selectable">2</td><td class="post beyond selectable">3</td><td class="post beyond selectable">4</td></tr><tr><td class="post beyond selectable">5</td><td class="post beyond selectable">6</td><td class="post beyond selectable">7</td><td class="post beyond selectable">8</td><td class="post beyond selectable">9</td><td class="post beyond selectable">10</td><td class="post beyond selectable">11</td></tr></tbody></table></div></div>
  <div class="clear"></div></div>
    <script type="text/javascript">
     new Timeframe('date9_cal', {
        months: 1,
        startField: 'date9',
        endField: 'date9_end',maxRange:1,
              resetButton: 'reset' });
    </script></div>
        <div class="clear"></div>
        <div style="padding-bottom:5px;"></div>            <div class="left relative"><div style="position:relative;"><input style="width: 150px; display: none;" name="date10" onfocus="$('date10_cal').show();" onblur="$('date10_cal').hide();" value="" autocomplete="off"><input style="width:150px;" class="datepicker datebox timeframe_field start" name="date10" id="date10" onfocus="$('date10_cal').show();" onblur="$('date10_cal').hide();" value="" autocomplete="off">
  <input type="hidden" id="date10_end" class="timeframe_field end" value="">
  <div id="date10_cal" style="margin-top:20px;position:absolute;top:0;left:0;z-index:5000;background:#cccccc;padding:3px;display:none; border:1px solid #ccc;" class="timeframe_calendar"><ul id="date10_cal_menu" class="timeframe_menu"><li><a class="timeframe_button previous" href="#" onclick="return false;">←</a></li><li><a class="timeframe_button today" href="#" onclick="return false;">T</a></li><li><a class="timeframe_button reset" href="#" onclick="return false;">R</a></li><li><a class="timeframe_button next" href="#" onclick="return false;">→</a></li></ul><div id="date10_cal_container"><table id="date10_cal_calendar_0" border="0" cellspacing="0" cellpadding="5"><caption>July 2018</caption><thead><tr><th scope="col" abbr="Sunday">S</th><th scope="col" abbr="Monday">M</th><th scope="col" abbr="Tuesday">T</th><th scope="col" abbr="Wednesday">W</th><th scope="col" abbr="Thursday">T</th><th scope="col" abbr="Friday">F</th><th scope="col" abbr="Saturday">S</th></tr></thead><tbody><tr><td class="active selectable">1</td><td class="active selectable">2</td><td class="active selectable">3</td><td class="active selectable">4</td><td class="active selectable">5</td><td class="active selectable">6</td><td class="active selectable">7</td></tr><tr><td class="active selectable">8</td><td class="active selectable">9</td><td class="active selectable today">10</td><td class="active selectable">11</td><td class="active selectable">12</td><td class="active selectable">13</td><td class="active selectable">14</td></tr><tr><td class="active selectable">15</td><td class="active selectable">16</td><td class="active selectable">17</td><td class="active selectable">18</td><td class="active selectable">19</td><td class="active selectable">20</td><td class="active selectable">21</td></tr><tr><td class="active selectable">22</td><td class="active selectable">23</td><td class="active selectable">24</td><td class="active selectable">25</td><td class="active selectable">26</td><td class="active selectable">27</td><td class="active selectable">28</td></tr><tr><td class="active selectable">29</td><td class="active selectable">30</td><td class="active selectable">31</td><td class="post beyond selectable">1</td><td class="post beyond selectable">2</td><td class="post beyond selectable">3</td><td class="post beyond selectable">4</td></tr><tr><td class="post beyond selectable">5</td><td class="post beyond selectable">6</td><td class="post beyond selectable">7</td><td class="post beyond selectable">8</td><td class="post beyond selectable">9</td><td class="post beyond selectable">10</td><td class="post beyond selectable">11</td></tr></tbody></table></div></div>
  <div class="clear"></div></div>
    <script type="text/javascript">
     new Timeframe('date10_cal', {
        months: 1,
        startField: 'date10',
        endField: 'date10_end',maxRange:1,
              resetButton: 'reset' });
    </script></div>
        <div class="clear"></div>
        <div style="padding-bottom:5px;"></div>    </div>
    </div>
	</div>
</div>