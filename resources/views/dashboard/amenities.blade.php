@extends('../dashboardLayouts.master')
@section('body')

<div class="dashboardProperties">
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}"><i class="metismenu-icon pe-7s-rocket"></i> Dashboard</a></li>
        <li class="breadcrumb-item active">Amenities</li>
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
                    <a data-toggle="modal" data-target=".addAmenity"><i class="fa fa-plus"></i>Amenity</a>
                </li>
                <li>
                    <a href="{{ route('dashboardAmenities') }}">Reload</a>
                </li>
            </ul>
        </div>
    </div>
    <table class="table table-striped table-hover vertical-middle dataTable no-footer dtr-inline" id="botble-real-estate-tables-property-table">
        <thead>
            <tr role="row">
                <th>#</th>
                <th>Image</th>
                <th>Title</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Operations</th>
            </tr> 
        </thead>
        <tbody>
            @php $trClass='odd'; $index=1; @endphp
            @foreach($amenities as $amenity)
                <tr role="row" class="{{$trClass}}">
                    <td>{{$index}}</td>
                    @if($amenity->image!='')
                    <td><img src="{{ URL::to('uploaded/properties/'.$amenity->image) }}" width="30" alt="Image" /></td>
                    @else
                    <td><img src="{{ URL::to('dashboard_assets/assets/images/placeholder.png') }}" width="30" alt="Image" /></td>
                    @endif
                    <td>{{$amenity->title}}</td>
                    <td>@if($amenity->status==1) <span class="status success">Publish</span> @else <span class="status error">Unpublish</span> @endif</td>
                    <td>{{date('F d, Y', strtotime($amenity->created_at))}}</td>
                    <td>
                        <div class="table-actions">
                            <a data-toggle="modal" data-target=".updateAmenity" data-tile='{{$amenity->title}}' data-orginal-image='{{$amenity->image}}' data-image="{{ URL::to('uploaded/properties/'.$amenity->image) }}" data-status={{$amenity->status}} data-id='{{ $amenity->id }}' data-modalClass='updateAmenity' data-placeholder="{{ URL::to('/dashboard_assets/assets/images/placeholder.png') }}" class="btn btn-icon btn-sm btn-primary editPopupOpen">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a action-delete="{{ URL::to('/dashboard/properties/amenities/delete/'.$amenity->id) }}" class="btn btn-icon btn-sm btn-danger deleteDialog deleteQueryOperation">
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