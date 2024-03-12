@extends('../dashboardLayouts.master')
@section('body')
<div class="dashboardProperties">
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}"><i class="metismenu-icon pe-7s-rocket"></i> Dashboard</a></li>
        <li class="breadcrumb-item active">Booking Days</li>
    </ol>

    <div class="table_header">
        <div class="left">
        </div>
        <div class="right">
            <ul>
                <li>
                    <a data-toggle="modal" data-target=".dashboardDisableDatePost"><i class="fa fa-plus"></i> Add</a>
                </li>
                <li>
                    <a href="{{ route('dashboardBookingDays') }}">Reload</a>
                </li>
            </ul>
        </div>
    </div>
    <table class="table table-striped table-hover vertical-middle dataTable no-footer dtr-inline" id="botble-real-estate-tables-property-table">
        <thead>
            <tr role="row">
                <th>#</th>
                <th>Property</th>
                <th>Disable Day</th>
                <th>Created At</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @php $trClass='odd'; $index=1; @endphp
            @foreach($disableDates as $disableDate)
            @php
                $property = \Illuminate\Support\Facades\DB::table('properties')->where('id',$disableDate->property)->first();
            @endphp
            @if($property!=null)
                <tr role="row" class="{{$trClass}}">
                    <td>{{$index}}</td>
                    <td>{{$property->title}}</td>
                    <td>{{$disableDate->days}}</td>
                    <td>{{date('M d, Y', strtotime($disableDate->created_at))}}</td>
                    <td>
                        <div class="table-actions">
                            <a action-delete="{{ URL::to('/dashboard/booking/days/delete/'.$disableDate->id) }}" class="btn btn-icon btn-sm btn-danger deleteDialog deleteQueryOperation">
                                <i class="fa fa-trash"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            @php if($trClass=='odd'){ $trClass='even'; }else{ $trClass='odd'; }  $index++; @endphp
            @endif
            @endforeach
        </tbody>
    </table>


</div>

@endsection

<!-- addDisableDates -->
<div class="modal fade modalshg dashboardDisableDatePost" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="display:none;">
    <div class="modal-dialog modal-lg">
        <form class="addType2" method="post" action="{{ route('dashboardBookingDays') }}">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Add Disable Dates</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="step">
                        <label>Property</label>
                        <select name="property" required>
                            <option value="">Select Property</option>
                            @foreach($properties as $property)
                            <option value="{{$property->id}}">{{$property->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="step">
                        <label>Disable Dates</label>
                        <input type="text" placeholder="Select Dates" name="dates" id="properties_checkin_both" class="properties_checkin" autocomplete="off">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>