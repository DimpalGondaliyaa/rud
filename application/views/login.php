<div class="mainBox">
	<div class="row-odd">		
		<div class="row">
			<div class="max-width">
			<div class="col s12 m12">
				<div class="col s12 m12 center"><h4>Admin Login</h4></div>
				<div class="adminBox">
					<div class="admin-login-box">
					<form name="admin_login" id="admin_login" method="POST">
						<div class="col s12 m12 valign-wrapper">
							<div class="col s4 m3">Username</div>
							<div class="col s8 m9">
							 <i class="material-icons prefix" style="position: absolute;margin-top: 15px; z-index: 1;margin-left: 3px;padding: 5px;color: #aaa;">person</i>
          					<input type="text" name="email" id="a_email" class="bx" placeholder="Email">
          					</div>
						</div>
						<div class="col s12 m12 valign-wrapper">
							<div class="col s4 m3">Password</div>
							<div class="col 8 m9">
							<i class="material-icons prefix" style="position: absolute;margin-top: 15px; z-index: 1;margin-left: 3px;padding: 5px;color: #aaa;">lock</i>
							<input type="text" name="password" class="bx" id="a_password" placeholder="Passwords"></div>
						</div>
						<div class="col s12 m12 center">
							<div class="col s4 m3"></div>
							<div class="col s4 m3">
							<input type="button" name="admin_login" value="Login" class="btn btn_admin_login">
							</div>
							<div class="col s4 m6">
							<p style="text-align: left;position: relative;left: -20px;">Remember Me</p>
							<input type="checkbox" name="" class="chk">
							</div>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col s12 m12 center btm-link">
		<a href="#!">Support Center</a> <a href="#!">Privacy Policy</a>
	</div>
</div>
</div>
<script type="text/javascript">
	$(function(){
		 $("#login-button").click(function(event){
		 event.preventDefault();
	 
	 $('form').fadeOut(500);
	 $('.wrapper').addClass('form-success');
});
	})
</script>