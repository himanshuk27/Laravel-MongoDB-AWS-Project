//== Class Definition
var SnippetLogin = function() {

    $('#loginForm').on('keyup keypress', function(e) {
  var keyCode = e.keyCode || e.which;
  if (keyCode === 13) { 
    e.preventDefault();
    return false;
  }
});

    var login = $('#m_login');

    var redirect = '/';

    var loc = window.location.pathname;
    var dir = loc.substring(loc.lastIndexOf('/')+1);
    if(dir!='login')
        redirect='/'+dir;    

    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

    var showErrorMsg = function(form, type, msg) {
        var alert = $('<div class="m-alert m-alert--outline alert alert-' + type + ' alert-dismissible" role="alert">\
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>\
            <span></span>\
        </div>');

        form.find('.alert').remove();
        alert.prependTo(form);
        alert.animateClass('fadeIn animated');
        alert.find('span').html(msg);
    }

    //== Private Functions

    var displaySignUpForm = function() {
        login.removeClass('m-login--forget-password');
        login.removeClass('m-login--signin');

        login.addClass('m-login--signup');
        login.find('.m-login__signup').animateClass('flipInX animated');
    }

    var displaySignInForm = function() {
        login.removeClass('m-login--forget-password');
        login.removeClass('m-login--signup');

        login.addClass('m-login--signin');
        login.find('.m-login__signin').animateClass('flipInX animated');
    }

    var displayForgetPasswordForm = function() {
        login.removeClass('m-login--signin');
        login.removeClass('m-login--signup');

        login.addClass('m-login--forget-password');
        login.find('.m-login__forget-password').animateClass('flipInX animated');
    }

    var handleFormSwitch = function() {
        $('#m_login_forget_password').click(function(e) {
            e.preventDefault();
            displayForgetPasswordForm();
        });

        $('#m_login_forget_password_cancel').click(function(e) {
            e.preventDefault();
            displaySignInForm();
        });

        $('#m_login_signup').click(function(e) {
            e.preventDefault();
            displaySignUpForm();
        });

        $('#m_login_signup_cancel').click(function(e) {
            e.preventDefault();
            displaySignInForm();
        });
    }

    var handleSignInFormSubmit = function() {
        $('#m_login_signin_submit').click(function(e) {
            e.preventDefault();
            var btn = $(this);
            var form = $(this).closest('form');
            var action = $(this).prop('action');
            var data = $(this).serialize();
            var signInForm = login.find('.m-login__signin form');
            data += "_token=" + $('#csrf-token').val();

            form.validate({
                rules: {
                    userEmail: {
                        required: true,
                        email: true
                    },
                    userPass: {
                        required: true
                    }
                }
            });

            if (!form.valid()) {
                return;
            }

            btn.addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);

           form.ajaxSubmit({
                url: action,
                type : 'POST',
                dataType    : 'json',
                success: function(response, status, xhr, $form) {
                        btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
                        if( response.type=='success' ){
                            showErrorMsg(signInForm, 'success', response.message)                            
                            window.location=redirect;
                        }
                        if( response.type=='error' )
                            showErrorMsg(signInForm, 'danger', response.message)
                }
            });


        });
    }

    var signUpForm = login.find('.m-login__signup form');
    var pwd1 = $('#newPass');
    var pwd2 = $('#repeatPass'); 

    var checkPasswords = function(){
        if(pwd1.val()==pwd2.val()){
            if(pwd1.val().length < 5){
                showErrorMsg(signUpForm, 'warning', 'Minimum Password Length is 5.');
            }
            else{
                return true;
            }
        }
        else{
            showErrorMsg(signUpForm, 'warning', 'Passwords Not Matched!');
        }
    }

    var handleSignUpFormSubmit = function() {
        $('#m_login_signup_submit').click(function(e) {
            e.preventDefault();

            var btn = $(this);
            var form = $(this).closest('form');
            var action = $(this).prop('action');
            var signUpForm = login.find('.m-login__signup form');

            form.validate({
                rules: {
                    cand_name: {
                        required: true
                    },
                    newEmail: {
                        required: true,
                        email: true
                    },
                    newPass: {
                        required: true
                    },
                    repeatPass: {
                        required: true
                    },
                    ref_id : {
                        maxlength: 5,
                        minlength: 5
                    }                    
                }
            });

            if (!form.valid()) {
                return;
            }            

            if(checkPasswords()==true){
                btn.addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);
                form.ajaxSubmit({
                url: action,
                type : 'POST',
                dataType    : 'json',
                success: function(response, status, xhr, $form) {
                        btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false); 
                       
                        if( response.type=='success' ){
                        signUpForm.validate().resetForm();
                            showErrorMsg(signUpForm, 'success', response.message)
                        }
                        if( response.type=='error' ){
                           
                            showErrorMsg(signUpForm, 'danger', response.message)
                        }
                    
                }
            });

            }

            
        });
    }

    var handleForgetPasswordFormSubmit = function() {
        $('#sub_forget_pass').click(function(e) {
            e.preventDefault();

            var btn = $(this);
            var form = $(this).closest('form');
            var action = form.prop('action');
            var data = form.serialize();
            var forgetPasswordForm = login.find('.m-login__forget-password form');

            form.validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    }
                }
            });

            if (!form.valid()) {
                return;
            }

            btn.addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);

            $.ajax({
                        url: action,
                        type : 'POST',
                        data : data,
                        dataType    : 'json',
                    }).done(function(response) {
                        btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);                        

                        if( response.type=='success' ){
                            form.clearForm(); // clear form
                        form.validate().resetForm(); // reset validation states
                        showErrorMsg(forgetPasswordForm, 'success', 'Cool! Password recovery instruction has been sent to your email.');
                            
                        }

                        else{
                              form.clearForm(); // clear form
                        form.validate().resetForm(); // reset validation states
                            showErrorMsg(forgetPasswordForm, 'warning', response.message);
                        }


                        
                    }).fail(function(response, status, xhr, $form) {
                        btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
                        showErrorMsg(forgetPasswordForm, 'danger', xhr);

                    });
           
        });
    }

    //== Public Functions
    return {
        // public functions
        init: function() {
            handleFormSwitch();
            handleSignInFormSubmit();
            handleSignUpFormSubmit();
            handleForgetPasswordFormSubmit();
        }
    };
}();

//== Class Initialization
jQuery(document).ready(function() {
    SnippetLogin.init();
});