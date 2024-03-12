@extends('../dashboardLayouts.master')
@section('body')

<div class="dashboardProperties">
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}"><i class="metismenu-icon pe-7s-rocket"></i> Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ URL::to('/dashboard/account/users') }}">Account</a></li>
        <li class="breadcrumb-item active">Users</li>
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
                    <a href="{{ URL::to('/dashboard/account/users/create') }}"><i class="fa fa-plus"></i> User</a>
                </li>
                <li>
                    <a href="{{ URL::to('/dashboard/account/users') }}">Reload</a>
                </li>
            </ul>
        </div>
    </div>
    <table class="table table-striped table-hover vertical-middle dataTable no-footer dtr-inline" id="botble-real-estate-tables-property-table">
        <thead>
            <tr role="row">
                <th>#</th>
                <th>Image</th>
                <th>Role</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Number of Properties</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @php $trClass='odd'; $index=1; @endphp
            @foreach($accounts as $account)
                <tr role="row" class="{{$trClass}}">
                    <td>{{$index}}</td>
                    @if($account->image!='')
                    <td><img src="{{ URL::to('uploaded/profiles/'.$account->image) }}" width="50" alt="Image" /></td>
                    @else
                    <td><img src="{{ URL::to('dashboard_assets/assets/images/placeholder.png') }}" width="50" alt="Image" /></td>
                    @endif
                    <td>
                        @php
                            $role = \Illuminate\Support\Facades\DB::table('roles')->where('id',$account->role)->first();
                        @endphp
                        @if($role!=null)
                        {{$role->name}}
                        @endif
                    </td>
                    <td>{{$account->firstname.' '.$account->lastname}}</td>
                    <td>{{$account->email}}</td>
                    <td>{{$account->phone}}</td>
                    @php $noProperties=0; @endphp
                    @foreach($properties as $property)
                        @if($property->user_id==$account->id)
                            @php $noProperties++; @endphp
                        @endif
                    @endforeach
                    <td><a>{{$noProperties}}</a></td>
                    <td>
                        @if($account->status==1)
                            <span class="badge badge-success">Approved</span>
                        @else
                            <span class="badge badge-secondary">Pending</span>
                        @endif
                    </td>
                    <td>{{date('F d, Y', strtotime($account->created_at))}}</td>
                    <td>
                        <div class="table-actions">
                            @if($account->status==0)
                                <a href="{{ URL::to('/dashboard/account/users/approve/'.$account->id) }}" class="btn btn-icon btn-sm btn-success">
                                    <i class="fa fa-check"></i> Approved
                                </a>
                            @endif
                            <a href="{{ URL::to('/dashboard/account/users/edit/'.$account->id) }}" class="btn btn-icon btn-sm btn-primary">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a action-delete="{{ URL::to('/dashboard/account/users/delete/'.$account->id) }}" class="btn btn-icon btn-sm btn-danger deleteDialog deleteQueryOperation">
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