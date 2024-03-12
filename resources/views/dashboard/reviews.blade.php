@extends('../dashboardLayouts.master')
@section('body')

<div class="dashboardProperties">
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}"><i class="metismenu-icon pe-7s-rocket"></i> Dashboard</a></li>
        <li class="breadcrumb-item active">Reviews</li>
    </ol>

    <div class="table_header">
        <div class="left">
        </div>
        <div class="right">
            <ul>
                <li>
                    <a href="{{ route('dashboardReviews') }}">Reload</a>
                </li>
            </ul>
        </div>
    </div>
    <table class="table table-striped table-hover vertical-middle dataTable no-footer dtr-inline" id="botble-real-estate-tables-property-table">
        <thead>
            <tr role="row">
                <th>#</th>
                <th>Type</th>
                <th>Type Detail</th>
                <th>Reviewer Name</th>
                <th>Rating</th>
                <th>Detail</th>
                <th>Created At</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
           @php $trClass='odd'; $index=1; @endphp
            @foreach($reviews as $review)
                @php
                    $property=null;
                    $blog=null;
                    if($review->type=='property'){
                        $property = \Illuminate\Support\Facades\DB::table('properties')->where('id',$review->typeID)->first();
                    }
                    if($review->type=='blog'){
                        $blog = \Illuminate\Support\Facades\DB::table('posts')->where('id',$review->typeID)->first();
                    }
                @endphp
                @if(($property!=null && $property->user_id==session('id')) || ($blog!=null && $blog->user_id==session('id')) || session('id')==1)
                    <tr role="row" class="{{$trClass}}">
                        <td>{{$index}}</td>
                        <td>{{ucfirst($review->type)}}</td>
                        <td>
                            @if($property!=null)
                                @php
                                    $currency = \Illuminate\Support\Facades\DB::table('currency')->where('id',$property->currency)->first();
                                    $roomtype = \Illuminate\Support\Facades\DB::table('properties_roomtype')->where('id',$property->bookingtype)->first();
                                    $termStay='';
                                    if($property->minimumbooking=='nights' || $property->minimumbooking=='days'){
                                       $termStay='Short Term Stay'; 
                                    }
                                    if($property->minimumbooking=='months'){
                                       $termStay='Long Term Stay'; 
                                    }
                                    $booking='day';
                                    if($property->minimumbooking=='nights'){
                                       $booking='night'; 
                                    }
                                    if($property->minimumbooking=='months'){
                                       $booking='month'; 
                                    }
                                @endphp
                                <div class="favourite_property">
                                    <img src="{{ URL::to('uploaded/properties/'.$property->cover) }}" class="img-fluid">
                                    <div>
                                        <h3>{{$property->title}}</h3>
                                        <ul>
                                            <li>{{$termStay}} / {{$roomtype->title}}</li>
                                            <li>{{$property->bedrooms}} Bedroom, {{$property->number_bathroom}} Bath and {{$property->size}} sq ft</li>
                                        </ul>
                                    </div>
                                </div>
                            @endif
                            @if($blog!=null)
                                @php
                                    $posts_category = \Illuminate\Support\Facades\DB::table('posts_category')->whereIn('id',explode(',',$blog->category))->get();
                                @endphp
                                <div class="favourite_property">
                                    <img src="{{ URL::to('uploaded/posts/'.$blog->image) }}" class="img-fluid">
                                    <div>
                                        <h3>{{$blog->title}}</h3>
                                        @if($posts_category!=null)
                                        <ul>
                                            @foreach($posts_category as $post_category)
                                                <li>{{$post_category->title}}</li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </td>
                        <td>{{$review->author}}</td>
                        <td>{{$review->review}}</td>
                        <td><div class="table-actions"><a data-toggle="modal" data-target=".reviewDetail{{$review->id}}" class="btn btn-icon btn-sm btn-info">Detail</a></div></td>
                        <td>{{date('F d, Y', strtotime($review->created_at))}}</td>
                        <td>
                            <div class="table-actions">
                                @if($review->status=='pending')
                                <a href="{{ URL::to('/dashboard/reviews/approve/'.$review->id) }}" class="btn btn-icon btn-sm btn-success">
                                    <i class="fa fa-check"></i> Approve
                                </a>
                                @endif
                                <a action-delete="{{ URL::to('/dashboard/reviews/delete/'.$review->id) }}" class="btn btn-icon btn-sm btn-danger deleteDialog deleteQueryOperation">
                                    <i class="fa fa-trash"></i> Remove Review
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
@foreach($reviews as $review)
<div class="modal fade modalshg reviewDetail{{$review->id}}" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="display:none;">
    <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Review Detail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="review_detail">
                       <h3>{{$review->author}}</h3>
                       <h4>on {{date("d F Y", strtotime($review->created_at))}}</h4>
                       <h5>
                            <i class="fa fa-star @if($review->review>4) active @endif" data-id=5></i>
                            <i class="fa fa-star @if($review->review>3) active @endif" data-id=4></i>
                            <i class="fa fa-star @if($review->review>2) active @endif" data-id=3></i>
                            <i class="fa fa-star @if($review->review>1) active @endif" data-id=2></i>
                            <i class="fa fa-star @if($review->review>0) active @endif" data-id=1></i>
                       </h5>
                       <p>{{$review->comment}}</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
     </div>
</div>
@endforeach