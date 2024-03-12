@extends('../dashboardLayouts.master')
@section('body')

<div class="propertyCreate dashboardProperties">
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}"><i class="metismenu-icon pe-7s-rocket"></i> Dashboard</a></li>
        <li class="breadcrumb-item active">Job Create</li>
    </ol>

    <ul class="top_above_error" style="display:none;">
        <li></li>
    </ul>

    @if($data=='new')
        <form method="POST" class="faq formvalidationappeared" action="{{route('dashboardCareerCreatePost')}}" id="botble-real-estate-forms-property-form" >
    @endif
    @if($data=='edit')
        <form method="POST" class="faq formvalidationappeared" action="{{route('dashboardcareerEdit')}}" id="botble-real-estate-forms-property-form" >
        <input type="hidden" name="id" value="{{$career->id}}">
    @endif

        @csrf
        <input type="hidden" name="status" id="statusHidden" @if($data=='edit') value="{{$career->status}}" @endif />
        <div class="row">
            <div class="col-md-9">
                <div class="main-form">
                    <div class="form-body">
                        
                        <div class="form-group mb-3 title_div job_div_3 dobdate_div">
                            <label for="name" class="control-label required" aria-required="true">Job Title</label>
                            <input class="form-control" placeholder="Job Title" name="name" type="text" id="name" @if($data=='edit') value="{{$career->title}}" @endif required />
                        </div>

                        <div class="form-group mb-3 title_div job_div_3 dobdate_div">
                            <label for="job_number" class="control-label required" aria-required="true">Job Number</label>
                            <input class="form-control" placeholder="Job Number" name="job_number" type="text" id="job_number" @if($data=='edit') value="{{$career->job_number}}" @endif required />
                        </div>

                        <div class="form-group mb-3 propertyLocation title_div job_div_3 dobdate_div">
                            <label for="location" class="control-label required">Job location</label>
                            <input class="form-control" placeholder="Property location" name="location" type="text" required id="propertyLocation" @if($data=='edit') value="{{json_decode($career->location)}}" @endif />
                            <input type="hidden" name="lat" id="propertyLat" @if($data=='edit') value="{{$career->lat}}" @endif />
                            <input type="hidden" name="lng" id="propertyLong" @if($data=='edit') value="{{$career->lng}}" @endif />
                            <input type="hidden" name="city" id="propertyCity" @if($data=='edit') value="{{$career->city}}" @endif />
                            <input type="hidden" name="state" id="propertyState" @if($data=='edit') value="{{$career->state}}" @endif />
                            <input type="hidden" name="country" id="propertyCountry" @if($data=='edit') value="{{$career->country}}" @endif />
                        </div>

                        <div class="form-group mb-3 title_div job_div_3 dobdate_div">
                            <label for="job_schedule" class="control-label required" aria-required="true">Job Schedule</label>
                            <input class="form-control" placeholder="Schedule" name="job_schedule" type="text" id="job_schedule" @if($data=='edit') value="{{$career->schedule}}" @endif required />
                        </div>

                        <div class="form-group mb-3 title_div job_div_3 dobdate_div">
                            <label for="job_type" class="control-label required" aria-required="true">Position</label>
                            <input class="form-control" placeholder="Position" name="job_type" type="text" id="job_type" @if($data=='edit') value="{{$career->type}}" @endif required />
                        </div>

                        <div class="form-group mb-3 title_div job_div_3 dobdate_div">
                            <label for="job_number" class="control-label required" aria-required="true">Property</label>
                            <select class="form-control" required name="job_property">
                                <option value="">Select Property</option>
                                @foreach($properties as $property)
                                    <option value="{{$property->id}}" @if($data=='edit' && $property->id==$career->property) selected @endif>{{$property->title}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3 shortdescription">
                            <label for="description" class="control-label">Job Description</label>
                            <textarea class="form-control" rows="4" placeholder="Job description" name="description" cols="50" id="description">@if($data=='edit'){{$career->description}}@endif</textarea>
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
                                            @foreach($careerCategories as $careerCategory)
                                                <li>
                                                    <label class="mb-2">
                                                        <input type="checkbox" value="{{$careerCategory->id}}" @if($data=='edit' && $career->category!='') @if(in_array($careerCategory->id,explode(",",$career->category))) checked @endif  @endif  name="categories[]" />
                                                        {{$careerCategory->title}}
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