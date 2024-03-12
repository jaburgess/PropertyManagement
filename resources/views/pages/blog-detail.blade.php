@extends('../Layout.master')
@section('body')
<section class="page-banner blog-banner">
  <div id="map-canvas"></div>
  <script type="text/javascript">
      var mapDiv = document.getElementById('map-canvas');
      var map = new google.maps.Map(mapDiv, {
        center: new google.maps.LatLng(40.7830603,-73.9712488),
        zoom: 4,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        mapTypeControl: false,
        streetViewControl: false,
        gestureHandling: "greedy",
        styles: [ { "elementType": "geometry", "stylers": [ { "color": "#f5f5f5" } ] }, { "elementType": "labels.icon", "stylers": [ { "visibility": "off" } ] }, { "elementType": "labels.text.fill", "stylers": [ { "color": "#616161" } ] }, { "elementType": "labels.text.stroke", "stylers": [ { "color": "#f5f5f5" } ] }, { "featureType": "administrative.land_parcel", "elementType": "labels.text.fill", "stylers": [ { "color": "#bdbdbd" } ] }, { "featureType": "poi", "elementType": "geometry", "stylers": [ { "color": "#eeeeee" } ] }, { "featureType": "poi", "elementType": "labels.text.fill", "stylers": [ { "color": "#757575" } ] }, { "featureType": "poi.park", "elementType": "geometry", "stylers": [ { "color": "#e5e5e5" } ] }, { "featureType": "poi.park", "elementType": "labels.text.fill", "stylers": [ { "color": "#9e9e9e" } ] }, { "featureType": "road", "elementType": "geometry", "stylers": [ { "color": "#ffffff" } ] }, { "featureType": "road.arterial", "elementType": "labels.text.fill", "stylers": [ { "color": "#757575" } ] }, { "featureType": "road.highway", "elementType": "geometry", "stylers": [ { "color": "#dadada" } ] }, { "featureType": "road.highway", "elementType": "labels.text.fill", "stylers": [ { "color": "#616161" } ] }, { "featureType": "road.local", "elementType": "labels.text.fill", "stylers": [ { "color": "#9e9e9e" } ] }, { "featureType": "transit.line", "elementType": "geometry", "stylers": [ { "color": "#e5e5e5" } ] }, { "featureType": "transit.station", "elementType": "geometry", "stylers": [ { "color": "#eeeeee" } ] }, { "featureType": "water", "elementType": "geometry", "stylers": [ { "color": "#91D5E4" } ] }, { "featureType": "water", "elementType": "labels.text.fill", "stylers": [ { "color": "#9e9e9e" } ] } ]
        }); 
      var markerCoords = [
            @php
                $sliderMaps = [];
                foreach($properties as $property){
                    $currency = \Illuminate\Support\Facades\DB::table('currency')->where('id',$property->currency)->first();
                    $roomtype = \Illuminate\Support\Facades\DB::table('properties_roomtype')->where('id',$property->bookingtype)->first();
                    $termStay='';
                    $featured='';
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
                    if($property->feature==1){
                       $featured='<div class="featured-text">featured</div>';
                    }

                    $reservations = \Illuminate\Support\Facades\DB::table('reservation')->where('propertyID',$property->id)->whereIn('status', ['pending','approved'])->get();
                    $bookingAvailibilityCheck = array();
                    foreach($reservations as $reservation){
                        $datesBook='';
                        if($reservation->checkin!=''){
                            $datesBook=$reservation->checkin;
                        }
                        if($reservation->checkout!=''){
                            $datesBook.=' | '.$reservation->checkout;
                        }
                        array_push($bookingAvailibilityCheck, $datesBook);
                    }
                    
                    $currentDate = date('Y-m-d');
                    $availableFrom=$currentDate;
                    for($i=0;$i<count($bookingAvailibilityCheck);$i++){        
                        if($bookingAvailibilityCheck[$i]!=''){
                            $dates=explode(' | ',$bookingAvailibilityCheck[$i]);
                            $currentDate=date('Y-m-d', strtotime($currentDate));
                            $contractDateBegin = date('Y-m-d', strtotime($dates[0]));
                            $contractDateEnd = date('Y-m-d', strtotime($dates[1]));
                            if(($currentDate >= $contractDateBegin) && ($currentDate <= $contractDateEnd)){
                                $currentDate = date('Y-m-d', strtotime($dates[1]. ' +1 day'));
                            }else{
                                $availableFrom=$currentDate;
                            }
                        }
                    }

                    array_push($sliderMaps, [
                            'lat__long' => $property->lat.'__'.$property->lng,
                            'data' => '',
                    ]);
                }
                $res_slider  = array();
                foreach($sliderMaps as $sliderMap){
                  if(array_key_exists($sliderMap['lat__long'],$res_slider)){
                    $res_slider[$sliderMap['lat__long']]['data']    .= $sliderMap['data'];
                    $res_slider[$sliderMap['lat__long']]['lat__long']   = $sliderMap['lat__long'];
                  }
                  else{
                    $res_slider[$sliderMap['lat__long']]  = $sliderMap;
                  }
                }
                $result_slider = array();
                foreach ($res_slider as $item){
                  $result_slider[] = (object) $item;
                }
            @endphp
            @foreach($result_slider as $result)
                @php
                    $lat=explode("__",$result->lat__long)[0];
                    $lng=explode("__",$result->lat__long)[1];
                @endphp
                [ {{$lat}}, {{$lng}} ,''],
            @endforeach
        ];
      var markers = [];
      var marker;
      var infowindow = new google.maps.InfoWindow;
      for(var i = 0, len = markerCoords.length; i < len; i++){
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(markerCoords[i][0], markerCoords[i][1]),
                icon: '{{ asset("assets/img/sale.png") }}',
                label: ''
            });
            markers.push(marker);
            google.maps.event.addListener(marker, "mouseover", (function(marker, i) {
                return function() {
                    infowindow.setContent(markerCoords[i][2]);
                    infowindow.open(map, marker);
                    setTimeout(function() { 
                        $('.mapsliderhover').slick({
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            arrows: true,
                            autoplay: true,
                            dots: false,
                            speed: 1000,
                        });
                    }, 100);
                }
            })(marker, i));

          }
            var clusteroptions = {
                maxZoom: 15,
                styles:[{
                    url: '{{ asset("assets/img/newcircleround2.png") }}',
                    width: 72,
                    height: 72,
                    textColor: '#fff',
                    textSize:15,
                }]

            };
          var markerCluster = new MarkerClusterer(map, markers, clusteroptions,{
            gridSize: 60, 
            maxZoom: 15
          });

  </script>
  <div class="banner-search">
      <form action="{{ route('propertiesSearch') }}" method="POST" class="searchPropertyPage">
        @csrf
        <input type="hidden" name="type" value="all">
        <input type="hidden" name="category" value="">
        <input type="hidden" name="bedrooms" value="0">
        <input type="hidden" name="bathrooms" value="0">
        <input type="hidden" name="price_range" value="USD 0 to USD 50000">
        <input type="hidden" name="apartmentFeature[]" value="">
        <input type="hidden" name="buildingAmenity[]" value="">
        <div class="row">
            <div class="col-md-4">
                <div class="form-control">
                    <i class="custom_icon_class_icon fas fa-map-marker"></i>
                    <input type="text" placeholder="Where do you want to go ?" value="Manhattan, New York, NY, USA" name="properties_location" id="properties_location" required>
                    <input type="hidden" name="lat" id="propertyLat" value="40.7830603" />
                    <input type="hidden" name="lng" id="propertyLong" value="-73.9712488" />
                    <input type="hidden" name="city" id="propertyCity" value="New York" />
                    <input type="hidden" name="state" id="propertyState" value="NY" />
                    <input type="hidden" name="country" id="propertyCountry" value="US" />
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-control">
                    <i class="custom_icon_class_icon fas fa-calendar-alt"></i>
                    <input type="text" placeholder="Check-In" name="checkin" class="properties_checkin" id="properties_checkin" required>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-control">
                    <i class="custom_icon_class_icon fas fa-calendar-alt"></i>
                    <input type="text" placeholder="Check-Out" name="checkout" class="properties_checkin" id="properties_checkout" required>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-control">
                    <i class="custom_icon_class_icon fas fa-user"></i>
                    <input type="text" placeholder="Guest" name="guest" min=0 max=10 id="properties_guest" required>
                </div>
            </div>
            <div class="col-md-2">
                <button type="submit" name="submit">Search</button>
            </div>
        </div>
    </form>
  </div>
