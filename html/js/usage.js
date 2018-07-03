  $(document).ready(function(){
    $('.datepicker').datepicker();
  });

  $(function()
  {
  	$("#user_usage_a").on("click",function()
  	{
  		$("#user_usage").show();
  		$("#e-sign_usage").hide();
  		$("#user_login").hide();
  		$("#page_view").hide();
  	});

  	$("#e-sign_usage_a").on("click",function()
  	{
  		$("#e-sign_usage").show();
  		$("#user_usage").hide();
  		$("#user_login").hide();
  		$("#page_view").hide();
  	});


	$("#user_login_a").on("click",function()
  	{
  		$("#user_login").show();
  		$("#user_usage").hide();
  		$("#e-sign_usage").hide();
  		$("#page_view").hide();
  	});

  	$("#page_view_a").on("click",function()
  	{
  		$("#page_view").show();
  		$("#user_login").hide();
  		$("#user_usage").hide();
  		$("#e-sign_usage").hide();
  	});

  	$(".billing_a").on("click",function()
  	{
  		$(".modal").modal();
  		$("#billing").modal("open");
  	});


  });