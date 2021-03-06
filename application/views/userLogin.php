<style type="text/css">
.create-acc a{
	color: rebeccapurple;
	font-family: unset;
	font-size: 15px;
	-webkit-transition:all 0.2s ease-in-out;
    -moz-transition:all 0.2s ease-in-out;
    -o-transition:all 0.2s ease-in-out;
    transition:all 0.2s ease-in-out;
}
.create-acc a:hover {
    letter-spacing: 2px;
    font-size: 16px;
    font-weight: bold;
    -webkit-transition:all 0.2s ease-in-out;
    -moz-transition:all 0.2s ease-in-out;
    -o-transition:all 0.2s ease-in-out;
    transition:all 0.2s ease-in-out;
}
</style>
<div class="mainBox">
	<div class="row-odd">		
		<div class="row">
			<div class="max-width">
			<div class="col s12 m12">
				<div class="col s12 m12 center"><h4>User Login</h4></div>
				<div class="adminBox">
					<div class="admin-login-box">
					<form name="admin_login" id="admin_login" method="POST">
						<div class="col s12 m12">
							<input type="text" name="email" id="u_email" placeholder="Email">
						</div>
						<div class="col s12 m12">
							<input type="password" name="password" id="u_password" placeholder="Passwords">
						</div>
						<div class="col s12 m12 center">
							<input type="button" name="admin_login" value="Authintication" class="btn btn_user_login">
						</div>
						<div class="col s12 m12 create-acc">
						<p class="center">Don't have Account? &nbsp;<a href="#" class="register">Create Account</a></p>
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


	$(".register").on("click",function()
	{
		$(".modal").modal();
		$("#user_register").modal("open");
	});
</script>


  <!-- Modal Structure -->
  <div id="user_register" class="modal">
    <div class="modal-content">
     <?php $this->load->view("user_register"); ?>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat useregbtn">Agree</a>
    </div>
  </div>
