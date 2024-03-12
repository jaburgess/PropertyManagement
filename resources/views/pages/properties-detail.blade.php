@extends('../Layout.master')
@section('body')
@php
	$galleriesAll=explode(",",$property->gallery);
	$booking='night';
	$booking_table='Daily';
  $mainPrice=$property->price;
    if($property->minimumbooking=='night'){
       $booking='night'; 
       $booking_table='Night';
    } 
    if($property->minimumbooking=='months'){
       $booking='month'; 
       $booking_table='Monthly';
       $mainPrice=$property->priceMonth;
    }
    $currency = \Illuminate\Support\Facades\DB::table('currency')->where('id',$property->currency)->first();
@endphp
<style type="text/css">
.daterangepicker.ltr.show-calendar.opensleft {
    display: none !important;
}
/*For Updated Datepicker Css */
.daterangepicker {
    left: 49.4% !important;
    width: 598px !important;
    top: 700px !important;
    border: none;
    box-shadow: none !important;
    border-radius: 0;
    font-family: 'Hero' !important;
    right: 0;
    display: block !important;
    position: unset !important;
}
.daterangepicker .drp-calendar {
    width: 45%;
    max-width: 50%;
}
.daterangepicker .drp-buttons {
    display: none !important;
} 
.daterangepicker * {
    font-family: 'Hero';
} 
</style>
<div class="properties-banner-top"> 
	<div class="properties-banner">
		<div class="property-slide">
			<a href="{{ URL::to('uploaded/properties/'.$property->cover) }}" data-fancybox="property_gallery">
				<img src="{{ URL::to('uploaded/properties/'.$property->cover) }}" class="img-fluid">
			</a>
		</div>
		@for($i=0;$i<count($galleriesAll);$i++)
		@php
			$gallery = \Illuminate\Support\Facades\DB::table('galleries')->where('id',$galleriesAll[$i])->first();
		@endphp
		@if($gallery!=null && $gallery->image!=null && $gallery->image!='')
			<div class="property-slide">
				<a href="{{ URL::to('uploaded/galleries/'.$gallery->image) }}" data-fancybox="property_gallery">
					<img src="{{ URL::to('uploaded/galleries/'.$gallery->image) }}" class="img-fluid">
				</a>
			</div>
		@endif
		@endfor
	</div>
	<!-- <div class="list-price"></div> -->
</div>

<!-- Contact Owner Property Inner Page Modal -->
<div class="modal fade" id="contactOwnerModal" tabindex="-1" aria-labelledby="contactOwnerModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
      <div class="modal-body">
        <div class="contact_modal_wrapper">
          <h2>Booking Information</h2>
          <p> Please complete the form below to fill information.</p>
        </div>
        <form id="contactTheOwnerForm" method="POST" class="contact_popup searchPropertyPage">
          @csrf
          <input type="hidden" name="propertyID" value="{{$property->id}}">
          <div class="form-control">
            <input type="text" name="name" placeholder="Your Name" required>
          </div>
          <div class="form-control">
            <input type="email" name="email" placeholder="Your Email" required>
          </div>
          <div class="form-control">
            <input type="tel" name="phone" placeholder="Your Phone" required>
          </div>
          <div class="form-control">
            <textarea name="message" id="message" placeholder="Description"></textarea>
          </div>
          <button type="submit" name="submit" >Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

