$(function(){
  $('#example').DataTable({"pageLength": 5});
  $('#example1').DataTable({"pageLength": 5});
  $('#example2').DataTable({"pageLength": 5});

  var baseurl=$('#base_url').val();

  $(".input-sm").keyup(function(event) {
      var stt = $(this).val();
      $("#asgn_email").val(stt);
  });

  $('#example').on('change','.rdo',function() {
        if ($(".rdo").is(":checked")) {
              var i=$(this).data('id');
              var v=$(this).val();
              $("#asgn_email").val(v);
              /*$("#asgn_id").val(i);*/
            }
         else {
              alert("rd1 not checked");
           }
    });

  $('#example1').on('change','.rdo',function() {
        if ($(".rdo").is(":checked")) {
              var i=$(this).data('id');
              var v=$(this).val();
              $("#asgn_email_to").val(v);
              /*$("#asgn_id").val(i);*/
            }
         else {
              alert("rd1 not checked");
           }
    });

  $(".btn-asign").on("click", function()
  {
    var t1 = $("#asgn_email").val();
    var t2 = $("#asgn_email_to").val();

    if(t1==''){
      swal('select User to Assign');
    } 
    else if(t2==''){
      swal('select User to Assign with');
    } 
    else{
    var assignForm = new FormData($("#assignForm")[0]); 
    $.ajax({
      url : baseurl+"AssignUser/assignUserData",
      type :"POST",
      data :assignForm,  
      contentType:false,
      processData:false,
      success:function(res)
      {
        swal("Good job!", "User Assigned Successfully!", "success")
        $('.swal-button--confirm').on('click',function(){
          window.location.reload();
        });
      }
     });
    }
  });



  /*Delete Assign record*/

  $(".dlt-rec").on("click",function()
  {
    var dlt_id=$(this).data('id');
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

            url : baseurl+"AssignUser/deleteAssignRecord/"+dlt_id,
            type :"POST",
            contentType:false,
            processData:false,
            success:function(res)
            {
              swal("Poof! Your Record has been deleted!", {
                    icon: "success",
                }); 
              $('.swal-button--confirm').on('click',function(){
                window.location.reload();
              });

            }
            });
          } 
          else {
            swal("Your Product is safe!");
          }
        });
  });


    /*$('#chkval').on('click', function() {
          chkId = $(this).data(id);
          alert(chkId);
    });*/
})