@extends('../Layout.master')
@section('body')
<section class="banner" id="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner-text">
                    <h2>Furnished Appartments in New York City </h2>
                    <p>Experience our furnished apartments in New York City, whether for a few days or a longer-term accommodation. </p>
                    <p>Choose your length of stay and come visit!</p>
                    <a href="javascript:;" class="c-dropdown">Length of stay <i class="fa-solid fa-arrow-down" data-stylerecorder="true" style="text-align: left; letter-spacing: 0px;"></i></a>
                    <ul class="lenghtstayhomepage">
                        <li><a href="{{ URL::to('/properties/short') }}">30 days or less</a></li>
                        <li><a href="{{ URL::to('/properties/long') }}">30 days +</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section> <!-- banner -->
<section class="welcome-row" id="welcome-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="subheading">
                    <h2>Welcome to NYC!</h2>
                    <p>An easy and convenient way to visit or live in New York City.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <img src="{{ asset('assets/img/about-1.png') }}" class="img-fluid">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('assets/img/about-2.png') }}" class="img-fluid">
                <br>
                <img src="{{ asset('assets/img/about-3.png') }}" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<section class="hassle-row" id="hassel-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="subheading">
                    <h2>Taking the Hassle Out of the Rental Game</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="hassle-slider">
        <div>
            <div class="single-slider">
                <div class="slider-img">
                    <img src="{{ asset('assets/img/back-2.jpg') }}" class="img-fluid">
                </div>
                <div class="slider-content">
                    <h2>1</h2>
                    <h3>Hand-Picked Properties</h3>
                    <p>Only the best apartments in nice modern buildings and great neighborhoods in New York City.</p>
                </div>
            </div>
        </div>
        <div>
            <div class="single-slider">
                <div class="slider-img">
                    <img src="{{ asset('assets/img/back-2.jpg') }}" class="img-fluid">
                </div>
                <div class="slider-content">
                    <h2>2</h2>
                    <h3>Move-in Ready</h3>
                    <p>Fully equipped apartments where you can immediately feel at home.</p>
                </div>
            </div>
        </div>
        <div>
            <div class="single-slider">
                <div class="slider-img">
                    <img src="{{ asset('assets/img/back-2.jpg') }}" class="img-fluid">
                </div>
                <div class="slider-content">
                    <h2>3</h2>
                    <h3>Flexible Stays</h3>
                    <p>Rent for a few days, month-to-month, or longer term.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="experience-row" id="experience-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="subheading">
                    <h2>Experience New York City</h2>
                </div>
            </div>
        </div>
        <div class="single-box">
            <div class="row  align-items-center">
                <div class="col-md-6">
                    <div class="gallery">
                        <a href="{{ asset('assets/img/centralpark.jpg') }}" data-fancybox="gallery2">
                            <img src="{{ asset('assets/img/centralpark.jpg') }}" class="img-fluid">
                        </a>
                        <a href="{{ asset('assets/img/statue-liberty-new-york-city-skyline-usa.jpg') }}" data-fancybox="gallery2">
                            <img src="{{ asset('assets/img/statue-liberty-new-york-city-skyline-usa.jpg') }}" class="img-fluid">
                        </a>
                        <a href="{{ asset('assets/img/timessquare.jpg') }}" data-fancybox="gallery2">
                            <img src="{{ asset('assets/img/timessquare.jpg') }}" class="img-fluid">
                        </a>
                        <a href="{{ asset('assets/img/bridge.jpg') }}" data-fancybox="gallery2">
                            <img src="{{ asset('assets/img/bridge.jpg') }}" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 pad-60">
                    <h3>Upscale Buildings, Great Neighborhoods</h3>
                    <p>Our apartments are handpicked after carefully finding the right buildings in the right neighborhoods.</p>
                    <a href="#">Read More <i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
        <div class="single-box">
            <div class="row align-items-center">
                <div class="col-md-6 pad-60">
                    <h3>Curated Living</h3>
                    <p>We use quality furnishings with an eye for beauty, comfort and design. Our units are fully supplied and ready.</p>
                    <a href="#">Read More <i class="fa-solid fa-chevron-right"></i></a>
                </div>
                <div class="col-md-6">
                    <div class="gallery">
                        <a href="{{ asset('assets/img/view-new-york-city-usa.jpg') }}" data-fancybox="gallery2">
                            <img src="{{ asset('assets/img/view-new-york-city-usa.jpg') }}" class="img-fluid">
                        </a>
                        <a href="{{ asset('assets/img/thevessel.jpg') }}" data-fancybox="gallery2">
                            <img src="{{ asset('assets/img/thevessel.jpg') }}" class="img-fluid">
                        </a>
                        <a href="{{ asset('assets/img/vertical-shot-rockefeller-center-new-york-usa.jpg') }}" data-fancybox="gallery2">
                            <img src="{{ asset('assets/img/vertical-shot-rockefeller-center-new-york-usa.jpg') }}" class="img-fluid">
                        </a>
                        <a href="{{ asset('assets/img/yankee.jpg') }}" data-fancybox="gallery2">
                            <img src="{{ asset('assets/img/yankee.jpg') }}" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section class="testimonial-row" id="testimonial-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="subheading">
                    <h3>OUR CLIENTS</h3>
                    <h2>Here’s what our satisfied users say</h2>
                </div>
            </div>
        </div>
        <div class="testimonial-slides">
            <div>
                <div class="single-slides">
                    <p>It was an absolute pleasure to stay here. Clean, stocked with amenities, comfortable furniture, delicious coffee, and the views are just as spectacular as you’d expect from the photos.</p>
                    <h6>Ahmed E.</h6>
                </div>
            </div>
            <div>
                <div class="single-slides">
                    <p>Very nice, clean, quiet apartment in a great building in an excellent part of the Upper West Side. Convenient to Central Park, restaurants, coffee, bagels, amazing food, and the American Museum of Natural History. There were fresh flowers when I arrived. Hosts were easy to communicate with and helpful.</p>
                    <h6>Erika H.</h6>
                </div>
            </div>
            <div>
                <div class="single-slides">
                    <p>What an amazing place! We had the best time in NYC. This place had everything we wanted – smart TV, great Wi-Fi, fully stocked kitchen, laundry and essentials, easy to use cordless vacuum, etc. This place is truly a gem, overseeing endless views Hudson River, the intrepid, Manhattan cruise, glimpses of Times Square and Central Park, and what not.</p>
                    <h6>Priya K.</h6>
                </div>
            </div>
            <div>
                <div class="single-slides">
                    <p>This place was amazing! The photos were exactly how it looked and felt. The view of the sunset from the room was unexpected and glorious! The host was very responsive, proactive and helpful. I highly recommend staying here you will not regret it!</p>
                    <h6>Caleb K.</h6>
                </div>
            </div>
            </div>
        </div>
    </div>
