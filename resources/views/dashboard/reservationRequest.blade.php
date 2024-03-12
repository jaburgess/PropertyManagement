@extends('../dashboardLayouts.master')
@section('body')

<div class="dashboardProperties">
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}"><i class="metismenu-icon pe-7s-rocket"></i> Dashboard</a></li>
        <li class="breadcrumb-item active">Reservation Request</li>
    </ol>

    <div class="table_header">
        <div class="left">
           <!--  <form>
                <input type="text" name="search" placeholder="Search..." id="searchText" required>
            </form> -->
        </div>
        <div class="right">
            <ul>
                <li>
                    <a href="{{ route('dashboardreservationRequest') }}">Reload</a>
                </li>
            </ul>
        </div>
    </div>
    <table class="table table-striped table-hover vertical-middle dataTable no-footer dtr-inline" id="botble-real-estate-tables-property-table">
        <thead>
            <tr role="row">
                <th>#</th>
                <th>Reservation Dates</th>
                <th># of nights/months</th>
                <th>Property Detail</th>
                <th>Total Price</th>
                <th>User Detail</th>
                <th>Date of Request</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @php $trClass='odd'; $index=1; @endphp
            @foreach($data as $datas)
            @php
                $property = \Illuminate\Support\Facades\DB::table('properties')->where('id',$datas->propertyID)->first();
                $account = \Illuminate\Support\Facades\DB::table('account')->where('id',$datas->userID)->first();
            @endphp
            @if($datas->userID==session('id') || $property->user_id==session('id') || session('id')==1)
                <tr role="row" class="{{$trClass}}">
                    <td>{{$index}}</td>
                    <td>{{date('m-d-y', strtotime(explode("-",$datas->checkin)[1].'-'.explode("-",$datas->checkin)[0].'-'.explode("-",$datas->checkin)[2]))}} to {{date('m-d-y', strtotime(explode("-",$datas->checkout)[1].'-'.explode("-",$datas->checkout)[0].'-'.explode("-",$datas->checkout)[2]))}}</td>
                    <td>{{$datas->bookingNumber.' '.$datas->bookingType}}</td>
                    <td><div class="table-actions"><a data-toggle="modal" data-target=".propertyDetail{{$property->id}}"  style="color: #000 !important;cursor: pointer;">{{$property->title}}</a></div></td>
                    <td>
                        @if($datas->bookingName!='')Name: {{$datas->bookingName}}<br>@endif
                        @if($datas->bookingEmail!='')Email: {{$datas->bookingEmail}}<br>@endif
                        @if($datas->bookingPhone!='')Phone: {{$datas->bookingPhone}}<br>@endif
                        @if($datas->bookingDescription!='')Description: {{$datas->bookingDescription}}@endif
                    </td>
                    <td><div class="table-actions"><a style="color: #000 !important;cursor: pointer;" data-toggle="modal" data-target=".bookingDetail{{$datas->id}}">{{'$'.$datas->totalprice}}</a></div></td>
                    <td>{{date('M d, Y', strtotime($datas->created_at))}}</td>
                    <td>
                        <div class="table-actions">
                            @if($datas->status=='pending' && ($property->user_id==session('id') || session('id')==1))
                                <a href="{{ URL::to('/dashboard/reservation-invoice/'.$datas->id) }}" class="btn btn-icon btn-sm btn-success" style="font-weight: 500;">
                                    <i class="fa fa-credit-card" aria-hidden="true" style="color:#000;"></i> Approve
                                </a>
                            @endif

                            @if(session('id')==1)
                            <a action-delete="{{ URL::to('/dashboard/reservation-request/delete/'.$datas->id) }}" class="btn btn-icon btn-sm btn-danger deleteDialog deleteQueryOperation">
                                <i class="fa fa-trash"></i> Reject
                            </a>
                            @endif
                        </div>
                    </td>
                </tr>
            @php if($trClass=='odd'){ $trClass='even'; }else{ $trClass='odd'; }  $index++; @endphp
            @endif
            @endforeach
        </tbody>
    </table>


</div>

@endsection
@php
    $properties = \Illuminate\Support\Facades\DB::table('properties')->get();
