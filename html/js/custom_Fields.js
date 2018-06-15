$(function()
{
	 var baseurl = $("#base_url").val();

	
	  $('#savebtn').on("click",function()
	  {
	  	 var condata = new FormData($("#cffrm")[0]);
	        $.ajax({
	        url : baseurl+"Custom_Fields/add_cfdata/",
	          type :"POST",
	          data :condata, 
	          contentType:false,
	          processData:false,
	          success:function(res)
	          {
	           alert("Project Added Successfully.");
	           window.location.reload();
	          }
	        });
	  });

});