<section class="property-inner">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="property-tab-1">
          <div class="property__name">
            @if($property->publishlisting=='Exact Address')
              {{$property->location}}
            @else
              {{$property->nearestcrossstreet}}
              @if($property->nearestcrossstreet2!='')& {{$property->nearestcrossstreet2}}@endif
            @endif
            @if($property->neighborhood!='')| {{$property->neighborhood}}@endif
          </div>
          <h3 class="property__title">{{$property->title}}</h3>
          <div class="property__amenities-container" style=" margin-top: 30px; ">
            <div class="property__amenities-list" style=" display: block; ">
              <div class="property__amenities-list-item-with-icon category_details_wrapper">
                  <span class="bedrooms_header_icon">{{$property->bedrooms}} Bedroom @if($property->kingbed!=0 || $property->queenbed!=0 || $property->doublebed!=0 || $property->singlebed!=0 || $property->bedrooms!=0)(@if($property->kingbed!=0)<i>{{$property->kingbed.' King Bed'}}</i>@endif @if($property->queenbed!=0)<i>{{$property->queenbed.' Queen Bed'}}</i>@endif @if($property->doublebed!=0)<i>{{$property->doublebed.' Double Bed'}}</i>@endif @if($property->singlebed!=0)<i>{{$property->singlebed.' Single Bed'}}</i>@endif @if($property->bedrooms!=0)<i>{{$property->bedrooms.' Sofa Bed'}}</i>@endif)@endif</span>
                  <span class="bathrooms_header_icon">{{$property->number_bathroom}} Bath</span>
		          </div>
            </div>
            <div class="property__amenities-list">
              <div class="property__amenities-list-row-container">
                <span class="property__amenities-list-item with-divider">{{$property->size}} ft²</span>
                <span class="property__amenities-list-item with-divider">{{$property->number_guests}} Guest</span>
              </div>
            </div>
          </div>
          
          <section class="description">
            <div class="description__title">
              <h2 class="heading-4">Description</h2>
            </div>
            <div class="description__sections" data-test-id="description-section">
              <div class="description__section">
                {!! $property->description !!}
              </div>
            </div>
          </section>

          <section class="property__amenities">
            <h2 class="heading-4">Amenities</h2>
            
            @php
							$apartmentFeatures=explode(",",$property->apartmentFeatures);
						@endphp 
						@if(count($apartmentFeatures)>0)

            <div class="property-amenities u-mgt--5 u-pdb--1">
              <div class="body-text-large--semibold">Apartment</div>
              <div class="property-amenities__list property-amenities__list--row">
                
                 @for($i=0;$i<count($apartmentFeatures);$i++)
							   @php
									$amenity = \Illuminate\Support\Facades\DB::table('properties_amenity')->where('id',$apartmentFeatures[$i])->first();
                 @endphp
								 @if($amenity!=null)
                    <div class="amenity-item property-amenities__item">
		                  <i class="{{$amenity->image}}"></i>
		                  <div class="amenity-item__container">
		                    <div class="amenity-item__title">
		                      <span class="amenity-item_caption">{{$amenity->title}}</span>
		                    </div>
		                  </div>
		                </div>
							   @endif
                 @endfor
              
              </div>
            </div>

            @endif

            @php
							$buildingAmenities=explode(",",$property->buildingAmenities);
						@endphp 
						@if(count($buildingAmenities)>0)

            <div class="property-amenities u-mgt--5 u-pdb--1">
              <div class="body-text-large--semibold">Building</div>
              <div class="property-amenities__list property-amenities__list--row">
                
                @for($i=0;$i<count($buildingAmenities);$i++)
						   	@php
									$building = \Illuminate\Support\Facades\DB::table('properties_buildingAmenities')->where('id',$buildingAmenities[$i])->first();
						   	@endphp
                @if($building!=null)
							    <div class="amenity-item property-amenities__item">
	                  <i class="{{$building->image}}"></i>
	                  <div class="amenity-item__container">
	                    <div class="amenity-item__title">
	                      <span class="amenity-item_caption">{{$building->title}}</span>
	                    </div>
	                  </div>
	                </div>
                @endif
						   	@endfor
              
              </div>
            </div>

            @endif

          </section>

          <section class="description">
            <div class="description__title">
              <h2 class="heading-4">Cancellation Policy</h2>
            </div>
            <div class="description__sections" data-test-id="description-section">
              <div class="description__section">
                <p>{{$property->cancellationpolicy}}</p>
              </div>
            </div>
          </section>

          @php
						$services=explode(",",$property->services);
					@endphp
					@if(count($services)>0)

          <section>
            <div class="things-to-know">
            
              <section>
                <div class="u-mgb--4">
                  <h1 class="heading-4">Services</h1>
                </div>
                <div class="things-to-know__content" style=" display: flex; flex-direction: unset; ">
                 
                	@for($i=0;$i<count($services);$i++)
               			@php
               				$properties_service = \Illuminate\Support\Facades\DB::table('properties_service')->where('id',$services[$i])->first();
               			@endphp

                    @if($properties_service!=null)
                    <div class="rule" style=" display: inline-block; width: 33%; ">
                      <div class="u-mgr--2">
                      	@if($properties_service->image!='')
                        	<img src="{{ URL::to('uploaded/properties/'.$properties_service->image) }}" alt="Service Image" style="width: 100%;height: 170px;object-fit: cover;">
               					@else
               						<img src="{{ URL::to('dashboard_assets/assets/images/placeholder.png') }}" alt="Service Image" style="width: 100%;height: 170px;object-fit: cover;">
               					@endif
                      </div>
                      <div class="rule__description" style="text-align: center;line-height: 20px;margin-top: 15px;">{{$properties_service->title}}</div>
                    </div>
                    @endif

                  @endfor
                 
                 </div>
              </section>
            
            </div>
          </section>

          @endif

         	<section>
        
          @if($property->video!='')
        
            <div class="things-to-know">
            
              <!-- <section>
                <div class="u-mgb--4">
                  <h1 class="heading-4">Video</h1>
                </div>
                <div class="things-to-know__content">
                 
                  <div class="rule" style=" width: 100%;     margin-bottom: 0px;">
                    <div class="u-mgr--2" style=" width: 100%; ">
                    		<video width="320" height="240" style="width:100%;object-fit: cover;height: auto;" controls>
													  <source src="{{ URL::to('uploaded/properties/'.$property->video) }}" >
												</video>
                    </div>
                  </div>
                 
                 </div>
              </section> -->
            
            </div>
        
          @endif

          @if($property->document!='')
         
            <div class="things-to-know">
            
              <section>
                <div class="u-mgb--4">
                  <h1 class="heading-4">Documents</h1>
                </div>
                <div class="things-to-know__content">
                 
                  <div class="rule">
                    <div class="u-mgr--2">
                    		<a href="{{ URL::to('uploaded/properties/'.$property->document) }}" download class="document" style="background: #182a55; color: #fff; border-radius: 100px; padding: 10px 40px; font-size: 14px;">Download</a>
                    </div>
                  </div>
                 
                 </div>
              </section>
            
            </div>

            @endif

            @php
							$terms=explode("/seperator/",$property->terms);
						@endphp
						
                <br><br>
				

				

						<div class="things-to-know" style="margin-top: 0px;">
            
              <section>
                <div class="u-mgb--4">
                  <h1 class="heading-4">Availabile Booking Dates</h1>
                </div>
                <div class="things-to-know__content">
                 
                  <div class="rule" style="width: 100%;">
                    <div class="u-mgr--2" style="width: 100%;">
                    		<div id="availabilityShowCalender"></div>
                    </div>
                  </div>
                 
                 </div>
              </section>
            
            </div>

						<div class="things-to-know" style="margin-top: 0px;">
            
              <section>
                <div class="u-mgb--4">
                  <h1 class="heading-4">On the Map</h1>
                </div>
                <div class="things-to-know__content">
                 
                  <div class="rule" style="width: 100%;">
                    <div class="u-mgr--2" style="width: 100%;">
                    		  <div style="width:100%;height:400px;" id="property-full-address-map"></div>
                          <script type="text/javascript">
                              var mapDiv = document.getElementById('property-full-address-map');
                              var map = new google.maps.Map(mapDiv, {
                                center: new google.maps.LatLng({{$property->lat}}, {{$property->lng}}),
                                zoom: 14,
                                mapTypeId: google.maps.MapTypeId.ROADMAP,
                                mapTypeControl: false,
                                streetViewControl: false,
                                gestureHandling: "greedy",
                                styles: [ { "elementType": "geometry", "stylers": [ { "color": "#f5f5f5" } ] }, { "elementType": "labels.icon", "stylers": [ { "visibility": "off" } ] }, { "elementType": "labels.text.fill", "stylers": [ { "color": "#616161" } ] }, { "elementType": "labels.text.stroke", "stylers": [ { "color": "#f5f5f5" } ] }, { "featureType": "administrative.land_parcel", "elementType": "labels.text.fill", "stylers": [ { "color": "#bdbdbd" } ] }, { "featureType": "poi", "elementType": "geometry", "stylers": [ { "color": "#eeeeee" } ] }, { "featureType": "poi", "elementType": "labels.text.fill", "stylers": [ { "color": "#757575" } ] }, { "featureType": "poi.park", "elementType": "geometry", "stylers": [ { "color": "#e5e5e5" } ] }, { "featureType": "poi.park", "elementType": "labels.text.fill", "stylers": [ { "color": "#9e9e9e" } ] }, { "featureType": "road", "elementType": "geometry", "stylers": [ { "color": "#ffffff" } ] }, { "featureType": "road.arterial", "elementType": "labels.text.fill", "stylers": [ { "color": "#757575" } ] }, { "featureType": "road.highway", "elementType": "geometry", "stylers": [ { "color": "#dadada" } ] }, { "featureType": "road.highway", "elementType": "labels.text.fill", "stylers": [ { "color": "#616161" } ] }, { "featureType": "road.local", "elementType": "labels.text.fill", "stylers": [ { "color": "#9e9e9e" } ] }, { "featureType": "transit.line", "elementType": "geometry", "stylers": [ { "color": "#e5e5e5" } ] }, { "featureType": "transit.station", "elementType": "geometry", "stylers": [ { "color": "#eeeeee" } ] }, { "featureType": "water", "elementType": "geometry", "stylers": [ { "color": "#91D5E4" } ] }, { "featureType": "water", "elementType": "labels.text.fill", "stylers": [ { "color": "#9e9e9e" } ] } ]
                              }); 
                              var markerCoords = [
                                    [ {{$property->lat}}, {{$property->lng}} ,''],
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
            
            </div>

            <div class="things-to-know" style="margin-top: 0px;">
            
              <section>
                <!-- <div class="u-mgb--4">
                  <h1 class="heading-4">Public Transportation</h1>
                </div> -->
                <div class="things-to-know__content">
                 
                  <div class="rule" style="width: 100%;">
                    <div class="u-mgr--2" style="width: 100%;">
                    		
                    		<div class="map-box nearbyplaces">
                    		<!-- nearbyplaces start -->
                    		<!-- <div class="google_map_on_list_wrapper">
												    @php
												        $curl = curl_init();
												        curl_setopt_array($curl, array(
												          CURLOPT_URL => 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?location='.$property->lat.','.$property->lng.'&radius=2000&type=subway_station&sensor=false&key=AIzaSyBGEZwRuLPebN1skjbwTIIXlnrB8Q5ZDkk',
												          CURLOPT_RETURNTRANSFER => true,
												          CURLOPT_ENCODING => '',
												          CURLOPT_MAXREDIRS => 10,
												          CURLOPT_TIMEOUT => 0,
												          CURLOPT_FOLLOWLOCATION => true,
												          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
												          CURLOPT_CUSTOMREQUEST => 'GET',
												          CURLOPT_HTTPHEADER => array(
												            'origin: "*"',
												            'methods: "GET,PUT,POST,DELETE"'
												          ),
												        ));
												        $response = curl_exec($curl);
												        curl_close($curl);
												        $response=json_decode($response,true);
												        $responseResults=$response['results'];

												        $curl = curl_init();
												        curl_setopt_array($curl, array(
												          CURLOPT_URL => 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?location='.$property->lat.','.$property->lng.'&radius=2000&type=bus_station&sensor=false&key=AIzaSyBGEZwRuLPebN1skjbwTIIXlnrB8Q5ZDkk',
												          CURLOPT_RETURNTRANSFER => true,
												          CURLOPT_ENCODING => '',
												          CURLOPT_MAXREDIRS => 10,
												          CURLOPT_TIMEOUT => 0,
												          CURLOPT_FOLLOWLOCATION => true,
												          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
												          CURLOPT_CUSTOMREQUEST => 'GET',
												          CURLOPT_HTTPHEADER => array(
												            'origin: "*"',
												            'methods: "GET,PUT,POST,DELETE"'
												          ),
												        ));
												        $response = curl_exec($curl);
												        curl_close($curl);
												        $response=json_decode($response,true);
												        $responseResults2=$response['results'];

												        $curl = curl_init();
												        curl_setopt_array($curl, array(
												          CURLOPT_URL => 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?location='.$property->lat.','.$property->lng.'&radius=2000&type=airport&sensor=false&key=AIzaSyBGEZwRuLPebN1skjbwTIIXlnrB8Q5ZDkk',
												          CURLOPT_RETURNTRANSFER => true,
												          CURLOPT_ENCODING => '',
												          CURLOPT_MAXREDIRS => 10,
												          CURLOPT_TIMEOUT => 0,
												          CURLOPT_FOLLOWLOCATION => true,
												          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
												          CURLOPT_CUSTOMREQUEST => 'GET',
												          CURLOPT_HTTPHEADER => array(
												            'origin: "*"',
												            'methods: "GET,PUT,POST,DELETE"'
												          ),
												        ));
												        $response = curl_exec($curl);
												        curl_close($curl);
												        $response=json_decode($response,true);
												        $responseResults3=$response['results'];

												        function distance($lat1, $lon1, $lat2, $lon2, $unit) {
												        	$theta = $lon1 - $lon2;
																  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
																  $dist = acos($dist);
																  $dist = rad2deg($dist);
																  $miles = $dist * 60 * 1.1515;
																  $unit = strtoupper($unit);
																  if ($unit == "K") {
																      return number_format((float)($miles * 1.609344), 2, '.', '');
																  } else if ($unit == "N") {
																      return number_format((float)($miles * 0.8684), 2, '.', '');
																  } else {
																      return number_format((float)$miles, 2, '.', '');
																  }
																}

                            	@endphp 
													        <div class="nearbyPlacesAppear">
													            <div id="google_map_on_list_near_by"></div>
													            <script>
      																  var mapDiv = document.getElementById('google_map_on_list_near_by');
                                        var map = new google.maps.Map(mapDiv, {
                                          center: new google.maps.LatLng({{$property->lat}}, {{$property->lng}}),
                                          zoom: 17,
                                          mapTypeId: google.maps.MapTypeId.ROADMAP,
                                          mapTypeControl: false,
                                          streetViewControl: false,
                                          gestureHandling: "greedy",
                                          styles: [ { "elementType": "geometry", "stylers": [ { "color": "#f5f5f5" } ] }, { "elementType": "labels.icon", "stylers": [ { "visibility": "off" } ] }, { "elementType": "labels.text.fill", "stylers": [ { "color": "#616161" } ] }, { "elementType": "labels.text.stroke", "stylers": [ { "color": "#f5f5f5" } ] }, { "featureType": "administrative.land_parcel", "elementType": "labels.text.fill", "stylers": [ { "color": "#bdbdbd" } ] }, { "featureType": "poi", "elementType": "geometry", "stylers": [ { "color": "#eeeeee" } ] }, { "featureType": "poi", "elementType": "labels.text.fill", "stylers": [ { "color": "#757575" } ] }, { "featureType": "poi.park", "elementType": "geometry", "stylers": [ { "color": "#e5e5e5" } ] }, { "featureType": "poi.park", "elementType": "labels.text.fill", "stylers": [ { "color": "#9e9e9e" } ] }, { "featureType": "road", "elementType": "geometry", "stylers": [ { "color": "#ffffff" } ] }, { "featureType": "road.arterial", "elementType": "labels.text.fill", "stylers": [ { "color": "#757575" } ] }, { "featureType": "road.highway", "elementType": "geometry", "stylers": [ { "color": "#dadada" } ] }, { "featureType": "road.highway", "elementType": "labels.text.fill", "stylers": [ { "color": "#616161" } ] }, { "featureType": "road.local", "elementType": "labels.text.fill", "stylers": [ { "color": "#9e9e9e" } ] }, { "featureType": "transit.line", "elementType": "geometry", "stylers": [ { "color": "#e5e5e5" } ] }, { "featureType": "transit.station", "elementType": "geometry", "stylers": [ { "color": "#eeeeee" } ] }, { "featureType": "water", "elementType": "geometry", "stylers": [ { "color": "#91D5E4" } ] }, { "featureType": "water", "elementType": "labels.text.fill", "stylers": [ { "color": "#9e9e9e" } ] } ]
                                        }); 
                                        var markerCoords = [
                                              [ {{$property->lat}}, {{$property->lng}} ,'<p style="padding:20px 10px 10px;font-size:14px;">{{$property->title}}</p>','property'],
                                              @for($z=0;$z<count($responseResults);$z++)
                                                @if($z<4 && isset($responseResults[$z]['geometry']['location']['lat']))
                                                  [ {{$responseResults[$z]['geometry']['location']['lat']}}, {{$responseResults[$z]['geometry']['location']['lng']}} ,'<p style="padding:20px 10px 10px;font-size:14px;">{{$responseResults[$z]['name']}} (Subway Station)</p>','subway'],
                                                @endif
                                              @endfor
                                              @for($z=0;$z<count($responseResults2);$z++)
                                                @if($z<4 && isset($responseResults2[$z]['geometry']['location']['lat']))
                                                  [ {{$responseResults2[$z]['geometry']['location']['lat']}}, {{$responseResults2[$z]['geometry']['location']['lng']}} ,'<p style="padding:20px 10px 10px;font-size:14px;">{{$responseResults2[$z]['name']}} (Bus Station)</p>','bus'],
                                                @endif
                                              @endfor
                                              @for($z=0;$z<count($responseResults3);$z++)
                                                @if($z<4 && isset($responseResults3[$z]['geometry']['location']['lat']))
                                                  [ {{$responseResults3[$z]['geometry']['location']['lat']}}, {{$responseResults3[$z]['geometry']['location']['lng']}} ,'<p style="padding:20px 10px 10px;font-size:14px;">{{$responseResults3[$z]['name']}} (Airport)</p>','airport'],
                                                @endif
                                              @endfor
                                          ];

                                        var markers = [];
                                        var marker;
                                        var infowindow = new google.maps.InfoWindow;
                                        for(var i = 0, len = markerCoords.length; i < len; i++){
                                          if(markerCoords[i][3]=='subway'){
                                            marker = new google.maps.Marker({
                                              position: new google.maps.LatLng(markerCoords[i][0], markerCoords[i][1]),
                                              icon: '{{ asset("assets/img/subway-icon.png") }}',
                                              label: ''
                                            });
                                          }
                                          else if(markerCoords[i][3]=='bus'){
                                            marker = new google.maps.Marker({
                                              position: new google.maps.LatLng(markerCoords[i][0], markerCoords[i][1]),
                                              icon: '{{ asset("assets/img/bus-icon.png") }}',
                                              label: ''
                                            });
                                          }
                                          else if(markerCoords[i][3]=='airport'){
                                            marker = new google.maps.Marker({
                                              position: new google.maps.LatLng(markerCoords[i][0], markerCoords[i][1]),
                                              icon: '{{ asset("assets/img/airport-icon.png") }}',
                                              label: ''
                                            });
                                          }else{
                                            marker = new google.maps.Marker({
                                              position: new google.maps.LatLng(markerCoords[i][0], markerCoords[i][1]),
                                              icon: '{{ asset("assets/img/sale.png") }}',
                                              label: ''
                                            });
                                          }
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
                                              maxZoom: 6,
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
                                            maxZoom: 6
                                          }); 
      																</script>
												                <div class="places_list_appear">
												                    <ul>
												                     @for($x=0;$x<count($responseResults);$x++)
												                     		@if($x<4)
																		            	@if(isset($responseResults[$x]['name']) && isset($responseResults[$x]['rating']))
																		             		<li>{{$responseResults[$x]['name']}} (Subway Station)<span>Distance: {{distance($property->lat, $property->lng, $responseResults[$x]['geometry']['location']['lat'], $responseResults[$x]['geometry']['location']['lng'], "K")}} Kilometers</span></li>
																		            	@endif
																		            @endif
																		         @endfor

																		         @for($x=0;$x<count($responseResults2);$x++)
															                  @if($x<4)
																		            	@if(isset($responseResults2[$x]['name']) && isset($responseResults2[$x]['rating']))
																		             		<li>{{$responseResults2[$x]['name']}} (Bus Station)<span>Distance: {{distance($property->lat, $property->lng, $responseResults2[$x]['geometry']['location']['lat'], $responseResults2[$x]['geometry']['location']['lng'], "K")}} Kilometers</span></li>
																		            	@endif
																		            @endif
																		         @endfor

																		         @for($x=0;$x<count($responseResults3);$x++)
															                  @if($x<4)
																		            	@if(isset($responseResults3[$x]['name']) && isset($responseResults3[$x]['rating']))
																		             		<li>{{$responseResults3[$x]['name']}} (Airport)<span>Distance: {{distance($property->lat, $property->lng, $responseResults3[$x]['geometry']['location']['lat'], $responseResults3[$x]['geometry']['location']['lng'], "K")}} Kilometers</span></li>
																		            	@endif
																		            @endif
																		         @endfor
															        </ul>
												                </div>
												            </div>
												        </div>
                    		
                    		</div> -->

                    </div>
                  </div>
                 
                 </div>
              </section>
            
            </div>

            
          </section>

        </div>
        <!-- property-tab-1 -->

        <div class="property-tab-5">
					<div class="similar-listing">
						<h3 class="panel-title">Similar Listings</h3>
						<div class="row">
							
							@foreach($similarProperties as $similarProperty)
								@php
								
									$currency = \Illuminate\Support\Facades\DB::table('currency')->where('id',$similarProperty->currency)->first();
									$roomtype = \Illuminate\Support\Facades\DB::table('properties_roomtype')->where('id',$similarProperty->bookingtype)->first();
									$termStay='';
		                            if($similarProperty->minimumbooking=='night' || $similarProperty->minimumbooking=='days'){
		                               $termStay='Short Term Stay'; 
		                            }
		                            if($similarProperty->minimumbooking=='months'){
		                               $termStay='Long Term Stay'; 
		                            }
		                            $booking_similar='night';
                                $price=$similarProperty->price;
		                            if($similarProperty->minimumbooking=='night'){
		                               $booking_similar='night'; 
		                            }
		                            if($similarProperty->minimumbooking=='months'){
		                               $booking_similar='month'; 
                                   $price=$similarProperty->priceMonth;
		                            }
		                            
		                            $reservations = \Illuminate\Support\Facades\DB::table('reservation')->where('propertyID',$similarProperty->id)->whereIn('status', ['pending','approved'])->get();
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
										<a class="single-list-head" href="javascript:Void(0)">
											@if(false && $similarProperty->feature==1)
												<div class="featured-text">featured</div>
											@endif
                      <div class="images_property_search_slides">
                          <div class="item">
                            <img src="{{ URL::to('uploaded/properties/'.$similarProperty->cover) }}" class="img-fluid">
                          </div>
                          @php
                            $galleriesAll=explode(",",$similarProperty->gallery);
                          @endphp
                          @for($i=0;$i<count($galleriesAll);$i++)
                            @php
                              $gallery = \Illuminate\Support\Facades\DB::table('galleries')->where('id',$galleriesAll[$i])->first();
                            @endphp
                            @if($gallery!=null)
                              <div class="item">
                                <img src="{{ URL::to('uploaded/galleries/'.$gallery->image) }}" class="img-fluid">    
                              </div>
                            @endif
                          @endfor
                      </div>
											<div class="list-price">From {{$currency->name}} <span>{{$price}} /{{$booking_similar}}</span></div>
										</a>
										<div class="single-list-text">
											<a href="{{ URL::to('/property/'.$similarProperty->slug) }}">
												<h3>{{$similarProperty->title}}</h3>
												<div class="single-addons">
													<ul>
														<li>{{$termStay}} / {{$roomtype->title}}</li>
														<li>{{$similarProperty->bedrooms}} Bedroom, {{$similarProperty->number_bathroom}} Bath and {{$similarProperty->size}} sq ft</li>
													</ul>
												</div>
												<div class="list-avaial">
                          @if($booking_similar=='month')
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
							
						</div>
					</div>
				</div>

				<!-- leave a review start -->

					<div id="commentReplies">
		            @if($reviewsCount>0)
		               <h2>Reviews:</h2>
		               <ul>
		                   @foreach($reviews as $review)
		                   <li>
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
		                   </li>
		                   @endforeach
		               </ul>
		            @endif
		           </div>

              @auth

		            <div id="comments">
		              <div id="respond" class="comment-respond">
		                <h3 id="reply-title" class="panel-title">Leave a review</h3>
		                <form method="post" id="commentform" class="comment-form blog_replies">
		                  @csrf
		                  <input type="hidden" name="type" value="property">
		                  <input type="hidden" name="review" id="reviewInput" value="0" />
		                  <input type="hidden" name="blogID" value="{{$property->id}}" />
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
		                    <input id="author" name="author" type="text" class="form-control" value="{{$account->firstname.' '.$account->lastname}}" size="30" aria-required="true" placeholder="Name" required>
		                  </p>
		                  <p class="comment-form-email">
		                    <input id="email" name="email" type="text" class="form-control" value="{{$account->email}}" size="30" aria-required="true" placeholder="Email" required>
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

              @endauth

				<!-- leave a review end -->
        
                          
      </div>
      <div class="col-md-4">
        <div class="property-pricing">
          <div data-test-id="property-pricing-container">
            <div class="property-pricing__price-availability">
              <div>
                <div class="monthly-price property-pricing__monthly-price" data-test-id="monthly-price">
                  <div class="monthly-price__prefix">from</div>
                  <div class="monthly-price__amount">
                    <div class="price">
                      <span class="price__currency">{{$currency->name}}</span>
                      <span class="price__amount">{{$mainPrice}}</span>
                    </div>
                  </div>
                  <div class="monthly-price__suffix monthly-price__suffix--non-mobile">
                    <div>/{{$booking}}</div>
                  </div>
                </div>
              </div>

              @php

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

              <div class="property-pricing__available-from"> Available from <div class="property-pricing__availability-date">{{date("d F Y", strtotime($availableFrom))}}</div>
              <div class="property-date-container inner_page_propery_close_calender_click">
                  <div class="date-container-content">
                    <div class="date-container-datepicker">
                          <input type="text" name="basic" id="basic" data-minimum-booking="{{$property->minimumbookingnumber}}" class="ui-datepicker-multi-2">
                          <div class="calendar__body"></div>
                    </div>
                  </div>
                  <div class="date-container-footer">
                  		<button class="clear_calender reset" type="button">Clear</button>
                      <button class="apply_calender apply_selected_dates_button" type="button">Apply</button>
                  </div>
              </div>
              </div>
            </div>
            <button type="button" class="ui-button__primary open-the-calender-appear ui-button--regular property-select-date show_selected_dates_text_here inner_page_propery_close_calender_click" > Select dates</button>
            <button style="display:none;" type="button" class="ui-button__primary open-the-calender-appear ui-button--regular property-pricing__reserve-cta  hide_add_button_for_prices"> Add dates for prices </button>

            <!-- reservation form start here -->
            <div class="booking-form booking-form-set-new">
            <form action="{{ route('propertyBooking') }}" class="property_booking_form set_property_inner_page" method="POST">
								@csrf
								<input type="hidden" name="pid" value="{{$property->id}}">
								
                <input type="hidden" name="bookingFirstName">
                <input type="hidden" name="bookingEmail">
                <input type="hidden" name="bookingPhone">
                <textarea name="bookingDescription" style="display:none;"></textarea>

                <input type="hidden" name="cardNumber">
								<input type="hidden" name="expiration">
								<input type="hidden" name="cvccode">
								<input type="hidden" name="guestFee">
								<input type="hidden" name="rentprice">
								<input type="hidden" name="totalprice">
								<input type="hidden" name="bookingNumber">
								<input type="hidden" name="bookingType">
								<input type="hidden" name="checkin" id="checkin_booking">
								<input type="hidden" name="checkout" id="checkout_booking">
								<div class="form-control single_property_guest inner_page_propery_close_click">
									<div class="result">
										<i class="custom_icon_class_icon fas fa-user"></i>
								        <label>No. of guests</label>
						            </div>
						            <div class="detail" data-numberGuest={{$property->number_guests}} style="display:none;">
						            	<ul>
						            		<li>
						            			<h3>Adults
						            				<span>Ages 13 or above</span>
						            			</h3>
						            			<p>
						            				<button type="button" class="minus"><i class="fa fa-minus" aria-hidden="true"></i></button>
						            				<input type="number" name="adults" value="0" />
						            				<button type="button" class="plus"><i class="fa fa-plus" aria-hidden="true"></i></button>
						            			</p>
						            		</li>
						            		<li>
						            			<h3>Children
						            				<span>Ages 2 to 12</span>
						            			</h3>
						            			<p>
						            				<button type="button" class="minus"><i class="fa fa-minus" aria-hidden="true"></i></button>
						            				<input type="number" name="children" value="0" />
						            				<button type="button" class="plus"><i class="fa fa-plus" aria-hidden="true"></i></button>
						            			</p>
						            		</li>
						            		<li>
						            			<h3>Infants
						            				<span>Under 2 years</span>
						            			</h3>
						            			<p>
						            				<button type="button" class="minus"><i class="fa fa-minus" aria-hidden="true"></i></button>
						            				<input type="number" name="infants" value="0" />
						            				<button type="button" class="plus"><i class="fa fa-plus" aria-hidden="true"></i></button>
						            			</p>
						            		</li>
						            	</ul>
						            	<button type="button" class="close">Close</button>
						            </div>
								</div>
								<div class="show_cost_form" id="show_cost_form" style="display:none;">
			            <div class="cost_row firstCustom">
			                <h3>Book Now</h3>
			                <label class="left bookingdates"></label>
			                <label class="right bookingcounts" data-bookingType="{{$booking_table}}"></label>
			            </div>
			            <div class="cost_row secondCustom">
			                <div class="cost_explanation">
			                </div>
			                <div class="cost_value">
			                    {{$booking_table}}<br>Rate
			                </div>
			                <div class="cost_overall">
			                    Total<br>Amount
			                </div>
			            </div>
			            
			            <div class="cost_row 333">
			                <div class="cost_explanation">Rent Price</div>
			                <div class="cost_value">{{$currency->name}}<label class="propertyOriginalPrice">{{$mainPrice}}</label></div>
			                <div class="cost_overall cost_value 3332">{{$currency->name}}<label data-orginialPrice={{$mainPrice}} class="propertyTotalPrice">0</label></div>
			            </div>

			            	@php
			            		$serviceFeeName = explode(",",$property->serviceFeeName);
			            		$serviceFeeCurrency = explode(",",$property->serviceFeeCurrency);
			            		$serviceFeeValue = explode(",",$property->serviceFeeValue);
			            		$serviceFeeCounter=0;
			            		$serviceCurrencyNext='';
			            	@endphp

			            	@if($property->priceguest>0)
			            	  @php
			            	  	$currency_guest = \Illuminate\Support\Facades\DB::table('currency')->where('id',$property->currency_guest)->first();
			            	  @endphp
			                <div class="cost_row">
			                    <div class="cost_explanation">Extra Guest Fee</div>
			                    <div class="cost_value">{{'$'.$property->priceguest}}</div>
			                    <div class="cost_overall">{{$currency_guest->name}}<label data-priceGuest={{$property->priceguest}} class="propertyGuestTotalPrice"></label></div>
			                </div>

			              @endif

			            	@if(count($serviceFeeName)>0)
				            	@for($i=0;$i<count($serviceFeeName);$i++)
				            	  @php
				            	  	$servicePrice=0;
				            	  	$serviceID = \Illuminate\Support\Facades\DB::table('properties_serviceFee')->where('id',$serviceFeeName[$i])->where('status',1)->first();
				            	  	if($serviceID !=null){
                            $serviceCurrency = \Illuminate\Support\Facades\DB::table('currency')->where('id',$serviceFeeCurrency[$i])->first();
  				            	  	$serviceCurrencyNext=$serviceCurrency->name;
  				            	  	if($serviceID->amount==0){
  				            	  		$servicePrice=(float)$serviceFeeValue[$i];
  				            	  	}else{
  				            	  		if($serviceID->type=='Fixed Amount'){
  				            	  			$servicePrice=$serviceID->amount;
  				            	  		}else{
  				            	  			$servicePrice=(float)$mainPrice*((float)$serviceID->amount/100);
  				            	  		}
  				            	  	}
                          }
				            	  @endphp
				            	  @if($servicePrice>0)
				            	    <input type="hidden" name="serviceFee[]" value="{{$serviceID->title.' - '.$serviceCurrency->name.' '.$servicePrice}}">
					                <div class="cost_row">
					                    <div class="cost_explanation">{{$serviceID->title}}</div>
					                    <div class="cost_value cleaning_fee_value">@if($serviceID->charge=='Nightly/Monhtly'){{$serviceCurrency->name}} {{$servicePrice}}@endif</div>
					                    <div class="cost_overall cleaning_fee_value">{{$serviceCurrency->name}}<label data-servicePrice={{$servicePrice}} data-serviceCharge='{{$serviceID->charge}}' data-serviceType='{{$serviceID->type}}' class="propertyServiceFeeTotalPrice fee{{round($serviceFeeCounter, 2)}}"></label></div>
					                </div>
					              @php $serviceFeeCounter++;  @endphp
				                @endif
				              @endfor
			              @endif

			              @php
			              	$servicesData = \Illuminate\Support\Facades\DB::table('properties_serviceFee')->get();
			              @endphp
			              @foreach($servicesData as $serviceData)
			              	@if((float)$serviceData->amount>0)
			              		@php
				            	  	$servicePrice=0;
				            	 		if($serviceData->type=='Fixed Amount'){
			            	  			$servicePrice=$serviceData->amount;
			            	  		}else{
			            	  			$servicePrice=(float)$mainPrice*((float)$serviceData->amount/100);
			            	  		}
				            	  @endphp
				            	    <input type="hidden" name="serviceFee[]" value="{{$serviceData->title.' - $'.$servicePrice}}">
					                <div class="cost_row">
					                    <div class="cost_explanation">{{$serviceData->title}} (@if($serviceData->type=='Fixed Amount'){{'$'.$serviceData->amount}}@else{{$serviceData->amount.'%'}}@endif)</div>
					                    <div class="cost_value cleaning_fee_value">@if($serviceData->charge=='Nightly/Monhtly')${{$servicePrice}}@endif</div>
					                    <div class="cost_overall cleaning_fee_value">$<label data-servicePrice={{$servicePrice}} data-serviceCharge='{{$serviceData->charge}}' data-serviceType='{{$serviceData->type}}' class="propertyServiceFeeTotalPrice fee{{$serviceFeeCounter}}"></label></div>
					                </div>
					              @php $serviceFeeCounter++;  @endphp
				            	@endif
			              @endforeach

			              @if($property->securitydeposit>0)
			            	  @php
			            	  	$currency_security = \Illuminate\Support\Facades\DB::table('currency')->where('id',$property->currency_security)->first();
			            	  @endphp
			            	  <input type="hidden" name="securitydeposit" value="{{$property->securitydeposit}}">
			                <div class="cost_row">
			                    <div class="cost_explanation">Security Deposit Fee</div>
			                    <div class="cost_value cleaning_fee_value"></div>
			                    <div class="cost_overall cleaning_fee_value">{{$currency_security->name}} <label data-priceSecurityDeposit={{$property->securitydeposit}} class="propertySecurityDepositTotalPrice">{{$property->securitydeposit}}</label></div>
			                </div>

			              @endif
			              
			                <div class="cost_row" id="total_cost_row">
			                    <div class="cost_explanation"><strong>Total amount payable</strong></div>
			                    <div class="cost_value" ></div>
			                    <div class="cost_overall">{{$currency->name}} <label class="totalBookingPropertyPrice" data-servicesFeeCounter={{$serviceFeeCounter}}>0</label></div>
			                </div>
			          </div>
								<button type="button" class="property_detail_proceed">View Pricing</button>
								<button type="button" class="property_detail_book" style="display:none;">Book Now</button>
								<button type="submit" name="submit" class="property_detail_book_submit" style="display:none;">Submit</button>
							</form>
            </div>
            <!-- reservation form end here -->

           
            <br><br>




          </div>
        </div>
      

		        <div class="sidebar-widget">
							<h4>Latest Listings</h4>
							<div class="properties-side-listing">

								@foreach($similarUnfeatureProperties as $similarUnfeatureProperty)
								@php
									$currency = \Illuminate\Support\Facades\DB::table('currency')->where('id',$similarUnfeatureProperty->currency)->first();
									$booking_unfeature='night';
                  $price=$similarUnfeatureProperty->price;
                  if($similarUnfeatureProperty->minimumbooking=='night'){
                     $booking_unfeature='night'; 
                  }
                  if($similarUnfeatureProperty->minimumbooking=='months'){
                     $booking_unfeature='month'; 
                     $price=$similarUnfeatureProperty->priceMonth;
                  }
								@endphp
								<div class="single-side">
									<div class="left-side">
										<a class="single-list-head" href="{{ URL::to('/property/'.$similarUnfeatureProperty->slug) }}">
											<img src="{{ URL::to('uploaded/properties/'.$similarUnfeatureProperty->cover) }}" class="img-fluid" style=" width: 120px; ">
										</a>
									</div>
									<div class="right-side">
										<a class="single-list-head" href="{{ URL::to('/property/'.$similarUnfeatureProperty->slug) }}">
											<h3>{{$similarUnfeatureProperty->title}}</h3>
											<p>{{$similarUnfeatureProperty->zipcode.' '.$similarUnfeatureProperty->city.' '.$similarUnfeatureProperty->state.', '.$similarUnfeatureProperty->country}}</p>
											<p class="price"><strong>{{$currency->name}} {{$price}} </strong>/{{$booking_unfeature}}</p>
										</a>
									</div>
								</div>

								@endforeach

							</div>
						</div>
						<div class="sidebar-widget">
							<h4>Featured Listing</h4>
							<div class="properties-side-listing">
								
								@foreach($similarFeatureProperties as $similarFeatureProperty)
								@php
									$currency = \Illuminate\Support\Facades\DB::table('currency')->where('id',$similarFeatureProperty->currency)->first();
									$booking_feature_listing='night';
                  $price=$similarFeatureProperty->price;
                  if($similarFeatureProperty->minimumbooking=='night'){
                     $booking_feature_listing='night'; 
                  }
                  if($similarFeatureProperty->minimumbooking=='months'){
                     $booking_feature_listing='month'; 
                     $price=$similarFeatureProperty->priceMonth;
                  }
								@endphp
								<div class="single-side">
									<div class="left-side">
										<a class="single-list-head" href="{{ URL::to('/property/'.$similarFeatureProperty->slug) }}">
											<img src="{{ URL::to('uploaded/properties/'.$similarFeatureProperty->cover) }}" class="img-fluid" style=" width: 120px; ">
										</a>
									</div>
									<div class="right-side">
										<a class="single-list-head" href="{{ URL::to('/property/'.$similarFeatureProperty->slug) }}">
											<h3>{{$similarFeatureProperty->title}}</h3>
											<p>{{$similarFeatureProperty->zipcode.' '.$similarFeatureProperty->city.' '.$similarFeatureProperty->state.', '.$similarUnfeatureProperty->country}}</p>
											<p class="price"><strong>{{$currency->name}} {{$price}} </strong>/{{$booking_feature_listing}}</p>
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

