$(function()
{
	var baseurl = $("#base_url").val();

	$(".addsetup").on("click",function()
	{
		var frmm = new FormData($("#sender_setupfrm")[0]);

		$.ajax({
			url : baseurl+"Setup_sender/addsetup_sender/",
			type : "POST",
			data : frmm,
			contentType : false,
			processData : false,
			success : function(res)
			{
				/*$("#sender_setupfrm")[0].reset();*/
				$(document.body).load(location.href);
			}
		});
	});

	$(".edtsetupdata").on("click",function()
	{
		var frmm = new FormData($("#sender_setupfrm")[0]);

		$.ajax({
			url : baseurl+"Setup_sender/edtsetup_sender/",
			type : "POST",
			data : frmm,
			contentType : false,
			processData : false,
			success : function(res)
			{
				/*$("#sender_setupfrm")[0].reset();*/
				$(document.body).load(location.href);
			}
		});
	});

	$(".deletesetbtn").on("click",function()
	{
		var id = $(this).data("id");
		if(confirm("Are You Sure To Delete This???"))
		{
			$.post(baseurl+"Setup_sender/delete_sender/"+id,function(data)
			{
				$(document.body).load(location.href);
				
			});
		}
	});
});