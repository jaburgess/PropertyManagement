@extends('../dashboardLayouts.master')
@section('body')

<div class="propertyCreate dashboardProperties">
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}"><i class="metismenu-icon pe-7s-rocket"></i> Dashboard</a></li>
        <li class="breadcrumb-item">Account</li>
        <li class="breadcrumb-item">Bank Detail</li>
    </ol>

    <form method="POST" class="faq formvalidationappeared" action="{{ route('dashboardAccountBankDetails') }}" id="botble-real-estate-forms-property-form" >
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="main-form">
                    <div class="form-body">
                        
                        <div style="display:flex;">
                            
                            <div class="form-group mb-3 title_div" style="width: 100%;">
                                <label for="bankName" class="control-label required" aria-required="true">Bank Name</label>
                                <input class="form-control" placeholder="Bank Name" name="bankName" type="text" value="@if($BankDetail!=null){{$BankDetail->bankName}}@endif" id="bankName" style="height:50px;" required />
                            </div>

                        </div>

                        <div style="display:flex;">
                            
                            <div class="form-group mb-3 title_div" style="width: 100%;">
                                <label for="bankDetail" class="control-label required" aria-required="true">Bank Detail</label>
                                <textarea class="form-control" name="bankDetail" rows="20" placeholder="Bank Detail" required>@if($BankDetail!=null){{$BankDetail->BankDetail}}@endif</textarea>
                            </div>

                        </div>

                        <div style="display:flex;">
                            
                             <button type="submit" name="submit" class="btn btn-info"><i class="fa fa-save"></i> Update</button>
               
                        </div>
                        

                    </div>
                </div>

            </div>
        </div>
    </form>

</div>

@endsection