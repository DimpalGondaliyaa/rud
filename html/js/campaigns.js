
  $(document).ready(function(){
    $('.datepicker').datepicker();
  });


  $(function()
{
	 var baseurl = $("#base_url").val();
	 
	  $('.savecampbtn').on("click",function()
	  {
	  	 var add_user = new FormData($("#campfrm")[0]);
	        $.ajax({
	        url : baseurl+"Campaigns/add_campdata/",
	          type :"POST",
	          data :add_user, 
	          contentType:false,
	          processData:false,
	          success:function(res)
	          {
	          /* $(document.body).load(location.href);*/
	          window.location.reload();
	          /* window.location.reload();*/
	          }
	        });
	  });

	   $('.edtcampbtn').on("click",function()
	  {
	  	 var add_user = new FormData($("#campfrm")[0]);
	        $.ajax({
	        url : baseurl+"Campaigns/edt_campdata/",
	          type :"POST",
	          data :add_user, 
	          contentType:false,
	          processData:false,
	          success:function(res)
	          {
	          /* $(document.body).load(location.href);*/
	          window.location.reload();
	          /* window.location.reload();*/
	          }
	        });
	  });

	   $(".deletecampbtn").on("click",function()
	   {
	   		var id = $(this).data("id");

	   		if(confirm("are you sure to delete this???")){
		   		$.post(baseurl+"Campaigns/dlt_campdata/"+id,function()
		   		{
		   			window.location.reload();
		   			window.location.href=baseurl+"Campaigns";
		   		});
	   	    }
	   });

});
