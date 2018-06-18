$(function(){
	$('.noicon').on('click',function(){
		/*$(this).data('id').addClass('active');*/
		$('li').removeClass("active");
    	$(this).addClass("active");
    	var i=$(this).data('id');
    	var im=$('.'+i).html();
        /*alert(im);*/
        $('#infobox').html(im);
        /**/
        /*alert(i);*/

        if(i=='tab_0'){
            $('#tab_0').show();
            $('#tab_1').hide();
            $('#tab_2').hide();
            $('#tab_3').hide();
            $('#tab_4').hide();
            $('#tab_5').hide();
        }
    	
        if(i=='tab_1'){
            $('#tab_0').hide();
            $('#tab_1').show();
            $('#tab_2').hide();
            $('#tab_3').hide();
            $('#tab_4').hide();
            $('#tab_5').hide();
        }
        else if(i=='tab_2'){
            $('#tab_0').hide();
            $('#tab_1').hide();
            $('#tab_2').show();
            $('#tab_3').hide();
            $('#tab_4').hide();
            $('#tab_5').hide();
        }
        else if(i=='tab_3'){
            $('#tab_0').hide();
            $('#tab_1').hide();
            $('#tab_2').hide();
            $('#tab_3').show();
            $('#tab_4').hide();
            $('#tab_5').hide();
        }
        else if(i=='tab_4'){
            $('#tab_0').hide();
            $('#tab_1').hide();
            $('#tab_2').hide();
            $('#tab_3').hide();
            $('#tab_4').show();
            $('#tab_5').hide();
        }
        else if(i=='tab_5'){
            $('#tab_0').hide();
            $('#tab_1').hide();
            $('#tab_2').hide();
            $('#tab_3').hide();
            $('#tab_4').hide();
            $('#tab_5').show();
        }
    	else {
            $('#tab_0').show();
            $('#tab_1').hide();
            $('#tab_2').hide();
            $('#tab_3').hide();
            $('#tab_4').hide();
            $('#tab_5').hide();
        }
    	
   });

    var baseurl=$('#base_url').val();

    $('.saveBtn').on("click",function()
      {
         var condata = new FormData($("#fromContact")[0]);
            $.ajax({
            url : baseurl+"EditContact/add_contactt/",
              type :"POST",
              data :condata, 
              contentType:false,
              processData:false,
              success:function(res)
              {
                swal('Inserted Record Successfully!');
               /*alert("Project Added Successfully.");*/
               $("#fromContact")[0].reset();
                /*$("form").trigger("reset");*/
               //window.location.reload();
              }
            });
      });

    $('.updateData').on("click",function()
      {
         var condata = new FormData($("#fromContact")[0]);
            $.ajax({
            url : baseurl+"EditContact/upp_contactt/",
              type :"POST",
              data :condata, 
              contentType:false,
              processData:false,
              success:function(res)
              {
                swal('Updated Record Successfully!');
               /*alert("Project Added Successfully.");*/
               /*$("#fromContact")[0].reset();*/
               $(document.body).load(location.href);
                /*$("form").trigger("reset");*/
               //window.location.reload();
              }
            });
      });
	
})
