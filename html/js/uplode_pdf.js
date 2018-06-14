$(function()
{
    var baseurl = $("#base_url").val();
    /*$('select').formSelect();*/
	 
	  $('.uppdf').on("click",function()
	  {
	  	 var condata = new FormData($("#pdffrm")[0]);
	        $.ajax({
	        url : baseurl+"Uplode_pdf/add_pdffile/",
	          type :"POST",
	          data :condata, 
	          contentType:false,
	          processData:false,
	          success:function(res)
	          {
	           alert("pdf Added Successfully.");
	           window.location.reload();
	          }
	        });
	  });

});