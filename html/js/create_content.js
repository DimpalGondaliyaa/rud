
$(function()
{
	 var baseurl = $("#base_url").val();

	  $('.add_content').on("click",function()
	  {
	  	 var condata = new FormData($("#contentfrm")[0]);
	        $.ajax({
	        url : baseurl+"Create_content/add_contentdata/",
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

	    $('.edt_content').on("click",function()
	  {
	  	 var condata = new FormData($("#contentfrm")[0]);
	        $.ajax({
	        url : baseurl+"Create_content/edt_contentdata/",
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

	    $(".del_content").on("click",function()
	    {
	    	var i = $(this).data("id");
	    	if(confirm("are you sure to delete this???")){
	    	$.post(baseurl+"Create_content/delete_contentdata/"+i,function(){
	    		window.location.href=baseurl+"Guidelines";
	    	});
	    }
	    });


});