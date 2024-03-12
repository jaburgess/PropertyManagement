@extends('../dashboardLayouts.master')
@section('body')

<div class="dashboardProperties">
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}"><i class="metismenu-icon pe-7s-rocket"></i> Dashboard</a></li>
        <li class="breadcrumb-item active">Pending Properties</li>
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
                    <a href="{{ route('dashboardPropertyCreate') }}"><i class="fa fa-plus"></i>List Property</a>
                </li>
                <li>
                    <a href="{{ route('pendingProperties') }}">Reload</a>
                </li>
            </ul>
        </div>
    </div>
    <table class="table table-striped table-hover vertical-middle dataTable no-footer dtr-inline" id="botble-real-estate-tables-property-table">
        <thead>
            <tr role="row">
                <th>#</th>
                <th>Image</th>
                <th>Property</th>
                <th>User</th>
                <th>Type</th>
                <th>Status</th>
                <th>Admin status</th>
                <th>Created At</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @php $trClass='odd'; $index=1; @endphp
            @foreach($properties as $property)
                <tr role="row" class="{{$trClass}}">
                    <td>{{$index}}</td>
                    @if($property->cover!='')
                    <td><img src="{{ URL::to('uploaded/properties/'.$property->cover) }}" width="100" alt="Image" /></td>
                    @else
                    <td><img src="{{ URL::to('dashboard_assets/assets/images/placeholder.png') }}" width="100" alt="Image" /></td>
                    @endif
                    <td><a href="{{ URL::to('/property/'.$property->slug) }}">{{$property->title}}</a></td>
                    @foreach($accounts as $account)
                        @if($account->id==$property->user_id)
                            <td>{{$account->firstname.' '.$account->lastname}}</td>
                        @endif
                    @endforeach
                    <td>
                        @foreach($types as $type)
                            @if($type->id==$property->propertytype)
                                {{$type->title}}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @if($property->status==1)
                            <span class="badge badge-success">Published</span>
                        @else
                            <span class="badge badge-secondary">Unpublished</span>
                        @endif
                    </td>
                    <td>
                        @if($property->moderator==1)
                            <span class="badge badge-success">Approved</span>
                        @else
                            <span class="badge badge-secondary">Pending</span>
                        @endif
                    </td>
                    <td>{{date('F d, Y', strtotime($property->created_at))}}</td>
                    <td>
                        <div class="table-actions">
                            <a href="{{ URL::to('/dashboard/properties/approved/'.$property->id) }}" class="btn btn-icon btn-sm btn-success">
                                <i class="fa fa-check"></i> Approved
                            </a>
                            <a href="{{ URL::to('/dashboard/properties/edit/'.$property->slug) }}" class="btn btn-icon btn-sm btn-primary editPopupOpen">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a action-delete="{{ URL::to('/dashboard/properties/delete/'.$property->id) }}" class="btn btn-icon btn-sm btn-danger deleteDialog deleteQueryOperation">
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


<div class="modal fade modalshg addManagerpopup" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form class="addManagerpopup" method="post" action="{{ route('dashboardServicesPost') }}" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Add Manager</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="step">
                        <label>Property</label>
                        <input type="hidden" name="pid" value="">
                        <input type="text" name="ptitle" value="" readonly>
                    </div>
                    <div class="step">
                        <label>Select Manager</label>
                        <select name="pmanager" required>
                            <option>Select Manager</option>
                            @foreach($accounts as $account)
                                @if($account->role=='manager')
                                    <option value="{{$account->id}}">{{$account->firstname.' '.$account->lastname}}</option>
                                @endif
                            @endforeach
                        </select>
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