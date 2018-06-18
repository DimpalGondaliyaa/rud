<div class="main-box">
	<div class="cmdtitle">
		<a href="<?php echo base_url(); ?>E_marketing">E marketing</a>><a href="<?php echo base_url(); ?>Schedule_E_marketing">Schedule a lunch</a>
	</div>

	<div class="main-menu row">

		 <nav class="contactnav">
		    <div class="nav-wrapper connavwapp">
		      <ul id="nav-mobile" class="hide-on-med-and-down" style="position: relative;left: 5px;}">
		        <li><a href="<?php echo base_url(); ?>Schedule_E_marketing"><img class="iconstyle" src="<?php echo base_url() ?>html/images/accept.png">schedule this lunch</a></li>
		        <li><a href="#"><img class="iconstyle" src="<?php echo base_url() ?>html/images/cross.png">cancel</a></li>
		      </ul>
		    </div>
		  </nav>


		  <div class="input-field col s12 m3 boxxx">
			 <div id="colleft" style="width:400px;">
                <h3 class="title theme">Campaign Setup</h3>
                <div class="left">
                    <h3>Campaign Title:</h3>
                    <input name="title" type="text" id="title" size="40" value="">
                </div>
                <div class="cattitle">Is this a single or a re-occurring campaign? </div>
                <div  class="radiobox">

				      <label>
				        <input name="group1" type="radio" checked />
				        <span>single</span>
				      </label>
				  
				      <label>
				        <input name="group1" type="radio" />
				        <span>re-occuring</span>
				      </label>
				    
                </div>

                <div class="conbox">
                	<div class="wentitle">When would you like this campaign to start?</div>
                	<div class="wencon">Email Campaigns will not show in recently sent until the campaign has completed running. There may be delays between when the campaign is scheduled and actually sent. We're working on improvements to this system.</div>
                </div>

                <div  class="datee">
                	   <head>
						  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
						  
						  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
						  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
						  <script>
						  $( function() {
						    $( "#datepicker" ).datepicker();
						  } );
						  </script>
						</head>
						<body>
							<div id="main" class="well text-center col s12 m6 lunbox"> 
							<label>start date</label>
							  <input id="datepicker" v-model="newDate" >
							</div>
							<div class="col s12 m6 lunbox">
								<label>lunch time</label>
								<select id="start_time" name="start_time" class="w70">
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
									<option value="6:00 am" selected="selected">6:00 am</option>
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
						</body>
                </div>
            </div>
		 </div>

		  <div class="input-field col s12 m3 boxxx">
			 <div id="colleft" style="width:400px;">
                <h3 class="title theme">Email Delivery</h3>
             </div>
                <h3 class="What">What list(s) is this campaign going to:
                    <p class="notation">Duplicate emails between lists will be skipped</p>
                </h3>
                  <div class="input-field col s12">
				    <select>
				      <option value="" disabled selected>Choose your option</option>
				      <option value="1">Option 1</option>
				      <option value="2">Option 2</option>
				      <option value="3">Option 3</option>
				    </select>
				  </div>

				   <div class="input-field col s12">
				    <select>
				      <option value="" disabled selected>Choose your option</option>
				      <option value="1">Option 1</option>
				      <option value="2">Option 2</option>
				      <option value="3">Option 3</option>
				    </select>
				    <label class="selectlab">Select Template To Use:</label>
				  </div>

				   <div class="input-field col s12">
				    <select>
				      <option value="" disabled selected>Choose your option</option>
				      <option value="1">Option 1</option>
				      <option value="2">Option 2</option>
				      <option value="3">Option 3</option>
				    </select>
				    <label class="selectlab">Select Sender:</label>
				  </div>
               
                <h3 class="What">Unsubscribe Redirect</h3>
                <input class="w99" type="text" name="returnurl" value="">
                <p class="notation">optional field: use if you wish to direct the contact to another website after unsubscribing. I.E. http://www.domain.com/sorry-you-left</p>

                <h3 class="theme title">Options</h3>
                <input name="notify_assigned" type="checkbox" id="notify_assigned" value="1" style="border: none;">
                <h3 style="display:inline;" class="What">Notify Assigned To On Open</h3>
                <div class="spacer15"></div>

                <input name="notify_creator" type="checkbox" id="notify_creator" value="1" style="border: none;">
                <h3 style="display:inline;" class="What">Notify Campaign Creator On Open</h3>
                <div class="spacer15"></div>
            </div>
          </div>
	</div>
</div>


<script type="text/javascript">
	new Vue ({
  el: '#main',
  data: {
    newDate: '',
    dates: [
      {text: ''}
    ]
  },
  methods: {
    addDate: function(){
      var text = this.newDate.trim()
      if (text){
        this.dates.push({text: text})
        this.newDate = ''
      }
    },
    deleteDate(){
      
    }
  }
})
</script>