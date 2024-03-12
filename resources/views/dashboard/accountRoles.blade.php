@extends('../dashboardLayouts.master')
@section('body')

<div class="dashboardProperties">
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item">Account</li>
        <li class="breadcrumb-item active">Roles</li>
    </ol>

    <div class="table_header">
        <div class="left">
            <!-- <form>
                <input type="text" name="search" placeholder="Search..." id="searchText" required>
            </form> -->
        </div>
        <div class="right">
            <ul>
                <li>
                    <a href="{{ URL::to('/dashboard/account/roles/create') }}"><i class="fa fa-plus"></i> Role</a>
                </li>
                <li>
                    <a href="{{ URL::to('/dashboard/account/roles') }}">Reload</a>
                </li>
            </ul>
        </div>
    </div>
    <table class="table table-striped table-hover vertical-middle dataTable no-footer dtr-inline" id="botble-real-estate-tables-property-table">
        <thead>
            <tr role="row">
                <th>#</th>
                <th>Role</th>
                <th>Requests</th>
                <th>Blogs</th>
                <th>Properties</th>
                <th>Favorites</th>
                <th>Reviews</th>
                <th>FAQ</th>
                <th>Careers</th>
                <th>Accounts</th>
                <th>Message</th>
                <th>Setting</th>
                <th>Frontend Registration</th>
                <th>Status</th>
                <th>Created User</th>
                <th>Created At</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody class="roles_page">
            @php $trClass='odd'; $index=1; @endphp
            @foreach($roles as $role)
                <tr role="row" class="{{$trClass}}">
                    <td>{{$index}}</td>
                    <td>{{$role->name}}</td>
                    <td>
                        <ul class="roles">
                            <li>@if($role->reservations==1) <i class="fa fa-check"></i> @else <i class="fa fa-times"></i> @endif Reservation Request</li>
                            <li>@if($role->booking==1) <i class="fa fa-check"></i> @else <i class="fa fa-times"></i> @endif Booking</li>
                        </ul>
                    </td>
                    <td>
                        <ul class="roles">
                            <li>@if($role->blogs==1) <i class="fa fa-check"></i> @else <i class="fa fa-times"></i> @endif Blogs</li>
                            <li>@if($role->blog_categories==1) <i class="fa fa-check"></i> @else <i class="fa fa-times"></i> @endif Blog Categories</li>
                        </ul>
                    </td>
                    <td>
                        <ul class="roles">
                            <li>@if($role->all_properties==1) <i class="fa fa-check"></i> @else <i class="fa fa-times"></i> @endif All Properties</li>
                            <li>@if($role->pending_properties==1) <i class="fa fa-check"></i> @else <i class="fa fa-times"></i> @endif Pending Properties</li>
                            <li>@if($role->space_types==1) <i class="fa fa-check"></i> @else <i class="fa fa-times"></i> @endif Space Types</li>
                            <li>@if($role->booking_types==1) <i class="fa fa-check"></i> @else <i class="fa fa-times"></i> @endif Booking Types</li>
                            <li>@if($role->apartment_features==1) <i class="fa fa-check"></i> @else <i class="fa fa-times"></i> @endif Apartment Features</li>
                            <li>@if($role->building_amenities==1) <i class="fa fa-check"></i> @else <i class="fa fa-times"></i> @endif Building Amenities</li>
                            <li>@if($role->services==1) <i class="fa fa-check"></i> @else <i class="fa fa-times"></i> @endif Services</li>
                            <li>@if($role->services_fee==1) <i class="fa fa-check"></i> @else <i class="fa fa-times"></i> @endif Services Fee</li>
                            <li>@if($role->property_categories==1) <i class="fa fa-check"></i> @else <i class="fa fa-times"></i> @endif Categories</li>
                        </ul>
                    </td>
                    <td>
                        <ul class="roles">
                            <li>@if($role->favorites==1) <i class="fa fa-check"></i> @else <i class="fa fa-times"></i> @endif Favorites</li>
                        </ul>
                    </td>
                    <td>
                        <ul class="roles">
                            <li>@if($role->reviews==1) <i class="fa fa-check"></i> @else <i class="fa fa-times"></i> @endif Reviews</li>
                        </ul>
                    </td>
                    <td>
                        <ul class="roles">
                            <li>@if($role->faq==1) <i class="fa fa-check"></i> @else <i class="fa fa-times"></i> @endif All FAQs</li>
                            <li>@if($role->faq_categories==1) <i class="fa fa-check"></i> @else <i class="fa fa-times"></i> @endif Categories</li>
                        </ul>
                    </td>
                    <td>
                        <ul class="roles">
                            <li>@if($role->careers==1) <i class="fa fa-check"></i> @else <i class="fa fa-times"></i> @endif Careers</li>
                            <li>@if($role->careers_categories==1) <i class="fa fa-check"></i> @else <i class="fa fa-times"></i> @endif Categories</li>
                        </ul>
                    </td>
                    <td>
                        <ul class="roles">
                            <li>@if($role->account_users==1) <i class="fa fa-check"></i> @else <i class="fa fa-times"></i> @endif Users</li>
                            <li>@if($role->account_roles==1) <i class="fa fa-check"></i> @else <i class="fa fa-times"></i> @endif Roles</li>
                            <li>@if($role->account_bankdetail==1) <i class="fa fa-check"></i> @else <i class="fa fa-times"></i> @endif Bank Details</li>
                            <li>@if($role->account_invoice==1) <i class="fa fa-check"></i> @else <i class="fa fa-times"></i> @endif Invoices</li>
                            <li>@if($role->account_invoice_history==1) <i class="fa fa-check"></i> @else <i class="fa fa-times"></i> @endif Invoices History</li>
                        </ul>
                    </td>
                    <td>
                        <ul class="roles">
                            <li>@if($role->messages==1) <i class="fa fa-check"></i> @else <i class="fa fa-times"></i> @endif Messages</li>
                        </ul>
                    </td>
                    <td>
                        <ul class="roles">
                            <li>@if($role->reset_password==1) <i class="fa fa-check"></i> @else <i class="fa fa-times"></i> @endif Reset Password</li>
                            <li>@if($role->my_account==1) <i class="fa fa-check"></i> @else <i class="fa fa-times"></i> @endif My Account</li>
                            <li>@if($role->currencies==1) <i class="fa fa-check"></i> @else <i class="fa fa-times"></i> @endif Currencies</li>
                            <li>@if($role->payment_setting==1) <i class="fa fa-check"></i> @else <i class="fa fa-times"></i> @endif Payment Setting</li>
                        </ul>
                    </td>
                    <td>
                        <ul class="roles">
                            <li>@if($role->showregistration==1) <i class="fa fa-check"></i> @else <i class="fa fa-times"></i> @endif Yes</li>
                        </ul>
                    </td>
                    <td>
                        @if($role->status==1)
                            <span class="badge badge-success">Active</span>
                        @else
                            <span class="badge badge-secondary">Inactive</span>
                        @endif
                    </td>
                    @foreach($users as $user)
                        @if($role->userid==$user->id)
                    <td>{{$user->firstname.' '.$user->lastname}}</td>
                        @endif
                    @endforeach
                    <td>{{date('F d, Y H:i', strtotime($role->created_at))}}</td>
                    <td>
                        @if($role->id!=1)
                        <div class="table-actions">
                            <a href="{{ URL::to('/dashboard/account/roles/edit/'.$role->id) }}" class="btn btn-icon btn-sm btn-primary">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a action-delete="{{ URL::to('/dashboard/account/roles/delete/'.$role->id) }}" class="btn btn-icon btn-sm btn-danger deleteDialog deleteQueryOperation">
                                <i class="fa fa-trash"></i>
                            </a>
                        </div>
                        @endif
                    </td>
                </tr>
            @php if($trClass=='odd'){ $trClass='even'; }else{ $trClass='odd'; }  $index++; @endphp
            @endforeach
        </tbody>
    </table>


</div>

@endsection