$(function(){

	$('#example').DataTable({ "pageLength": 100});
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
				swal("Good job!", "Account has been created Successfully!", "success")
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



	/*Change Status*/

	

	$("#example").on("click",".changeStatus", function()
	{
		$(".modal").modal();
		$("#statusChanged").modal("open");
		 $("#statusChanged .modal-content").html("");
		  var id = $(this).data("id");
		$.post(baseurl+"Home/fetchStatus/"+id,function(id){
	    	 $("#statusChanged .modal-content").html(id);

	    }); 
	});


	$(".editStatus").on("click", function()
	{
		var edtcontactfrm = new FormData($("#edtStatusfrm")[0]); 
		$.ajax({
			url : baseurl+"Home/edtcontactStatus",
			type :"POST",
			data :edtcontactfrm,	
			contentType:false,
			processData:false,
			success:function(res)
			{
				swal("Good job!", "Stage/Status has been Updated Successfully!", "success")
				$('.swal-button--confirm').on('click',function(){
					window.location.reload();
				});
			}
		 });
    });

});
	