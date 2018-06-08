$(function(){

    $('.sidenav').sidenav();
	var baseurl = $("#base_url").val();

	$('#u_email').keyup(function(){
	
      	var ref_code=$("#u_email").val();
          $.ajax({
           	type:'post',
           	url:baseurl+"UserLogin/getEmail/",
           	data:{ref_code: ref_code},
        	data:{ref_code: ref_code},
		    success:function(msg){
            if(msg.indexOf('Email Already Exist') > -1){
            		 $('#MobileMsg').html('<span style="color: red;">'+msg+"</span>");  
                     $('.user_Register').attr("disabled", "disabled");
                }
            else{ 
		        	$('#MobileMsg').html('');
		        	$('.user_Register').removeAttr('disabled');
	        	}
            }
 		});

	});

});