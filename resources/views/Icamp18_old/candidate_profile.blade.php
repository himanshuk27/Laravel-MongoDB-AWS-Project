@extends('Icamp18.layouts.dashboard')

@section('title', 'User Profile | Icamp\'18')

@section('content')

<!--Begin::Main Portlet-->
							<div class="m-portlet m-portlet--full-height">
								<!--begin: Portlet Head-->
								<div class="m-portlet__head">
									<div class="m-portlet__head-caption">
										<div class="m-portlet__head-title">
											<h3 class="m-portlet__head-text">
												Student Registration
												<small>Internship Camp '18</small>
											</h3>
										</div>
									</div>
									<div class="m-portlet__head-tools">
										<ul class="m-portlet__nav">
											<li class="m-portlet__nav-item">
												<a href="#" data-toggle="m-tooltip" class="m-portlet__nav-link m-portlet__nav-link--icon" data-direction="left" data-width="auto" title="Get help with filling up this form">
													<i class="flaticon-info m--icon-font-size-lg3"></i>
												</a>    
											</li>
										</ul>
									</div>
								</div>
								<!--end: Portlet Head-->
							<!--begin: Form Wizard-->
							<div class="m-wizard m-wizard--2 m-wizard--success" id="m_wizard">
								<!--begin: Message container -->
								<div class="m-portlet__padding-x">
									<!-- Here you can put a message or alert -->
								</div>
								<!--end: Message container -->
        <!--begin: Form Wizard Head -->
								<div class="m-wizard__head m-portlet__padding-x">
									<!--begin: Form Wizard Progress -->
									<div class="m-wizard__progress">
										<div class="progress">
											<div class="progress-bar" role="progressbar"  aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<!--end: Form Wizard Progress -->  
            <!--begin: Form Wizard Nav -->
                                                            <div class="m-wizard__nav">
                                                                  <div class="m-wizard__steps">
                                                                        <div class="m-wizard__step m-wizard__step--current"  data-wizard-target="#m_wizard_form_step_1">
                                                                              <a href="#"  class="m-wizard__step-number">
                                                                                    <span><i class="fa  flaticon-placeholder"></i></span> 
                                                                              </a>
                                                                              <div class="m-wizard__step-info">
                                                                                    <div class="m-wizard__step-title">
                                                                                          1. Contact Details
                                                                                    </div>

                                                                              </div>
                                                                        </div>
                                                                        <div class="m-wizard__step" data-wizard-target="#m_wizard_form_step_2">
                                                                              <a href="#" class="m-wizard__step-number">
                                                                                    <span><i class="fa  flaticon-layers"></i></span> 
                                                                              </a>
                                                                              <div class="m-wizard__step-info">
                                                                                    <div class="m-wizard__step-title">
                                                                                          2. Educational Details
                                                                                    </div>

                                                                              </div>
                                                                        </div>
                                                                        <div class="m-wizard__step" data-wizard-target="#m_wizard_form_step_3">
                                                                              <a href="#" class="m-wizard__step-number">
                                                                                    <span><i class="fa  flaticon-layers"></i></span> 
                                                                              </a>
                                                                              <div class="m-wizard__step-info">
                                                                                    <div class="m-wizard__step-title">
                                                                                          3. Last Step
                                                                                    </div>

                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <!--end: Form Wizard Nav -->
								</div>
								<!--end: Form Wizard Head -->  
        <!--begin: Form Wizard Form-->
								<div class="m-wizard__form">
									<!--
                1) Use m-form--label-align-left class to alight the form input lables to the right
                2) Use m-form--state class to highlight input control borders on form validation
            -->
									<form class="m-form m-form--label-align-left- m-form--state-" id="m_form" method="POST" action="php/regSubmit.php" enctype="multipart/form-data">
										<!--begin: Form Body -->
										<div class="m-portlet__body">
											<!--begin: Form Wizard Step 1-->
											<div class="m-wizard__form-step m-wizard__form-step--current" id="m_wizard_form_step_1">
												<div class="row">
													<div class="col-xl-8 offset-xl-2">
														<div class="m-form__section m-form__section--first">
															<div class="form-group m-form__group row">
                                                      <label class="col-xl-3 col-lg-3 col-form-label">* Student Name :</label>
                                                      <div class="col-xl-9 col-lg-9">
                                                            <input type="text" name="name" class="form-control m-input">
                                                      </div>
                                                </div>

                                               <div class="form-group m-form__group row">
                                                      <label class="col-xl-3 col-lg-3 col-form-label">* Email :</label>
                                                      <div class="col-xl-9 col-lg-9">
                                                            <input type="email" name="email" class="form-control m-input">

                                                      </div>
                                                </div>

                                                <div class="form-group m-form__group row">
                                                      <label class="col-xl-3 col-lg-3 col-form-label">* Mobile :</label>
                                                      <div class="col-xl-9 col-lg-9">
                                                            <div class="input-group">
                                                                  <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span>&nbsp;</div>
                                                                  <input type="text" id="phone" class="form-control m-input">
                                                            </div>
                                                      </div>
                                                </div>

                                                <div class="form-group m-form__group row">
                                                      <label class="col-xl-3 col-lg-3 col-form-label">Alternate Mobile :</label>
                                                      <div class="col-xl-9 col-lg-9">
                                                            <div class="input-group">
                                                                  <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span>&nbsp;</div>
                                                                  <input type="text" id="phone" class="form-control m-input">
                                                            </div>
                                                      </div>
                                                </div>

                                               <div class="form-group m-form__group row">
                                                      <label class="col-xl-3 col-lg-3 col-form-label">* Address Line :</label>
                                                      <div class="col-xl-9 col-lg-9">
                                                            <input type="text" name="address" class="form-control m-input">
                                                            <span class="m-form__help">Street address, P.O. box, company name, c/o</span>
                                                      </div>
                                                </div>
                                               
														</div>
													</div>
												</div>
											</div>
											<!--end: Form Wizard Step 1-->
                    <!--begin: Form Wizard Step 2-->
											<div class="m-wizard__form-step" id="m_wizard_form_step_2">
												<div class="row">
													<div class="col-xl-8 offset-xl-2">
														<div class="m-form__section m-form__section--first">
															
															<div class="form-group m-form__group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">* Internship Location:</label>
                                                            <div class="col-xl-9 col-lg-9">
                                                                  <input type="text" name="intern_loc" class="form-control m-input">
                                                                  <span class="m-form__help">Location of the Internship</span>
                                                            </div>
                                                      </div>

                                                      <div class="form-group m-form__group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">* Internship Profile:</label>
                                                            <div class="col-xl-9 col-lg-9">
                                                                  <input type="text" name="intern_pro" class="form-control m-input">
                                                                  <span class="m-form__help">What are the profiles for the internship?</span>
                                                            </div>
                                                      </div>      

                                                      <div class="form-group m-form__group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">* Internship Duration</label>
                                                            <div class="col-lg-4 m-form__group-sub">
                                                                  <div class="input-group">
                                                                  </div>
                                                                  <select class="form-control m-input" name="intern_dur">
                                                                        <option value="01" selected>
                                                                              01 Month
                                                                        </option>
                                                                        <option value="02">
                                                                              02 Months
                                                                        </option>
                                                                        <option value="03">
                                                                              03 Months
                                                                        </option>
                                                                        <option value="06">
                                                                              06 Months
                                                                        </option>
                                                                        <option value='custom' data-input-value="Some custom value for the input">Others
                                                                        </option>         
                                                                  </select>
                                                                  <input type="number" name="intern_dur2" class="form-control m-input" placeholder="Custom">                               
                                                                  <span class="m-form__help">What will be the duration of the internship? (in Months)</span>                                                  
                                                            </div>
                                                      </div>


                                                      <div class="form-group m-form__group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">* Courses Preferred:</label>
                                                            <div class="col-xl-9 col-lg-9">
                                                                  <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                                        <input type="checkbox" name="courses" value="B.Tech">
                                                                        B.Tech
                                                                        <span></span>
                                                                  </label>
                                                                  <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                                        <input type="checkbox" name="courses" value="BBA">
                                                                        BBA
                                                                        <span></span>
                                                                  </label>
                                                                  <label class="m-checkbox m-checkbox--solid  m-checkbox--brand">
                                                                        <input type="checkbox" name="courses" value="BCA">
                                                                        BCA
                                                                        <span></span>
                                                                  </label>
                                                                  <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                                        <input type="checkbox" name="courses" value="B.SC">
                                                                        B.SC
                                                                        <span></span>
                                                                  </label>
                                                                  <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                                        <input type="checkbox" name="batch" value="BA LLB/BBA LLB/B.Sc. LLB">
                                                                        BA LLB/BBA LLB/B.Sc. LLB
                                                                        <span></span>
                                                                  </label>
                                                                  <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                                        <input type="checkbox" name="courses" value="B.Arch">
                                                                        B.Arch
                                                                        <span></span>
                                                                  </label>
                                                                  <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                                        <input type="checkbox" name="courses" value="Bachelor of Design(Fashion/Textile)">
                                                                        Bachelor of Design(Fashion/Textile)
                                                                        <span></span>
                                                                  </label>
                                                                  <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                                        <input type="checkbox" name="courses" value="Bachelor in Film and television promotion">
                                                                        Bachelor in Film and television promotion
                                                                        <span></span>
                                                                  </label>
                                                                  <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                                        <input type="checkbox" name="courses" value="M.Tech">
                                                                        M.Tech
                                                                        <span></span>
                                                                  </label>
                                                                  <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                                        <input type="checkbox" name="courses" value="MBA">
                                                                        MBA
                                                                        <span></span>
                                                                  </label>
                                                                  <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                                        <input type="checkbox" name="courses" value="MCA">
                                                                        MCA
                                                                        <span></span>
                                                                  </label>
                                                                  <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                                        <input type="checkbox" name="courses" value="Biotechnology">
                                                                        Biotechnology
                                                                        <span></span>
                                                                  </label>
                                                                  <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                                        <input type="checkbox" name="courses" value="Master of Mass Communication">
                                                                        Master of Mass Communication
                                                                        <span></span>
                                                                  </label>
                                                                  <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                                        <input type="checkbox" name="courses" value="Master of Public Health">
                                                                        Master of Public Health
                                                                        <span></span>
                                                                  </label>
                                                                  <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                                        <input type="checkbox" name="courses" value="Master of Hospital Administartrion">
                                                                        Master of Hospital Administartrion
                                                                        <span></span>
                                                                  </label>
                                                                  <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                                        <input type="checkbox" name="courses" value="LLM">
                                                                        LLM
                                                                        <span></span>
                                                                  </label>
                                                                  <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                                        <input type="checkbox" name="courses" value="PHD">
                                                                        PHD
                                                                        <span></span>
                                                                  </label>
                                                            </div>
                                                      </div>

                                                      <div class="form-group m-form__group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">* Graduation Batch Preferred:</label>
                                                            <div class="col-xl-9 col-lg-9">
                                                                  <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                                        <input type="checkbox" name="batch" value="All">
                                                                        All
                                                                        <span></span>
                                                                  </label>
                                                                  <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                                        <input type="checkbox" name="batch" value="2017">
                                                                        2017
                                                                        <span></span>
                                                                  </label>
                                                                  <label class="m-checkbox m-checkbox--solid  m-checkbox--brand">
                                                                        <input type="checkbox" name="batch" value="2018">
                                                                        2018 (4th Year)
                                                                        <span></span>
                                                                  </label>
                                                                  <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                                        <input type="checkbox" name="batch" value="2019">
                                                                        2019 (3rd Year)
                                                                        <span></span>
                                                                  </label>
                                                                  <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                                        <input type="checkbox" name="batch" value="2020">
                                                                        2020 (2nd Year)
                                                                        <span></span>
                                                                  </label>
                                                                  <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                                        <input type="checkbox" name="batch" value="2021">
                                                                        2021 (1st Year)
                                                                        <span></span>
                                                                  </label>
                                                                  <label class="m-checkbox m-checkbox--solid m-checkbox--brand">
                                                                        <input type="checkbox" name="batch" value="2022">
                                                                        2022
                                                                        <span></span>
                                                                  </label>

                                                            </div>
                                                      </div>

                                                      <div class="form-group m-form__group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">* Internship Areas:</label>
                                                            <div class="col-xl-9 col-lg-9">
                                                                  <textarea rows="6" name="intern_area" class="form-control m-input">
                                                                  </textarea>
                                                                  <span class="m-form__help">Areas of internships offered and detailed description of requirement from interns.</span>
                                                            </div>
                                                      </div>
                                                      <div class="form-group m-form__group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">* Selection Criteria:</label>
                                                            <div class="col-xl-9 col-lg-9">
                                                                  <textarea  rows="6" name="sel_criteria" class="form-control m-input">
                                                                  </textarea>

                                                            </div>
                                                      </div>
                                                      <div class="form-group m-form__group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">* Selection Process:</label>
                                                            <div class="col-xl-9 col-lg-9">
                                                                  <textarea  rows="6" name="sel_process" class="form-control m-input">
                                                                  </textarea>
                                                                  <span class="m-form__help">Process of selection (Including timelines and deadlines)</span>
                                                            </div>
                                                      </div>
                                                      <div class="form-group m-form__group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">* Requirements :</label>
                                                            <div class="col-xl-9 col-lg-9">
                                                                  <textarea  rows="6" name="requirement" class="form-control m-input">
                                                                  </textarea>
                                                                  <span class="m-form__help">Requirements/needs for conducting selections?</span>
                                                            </div>
                                                      </div>
                                                      <div class="form-group m-form__group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">* Maximum Intake :</label>
                                                            <div class="col-lg-4 m-form__group-sub">
                                                                  <input type="number" name="max_intake" 
                                                                  min="1"class="form-control m-input" placeholder="Custom">

                                                            </div>
                                                      </div>
                                                      <div class="form-group m-form__group row">
                                                            <div class="col-lg-6 m-form__group-sub">
                                                                  <label class="form-control-label">
                                                                        * Internship Type:
                                                                  </label>
                                                                  <div class="m-radio-inline">
                                                                        <label class="m-radio m-radio--solid m-radio--brand">
                                                                              <input type="radio" name="stipend" value="no">
                                                                              Without Stipend   
                                                                              <span></span>
                                                                        </label>
                                                                        <label class="m-radio m-radio--solid m-radio--brand">
                                                                              <input type="radio" name="stipend" value="yes">
                                                                              With Stipend
                                                                              <span></span>
                                                                        </label>
                                                                        <input type="text" name="stipend2" placeholder="Stipend Amount" class="form-control m-input">
                                                                  </div>
                                                                  <span class="m-form__help">
                                                                        Will the internship be paid or unpaid? If paid, what will be the amount of stipend?
                                                                  </span>
                                                            </div>
                                                      </div>

                                                      <div class="form-group m-form__group row">
                                                            <div class="col-lg-6 m-form__group-sub">
                                                                  <label class="form-control-label">
                                                                        * PPO Offers:
                                                                  </label>
                                                                  <div class="m-radio-inline">
                                                                        <label class="m-radio m-radio--solid m-radio--brand">
                                                                              <input type="radio" name="ppo" checked="" value="no">
                                                                              No
                                                                              <span></span>
                                                                        </label>
                                                                        <label class="m-radio m-radio--solid m-radio--brand">
                                                                              <input type="radio" name="ppo" value="yes">
                                                                              Yes
                                                                              <span></span>
                                                                        </label>
                                                                        <textarea class="form-control" name="ppo" maxlength="8"  placeholder="Enter Details" rows="6"></textarea>
                                                                  </div>
                                                                  <span class="m-form__help">
                                                                        Will you be offering PPO offers? If yes, please mention the duration of work term and other associated details.
                                                                  </span>
                                                            </div>
                                                      </div>

                                                      <div class="form-group m-form__group row">
                                                            <div class="col-lg-6 m-form__group-sub">
                                                                  <label class="col-xl-3 col-lg-3 col-form-label">Extra Notes :</label>
                                                                  <textarea class="form-control" name="notes" maxlength="8" rows="6"></textarea>
                                                            </div>
                                                      </div>



														</div>
													</div>
												</div>
											</div>
											<!--end: Form Wizard Step 2--> 
                    <!--begin: Form Wizard Step 3-->
											<div class="m-wizard__form-step" id="m_wizard_form_step_3">
												<div class="row">
													<div class="col-xl-8 offset-xl-2">
														<div class="col-xl-8 offset-xl-2">
                                          <h3 class="m-form__heading-title">
                                                User Verification
                                          </h3>
														<div class="m-separator m-separator--dashed m-separator--lg"></div>
														<div class="form-group m-form__group m-form__group--sm row">
															<div class="col-xl-12">
																<div class="m-checkbox-inline">
																	<label class="m-checkbox m-checkbox--solid m-checkbox--brand">
																		<input type="checkbox" name="accept" value="1">
																		Click here to indicate that you have read and agree to the terms presented in the Terms and Conditions agreement
																		<span></span>
																	</label>
																</div>
															</div>
														</div>
														<div class="form-group m-form__group m-form__group--sm row">
															<div class="col-xl-12">
															  <br>	
																		
																<!---div class="g-recaptcha" data-sitekey="6LfpkkAUAAAAAJo0WD0U-K-67oA-rLg8UzL5a1V-">
																</div-->
																<span></span>
																	
															  
															</div>
														</div>
													</div>
												</div>
											</div>
											<!--end: Form Wizard Step 3-->
										</div>
										<!--end: Form Body -->
                <!--begin: Form Actions -->
										<div class="m-portlet__foot m-portlet__foot--fit m--margin-top-40">
											<div class="m-form__actions">
												<div class="row">
													<div class="col-lg-2"></div>
													<div class="col-lg-4 m--align-left">
														<a href="#" class="btn btn-secondary m-btn m-btn--custom m-btn--icon" data-wizard-action="prev">
															<span>
																<i class="la la-arrow-left"></i>
																&nbsp;&nbsp;
																<span>
																	Back
																</span>
															</span>
														</a>
													</div>
													<div class="col-lg-4 m--align-right">
														<a href="#" class="btn btn-primary m-btn m-btn--custom m-btn--icon" data-wizard-action="submit">
															<span>
																<i class="la la-check"></i>
																&nbsp;&nbsp;
																<span>
																	Submit
																</span>
															</span>
														</a>
														<a href="#" class="btn btn-warning m-btn m-btn--custom m-btn--icon" data-wizard-action="next">
															<span>
																<span>
																	Continue
																</span>
																&nbsp;&nbsp;
																<i class="la la-arrow-right"></i>
															</span>
														</a>
													</div>
													<div class="col-lg-2"></div>
												</div>
											</div>
										</div>
										<!--end: Form Actions -->
									</form>
								</div>
								<!--end: Form Wizard Form-->
							</div>
							<!--end: Form Wizard-->
						</div>
<!--End::Main Portlet-->	

		@endsection
		