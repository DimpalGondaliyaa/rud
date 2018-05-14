$(function(){
	
	var baseurl = $("#base_url").val();

	$(".btn_admin_login").on("click",function(){
		var data = {
			'email' : $("#a_email").val(),
			'password' : $("#a_password").val()
		};
			/*$.post(baseurl+"login/dologin/",{data:data},function(data){*/
			$.post(baseurl+"UserLogin/login",{data:data},function(data){

				var check = jQuery.parseJSON(data);
				if(check.status=='ok')
				{
					swal("Good job!", "Login Success!", "success");
					$('.swal-button').on('click',function(){
						window.location.href=baseurl+"home";
					});
					$('.swal-overlay').on('click',function(){
						window.location.href=baseurl+"home";
					});
					
					/*$('form[name=signinFrom]').html('');*/
				}
				else if(check.status=='fail')
				{
					alert("login fail");
				}
				else
				{
					alert("Please Check your Login Details.");
					/*window.location.reload();*/
					console.log(data);
				}
			});
	});

})