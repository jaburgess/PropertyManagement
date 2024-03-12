@extends('../Layout.master')
@section('body')
<section class="page-banner">
    <img src="{{ asset('assets/img/banner-1-min.png') }}" class="img-fluid">
</section>

<section class="content">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2>About Us</h2>
                <p>Welcome to ABRentals.com, where we offer beautifully furnished apartments in Manhattan, born from our own need for reliable rentals in New York City. 
                    Each apartment is handpicked, reflecting our commitment to ensuring your stay is enjoyable. 
                    We meticulously select neighborhoods, buildings, and amenities, always asking ourselves,
                    'Would I want to live here?' What you see on our website is precisely what you'll find upon arrival — no exaggerations, no deceptive photography.
                    We pride ourselves on offering the best of New York City living, ensuring a comfortable and authentic experience. <br>Enjoy your visit! <br><strong>ABRentals.com</strong></p>
            </div>
            <!-- <div class="col-md-6">
                <img src="{{ asset('assets/img/mf.jpg') }}" class="img-fluid">
            </div> -->
        </div>
    </div>
</section>
@endsection