$(function(){

	$('#example').DataTable();

	var baseurl = $("#base_url").val();
	 $('.modal').modal();

	$('.tv-slider').carousel({fullWidth: true, padding:0},setTimeout(autoplay, 4500));

  function autoplay() {
    $('.carousel').carousel('next');
    new WOW().init();
    setTimeout(autoplay, 7500);
	 }
	 
	 
	 $(".editcontact").on("click",function()
	{
		var edtcontactfrm = new FormData($("#edtcontactfrm")[0]); 
		$.ajax({
			url : baseurl+"Home/edtcontactdata",
			type :"POST",
			data :edtcontactfrm,	
			contentType:false,
			processData:false,
			success:function(res)
			{
				swal("Good job!", "Contact Added to Our Contact List Successfully!", "success")
				$('.swal-button--confirm').on('click',function(){
					window.location.reload();
				});
			}
		 });


});
	

	$(".conedtbtn").on("click",function()
	{
		$(".modal").modal();
		$("#contactedit").modal("open");
		 $("#contactedit .modal-content").html("");
		  var id = $(this).data("id");
	    $.post(baseurl+"home/fetchcondata/"+id,function(id){
	    	 $("#contactedit .modal-content").html(id);

	    }); 
	});

	$(".condltbtn").on("click",function()
	{

	});
	
});