@endphp
@foreach($properties as $property)
<div class="modal fade modalshg propertyDetail{{$property->id}}" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="display:none;">
    <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Property Detail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @php
                        $currency = \Illuminate\Support\Facades\DB::table('currency')->where('id',$property->currency)->first();
                        $roomtype = \Illuminate\Support\Facades\DB::table('properties_roomtype')->where('id',$property->bookingtype)->first();
                        $termStay='';
                        if($property->minimumbooking=='nights' || $property->minimumbooking=='days'){
                           $termStay='Short Term Stay'; 
                        }
                        if($property->minimumbooking=='months'){
                           $termStay='Long Term Stay'; 
                        }
                        $booking='day';
                        if($property->minimumbooking=='nights'){
                           $booking='night'; 
                        }
                        if($property->minimumbooking=='months'){
                           $booking='month'; 
                        }
                        
                        $reservations = \Illuminate\Support\Facades\DB::table('reservation')->where('propertyID',$property->id)->whereIn('status', ['pending','approved'])->get();
                        $bookingAvailibilityCheck = array();
                        foreach($reservations as $reservation){
                            $datesBook='';
                            if($reservation->checkin!=''){
                                $datesBook=$reservation->checkin;
                            }
                            if($reservation->checkout!=''){
                                $datesBook.=' | '.$reservation->checkout;
                            }
                            array_push($bookingAvailibilityCheck, $datesBook);
                        }
                        
                        $currentDate = date('Y-m-d');
                        
                        for($i=0;$i<count($bookingAvailibilityCheck);$i++){        
                            if($bookingAvailibilityCheck[$i]!=''){
                                $dates=explode(' | ',$bookingAvailibilityCheck[$i]);
                                $currentDate=date('Y-m-d', strtotime($currentDate));
                                $contractDateBegin = date('Y-m-d', strtotime($dates[0]));
                                $contractDateEnd = date('Y-m-d', strtotime($dates[1]));
                                if(($currentDate >= $contractDateBegin) && ($currentDate <= $contractDateEnd)){
                                    $currentDate = date('Y-m-d', strtotime($dates[1]. ' +1 day'));
                                }
                            }
                        }
                        $availableFrom=$currentDate;

                    @endphp
                    <div class="single-listing">
                        <a class="single-list-head" href="{{ URL::to('/property/'.$property->slug) }}" target="_blank">
                            @if($property->feature==1)
                                <div class="featured-text">featured</div>
                            @endif
                            <img src="{{ URL::to('uploaded/properties/'.$property->cover) }}" class="img-fluid">
                            <div class="list-price">From {{$currency->name}} <span>{{$property->price}} /{{$booking}}</span></div>
                        </a>
                        <div class="single-list-text">
                            <a href="{{ URL::to('/property/'.$property->slug) }}" target="_blank">
                                <h3>{{$property->title}}</h3>
                                <div class="single-addons">
                                    <ul>
                                        <li>{{$termStay}} / {{$roomtype->title}}</li>
                                        <li>{{$property->bedrooms}} Bedroom, {{$property->number_bathroom}} Bath and {{$property->size}} sq ft</li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
     </div>
