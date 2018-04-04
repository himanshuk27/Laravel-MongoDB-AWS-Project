@extends('Icamp18.layouts.dashboard')

@section('title', 'Dashboard | Icamp\'18')

@section('content')

<!--Begin::Section-->
                                          <div class="m-portlet">
                                                <div class="m-portlet__body  m-portlet__body--no-padding">
                                                      <div class="row m-row--no-padding m-row--col-separator-xl">
                                                            <div class="col-xl-4">
                                                                  <!--begin:: Widgets/Daily Sales-->
                                                                  <div class="m-widget14">
                                                                        <div class="m-widget14__header m--margin-bottom-30">
                                                                              <h3 class="m-widget14__title">
                                                                                    Daily Sales
                                                                              </h3>
                                                                              <span class="m-widget14__desc">
                                                                                    Check out each collumn for more details
                                                                              </span>
                                                                        </div>
                                                                        <div class="m-widget14__chart" style="height:120px;">
                                                                              <canvas  id="m_chart_daily_sales"></canvas>
                                                                        </div>
                                                                  </div>
                                                                  <!--end:: Widgets/Daily Sales-->
                                                            </div>
                                                            <div class="col-xl-4">
                                                                  <!--begin:: Widgets/Profit Share-->
                                                                  <div class="m-widget14">
                                                                        <div class="m-widget14__header">
                                                                              <h3 class="m-widget14__title">
                                                                                    Profit Share
                                                                              </h3>
                                                                              <span class="m-widget14__desc">
                                                                                    Profit Share between customers
                                                                              </span>
                                                                        </div>
                                                                        <div class="row  align-items-center">
                                                                              <div class="col">
                                                                                    <div id="m_chart_profit_share" class="m-widget14__chart" style="height: 160px">
                                                                                          <div class="m-widget14__stat">
                                                                                                45
                                                                                          </div>
                                                                                    </div>
                                                                              </div>
                                                                              <div class="col">
                                                                                    <div class="m-widget14__legends">
                                                                                          <div class="m-widget14__legend">
                                                                                                <span class="m-widget14__legend-bullet m--bg-accent"></span>
                                                                                                <span class="m-widget14__legend-text">
                                                                                                      37% Sport Tickets
                                                                                                </span>
                                                                                          </div>
                                                                                          <div class="m-widget14__legend">
                                                                                                <span class="m-widget14__legend-bullet m--bg-warning"></span>
                                                                                                <span class="m-widget14__legend-text">
                                                                                                      47% Business Events
                                                                                                </span>
                                                                                          </div>
                                                                                          <div class="m-widget14__legend">
                                                                                                <span class="m-widget14__legend-bullet m--bg-brand"></span>
                                                                                                <span class="m-widget14__legend-text">
                                                                                                      19% Others
                                                                                                </span>
                                                                                          </div>
                                                                                    </div>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                                  <!--end:: Widgets/Profit Share-->
                                                            </div>
                                                            <div class="col-xl-4">
                                                                  <!--begin:: Widgets/Support Stats-->
                                                                  <div class="m-widget1">
                                                                        <div class="m-widget1__item">
                                                                              <div class="row m-row--no-padding align-items-center">
                                                                                    <div class="col">
                                                                                          <h3 class="m-widget1__title">
                                                                                                IPO Margin
                                                                                          </h3>
                                                                                          <span class="m-widget1__desc">
                                                                                                Awerage IPO Margin
                                                                                          </span>
                                                                                    </div>
                                                                                    <div class="col m--align-right">
                                                                                          <span class="m-widget1__number m--font-focus">
                                                                                                +24%
                                                                                          </span>
                                                                                    </div>
                                                                              </div>
                                                                        </div>
                                                                        <div class="m-widget1__item">
                                                                              <div class="row m-row--no-padding align-items-center">
                                                                                    <div class="col">
                                                                                          <h3 class="m-widget1__title">
                                                                                                Payments
                                                                                          </h3>
                                                                                          <span class="m-widget1__desc">
                                                                                                Yearly Expenses
                                                                                          </span>
                                                                                    </div>
                                                                                    <div class="col m--align-right">
                                                                                          <span class="m-widget1__number m--font-accent">
                                                                                                +$560,800
                                                                                          </span>
                                                                                    </div>
                                                                              </div>
                                                                        </div>
                                                                        <div class="m-widget1__item">
                                                                              <div class="row m-row--no-padding align-items-center">
                                                                                    <div class="col">
                                                                                          <h3 class="m-widget1__title">
                                                                                                Logistics
                                                                                          </h3>
                                                                                          <span class="m-widget1__desc">
                                                                                                Regional Logistics
                                                                                          </span>
                                                                                    </div>
                                                                                    <div class="col m--align-right">
                                                                                          <span class="m-widget1__number m--font-info">
                                                                                                -10%
                                                                                          </span>
                                                                                    </div>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                                  <!--end:: Widgets/Support Stats-->
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                          <!--End::Section-->


