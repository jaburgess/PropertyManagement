@extends('../dashboardLayouts.master')
@section('body')

<div class="dashboardProperties">
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}"><i class="metismenu-icon pe-7s-rocket"></i> Dashboard</a></li>
        <li class="breadcrumb-item active">Favorites</li>
    </ol>

    <div class="table_header">
        <div class="left">
        </div>
        <div class="right">
            <ul>
                <li>
                    <a href="{{ route('favoriteProperties') }}">Reload</a>
                </li>
            </ul>
        </div>
    </div>
    <table class="table table-striped table-hover vertical-middle dataTable no-footer dtr-inline" id="botble-real-estate-tables-property-table">
        <thead>
            <tr role="row">
                <th>#</th>
                <th>Property</th>
                <th>Favorites At</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
           @php $trClass='odd'; $index=1; @endphp
            @foreach($favourites as $favourite)
                @php
                    $property = \Illuminate\Support\Facades\DB::table('properties')->where('id',$favourite->typeID)->first();
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
                @endphp
                @if($property!=null)
                    <tr role="row" class="{{$trClass}}">
                        <td>{{$index}}</td>
                        <td>
                            <div class="favourite_property">
                                <img src="{{ URL::to('uploaded/properties/'.$property->cover) }}" class="img-fluid">
                                <div>
                                    <h3>{{$property->title}}</h3>
                                    <ul>
                                        <li>{{$termStay}} / {{$roomtype->title}}</li>
                                        <li>{{$property->bedrooms}} Bedroom, {{$property->number_bathroom}} Bath and {{$property->size}} sq ft</li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                        <td>{{date('F d, Y', strtotime($favourite->created_at))}}</td>
                        <td>
                            <div class="table-actions">
                                <a action-delete="{{ URL::to('/dashboard/favorites/delete/'.$favourite->id) }}" class="btn btn-icon btn-sm btn-danger deleteDialog deleteQueryOperation">
                                    <i class="fa fa-trash"></i> Remove from favorite
                                </a>
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