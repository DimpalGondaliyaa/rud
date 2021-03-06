$(function(){

	$('#example').DataTable();
	$('#example1').DataTable({

		"paging":   false,
        "ordering": false,
        "info":     false

	});
	var baseurl = $("#base_url").val();

	 $('.modal').modal();
	
   $(".editcontact").on("click", function()
	{
		var edtcontactfrm = new FormData($("#edtcontactfrm")[0]); 
		$.ajax({
			url : baseurl+"UserDashboard/edtcontactdata",
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
	
	$("#example1").on("click",".conedtbtn", function()
	{
		$(".modal").modal();
		$("#contactedit").modal("open");
		 $("#contactedit .modal-content").html("");
		  var id = $(this).data("id");
	    $.post(baseurl+"UserDashboard/fetchcondata/"+id,function(id){
	    	 $("#contactedit .modal-content").html(id);

	    }); 
	});

	$("#example").on("click",".condltbtn", function()
	{
		 var id = $(this).data("id");

		 swal({
				  title: "Are you sure?",
				  text: "Once deleted, you will not be able to recover this Record!",
				  icon: "warning",
				  buttons: true,
				  dangerMode: true,
				})
				.then((willDelete) => {
				  if (willDelete) {
				$.ajax({

				url : baseurl+"UserDashboard/deletecon/"+id,
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
	