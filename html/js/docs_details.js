$(function(){
	
	var baseurl = $("#base_url").val();

	$(".edttuppdf").on("click",function(){

		var usereg = new FormData($("#edtpdffrm")[0]); 
		$.ajax({
			url : baseurl+"Docs_details/edt_doc_dataa",
			type :"POST",
			data :usereg,	
			contentType:false,
			processData:false,
			success:function(res)
			{
				swal("Save successfully!", "success")
				$('.swal-button--confirm').on('click',function(){
					window.location.reload();
				});
			}
		 });

	});
});