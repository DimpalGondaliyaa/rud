$(function()
{
	 var baseurl = $("#base_url").val();

	  $('.saveevent').on("click",function()
	  {
	  	 var condata = new FormData($("#etfrm")[0]);
	        $.ajax({
	        url : baseurl+"Event_Types/add_evnt/",
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

	    $('.editevent').on("click",function()
	  {
	  	 var condata = new FormData($("#etfrm")[0]);
	        $.ajax({
	        url : baseurl+"Event_Types/edit_evnt/",
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

	    $(".deleteevent").on("click",function()
	    {
	    	var id = $(this).data("id");

	   		if(confirm("are you sure to delete this???")){
		   		$.post(baseurl+"Event_Types/dlt_event/"+id,function()
		   		{
		   			window.location.reload();
		   			window.location.href=baseurl+"Event_Types";
		   		});
	   	    }

	    });

});