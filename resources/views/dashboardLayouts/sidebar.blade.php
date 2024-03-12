<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div> 
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li>
                    <a href="{{ route('adminDashboard') }}" class="@if(Route::is('adminDashboard')) mm-active @endif">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Dashboard
                    </a>
                </li>

                @if($userRole->reservations==1 || $userRole->booking==1)

                <li class="expand">
                    <a href="javascript:void(0)" class="first @if(Route::is('dashboardreservationRequest') || Route::is('dashboardInvoicePage') || Route::is('dashboardBookingDays'))  mm-active  @endif">
                        <i class="metismenu-icon pe-7s-ticket"></i>
                        Reservations
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul class="@if(Route::is('dashboardreservationRequest') || Route::is('dashboardInvoicePage') || Route::is('dashboardBookingDays')) mm-show @endif mm-collapse">
                        @if($userRole->reservations==1)
                        <li>
                            <a href="{{ route('dashboardreservationRequest') }}" class="@if(Route::is('dashboardreservationRequest')) mm-active @endif"> <i class="metismenu-icon"> </i>Reservations Request</a>
                        </li>
                        @endif
                        @if($userRole->booking==1)
                        <li>
                            <a href="{{ route('dashboardInvoicePage') }}" class="@if(Route::is('dashboardInvoicePage')) mm-active @endif"> <i class="metismenu-icon"> </i>Booking Calender</a>
                        </li>
                        @endif
                        @if($userRole->property_categories==1)
                        <li>
                            <a href="{{ route('dashboardBookingDays') }}" class="@if(Route::is('dashboardBookingDays')) mm-active @endif"> <i class="metismenu-icon"> </i>Disabel Booking Days</a>
                        </li>
                        @endif
                        @if(false)
                            @if($userRole->booking==1)
                            <li>
                                <a href="{{ route('dashboardInvoicePage') }}" class="@if(Route::is('dashboardInvoicePage')) mm-active @endif"> <i class="metismenu-icon"> </i>Invoice </a>
                            </li>
                            @endif
                            @if($userRole->booking==1)
                            <li>
                                <a href="" class=""> <i class="metismenu-icon"> </i>Invoice History </a>
                            </li>
                            @endif
                        @endif
                    </ul>
                </li>

                @endif

                

                @if($userRole->all_properties==1 || $userRole->pending_properties==1 || $userRole->space_types==1 || $userRole->booking_types==1 || $userRole->apartment_features==1 || $userRole->building_amenities==1 || $userRole->services==1 || $userRole->services_fee==1 || $userRole->property_categories==1)

                <li class="expand">
                    <a href="javascript:void(0)" class="first @if(Route::is('dashboardPropertiesEdit') || Route::is('dashboardPropertyCreate') || Route::is('dashboardBookingType') || Route::is('dashboardProperties') || Route::is('pendingProperties') ||  Route::is('dashboardApartmentFeatures') || Route::is('dashboardBuildingAmenities') || Route::is('dashboardServices') || Route::is('dashboardServicesFee') || Route::is('dashboardCategories') || Route::is('dashboardPropertyType')) mm-active @endif">
                        <i class="metismenu-icon pe-7s-home"></i>
                        Properties
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul class="@if(Route::is('dashboardPropertiesEdit') || Route::is('dashboardPropertyCreate') || Route::is('dashboardBookingType') || Route::is('dashboardProperties') || Route::is('pendingProperties') || Route::is('dashboardApartmentFeatures') || Route::is('dashboardBuildingAmenities') || Route::is('dashboardServices') || Route::is('dashboardServicesFee') || Route::is('dashboardCategories') || Route::is('dashboardPropertyType')) mm-show @endif mm-collapse">
                        @if($userRole->all_properties==1)
                        <li>
                            <a href="{{ route('dashboardProperties') }}" class="@if(Route::is('dashboardProperties')) mm-active @endif"> <i class="metismenu-icon"> </i>All Properties </a>
                        </li>
                        @endif
                        @if($userRole->pending_properties==1)
                        <li>
                            <a href="{{ route('pendingProperties') }}" class="@if(Route::is('pendingProperties')) mm-active @endif"> <i class="metismenu-icon"> </i>Pending Properties </a>
                        </li>
                        @endif
                        @if($userRole->space_types==1)
                        <li>
                            <a href="{{ route('dashboardPropertyType') }}" class="@if(Route::is('dashboardPropertyType')) mm-active @endif"> <i class="metismenu-icon"> </i>Space Types </a>
                        </li>
                        @endif
                        @if($userRole->booking_types==1)
                        <li>
                            <a href="{{ route('dashboardBookingType') }}" class="@if(Route::is('dashboardBookingType')) mm-active @endif"> <i class="metismenu-icon"> </i>Booking Types </a>
                        </li>
                        @endif
                        @if($userRole->apartment_features==1)
                        <li>
                            <a href="{{ route('dashboardApartmentFeatures') }}" class="@if(Route::is('dashboardApartmentFeatures')) mm-active @endif"> <i class="metismenu-icon"> </i>Apartment Features</a>
                        </li>
                        @endif
                        @if($userRole->building_amenities==1)
                        <li>
                            <a href="{{ route('dashboardBuildingAmenities') }}" class="@if(Route::is('dashboardBuildingAmenities')) mm-active @endif"> <i class="metismenu-icon"> </i>Building Amenities</a>
                        </li>
                        @endif
                        @if($userRole->services==1)
                        <li>
                            <a href="{{ route('dashboardServices') }}" class="@if(Route::is('dashboardServices')) mm-active @endif"> <i class="metismenu-icon"> </i>Services </a>
                        </li>
                        @endif
                        @if($userRole->services_fee==1)
                        <li>
                            <a href="{{ route('dashboardServicesFee') }}" class="@if(Route::is('dashboardServicesFee')) mm-active @endif"> <i class="metismenu-icon"> </i>Services Fee</a>
                        </li>
                        @endif
                        @if($userRole->property_categories==1)
                        <li>
                            <a href="{{ route('dashboardCategories') }}" class="@if(Route::is('dashboardCategories')) mm-active @endif"> <i class="metismenu-icon"> </i>Property Categories </a>
                        </li>
                        @endif
                    </ul>
                </li>

                @endif

                @if(false && $userRole->favorites==1)
                <li>
                    <a href="{{ route('favoriteProperties') }}" class="@if(Route::is('favoriteProperties'))  mm-active  @endif">
                        <i class="metismenu-icon pe-7s-like"></i>
                        Favorites
                    </a>
                </li>
                @endif

                @if($userRole->reviews==1)
                <li>
                    <a href="{{ route('dashboardReviews') }}" class="@if(Route::is('dashboardReviews'))  mm-active  @endif">
                        <i class="metismenu-icon pe-7s-star"></i>
                        Reviews
                    </a>
                </li>
                @endif

                @if(false && ($userRole->faq==1 || $userRole->faq_categories==1))
                <li class="expand">
                    <a href="javascript:void(0)" class="first @if(Route::is('dashboardFaqsEdit') || Route::is('dashboardfaqsCreate') || Route::is('dashboardFaqs') || Route::is('dashboardFaqsCategories'))  mm-active  @endif">
                        <i class="metismenu-icon pe-7s-chat"></i>
                        FAQ
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul class="@if(Route::is('dashboardFaqsEdit') || Route::is('dashboardfaqsCreate') || Route::is('dashboardFaqs') || Route::is('dashboardFaqsCategories')) mm-show @endif mm-collapse">
                        @if($userRole->faq==1)
                        <li>
                            <a href="{{ route('dashboardFaqs') }}" class="@if(Route::is('dashboardFaqs')) mm-active @endif"> <i class="metismenu-icon"> </i>All FAQ </a>
                        </li>
                        @endif
                        @if($userRole->faq_categories==1)
                        <li>
                            <a href="{{ route('dashboardFaqsCategories') }}" class="@if(Route::is('dashboardFaqsCategories')) mm-active @endif"> <i class="metismenu-icon"> </i>Categories </a>
                        </li>
                        @endif
                    </ul>
                </li>
                @endif

                @if(false && ($userRole->careers==1 || $userRole->careers_categories==1))
                <li class="expand">
                    <a href="javascript:void(0)" class="first @if(Route::is('dashboardCareerCreateEdit') || Route::is('dashboardCareerCreate') || Route::is('dashboardCareer') || Route::is('dashboardCareerCategories'))  mm-active  @endif">
                        <i class="metismenu-icon pe-7s-news-paper"></i>
                        Careers
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul class="@if(Route::is('dashboardCareerCreateEdit') || Route::is('dashboardCareerCreate') || Route::is('dashboardCareer') || Route::is('dashboardCareerCategories')) mm-show @endif mm-collapse">
                        @if($userRole->careers==1)
                        <li>
                            <a href="{{ route('dashboardCareer') }}" class="@if(Route::is('dashboardCareer')) mm-active @endif"> <i class="metismenu-icon"> </i>All Jobs </a>
                        </li>
                        @endif
                        @if($userRole->careers_categories==1)
                        <li>
                            <a href="{{ route('dashboardCareerCategories') }}" class="@if(Route::is('dashboardCareerCategories')) mm-active @endif"> <i class="metismenu-icon"> </i>Categories </a>
                        </li>
                        @endif
                    </ul>
                </li>
                @endif

                @if($userRole->account_users==1 || $userRole->account_roles==1 || $userRole->account_bankdetail==1)
                <li class="expand">
                    <a href="javascript:void(0)" class="first @if(Route::is('dashboardAccountEdit') || Route::is('dashboardAccount') || Route::is('dashboardAccountCreate') || Route::is('dashboardAccountRoles') || Route::is('dashboardaccountRolesEdit') || Route::is('dashboardAccountRolesCreate') || Route::is('dashboardAccountBankDetails'))  mm-active  @endif">
                        <i class="metismenu-icon pe-7s-users"></i>
                        Accounts
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul class="@if(Route::is('dashboardAccountEdit') || Route::is('dashboardAccount') || Route::is('dashboardAccountCreate') || Route::is('dashboardAccountRoles') || Route::is('dashboardaccountRolesEdit') || Route::is('dashboardAccountRolesCreate') || Route::is('dashboardAccountBankDetails')) mm-show @endif mm-collapse">
                        @if($userRole->account_users==1)
                        <li>
                            <a href="{{ URL::to('/dashboard/account/users') }}" class="@if(Request::url()==URL::to('/dashboard/account/users')) mm-active @endif"> <i class="metismenu-icon"> </i>Users </a>
                        </li>
                        @endif
                        @if($userRole->account_roles==1)
                        <li>
                            <a href="{{ URL::to('/dashboard/account/roles') }}" class="@if(Request::url()==URL::to('/dashboard/account/roles')) mm-active @endif"> <i class="metismenu-icon"> </i>Roles </a>
                        </li>
                        @endif
                        @if($userRole->account_bankdetail==1)
                        <li>
                            <a href="{{ route('dashboardAccountBankDetails') }}" class="@if(Request::url()==URL::to('/dashboard/account/bank-details')) mm-active @endif"> <i class="metismenu-icon"> </i>Bank Detail </a>
                        </li>
                        @endif
                    </ul>
                </li>
                @endif
                
                
                

                <!-- <li>
                    <a href="" class="">
                        <i class="metismenu-icon pe-7s-credit"></i>
                        Payments
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul class="mm-collapse">
                        <li>
                            <a href="" class=""> <i class="metismenu-icon"> </i>Payments </a>
                        </li>
                        <li>
                            <a href="" class=""> <i class="metismenu-icon"> </i>Invoices </a>
                        </li>
                    </ul>
                </li> -->

                @if($userRole->reset_password==1 || $userRole->my_account==1)
                <li class="expand">
                    <a href="javascript:void(0)" class="first @if(Route::is('dashboardMyAccountPost') || Route::is('dashboardSettingPost') || Route::is('dashboardCurrencies') || Route::is('dashboardSetting') || Route::is('dashboardMyAccount'))  mm-active  @endif">
                        <i class="metismenu-icon pe-7s-settings"></i>
                        Setting
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul class="@if(Route::is('dashboardSettingPost') || Route::is('dashboardCurrencies') || Route::is('dashboardSetting') || Route::is('dashboardMyAccount')) mm-show @endif mm-collapse">
                        @if($userRole->reset_password==1)
                        <li>
                            <a href="{{ route('dashboardSetting') }}" class="@if(Route::is('dashboardSetting') || Route::is('dashboardSettingPost')) mm-active @endif"> <i class="metismenu-icon"> </i>Reset Password </a>
                        </li>
                        @endif
                        @if($userRole->my_account==1)
                        <li>
                            <a href="{{ route('dashboardMyAccount') }}" class="@if(Route::is('dashboardMyAccountPost') || Route::is('dashboardMyAccount')) mm-active @endif"> <i class="metismenu-icon"> </i>My Account </a>
                        </li>
                        @endif
                        @if(false && $userRole->currencies==1)
                        <li>
                            <a href="{{ route('dashboardCurrencies') }}" class="@if(Route::is('dashboardCurrencies')) mm-active @endif"> <i class="metismenu-icon"> </i>Currencies </a>
                        </li>
                        @endif
                        <!-- <li>
                            <a href="" class=""> <i class="metismenu-icon"> </i>Payment Setting </a>
                        </li> -->
                    </ul>
                </li>
                @endif

                <li><a href="{{ route('logout') }}" class=""><i class="metismenu-icon pe-7s-lock"></i>Logout</a></li>
                
            </ul>
        </div>
    </div>
</div>