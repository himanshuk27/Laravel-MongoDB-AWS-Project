$(function() {     

    $('#newsletterForm').submit(function(event) {  

      $(this).validate({
        rules: {
          email: {                       
            email: true
          }
        }
      }); 

      if (!$(this).valid()) {
        return;
      }   

      else{
        $.ajax( {
          type: 'POST',
          url: 'php/newsletter-subscribe.php',
          data: new FormData( this ),
          processData: false,
          contentType: false,
          dataType: 'json',
          success:function(response){  
          if( response.type=='success' ){
            swal(
              response.message,
              '',
              'success'
              );
          } 
          else{
            swal(
              response.message,
              '',
              'warning'
              );
          }                  
            
          },
          error: function (request, status) {
            swal(
              status,
              '',
              'error'
              );
          }
        });
      }     
    });
  }); 