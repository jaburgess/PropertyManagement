@extends('../dashboardLayouts.master')
@section('body')

<div class="propertyCreate dashboardProperties">
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}"><i class="metismenu-icon pe-7s-rocket"></i> Dashboard</a></li>
        <li class="breadcrumb-item active">News & Events</li>
    </ol>

    <ul class="top_above_error" style="display:none;">
        <li></li>
    </ul>

    <form method="POST" action="{{ route('dashboardPostsCreatePost') }}" class="formvalidationappeared property"  id="botble-real-estate-forms-property-form"  enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="status" id="statusHidden" value="" />
        <div class="row">
            <div class="col-md-9">
                <div class="main-form">
                    <div class="form-body">
                        
                        <div class="form-group mb-3 title_div">
                            <label for="name" class="control-label required" aria-required="true">Title</label>
                            <input class="form-control" placeholder="Title" name="name" type="text" id="name" required />
                        </div>
                        
                        <div class="form-group mb-3 modalshg propertyImage">
                            <div class="modal-body">
                                <label for="images" class="control-label required">Images</label>
                                <div class="step">
                                    <div class="avatar-upload">
                                        <div class="avatar-edit">
                                            <input type="hidden" name="image_old" value="" id="propertyAddImageOld">
                                            <input type='file' id="propertyAddImage" name="image" data-placeholder="{{ URL::to('dashboard_assets/assets/images/placeholder.png') }}" accept="image/png, image/gif, image/jpeg" />
                                            <label for="propertyAddImage"></label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="propertyAddImagePreview" style="background-image: url({{ URL::to('dashboard_assets/assets/images/placeholder.png') }});">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3 propertydescription">
                            <label for="content" class="control-label">Description</label>
                            <textarea name="description" id="createProperty" placeholder="Property Description"></textarea>
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
                            <button style="display:none;" type="button" id="draft_this_property" class="btn btn-success"><i class="fa fa-check-circle"></i> Draft</button>
                            <button type="button" id="publish_this_property" class="btn btn-info"><i class="fa fa-save"></i> Publish</button>
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
                                            @foreach($posts_categories as $posts_category)
                                                <li>
                                                    <label class="mb-2">
                                                        <input type="checkbox" value="{{$posts_category->id}}" name="categories[]" />
                                                        {{$posts_category->title}}
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

                <div class="widget meta-boxes tags">
                    <div class="widget-title">
                        <h4><label for="project_id" class="control-label">Tags</label></h4>
                    </div>
                    <div class="widget-body">
                        <div class="ui-select-wrapper form-group">
                            <div id="addTagsAppearedInput">
                                <input type="text" name="tag" placeholder="Tags" />
                                <button type="button">Add</button>
                            </div>
                            <ul id="addTagsAppeared">
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <input type="submit" name="submit" value="submit" style="display:none;" id="InputSubmit">
    </form>

</div>

@endsection