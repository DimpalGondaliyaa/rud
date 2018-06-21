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


  $('.tab_btn').on('click',function(){
    var val = $(this).data('id');
    $('li').removeClass("active");
    $(this).addClass('active');

    if(val=='tab_1'){
      $('.'+val).addClass('active');
      
      $('.tab_2').removeClass('active');
      $('.tab_3').removeClass('active');
      $('.tab_4').removeClass('active');
      $('.tab_5').removeClass('active');
      $('.tab_6').removeClass('active');
      $('.tab_7').removeClass('active');
      $('.tab_8').removeClass('active');
      $('.tab_9').removeClass('active');
      $('.tab_10').removeClass('active');
      $('.tab_11').removeClass('active');
      $('.tab_12').removeClass('active');
    } 
    else if(val=='tab_2'){
      $('.'+val).addClass('active');
      $('.tab_1').removeClass('active');
      $('.tab_3').removeClass('active');
      $('.tab_4').removeClass('active');
      $('.tab_5').removeClass('active');
      $('.tab_6').removeClass('active');
      $('.tab_7').removeClass('active');
      $('.tab_8').removeClass('active');
      $('.tab_9').removeClass('active');
      $('.tab_10').removeClass('active');
      $('.tab_11').removeClass('active');
      $('.tab_12').removeClass('active');
    }
    else if(val=='tab_3'){
      $('.'+val).addClass('active');
      $('.tab_1').removeClass('active');
      $('.tab_2').removeClass('active');
      $('.tab_4').removeClass('active');
      $('.tab_5').removeClass('active');
      $('.tab_6').removeClass('active');
      $('.tab_7').removeClass('active');
      $('.tab_8').removeClass('active');
      $('.tab_9').removeClass('active');
      $('.tab_10').removeClass('active');
      $('.tab_11').removeClass('active');
      $('.tab_12').removeClass('active');
    }
    else if(val=='tab_4'){
      $('.'+val).addClass('active');
      $('.tab_1').removeClass('active');
      $('.tab_2').removeClass('active');
      $('.tab_3').removeClass('active');
      $('.tab_5').removeClass('active');
      $('.tab_6').removeClass('active');
      $('.tab_7').removeClass('active');
      $('.tab_8').removeClass('active');
      $('.tab_9').removeClass('active');
      $('.tab_10').removeClass('active');
      $('.tab_11').removeClass('active');
      $('.tab_12').removeClass('active');
    }
    else if(val=='tab_5'){
      $('.'+val).addClass('active');
      $('.tab_1').removeClass('active');
      $('.tab_2').removeClass('active');
      $('.tab_3').removeClass('active');
      $('.tab_4').removeClass('active');
      $('.tab_6').removeClass('active');
      $('.tab_7').removeClass('active');
      $('.tab_8').removeClass('active');
      $('.tab_9').removeClass('active');
      $('.tab_10').removeClass('active');
      $('.tab_11').removeClass('active');
      $('.tab_12').removeClass('active');
    }
    else if(val=='tab_6'){
      $('.'+val).addClass('active');
      $('.tab_1').removeClass('active');
      $('.tab_2').removeClass('active');
      $('.tab_3').removeClass('active');
      $('.tab_4').removeClass('active');
      $('.tab_5').removeClass('active');
      $('.tab_7').removeClass('active');
      $('.tab_8').removeClass('active');
      $('.tab_9').removeClass('active');
      $('.tab_10').removeClass('active');
      $('.tab_11').removeClass('active');
      $('.tab_12').removeClass('active');
    }
    else if(val=='tab_7'){
      $('.'+val).addClass('active');
      $('.tab_1').removeClass('active');
      $('.tab_2').removeClass('active');
      $('.tab_3').removeClass('active');
      $('.tab_4').removeClass('active');
      $('.tab_5').removeClass('active');
      $('.tab_6').removeClass('active');
      $('.tab_8').removeClass('active');
      $('.tab_9').removeClass('active');
      $('.tab_10').removeClass('active');
      $('.tab_11').removeClass('active');
      $('.tab_12').removeClass('active');
    }
    else if(val=='tab_8'){
      $('.'+val).addClass('active');
      $('.tab_1').removeClass('active');
      $('.tab_2').removeClass('active');
      $('.tab_3').removeClass('active');
      $('.tab_4').removeClass('active');
      $('.tab_5').removeClass('active');
      $('.tab_6').removeClass('active');
      $('.tab_7').removeClass('active');
      $('.tab_9').removeClass('active');
      $('.tab_10').removeClass('active');
      $('.tab_11').removeClass('active');
      $('.tab_12').removeClass('active');
    }
    else if(val=='tab_9'){
      $('.'+val).addClass('active');
      $('.tab_1').removeClass('active');
      $('.tab_2').removeClass('active');
      $('.tab_3').removeClass('active');
      $('.tab_4').removeClass('active');
      $('.tab_5').removeClass('active');
      $('.tab_6').removeClass('active');
      $('.tab_7').removeClass('active');
      $('.tab_8').removeClass('active');
      $('.tab_10').removeClass('active');
      $('.tab_11').removeClass('active');
      $('.tab_12').removeClass('active');
    }
    else if(val=='tab_10'){
      $('.'+val).addClass('active');
      $('.tab_1').removeClass('active');
      $('.tab_2').removeClass('active');
      $('.tab_3').removeClass('active');
      $('.tab_4').removeClass('active');
      $('.tab_5').removeClass('active');
      $('.tab_6').removeClass('active');
      $('.tab_7').removeClass('active');
      $('.tab_8').removeClass('active');
      $('.tab_9').removeClass('active');
      $('.tab_11').removeClass('active');
      $('.tab_12').removeClass('active');
    }
    else if(val=='tab_11'){
      $('.'+val).addClass('active');
      $('.tab_1').removeClass('active');
      $('.tab_2').removeClass('active');
      $('.tab_3').removeClass('active');
      $('.tab_4').removeClass('active');
      $('.tab_5').removeClass('active');
      $('.tab_6').removeClass('active');
      $('.tab_7').removeClass('active');
      $('.tab_8').removeClass('active');
      $('.tab_9').removeClass('active');
      $('.tab_10').removeClass('active');
      $('.tab_12').removeClass('active');
    }
    else if(val=='tab_12'){
      $('.'+val).addClass('active');
      $('.tab_1').removeClass('active');
      $('.tab_2').removeClass('active');
      $('.tab_3').removeClass('active');
      $('.tab_4').removeClass('active');
      $('.tab_5').removeClass('active');
      $('.tab_6').removeClass('active');
      $('.tab_7').removeClass('active');
      $('.tab_8').removeClass('active');
      $('.tab_9').removeClass('active');
      $('.tab_10').removeClass('active');
      $('.tab_11').removeClass('active');
    }

    else{
      $('.tab_1').addClass('active');
      $('.tab_2').removeClass('active');
      $('.tab_3').removeClass('active');
      $('.tab_4').removeClass('active');
      $('.tab_5').removeClass('active');
      $('.tab_6').removeClass('active');
      $('.tab_7').removeClass('active');
      $('.tab_8').removeClass('active');
      $('.tab_9').removeClass('active');
      $('.tab_10').removeClass('active');
      $('.tab_11').removeClass('active');
      $('.tab_12').removeClass('active');
    }
  });


  $('.btn-tgl-add').on('click',function(){
    $('.add-prog-container').toggle();
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
	

    /*Change Status*/

    $(".changeStatus").on("click", function()
    {
        $(".modal").modal();
        $("#statusChanged").modal("open");
         $("#statusChanged .modal-content").html("");
          var id = $(this).data("id");
        $.post(baseurl+"Home/fetchStatus/"+id,function(id){
             $("#statusChanged .modal-content").html(id);
        }); 
    });


    $(".editStatus").on("click", function()
    {
        var edtcontactfrm = new FormData($("#edtStatusfrm")[0]); 
        $.ajax({
            url : baseurl+"Home/edtcontactStatus",
            type :"POST",
            data :edtcontactfrm,    
            contentType:false,
            processData:false,
            success:function(res)
            {
                swal("Good job!", "Stage/Status has been Updated Successfully!", "success")
                $('.swal-button--confirm').on('click',function(){
                    window.location.reload();
                });
            }
         });
    });


    /*Add Note*/

    $(".addNote").on("click", function()
    {
        $(".modal").modal();
        $("#addNotee").modal("open");
         $("#addNotee .modal-content").html("");
          var id = $(this).data("id");
        $.post(baseurl+"Home/NoteModal/"+id,function(id){
             $("#addNotee .modal-content").html(id);

        }); 
    });

    $(".saveNote").on("click", function()
    {
        var addNote = new FormData($("#addNote")[0]); 
        $.ajax({
            url : baseurl+"Home/addNote",
            type :"POST",
            data :addNote,  
            contentType:false,
            processData:false,
            success:function(res)
            {
                swal("Good job!", "Stage/Status has been Updated Successfully!", "success")
                $('.swal-button--confirm').on('click',function(){
                    window.location.reload();
                });
            }
         });
    });


    /*Add Events*/

    $(".addEvnt").on("click", function()
    {

        $(".modal").modal();
        $("#addEventss").modal("open");
         $("#addEventss .modal-content").html("");
          var id = $(this).data("id");
        $.post(baseurl+"Home/eventsModal/"+id,function(id){
             $("#addEventss .modal-content").html(id);

        }); 
    });

    $(".addEvents").on("click", function()
    {
        var addNote = new FormData($("#addEvent")[0]); 
        $.ajax({
            url : baseurl+"Home/addEvent",
            type :"POST",
            data :addNote,  
            contentType:false,
            processData:false,
            success:function(res)
            {
                swal("Good job!", "Event Created Successfully!", "success")
                $('.swal-button--confirm').on('click',function(){
                    window.location.reload();
                });
            }
         });
    });

    
    /*Delete Contact*/

    $(".condltbtn").on("click", function()
  {
     var id = $(this).data("id");

     swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover this Product!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
        $.ajax({

        url : baseurl+"home/deletecon/"+id,
        type :"POST",
        contentType:false,
        processData:false,
        success:function(res)
        {
          swal("Poof! Your Data has been deleted!", {
                    icon: "success",
              });
          $('.swal-button').on('click',function(){
              window.location.href=baseurl+'Home';
            });       
        }
      });
      } else {
            swal("Your Data is safe!");
        }
      });
    }); 




})
