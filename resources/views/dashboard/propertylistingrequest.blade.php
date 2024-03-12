@extends('../dashboardLayouts.master')
@section('body')

<div class="dashboardProperties">
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}"><i class="metismenu-icon pe-7s-rocket"></i> Dashboard</a></li>
        <li class="breadcrumb-item active">Property Listing Request</li>
    </ol>

    <div class="table_header">
        <div class="left">
            <form>
                <input type="text" name="search" placeholder="Search..." id="searchText" required>
            </form>
        </div>
        <div class="right">
            <ul>
                <li>
                    <a href="{{ route('dashboardpropertylistingrequest') }}">Reload</a>
                </li>
            </ul>
        </div>
    </div>
    <table class="table table-striped table-hover vertical-middle dataTable no-footer dtr-inline" id="botble-real-estate-tables-property-table">
        <thead>
            <tr role="row">
                <th>#</th>
                <th>Name</th>
                <th>City</th>
                <th>Community</th>
                <th>Address</th>
                <th>Email</th>
                <th>Type</th>
                <th>Bedroom</th>
                <th>Bathroom</th>
                <th>Mobile</th>
                <th>Size</th>
                <th>Park</th>
                <th>Country</th>
                <th>Document</th>
                <th>Message</th>
                <th>Created At</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @php $trClass='odd'; $index=1; @endphp
            @foreach($data as $datas)
                <tr role="row" class="{{$trClass}}">
                    <td>{{$index}}</td>
                    <td>{{$datas->firstname.' '.$datas->lastname}}</td>
                    <td>{{$datas->city}}</td>
                    <td>{{$datas->community}}</td>
                    <td>{{$datas->address}}</td>
                    <td>{{$datas->email}}</td>
                    <td>{{$datas->type}}</td>
                    <td>{{$datas->bedroom}}</td>
                    <td>{{$datas->bathroom}}</td>
                    <td>{{$datas->mobile}}</td>
                    <td>{{$datas->size}}</td>
                    <td>{{$datas->park}}</td>
                    <td>{{$datas->country}}</td>
                    <td>@if($datas->files!='')<a style="color:#fff !important;" href="{{ URL::to('/uploaded/request/'.$datas->files) }}" class="btn btn-primary" download>Download</a>@endif</td>
                    <td>{{$datas->message}}</td>
                    <td>{{date('F d, Y', strtotime($datas->created_at))}}</td>
                    <td>
                        <div class="table-actions">
                            <a action-delete="{{ URL::to('/dashboard/property-listing-request/delete/'.$datas->id) }}" class="btn btn-icon btn-sm btn-danger deleteDialog deleteQueryOperation">
                                <i class="fa fa-trash"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            @php if($trClass=='odd'){ $trClass='even'; }else{ $trClass='odd'; }  $index++; @endphp
            @endforeach
        </tbody>
    </table>


</div>

@endsection