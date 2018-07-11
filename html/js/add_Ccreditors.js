
$(function()
{
	 var baseurl = $("#base_url").val();

	  $('.addcadi').on("click",function()
	  {
	  	 var condata = new FormData($("#addcredifrm")[0]);
	        $.ajax({
	        url : baseurl+"Add_Ccreditors/add_caddd/",
	          type :"POST",
	          data :condata, 
	          contentType:false,
	          processData:false,
	          success:function(res)
	          {
	           alert("Added Successfully.");
	           window.location.reload();
	           window.location.href=baseurl+"Ccreditors";
	          }
	        });
	  });

	   $('.editcadi').on("click",function()
	  {
	  	 var condata = new FormData($("#addcredifrm")[0]);
	        $.ajax({
	        url : baseurl+"Add_Ccreditors/EDIT_caddd/",
	          type :"POST",
	          data :condata, 
	          contentType:false,
	          processData:false,
	          success:function(res)
	          {
	           alert("update Successfully.");
	           window.location.reload();
	           window.location.href=baseurl+"Ccreditors";
	          }
	        });
	  });

	    $(".deletecadi").on("click",function()
	   {
	   		var id = $(this).data("id");

	   		if(confirm("are you sure to delete this???")){
		   		$.post(baseurl+"Add_Ccreditors/deete_caddd/"+id,function()
		   		{
		   			window.location.reload();
		   			window.location.href=baseurl+"Ccreditors";
		   		});
	   	    }
	   });

});