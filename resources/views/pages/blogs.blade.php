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

<section class="blogs listing">
    <div class="container">
        <div class="row">
            <div class="col-md-12 breadcrumb_container">
                <ol class="breadcrumb">
                    <li><a href="{{ route('homePage') }}">Home</a></li>
                    <li class="active"><a href="{{ route('blogsPage') }}">Blogs</a></li>
                </ol>
           </div>
           <div class="col-md-12">
               <div class="blog_list_wrapper">
                
                @foreach($posts as $post)
                    @php
                        $totalComments = \Illuminate\Support\Facades\DB::table('replayBlog')->where('type','blog')->where('typeID',$post->id)->count();
                    @endphp   
                   <div class="single-blog">
                       <a href="{{ URL::to('/blog/'.$post->slug) }}">
                           <div class="top-image">
                               <img src="{{ URL::to('/uploaded/posts/'.$post->image) }}" class="img-fluid">
                           </div>
                           <div class="bottom-txt">
                               <h3>{{$post->title}}</h3>
                               @if(strlen($post->description)>170)
                                    {!! substr($post->description, 0, 170) !!}...
                                @else
                                    {!! $post->description !!}
                                @endif
                               <div class="category_tagline">
                                    <span class="span_widemeta"> {{date("F d, Y", strtotime($post->created_at))}}</span> , 
                                    <span class="span_widemeta span_comments"><i class="far fa-comment"></i> {{$totalComments}}</span>
                                </div>
                           </div>
                       </a>
                   </div>

                @endforeach
                   
               </div>
               
               <div class="custom-pagination">{{ $posts->links() }}</div>

           </div>
        </div>
    </div>
</section>
@endsection