<!-- Property Booking Payment Modal -->
<div class="modal fade" id="propertyBookingPayment" tabindex="-1" aria-labelledby="propertyBookingPaymentLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
      <div class="modal-body">
      		<div class="login_modal_wrapper">
      				<div id="payment-stripe" class="container">
							  <div class="row text-left">
							    <div class="col-sm-12">
							      <div class="form-group">
							        <label for="cc-number" class="control-label">Credit Card Number <small class="text-muted">[<span data-payment="cc-brand"></span>]</small></label>
							        <div class="input-group">
							          <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>                                    
							          <input id="cc-number" type="tel" class="input-lg form-control cc-number" autocomplete="cc-number" placeholder="•••• •••• •••• ••••" data-payment='cc-number' required>
							        </div>
							      </div>
							    </div>
							    <div class="col-sm-12">
							      <div class="form-group">
							        <label>Expiration (MM/YYYY)</label>
							        <div class="input-group">
							          <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
							          <input id="cc-exp" type="tel" class="input-lg form-control cc-exp" autocomplete="cc-exp" placeholder="•• / ••••" data-payment='cc-exp' required>
							        </div>
							      </div>
							    </div>        
							    <div class="col-sm-12">
							      <div class="form-group">
							        <label>CVC Code</label>
							        <div class="input-group">
							          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
							          <input id="cc-cvc" type="tel" class="input-lg form-control cc-cvc" autocomplete="off" placeholder="•••" data-payment='cc-cvc' required>
							        </div>
							      </div>
							    </div>
							  </div>
							  <button class="btn btn-primary" type="button" id="validate">Pay $<span></span></button>
							</div>
      		</div>
        	<div class="modal_login_image_wrapper">
	          <div class="modal_login_image" style="background-image:url({{ asset('assets/img/istockphoto-949716906-612x612.jpg')}})"></div>
	        </div>
      </div>
    </div>
  </div>