</div>
@endforeach
@foreach($data as $datas)
<div class="modal fade modalshg bookingDetail{{$datas->id}}" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="display:none;">
    <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Reservation Detail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="show_cost_form" id="show_cost_form" style="">
                        <div class="cost_row firstCustom">
                            <h3>Reservation Dates</h3>
                            <label class="left bookingdates">{{$datas->checkin}} to {{$datas->checkout}} :</label>
                            <label class="right bookingcounts">{{$datas->bookingNumber}} {{$datas->bookingType}}</label>
                            <br>
                            <h3>Guests</h3>
                            <label class="left bookingdates">{{$datas->adults.' Adults, '.$datas->children.' Children, '.$datas->infants.' Infants'}}</label>
                        </div>
                        <div class="cost_row secondCustom">
                            <div class="cost_explanation">
                            </div>
                            <div class="cost_value">
                                Daily/Monthly<br>Rate
                            </div>
                            <div class="cost_overall">
                                Total<br>Amount
                            </div>
                        </div>
                        <div class="cost_row 333">
                            <div class="cost_explanation">Rent Price</div>
                            <div class="cost_value">$ <label class="propertyOriginalPrice">{{number_format((float)$datas->rentprice/(int)$datas->bookingNumber, 2, '.', '')}}</label></div>
                            <div class="cost_overall cost_value 3332">$ <label class="propertyTotalPrice">{{number_format($datas->rentprice, 2, '.', '')}}</label></div>
                        </div>
                        @php
                            $totalGuests=(int)$datas->adults+(int)$datas->children+(int)$datas->infants;
                            $property = \Illuminate\Support\Facades\DB::table('properties')->where('id',$datas->propertyID)->first();
                        @endphp
                        @if($property!=null && $property->priceguest!='' && (int)$property->priceguest>0)
                        <div class="cost_row">
                            <div class="cost_explanation">Guest Fee</div>
                            <div class="cost_value cleaning_fee_value">$ {{number_format((float)$property->priceguest, 2, '.', '')}}</div>
                            <div class="cost_overall cleaning_fee_value">$ <label class="propertyGuestTotalPrice">@if($totalGuests>0){{number_format((int)$property->priceguest*(int)$datas->bookingNumber, 2, '.', '')}}@else{{'0'}}@endif</label></div>
                        </div>
                        @endif
                        @if($datas->serviceFee!='')
                            @php
                                $services=explode(",",$datas->serviceFee);
                            @endphp
                            @for($i=0;$i<count($services);$i++)
                                @if($services[$i]!='')
                                    @php 
                                        $service=explode(" - ",$services[$i]);
                                        $serviceAmount=explode("$",$service[1])[1];
                                    @endphp
                                    @if(count($service)>0)
                                    <div class="cost_row">
                                        <div class="cost_explanation">{{$service[0]}}</div>
                                        <div class="cost_value cleaning_fee_value">$ {{number_format((float)$serviceAmount, 2, '.', '')}}</div>
                                        @if($service[0]=='Agency Fee')
                                            @php
                                                $serviceAmount=(float)$serviceAmount*(int)$datas->bookingNumber;
                                            @endphp
                                            <div class="cost_overall cleaning_fee_value">$ <label class="propertyServiceFeeTotalPrice fee0">{{number_format((float)$serviceAmount, 2, '.', '')}}</label></div>
                                        @else
                                            @if($service[0]=='Pet Fee')
                                                <div class="cost_overall cleaning_fee_value">$ 0</label></div>
                                            @else
                                                <div class="cost_overall cleaning_fee_value">$ <label class="propertyServiceFeeTotalPrice fee0">{{number_format((float)$serviceAmount*(int)$datas->bookingNumber, 2, '.', '')}}</label></div>
                                            @endif
                                        @endif          
                                    </div>
                                    @endif
                                @endif
                            @endfor
                        @endif
                        @if($datas->securitydeposit)
                        <div class="cost_row">
                            <div class="cost_explanation">Security Deposit Fee</div>
                            <div class="cost_value cleaning_fee_value"></div>
                            <div class="cost_overall cleaning_fee_value">$ <label class="propertySecurityDepositTotalPrice">{{number_format($datas->securitydeposit, 2, '.', '')}}</label></div>
                        </div>
                        @endif
                        <div class="cost_row" id="total_cost_row">
                            <div class="cost_explanation"><strong>Total amount payable</strong></div>
                            <div class="cost_value"></div>
                            <div class="cost_overall">$ <label class="totalBookingPropertyPrice">{{number_format($datas->totalprice, 2, '.', '')}}</label></div>
                        </div>
                      </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
     </div>
</div>
@endforeach
@php
    $accounts = \Illuminate\Support\Facades\DB::table('account')->get();
@endphp
@foreach($accounts as $account)
<div class="modal fade modalshg guestDetail{{$account->id}}" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="display:none;">
    <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">User/Guest Detail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="account_detail">
                        <div class="left">
                            @if($account->firstname!='' && $account->lastname!='')
                                <div><label>Name:</label> <span>{{$account->firstname.' '.$account->lastname}}</span></div>
                            @endif
                            @if($account->company!='')
                                <div><label>Company:</label> <span>{{$account->company}}</span></div>
                            @endif
                            @if($account->phone!='')
                                <div><label>Phone Number:</label> <span>{{$account->phone}}</span></div>
                            @endif
                            @if($account->dob!='')
                                <div><label>Date of Birth:</label> <span>{{$account->dob}}</span></div>
                            @endif
                            @if($account->email!='')
                                <div><label>Email:</label> <span>{{$account->email}}</span></div>
                            @endif
                            @php
                                $role = \Illuminate\Support\Facades\DB::table('roles')->where('id',$account->role)->first();
                            @endphp
                            @if($role!=null && $role->name!='')
                                <div><label>Role:</label> <span>{{$role->name}}</span></div>
                            @endif
                            @if($account->userid!='')
                                <div><label>ID:</label> <span>{{$account->userid}}</span></div>
                            @endif
                            @if($account->address!='')
                                <div><label>Address:</label> <span>{{$account->address}} @if($account->suite!=''){{$account->suite}}@endif @if($account->city!=''),{{$account->city}}@endif @if($account->state!=''){{$account->state}}@endif @if($account->postcode!=''){{$account->postcode}}@endif @if($account->country!=''),{{$account->country}}@endif</span></div>
                            @endif
                        </div>
                        <div class="right"><label>Image:</label>
                            @if($account->image!='')
                                <div id="accountCreateImagePreview" style="background-image: url({{ URL::to('uploaded/profiles/'.$account->image) }});">
                                </div>
                            @else
                                <div id="accountCreateImagePreview" style="background-image: url({{ URL::to('dashboard_assets/assets/images/placeholder.png') }});">
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
     </div>
</div>
@endforeach