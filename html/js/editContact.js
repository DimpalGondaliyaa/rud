$(function(){
	$('.noicon').on('click',function(){
		/*$(this).data('id').addClass('active');*/
		$('li').removeClass("active");
    	$(this).addClass("active");
    	var i=$(this).data('id');
    	
    	$('#'+i).addClass('activeBox');
    	$('.form-Box div').removeClass('frmBox');
    	
   });
	
})
