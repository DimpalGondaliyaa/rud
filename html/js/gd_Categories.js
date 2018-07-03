
$(function()
{
	 var baseurl = $("#base_url").val();

	  $('.catbrnn').on("click",function()
	  {
	  	 var condata = new FormData($("#catfrm")[0]);
	        $.ajax({
	        url : baseurl+"Gd_Categories/add_guiddata/",
	          type :"POST",
	          data :condata, 
	          contentType:false,
	          processData:false,
	          success:function(res)
	          {
	           /*alert("Project Added Successfully.");
	           window.location.reload();*/
	           $(document.body).load(location.href);
	          }
	        });
	  });

});