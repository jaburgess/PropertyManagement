@extends('../dashboardLayouts.master')
@section('body')

<div class="propertyCreate dashboardProperties">
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}"><i class="metismenu-icon pe-7s-rocket"></i> Dashboard</a></li>
        <li class="breadcrumb-item active">FAQ</li>
    </ol>

    <ul class="top_above_error" style="display:none;">
        <li></li>
    </ul>

    @if($data=='new')
        <form method="POST" class="faq formvalidationappeared" action="{{route('dashboardfaqsCreatePost')}}" id="botble-real-estate-forms-property-form" >
    @endif
    @if($data=='edit')
        <form method="POST" class="faq formvalidationappeared" action="{{route('dashboardFaqsEditPost')}}" id="botble-real-estate-forms-property-form" >
        <input type="hidden" name="id" value="{{$faq->id}}">
    @endif
    
        @csrf
        <input type="hidden" name="status" id="statusHidden" @if($data=='edit') value="{{$faq->status}}" @endif />
        <div class="row">
            <div class="col-md-9">
                <div class="main-form">
                    <div class="form-body">
                        
                        <div class="form-group mb-3 title_div">
                            <label for="name" class="control-label required" aria-required="true">Title</label>
                            <input class="form-control" placeholder="Title" name="name" type="text" id="name"  @if($data=='edit') value="{{$faq->title}}" @endif required />
                        </div>

                        <div class="form-group mb-3 shortdescription">
                            <label for="description" class="control-label required">Description</label>
                            <textarea class="form-control" rows="4" placeholder="Description" name="description" cols="50" id="description" required>@if($data=='edit'){{$faq->description}}@endif</textarea>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-md-3 right-sidebar">
                
                <div class="widget meta-boxes form-actions form-actions-default action-horizontal">
                    <div class="widget-title">
                        <h4>
                            <span>Publish</span>
                        </h4>
                    </div>
                    <div class="widget-body">
                        <div class="btn-set">
                            <button type="button" id="draft_this_property" class="btn btn-success"><i class="fa fa-check-circle"></i> Draft</button>
                            <button type="button" id="publish_this_property" class="btn btn-info"><i class="fa fa-save"></i> @if($data=='edit'){{'Update'}}@else{{'Publish'}}@endif</button>
                        </div>
                    </div>
                </div>
             
                <div class="widget meta-boxes">
                    <div class="widget-title">
                        <h4><label class="control-label">Categories</label></h4>
                    </div>
                    <div class="widget-body">
                        <div class="form-group form-group-no-margin">
                            <div class="multi-choices-widget list-item-checkbox mCustomScrollbar _mCS_1 mCS_no_scrollbar" style="padding: 0px;">
                                <div id="mCSB_1" class="mCustomScrollBox mCS-dark mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0">
                                    <div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0; left: 0;" dir="ltr">
                                        <ul>
                                            @foreach($faqCategories as $faqCategory)
                                                <li>
                                                    <label class="mb-2">
                                                        <input type="checkbox" value="{{$faqCategory->id}}" @if($data=='edit' && $faq->category!='') @if(in_array($faqCategory->id,explode(",",$faq->category))) checked @endif  @endif  name="categories[]" />
                                                        {{$faqCategory->title}}
                                                    </label>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <input type="submit" name="submit" value="submit" style="display:none;" id="InputSubmit">
    </form>

</div>

@endsection