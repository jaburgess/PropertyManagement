@extends('../dashboardLayouts.master')
@section('body')

<div class="dashboardProperties">
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}"><i class="metismenu-icon pe-7s-rocket"></i> Dashboard</a></li>
        <li class="breadcrumb-item active">FAQS</li>
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
                    <a href="{{ route('dashboardfaqsCreate') }}"><i class="fa fa-plus"></i>FAQ</a>
                </li>
                <li>
                    <a href="{{ route('dashboardFaqs') }}">Reload</a>
                </li>
            </ul>
        </div>
    </div>
    <table class="table table-striped table-hover vertical-middle dataTable no-footer dtr-inline" id="botble-real-estate-tables-property-table">
        <thead>
            <tr role="row">
                <th>#</th>
                <th>Question</th>
                <th>Category</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @php $trClass='odd'; $index=1; @endphp
            @foreach($faqs as $faq)
                <tr role="row" class="{{$trClass}}">
                    <td>{{$index}}</td>
                    <td>{{$faq->title}}</td>
                    @php $category=array(); @endphp
                    @foreach($faqCategories as $faqCategory)
                        @if(in_array($faqCategory->id,explode(",",$faq->category)))
                            @php array_push($category,$faqCategory->title); @endphp
                        @endif
                    @endforeach
                    <td>{{implode(", ",$category)}}</td>
                    <td>
                        @if($faq->status==1)
                            <span class="badge badge-success">Published</span>
                        @else
                            <span class="badge badge-secondary">Draft</span>
                        @endif
                    </td>
                    <td>{{date('F d, Y', strtotime($faq->created_at))}}</td>
                    <td>
                        <div class="table-actions">
                            <a href="{{ URL::to('/dashboard/faqs/edit/'.$faq->id) }}" class="btn btn-icon btn-sm btn-primary editPopupOpen">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a action-delete="{{ URL::to('/dashboard/faqs/delete/'.$faq->id) }}" class="btn btn-icon btn-sm btn-danger deleteDialog deleteQueryOperation">
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