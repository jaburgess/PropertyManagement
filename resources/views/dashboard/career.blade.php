@extends('../dashboardLayouts.master')
@section('body')

<div class="dashboardProperties">
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}"><i class="metismenu-icon pe-7s-rocket"></i> Dashboard</a></li>
        <li class="breadcrumb-item active">Jobs</li>
    </ol>

    <div class="table_header">
        <div class="left">
            <!-- <form>
                <input type="text" name="search" placeholder="Search..." required>
            </form> -->
        </div>
        <div class="right">
            <ul>
                <li>
                    <a href="{{ route('dashboardCareerCreate') }}"><i class="fa fa-plus"></i>Job</a>
                </li>
                <li>
                    <a href="{{ route('dashboardCareer') }}">Reload</a>
                </li>
            </ul>
        </div>
    </div>
    <table class="table table-striped table-hover vertical-middle dataTable no-footer dtr-inline" id="botble-real-estate-tables-property-table">
        <thead>
            <tr role="row">
                <th>#</th>
                <th>Job Title</th>
                <th>Job Number</th>
                <th>Category</th>
                <th>Location</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @php $trClass='odd'; $index=1; @endphp
            @foreach($careers as $career)
                <tr role="row" class="{{$trClass}}">
                    <td>{{$index}}</td>
                    <td>{{$career->title}}</td>
                    <td>{{$career->job_number}}</td>
                    @php $category=array(); @endphp
                    @foreach($careerCategories as $careerCategory)
                        @if(in_array($careerCategory->id,explode(",",$career->category)))
                            @php array_push($category,$careerCategory->title); @endphp
                        @endif
                    @endforeach
                    <td>{{implode(", ",$category)}}</td>
                    <td>{{json_decode($career->location)}}</td>
                    <td>
                        @if($career->status==1)
                            <span class="badge badge-success">Published</span>
                        @else
                            <span class="badge badge-secondary">Draft</span>
                        @endif
                    </td>
                    <td>{{date('F d, Y', strtotime($career->created_at))}}</td>
                    <td>
                        <div class="table-actions">
                            <a href="{{ URL::to('/dashboard/career/edit/'.$career->id) }}" class="btn btn-icon btn-sm btn-primary editPopupOpen">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a action-delete="{{ URL::to('/dashboard/career/delete/'.$career->id) }}" class="btn btn-icon btn-sm btn-danger deleteDialog deleteQueryOperation">
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