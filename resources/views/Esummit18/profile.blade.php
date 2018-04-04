@extends('Esummit18.layouts.dashboard')

@section('title', 'User Profile | KIIT E-Summit\'18')

@section('content')

<div class="row">
      <div class="col-lg-4">
            <div class="m-portlet m-portlet--full-height">
                  <div class="m-portlet__body">
                        <div class="m-card-profile">
                              <div class="m-card-profile__title m--hide">
                                    Your Profile
                              </div>
                              <div class="m-card-profile__pic">
                                    <div class="m-card-profile__pic-wrapper">
                                          <img src="Esummit18/assets_dash/img/user-placeholder.png"/>
                                    </div>
                              </div>
                              <div class="m-card-profile__details">
                                    <span class="m-card-profile__name">
                                          {{$data['name'] or '' }}
                                    </span>
                                    <a href="" class="m-card-profile__email m-link">
                                          {{$data['email'] or '' }}
                                    </a>
                              </div>
                        </div>
                        <ul class="m-nav m-nav--hover-bg m-portlet-fit--sides">
                              <li class="m-nav__separator m-nav__separator--fit"></li>
                              <li class="m-nav__section m--hide">
                                    <span class="m-nav__section-text">
                                          Section
                                    </span>
                              </li>                                                                   
                              <!--li class="m-nav__item">
                                    <a href="#">
                                          <i class="m-nav__link-icon flaticon-share"></i>
                                          <span class="m-nav__link-text">
                                                Messages
                                          </span>
                                    </a>
                              </li>
                              <li class="m-nav__item">
                                    <a href="#">
                                          <i class="m-nav__link-icon flaticon-share"></i>
                                          <span class="m-nav__link-text">
                                                My Transactions
                                          </span>
                                    </a>
                              </li-->

                        </ul>
                        <div class="m-portlet__body-separator"></div>

                  </div>
            </div>
      </div>
      <div class="col-lg-8">
            <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                  <div class="m-portlet__head">
                        <div class="m-portlet__head-tools">
                              <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
                                    <li class="nav-item m-tabs__item">
                                          <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_user_profile_tab_1" role="tab">
                                                <i class="flaticon-share m--hide"></i>
                                                Update Profile
                                          </a>
                                    </li>
                                    
                              </ul>
                        </div>
                  </div>
                  <div class="tab-content">
                        <div class="tab-pane active" id="m_user_profile_tab_1">
                              <form id="prof_update" class="m-form m-form--fit m-form--label-align-right">
                                    <div class="m-portlet__body">                                                                               
                                          <div class="form-group m-form__group row">
                                                <div class="col-10 ml-auto">
                                                      <h3 class="m-form__section">
                                                            1. Personal Details
                                                      </h3>
                                                </div>
                                          </div>
                                          <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 col-form-label">
                                                      * Full Name :
                                                </label>
                                                <div class="col-7">
                                                      <input class="form-control m-input" type="text" name="name" value="{{$data['name'] or '' }}">
                                                </div>
                                          </div>
                                          <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 col-form-label">
                                                      * Mob No :
                                                </label>
                                                <div class="col-7">
                                                      <input class="form-control m-input" type="text" name="mobile_no" value="{{$data['mobile_no'] or '' }}">
                                                </div>
                                          </div>
                                          <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 col-form-label">
                                                      Alternate Mob No :
                                                </label>
                                                <div class="col-7">
                                                      <input name="smobile" class="form-control m-input" type="text" value="{{$data['smobile'] or '' }}">     
                                                </div>
                                          </div>
                                          <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 col-form-label">
                                                      * Profile Type :
                                                </label>
                                                <div class="col-7">
                                                      <select {{{ $data['prof_status'] ? 'disabled' : '' }}} name="prof_type" class="form-control m-input" id="prof_type">
                                                            <option value="none">
                                                                  Please Select
                                                            </option>
                                                            <option {{{ $data['prof_status'] && $data['prof_type'] == 'Student' ? 'selected="selected"' : '' }}} value="Student">
                                                                  College Student
                                                            </option>
                                                             <option {{{ $data['prof_status'] && $data['prof_type'] == 'School Student' ? 'selected="selected"' : '' }}} value="School Student">
                                                                  School Student
                                                            </option>
                                                            <option {{{ $data['prof_status'] && $data['prof_type'] == 'Startup' ? 'selected="selected"' : '' }}} value="Startup">
                                                                  Startup
                                                            </option>
                                                            <option {{{ $data['prof_status'] && $data['prof_type'] == 'Professional (Job)' ? 'selected="selected"' : '' }}} value="Professional (Job)">
                                                                  Professional (Job)
                                                            </option>              
                                                      </select> 
                                                      @if ($data['prof_status'] == true)
                                                                  <input type="hidden" name="prof_type" value="{{ $data['prof_type'] }}">
                                                      @endif  
                                                </div>
                                          </div>

                                          <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
                                          <div class="form-group m-form__group row">
                                                <div class="col-10 ml-auto">
                                                      <h3 class="m-form__section">
                                                            2. Address
                                                      </h3>
                                                </div>
                                          </div>
                                          <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 col-form-label">
                                                      * Address :
                                                </label>
                                                <div class="col-7">
                                                      <input name="address" class="form-control m-input" type="text" value="{{$data['address'] or '' }}">
                                                </div>
                                          </div>
                                          <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 col-form-label">
                                                      * Country :
                                                </label>
                                                <div class="col-7">
                                                      <input name="country" class="form-control m-input" type="text" value="{{$data['country'] or '' }}">
                                                </div>
                                          </div>
                                          <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 col-form-label">
                                                      * State :
                                                </label>
                                                <div class="col-7">
                                                      <input name="state" class="form-control m-input" type="text" value="{{$data['state'] or '' }}">
                                                </div>
                                          </div>
                                          <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 col-form-label">
                                                      * City :
                                                </label>
                                                <div class="col-7">
                                                      <input name="city" class="form-control m-input" type="text" value="{{$data['city'] or '' }}">
                                                </div>
                                          </div>

                                          <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-2 col-form-label">
                                                      * Postcode :
                                                </label>
                                                <div class="col-7">
                                                      <input name="pincode" class="form-control m-input" type="text" value="{{$data['pincode'] or '' }}">
                                                </div>
                                          </div>

                                          <div id="prof_student" style="display: none;">

                                                <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>

                                                <div class="form-group m-form__group row">
                                                      <div class="col-10 ml-auto">
                                                            <h3 class="m-form__section">
                                                                  3. Academic Details
                                                            </h3>
                                                      </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                      <label for="univ_name" class="col-2 col-form-label">
                                                            * College/School Name :
                                                      </label>
                                                      <div class="col-7">
                                                            <select name="univ_kiit" class="form-control m-input" id="univ_kiit">
                                                                  <option value="none">
                                                                        Please Select
                                                                  </option>
                                                                  <option value="kiit">
                                                                        KIIT University
                                                                  </option>
                                                                  <option value="Others">
                                                                        Others
                                                                  </option>       
                                                            </select>
                                                            <br>
                                                            <input style="display:none;" class="form-control m-input" type="text" id="univ_name" name="univ_name" value="{{$data['univ_name'] or '' }}">
                                                      </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                      <label for="example-text-input" class="col-2 col-form-label">
                                                            * Roll No :
                                                      </label>
                                                      <div class="col-7">
                                                            <input class="form-control m-input" type="text" name="univ_roll" value="{{$data['univ_roll'] or '' }}">
                                                      </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                      <label for="example-text-input" class="col-2 col-form-label">
                                                            * Branch :
                                                      </label>
                                                      <div class="col-7">
                                                            <input class="form-control m-input" type="text" name="univ_branch" value="{{$data['univ_branch'] or '' }}">
                                                      </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                      <label for="example-text-input" class="col-2 col-form-label">
                                                            * Year :
                                                      </label>
                                                      <div class="col-7">
                                                            <select name="univ_year" class="form-control m-input" id="univ_year">
                                                                  <option value="none">
                                                                        Please Select
                                                                  </option>
                                                                  <option value="First">
                                                                        First
                                                                  </option>
                                                                  <option value="Second">
                                                                        Second
                                                                  </option>
                                                                  <option value="Third">
                                                                        Third
                                                                  </option>
                                                                  <option value="Fourth">
                                                                        Fourth
                                                                  </option>
                                                                  <option value="Fifth">
                                                                        Fifth
                                                                  </option>       
                                                            </select>
                                                      </div>
                                                </div>

                                                <br>
                                          </div>

                                          <div id="prof_startup" style="display: none;">

                                                <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>

                                                <div class="form-group m-form__group row">
                                                      <div class="col-10 ml-auto">
                                                            <h3 class="m-form__section">
                                                                  3. Startup Details
                                                            </h3>
                                                      </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                      <label for="univ_name" class="col-2 col-form-label">
                                                            * Startup Name :
                                                      </label>
                                                      <div class="col-7">
                                                            <input class="form-control m-input" type="text" name="start_name" value="{{ $data['start_name'] or '' }}">                                                       
                                                            <br>

                                                      </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                      <label for="example-text-input" class="col-2 col-form-label">
                                                            TIN No :
                                                      </label>
                                                      <div class="col-7">
                                                            <input class="form-control m-input" type="text" name="start_tin" value="{{ $data['start_tin'] or '' }}">
                                                      </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                      <label for="example-text-input" class="col-2 col-form-label">
                                                            * Registered Address :
                                                      </label>
                                                      <div class="col-7">
                                                            <textarea class="form-control m-input" name="start_addr" rows="3">{{ $data['start_addr'] or '' }}</textarea>
                                                      </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                      <label for="example-text-input" class="col-2 col-form-label">
                                                            * No of Persons :
                                                      </label>
                                                      <div class="col-4">
                                                            <input class="form-control m-input" type="number" name="start_pop" value="{{ $data['start_pop'] or '' }}">                    
                                                      </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                      <label for="example-text-input" class="col-2 col-form-label">
                                                            * About Startup :
                                                      </label>
                                                      <div class="col-7">
                                                            <textarea class="form-control m-input" name="start_about" rows="5">{{ $data['start_about'] or '' }}</textarea>                    
                                                      </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                      <label for="example-text-input" class="col-2 col-form-label">
                                                            * Product Details :
                                                      </label>
                                                      <div class="col-7">
                                                            <textarea class="form-control m-input" name="start_prod" rows="5">{{ $data['start_prod'] or '' }}</textarea>                    
                                                      </div>
                                                </div>

                                                <br>
                                          </div>

                                          <div id="prof_job" style="display: none;">

                                                <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>

                                                <div class="form-group m-form__group row">
                                                      <div class="col-10 ml-auto">
                                                            <h3 class="m-form__section">
                                                                  3. Job Details
                                                            </h3>
                                                      </div>
                                                </div>                                                                                    
                                                <div class="form-group m-form__group row">
                                                      <label for="example-text-input" class="col-2 col-form-label">
                                                            * Company Name :
                                                      </label>
                                                      <div class="col-7">
                                                            <input class="form-control m-input" type="text" name="job_name" value="{{ $data['job_name'] or '' }}">
                                                      </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                      <label for="example-text-input" class="col-2 col-form-label">
                                                            * Position :
                                                      </label>
                                                      <div class="col-7">
                                                            <input class="form-control m-input" type="text" name="job_pos" value="{{ $data['job_pos'] or '' }}">
                                                      </div>
                                                </div>


                                                <br>
                                          </div>


                                          <div class="m-portlet__foot m-portlet__foot--fit">
                                                <div class="m-form__actions">
                                                      <div class="row">
                                                            <div class="col-2"></div>
                                                            <div class="col-7">
                                                                  <button type="submit" id="prof_sub" class="btn btn-accent m-btn m-btn--air m-btn--custom">
                                                                        Save changes
                                                                  </button>
                                                                  &nbsp;&nbsp;

                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    </form>
                              </div>
                              <div class="tab-pane active" id="m_user_profile_tab_2"></div>
                        </div>
                  </div>
            </div>
      </div>

      @endsection

      @section('scripts')
      <script type="text/javascript"> 
            

            function validateCustom(prof_type, univ_kiit){     


           $.validator.addMethod("checkInput", function(value, element, param) {
                  if(prof_type == 'Student'){
                       return this.optional(element) || value != param; 
                  } 
                  else
                        return true;
                 
          }, "Please Select this option");

           $.validator.addMethod("checkInput2", function(value, element, param) { 
                  if(prof_type == 'Student'){
                        if(value != '' && univ_kiit == 'Others')
                              return true;
                        else if(value != param)
                              return true;
                        else
                              return false;
                  }
                  else
                        return true;
          }, "This Field is Required!");

           $.validator.addMethod('checkStudent', function (value, element, param) {
            if(prof_type == 'Student'){                  
                  if(value != '')
                        return true;
                  else
                        return false;
            }
            else
                  return true;
                  
            }, 'This Field is Required!');

           $.validator.addMethod('checkStartup', function (value, element, param) {
                  if(prof_type == 'Startup'){                  
                  if(value != '')
                        return true;
                  else
                        return false;
            }
            else
                  return true;
            }, 'This Field is Required!');

           $.validator.addMethod('checkJob', function (value, element, param) {
                  if(prof_type == 'Professional (Job)'){                  
                  if(value != '')
                        return true;
                  else
                        return false;
            }
            else
                  return true;
            }, 'This Field is Required!');  
            }

           


           $('#prof_sub').click(function(e) {
            e.preventDefault();
            var btn = $(this);
            var form = $(this).closest('form');
            var action = 'profile/update';
            var data = $(this).serialize();

            var prof_type = $('#prof_type').val();
            var univ_kiit = $('#univ_kiit').val();

            validateCustom(prof_type, univ_kiit);


            form.validate({
              rules: {
                name: {
                  required: true
            },
            mobile_no: {
                  required: true,
                  number: true,
                  minlength: 10,
                  maxlength: 10
            },
            smobile: {
                  number: true,
                  minlength: 10,
                  maxlength: 10
            },
            address: {
                  required: true
            },
            city: {
                  required: true
            },
            state: {
                  required: true
            },
            country: {
                  required: true
            },
            pincode: {
                  required: true
            },

            prof_type: {
                  checkInput: 'none'
            },

            univ_name: {
                  checkInput2: 'none'
            },
            univ_roll: {
                  checkStudent: true
            },
            univ_year: {
                  checkStudent: true,
                  checkInput: 'none'
            },
            univ_branch: {
                  checkStudent: true
            },                   

            univ_kiit: {
                  checkInput2: 'none'
            },

            start_name: {
                  checkStartup: true
            },

            start_pop: {
                  checkStartup: true
            },

            start_about: {
                  checkStartup: true
            },

            start_prod: {
                  checkStartup: true
            },

            start_addr: {
                  checkStartup: true
            },

            job_name: {
                  checkJob: true
            },

            job_pos: {
                  checkJob: true
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
                  $('#prof_sub').removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
                  if( response.type=='success' ){
                        $('#prof_sub').removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
                    swal('Success', response.message, 'success');
              }
              if( response.type=='error' ){
                   btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
                    swal('Error', response.message, 'error');
              }
        },
        error: function(response, error, status){
            btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
             swal('Critical Error', response.responseText, 'error');
       }
 }); 

  });
</script>

<script type="text/javascript">
      $("#univ_kiit").change(function () {
            $("#univ_name").css("display","none");
            var univ = this.value;
            if(univ == 'Others')
                  $("#univ_name").css("display","block");
      });

      $("#prof_type").change(function () {
            $("#prof_student").css("display","none");
            $("#prof_startup").css("display","none");
            $("#prof_job").css("display","none");
            var type = this.value;
            if(type == 'Student')
                  $("#prof_student").css("display","block");
             if(type == 'School Student')
                  $("#prof_student").css("display","block");
            else if(type == 'Startup')
                  $("#prof_startup").css("display","block");
            else if(type == 'Professional (Job)')
                  $("#prof_job").css("display","block");
      });
</script>

<script type="text/javascript">
      var type = '{{$data['prof_type'] or ''}}';
      window.onload = function(e){ 
    if(type == 'Student')
                  $("#prof_student").css("display","block");
            else if(type == 'Startup')
                  $("#prof_startup").css("display","block");
            else if(type == 'Professional (Job)')
                  $("#prof_job").css("display","block");
}
</script>
@endsection            