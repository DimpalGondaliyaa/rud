$(function(){

	var baseurl = $("#base_url").val();
	 $('.modal').modal();
	 $('#example').DataTable();
	$('.tv-slider').carousel({fullWidth: true, padding:0},setTimeout(autoplay, 4500));
  function autoplay() {
    $('.carousel').carousel('next');
    new WOW().init();
    setTimeout(autoplay, 7500);
	 }
	 
	 
	 $(".btn-subscribe").on("click",function()
{
	var subbfrm = new FormData($("#subfrm")[0]);
 
    var fname = document.forms["subfrm"]["fname"].value;
    var lname = document.forms["subfrm"]["lname"].value;
    var email = document.forms["subfrm"]["email"].value;

    if(fname=="")
    {
    	swal("Please Enter First Name");
    }
    else if(lname=="")
    {
     swal("Please Enter Last Name");
    }
    else if(email=="")
    {
    swal("Please Enter Email");
    }
else{
$.ajax({

	url : baseurl+"Home/sendsubscriber",
	type :"POST",
	data :subbfrm,	
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
}

});
	
	
});