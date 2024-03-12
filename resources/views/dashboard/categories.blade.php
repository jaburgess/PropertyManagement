@extends('../dashboardLayouts.master')
@section('body')

<div class="dashboardProperties">
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}"><i class="metismenu-icon pe-7s-rocket"></i> Dashboard</a></li>
        <li class="breadcrumb-item active">Categories</li>
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
                    <a data-toggle="modal" data-target=".addCategory"><i class="fa fa-plus"></i>Category</a>
                </li>
                <li>
                    <a href="{{ route('dashboardCategories') }}">Reload</a>
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
            @foreach($categories as $category)
                <tr role="row" class="{{$trClass}}">
                    <td>{{$index}}</td>
                    @if($category->image!='')
                    <td><i class="{{$category->image}}"></i></td>
                    @else
                    <td><img src="{{ URL::to('dashboard_assets/assets/images/placeholder.png') }}" width="50" alt="Image" /></td>
                    @endif
                    <td>{{$category->title}}</td>
                    <td>
                        @if($category->status==1)
                            <span class="badge badge-success">Published</span>
                        @else
                            <span class="badge badge-secondary">Unpublished</span>
                        @endif
                    </td>
                    <td>{{date('F d, Y', strtotime($category->created_at))}}</td>
                    <td>
                        <div class="table-actions">
                            <a data-toggle="modal" data-target=".updateCategory" data-tile='{{$category->title}}' data-orginal-image='{{$category->image}}' data-image="{{ URL::to('uploaded/properties/'.$category->image) }}" data-status={{$category->status}} data-id='{{ $category->id }}' data-modalClass='updateCategory' data-icons="{{$category->image}}" data-placeholder="{{ URL::to('/dashboard_assets/assets/images/placeholder.png') }}" class="btn btn-icon btn-sm btn-primary editPopupOpen">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a action-delete="{{ URL::to('/dashboard/properties/categories/delete/'.$category->id) }}" class="btn btn-icon btn-sm btn-danger deleteDialog deleteQueryOperation">
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