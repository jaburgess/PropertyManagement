@extends('../dashboardLayouts.master')
@section('body')

<div class="propertyCreate dashboardProperties">
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}"><i class="metismenu-icon pe-7s-rocket"></i> Dashboard</a></li>
        <li class="breadcrumb-item active">Setting</li>
    </ol>

    <ul class="@if($message=='done') top_above_success @else top_above_error @endif" @if($message=='')style="display:none;" @endif>
        <li>@if($message=='done'){{'Password successully changed'}}@else{{$message}}@endif</li>
    </ul>

    <form method="POST" class="faq formvalidationappeared" action="{{ route('dashboardSettingPost') }}" id="botble-real-estate-forms-property-form" >
        @csrf
        <input type="hidden" name="status" id="statusHidden" value="" />
        <div class="row">
            <div class="col-md-12">
                <div class="main-form">
                    <div class="form-body">
                        <input type="hidden" name="id" value="{{$account->id}}">
                        
                        <div class="form-group mb-3 title_div dobdate_div">
                            <label for="old_password" class="control-label required" aria-required="true">Old Password</label>
                            <input class="form-control" placeholder="****" name="old_password" type="password" id="old_password" required />
                        </div>

                        <div class="form-group mb-3 title_div dobdate_div">
                            <label for="password" class="control-label required" aria-required="true">Password</label>
                            <input class="form-control" placeholder="****" name="password" type="password" id="password" required />
                        </div>

                        <div class="form-group mb-3 title_div dobdate_div last">
                            <label for="confirm_password" class="control-label required" aria-required="true">Confirm Password</label>
                            <input class="form-control" placeholder="****" name="confirm_password" type="password" id="confirm_password" required />
                        </div>
                        <br>
                        <button type="submit" name="submit" id="publish_this_property" class="btn btn-info"><i class="fa fa-save"></i> Reset</button>
              
                    </div>
                </div>

            </div>
          
        </div>
    </form>

</div>

@endsection