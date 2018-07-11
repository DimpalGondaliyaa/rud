$(function(){

$('#exampleTask').DataTable( {
    dom: 'Bfrtip',
    buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
    ]
} );
/*   $('#notifyusers select').formSelect();
*/

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
                swal("Good job!", "Note has been Saved Successfully!", "success")
                $('.swal-button--confirm').on('click',function(){
                    window.location.reload();
                });
            }
         });
    });


    /*Add Note on Edit Full Page*/


    $(".btn-save-note").on("click", function()
    {
        var addNote = new FormData($("#formNote")[0]); 
        $.ajax({
            url : baseurl+"EditContact/addNote",
            type :"POST",
            data :addNote,  
            contentType:false,
            processData:false,
            success:function(res)
            {
                swal("Good job!", "Note has been Saved Successfully!", "success")
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




    /*Delete Note From Full Details Page*/


    $(".dlt_note").on("click", function()
  {
     var id = $(this).data("id");
     swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover this Note!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
        $.ajax({

        url : baseurl+"EditContact/deleteNote/"+id,
        type :"POST",
        contentType:false,
        processData:false,
        success:function(res)
        {
          $('')
          $(".noteBox-container").reload(" .noteBox-container > *");
          /*      $(document.body).load(location.href);*/
          /*swal("Poof! Note has been deleted!", {
                    icon: "success",
              });
          $('.swal-button').on('click',function(){
               $(document.body).load(location.href);
            });*/       
        }
      });
      } else {
            swal("Your Note is safe!");
        }
      });
    }); 



    /*Add Card Details */


    $(".btn-save-card").on("click", function()
    {
      
      var card = document.forms["formCard"]["card"].value;
      var card_type = document.forms["formCard"]["card_type"].value;
      var card_issuer = document.forms["formCard"]["card_issuer"].value;
      var name_on_card = document.forms["formCard"]["name_on_card"].value;
      var card_number = document.forms["formCard"]["card_number"].value;

      var exp_mo = document.forms["formCard"]["exp_mo"].value;
      var exp_yr = document.forms["formCard"]["exp_yr"].value;
      var cvv = document.forms["formCard"]["cvv"].value;
      var address = document.forms["formCard"]["address"].value;
      var address2= document.forms["formCard"]["address2"].value;
      var city = document.forms["formCard"]["city"].value;
      var state = document.forms["formCard"]["state"].value;
      var zip = document.forms["formCard"]["zip"].value;

        if(card==''){
          swal('Please Select any Card!');
          return false;
        }
        if(card_type==''){
          swal('Please Select any Card Type!');
          return false;
        }
        if(card_issuer==''){
          swal('Please Fill Input!');
          return false;
        }
        if(name_on_card==''){
          swal('Please Enter Name on Card!');
          return false;
        }
        if(card_number==''){
          swal('Please Enter Card Number!');
          return false;
        }
        if(exp_mo==''){
          swal('Please Select any Month!');
          return false;
        }if(exp_yr==''){
          swal('Please Select any Year!');
          return false;
        }
        if(cvv==''){
          swal('Please Enter CVV!');
          return false;
        }
        if(address==''){
          swal('Please Enter Address!');
          return false;
        }
        if(address2==''){
          swal('Please Enter Address 2!');
          return false;
        }
        if(city==''){
          swal('Please Enter City!');
          return false;
        }
        if(state==''){
          swal('Please Enter State!');
          return false;
        }

        if(zip==''){
          swal('Please Eneter Zip!');
          return false;
        }
        else{
        var addNote = new FormData($("#formCard")[0]); 
        $.ajax({
            url : baseurl+"EditContact/addCard",
            type :"POST",
            data :addNote,  
            contentType:false,
            processData:false,
            success:function(res)
            {
                swal("Good job!", "Card has been saved Successfully!", "success")
                $('.swal-button--confirm').on('click',function(){
                    window.location.reload();
                });
            }
         });
      }
    });


    /*Save Bank*/

    $("#acc_no").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Numbers Only").show().fadeOut("slow");
          return false;
    }
   });


    $("#bank_phone").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Numbers Only").show().fadeOut("slow");
          return false;
    }
   });

  



    $(".btn-save-bank").on("click", function()
    {
      
      var routing_number = document.forms["formBank"]["routing_number"].value;
      var bank_name = document.forms["formBank"]["bank_name"].value;
      var account_number = document.forms["formBank"]["account_number"].value;
      var address = document.forms["formBank"]["address"].value;
      var account_type = document.forms["formBank"]["account_type"].value;

      var bank_city = document.forms["formBank"]["bank_city"].value;
      var bank_state = document.forms["formBank"]["bank_state"].value;
      var bank_postal_code = document.forms["formBank"]["bank_postal_code"].value;
      var name_on_account = document.forms["formBank"]["name_on_account"].value;
      var bank_phone = document.forms["formBank"]["bank_phone"].value;

     

        if(routing_number==''){
          swal('Please Eneter Routing Number!');
          return false;
        }
        if(bank_name==''){
          swal('Please Enter Bank Name!');
          return false;
        }
        if(account_number==''){
          swal('Please Fill Account Number!');
          return false;
        }
        if(address==''){
          swal('Please Enter Address!');
          return false;
        }
        if(account_type==''){
          swal('Please Select Account Type!');
          return false;
        }
        if(bank_city==''){
          swal('Please Eneter Bank City');
          return false;

        }if(bank_state==''){
          swal('Please Select any State!');
          return false;
        }
        if(bank_postal_code==''){
          swal('Please Enter Bank Postal Code!');
          return false;
        }
        if(name_on_account==''){
          swal('Please Enter Name on Account!');
          return false;
        }
        if(bank_phone==''){
          swal('Please Enter Phone!');
          return false;
        }
        else{
        var formBank = new FormData($("#formBank")[0]); 
        $.ajax({
            url : baseurl+"EditContact/addBank",
            type :"POST",
            data :formBank,  
            contentType:false,
            processData:false,
            success:function(res)
            {
                swal("Good job!", "Bank has been saved Successfully!", "success")
                $('.swal-button--confirm').on('click',function(){
                    window.location.reload();
                });
            }
         });
      }
    });

    /*Delete Bank*/

  $(".btn-delete-bank").on("click", function()
  {
     var id = $(this).data("id");
     swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to See this Details!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
        $.ajax({

        url : baseurl+"EditContact/deleteBank/"+id,
        type :"POST",
        contentType:false,
        processData:false,
        success:function(res)
        {
          $('')
          /*$(".noteBox-container").reload(" .noteBox-container > *");*/
          /*      $(document.body).load(location.href);*/
          swal("Poof! Bank has been deleted!", {
                    icon: "success",
              });
          $('.swal-button').on('click',function(){
               $(document.body).load(location.href);
            });       
        }
      });
      } else {
            swal("Your Note is safe!");
        }
      });
    }); 



  /*Add Tasks*/
  
    $(".btn-addTask").on("click", function()
    {

        $(".modal").modal();
        $("#addTask").modal("open");
        $("#addTask .modal-content").html("");
        var id = $(this).data("id");
  
        $.post(baseurl+"Home/eventsTask/"+id,function(id){
          $("#addTask .modal-content").html(id);
        }); 
    });

    $(".addTask").on("click", function()
    {
        var t = $('#task').val();

        if(t==''){
          swal('Select Task');
          return false;
        }

        var addTask = new FormData($("#addTasks")[0]); 
        $.ajax({
            url : baseurl+"Home/addTask",
            type :"POST",
            data :addTask,  
            contentType:false,
            processData:false,
            success:function(res)
            {
                swal("Good job!", "Task Created Successfully!", "success")
                $('.swal-button--confirm').on('click',function(){
                    window.location.reload();
                });
            }
         });
    });


    /*=========== Update Task
    ======================== */

      $(".btn_upTask").on("click", function()
    {

        $(".modal").modal();
        $("#updateTask").modal("open");
        $("#updateTask .modal-content").html("");
        var id = $(this).data("id");
  
        $.post(baseurl+"Home/getUpTask/"+id,function(id){
          $("#updateTask .modal-content").html(id);
        }); 
    });

    $(".up_Task").on("click", function()
    {
        var t = $('#task').val();

        if(t==''){
          swal('Select Task');
          return false;
        }

        var uTask = new FormData($("#updateeTasks")[0]); 
        $.ajax({
            url : baseurl+"Home/updateTask",
            type :"POST",
            data :uTask,  
            contentType:false,
            processData:false,
            success:function(res)
            {
                swal("Good job!", "Task Updated Successfully!", "success")
                $('.swal-button--confirm').on('click',function(){
                    window.location.reload();
                });
            }
         });
    });

    /*Update Comple Status */
     $(".btn-up-c-status").on("click", function()
      {
         var id = $(this).data("id");
         var v = $(this).data("value");

         var data = {
            't_id' : id,
            'completed_by' : v
         };
         
         swal({
              title: "Are you sure?",
              text: "Once Update, it can't be Updated Again!",
              icon: "info",
              buttons: true,
              dangerMode: true,
            })
       .then((willDelete) => {
              if (willDelete) {

                $.post(baseurl+"Home/upTaskStatus",{data:data},function(){
                  window.location.reload();  
                });

                


            /*$.ajax({
            url : baseurl+"home/upTaskStatus/"+data,
            type :"POST",
            contentType:false,
            processData:false,
            success:function(res)
            {*/
              /*$(".noteBox-container").reload(" .noteBox-container > *");*/
              /*      $(document.body).load(location.href);*/
          /*    swal("Poof! Bank has been deleted!", {
                        icon: "success",
                  });
              $('.swal-button').on('click',function(){
                   $(document.body).load(location.href);
                });       
            }
          });*/
          } else {
                swal("Your Note is safe!");
            }
          });
        });




  /*Add Call Log  addCallLog*/

  $(".btn-add-call").on("click", function()
  {

      $(".modal").modal();
      $("#addCallLog").modal("open");
      $("#addCallLog .modal-content").html("");
      var id = $(this).data("id");

      $.post(baseurl+"Home/getCallLog/"+id,function(id){
        $("#addCallLog .modal-content").html(id);
      }); 
  });


 

  $('.dlt-call-log').on('click',function(){

    var id=$(this).data('id');
    alert(id);
    $.ajax({
      url : baseurl+"Home/deleteCallLogs/"+id,
      type :"POST",
      contentType:false,
      processData:false,
      success:function(res)
      {
        $('.swal-button').on('click',function(){
          $(document.body).load(location.href);
        });       
      }
      });
  });



});















