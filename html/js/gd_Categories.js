
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
	           $(document.body).load(location.href);
	          }
	        });
	  });


	   $('.edtcatbtn').on("click",function()
	  {
	  	 var condata = new FormData($("#catfrm")[0]);
	        $.ajax({
	        url : baseurl+"Gd_Categories/edtt_guiddata/",
	          type :"POST",
	          data :condata, 
	          contentType:false,
	          processData:false,
	          success:function(res)
	          {
	           $(document.body).load(location.href);
	          }
	        });
	  });

	   $(".btndelete").on("click",function()
	   {
	   		var id = $(this).data("id");
	   		if(confirm("are you sure to delete this??")){
	   		$.post(baseurl+"Gd_Categories/delete_cat/"+id,function()
	   		{

	   		});
	   	  }
	   });

});