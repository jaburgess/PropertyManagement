@extends('../dashboardLayouts.master')
@section('body')
@section('stylesRun')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
@endsection
<div id="luxuryStaysDashboard" class="app-main__inner">
    
    <div class="dashboard-main">
        <div class="row">
            <!-- <div class=" col-md-9  "> -->
            @if(session('role')==1)
            <div class="col-md-9">
            @else
            <div class="col-md-12">
            @endif
                <div class="dashboard-content">
                    <div class="page-title">
                        <h1>Properties Summary</h1>
                        <div class="day-detail">Thursday<span>{{date('d M, Y')}}</span></div>
                    </div>
                    <div class="count-block">
                        <div class="row">
                        @if(session('role')==1)
                            <div class="col-md-4">
                        @else
                            <div class="col-md-6">
                        @endif
                                <div class="item">
                                    <h3>Total Properties</h3>
                                    <p>
                                        {{$properties}}
                                    </p>
                                    <div class="prop_vac_detail">
                                        @php $trClass='_blue';  @endphp
                                        @foreach($types as $type)
                                            @php
                                                if(session('role')==1){
                                                    $countProperty = \Illuminate\Support\Facades\DB::table('properties')->where('status',1)->where('propertytype',$type->id)->count();
                                                }else{
                                                    $countProperty = \Illuminate\Support\Facades\DB::table('properties')->where('user_id',session('id'))->where('status',1)->where('propertytype',$type->id)->count();
                                                }
                                            @endphp
                                            <span>{{$type->title}} <strong class="{{$trClass}}">{{$countProperty}}</strong></span>
                                        @php if($trClass=='_blue'){ $trClass='_aqua'; }else{ $trClass='_blue'; }  @endphp
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                       
                        @if(session('role')==1)
                            <div class="col-md-4">
                                <div class="item">
                                    <h3>Total Users</h3>
                                    <p>{{$users}}</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                        @else
                            <div class="col-md-6">
                        @endif
                                <div class="item">
                                    <h3>Blogs</h3>
                                    <p>{{$posts}}</p>
                                </div>
                            </div>
                  
                        </div>
                    </div>
                    <!-- <div class="prop-score">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="block-ocp">
                                    <p>Reservations (Renting)</p>
                                    <span class="occp_rate">0</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="block-ocp">
                                    <p>Reservations (Selling)</p>
                                    <span>0</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="block-ocp">
                                    <p>All Reservations</p>
                                    <span>0</span>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="report-charts">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="chart-block newupdate-chart3">
                                    <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                        <div class="chartjs-size-monitor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                            <div style="position: absolute; width: 1000000px; height: 1000000px; left: 0; top: 0;"></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                            <div style="position: absolute; width: 200%; height: 200%; left: 0; top: 0;"></div>
                                        </div>
                                    </div>
                                    <div class="chart-monthly">
                                        <h2 class="chtitle">Properties Graph <span class="yearname4">2023</span></h2>
                                    </div>
                                    <canvas id="barChart4" style="display: block; width: 100%; height: auto;" class="chartjs-render-monitor"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="col-md-3" >-->
            @if(session('role')==1)
            <div class="col-md-3">
                <div class="dashboard-sidebar">
                    
                    <div class="new-users">
                        <h3>Users</h3>
                        <input type="text" id="dashboardSearchUser" placeholder="Search...">
                        <ul class="dashboardSearchUser_UL">
                            @foreach($allUsers as $allUser)
                                <li>
                                    <a href="{{ URL::to('/dashboard/account/users/edit/'.$allUser->id) }}">
                                        @if($allUser->image!='')
                                            <img src="{{ URL::to('uploaded/profiles/'.$allUser->image) }}" width="50" alt="Image" />
                                        @else
                                            <img src="{{ URL::to('dashboard_assets/assets/images/placeholder.png') }}" width="50" alt="Image" />
                                        @endif
                                        <p>@if($allUser->firstname!='' && $allUser->lastname!=''){{$allUser->firstname.' '.$allUser->lastname}}@endif <span style=" margin-top: 5px; ">{{$allUser->email}}</span></p>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@section('scriptsRun')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.0/chart.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
@php
    $Jan=0; $Feb=0; $Mar=0; $Apr=0; $May=0; $Jun=0; $Jul=0; $Aug=0; $Sep=0; $Oct=0; $Nov=0; $Dec=0;
    foreach($allProperties as $allProperty){
        $postDate = date("M", strtotime($allProperty->created_at));
        if($postDate=='Jan'){
            $Jan++;
        }
        if($postDate=='Feb'){
            $Feb++;
        }
        if($postDate=='Mar'){
            $Mar++;
        }
        if($postDate=='Apr'){
            $Apr++;
        }
        if($postDate=='May'){
            $May++;
        }
        if($postDate=='Jun'){
            $Jun++;
        }
        if($postDate=='Jul'){
            $Jul++;            
        }   
        if($postDate=='Aug'){
            $Aug++;            
        }
        if($postDate=='Sep'){
            $Sep++;            
        }
        if($postDate=='Oct'){
            $Oct++;            
        }
        if($postDate=='Nov'){
            $Nov++;            
        }
        if($postDate=='Dec'){
            $Dec++;            
        }
    }
@endphp
<script>
// Revenue MoM
canvas = document.querySelector('#barChart4'); 
ctx3 = canvas.getContext('2d');
ctx3.canvas.width = $('.newupdate-chart3').width(); 
ctx3.canvas.height = $('.newupdate-chart3').height(); 
var barChart3 = new Chart(ctx3, {
  type: 'bar',
  data: {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    datasets: [
    {
      label: 'Property',
      data: [{{$Jan.','.$Feb.','.$Mar.','.$Apr.','.$May.','.$Jun.','.$Jul.','.$Aug.','.$Sep.','.$Oct.','.$Nov.','.$Dec}}],
      backgroundColor: "#182a55",
    },
    ]
  },
   options: {
      legend: {
         labels: {
            fontSize: 16,
            boxWidth: 20,
            boxHeight: 15,
            fontColor: '#182a55',
        }
      },
      tooltips: {
         mode: 'index',
         intersect: false
      },
      scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
      },   
      hover: {
         mode: 'index',
         intersect: false
      }
   }
});

$(document).on('keyup','#dashboardSearchUser',function(){ 
  var searchString = $(this).val();
  $("ul.dashboardSearchUser_UL li").each(function(index, value) {
    currentName = $(value).text()
    if( currentName.toUpperCase().indexOf(searchString.toUpperCase()) > -1) {
      $(value).show();
    } else {
      $(value).hide();
    }
  });
});
</script>
@endsection
@endsection