$(function(){

  $('#exportCSV').click(function() {
  var titles = [];
  var data = [];

  /*
   * Get the table headers, this will be CSV headers
   * The count of headers will be CSV string separator
   */
  $('.dataTable th').each(function() {
    titles.push($(this).text());
  });

  /*
   * Get the actual data, this will contain all the data, in 1 array
   */
  $('.dataTable td').each(function() {
    data.push($(this).text());
  });
  
  /*
   * Convert our data to CSV string
   */
  var CSVString = prepCSVRow(titles, titles.length, '');
  CSVString = prepCSVRow(data, titles.length, CSVString);

  /*
   * Make CSV downloadable
   */
  var downloadLink = document.createElement("a");
  var blob = new Blob(["\ufeff", CSVString]);
  var url = URL.createObjectURL(blob);
  downloadLink.href = url;
  downloadLink.download = "data.csv";

  /*
   * Actually download CSV
   */
  document.body.appendChild(downloadLink);
  downloadLink.click();
  document.body.removeChild(downloadLink);
});

   /*
* Convert data array to CSV string
* @param arr {Array} - the actual data
* @param columnCount {Number} - the amount to split the data into columns
* @param initial {String} - initial string to append to CSV string
* return {String} - ready CSV string
*/
function prepCSVRow(arr, columnCount, initial) {
  var row = ''; // this will hold data
  var delimeter = ','; // data slice separator, in excel it's `;`, in usual CSv it's `,`
  var newLine = '\r\n'; // newline separator for CSV row

  /*
   * Convert [1,2,3,4] into [[1,2], [3,4]] while count is 2
   * @param _arr {Array} - the actual array to split
   * @param _count {Number} - the amount to split
   * return {Array} - splitted array
   */
  function splitArray(_arr, _count) {
    var splitted = [];
    var result = [];
    _arr.forEach(function(item, idx) {
      if ((idx + 1) % _count === 0) {
        splitted.push(item);
        result.push(splitted);
        splitted = [];
      } else {
        splitted.push(item);
      }
    });
    return result;
  }
  var plainArr = splitArray(arr, columnCount);
  // don't know how to explain this
  // you just have to like follow the code
  // and you understand, it's pretty simple
  // it converts `['a', 'b', 'c']` to `a,b,c` string
  plainArr.forEach(function(arrItem) {
    arrItem.forEach(function(item, idx) {
      row += item + ((idx + 1) === arrItem.length ? '' : delimeter);
    });
    row += newLine;
  });
  return initial + row;
}
})