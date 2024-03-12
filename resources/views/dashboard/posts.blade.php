@extends('../dashboardLayouts.master')
@section('body')

<div class="dashboardProperties">
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}"><i class="metismenu-icon pe-7s-rocket"></i> Dashboard</a></li>
        <li class="breadcrumb-item active">Posts</li>
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
                    <a href="{{ route('dashboardPostsCreate') }}"><i class="fa fa-plus"></i>Post</a>
                </li>
                <li>
                    <a href="{{ route('dashboardPosts') }}">Reload</a>
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
                <th>Admin status</th>
                <th>Created At</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @php $trClass='odd'; $index=1; @endphp
            @foreach($posts as $post)
                <tr role="row" class="{{$trClass}}">
                    <td>{{$index}}</td>
                    @if($post->image!='')
                    <td><img src="{{ URL::to('uploaded/posts/'.$post->image) }}" width="100" alt="Image" /></td>
                    @else
                    <td><img src="{{ URL::to('dashboard_assets/assets/images/placeholder.png') }}" width="100" alt="Image" /></td>
                    @endif
                    <td><a href="{{ URL::to('/post/'.$post->slug) }}">{{$post->title}}</a></td>
                    <td>
                        @if($post->status==1)
                            <span class="badge badge-success">Published</span>
                        @else
                            <span class="badge badge-secondary">Unpublished</span>
                        @endif
                    </td>
                    <td>
                        @if($post->moderator==1)
                            <span class="badge badge-success">Approved</span>
                        @else
                            <span class="badge badge-secondary">Unapproved</span>
                        @endif
                    </td>
                    <td>{{date('F d, Y', strtotime($post->created_at))}}</td>
                    <td>
                        <div class="table-actions">
                            <a href="{{ URL::to('/dashboard/posts/edit/'.$post->slug) }}" class="btn btn-icon btn-sm btn-primary editPopupOpen">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a action-delete="{{ URL::to('/dashboard/posts/delete/'.$post->id) }}" class="btn btn-icon btn-sm btn-danger deleteDialog deleteQueryOperation">
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