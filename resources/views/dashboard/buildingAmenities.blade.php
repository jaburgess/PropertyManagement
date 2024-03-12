@extends('../dashboardLayouts.master')
@section('body')

<div class="dashboardProperties">
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}"><i class="metismenu-icon pe-7s-rocket"></i> Dashboard</a></li>
        <li class="breadcrumb-item active">Building Amenities</li>
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
                    <a data-toggle="modal" data-target=".dashboardBuildingAmenitiesPost"><i class="fa fa-plus"></i>Building Amenity</a>
                </li>
                <li>
                    <a href="{{ route('dashboardBuildingAmenities') }}">Reload</a>
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
                    <td><i class="{{$amenity->image}}"></i></td>
                    @else
                    <td><img src="{{ URL::to('dashboard_assets/assets/images/placeholder.png') }}" width="30" alt="Image" /></td>
                    @endif
                    <td>{{$amenity->title}}</td>
                    <td>
                        @if($amenity->status==1)
                            <span class="badge badge-success">Published</span>
                        @else
                            <span class="badge badge-secondary">Unpublished</span>
                        @endif
                    </td>
                    <td>{{date('F d, Y', strtotime($amenity->created_at))}}</td>
                    <td>
                        <div class="table-actions">
                            <a data-toggle="modal" data-target=".dashboardBuildingAmenitiesUpdate" data-tile='{{$amenity->title}}' data-orginal-image='{{$amenity->image}}' data-image="{{ URL::to('uploaded/properties/'.$amenity->image) }}" data-status={{$amenity->status}} data-id='{{ $amenity->id }}' data-modalClass='dashboardBuildingAmenitiesUpdate' data-placeholder="{{ URL::to('/dashboard_assets/assets/images/placeholder.png') }}" data-icons="{{$amenity->image}}" class="btn btn-icon btn-sm btn-primary editPopupOpen">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a action-delete="{{ URL::to('/dashboard/properties/building-amenities/delete/'.$amenity->id) }}" class="btn btn-icon btn-sm btn-danger deleteDialog deleteQueryOperation">
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