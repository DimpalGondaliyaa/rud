$(function()
{
	$('#example').DataTable();
	 var baseurl = $("#base_url").val();

	 $(document).ready(function(){
	    $('select').formSelect();
	  });

	  
	  $(document).ready(function(){
	    $('.datepicker').datepicker();
	  });

	  $('.create-company').on("click",function()
	  {
	  	 var companies = new FormData($("#companies")[0]);
	        $.ajax({
	        url : baseurl+"CreateCompany/add_company/",
	          type :"POST",
	          data :companies, 
	          contentType:false,
	          processData:false,
	          success:function(res)
	          {
	           swal("Company Created Successfully.");
	           $('.swal-button--confirm').on('click',function(){
	           		window.location.reload();
	           });
	          }
	        });
	  });





	  $(".editCompany").on("click", function()
	{
		var edtcontactfrm = new FormData($("#edtCompany")[0]); 
		$.ajax({
			url : baseurl+"CreateCompany/editCompanyData",
			type :"POST",
			data :edtcontactfrm,	
			contentType:false,
			processData:false,
			success:function(res)
			{
				swal("Good job!", "Company has been Edited Successfully!", "success")
				$('.swal-button--confirm').on('click',function(){
					window.location.reload();
				});
			}
		 });
    });
	
	$("#example").on("click",".cmp-btn", function()
	{
		$(".modal").modal();
		$("#CompanyEdit").modal("open");
		 $("#CompanyEdit .modal-content").html("");
		  var id = $(this).data("id");
	    $.post(baseurl+"CreateCompany/fetchCompany/"+id,function(id){
	    	 $("#CompanyEdit .modal-content").html(id);

	    }); 
	});

	$("#example").on("click",".dltCompany", function()
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

				url : baseurl+"CreateCompany/deletCompanyData/"+id,
				type :"POST",
				contentType:false,
				processData:false,
				success:function(res)
				{
					swal("Poof! Your Record has been deleted!", {
					          icon: "success",
					    });
					$('.swal-button').on('click',function(){
							window.location.reload();
						});       
				}
			});
			} else {
			      swal("Your Record is safe!");
			  }
			});
    }); 

});