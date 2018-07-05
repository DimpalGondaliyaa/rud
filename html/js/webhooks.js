$(function()
{
	 var baseurl = $("#base_url").val();
	 
	  $('.addwebb').on("click",function()
	  {
	  	 var add_user = new FormData($("#webhookfrm")[0]);
	        $.ajax({
	        url : baseurl+"Webhooks/add_Webhooks/",
	          type :"POST",
	          data :add_user, 
	          contentType:false,
	          processData:false,
	          success:function(res)
	          {
	          /* $(document.body).load(location.href);*/
	           window.location.reload();
	          }
	        });
	  });

});