</div>

<script>
window.addEventListener("DOMContentLoaded", function(){
@if(session('success')!='')
	swal('{{session('success')}}');
@endif
@php
 	$dates=array();
 	foreach($reservation_books as $reservation_book){
		$start = explode('-',$reservation_book->checkin);
    $end   = explode('-',$reservation_book->checkout);
 		$period = new DatePeriod( new DateTime($start[1].'-'.$start[0].'-'.$start[2]), new DateInterval('P1D'), new DateTime($end[1].'-'.$end[0].'-'.$end[2]) );
 		foreach($period as $key => $value){
		    array_push($dates,"`".$value->format('d-m-Y')."`");
		}
	}
  foreach($disableDates as $disableDate){
    $startEnd = explode(' to ',$disableDate->days);
    $start = explode('-',$startEnd[0]);
    $end   = explode('-',$startEnd[1]);
    $period = new DatePeriod( new DateTime($start[1].'-'.$start[0].'-'.$start[2]), new DateInterval('P1D'), new DateTime($end[1].'-'.$end[0].'-'.$end[2]) );
    foreach($period as $key => $value){
        array_push($dates,"`".$value->format('d-m-Y')."`");
    }
  }
@endphp

  function numberWithCommas(x) {
      return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  }

	var dates = [{{implode(', ',$dates)}}];
	function disableDatesFunc(date){
	  var string = $.datepicker.formatDate('dd-mm-yy', date);
	  return [dates.indexOf(string) == -1];
		
	}
	$("#availabilityShowCalender").datepicker({
	    numberOfMonths: 2,
	    showButtonPanel: false,
	    minDate: 0,
	    beforeShowDay: disableDatesFunc
	});

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

    function getNumberOfDays(start, end, type){
	  	if(type=='day'){
		    var date1 = new Date(start);
		    var date2 = new Date(end);
		    var oneDay = 1000 * 60 * 60 * 24;
		    var diffInTime = date2.getTime() - date1.getTime();
		    var diffInDays = Math.round(diffInTime / oneDay);
		    return diffInDays;
		  }else{
		  	var past_date = new Date(start);
				var current_date = new Date(end);
				var difference = (current_date.getFullYear()*12 + current_date.getMonth()) - (past_date.getFullYear()*12 + past_date.getMonth());
				return difference;
		  }
		}

    var nowDate = new Date();
		var today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);

    $('.property_detail_checkin_booking').daterangepicker({
	  	 autoUpdateInput: false,
	  	 opens: 'left',
	  	 "minDate": today,
	     "locale": {
	        format: 'MM-DD-YYYY'
	     },
	     isInvalidDate: function(date) {
              var disabled = [{{implode(', ',$dates)}}];
              if(date && disabled.indexOf(date.format('DD-MM-YYYY'))>-1){
                return true;
              }else{
                return false;
              }
           }
	  }, function(start, end, label) {
	  	var getBookingType=$('div#show_cost_form label.bookingcounts').attr('data-bookingtype');
			var rentPriceCal_minib;
			var rentPriceCal_name;
			if(getBookingType=='Monthly'){
				rentPriceCal_name='month';
				rentPriceCal_minib=getNumberOfDays(start.format('MMMM D, YYYY'), end.format('MMMM D, YYYY'), 'month');
				rentPriceCal_minib=rentPriceCal_minib+1;
			}else if(getBookingType=='Night'){
				rentPriceCal_name='night';
				rentPriceCal_minib=getNumberOfDays(start.format('MMMM D, YYYY'), end.format('MMMM D, YYYY'), 'day');
				rentPriceCal_minib=rentPriceCal_minib+1;
			}else{
				rentPriceCal_name='night';
				rentPriceCal_minib=getNumberOfDays(start.format('MMMM D, YYYY'), end.format('MMMM D, YYYY'), 'day');
				rentPriceCal_minib=rentPriceCal_minib+1;
			}
			var getMinBookingNumber=$('input#checkin_booking').attr('data-minimum-booking');
			if(getMinBookingNumber=='' || rentPriceCal_minib>=getMinBookingNumber){
		    $("input#checkin_booking").val(start.format('MMMM D, YYYY'));
		    $("input#checkout_booking").val(end.format('MMMM D, YYYY'));
		    $('.booking-form form .form-control input#checkin_booking').removeAttr('style');
		    $('.booking-form form .form-control input#checkout_booking').removeAttr('style');
		    $('div#show_cost_form').slideUp();
		    $('.booking-form form button.property_detail_book').hide();
			  $('.booking-form form button.property_detail_proceed').show();
			}else{
				swal('Minimum booking must be '+getMinBookingNumber+' '+rentPriceCal_name);
			}
	  });

	  $('.booking-form form button.property_detail_proceed').click(function(){
	  		var checkin = $('.booking-form form  input#checkin_booking').val();
	  		var checkout = $('.booking-form form input#checkout_booking').val();
	  		var adults = $('.single_property_guest .detail ul li p input[name="adults"]').val();
			var children = $('.single_property_guest .detail ul li p input[name="children"]').val();
			var infants = $('.single_property_guest .detail ul li p input[name="infants"]').val();
	  		if(checkin==''){
	  			$('.booking-form form  input#checkin_booking').attr('style','border-color:red;');
	  		}else{
	  			$('.booking-form form  input#checkin_booking').removeAttr('style');
	  		}
	  		if(checkout==''){
	  			$('.booking-form form  input#checkout_booking').attr('style','border-color:red;');
	  		}else{
	  			$('.booking-form form  input#checkout_booking').removeAttr('style');
	  		}
	  		if(checkin!='' && checkout!=''){
	  			var checkin_booking = $('input#checkin_booking').val();
	  			var checkout_booking = $('input#checkout_booking').val();
	  			$('div#show_cost_form label.bookingdates').text(moment(checkin_booking).format('ll')+' - '+moment(checkout_booking).format('ll')+' :');
	  			var getBookingType=$('div#show_cost_form label.bookingcounts').attr('data-bookingtype');
	  			var getBookingTypeValue;
	  			var rentPriceCal;
	  			if(getBookingType=='Monthly'){
	  				getBookingTypeValue='month';
	  				rentPriceCal=getNumberOfDays(checkin_booking, checkout_booking, 'month');
	  				rentPriceCal=rentPriceCal+1;
	  			}else if(getBookingType=='Night'){
	  				getBookingTypeValue='night';
	  				rentPriceCal=getNumberOfDays(checkin_booking, checkout_booking, 'day');
	  				rentPriceCal=rentPriceCal+1;
	  			}else{
	  				getBookingTypeValue='night';
	  				rentPriceCal=getNumberOfDays(checkin_booking, checkout_booking, 'day');
	  				rentPriceCal=rentPriceCal+1;
	  			}
	  			$('div#show_cost_form label.bookingcounts').text(rentPriceCal+' '+getBookingTypeValue);
	  			$('form.property_booking_form input[name="bookingNumber"]').val(rentPriceCal);
	  			$('form.property_booking_form input[name="bookingType"]').val(getBookingTypeValue);
	  			var rentPriceShow=parseFloat($('div#show_cost_form label.propertyTotalPrice').attr('data-orginialprice'))*rentPriceCal;
	  			$('div#show_cost_form label.propertyTotalPrice').text(numberWithCommas(rentPriceShow));
	  			$('form.property_booking_form input[name="rentprice"]').val(rentPriceShow);

	  			var totalGuest = parseInt($('.single_property_guest .detail ul li p input[name="adults"]').val())+parseInt($('.single_property_guest .detail ul li p input[name="children"]').val())+parseInt($('.single_property_guest .detail ul li p input[name="infants"]').val());
	  			var guestExtraPrice=$('div#show_cost_form label.propertyGuestTotalPrice').attr('data-priceGuest');
	  			if(totalGuest>0 && guestExtraPrice!=undefined){
	  				// var guestExtraPriceTotal = parseInt(rentPriceCal)*parseFloat(totalGuest)*parseFloat(guestExtraPrice);
            var guestExtraPriceTotal = parseInt(rentPriceCal)*parseFloat(guestExtraPrice);
	  				$('div#show_cost_form label.propertyGuestTotalPrice').text(numberWithCommas(guestExtraPriceTotal.toFixed(0)));
	  				$('form.property_booking_form input[name="guestFee"]').val(parseFloat(guestExtraPriceTotal));
	  				rentPriceShow=parseFloat(rentPriceShow)+parseFloat(guestExtraPriceTotal);
	  			}else{
            $('div#show_cost_form label.propertyGuestTotalPrice').text('0');
            $('form.property_booking_form input[name="guestFee"]').val('');
          }

	  			var serviceFee = parseInt($('div#show_cost_form label.totalBookingPropertyPrice').attr('data-servicesFeeCounter'));
	  			for(var i=0;i<serviceFee;i++){
	  				var serviceCharge = $('div#show_cost_form label.propertyServiceFeeTotalPrice.fee'+i).attr('data-serviceCharge');
	  				if(serviceCharge=='Nightly/Monhtly'){
	  					var serviceChargeCount=rentPriceCal;
	  				}else{
	  					var serviceChargeCount=1;
	  				}
	  				var serviceType = $('div#show_cost_form label.propertyServiceFeeTotalPrice.fee'+i).attr('data-serviceType');
	  				if(serviceType=='Percentage'){
	  					var serviceChargeCount=rentPriceCal;
	  				}
	  				var serviceAmount = $('div#show_cost_form label.propertyServiceFeeTotalPrice.fee'+i).attr('data-servicePrice');
	  				$('div#show_cost_form label.propertyServiceFeeTotalPrice.fee'+i).parent().parent().find('div.cost_value.cleaning_fee_value').text('$'+numberWithCommas(serviceAmount));
            var serviceName=$('div#show_cost_form label.propertyServiceFeeTotalPrice.fee'+i).parent().parent().find('div.cost_explanation').text();
            if(serviceName=='Pet Fee'){
              $('div#show_cost_form label.propertyServiceFeeTotalPrice.fee'+i).text(0);
            }else{
              serviceAmount=serviceAmount*serviceChargeCount;
              $('div#show_cost_form label.propertyServiceFeeTotalPrice.fee'+i).text(numberWithCommas(serviceAmount.toFixed(0)));
  	  				rentPriceShow=parseFloat(rentPriceShow)+parseFloat(serviceAmount);
	  			  }
          }

	  			var securityDeposit=$('div#show_cost_form label.propertySecurityDepositTotalPrice').attr('data-priceSecurityDeposit');
          $('div#show_cost_form label.propertySecurityDepositTotalPrice').text(numberWithCommas(parseFloat(securityDeposit).toFixed(0)));
	  			if(securityDeposit!=undefined){
	  				rentPriceShow=parseFloat(rentPriceShow)+parseFloat(securityDeposit);
	  			}
	  			$('div#show_cost_form label.totalBookingPropertyPrice').text(numberWithCommas(rentPriceShow.toFixed(0)));
	  			$('form.property_booking_form input[name="totalprice"]').val(rentPriceShow);
	  			$('.booking-form form button.property_detail_proceed').hide();
	  			$('.booking-form form button.property_detail_book').show();
	  			$('div#show_cost_form').slideDown();
	  		}else{
          swal('Select dates above!');
        }
	  });

	  $('.booking-form form button.property_detail_book').click(function(){
	  	// var dataSubmitBooking = $(this).attr('data-submit-booking');
	  	// if(dataSubmitBooking=='yes'){
	  		$('#contactOwnerModal').modal('show');
	  		$('#propertyBookingPayment button#validate span').text($('form.property_booking_form input[name="totalprice"]').val());
        // $('.booking-form form button.property_detail_book_submit').click();
	  	// }
	  });

	  (function( $ ){
		    var PLUGIN_NS = 'paymentForm';
		    var Plugin = function ( target, options )  { 
		        this.$T = $(target); 
		        this._init( target, options ); 
		       this.options= $.extend(
		            true,               // deep extend
		            {
		                DEBUG: false
		            },
		            options
		        );
		        this._cardIcons = {
		            "visa"          : "fa fa-cc-visa",
		            "mastercard"    : "fa fa-cc-mastercard",
		            "amex"          : "fa fa-cc-amex",
		            "dinersclub"    : "fa fa-cc-diners-club",
		            "discover"      : "fa fa-cc-discover",
		            "jcb"           : "fa fa-cc-jcb",
		            "default"       : "fa fa-credit-card-alt"
		        };
		        return this; 
		    }
		    Plugin.prototype._init = function ( target, options ) { 
		        var base = this;
		        base.number = this.$T.find("[data-payment='cc-number']");
		        base.exp = this.$T.find("[data-payment='cc-exp']");
		        base.cvc = this.$T.find("[data-payment='cc-cvc']");
		        base.brand = this.$T.find("[data-payment='cc-brand']");
		        base.number.payment('formatCardNumber').data('payment-error-message', 'Please enter a valid credit card number.');
		        base.exp.payment('formatCardExpiry').data('payment-error-message', 'Please enter a valid expiration date.');
		        base.cvc.payment('formatCardCVC').data('payment-error-message', 'Please enter a valid CVC.');
		        base.number.on('input', function() {
		            base.cardType = $.payment.cardType(base.number.val());
		            var fg = base.number.closest('.form-group');
		            fg.toggleClass('has-feedback', true);
		            fg.find('.form-control-feedback').remove();            
		            if (base.cardType) {
		                base.brand.text(base.cardType);
		                // Also set an icon
		                var icon = base._cardIcons[base.cardType] ? base._cardIcons[base.cardType] : base._cardIcons["default"];
		                fg.append("<i class='" + icon + " fa-lg payment-form-icon form-control-feedback'></i>");
		            } else {
		                $("[data-payment='cc-brand']").text("");
		            }
		        });
		        base.number.on('change', function () {
		            base._setValidationState($(this), !$.payment.validateCardNumber($(this).val()));
		        });
		        base.exp.on('change', function () {
		            base._setValidationState($(this), !$.payment.validateCardExpiry($(this).payment('cardExpiryVal')));
		        });
		        base.cvc.on('change', function () {
		            base._setValidationState($(this), !$.payment.validateCardCVC($(this).val(), base.cardType));
		        });   
		    };
		    Plugin.prototype.valid = function () {
		        var base = this;
		        var num_valid = $.payment.validateCardNumber(base.number.val());
		        var exp_valid = $.payment.validateCardExpiry(base.exp.payment('cardExpiryVal'));
		        var cvc_valid = $.payment.validateCardCVC(base.cvc.val(), base.cardType);
		        base._setValidationState(base.number, !num_valid);
		        base._setValidationState(base.exp, !exp_valid);
		        base._setValidationState(base.cvc, !cvc_valid);
		        return num_valid && exp_valid && cvc_valid;
		    }
		    Plugin.prototype._setValidationState = function(el, erred) {
		        var fg = el.closest('.form-group');
		        fg.toggleClass('has-error', erred).toggleClass('has-success', !erred);
		        fg.find('.payment-error-message').remove();
		        if (erred) {
		            fg.append("<span class='text-danger payment-error-message'>" + el.data('payment-error-message') + "</span>");
		        }
		        return this;
		    }  
		    Plugin.prototype.DLOG = function () 
		    {
		        if (!this.DEBUG) return;
		        for (var i in arguments) {
		            console.log( PLUGIN_NS + ': ', arguments[i] );    
		        }
		    }
		    Plugin.prototype.DWARN = function () 
		    {
		        this.DEBUG && console.warn( arguments );    
		    }
		    $.fn[ PLUGIN_NS ] = function( methodOrOptions ) {
		        if (!$(this).length) {
		            return $(this);
		        }
		        var instance = $(this).data(PLUGIN_NS);
		        if ( instance 
		                && methodOrOptions.indexOf('_') != 0 
		                && instance[ methodOrOptions ] 
		                && typeof( instance[ methodOrOptions ] ) == 'function' ) {
		            return instance[ methodOrOptions ]( Array.prototype.slice.call( arguments, 1 ) ); 
		        } else if ( typeof methodOrOptions === 'object' || ! methodOrOptions ) {
		            instance = new Plugin( $(this), methodOrOptions );   
		            $(this).data( PLUGIN_NS, instance );
		            return $(this);
		        } else if ( !instance ) {
		            $.error( 'Plugin must be initialised before using method: ' + methodOrOptions );
		        } else if ( methodOrOptions.indexOf('_') == 0 ) {
		            $.error( 'Method ' +  methodOrOptions + ' is private!' );
		        } else {
		            $.error( 'Method ' +  methodOrOptions + ' does not exist.' );
		        }
		    };
		})(jQuery);
		var payment_form = $('#payment-stripe').paymentForm();
		$('#validate').on('click', function(){
		  var valid = $('#payment-stripe').paymentForm('valid');
		  if(valid){
		  	var ccNumber = $('#propertyBookingPayment input#cc-number').val();
		  	var ccExp = $('#propertyBookingPayment input#cc-exp').val();
		  	var ccCVC = $('#propertyBookingPayment input#cc-cvc').val();
		  	$('form.property_booking_form input[name="cardNumber"]').val(ccNumber);
		  	$('form.property_booking_form input[name="expiration"]').val(ccExp);
		  	$('form.property_booking_form input[name="cvccode"]').val(ccCVC);
		  	$('.booking-form form button.property_detail_book_submit').click();
		  }
		});

  $("#contactTheOwnerForm").on('submit', function(e){
      e.preventDefault();
      var contactName = $('div#contactOwnerModal form input[name="name"]').val();
      var contactEmail = $('div#contactOwnerModal form input[name="email"]').val();
      var contactPhone = $('div#contactOwnerModal form input[name="phone"]').val();
      var contactMessage = $('div#contactOwnerModal form textarea[name="message"]').val();
      $('form.property_booking_form input[name="bookingFirstName"]').val(contactName);
      $('form.property_booking_form input[name="bookingEmail"]').val(contactEmail);
      $('form.property_booking_form input[name="bookingPhone"]').val(contactPhone);
      $('form.property_booking_form textarea[name="bookingDescription"]').val(contactMessage);
      $('.booking-form form button.property_detail_book_submit').click();
  });

    

$(document).ready(function ($) {
	$("#basic").daterangepicker({
		alwaysShowCalendars: true,
		linkedCalendars: false,
		autoApply: true,
		minDate: today,
		parentEl: $(".calendar__body"),
		locale: {
			firstDay: 1,
			format: "MM-DD-YYYY"
		},
    isInvalidDate: function(date) {
      var disabled = [{{implode(', ',$dates)}}];
      if(date && disabled.indexOf(date.format('DD-MM-YYYY'))>-1){
        return true;
      }else{
        return false;
      }
    }
  }).click();
	/* Reset Calendar */
	$(".reset").click(function () {
		$("#basic").data("daterangepicker").setEndDate(new Date()); //date now
        $("#basic").data("daterangepicker").updateCalendars();
	});
	$("#basic").on("cancel.daterangepicker", function (ev, picker) {
        $(this).data("daterangepicker").setStartDate(moment().format("MM-DD-YYYY")); //date now
        $(this).data("daterangepicker").setEndDate(moment().format("MM-DD-YYYY")); //date now
	});
});
$('.ui-button__primary.open-the-calender-appear').click(function(){
    $('.property-date-container').toggleClass('active');
});
var monthNames = ["January", "February", "March", "April", "May", "June",
  "July", "August", "September", "October", "November", "December"
];
$('.apply_selected_dates_button').click(function(){
		var getAppliedDates=$('input#basic').val();
		if(getAppliedDates!=''){

				var getBookingType=$('div#show_cost_form label.bookingcounts').attr('data-bookingtype');
				var rentPriceCal_minib;
				var rentPriceCal_name;
				var startDate=new Date(getAppliedDates.split(' - ')[0]);
				var endDate=new Date(getAppliedDates.split(' - ')[1]);
				if(getBookingType=='Monthly'){
					rentPriceCal_name='month';
					rentPriceCal_minib=getNumberOfDays(monthNames[startDate.getMonth()]+' '+startDate.getDate()+', '+startDate.getFullYear(), monthNames[endDate.getMonth()]+' '+endDate.getDate()+', '+endDate.getFullYear(), 'month');
					rentPriceCal_minib=rentPriceCal_minib+1;
				}else if(getBookingType=='Night'){
					rentPriceCal_name='night';
					rentPriceCal_minib=getNumberOfDays(monthNames[startDate.getMonth()]+' '+startDate.getDate()+', '+startDate.getFullYear(), monthNames[endDate.getMonth()]+' '+endDate.getDate()+', '+endDate.getFullYear(), 'day');
					rentPriceCal_minib=rentPriceCal_minib+1;
				}else{
					rentPriceCal_name='night';
					rentPriceCal_minib=getNumberOfDays(monthNames[startDate.getMonth()]+' '+startDate.getDate()+', '+startDate.getFullYear(), monthNames[endDate.getMonth()]+' '+endDate.getDate()+', '+endDate.getFullYear(), 'day');
					rentPriceCal_minib=rentPriceCal_minib+1;
				}
				var getMinBookingNumber=$('input#basic').attr('data-minimum-booking');
				if(getMinBookingNumber=='' || rentPriceCal_minib>=getMinBookingNumber){
			    $('.booking-form form input#checkin_booking').val(getAppliedDates.split(' - ')[0]);
					$('.booking-form form input#checkout_booking').val(getAppliedDates.split(' - ')[1]);
					$('.property-date-container').removeClass('active');
					$('.show_selected_dates_text_here').text(moment(startDate).format('ll')+' - '+moment(endDate).format('ll'));
					$('.hide_add_button_for_prices').hide();
					$('div.booking-form.booking-form-set-new').show();
				}else{
					swal('Minimum booking must be '+getMinBookingNumber+' '+rentPriceCal_name);
				}
			
		}else{
			$('div.booking-form.booking-form-set-new').hide();
			$('.show_selected_dates_text_here').text('Select dates');
			$('.hide_add_button_for_prices').show();
		}
});


      $("div.modal form.login_popup").on('submit', function(e){
        e.preventDefault();
            $("div.modal form.login_popup input.pageLocation").val('property');
            var formAction=$(this).attr('action');
            $.ajax({
                    type: 'POST',
                    url: formAction,
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData:false,
                    beforeSend: function(){
                    },
                    success: function(resp){
                        if(resp=='ok'){
                          $('.booking-form form button.property_detail_book').attr('data-submit-booking','yes');
                          $('.booking-form form button.property_detail_book').attr('data-bs-toggle','');
                          $('.booking-form form button.property_detail_book').attr('data-bs-target','');
                          $('div.modal').modal('hide');
                        }else{
                          $('div.modal form.login_popup p.login_validation_message').text(resp);
                          $('div.modal form.login_popup p.login_validation_message').show();
                          setTimeout(function() { 
                    $('div.modal form.login_popup p.login_validation_message').slideUp();
                }, 4000);
                        }
                    }
            });
        });

        $("div.modal form.signup_popup").on('submit', function(e){
        e.preventDefault();
            $("div.modal form.signup_popup input.pageLocation").val('property');
            var formAction=$(this).attr('action');
            $.ajax({
                    type: 'POST',
                    url: formAction,
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData:false,
                    beforeSend: function(){
                    },
                    success: function(resp){
                        if(resp=='ok'){
                          $('.booking-form form button.property_detail_book').attr('data-submit-booking','yes');
                          $('.booking-form form button.property_detail_book').attr('data-bs-toggle','');
                          $('.booking-form form button.property_detail_book').attr('data-bs-target','');
                          $('div.modal').modal('hide');
                        }else{
                          $('div.modal form.signup_popup p.login_validation_message').text(resp);
                          $('div.modal form.signup_popup p.login_validation_message').show();
                          setTimeout(function() { 
                    $('div.modal form.signup_popup p.login_validation_message').slideUp();
                }, 4000);
                        }
                    }
            });
        });


 });

</script>
@endsection