</section>
<section class="blog-single">
  <div class="container">
    <div class="row">
      <div class="col-md-12 breadcrumb_container">
        <ol class="breadcrumb">
            <li><a href="{{ route('homePage') }}">Home</a></li>
            <li><a href="{{ route('blogsPage') }}">Blogs</a></li>
            <li class="active"><a href="{{ URL::to('/blog/'.$post->slug) }}">{{$post->title}}</a></li>
        </ol>
      </div>
      <div class="col-md-8">
        <div class="single-content">
          <h1 itemprop="headline" class="entry-title single-title">{{$post->title}}</h1>
          <img src="{{ URL::to('/uploaded/posts/'.$post->image) }}" class="img-fluid">
          {!! $post->description !!}
          <div class="meta-info">
            <div class="meta-element">
              @php
                $categories=explode(",",$post->category);
                $tags=explode("/seperator/",$post->tag);
                $allCategories=array();
                for($i=0;$i<count($categories);$i++){
                    if($categories[$i]!=''){
                        $category = \Illuminate\Support\Facades\DB::table('posts_category')->where('id',$categories[$i])->first();
                        if($category!=null){
                            array_push($allCategories,$category->title);
                        }
                    }
                }
              @endphp
              <strong>Category: </strong>
              <a>{{implode(', ',$allCategories)}}</a>
              <br>
              <strong>Tags: </strong>
              <a>{{implode(', ',$tags)}}</a>
            </div>
            <div class="prop_social">
              <span class="prop_social_share">Share</span>
                <a href="https://www.facebook.com/sharer/sharer.php?u={{URL::to('/blog/'.$post->slug)}}" target="_blank" class="share_facebook" rel="noreferrer"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/intent/tweet?url={{URL::to('/blog/'.$post->slug)}}" class="share_tweet" target="_blank" rel="noreferrer"><i class="fab fa-twitter"></i></a>
                <a href="mailto:info@hotelsystem.com?&subject={{$post->title}}&bcc=&body={{URL::to('/blog/'.$post->slug)}}" class="share_email" target="_blank" rel="noreferrer"><i class="far fa-envelope"></i></a>
                <a href="https://pinterest.com/pin/create/button/?url={{URL::to('/blog/'.$post->slug)}}" target="_blank" rel="noreferrer" class="share_pinterest"><i class="fab fa-pinterest-p fa-2"></i> </a>
            </div>
          </div>
        </div>
        <div class="related-posts">
            <h3 class="panel-title">Related Posts</h3>
            <div class="blog_list_wrapper">
                
               @foreach($recentPosts as $recentPost)
                    @php
                        $totalComments = \Illuminate\Support\Facades\DB::table('replayBlog')->where('type','blog')->where('typeID',$recentPost->id)->count();
                    @endphp             
                   <div class="single-blog">
                       <a href="{{ URL::to('/blog/'.$recentPost->slug) }}">
                           <div class="top-image">
                               <img src="{{ URL::to('/uploaded/posts/'.$recentPost->image) }}" class="img-fluid">
                           </div>
                           <div class="bottom-txt">
                               <h3>{{$recentPost->title}}</h3>
                                @if(strlen($recentPost->description)>170)
                                    {!! substr($recentPost->description, 0, 170) !!}...
                                @else
                                    {!! $recentPost->description !!}
                                @endif
                               <div class="category_tagline">
                                    <span class="span_widemeta"> {{date("F d, Y", strtotime($recentPost->created_at))}}</span> , 
                                    <span class="span_widemeta span_comments"><i class="far fa-comment"></i> {{$totalComments}}</span>
                                </div>
                           </div>
                       </a>
                   </div>
               @endforeach
             
           </div>

           <div id="commentReplies">
            @if($replayBlogCount>0)
               <h2>Reviews:</h2>
               <ul>
                   @foreach($replayBlogs as $replayBlog)
                   <li>
                       <h3>{{$replayBlog->author}}</h3>
                       <h4>on {{date("d F Y", strtotime($replayBlog->created_at))}}</h4>
                       <h5>
                            <i class="fa fa-star @if($replayBlog->review>4) active @endif" data-id=5></i>
                            <i class="fa fa-star @if($replayBlog->review>3) active @endif" data-id=4></i>
                            <i class="fa fa-star @if($replayBlog->review>2) active @endif" data-id=3></i>
                            <i class="fa fa-star @if($replayBlog->review>1) active @endif" data-id=2></i>
                            <i class="fa fa-star @if($replayBlog->review>0) active @endif" data-id=1></i>
                       </h5>
                       <p>{{$replayBlog->comment}}</p>
                   </li>
                   @endforeach
               </ul>
            @endif
           </div>

            <div id="comments">
              <div id="respond" class="comment-respond">
                <h3 id="reply-title" class="panel-title">Leave a review</h3>
                <form method="post" id="commentform" class="comment-form blog_replies">
                  @csrf
                  <input type="hidden" name="type" value="blog">
                  <input type="hidden" name="review" id="reviewInput" value="0" />
                  <input type="hidden" name="blogID" value="{{$post->id}}" />
                  <p class="comment-notes">Your email address will not be published. </p>
                  <p class="review_stars">
                    <label>Rating:</label>
                    <span data-id=0>
                        <i class="fa fa-star" data-id=5></i>
                        <i class="fa fa-star" data-id=4></i>
                        <i class="fa fa-star" data-id=3></i>
                        <i class="fa fa-star" data-id=2></i>
                        <i class="fa fa-star" data-id=1></i>
                    </span>
                  </p>
                  <p class="comment-form-comment">
                    <label for="comment"></label>
                    <textarea id="comment" class="form-control" name="comment" cols="45" rows="8" aria-required="true" placeholder="Comment" required></textarea>
                  </p>
                  <p class="comment-form-author">
                    <input id="author" name="author" type="text" class="form-control" value="" size="30" aria-required="true" placeholder="Name" required>
                  </p>
                  <p class="comment-form-email">
                    <input id="email" name="email" type="text" class="form-control" value="" size="30" aria-required="true" placeholder="Email" required>
                  </p>
                  <p class="comment-form-url">
                    <input id="url" name="url" type="text" class="form-control" value="" size="30" placeholder="Website" required>
                  </p>
                  <p class="comment-form-cookies-consent">
                    <input id="wp-comment-cookies-consent" name="save_details" type="checkbox" value="yes">
                    <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I leave review.</label>
                  </p>
                  <p class="form-submit">
                    <input name="submit" type="submit" id="submit" class="submit" value="Post Review">
                  </p>
                </form>
              </div>
              <!-- #respond -->
            </div>
        </div>
      </div>
      <div class="col-md-4">
        
        <div class="sidebar-widget">
          <h4>Featured Listing</h4>
          <div class="properties-side-listing">
            
            @foreach($featureLinstings as $featureLinsting)
                @php
                    $currency = \Illuminate\Support\Facades\DB::table('currency')->where('id',$featureLinsting->currency)->first();
                    $booking='day';
                    $price=$featureLinsting->price;
                    if($featureLinsting->minimumbooking=='nights'){
                       $booking='night'; 
                    }
                    if($featureLinsting->minimumbooking=='months'){
                       $booking='month'; 
                       $price=$featureLinsting->priceMonth;
                    }
                @endphp
                <div class="single-side">
                    <div class="left-side">
                        <a class="single-list-head" href="{{ URL::to('/property/'.$featureLinsting->slug) }}">
                            <img src="{{ URL::to('uploaded/properties/'.$featureLinsting->cover) }}" class="img-fluid">
                        </a>
                    </div>
                    <div class="right-side">
                        <a class="single-list-head" href="{{ URL::to('/property/'.$featureLinsting->slug) }}">
                            <h3>{{$featureLinsting->title}}</h3>
                            <p>{{$featureLinsting->zipcode}} {{$featureLinsting->city}} {{$featureLinsting->state}}, {{$featureLinsting->country}}</p>
                            <p class="price">
                              <strong>{{$currency->name}} {{$price}} </strong>/{{$booking}}
                            </p>
                        </a>
                    </div>
                </div>
            @endforeach

          </div>
        </div>

        <div class="sidebar-widget">
          <h4>Latest Listings</h4>
          <div class="properties-side-listing">
           
            @foreach($latestLinstings as $latestLinsting)
                @php
                    $currency = \Illuminate\Support\Facades\DB::table('currency')->where('id',$latestLinsting->currency)->first();
                    $booking='day';
                    $price=$latestLinsting->price;
                    if($latestLinsting->minimumbooking=='nights'){
                       $booking='night'; 
                    }
                    if($latestLinsting->minimumbooking=='months'){
                       $booking='month';
                       $price=$latestLinsting->priceMonth; 
                    }
                @endphp
                <div class="single-side">
                    <div class="left-side">
                        <a class="single-list-head" href="{{ URL::to('/property/'.$latestLinsting->slug) }}">
                            <img src="{{ URL::to('uploaded/properties/'.$latestLinsting->cover) }}" class="img-fluid">
                        </a>
                    </div>
                    <div class="right-side">
                        <a class="single-list-head" href="{{ URL::to('/property/'.$latestLinsting->slug) }}">
                            <h3>{{$latestLinsting->title}}</h3>
                            <p>{{$latestLinsting->zipcode}} {{$latestLinsting->city}} {{$latestLinsting->state}}, {{$latestLinsting->country}}</p>
                            <p class="price">
                              <strong>{{$currency->name}} {{$price}} </strong>/{{$booking}}
                            </p>
                        </a>
                    </div>
                </div>
            @endforeach

          </div>
        </div>
  
      </div>
    </div>
  </div>
</section>
<script type="text/javascript">
window.addEventListener("DOMContentLoaded", function(){
    $('form#commentform p.review_stars span i').click(function(){
        $('form#commentform p.review_stars span').attr('data-id',$(this).attr('data-id'));
        $('form#commentform input#reviewInput').val($(this).attr('data-id'));
    });
    $('form#commentform input#author').val(localStorage.getItem('commentName'));
    $('form#commentform input#email').val(localStorage.getItem('commentEmail'));
    $('form#commentform input#url').val(localStorage.getItem('commentWebsite'));
    if(localStorage.getItem('saveData')=='yes'){
        $('input#wp-comment-cookies-consent').prop('checked', true);
    }
    $('form#commentform').submit(function(e){
        e.preventDefault();
        var saveData = $('input#wp-comment-cookies-consent:checked').val();
        if(saveData=='yes'){
            var commentName = $('form#commentform input#author').val();
            var commentEmail = $('form#commentform input#email').val();
            var commentWebsite = $('form#commentform input#url').val();
            localStorage.setItem('commentName', commentName);
            localStorage.setItem('commentEmail', commentEmail);
            localStorage.setItem('commentWebsite', commentWebsite);
            localStorage.setItem('saveData', saveData);
        }else{
            localStorage.setItem('commentName', '');
            localStorage.setItem('commentEmail', '');
            localStorage.setItem('commentWebsite', '');
            localStorage.setItem('saveData', '');
        }
        $.ajax({  
            type: 'POST',
            url: "{{ route('blogReplyForm') }}",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
            },
            success: function(data){
                if(data=='success'){
                    $('form#commentform').trigger("reset");
                    swal('Review submitted. After approval it will show in reviews.');
                }
            }
        });
    });
});    
</script>
@endsection