@extends('../dashboardLayouts.master')
@section('body')

<div class="propertyCreate dashboardProperties">
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}"><i class="metismenu-icon pe-7s-rocket"></i> Dashboard</a></li>
        <li class="breadcrumb-item">Account</li>
        <li class="breadcrumb-item">Roles</li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>

    <form method="POST" class="faq formvalidationappeared" action="{{ route('dashboardAccountRolesEditPost') }}" id="botble-real-estate-forms-property-form">
        @csrf
        <input type="hidden" name="id" value="{{$role->id}}">
        <div class="row">
            <div class="col-md-9">
                <div class="main-form">
                    <div class="form-body">
                        
                        <div class="form-group mb-3 title_div">
                            <label for="firstname" class="control-label required" aria-required="true">Role</label>
                            <input class="form-control" placeholder="Role" name="role" value="{{$role->name}}" type="text" id="role" required />
                        </div>

                    </div>
                </div>

                <div class="main-form">
                    <div class="form-body">

                        <div class="form-group mb-3 title_div">
                            <label for="firstname" class="control-label" aria-required="true">Requests</label>
                            <ul>
                                <li><input type="checkbox" @if($role->reservations==1) checked @endif name="reservations" value="1" /> Reservation Request</li>
                                <li><input type="checkbox" @if($role->booking==1) checked @endif name="booking" value="1" /> Booking</li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="main-form">
                    <div class="form-body">

                        <div class="form-group mb-3 title_div">
                            <label for="firstname" class="control-label" aria-required="true">Blogs</label>
                            <ul>
                                <li><input type="checkbox" @if($role->blogs==1) checked @endif name="blogs" value="1" /> All Blogs</li>
                                <li><input type="checkbox" @if($role->blog_categories==1) checked @endif name="blog_categories" value="1" /> Categories</li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="main-form">
                    <div class="form-body">

                        <div class="form-group mb-3 title_div">
                            <label for="firstname" class="control-label" aria-required="true">Properties</label>
                            <ul>
                                <li><input type="checkbox" @if($role->all_properties==1) checked @endif name="all_properties" value="1" /> All Properties</li>
                                <li><input type="checkbox" @if($role->pending_properties==1) checked @endif name="pending_properties" value="1" /> Pending Properties</li>
                                <li><input type="checkbox" @if($role->space_types==1) checked @endif name="space_types" value="1" /> Space Types</li>
                                <li><input type="checkbox" @if($role->booking_types==1) checked @endif name="booking_types" value="1" /> Booking Types</li>
                                <li><input type="checkbox" @if($role->apartment_features==1) checked @endif name="apartment_features" value="1" /> Appartment Features</li>
                                <li><input type="checkbox" @if($role->building_amenities==1) checked @endif name="building_amenities" value="1" /> Building Amenities</li>
                                <li><input type="checkbox" @if($role->services==1) checked @endif name="services" value="1" /> Services</li>
                                <li><input type="checkbox" @if($role->services_fee==1) checked @endif name="services_fee" value="1" /> Services Fee</li>
                                <li><input type="checkbox" @if($role->property_categories==1) checked @endif name="property_categories" value="1" /> Categories</li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="main-form">
                    <div class="form-body">

                        <div class="form-group mb-3 title_div">
                            <label for="firstname" class="control-label" aria-required="true">Favorites</label>
                            <ul>
                                <li><input type="checkbox" name="favorites" @if($role->favorites==1) checked @endif value="1" /> Favorites</li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="main-form">
                    <div class="form-body">

                        <div class="form-group mb-3 title_div">
                            <label for="firstname" class="control-label" aria-required="true">Reviews</label>
                            <ul>
                                <li><input type="checkbox" name="reviews" @if($role->reviews==1) checked @endif value="1" /> Reviews</li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="main-form">
                    <div class="form-body">

                        <div class="form-group mb-3 title_div">
                            <label for="firstname" class="control-label" aria-required="true">FAQ</label>
                            <ul>
                                <li><input type="checkbox" @if($role->faq==1) checked @endif name="faq" value="1" /> All FAQs</li>
                                <li><input type="checkbox" @if($role->faq_categories==1) checked @endif name="faq_categories" value="1" /> Categories</li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="main-form">
                    <div class="form-body">

                        <div class="form-group mb-3 title_div">
                            <label for="firstname" class="control-label" aria-required="true">Careers</label>
                            <ul>
                                <li><input type="checkbox" @if($role->careers==1) checked @endif name="careers" value="1" /> All Jobs</li>
                                <li><input type="checkbox" @if($role->careers_categories==1) checked @endif name="careers_categories" value="1" /> Categories</li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="main-form">
                    <div class="form-body">

                        <div class="form-group mb-3 title_div">
                            <label for="firstname" class="control-label" aria-required="true">Accounts</label>
                            <ul>
                                <li><input type="checkbox" @if($role->account_users==1) checked @endif name="account_users" value="1" /> Users</li>
                                <li><input type="checkbox" @if($role->account_roles==1) checked @endif name="account_roles" value="1" /> Roles</li>
                                <li><input type="checkbox" @if($role->account_bankdetail==1) checked @endif name="account_bankdetail" value="1" /> Bank Detail</li>
                                <li><input type="checkbox" @if($role->account_invoice==1) checked @endif name="account_invoice" value="1" /> New Invoices</li>
                                <li><input type="checkbox" @if($role->account_invoice_history==1) checked @endif name="account_invoice_history" value="1" /> Invoices History</li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="main-form">
                    <div class="form-body">

                        <div class="form-group mb-3 title_div">
                            <label for="firstname" class="control-label" aria-required="true">Message</label>
                            <ul>
                                <li><input type="checkbox" @if($role->messages==1) checked @endif name="messages" value="1" /> Messages</li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="main-form">
                    <div class="form-body">

                        <div class="form-group mb-3 title_div">
                            <label for="firstname" class="control-label" aria-required="true">Setting</label>
                            <ul>
                                <li><input type="checkbox" @if($role->reset_password==1) checked @endif name="reset_password" value="1" /> Reset Password</li>
                                <li><input type="checkbox" @if($role->my_account==1) checked @endif name="my_account" value="1" /> My Account</li>
                                <li><input type="checkbox" @if($role->currencies==1) checked @endif name="currencies" value="1" /> Currencies</li>
                                <li><input type="checkbox" @if($role->payment_setting==1) checked @endif name="payment_setting" value="1" /> Payment Setting</li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="main-form">
                    <div class="form-body">

                        <div class="form-group mb-3 title_div">
                            <label for="firstname" class="control-label" aria-required="true">Enable Role for Frontend Registration</label>
                            <ul>
                                <li><input type="checkbox" name="showregistration" @if($role->showregistration==1) checked @endif value="1" /> Yes</li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="main-form">
                    <div class="form-body">

                        <div class="form-group mb-3 title_div">
                            <label for="firstname" class="control-label" aria-required="true">Status</label>
                            <ul>
                                <li><input type="checkbox" @if($role->status==1) checked @endif name="status" value="1" /> Active</li>
                            </ul>
                        </div>
                  
                    </div>
                </div>

            </div>
            <div class="col-md-3 right-sidebar">
                
                <div class="widget meta-boxes form-actions form-actions-default action-horizontal">
                    <div class="widget-title">
                        <h4>
                            <span>Action</span>
                        </h4>
                    </div>
                    <div class="widget-body">
                        <div class="btn-set">
                            <button type="submit" name="submit" class="btn btn-info"><i class="fa fa-save"></i> Update</button>
                        </div>
                    </div>
                </div>
             
            </div>
        </div>
    </form>

</div>

@endsection