$(function()
{
	 var baseurl = $("#base_url").val();

	
	  $('#edtsavebtn').on("click",function()
	  {
	  	 var condata = new FormData($("#cffrm")[0]);
	        $.ajax({
	        url : baseurl+"Edt_Custom_Fields/edt_cfdata/",
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