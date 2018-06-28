$(function(){
	
	var baseurl = $("#base_url").val();

	$(".edtuserdata").on("click",function(){

		var usereg = new FormData($("#filefrm")[0]); 
		$.ajax({
			url : baseurl+"Edit_User/edt_user_dataa",
			type :"POST",
			data :usereg,	
			contentType:false,
			processData:false,
			success:function(res)
			{
				$(document.body).load(location.href);
			}
		 });

	});
i call you on 27-7-2018
	$(".deleteuser").on("click",function()
	{
		var data = $(this).data("id");
		if(confirm("Are You Sure To Delete This???"))
		{
		$.post(baseurl+"Edit_User/deleteuserdata/"+data,function(data)
		{
			window.location.href=baseurl+"Administration";
		});
	   }
	});
	$(".Suspenduserr").on("click",function()
	{
		var data = $(this).data("id");
		$.post(baseurl+"Edit_User/Suspend/"+data,function(data)
		{
			$(document.body).load(location.href);
		});
	});


	

	
});