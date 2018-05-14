$(function(){

	$('#example').DataTable();
	var baseurl = $("#base_url").val();

	 $('.modal').modal();
	
   $(".editcontact").on("click", function()
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
	
	$("#example").on("click",".conedtbtn", function()
	{
		$(".modal").modal();
		$("#contactedit").modal("open");
		 $("#contactedit .modal-content").html("");
		  var id = $(this).data("id");
	    $.post(baseurl+"home/fetchcondata/"+id,function(id){
	    	 $("#contactedit .modal-content").html(id);

	    }); 
	});

	$("#example").on("click",".condltbtn", function()
	{
		 var id = $(this).data("id");

		 swal({
				  title: "Are you sure?",
				  text: "Once deleted, you will not be able to recover this Product!",
				  icon: "warning",
				  buttons: true,
				  dangerMode: true,
				})
				.then((willDelete) => {
				  if (willDelete) {
				$.ajax({

				url : baseurl+"home/deletecon/"+id,
				type :"POST",
				contentType:false,
				processData:false,
				success:function(res)
				{
					swal("Poof! Your Data has been deleted!", {
					          icon: "success",
					    });
					$('.swal-button').on('click',function(){
							window.location.reload();
						});       
				}
			});
			} else {
			      swal("Your Data is safe!");
			  }
			});
    }); 
});
	