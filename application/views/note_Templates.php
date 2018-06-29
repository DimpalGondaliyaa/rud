<div class="main-box">
	<div class="cmdtitle">
		<a href="<?php echo base_url(); ?>Administration">user & administration</a> > <a href="<?php echo base_url(); ?>Note_Templates">Note_Templates</a>
	</div>

	<div class="main-menu row">
		<div class="mydiv">
			<h4 class="et">create / edit Templates</h4>
			<div class="col s12 m9">

				<div class="boxx">
      <h4>Template Body</h4>
      <textarea name="note" id="note" class="w100 bsb p10 f14" style="height:94px;"></textarea>

      <a href="#null" onclick="document.frm.submit();" class="ib wp100 bsb greenbtn btn">Save Template</a>
      
    </div>
			</div>
			<div class="col s12 m3">
				<div class="boxx">
      <h4>Shared With</h4> 
      <select style="width:160px; height: 147px;" multiple="multiple" size="7" name="sharedwith[]" id="sharedwith"><option value="0">--Everyone--</option><optgroup label="Teams"><option value="t_10562">Super Admins</option><option value="t_10568">Sales</option><option value="t_11040">gggg</option></optgroup><optgroup label="Users"><option value="3204459">Anderson, Richard</option><option value="3177071">Cannon, Jeff</option><option value="3166835">Goodman, Alexander</option><option value="3254259">Goodman, Alex</option><option value="3166850">Harrison, Anthony</option><option value="3167522">Lee, Devin</option><option value="3170984">Morris, James</option><option value="3133547">PayPro, Debt</option><option value="3193601">Richardson, Raymond</option><option value="3177659">Smith, Greg</option><option value="3142430">Vargas, Alex</option><option value="3177203">Williams, Samantha</option></optgroup></select>    </div>
			</div>

			<h4 class="et">Existing Templates</h4>
			<p class="notation">Drag and drop items below to order them</p>
			<div class="condcont">
  <ul id="notelist" class="ui-sortable"></ul>  </div>
		</div>
	</div>
</div>