</section> -->
<!-- <section class="promo-row" id="promo-row">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="subtext">
                    <h3>PROMO VIDEO</h3>
                    <h2>Luxurious amenities yet ready for work</h2>
                    <p>Our apartments feature high-speed Wi-Fi, work space area, 2nd screen & HDMI cable hookup*, smart TV, fully equipped kitchens, BBQ areas with terrasses and lounges, access to gyms. <br>*select spaces, amenities vary by building</p>
                    <a href="#">MORE VIDEOS <i class="fa-solid fa-play"></i></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="video-box">
                    <iframe width="570" height="321" src="https://www.youtube.com/embed/HJRzUQMhJMQ" title="Video Placeholder - Brainstorm Force" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section> -->
<section class="explore-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="subheading">
                    <h2>Explore Rentals</h2>
                    <p>Your text goes here. this is just placeholder content. your text goes here. this is just placeholder</p>
                </div>
                <div class="rental-listing row">
                    
                    @foreach($properties as $property)
                        @php
                            $currency = \Illuminate\Support\Facades\DB::table('currency')->where('id',$property->currency)->first();
                            $booking='day';
                            $price=$property->price;
                            if($property->minimumbooking=='nights'){
                               $booking='night'; 
                            }
                            if($property->minimumbooking=='months'){
                               $booking='month'; 
                               $price=$property->priceMonth;
                            } 
                        @endphp
                        <div class="col-md-4">
                                <div class="single-rent">
                                    <div class="top-rent">
                                        <div class="images_property_search_slides">
                                            <div class="item">
                                                <img src="{{ URL::to('uploaded/properties/'.$property->cover) }}" class="img-fluid">
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
                                                        <img src="{{ URL::to('uploaded/galleries/'.$gallery->image) }}" class="img-fluid">      
                                                    </div>
                                                @endif
                                            @endfor
                                        </div>
                                        <div class="rent-price"><a href="{{ URL::to('/property/'.$property->slug) }}">{{$currency->name}} <span>{{$price}}</span> /{{$booking}}</a></div>
                                    </div>
                                    <div class="bottom-rent">
                                        <a href="{{ URL::to('/property/'.$property->slug) }}">
                                            <h3>{{$property->title}}</h3>
                                            <p><span>{{$property->city}}</span>, <span>{{$property->state.' '.$property->country}}</span></p>
                                        </a>
                                    </div>
                                </div>
                        </div>
                    @endforeach
                 
                </div>
                <div class="viewall">
                    <a href="{{ route('propertiesPage') }}">View All</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection