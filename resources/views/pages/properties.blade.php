@extends('../Layout.master')
@section('body')
<section class="properties-row" id="properties-row">
	<div class="row">
		<div class="col-md-6 p-0">
			<div class="properties-container">
				
				<div class="properties-listing allPropertyListingPage">
					@if($properties->count()==0)
					<div class="row no_properties_appear">
						<div class="col-md-12">
							<div class="half_map_results">{{$properties->count()}} Results found!</div>
							<span class="no_results">We didn't find any results</span>
						</div>
					</div>
					@endif
					@if($properties->count()>0)
					<div class="row">
						
						@foreach($properties as $property)
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
	                            $price=$property->price;
	                            if($property->minimumbooking=='nights'){
	                               $booking='night'; 
	                            }
	                            if($property->minimumbooking=='months'){
	                               $booking='month'; 
	                               $price=$property->priceMonth;
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
	                            
	                            if($search && $checkin!=null){
	                            	$currentDate = date('Y-m-d', strtotime($checkin));
	                            }else{
	                            	$currentDate = date('Y-m-d');
	                            }
	                            for($i=0;$i<count($bookingAvailibilityCheck);$i++){        
								    if($bookingAvailibilityCheck[$i]!=''){
								        $dates=explode(' | ',$bookingAvailibilityCheck[$i]);
								        $currentDate=date('Y-m-d', strtotime($currentDate));
								        $contractDateBegin = date('Y-m-d', strtotime($dates[0]));
								        $contractDateEnd = date('Y-m-d', strtotime($dates[1]));
								        if(($currentDate >= $contractDateBegin) && ($currentDate <= $contractDateEnd)){
								            $currentDate = date('Y-m-d', strtotime($dates[1]. ' +1 day'));
								        }
								    }
								}
								$availableFrom=$currentDate;

							@endphp
							<div class="col-md-6" data-check="{{$currentDate}}">
								<div class="single-listing">
									<div class="single-list-head" >
										@if(false && $property->feature==1)
											<div class="featured-text">featured</div>
										@endif
										<div class="images_property_search_slides">
											<div class="item">
												<a href="{{ URL::to('/property/'.$property->slug) }}"><img src="{{ URL::to('uploaded/properties/'.$property->cover) }}" class="img-fluid"></a>		
											</div>
											@php
												$galleriesAll=explode(",",$property->gallery);
											@endphp
											@for($i=0;$i<count($galleriesAll);$i++)
												@php
													$gallery = \Illuminate\Support\Facades\DB::table('galleries')->where('id',$galleriesAll[$i])->first();
												@endphp
												@if($gallery!=null)
													<div class="item">
														<a href="{{ URL::to('/property/'.$property->slug) }}"><img src="{{ URL::to('uploaded/galleries/'.$gallery->image) }}" class="img-fluid"></a>		
													</div>
												@endif
											@endfor
										</div>
										<div class="list-price">From {{$currency->name}} <span>{{$price}} /{{$booking}}</span></div>
									</div>
									<div class="single-list-text">
										<a href="{{ URL::to('/property/'.$property->slug) }}">
											<h3>{{$property->title}}</h3>
											<div class="single-addons">
												<ul>
													<li>{{$termStay}} / {{$roomtype->title}}</li>
													<li>{{$property->bedrooms}} Bedroom, {{$property->number_bathroom}} Bath and {{$property->size}} sq ft</li>
												</ul>
											</div>
											<div class="list-avaial">
												@if($booking=='month')
													<span>Available <b>{{date("d F Y", strtotime($availableFrom))}}</b></span>
												@else
													<span>Check Availability</span>
												@endif
											</div>
										</a>
									</div>
								</div>
							</div>
						@endforeach

						<div class="custom-pagination">{{ $properties->links() }}</div>
						
					</div>
					@endif
				</div>
			</div>
		</div>
		<div class="col-md-6 p-0">
			<div class="map">
				<div id="map-canvas"></div>
				<script type="text/javascript">
				  var mapDiv = document.getElementById('map-canvas');
				  var map = new google.maps.Map(mapDiv, {
				  	center: new google.maps.LatLng(40.7830603,-73.9712488),
					zoom: 12,
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
	                            $price=$property->price;
	                            if($property->minimumbooking=='nights'){
	                               $booking='night'; 
	                            }
	                            if($property->minimumbooking=='months'){
	                               $booking='month'; 
	                               $price=$property->priceMonth;
	                            }
	                            if(false && $property->feature==1){
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
	                            
	                            if($search && $checkin!=null){
	                            	$currentDate = date('Y-m-d', strtotime($checkin));
	                            }else{
	                            	$currentDate = date('Y-m-d');
	                            }
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

								if($booking=='month'){
									$availableFrom_show='<span>Available <b>'.date("d F Y", strtotime($availableFrom)).'</b></span>';
								}else{
									$availableFrom_show='<span>Check Availability</span>';
								}

								array_push($sliderMaps, [
								        'lat__long' => $property->lat.'__'.$property->lng,
								        'data' => '<div class="single-listing"> <a class="single-list-head" href="/property/'.$property->slug.'">'.$featured.'<img src="'.URL::to('uploaded/properties/'.$property->cover).'" class="img-fluid"> <div class="list-price">From '.$currency->name.' <span>'.$price.' /'.$booking.'</span></div> </a> <div class="single-list-text"> <a href="/property/'.$property->slug.'"> <h3>'.$property->title.'</h3> <div class="single-addons"> <ul> <li>'.$termStay.' / '.$roomtype->title.'</li> <li>'.$property->bedrooms+$property->kingbed+$property->queenbed+$property->doublebed+$property->singlebed.' Bedroom, '.$property->number_bathroom.' Bath and '.$property->size.' sq ft</li> </ul> </div> <div class="list-avaial"> '.$availableFrom_show.' </div> </a> </div> </div>',
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
					  		[ {{$lat}}, {{$lng}} ,'<div class="properties-listing googleMapListing">{!! $result->data !!}</div>'],
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
			</div>
		</div>
	</div>
</section>
@endsection