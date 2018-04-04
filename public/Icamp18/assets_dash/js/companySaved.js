
var _token = $('meta[name="csrf-token"]').attr('content');


$('.card').click(function(e) {
         
        e.preventDefault();      
         $("#modal-body").css("display","none");
         $("#but_apply").css("display","none");
        $("#loader").css("display","block");
        $('#modal_startup').modal('show');

        var btn = $(this);
        var form = $('#updateProf');
        var comp_id = btn.attr('name');
        var action = '/fetchComp/'+comp_id; 
        var data = {            
            '_token': _token
        };


        

        btn.addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);

        $.ajax({
            url: action,
            type : 'POST',
            data : data,
            dataType    : 'json',
        }).done(function(response) {
            btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);


            if( response.type=='success' ){
                 $("#loader").css("display","none");
                  $("#modal-body").css("display","block");
                  $("#but_apply").css("display","block");
                 
                $("#modal_title").html(response.CompanyName);
                $('#modal_desc').html(response.CompanyAbout);
                $('#stipend').html('Stipend : '+response.IntStipend);
                $('#location').html('Internship Location: '+response.IntLocation);
                $('#profile').html('Internship Profile : '+response.IntProfile);
                $('#duration').html('Internship Duration : '+response.IntDuration);

                $('#but_apply').attr('name', response.ic_id);
                
            }

            else
                swal('Error', response.message, response.type);



        }).fail(function(response, status, xhr) {
            btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
            swal('Critical Error', xhr, 'error');

        });

    });


function ajaxSend(btn, action, data){

        btn.addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);

        $.ajax({
            url: action,
            type : 'POST',
            data : data,
            dataType    : 'json',
        }).done(function(response) {
            btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);


            if( response.type=='success' ){
                swal('Awesome!', response.message, 'success');
                
            }

            else
                swal('Error', response.message, response.type);



        }).fail(function(response, status, xhr) {
            btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
            swal('Critical Error', xhr, 'error');

        });

}


$('#but_apply').click(function(e) {
         
        e.preventDefault();    
      

        var btn = $(this);
        var comp_id = btn.attr('name');
        var action = '/startup/apply/'+comp_id; 
        var data = {            
            '_token': _token
        };

         swal({
                title: 'Confirm Action!',
                text: "You can't undo this action after 12 hrs. Click Apply button to select startup.",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Apply'
            }).then((result) => {
                if (result.value) {
                   // window.location.href = 'profile';
                  // alert('success');
                   ajaxSend(btn, action, data);
                }
            });


        

    });