@extends('Icamp18.layouts.dashboard')

@section('title', 'Profile Update - Internshipcamp \'18')

@section('content')

<div class="row">
	<div class="col-lg-12">
		<!--begin::Portlet-->
		<div class="m-portlet">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
							<i class="la la-gear"></i>
						</span>
						<h3 class="m-portlet__head-text">
							Update your profile
						</h3>
					</div>
				</div>
			</div>
			<!--begin::Form-->
			<form class="m-form m-form--label-align-right" id="updateProf" action='/profile/update'>
				<div class="m-portlet__body">	
                              <div class="row">
                                          <div class="col-lg-6">
                                                <button id="but_submit" class="btn btn-primary">Save Profile</button>
                                                &nbsp;                                                
                                          </div>
                                          
                                    </div>
                                    <br>
					<div class="m-form__section m-form__section--first">		
						<div class="m-form__heading">
							<h3 class="m-form__heading-title">Personal Details :</h3>
						</div>
						<div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-4 col-form-label">
                                                      * Full Name :
                                                </label>
                                                <div class="col-5">
                                                      <input class="form-control m-input" type="text" id="name"  name="name" value="{{$data->name or '' }}">
                                                </div>
                                          </div>
                                          <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-4 col-form-label">
                                                      * Mob No :
                                                </label>
                                                <div class="col-5">
                                                      <input class="form-control m-input" type="text" id="mobile_no" name="mobile_no" value="{{$data->mobile_no or '' }}">
                                                </div>
                                          </div>
                                          <div class="form-group m-form__group row">
                                                <label for="example-text-input" class="col-4 col-form-label">
                                                      Alternate Mob No :
                                                </label>
                                                <div class="col-5">
                                                      <input id="smobile" name="smobile" class="form-control m-input" type="text" value="{{$data->smobile or '' }}">     
                                                </div>
                                          </div>
                                          
										
						
					</div>

					<div class="m-form__seperator m-form__seperator--dashed"></div>

					<div class="m-form__section m-form__section--last">
						<div class="m-form__heading">
							<h3 class="m-form__heading-title">Academic Details :</h3>
						</div>
						 <div class="form-group m-form__group row">
                                                      <label for="univ_name" class="col-4 col-form-label">
                                                            * College Name :
                                                      </label>
                                                      <div class="col-6">
                                                            <select id="univ_kiit" name="univ_kiit" class="form-control m-input" id="univ_kiit">
                                                                  <option value="none">
                                                                        Please Select
                                                                  </option>
                                                                  @if(isset($data->univ_name))
                                                                  <option value="kiit" {{ $data->univ_name == 'kiit' ? 'selected' : '' }}>
                                                                        KIIT University
                                                                  </option>
                                                                  <option value="Others" {{ $data->univ_name != 'kiit' ? 'selected' : '' }}>
                                                                        Others
                                                                  </option>  
                                                                  @else
                                                                  <option value="kiit">
                                                                        KIIT University
                                                                  </option>
                                                                  <option value="Others">
                                                                        Others
                                                                  </option>  
                                                                  @endif     
                                                                       
                                                            </select>
                                                            <br>
                                                            
                                                            <input style="display: none;" class="form-control m-input" type="text" id="univ_name" name="univ_name" value="{{$data->univ_name or '' }}">
                                                            
                                                      </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                      <label for="example-text-input" class="col-4 col-form-label">
                                                            * Roll No :
                                                      </label>
                                                      <div class="col-5">
                                                            <input id="univ_roll" class="form-control m-input" type="text" name="univ_roll" value="{{$data['univ_roll'] or '' }}">
                                                      </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                      <label for="example-text-input" class="col-4 col-form-label">
                                                            * Branch :
                                                      </label>
                                                      <div class="col-5">
                                                            <input id="univ_branch" class="form-control m-input" type="text" name="univ_branch" value="{{$data['univ_branch'] or '' }}">
                                                      </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                      <label for="example-text-input" class="col-4 col-form-label">
                                                            * Year :
                                                      </label>
                                                      <div class="col-5">
                                                            <select name="univ_year" class="form-control m-input" id="univ_year">
                                                                  <option value="none">
                                                                        Please Select
                                                                  </option>
                                                                   @if(isset($data->univ_year))
                                                                   <option value="First" {{ $data->univ_year == 'First' ? 'selected' : '' }}>
                                                                        First
                                                                  </option>
                                                                  <option value="Second" {{ $data->univ_year == 'Second' ? 'selected' : '' }}>
                                                                        Second
                                                                  </option>
                                                                  <option value="Third" {{ $data->univ_year == 'Third' ? 'selected' : '' }}>
                                                                        Third
                                                                  </option>
                                                                  <option value="Fourth" {{ $data->univ_year == 'Fourth' ? 'selected' : '' }}>
                                                                        Fourth
                                                                  </option>
                                                                  <option value="Fifth" {{ $data->univ_year == 'Fifth' ? 'selected' : '' }}>
                                                                        Fifth
                                                                  </option> 
                                                                  @else
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

                                                                   @endif
                                                                       
                                                            </select>
                                                      </div>
                                                </div>

				<div class="m-portlet__foot m-portlet__foot--fit">
					<div class="m-form__actions m-form__actions">
						 <div class="row">
                                          <div class="col-lg-6">
                                                <button id="but_submit2" class="btn btn-primary">Save Profile</button>
                                                &nbsp;                                                
                                          </div>
                                          
                                    </div>
					</div>
				</div>
				<input type="hidden" name="_token" value="{{ csrf_token() }}" >
			</form>
			<!--end::Form-->
		</div>
		<!--end::Portlet-->

	</div></div>

	

	@endsection		

	@section('scripts')

  @if ( !empty($_GET['email']) )
<script type="text/javascript">
  function showCustomMsg() {
    var msg;
    if('{{$_GET['email']}}' == 'verified')
      msg = 'Email verified successfully!';
    
    swal('Great', 'Email Verification Complete!', 'success');
  }     

  window.onload = showCustomMsg();
</script>   
@endif
<script type="text/javascript" src="/Icamp18/assets_dash/js/profile2.js">
    
</script>
  @endsection