$(function()
{
	 var baseurl = $("#base_url").val();
	 
	  $('.addusaerBTN').on("click",function()
	  {
	  	 var add_user = new FormData($("#add_user")[0]);
	        $.ajax({
	        url : baseurl+"Add_User/add_userdata/",
	          type :"POST",
	          data :add_user, 
	          contentType:false,
	          processData:false,
	          success:function(res)
	          {
	           $(document.body).load(location.href);
	           window.location.href=baseurl+"Edit_User";
	          /* window.location.reload();*/
	          }
	        });
	  });

});
