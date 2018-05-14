$(function()
{
	 var baseurl = $("#base_url").val();

	 $(document).ready(function(){
	    $('select').formSelect();
	  });

	  
	  $(document).ready(function(){
	    $('.datepicker').datepicker();
	  });

	  $('.addcontactdata').on("click",function()
	  {
	  	 var condata = new FormData($("#contactfrm")[0]);
	        $.ajax({
	        url : baseurl+"Add_Contact/add_contactt/",
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