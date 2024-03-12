@extends('../dashboardLayouts.master')
@section('body')

<div class="dashboardProperties">
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}"><i class="metismenu-icon pe-7s-rocket"></i> Dashboard</a></li>
        <li class="breadcrumb-item active">Career Request</li>
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
                    <a href="{{ route('dashboardcareerApplicationRequest') }}">Reload</a>
                </li>
            </ul>
        </div>
    </div>
    <table class="table table-striped table-hover vertical-middle dataTable no-footer dtr-inline" id="botble-real-estate-tables-property-table">
        <thead>
            <tr role="row">
                <th>#</th>
                <th>Job</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Position</th>
                <th>Message</th>
                <th>Document</th>
                <th>Created At</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @php $trClass='odd'; $index=1; @endphp
            @foreach($data as $datas)
                <tr role="row" class="{{$trClass}}">
                    <td>{{$index}}</td>
                    @php $jobTitle=''; @endphp
                    @foreach($careers as $career)
                        @if($career->id==$datas->job)
                            @php $jobTitle=$career->title; @endphp
                        @endif
                    @endforeach
                    <td>{{$jobTitle}}</td>
                    <td>{{$datas->name}}</td>
                    <td>{{$datas->email}}</td>
                    <td>{{$datas->phone}}</td>
                    <td>{{$datas->position}}</td>
                    <td>{{$datas->message}}</td>
                    <td>@if($datas->file!='')<a style="color:#fff !important;" href="{{ URL::to('/uploaded/applications/'.$datas->file) }}" class="btn btn-primary" download>Download</a>@endif</td>
                    <td>{{date('F d, Y', strtotime($datas->created_at))}}</td>
                    <td>
                        <div class="table-actions">
                            <a action-delete="{{ URL::to('/dashboard/career-application/delete/'.$datas->id) }}" class="btn btn-icon btn-sm btn-danger deleteDialog deleteQueryOperation">
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