<!--Begin::Section-->
                                          <div class="row">
                                                <div class="col-xl-6 col-lg-12">
                                                      <!--Begin::Portlet-->
                                                      <div class="m-portlet  m-portlet--full-height">
                                                            <div class="m-portlet__head">
                                                                  <div class="m-portlet__head-caption">
                                                                        <div class="m-portlet__head-title">
                                                                              <h3 class="m-portlet__head-text">
                                                                                    News & Announcements
                                                                              </h3>
                                                                        </div>
                                                                  </div>
                                                                  <div class="m-portlet__head-tools">
                                                                        <ul class="m-portlet__nav">
                                                                              <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
                                                                                    <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
                                                                                          <i class="la la-ellipsis-h m--font-brand"></i>
                                                                                    </a>
                                                                                    <div class="m-dropdown__wrapper">
                                                                                          <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                                          <div class="m-dropdown__inner">
                                                                                                <div class="m-dropdown__body">
                                                                                                      <div class="m-dropdown__content">
                                                                                                            <ul class="m-nav">
                                                                                                                  <li class="m-nav__section m-nav__section--first">
                                                                                                                        <span class="m-nav__section-text">
                                                                                                                              Quick Actions
                                                                                                                        </span>
                                                                                                                  </li>
                                                                                                                  <li class="m-nav__item">
                                                                                                                        <a href="" class="m-nav__link">
                                                                                                                              <i class="m-nav__link-icon flaticon-share"></i>
                                                                                                                              <span class="m-nav__link-text">
                                                                                                                                    Activity
                                                                                                                              </span>
                                                                                                                        </a>
                                                                                                                  </li>
                                                                                                                  <li class="m-nav__item">
                                                                                                                        <a href="" class="m-nav__link">
                                                                                                                              <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                                                              <span class="m-nav__link-text">
                                                                                                                                    Messages
                                                                                                                              </span>
                                                                                                                        </a>
                                                                                                                  </li>
                                                                                                                  <li class="m-nav__item">
                                                                                                                        <a href="" class="m-nav__link">
                                                                                                                              <i class="m-nav__link-icon flaticon-info"></i>
                                                                                                                              <span class="m-nav__link-text">
                                                                                                                                    FAQ
                                                                                                                              </span>
                                                                                                                        </a>
                                                                                                                  </li>
                                                                                                                  <li class="m-nav__item">
                                                                                                                        <a href="" class="m-nav__link">
                                                                                                                              <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                                                                              <span class="m-nav__link-text">
                                                                                                                                    Support
                                                                                                                              </span>
                                                                                                                        </a>
                                                                                                                  </li>
                                                                                                                  <li class="m-nav__separator m-nav__separator--fit"></li>
                                                                                                                  <li class="m-nav__item">
                                                                                                                        <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                                                                                              Cancel
                                                                                                                        </a>
                                                                                                                  </li>
                                                                                                            </ul>
                                                                                                      </div>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </li>
                                                                        </ul>
                                                                  </div>
                                                            </div>
                                                            <div class="m-portlet__body">
                                                                  <div class="m-scrollable mCustomScrollbar _mCS_5 mCS-autoHide" data-scrollbar-shown="true" data-scrollable="true" data-max-height="380" style="overflow: visible; height: 380px; max-height: 380px; position: relative;">
                                                                        <!--Begin::Timeline 2 -->
                                                                        <div class="m-timeline-2">
                                                                              <div class="m-timeline-2__items  m--padding-top-25 m--padding-bottom-30"">
                                                                                    <div class="m-timeline-2__item">
                                                                                          <span class="m-timeline-2__item-time">
                                                                                                10:00
                                                                                          </span>
                                                                                          <div class="m-timeline-2__item-cricle">
                                                                                                <i class="fa fa-genderless m--font-danger"></i>
                                                                                          </div>
                                                                                          <div class="m-timeline-2__item-text  m--padding-top-5">
                                                                                                Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
                                                                                                <br>
                                                                                                incididunt ut labore et dolore magna
                                                                                          </div>
                                                                                    </div>
                                                                                    <div class="m-timeline-2__item m--margin-top-30">
                                                                                          <span class="m-timeline-2__item-time">
                                                                                                12:45
                                                                                          </span>
                                                                                          <div class="m-timeline-2__item-cricle">
                                                                                                <i class="fa fa-genderless m--font-success"></i>
                                                                                          </div>
                                                                                          <div class="m-timeline-2__item-text m-timeline-2__item-text--bold">
                                                                                                AEOL Meeting With
                                                                                          </div>
                                                                                          <div class="m-list-pics m-list-pics--sm m--padding-left-20">
                                                                                                <a href="#">
                                                                                                      <img src="assets/app/media/img/users/100_4.jpg" title="">
                                                                                                </a>
                                                                                                <a href="#">
                                                                                                      <img src="assets/app/media/img/users/100_13.jpg" title="">
                                                                                                </a>
                                                                                                <a href="#">
                                                                                                      <img src="assets/app/media/img/users/100_11.jpg" title="">
                                                                                                </a>
                                                                                                <a href="#">
                                                                                                      <img src="assets/app/media/img/users/100_14.jpg" title="">
                                                                                                </a>
                                                                                          </div>
                                                                                    </div>
                                                                                    <div class="m-timeline-2__item m--margin-top-30">
                                                                                          <span class="m-timeline-2__item-time">
                                                                                                14:00
                                                                                          </span>
                                                                                          <div class="m-timeline-2__item-cricle">
                                                                                                <i class="fa fa-genderless m--font-brand"></i>
                                                                                          </div>
                                                                                          <div class="m-timeline-2__item-text m--padding-top-5">
                                                                                                Make Deposit
                                                                                                <a href="#" class="m-link m-link--brand m--font-bolder">
                                                                                                      USD 700
                                                                                                </a>
                                                                                                To ESL.
                                                                                          </div>
                                                                                    </div>
                                                                                    <div class="m-timeline-2__item m--margin-top-30">
                                                                                          <span class="m-timeline-2__item-time">
                                                                                                16:00
                                                                                          </span>
                                                                                          <div class="m-timeline-2__item-cricle">
                                                                                                <i class="fa fa-genderless m--font-warning"></i>
                                                                                          </div>
                                                                                          <div class="m-timeline-2__item-text m--padding-top-5">
                                                                                                Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
                                                                                                <br>
                                                                                                incididunt ut labore et dolore magna elit enim at minim
                                                                                                <br>
                                                                                                veniam quis nostrud
                                                                                          </div>
                                                                                    </div>
                                                                                    <div class="m-timeline-2__item m--margin-top-30">
                                                                                          <span class="m-timeline-2__item-time">
                                                                                                17:00
                                                                                          </span>
                                                                                          <div class="m-timeline-2__item-cricle">
                                                                                                <i class="fa fa-genderless m--font-info"></i>
                                                                                          </div>
                                                                                          <div class="m-timeline-2__item-text m--padding-top-5">
                                                                                                Placed a new order in
                                                                                                <a href="#" class="m-link m-link--brand m--font-bolder">
                                                                                                      SIGNATURE MOBILE
                                                                                                </a>
                                                                                                marketplace.
                                                                                          </div>
                                                                                    </div>
                                                                                    <div class="m-timeline-2__item m--margin-top-30">
                                                                                          <span class="m-timeline-2__item-time">
                                                                                                16:00
                                                                                          </span>
                                                                                          <div class="m-timeline-2__item-cricle">
                                                                                                <i class="fa fa-genderless m--font-brand"></i>
                                                                                          </div>
                                                                                          <div class="m-timeline-2__item-text m--padding-top-5">
                                                                                                Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
                                                                                                <br>
                                                                                                incididunt ut labore et dolore magna elit enim at minim
                                                                                                <br>
                                                                                                veniam quis nostrud
                                                                                          </div>
                                                                                    </div>
                                                                                    <div class="m-timeline-2__item m--margin-top-30">
                                                                                          <span class="m-timeline-2__item-time">
                                                                                                17:00
                                                                                          </span>
                                                                                          <div class="m-timeline-2__item-cricle">
                                                                                                <i class="fa fa-genderless m--font-danger"></i>
                                                                                          </div>
                                                                                          <div class="m-timeline-2__item-text m--padding-top-5">
                                                                                                Received a new feedback on
                                                                                                <a href="#" class="m-link m-link--brand m--font-bolder">
                                                                                                      FinancePro App
                                                                                                </a>
                                                                                                product.
                                                                                          </div>
                                                                                    </div>
                                                                              </div>
                                                                        </div>
                                                                        <!--End::Timeline 2 -->
                                                                  </div>
                                                            </div>
                                                      </div>
                                                      <!--End::Portlet-->
                                                </div>
                                                <div class="col-xl-6 col-lg-12">
                                                      
                                                </div>
                                          </div>
                                          <!--End::Section-->

                                          <div class="row">
                                                <div class="col-xl-4">
                                                <!--begin:: Widgets/Inbound Bandwidth-->
                                                <div class="m-portlet m-portlet--bordered-semi m-portlet--half-height m-portlet--fit " style="min-height: 300px">
                                                      <div class="m-portlet__head">
                                                            <div class="m-portlet__head-caption">
                                                                  <div class="m-portlet__head-title">
                                                                        <h3 class="m-portlet__head-text">
                                                                              Inbound Bandwidth
                                                                        </h3>
                                                                  </div>
                                                            </div>
                                                            <div class="m-portlet__head-tools">
                                                                  <ul class="m-portlet__nav">
                                                                        <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
                                                                              <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                                                                    Today
                                                                              </a>
                                                                              <div class="m-dropdown__wrapper">
                                                                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 36.5px;"></span>
                                                                                    <div class="m-dropdown__inner">
                                                                                          <div class="m-dropdown__body">
                                                                                                <div class="m-dropdown__content">
                                                                                                      <ul class="m-nav">
                                                                                                            <li class="m-nav__item">
                                                                                                                  <a href="" class="m-nav__link">
                                                                                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                                                                                        <span class="m-nav__link-text">
                                                                                                                              Activity
                                                                                                                        </span>
                                                                                                                  </a>
                                                                                                            </li>
                                                                                                            <li class="m-nav__item">
                                                                                                                  <a href="" class="m-nav__link">
                                                                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                                                        <span class="m-nav__link-text">
                                                                                                                              Messages
                                                                                                                        </span>
                                                                                                                  </a>
                                                                                                            </li>
                                                                                                            <li class="m-nav__item">
                                                                                                                  <a href="" class="m-nav__link">
                                                                                                                        <i class="m-nav__link-icon flaticon-info"></i>
                                                                                                                        <span class="m-nav__link-text">
                                                                                                                              FAQ
                                                                                                                        </span>
                                                                                                                  </a>
                                                                                                            </li>
                                                                                                            <li class="m-nav__item">
                                                                                                                  <a href="" class="m-nav__link">
                                                                                                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                                                                        <span class="m-nav__link-text">
                                                                                                                              Support
                                                                                                                        </span>
                                                                                                                  </a>
                                                                                                            </li>
                                                                                                      </ul>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                              </div>
                                                                        </li>
                                                                  </ul>
                                                            </div>
                                                      </div>
                                                      <div class="m-portlet__body">
                                                            <!--begin::Widget5-->
                                                            <div class="m-widget20">
                                                                  <div class="m-widget20__number m--font-success">
                                                                        670
                                                                  </div>
                                                                  <div class="m-widget20__chart" style="height:160px;">
                                                                        <canvas id="m_chart_bandwidth1"></canvas>
                                                                  </div>
                                                            </div>
                                                            <!--end::Widget 5-->
                                                      </div>
                                                </div>
                                                <!--end:: Widgets/Inbound Bandwidth-->
                                          </div>

							

		@endsection
		