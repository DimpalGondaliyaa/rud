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
});