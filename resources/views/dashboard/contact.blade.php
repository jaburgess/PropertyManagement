@extends('../dashboardLayouts.master')
@section('body')

<div class="dashboardProperties">
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}"><i class="metismenu-icon pe-7s-rocket"></i> Dashboard</a></li>
        <li class="breadcrumb-item active">Contact</li>
    </ol>

    <div class="table_header">
        <div class="left">
            <!-- <form>
                <input type="text" name="search" placeholder="Search..." id="searchText" required>
            </form>  -->
        </div>
        <div class="right">
            <ul>
                <li>
                    <a data-toggle="modal" data-target=".contactSend"><i class="fa fa-plus"></i>Send</a>
                </li>
                <li>
                    <a href="{{ route('dashboardContact') }}">Reload</a>
                </li>
            </ul>
        </div>
    </div>
    <table class="table table-striped table-hover vertical-middle dataTable no-footer dtr-inline" id="botble-real-estate-tables-property-table">
        <thead>
            <tr role="row">
                <th>#</th>
                <th>To</th>
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
                        @if($account->id==$contact->sent)
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

<!-- addPostCategory -->
<div class="modal fade modalshg contactSend" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form class="contactSend" method="post" action="{{ route('dashboardContactPost') }}">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Send Message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="step">
                        <label>Role</label>
                        <select name="role" class="selectContactUserRole" required>
                            <option value="">Select Role</option>
                            <option value="user">User</option>
                            <option value="manager">Manager</option>
                        </select>
                    </div>
                    <div class="step user" style="display:none;">
                        <label>Account</label>
                        <select name="user" required>
                            <option value="">Select User</option>
                            @foreach($accounts as $account)
                                @if($account->role=='user')
                                    <option value="{{$account->id}}">{{$account->firstname.' '.$account->lastname.' ('.$account->email.')'}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="step manager" style="display:none;">
                        <label>Account</label>
                        <select name="manager" required>
                            <option value="">Select Manager</option>
                            @foreach($accounts as $account)
                                @if($account->role=='manager')
                                    <option value="{{$account->id}}">{{$account->firstname.' '.$account->lastname.' ('.$account->email.')'}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="step">
                        <label>Message</label>
                        <textarea name="message" required></textarea>
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