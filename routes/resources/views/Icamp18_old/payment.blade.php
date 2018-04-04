@extends('Icamp18.layouts.dashboard')

@section('title', 'Dashboard | Icamp\'18')

@section('content')

<!-- begin::Body -->
                        <div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver  m-container m-container--responsive m-container--xxl m-page__container">
                             
                              <div id="m_aside_left" class="m-grid__item m-aside-left ">
                                    <!-- BEGIN: Aside Menu -->
      <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-light m-aside-menu--submenu-skin-light " data-menu-vertical="true" data-menu-scrollable="false" data-menu-dropdown-timeout="500"  
            >
                                          <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
                                                <li class="m-menu__section">
                                                      <h4 class="m-menu__section-text">
                                                            Departments
                                                      </h4>
                                                      <i class="m-menu__section-icon flaticon-more-v3"></i>
                                                </li>
                                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                                                      <a  href="#" class="m-menu__link m-menu__toggle">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                  <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                  Resources
                                                            </span>
                                                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                      </a>
                                                      <div class="m-menu__submenu ">
                                                            <span class="m-menu__arrow"></span>
                                                            <ul class="m-menu__subnav">
                                                                  <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                                                                        <span class="m-menu__link">
                                                                              <span class="m-menu__link-text">
                                                                                    Resources
                                                                              </span>
                                                                        </span>
                                                                  </li>
                                                                  <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                                                        <a  href="inner.html" class="m-menu__link ">
                                                                              <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                              </i>
                                                                              <span class="m-menu__link-text">
                                                                                    Timesheet
                                                                              </span>
                                                                        </a>
                                                                  </li>
                                                                  <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                                                        <a  href="inner.html" class="m-menu__link ">
                                                                              <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                              </i>
                                                                              <span class="m-menu__link-text">
                                                                                    Payroll
                                                                              </span>
                                                                        </a>
                                                                  </li>
                                                                  <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                                                        <a  href="inner.html" class="m-menu__link ">
                                                                              <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                                    <span></span>
                                                                              </i>
                                                                              <span class="m-menu__link-text">
                                                                                    Contacts
                                                                              </span>
                                                                        </a>
                                                                  </li>
                                                            </ul>
                                                      </div>
                                                </li>
                                                <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                                      <a  href="inner.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                  <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                  Finance
                                                            </span>
                                                      </a>
                                                </li>
                                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover" data-redirect="true">
                                                      <a  href="#" class="m-menu__link m-menu__toggle">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                  <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                  Support
                                                            </span>
                                                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                      </a>
                                                      <div class="m-menu__submenu ">
                                                            <span class="m-menu__arrow"></span>
                                                            <ul class="m-menu__subnav">
                                                                  <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"  data-redirect="true">
                                                                        <span class="m-menu__link">
                                                                              <span class="m-menu__link-text">
                                                                                    Support
                                                                              </span>
                                                                        </span>
                                                                  </li>
                                                                  <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                                                        <a  href="inner.html" class="m-menu__link ">
                                                                              <span class="m-menu__link-text">
                                                                                    Reports
                                                                              </span>
                                                                        </a>
                                                                  </li>
                                                                  <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover" data-redirect="true">
                                                                        <a  href="#" class="m-menu__link m-menu__toggle">
                                                                              <span class="m-menu__link-text">
                                                                                    Cases
                                                                              </span>
                                                                              <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                                        </a>
                                                                        <div class="m-menu__submenu ">
                                                                              <span class="m-menu__arrow"></span>
                                                                              <ul class="m-menu__subnav">
                                                                                    <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                                                                          <a  href="inner.html" class="m-menu__link ">
                                                                                                <span class="m-menu__link-text">
                                                                                                      Pending
                                                                                                </span>
                                                                                          </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                                                                          <a  href="inner.html" class="m-menu__link ">
                                                                                                <span class="m-menu__link-text">
                                                                                                      Urgent
                                                                                                </span>
                                                                                          </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                                                                          <a  href="inner.html" class="m-menu__link ">
                                                                                                <span class="m-menu__link-text">
                                                                                                      Done
                                                                                                </span>
                                                                                          </a>
                                                                                    </li>
                                                                                    <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                                                                          <a  href="inner.html" class="m-menu__link ">
                                                                                                <span class="m-menu__link-text">
                                                                                                      Archive
                                                                                                </span>
                                                                                          </a>
                                                                                    </li>
                                                                              </ul>
                                                                        </div>
                                                                  </li>
                                                                  <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                                                        <a  href="inner.html" class="m-menu__link ">
                                                                              <span class="m-menu__link-text">
                                                                                    Clients
                                                                              </span>
                                                                        </a>
                                                                  </li>
                                                                  <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                                                        <a  href="inner.html" class="m-menu__link ">
                                                                              <span class="m-menu__link-text">
                                                                                    Audit
                                                                              </span>
                                                                        </a>
                                                                  </li>
                                                            </ul>
                                                      </div>
                                                </li>
                                                <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                                      <a  href="inner.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                  <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                  Administration
                                                            </span>
                                                      </a>
                                                </li>
                                                <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                                      <a  href="inner.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                  <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                  Management
                                                            </span>
                                                      </a>
                                                </li>
                                                <li class="m-menu__section">
                                                      <h4 class="m-menu__section-text">
                                                            Reports
                                                      </h4>
                                                      <i class="m-menu__section-icon flaticon-more-v3"></i>
                                                </li>
                                                <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                                      <a  href="inner.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                  <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                  Accounting
                                                            </span>
                                                      </a>
                                                </li>
                                                <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                                      <a  href="inner.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                  <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                  Products
                                                            </span>
                                                      </a>
                                                </li>
                                                <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                                      <a  href="inner.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                  <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                  Sales
                                                            </span>
                                                      </a>
                                                </li>
                                                <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                                      <a  href="inner.html" class="m-menu__link ">
                                                            <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                                                  <span></span>
                                                            </i>
                                                            <span class="m-menu__link-text">
                                                                  IPO
                                                            </span>
                                                      </a>
                                                </li>
                                          </ul>
                                    </div>
                                    <!-- END: Aside Menu -->
                              </div>
                              <!-- END: Left Aside -->
                              <div class="m-grid__item m-grid__item--fluid m-wrapper">
                                    <!-- BEGIN: Subheader -->
                                    <div class="m-subheader ">
                                          <div class="d-flex align-items-center">
                                                <div class="mr-auto">
                                                      <h3 class="m-subheader__title ">
                                                            Payment and Transactions
                                                      </h3>
                                                </div>
                                                <div>
                                                      <a href="pay/icamp_reg"><h3>Pay</h3></a>
                                                </div>
                                          </div>
                                    </div>
                                    <!-- END: Subheader -->
                                    <div class="m-content">
                                          
                                          
                                    </div>
                              </div>
                        </div>
                  <!-- end::Body --> 

@endsection
