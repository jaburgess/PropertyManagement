@extends('../dashboardLayouts.master')
@section('body')

<div class="dashboardProperties">
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}"><i class="metismenu-icon pe-7s-rocket"></i> Dashboard</a></li>
        <li class="breadcrumb-item active">Contact Received</li>
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
                    <a href="{{ route('dashboardContactReceive') }}">Reload</a>
                </li>
            </ul>
        </div>
    </div>
    <table class="table table-striped table-hover vertical-middle dataTable no-footer dtr-inline" id="botble-real-estate-tables-property-table">
        <thead>
            <tr role="row">
                <th>#</th>
                <th>From</th>
                <th>Message</th>
                <th>Status</th>
                <th>Deliver At</th>
            </tr>
        </thead>
        <tbody>
            @php $trClass='odd'; $index=1; @endphp
            @foreach($contacts as $contact)
                <tr role="row" class="{{$trClass}}">
                    <td>{{$index}}</td>
                    @foreach($accounts as $account)
                        @if($account->id==$contact->user_id)
                            <td>{{$account->firstname.' '.$account->lastname}}</td>
                        @endif
                    @endforeach
                    <td>{{$contact->message}}</td>
                    <td>
                        @if($contact->status=='Deliver')
                            <span class="badge badge-success">Delivered</span>
                        @else
                            <span class="badge badge-secondary">{{$contact->status}}</span>
                        @endif
                    </td>
                    <td>{{date('F d, Y', strtotime($contact->created_at))}}</td>
                </tr>
            @php if($trClass=='odd'){ $trClass='even'; }else{ $trClass='odd'; }  $index++; @endphp
            @endforeach
        </tbody>
    </table>


</div>

@endsection