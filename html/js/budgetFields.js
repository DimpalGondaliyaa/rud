$(function(){
	var baseurl=$('#base_url').val();

	$('.btn-save-budget').on("click",function()
		{
		var budgetForm = new FormData($("#budgetForm")[0]);
	      $.ajax({
	        url : baseurl+"BudgetFields/add_budgets/",
	        type :"POST",
	        data :budgetForm, 
	        contentType:false,
	        processData:false,
	        success:function(res)
	        {
	          swal("Budgets Added Successfully.");
	          window.location.reload();
	        }
	    });
	});


	/*Edit Budgets*/

	$('.edt-bdgt').on("click",function(){
 		 var id = $(this).data("value");
 		 	$.post(baseurl+"BudgetFields/editBudgets/"+id);
	});


 	/*Update*/

 	$('.btn-update-budget').on("click",function()
		{
		var budgetForm = new FormData($("#budgetForm")[0]);
	      $.ajax({
	        url : baseurl+"BudgetFields/update_budgets/",
	        type :"POST",
	        data :budgetForm, 
	        contentType:false,
	        processData:false,
	        success:function(res)
	        {
	          swal("Budgets Updated Successfully.");
	          window.location.href=baseurl+'BudgetFields';
	        }
	    });
	});


	/*DELETE*/
	

	$(".btn-delete-budget").on("click", function()
	{
		 var id = $(this).data("value");
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

				url : baseurl+"BudgetFields/delete_Budget/"+id,
				type :"POST",
				contentType:false,
				processData:false,
				success:function(res)
				{
					swal("Poof! Your Record has been deleted!", {
					          icon: "success",
					    });
					$('.swal-button').on('click',function(){
							window.location.href=baseurl+'BudgetFields';
						});       
				}
			});
			} else {
			      swal("Your Record is safe!");
			  }
			});
    }); 

});