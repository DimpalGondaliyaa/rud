$(function(){
	
	var baseurl = $("#base_url").val();

	$(".btn_user_login").on("click",function(){
		var data = {
			'email' : $("#u_email").val(),
			'password' : $("#u_password").val()
		};
			/*$.post(baseurl+"login/dologin/",{data:data},function(data){*/
			$.post(baseurl+"UserLogin/userloginnn",{data:data},function(data){

				var check = jQuery.parseJSON(data);
				if(check.status=='ok')
				{
					swal("Good job!", "Login Success!", "success");
					$('.swal-button').on('click',function(){
						window.location.href=baseurl+"UserDashboard";
					});
					$('.swal-overlay').on('click',function(){
						window.location.href=baseurl+"UserDashboard";
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

	$(".useregbtn").on("click", function()
	{
		var usereg = new FormData($("#usereg")[0]); 
		$.ajax({
			url : baseurl+"UserLogin/adduserdata",
			type :"POST",
			data :usereg,	
			contentType:false,
			processData:false,
			success:function(res)
			{
				swal("Good job!", "Account has been created successfully!", "success")
				$('.swal-button--confirm').on('click',function(){
					window.location.reload();
				});
			}
		 });
    });

});