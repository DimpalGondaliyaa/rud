$(function()
{
	 var baseurl = $("#base_url").val();
	  $('.materialboxed').materialbox();
	 /*	    $('select').formSelect();*/
	 
	
	  $('.addfiledata').on("click",function()
	  {
	  	 var condata = new FormData($("#filefrm")[0]);
	        $.ajax({
	        url : baseurl+"UploadFile/add_file/",
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

	   $('.edtdatabtn').on("click",function()
	  {
	  	 var condata = new FormData($("#edtfilefrm")[0]);
	        $.ajax({
	        url : baseurl+"UploadFile/edt_file/",
	          type :"POST",
	          data :condata, 
	          contentType:false,
	          processData:false,
	          success:function(res)
	          {
	           alert("Project update Successfully.");
	           window.location.reload();
	          }
	        });
	  });

	  
	  $("#example").on("click",".edtfiledata", function()
	{
		$(".modal").modal();
		$("#fileedtmodel").modal("open");
		 $("#fileedtmodel .modal-content").html("");
		  var id = $(this).data("id");
	    $.post(baseurl+"UploadFile/fetchfiledata/"+id,function(id){
	    	 $("#fileedtmodel .modal-content").html(id);

	    }); 
	});


	   $("#example").on("click",".filedltbtn", function()
	{
		  var id = $(this).data("id");
		  if(confirm("Are You Sure To Delete This???")){
	    $.post(baseurl+"UploadFile/deletedata/"+id,function(id){
	    	window.location.reload();

	    }); 
		}
	});
});

 $(document).ready(function(){
    $('select').formSelect();
  });
      