@extends('../dashboardLayouts.master')
@section('body')

<div class="dashboardProperties">
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}"><i class="metismenu-icon pe-7s-rocket"></i> Dashboard</a></li>
        <li class="breadcrumb-item active">FAQ Categories</li>
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
                    <a data-toggle="modal" data-target=".addFAQCategory"><i class="fa fa-plus"></i>Category</a>
                </li>
                <li>
                    <a href="{{ route('dashboardFaqsCategories') }}">Reload</a>
                </li>
            </ul>
        </div>
    </div>
    <table class="table table-striped table-hover vertical-middle dataTable no-footer dtr-inline" id="botble-real-estate-tables-property-table">
        <thead>
            <tr role="row">
                <th>#</th>
                <th>Title</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @php $trClass='odd'; $index=1; @endphp
            @foreach($faqCategories as $faqCategory)
                <tr role="row" class="{{$trClass}}">
                    <td>{{$index}}</td>
                    <td>{{$faqCategory->title}}</td>
                    <td>
                        @if($faqCategory->status==1)
                            <span class="badge badge-success">Published</span>
                        @else
                            <span class="badge badge-secondary">Unpublished</span>
                        @endif
                    </td>
                    <td>{{date('F d, Y', strtotime($faqCategory->created_at))}}</td>
                    <td>
                        <div class="table-actions">
                            <a data-toggle="modal" data-target=".editFAQCategory" class="btn btn-icon btn-sm btn-primary editPopupOpen" data-tile='{{$faqCategory->title}}' data-status={{$faqCategory->status}} data-id='{{ $faqCategory->id }}' data-modalClass='editFAQCategory'>
                                <i class="fa fa-edit"></i>
                            </a>
                            <a action-delete="{{ URL::to('/dashboard/faqs/categories/delete/'.$faqCategory->id) }}" class="btn btn-icon btn-sm btn-danger deleteDialog deleteQueryOperation">
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