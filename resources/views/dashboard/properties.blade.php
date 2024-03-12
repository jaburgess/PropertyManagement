@extends('../dashboardLayouts.master')
@section('body')

<div class="dashboardProperties">
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}"><i class="metismenu-icon pe-7s-rocket"></i> Dashboard</a></li>
        <li class="breadcrumb-item active">Properties</li>
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
                    <a href="{{ route('dashboardProperties') }}">Reload</a>
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
                <!-- <th>Manager</th> -->
                <th>Status</th>
                <th>Admin status</th>
                <th>Feature</th>
                <th>Created At</th>
                <th>Operations</th>
            </tr>
        </thead> 
        <tbody>
            @php $trClass='odd'; $index=1; @endphp
            @foreach($properties as $property)
                <tr role="row" class="{{$trClass}} @if($property->sold!=null) sold @endif">
                    <td>{{$index}}</td>
                    @if($property->cover!='')
                    <td><img src="{{ URL::to('uploaded/properties/'.$property->cover) }}" width="100" alt="Image" /></td>
                    @else
                    <td><img src="{{ URL::to('dashboard_assets/assets/images/placeholder.png') }}" width="100" alt="Image" /></td>
                    @endif
                    <td><a href="{{ URL::to('/property/'.$property->slug) }}">{{$property->title}}</a></td>
                    @foreach($accounts as $account)
                        @if($account->id==$property->user_id)
                            <td>@if($account->firstname!=''){{$account->firstname.' '.$account->lastname}}@else{{$account->email}}@endif</td>
                        @endif
                    @endforeach 
                    <td>
                        @foreach($types as $typez)
                            @if($typez->id==$property->bookingtype)
                                {{$typez->title}}
                            @endif
                        @endforeach
                    </td>
                    @php 
                        // $manage=''; $manageID=''; 
                        // foreach($properties_managers as $properties_manager){
                            // if($properties_manager->property_id==$property->id){
                                // foreach($accounts as $account){
                                    // if($account->id==$properties_manager->user_id){
                                        // $manage=$account->firstname.' '.$account->lastname; $manageID=$account->id;
                                    // }
                                // }
                            // }
                        // }
                    @endphp
                    <td>
                        @if($property->sold!=null)
                            <span class="badge badge-info">Sold</span>
                        @elseif($property->status==1)
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
                    <td>
                        @if($property->feature==1)
                            <span class="badge badge-warning">Feature</span>
                        @endif
                    </td>
                    <td>{{date('F d, Y', strtotime($property->created_at))}}</td>
                    <td>
                        <div class="table-actions">
                            <!-- <a data-toggle="modal" data-target=".addManagerpopup" style="cursor: pointer;background: gray;" class="btn btn-icon btn-sm btn-primary addManagerActionPerform" data-id='' data-title='' data-user=''>
                                <i class="fa fa-user"></i> Add Manager
                            </a> -->
                            @if(session('role')=='admin')
                                @if($property->feature==1)
                                    <a style="height: 22.8px;padding: 0px 6px;" href="{{ URL::to('/dashboard/properties/feature/'.$property->id.'/0') }}" class="btn btn-icon btn-sm btn-danger">
                                        Unfeature
                                    </a>
                                @else
                                    <a style="height: 22.8px;padding: 0px 6px;" href="{{ URL::to('/dashboard/properties/feature/'.$property->id.'/1') }}" class="btn btn-icon btn-sm btn-info">
                                        Make Feature
                                    </a>
                                @endif
                            @endif
                            
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
        <form class="addManagerpopup" method="post" action="{{ route('dashboardPropertiesAssignManager') }}" >
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