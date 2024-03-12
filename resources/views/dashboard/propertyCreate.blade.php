@extends('../dashboardLayouts.master')
@section('body')

<div class="propertyCreate dashboardProperties">
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}"><i class="metismenu-icon pe-7s-rocket"></i> Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('dashboardProperties') }}">Properties</a></li>
        <li class="breadcrumb-item active">Create New Property</li>
    </ol>

    <ul class="top_above_error" style="display:none;">
        <li></li>
    </ul>

    <form method="POST" class="property formvalidationappeared propertyCreateForm" action="{{ route('dashboardPropertyCreatePost') }}" id="botble-real-estate-forms-property-form" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="status" id="statusHidden" value="" />
        <div class="row">
            <div class="col-md-9">
                <div class="main-form">
                    <div class="form-body"> 
                        
                        <div class="form-group mb-3 title_div">
                            <label for="propertyTitle" class="control-label required" aria-required="true">Title</label>
                            <input class="form-control" placeholder="Title" name="propertyTitle" type="text" id="propertyTitle" required />
                        </div>

                        <div class="form-group mb-3 propertydescription">
                            <label for="propertyDescription" class="control-label">Description</label>
                            <textarea name="propertyDescription" id="createProperty" placeholder="Property Description"></textarea>
                        </div>

                        <div class="form-group mb-3 modalshg propertyImage">
                            <div class="modal-body">
                                <label for="images" class="control-label required">Image</label>
                                <div class="step">
                                    <div class="avatar-upload">
                                        <div class="mycustomloader">
                                            <div class="loader4"></div>
                                        </div>
                                        <div class="avatar-edit">
                                            <input type="hidden" name="image_old" value="" id="propertyAddImageOld">
                                            <input type='file' id="propertyAddImage" name="image" data-placeholder="{{ URL::to('dashboard_assets/assets/images/placeholder.png') }}" accept="image/png, image/gif, image/jpeg" />
                                            <label for="propertyAddImage"></label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="propertyAddImagePreview" style="background-image: url({{ URL::to('dashboard_assets/assets/images/placeholder.png') }});">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3 modalshg propertyGallery">
                            <div class="modal-body">
                                <label for="gallery" class="control-label">Gallery</label>
                                <div class="step">
                                    <div class="avatar-upload">
                                        <div class="mycustomloader">
                                            <div class="loader4"></div>
                                        </div>
                                        <div class="avatar-edit">
                                            <input type='file' multiple name="gallery[]" id="addGallery" data-placeholder="{{ URL::to('dashboard_assets/assets/images/placeholder.png') }}" accept="image/png, image/gif, image/jpeg" />
                                            <label for="addGallery"></label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div class="gallery" style="background-image: url({{ URL::to('dashboard_assets/assets/images/placeholder.png') }});">
                                                <ul id="addGalleryUL">
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="form-group col-md-8 propertyLocation">
                                <label for="location" class="control-label required">Property location</label>
                                <input class="form-control" placeholder="Property location" name="location" type="text" required id="propertyLocation" />
                                <input type="hidden" name="lat" id="propertyLat" value="" />
                                <input type="hidden" name="lng" id="propertyLong" value="" />
                                <input type="hidden" name="city" id="propertyCity" value="" />
                                <input type="hidden" name="state" id="propertyState" value="" />
                                <input type="hidden" name="country" id="propertyCountry" value="" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="zipcode" class="control-label required">Zipcode</label>
                                <input class="form-control" required placeholder="Zipcode" name="zipcode" type="text"  id="zipcode" />
                            </div>

                            <div class="form-group col-md-6">
                                <label for="nearestcrossstreet" class="control-label required">Nearest cross streets</label>
                                <div style="display: flex;align-items: center;">
                                    <input class="form-control" required placeholder="Nearest cross street" name="nearestcrossstreet" type="text" style=" display: inline-block; vertical-align: top; width: 49%; margin-right: 1%;" /> & <input class="form-control"  placeholder="Other nearest cross street" name="nearestcrossstreet2" type="text" style=" display: inline-block; vertical-align: top; width: 49%;  margin-left: 1%;" />
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="neighborhood" class="control-label required">Neighborhood/District</label>
                                <select class="form-control" name="neighborhood" required>
                                    <option value="">Neighborhood/District</option>
                                    <option value="Battery Park City" >Battery Park City</option>
                                    <option value="Central Harlem" >Central Harlem</option>
                                    <option value="Chelsea" >Chelsea</option>
                                    <option value="Chinatown" >Chinatown</option>
                                    <option value="Civic Center" >Civic Center</option>
                                    <option value="East Harlem" >East Harlem</option>
                                    <option value="East Village" >East Village</option>
                                    <option value="Financial District" >Financial District</option>
                                    <option value="Flatiron District" >Flatiron District</option>
                                    <option value="Garment District" >Garment District</option>
                                    <option value="Gramercy Park" >Gramercy Park</option>
                                    <option value="Greenwich Village" >Greenwich Village</option>
                                    <option value="Hamilton Heights" >Hamilton Heights</option>
                                    <option value="Hudson Yards" >Hudson Yards</option>
                                    <option value="Inwood" >Inwood</option>
                                    <option value="Kips Bay" >Kips Bay</option>
                                    <option value="Koreatown" >Koreatown</option>
                                    <option value="Lenox Hill" >Lenox Hill</option>
                                    <option value="Lincoln Square" >Lincoln Square</option>
                                    <option value="Little Italy" >Little Italy</option>
                                    <option value="Lower East Side" >Lower East Side</option>
                                    <option value="Manhattan Valley" >Manhattan Valley</option>
                                    <option value="Marble Hill" >Marble Hill</option>
                                    <option value="Meatpacking District" >Meatpacking District</option>
                                    <option value="Midtown" >Midtown</option>
                                    <option value="Midtown East" >Midtown East</option>
                                    <option value="Midtown West" >Midtown West</option>
                                    <option value="Morningside Heights" >Morningside Heights</option>
                                    <option value="Murray Hill" >Murray Hill</option>
                                    <option value="NoHo" >NoHo</option>
                                    <option value="Nolita" >Nolita</option>
                                    <option value="Roosevelt Island" >Roosevelt Island</option>
                                    <option value="SoHo" >SoHo</option>
                                    <option value="South Street Seaport" >South Street Seaport</option>
                                    <option value="Stuyvesant Town - Peter Cooper Village" >Stuyvesant Town - Peter Cooper Village</option>
                                    <option value="Sutton Place" >Sutton Place</option>
                                    <option value="Theater District" >Theater District</option>
                                    <option value="Times Square" >Times Square</option>
                                    <option value="TriBeCa" >TriBeCa</option>
                                    <option value="Tudor City" >Tudor City</option>
                                    <option value="Two Bridges" >Two Bridges</option>
                                    <option value="Turtle Bay" >Turtle Bay</option>
                                    <option value="Upper East Side" >Upper East Side</option>
                                    <option value="Upper West Side" >Upper West Side</option>
                                    <option value="Washington Heights" >Washington Heights</option>
                                    <option value="West Village" >West Village</option>
                                    <option value="Yorkville" >Yorkville</option>
                                </select>
                            </div>


                            <!-- new added start -->

                            <div class="form-group col-md-6 publishlisting setRadio">
                                <label for="publishlisting" class="control-label">Publish listing with</label>
                                <label class="input"><input type="radio" name="publishlisting" checked value="Exact Address" /> Exact Address</label>
                                <label class="input"><input type="radio" name="publishlisting" value="Cross Streets" /> Cross Streets</label>
                                <label class="input"><input type="radio" name="publishlisting" value="Neighborhood" /> Neighborhood</label>
                            </div>

                            <div class="form-group col-md-6 publishlisting allowUserAutoBook setRadio">
                                <label for="allowUserAutoBook" class="control-label">Allow guest to auto-book without prior approval</label>
                                <label class="input"><input type="radio" name="allowUserAutoBook" checked value="Yes" /> Yes</label>
                                <label class="input"><input type="radio" name="allowUserAutoBook" value="No" /> No</label>
                            </div>

                            <div class="form-group col-md-3 publishlisting petsAllowed setRadio">
                                <label for="petsAllowed" class="control-label">Pets allowed</label>
                                <label class="input"><input type="radio" name="petsAllowed" checked value="Yes" /> Yes</label>
                                <label class="input"><input type="radio" name="petsAllowed" value="No" /> No</label>
                            </div>

                            <div class="form-group col-md-3 publishlisting eventsAllowed setRadio">
                                <label for="eventsAllowed" class="control-label">Events allowed</label>
                                <label class="input"><input type="radio" name="eventsAllowed" checked value="Yes" /> Yes</label>
                                <label class="input"><input type="radio" name="eventsAllowed" value="No" /> No</label>
                            </div>

                            <div class="form-group col-md-6 publishlisting smokingAllowed setRadio">
                                <label for="smokingAllowed" class="control-label">Smoking, vaping, e‑cigarettes allowed</label>
                                <label class="input"><input type="radio" name="smokingAllowed" checked value="Yes" /> Yes</label>
                                <label class="input"><input type="radio" name="smokingAllowed" value="No" /> No</label>
                            </div>

                            <div class="form-group col-md-12 publishlisting filmingAllowed setRadio">
                                <label for="filmingAllowed" class="control-label">Commercial photography and filming allowed</label>
                                <label class="input"><input type="radio" name="filmingAllowed" checked value="Yes" /> Yes</label>
                                <label class="input"><input type="radio" name="filmingAllowed" value="No" /> No</label>
                            </div>

                            <!-- new added end -->

                            
                        </div>

                        <div class="row">

                            <div class="form-group col-md-2 setSpace">
                                <label for="quietHoursStart" class="control-label">Quiet Hours</label>
                                <select class="form-control" name="quietHoursStart">
                                    <option value="" selected disabled>Select start time</option>
                                    <option value="12 a.m." >12 a.m.</option>
                                    <option value="01 a.m." >01 a.m.</option>
                                    <option value="02 a.m." >02 a.m.</option>
                                    <option value="03 a.m." >03 a.m.</option>
                                    <option value="04 a.m." >04 a.m.</option>
                                    <option value="05 a.m." >05 a.m.</option>
                                    <option value="06 a.m." >06 a.m.</option>
                                    <option value="07 a.m." >07 a.m.</option>
                                    <option value="08 a.m." >08 a.m.</option>
                                    <option value="09 a.m." >09 a.m.</option>
                                    <option value="10 a.m." >10 a.m.</option>
                                    <option value="11 a.m." >11 a.m.</option>
                                    <option value="12 p.m." >12 p.m.</option>
                                    <option value="01 p.m." >01 p.m.</option>
                                    <option value="02 p.m." >02 p.m.</option>
                                    <option value="03 p.m." >03 p.m.</option>
                                    <option value="04 p.m." >04 p.m.</option>
                                    <option value="05 p.m." >05 p.m.</option>
                                    <option value="06 p.m." >06 p.m.</option>
                                    <option value="07 p.m." >07 p.m.</option>
                                    <option value="08 p.m." >08 p.m.</option>
                                    <option value="09 p.m." >09 p.m.</option>
                                    <option value="10 p.m." >10 p.m.</option>
                                    <option value="11 p.m." >11 p.m.</option>
                                    <option value="12 p.m." >12 p.m.</option>
                                </select>
                            </div>

                            <div class="form-group col-md-2 setSpace">
                                <label for="quietHoursEnd" class="control-label">Quiet Hours</label>
                                <select class="form-control" name="quietHoursEnd">
                                    <option value="" selected disabled>Select end time</option>
                                    <option value="12 a.m." >12 a.m.</option>
                                    <option value="01 a.m." >01 a.m.</option>
                                    <option value="02 a.m." >02 a.m.</option>
                                    <option value="03 a.m." >03 a.m.</option>
                                    <option value="04 a.m." >04 a.m.</option>
                                    <option value="05 a.m." >05 a.m.</option>
                                    <option value="06 a.m." >06 a.m.</option>
                                    <option value="07 a.m." >07 a.m.</option>
                                    <option value="08 a.m." >08 a.m.</option>
                                    <option value="09 a.m." >09 a.m.</option>
                                    <option value="10 a.m." >10 a.m.</option>
                                    <option value="11 a.m." >11 a.m.</option>
                                    <option value="12 p.m." >12 p.m.</option>
                                    <option value="01 p.m." >01 p.m.</option>
                                    <option value="02 p.m." >02 p.m.</option>
                                    <option value="03 p.m." >03 p.m.</option>
                                    <option value="04 p.m." >04 p.m.</option>
                                    <option value="05 p.m." >05 p.m.</option>
                                    <option value="06 p.m." >06 p.m.</option>
                                    <option value="07 p.m." >07 p.m.</option>
                                    <option value="08 p.m." >08 p.m.</option>
                                    <option value="09 p.m." >09 p.m.</option>
                                    <option value="10 p.m." >10 p.m.</option>
                                    <option value="11 p.m." >11 p.m.</option>
                                    <option value="12 p.m." >12 p.m.</option>
                                </select>
                            </div>

                            <div class="form-group mb-2 col-md-2 propertyPrice setSpace">
                                <label for="location" class="control-label required">Price/night</label>
                                <p>
                                    <span>$
                                        <select name="currency" required style="display:none;">
                                            @foreach($currencies as $currency)
                                                <option value="{{$currency->id}}" selected>{{$currency->name}}</option>
                                            @endforeach
                                        </select>
                                    </span>
                                    <input class="form-control" placeholder="Price/night" name="price" type="number" min=0 required id="price" /></p>
                            </div>

                            <div class="form-group mb-2 col-md-2 propertyPrice setSpace">
                                <label for="location" class="control-label required">Price/month</label>
                                <p>
                                    <span>$
                                        <select name="currency" required style="display:none;">
                                            @foreach($currencies as $currency)
                                                <option value="{{$currency->id}}" selected>{{$currency->name}}</option>
                                            @endforeach
                                        </select>
                                    </span>
                                    <input class="form-control" placeholder="Price/month" name="priceMonth" type="number" min=0 required id="priceMonth" /></p>
                            </div>

                            <div class="form-group mb-2 col-md-2 propertyPrice setSpace">
                                <label for="currency_guest" class="control-label">Extra Per Guest Price</label>
                                <p>
                                    <span>$
                                        <select name="currency_guest" style="display:none;">
                                            @foreach($currencies as $currency)
                                                <option value="{{$currency->id}}" selected>{{$currency->name}}</option>
                                            @endforeach
                                        </select>
                                    </span>
                                    <input class="form-control" placeholder="Price" name="priceguest" type="number" min=0 id="priceguest" /></p>
                            </div>

                            <div class="form-group mb-2 col-md-2 propertyPrice setSpace">
                                <label for="currency_security" class="control-label">Security Deposit</label>
                                <p>
                                    <span>$
                                        <select name="currency_security" style="display:none;">
                                            @foreach($currencies as $currency)
                                                <option value="{{$currency->id}}" selected>{{$currency->name}}</option>
                                            @endforeach
                                        </select>
                                    </span>
                                    <input class="form-control" placeholder="Price" name="securitydeposit" type="number" min=0  id="securitydeposit" /></p>
                            </div>

                            <div class="form-group mb-2 col-md-2 setSpace">
                                <label for="number_bedroom" class="control-label required">Sofa Bed</label>
                                <select class="form-control" name="bedrooms" required id="number_bedroom">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>

                            <div class="form-group mb-2 col-md-2 setSpace">
                                <label for="number_bedroom" class="control-label required">King Bed</label>
                                <select class="form-control" name="kingbed" id="number_kingbed">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>

                            <div class="form-group mb-2 col-md-2 setSpace">
                                <label for="number_bedroom" class="control-label required">Queen Bed</label>
                                <select class="form-control" name="queenbed" id="number_queenbed">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>

                            <div class="form-group mb-2 col-md-2 setSpace">
                                <label for="number_bedroom" class="control-label required">Double Bed</label>
                                <select class="form-control" name="doublebed" id="number_doublebed">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>

                            <div class="form-group mb-2 col-md-2 setSpace">
                                <label for="number_bedroom" class="control-label required">Single Bed</label>
                                <select class="form-control" name="singlebed" id="number_singlebed">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>

                            <div class="form-group mb-2 col-md-2 setSpace" style="display:none;">
                                <label for="number_bedroom" class="control-label required">Couch</label>
                                <select class="form-control" name="couch" id="number_couch">
                                    <option value="0">0</option>
                                </select>
                            </div>

                            <div class="form-group mb-2 col-md-2 setSpace">
                                <label for="number_guests" class="control-label ">Max Guests</label>
                                <select class="form-control" name="number_guests" id="number_guests">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>

                            <div class="form-group mb-2 col-md-2 setSpace" style="display:none;">
                                <label for="number_floors" class="control-label ">Number of Floors</label>
                                <select class="form-control" name="number_floors" id="number_floors">
                                    <option value="1">1</option>
                                </select>
                            </div>

                            <div class="form-group mb-2 col-md-2 setSpace">
                                <label for="number_bathroom" class="control-label ">Bathrooms</label>
                                <select class="form-control" name="number_bathroom" id="number_bathroom">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>

                            <div class="form-group mb-2 col-md-2 setSpace">
                                <label for="number_kitchen" class="control-label ">Kitchens</label>
                                <select class="form-control" name="number_kitchen" id="number_kitchen">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>

                            <div class="form-group mb-2 col-md-2 setSpace">
                                <label for="size" class="control-label ">Size in ft2</label>
                                <input class="form-control" placeholder="Size in ft2" name="size" type="number" min=0 id="size" />
                            </div>

                            <div class="form-group mb-2 col-md-2 setSpace">
                                <label for="rooms" class="control-label ">Bedrooms</label>
                                <select class="form-control" name="rooms" id="rooms">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>

                            <div class="form-group mb-2 col-md-2 setSpace">
                                <label for="minimumbooking" class="control-label required">Minimum Booking</label>
                                <select name="minimumbooking" style="width: 100%;" required>
                                    <option value="">Select</option>
                                    <option value="nights">Nights</option>
                                    <option value="months">Months</option>
                                </select>
                            </div>

                            <div class="form-group mb-2 col-md-2 propertyPrice setSpace">
                                <label for="currency_cancellationfee" class="control-label">Cancellation Fee</label>
                                <p>
                                    <span>%
                                        <select name="currency_cancellationfee" style="display:none;">
                                            @foreach($currencies as $currency)
                                                <option value="{{$currency->id}}" selected>{{$currency->name}}</option>
                                            @endforeach
                                        </select>
                                    </span>
                                    <input class="form-control" placeholder="Cancellation Fee" name="cancellationfee" type="number" min=0 value="0" id="cancellationfee" /></p>
                            </div>

                            <div class="form-group mb-2 col-md-2 setSpace">
                                <label for="minimumbookingnumber" class="control-label required">Minimum Booking Nights/Months</label>
                                <input type="number" style="width: 100%;"  name="minimumbookingnumber" min=0 value="">
                            </div>

                       </div>

                        <div class="widget-title" style="background:unset;border-bottom-color:#ebeae8;">
                            <h4>
                                <span>Service Fees</span>
                            </h4>
                        </div>
                        <div class="widget-body" style="min-height: 100px;">

                        @if($serviceFees!=null)

                            <div class="row">
                                
                                @foreach($serviceFees as $serviceFee)
                                        @if($serviceFee->amount==0)
                                            <div class="form-group mb-3 col-md-3 propertyPrice">
                                                <label for="serviceFee{{$serviceFee->id}}" class="control-label">{{$serviceFee->title}}</label>
                                                <p style="display: flex;">
                                                    <input type="hidden" name="serviceFeeName[]" value="{{$serviceFee->id}}">
                                                    <span style=" display: inline-flex; align-items: center; padding-right: 10px; ">$
                                                        <select name="serviceFeeCurrency[]" style="display:none;">
                                                            @foreach($currencies as $currency)
                                                                <option value="{{$currency->id}}" selected>{{$currency->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </span>
                                                    <input style="border-top-left-radius: unset; border-bottom-left-radius: unset;" class="form-control" name="serviceFeeValue[]" type="number" min=0 value="0" id="serviceFee{{$serviceFee->id}}" />
                                                </p>
                                            </div>
                                        @endif
                                @endforeach

                            </div>
                            
                        @endif

                        </div>

                        <div class="form-group mb-3">
                            <label for="privatenotes" class="control-label">Private Notes</label>
                            <textarea class="form-control" rows="4" placeholder="Private Notes" name="privatenotes" cols="50" id="privatenotes"></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="cancellationpolicy" class="control-label">Cancellation Policy</label>
                            <textarea class="form-control" rows="4" placeholder="Cancellation Policy" name="cancellationpolicy" cols="50" id="cancellationpolicy"></textarea>
                        </div>

                        <div class="form-group mb-3 propertyVideo">
                            <label for="location" class="control-label">Video (Max Size: 5MB)</label>
                            <div class="upload_document">
                                <label for="hiddenBtn" class="choose-btn" id="chooseBtnvideo">Upload Video</label>
                                <input type="file" onchange="validateSize(this)"  multiple name="video" accept="video/mp4,video/x-m4v,video/*" id="hiddenBtnvideo">
                            </div>
                        </div>

                        <div class="form-group mb-3 propertyDocument">
                            <label for="location" class="control-label">Document (Max Size: 5MB)</label>
                            <div class="upload_document">
                                <label for="hiddenBtn" class="choose-btn" id="chooseBtndocument">Upload Document</label>
                                <input type="file" onchange="validateSize(this)"  multiple accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" name="dcoument" id="hiddenBtndocument">
                            </div>
                        </div>

                    </div>
                </div>
                

                <div class="widget meta-boxes Services">
                    <div class="widget-title">
                        <h4>
                            <span>Services</span>
                        </h4>
                    </div>
                    <div class="widget-body">
                        <ul>
                            @foreach($services as $service)
                                <li style="margin-bottom: 30px;">
                                    <input name="services[]" type="checkbox" value="{{$service->id}}" />
                                    @if($service->image!='')
                                        <img src="{{ URL::to('uploaded/properties/'.$service->image) }}" alt="Image" />
                                    @else
                                        <img src="{{ URL::to('https://shg.webpythons.com/dashboard_assets/assets/images/placeholder.png') }}" alt="Image" /> 
                                    @endif
                                    {{$service->title}}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="widget meta-boxes Amenities">
                    <div class="widget-title">
                        <h4>
                            <span>Apartment Features</span>
                        </h4>
                    </div>
                    <div class="widget-body">
                        <ul>
                            @foreach($apartmentFeatures as $amenity)
                                <li>
                                    <label>
                                    <input name="apartmentFeatures[]" type="checkbox" value="{{$amenity->id}}" />
                                    @if($amenity->image!='')
                                        <i style="font-size: 16px;" class="{{$amenity->image}}"></i>
                                    @else
                                        <img src="{{ URL::to('https://shg.webpythons.com/dashboard_assets/assets/images/placeholder.png') }}" alt="Image" /> 
                                    @endif
                                    {{$amenity->title}}
                                    </label>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="widget meta-boxes Amenities">
                    <div class="widget-title">
                        <h4>
                            <span>Building Amenities</span>
                        </h4>
                    </div>
                    <div class="widget-body">
                        <ul>
                            @foreach($buildingAmenities as $amenity)
                                <li>
                                    <label><input name="buildingAmenities[]" type="checkbox" value="{{$amenity->id}}" />
                                    @if($amenity->image!='')
                                        <i style="font-size: 16px;" class="{{$amenity->image}}"></i>
                                    @else
                                        <img src="{{ URL::to('https://shg.webpythons.com/dashboard_assets/assets/images/placeholder.png') }}" alt="Image" /> 
                                    @endif
                                    {{$amenity->title}}
                                    </label>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="widget meta-boxes terms">
                    <div class="widget-title">
                        <h4>
                            <span>House Rules</span>
                        </h4>
                    </div>
                    <div class="widget-body">
                        <ul>
                            <li><input type="text" name="terms[]" class="terms"><i class="fa fa-plus"></i></li>
                        </ul>
                    </div>
                </div>

                <div class="widget meta-boxes Addition">
                    <div class="widget-title">
                        <h4>
                            <span>Owner Detail</span>
                        </h4>
                    </div>
                    <div class="widget-body">
                        
                        <div class="row">

                            <div class="form-group mb-3 col-md-6">
                                <label for="ownerstatus" class="control-label required">Onwer Status</label>
                                <select name="ownerstatus" class="form-control" required>
                                    <option value="Owner">Owner</option>
                                    <option value="Leaseholder">Leaseholder</option>
                                </select>
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label for="companyname" class="control-label">Company Name</label>
                                <input class="form-control" placeholder="Company Name" name="companyname" type="text" id="companyname">
                            </div>

                        </div>
 
                    </div>
                </div>

            </div>
            <div class="col-md-3 right-sidebar">
                
                <div class="widget meta-boxes form-actions form-actions-default action-horizontal">
                    <div class="widget-title">
                        <h4>
                            <span>Publish</span>
                        </h4>
                    </div>
                    <div class="widget-body">
                        <div class="btn-set">
                            <button style="display:none;" type="button" id="draft_this_property_action" class="btn btn-success"><i class="fa fa-check-circle"></i> Draft</button>
                            <button type="button" id="publish_this_property_action" class="btn btn-info"><i class="fa fa-save"></i> Publish</button>
                        </div>
                    </div>
                </div>
             
                <div class="widget meta-boxes">
                    <div class="widget-title">
                        <h4><label for="project_id" class="control-label required">Booking Type</label></h4>
                    </div>
                    <div class="widget-body">
                        <div class="ui-select-wrapper form-group">
                            <select class="form-control ui-select ui-select" name="bookingtype" required>
                                <option value="">Select Type</option>
                                @foreach($types as $typez)
                                <option value="{{$typez->id}}">{{$typez->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="widget meta-boxes">
                    <div class="widget-title">
                        <h4><label for="project_id" class="control-label required">Property Type</label></h4>
                    </div>
                    <div class="widget-body">
                        <div class="ui-select-wrapper form-group">
                            <select class="form-control ui-select ui-select" name="propertytype" required>
                                <option value="">Select Type</option>
                                @foreach($roomtypes as $typex)
                                <option value="{{$typex->id}}">{{$typex->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="widget meta-boxes">
                    <div class="widget-title">
                        <h4><label class="control-label">Categories</label></h4>
                    </div>
                    <div class="widget-body">
                        <div class="form-group form-group-no-margin">
                            <div class="multi-choices-widget list-item-checkbox mCustomScrollbar _mCS_1 mCS_no_scrollbar" style="padding: 0px;">
                                <div id="mCSB_1" class="mCustomScrollBox mCS-dark mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0">
                                    <div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0; left: 0;" dir="ltr">
                                        <ul>
                                            @foreach($categories as $category)
                                            <li>
                                                <label class="mb-2">
                                                    <input type="checkbox" value="{{$category->id}}" name="categories[]" />
                                                    {{$category->title}}
                                                </label>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="widget meta-boxes tags">
                    <div class="widget-title">
                        <h4><label for="project_id" class="control-label">Tags</label></h4>
                    </div>
                    <div class="widget-body">
                        <div class="ui-select-wrapper form-group">
                            <div id="addTagsAppearedInput">
                                <input type="text" name="tag" placeholder="Tags" />
                                <button type="button">Add</button>
                            </div>
                            <ul id="addTagsAppeared">
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <input type="submit" name="submit" value="submit" style="display:none;" id="InputSubmit">
    </form>

</div>

@endsection