@extends('Icamp18.layouts.dashboard') @section('title', 'Dashboard - Internshipcamp \'18') @section('css')
<style type="text/css">
    body{
        overflow-x: hidden;
    }

</style>

<div class="container">

    <div class="row">
       <div class="col-md-12">
    
        <h1 style="margin-top: 20%;text-align: center;">International Internship<br> <span style="color: grey;font-size: 20px;">Powered by AIESEC</span><br><br></h1>
        
          <div class="alert alert-success" role="alert">
  International Internship provided by AIESEC will as a 5th company <strong>(i.e. You can apply for 4+1 companies)</strong>
</div><br>
        <div class="m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">

                            About AISEC
                        </h3>
                    </div>
                </div>
            </div>
            
            <div class="m-portlet__body">
                <!--begin::Section-->
                <div class="m-section m-section--last">

                    <div class="m-section__content">
                       <div class="container">
                        <div class="row">
                           
                            <div class="col-md-6" style="font-size: 20px;">
                                AIESEC is the world’s largest not for profit, youth-run organization, based in 134 countries. It works in collaboration with UN to provide young people with leadership development and cross-cultural global internship experiences across the globe.
                            </div>
                            <div class="col-md-6">
                                <img src="/Icamp18/assets_dash/img/AIESEC-main.png" class="img-fluid" width="500" alt="AISEC Logo"><br><br>

                            </div>

                        </div>
                        </div>
                    </div>
                </div>
                <!--end::Section-->
            </div>
         
        </div>
    </div>
       </div>
        <div class="col-md-12">
            <div class="m-portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">

                                Internship profile
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Section-->
                    <div class="m-section m-section--last">

                        <div class="m-section__content">
                           <div class="container">
                            <div class="row">
                                <div class="col-md-6">
<!--                                    <img src="/Icamp18/assets_dash/img/image-2.jpg" width="500" alt="Icamp Offer" class="img-fluid" ><br><br>-->
                                <iframe width="500" height="315" src="https://www.youtube.com/embed/_0xZqxXySK8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

                                </div>
                                <div class="col-md-6" style="font-size: 20px;">
                                    This unique internship experience that enables students to work on projects that impact social issues and develop leadership skills. As an exchange participant, students work in projects in different fields with people from all around the world. The student receives two certificates - from AIESEC and from the UN.
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Section-->
                </div>
            </div>
        </div>
           <div class="col-md-12">
            <div class="m-portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Important Information
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                   
                            <!--
				<li class="nav-item m-tabs__item">
					<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget5_tab2_content" role="tab" aria-selected="false">
					last Year
					</a>
				</li>
				<li class="nav-item m-tabs__item">
					<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget5_tab3_content" role="tab" aria-selected="false">
					All time
					</a>
				</li>
-->
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Content-->
                    <div class="tab-content">
                        <div class="tab-pane active show" id="m_widget5_tab1_content" aria-expanded="true">
                            <!--begin::m-widget5-->
                            <div class="m-widget5">
                                <div class="m-widget5__item">

                                    <div class="m-widget5__content">
                                        <h4 class="m-widget5__title">
                                            Internship location
                                        </h4>
                                        <span class="m-widget5__desc">
							AIESEC offers internship opportunities in 134 different countries 
							</span>

                                    </div>
                                    <div class="m-widget5__stats1">
                                        <span class="m-widget5__number">134</span><br>
                                        <span class="m-widget5__sales">countries</span>
                                    </div>

                                </div>
                                <div class="m-widget5__item">

                                    <div class="m-widget5__content">
                                        <h4 class="m-widget5__title">
                                            Internship duration
                                        </h4>
                                                 <span class="m-widget5__desc">
							Depending on the project you are selected
							</span>
            

                                    </div>
                                    <div class="m-widget5__stats1">
                                        <span class="m-widget5__number"> 8 </span><br>
                                        <span class="m-widget5__sales">weeks avg.</span>
                                    </div>

                                </div>
                                <div class="m-widget5__item">

                                    <div class="m-widget5__content">
                                        <h4 class="m-widget5__title">
                                            Stipend (if any)
                                        </h4>
                                        <span class="m-widget5__desc">
							Varying according to project
							</span>
                                    </div>
                                    <!--end::m-widget5-->
                                </div>
                                <div class="m-widget5__item">

                                    <div class="m-widget5__content">
                                        <h4 class="m-widget5__title">
                                            Branch of student
                                        </h4>
                                        <span class="m-widget5__desc">
							Applicable for students of all branches
							</span>


                                    </div>


                                </div>
                                <div class="m-widget5__item">

                                    <div class="m-widget5__content">
                                        <h4 class="m-widget5__title">
                                            No. of opportunities
                                        </h4>
                                        <span class="m-widget5__desc">
							
Courses: CS/IT, Electronics, Electrical, Mechanical, Civil, Marketing, Entrepreneurship,
Content-writing, Business Development, Robotics, Explore.
							</span>


                                    </div>


                                </div>
                                <div class="m-widget5__item">

                                    <div class="m-widget5__content">
                                        <h4 class="m-widget5__title">
                                            Batches
                                        </h4>
                                        <span class="m-widget5__desc">
							
Applicable for students of all batches
							</span>


                                    </div>


                                </div>

                            </div>
                        </div>
                        <!--end::Content-->
                    </div>
                </div>



            </div>
        </div>
          <a href="http://bit.ly/ii_register" style="color: white;display: inline-block;" target="_blank"><button  class="btn btn-danger btn-lg">Register Here</button></a>
        <button id="but_aiesec" class="btn btn-success btn-lg ">Apply Now</button>
       
        <a href="https://aiesec.org/global-entrepreneur" style="color: white;display: inline-block;" target="_blank"><button id="but_aiesec" class="btn btn-primary btn-lg">Know More</button></a><br><br>
          <div class="alert alert-success" role="alert">
  International Internship provided by AIESEC will act as a 5th company <strong>(i.e. You can apply for 4+1 companies)</strong>
</div><br>
       
    </div>
</div>

@endsection

@section('scripts')
<script type="text/javascript">
    var _token = $('meta[name="csrf-token"]').attr('content');

    $('#but_aiesec').click(function(e) {
         
        e.preventDefault(); 
        var btn = $(this);
        var comp_id = btn.attr('name');
        var action = '/aiesec/apply'; 
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
                swal('Awesome', response.message, response.type);
            }

            else
                swal('Error', response.message, response.type);



        }).fail(function(response, status, xhr) {
            btn.removeClass('m-loader m-loader--right m-loader--light').attr('disabled', false);
            swal('Critical Error', status, 'error');

        });

    });
</script>
@endsection