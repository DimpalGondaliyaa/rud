<div class="mainBox">
	<div class="row-odd">		
		<div class="row">
			<div class="max-width">
			<div class="col s12 m12">
				<div class="col s12 m12 center"><h4>Admin Login</h4></div>
				<div class="adminBox">
					<div class="admin-login-box">
					<form name="admin_login" id="admin_login" method="POST">
						<div class="col s12 m12">
							<input type="text" name="email" id="a_email" placeholder="Email">
						</div>
						<div class="col s12 m12">
							<input type="text" name="password" id="a_password" placeholder="Passwords">
						</div>
						<div class="col s12 m12 center">
							<input type="button" name="admin_login" value="Authintication" class="btn btn_admin_login">
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
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