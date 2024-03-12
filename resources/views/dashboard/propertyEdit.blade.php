@extends('../dashboardLayouts.master')
@section('body')

<div class="propertyCreate dashboardProperties">
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}"><i class="metismenu-icon pe-7s-rocket"></i> Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('dashboardProperties') }}">Properties</a></li>
        <li class="breadcrumb-item active">Edit Property</li>
    </ol>

    <ul class="top_above_error" style="display:none;">
        <li></li>
    </ul>

    <form method="POST" class="property formvalidationappeared propertyCreateForm" action="{{ route('dashboardPropertiesEditPost') }}" id="botble-real-estate-forms-property-form" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="status" id="statusHidden" value="" />
        <input type="hidden" name="id" value="{{$property->id}}">
        <div class="row">
            <div class="col-md-9">
                <div class="main-form">
                    <div class="form-body">
                        
                        <div class="form-group mb-3 title_div">
                            <label for="propertyTitle" class="control-label required" aria-required="true">Title</label>
                            <input class="form-control" placeholder="Title" name="propertyTitle" type="text" value="{{$property->title}}"  id="propertyTitle" required />
                        </div>

                        <div class="form-group mb-3 propertydescription">
                            <label for="propertyDescription" class="control-label">Description</label>
                            <textarea name="propertyDescription" id="createProperty" placeholder="Property Description">{{$property->description}}</textarea>
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
                                            <input type="hidden" name="image_old" value="{{$property->cover}}" id="propertyAddImageOld">
                                            <input type='file' id="propertyAddImage" name="image" data-placeholder="{{ URL::to('dashboard_assets/assets/images/placeholder.png') }}" accept="image/png, image/gif, image/jpeg" />
                                            <label for="propertyAddImage"></label>
                                        </div>
                                        <div class="avatar-preview">
                                            @if($property->cover!='')
                                                <div id="propertyAddImagePreview" style="background-image: url({{ URL::to('uploaded/properties/'.$property->cover) }});">
                                                </div>
                                            @else
                                                <div id="propertyAddImagePreview" style="background-image: url({{ URL::to('dashboard_assets/assets/images/placeholder.png') }});">
                                                </div>
                                            @endif
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
                                        @php $galleriesArray=explode(",",$property->gallery); @endphp
                                        <div class="avatar-preview">
                                            <div class="gallery gallery @if($property->gallery!=null && count($galleriesArray)>0) hideBG @endif" style="background-image: url({{ URL::to('dashboard_assets/assets/images/placeholder.png') }});">
                                                <ul id="addGalleryUL">
                                                    @for($gi=0;$gi<count($galleriesArray);$gi++)
                                                        @foreach($galleries as $gallery)
                                                            @if($gallery->id==$galleriesArray[$gi])
                                                                <li>
                                                                    <img class="imageThumb" src="{{ URL::to('uploaded/galleries/'.$gallery->image) }}" '="">
                                                                    <input type="hidden" name="uploaded_galleries[]" class="id" value="{{$galleriesArray[$gi]}}">
                                                                    <i class="fa fa-times remove"></i>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                    @endfor
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
                                <input class="form-control" placeholder="Property location" name="location" value="{{$property->location}}" type="text" required id="propertyLocation" />
                                <input type="hidden" name="lat" id="propertyLat" value="{{$property->lat}}" />
                                <input type="hidden" name="lng" id="propertyLong" value="{{$property->lng}}" />
                                <input type="hidden" name="city" id="propertyCity" value="{{$property->city}}" />
                                <input type="hidden" name="state" id="propertyState" value="{{$property->state}}" />
                                <input type="hidden" name="country" id="propertyCountry" value="{{$property->country}}" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="zipcode" class="control-label required">Zipcode</label>
                                <input class="form-control" required placeholder="Zipcode" name="zipcode" value="{{$property->zipcode}}" type="text"  id="zipcode" />
                            </div>

                            <div class="form-group col-md-6">
                                <label for="nearestcrossstreet" class="control-label required">Nearest cross streets</label>
                                <div style="display: flex;align-items: center;">
                                    <input class="form-control" required placeholder="Nearest cross street" value="{{$property->nearestcrossstreet}}" name="nearestcrossstreet" type="text" style=" display: inline-block; vertical-align: top; width: 49%; margin-right: 1%;" /> & <input class="form-control"  placeholder="Other nearest cross street" name="nearestcrossstreet2" value="{{$property->nearestcrossstreet2}}" type="text" style=" display: inline-block; vertical-align: top; width: 49%;  margin-left: 1%; " />
                                </div>
                            </div>

                             <div class="form-group col-md-6">
                                <label for="neighborhood" class="control-label required">Neighborhood/District</label>
                                <select class="form-control" name="neighborhood" required>
                                    <option value="">Neighborhood/District</option>
                                    <option @if($property->neighborhood=="Battery Park City") selected @endif value="Battery Park City" >Battery Park City</option>
                                    <option @if($property->neighborhood=="Central Harlem") selected @endif value="Central Harlem" >Central Harlem</option>
                                    <option @if($property->neighborhood=="Chelsea") selected @endif value="Chelsea" >Chelsea</option>
                                    <option @if($property->neighborhood=="Chinatown") selected @endif value="Chinatown" >Chinatown</option>
                                    <option @if($property->neighborhood=="Civic Center") selected @endif value="Civic Center" >Civic Center</option>
                                    <option @if($property->neighborhood=="East Harlem") selected @endif value="East Harlem" >East Harlem</option>
                                    <option @if($property->neighborhood=="East Village") selected @endif value="East Village" >East Village</option>
                                    <option @if($property->neighborhood=="Financial District") selected @endif value="Financial District" >Financial District</option>
                                    <option @if($property->neighborhood=="Flatiron District") selected @endif value="Flatiron District" >Flatiron District</option>
                                    <option @if($property->neighborhood=="Garment District") selected @endif value="Garment District" >Garment District</option>
                                    <option @if($property->neighborhood=="Gramercy Park") selected @endif value="Gramercy Park" >Gramercy Park</option>
                                    <option @if($property->neighborhood=="Greenwich Village") selected @endif value="Greenwich Village" >Greenwich Village</option>
                                    <option @if($property->neighborhood=="Hamilton Heights") selected @endif value="Hamilton Heights" >Hamilton Heights</option>
                                    <option @if($property->neighborhood=="Hudson Yards") selected @endif value="Hudson Yards" >Hudson Yards</option>
                                    <option @if($property->neighborhood=="Inwood") selected @endif value="Inwood" >Inwood</option>
                                    <option @if($property->neighborhood=="Kips Bay") selected @endif value="Kips Bay" >Kips Bay</option>
                                    <option @if($property->neighborhood=="Koreatown") selected @endif value="Koreatown" >Koreatown</option>
                                    <option @if($property->neighborhood=="Lenox Hill") selected @endif value="Lenox Hill" >Lenox Hill</option>
                                    <option @if($property->neighborhood=="Lincoln Square") selected @endif value="Lincoln Square" >Lincoln Square</option>
                                    <option @if($property->neighborhood=="Little Italy") selected @endif value="Little Italy" >Little Italy</option>
                                    <option @if($property->neighborhood=="Lower East Side") selected @endif value="Lower East Side" >Lower East Side</option>
                                    <option @if($property->neighborhood=="Manhattan Valley") selected @endif value="Manhattan Valley" >Manhattan Valley</option>
                                    <option @if($property->neighborhood=="Marble Hill") selected @endif value="Marble Hill" >Marble Hill</option>
                                    <option @if($property->neighborhood=="Meatpacking District") selected @endif value="Meatpacking District" >Meatpacking District</option>
                                    <option @if($property->neighborhood=="Midtown") selected @endif value="Midtown" >Midtown</option>
                                    <option @if($property->neighborhood=="Midtown East") selected @endif value="Midtown East" >Midtown East</option>
                                    <option @if($property->neighborhood=="Midtown West") selected @endif value="Midtown West" >Midtown West</option>
                                    <option @if($property->neighborhood=="Morningside Heights") selected @endif value="Morningside Heights" >Morningside Heights</option>
                                    <option @if($property->neighborhood=="Murray Hill") selected @endif value="Murray Hill" >Murray Hill</option>
                                    <option @if($property->neighborhood=="NoHo") selected @endif value="NoHo" >NoHo</option>
                                    <option @if($property->neighborhood=="Nolita") selected @endif value="Nolita" >Nolita</option>
                                    <option @if($property->neighborhood=="Roosevelt Island") selected @endif value="Roosevelt Island" >Roosevelt Island</option>
                                    <option @if($property->neighborhood=="SoHo") selected @endif value="SoHo" >SoHo</option>
                                    <option @if($property->neighborhood=="South Street Seaport") selected @endif value="South Street Seaport" >South Street Seaport</option>
                                    <option @if($property->neighborhood=="Stuyvesant Town - Peter Cooper Village") selected @endif value="Stuyvesant Town - Peter Cooper Village" >Stuyvesant Town - Peter Cooper Village</option>
                                    <option @if($property->neighborhood=="Sutton Place") selected @endif value="Sutton Place" >Sutton Place</option>
                                    <option @if($property->neighborhood=="Theater District") selected @endif value="Theater District" >Theater District</option>
                                    <option @if($property->neighborhood=="Times Square") selected @endif value="Times Square" >Times Square</option>
                                    <option @if($property->neighborhood=="TriBeCa") selected @endif value="TriBeCa" >TriBeCa</option>
                                    <option @if($property->neighborhood=="Tudor City") selected @endif value="Tudor City" >Tudor City</option>
                                    <option @if($property->neighborhood=="Two Bridges") selected @endif value="Two Bridges" >Two Bridges</option>
                                    <option @if($property->neighborhood=="Turtle Bay") selected @endif value="Turtle Bay" >Turtle Bay</option>
                                    <option @if($property->neighborhood=="Upper East Side") selected @endif value="Upper East Side" >Upper East Side</option>
                                    <option @if($property->neighborhood=="Upper West Side") selected @endif value="Upper West Side" >Upper West Side</option>
                                    <option @if($property->neighborhood=="Washington Heights") selected @endif value="Washington Heights" >Washington Heights</option>
                                    <option @if($property->neighborhood=="West Village") selected @endif value="West Village" >West Village</option>
                                    <option @if($property->neighborhood=="Yorkville") selected @endif value="Yorkville" >Yorkville</option>
                                </select>
                            </div>


                            <!-- new added start -->

                            <div class="form-group col-md-6 publishlisting setRadio">
                                <label for="publishlisting" class="control-label">Publish listing with</label>
                                <label class="input"><input type="radio" name="publishlisting" @if($property->publishlisting=='Exact Address') checked @endif value="Exact Address" /> Exact Address</label>
                                <label class="input"><input type="radio" name="publishlisting" @if($property->publishlisting=='Cross Streets') checked @endif value="Cross Streets" /> Cross Streets</label>
                                <label class="input"><input type="radio" name="publishlisting" @if($property->publishlisting=='Neighborhood') checked @endif value="Neighborhood" /> Neighborhood</label>
                            </div>

                            <div class="form-group col-md-6 publishlisting allowUserAutoBook setRadio">
                                <label for="allowUserAutoBook" class="control-label">Allow guest to auto-book without prior approval</label>
                                <label class="input"><input type="radio" name="allowUserAutoBook" @if($property->allowUserAutoBook=='Yes') checked @endif value="Yes" /> Yes</label>
                                <label class="input"><input type="radio" name="allowUserAutoBook" @if($property->allowUserAutoBook=='No') checked @endif value="No" /> No</label>
                            </div>

                            <div class="form-group col-md-3 publishlisting petsAllowed setRadio">
                                <label for="petsAllowed" class="control-label">Pets allowed</label>
                                <label class="input"><input type="radio" name="petsAllowed" @if($property->petsAllowed=='Yes') checked @endif value="Yes" /> Yes</label>
                                <label class="input"><input type="radio" name="petsAllowed" @if($property->petsAllowed=='No') checked @endif value="No" /> No</label>
                            </div>

                            <div class="form-group col-md-3 publishlisting eventsAllowed setRadio">
                                <label for="eventsAllowed" class="control-label">Events allowed</label>
                                <label class="input"><input type="radio" name="eventsAllowed" @if($property->eventsAllowed=='Yes') checked @endif  value="Yes" /> Yes</label>
                                <label class="input"><input type="radio" name="eventsAllowed" @if($property->eventsAllowed=='No') checked @endif value="No" /> No</label>
                            </div>

                            <div class="form-group col-md-6 publishlisting smokingAllowed setRadio">
                                <label for="smokingAllowed" class="control-label">Smoking, vaping, e‑cigarettes allowed</label>
                                <label class="input"><input type="radio" name="smokingAllowed" @if($property->smokingAllowed=='Yes') checked @endif value="Yes" /> Yes</label>
                                <label class="input"><input type="radio" name="smokingAllowed" @if($property->smokingAllowed=='No') checked @endif value="No" /> No</label>
                            </div>

                            <div class="form-group col-md-12 publishlisting filmingAllowed setRadio">
                                <label for="filmingAllowed" class="control-label">Commercial photography and filming allowed</label>
                                <label class="input"><input type="radio" name="filmingAllowed" @if($property->filmingAllowed=='Yes') checked @endif value="Yes" /> Yes</label>
                                <label class="input"><input type="radio" name="filmingAllowed" @if($property->filmingAllowed=='No') checked @endif value="No" /> No</label>
                            </div>

                            <!-- new added end -->

                           
                        </div>

                        <div class="row">

                            <div class="form-group col-md-2 setSpace">
                                <label for="quietHoursStart" class="control-label">Quiet Hours</label>
                                <select class="form-control" name="quietHoursStart">
                                    <option value="" selected disabled>Select start time</option>
                                    <option  @if($property->quietHoursStart=="12 a.m.") selected @endif value="12 a.m." >12 a.m.</option>
                                    <option  @if($property->quietHoursStart=="01 a.m.") selected @endif value="01 a.m." >01 a.m.</option>
                                    <option  @if($property->quietHoursStart=="02 a.m.") selected @endif value="02 a.m." >02 a.m.</option>
                                    <option  @if($property->quietHoursStart=="03 a.m.") selected @endif value="03 a.m." >03 a.m.</option>
                                    <option  @if($property->quietHoursStart=="04 a.m.") selected @endif value="04 a.m." >04 a.m.</option>
                                    <option  @if($property->quietHoursStart=="05 a.m.") selected @endif value="05 a.m." >05 a.m.</option>
                                    <option  @if($property->quietHoursStart=="06 a.m.") selected @endif value="06 a.m." >06 a.m.</option>
                                    <option  @if($property->quietHoursStart=="07 a.m.") selected @endif value="07 a.m." >07 a.m.</option>
                                    <option  @if($property->quietHoursStart=="08 a.m.") selected @endif value="08 a.m." >08 a.m.</option>
                                    <option  @if($property->quietHoursStart=="09 a.m.") selected @endif value="09 a.m." >09 a.m.</option>
                                    <option  @if($property->quietHoursStart=="10 a.m.") selected @endif value="10 a.m." >10 a.m.</option>
                                    <option  @if($property->quietHoursStart=="11 a.m.") selected @endif value="11 a.m." >11 a.m.</option>
                                    <option  @if($property->quietHoursStart=="12 p.m.") selected @endif value="12 p.m." >12 p.m.</option>
                                    <option  @if($property->quietHoursStart=="01 p.m.") selected @endif value="01 p.m." >01 p.m.</option>
                                    <option  @if($property->quietHoursStart=="02 p.m.") selected @endif value="02 p.m." >02 p.m.</option>
                                    <option  @if($property->quietHoursStart=="03 p.m.") selected @endif value="03 p.m." >03 p.m.</option>
                                    <option  @if($property->quietHoursStart=="04 p.m.") selected @endif value="04 p.m." >04 p.m.</option>
                                    <option  @if($property->quietHoursStart=="05 p.m.") selected @endif value="05 p.m." >05 p.m.</option>
                                    <option  @if($property->quietHoursStart=="06 p.m.") selected @endif value="06 p.m." >06 p.m.</option>
                                    <option  @if($property->quietHoursStart=="07 p.m.") selected @endif value="07 p.m." >07 p.m.</option>
                                    <option  @if($property->quietHoursStart=="08 p.m.") selected @endif value="08 p.m." >08 p.m.</option>
                                    <option  @if($property->quietHoursStart=="09 p.m.") selected @endif value="09 p.m." >09 p.m.</option>
                                    <option  @if($property->quietHoursStart=="10 p.m.") selected @endif value="10 p.m." >10 p.m.</option>
                                    <option  @if($property->quietHoursStart=="11 p.m.") selected @endif value="11 p.m." >11 p.m.</option>
                                    <option  @if($property->quietHoursStart=="12 p.m.") selected @endif value="12 p.m." >12 p.m.</option>
                                </select>
                            </div>

                            <div class="form-group col-md-2 setSpace">
                                <label for="quietHoursEnd" class="control-label">Quiet Hours</label>
                                <select class="form-control" name="quietHoursEnd">
                                    <option value="" selected disabled>Select end time</option>
                                    <option  @if($property->quietHoursEnd=="12 a.m.") selected @endif value="12 a.m." >12 a.m.</option>
                                    <option  @if($property->quietHoursEnd=="01 a.m.") selected @endif value="01 a.m." >01 a.m.</option>
                                    <option  @if($property->quietHoursEnd=="02 a.m.") selected @endif value="02 a.m." >02 a.m.</option>
                                    <option  @if($property->quietHoursEnd=="03 a.m.") selected @endif value="03 a.m." >03 a.m.</option>
                                    <option  @if($property->quietHoursEnd=="04 a.m.") selected @endif value="04 a.m." >04 a.m.</option>
                                    <option  @if($property->quietHoursEnd=="05 a.m.") selected @endif value="05 a.m." >05 a.m.</option>
                                    <option  @if($property->quietHoursEnd=="06 a.m.") selected @endif value="06 a.m." >06 a.m.</option>
                                    <option  @if($property->quietHoursEnd=="07 a.m.") selected @endif value="07 a.m." >07 a.m.</option>
                                    <option  @if($property->quietHoursEnd=="08 a.m.") selected @endif value="08 a.m." >08 a.m.</option>
                                    <option  @if($property->quietHoursEnd=="09 a.m.") selected @endif value="09 a.m." >09 a.m.</option>
                                    <option  @if($property->quietHoursEnd=="10 a.m.") selected @endif value="10 a.m." >10 a.m.</option>
                                    <option  @if($property->quietHoursEnd=="11 a.m.") selected @endif value="11 a.m." >11 a.m.</option>
                                    <option  @if($property->quietHoursEnd=="12 p.m.") selected @endif value="12 p.m." >12 p.m.</option>
                                    <option  @if($property->quietHoursEnd=="01 p.m.") selected @endif value="01 p.m." >01 p.m.</option>
                                    <option  @if($property->quietHoursEnd=="02 p.m.") selected @endif value="02 p.m." >02 p.m.</option>
                                    <option  @if($property->quietHoursEnd=="03 p.m.") selected @endif value="03 p.m." >03 p.m.</option>
                                    <option  @if($property->quietHoursEnd=="04 p.m.") selected @endif value="04 p.m." >04 p.m.</option>
                                    <option  @if($property->quietHoursEnd=="05 p.m.") selected @endif value="05 p.m." >05 p.m.</option>
                                    <option  @if($property->quietHoursEnd=="06 p.m.") selected @endif value="06 p.m." >06 p.m.</option>
                                    <option  @if($property->quietHoursEnd=="07 p.m.") selected @endif value="07 p.m." >07 p.m.</option>
                                    <option  @if($property->quietHoursEnd=="08 p.m.") selected @endif value="08 p.m." >08 p.m.</option>
                                    <option  @if($property->quietHoursEnd=="09 p.m.") selected @endif value="09 p.m." >09 p.m.</option>
                                    <option  @if($property->quietHoursEnd=="10 p.m.") selected @endif value="10 p.m." >10 p.m.</option>
                                    <option  @if($property->quietHoursEnd=="11 p.m.") selected @endif value="11 p.m." >11 p.m.</option>
                                    <option  @if($property->quietHoursEnd=="12 p.m.") selected @endif value="12 p.m." >12 p.m.</option>
                                </select>
                            </div>

                            <div class="form-group mb-2 col-md-2 propertyPrice setSpace">
                                <label for="location" class="control-label required">Price/night</label>
                                <p>
                                    <span>$
                                        <select name="currency" required style="display:none;">
                                            @foreach($currencies as $currency)
                                                <option value="{{$currency->id}}" @if($property->currency==$currency->id) selected @endif>{{$currency->name}}</option>
                                            @endforeach
                                        </select>
                                    </span>
                                    <input class="form-control" placeholder="Price" name="price" type="number" value="{{$property->price}}" min=0 required id="price" /></p>
                            </div>

                            <div class="form-group mb-2 col-md-2 propertyPrice setSpace">
                                <label for="location" class="control-label required">Price/month</label>
                                <p>
                                    <span>$
                                        <select name="currency" required style="display:none;">
                                            @foreach($currencies as $currency)
                                                <option value="{{$currency->id}}" @if($property->currency==$currency->id) selected @endif>{{$currency->name}}</option>
                                            @endforeach
                                        </select>
                                    </span>
                                    <input class="form-control" placeholder="Price/month" name="priceMonth" type="number" value="{{$property->priceMonth}}" min=0 required id="priceMonth" /></p>
                            </div>

                            <div class="form-group mb-2 col-md-2 propertyPrice setSpace">
                                <label for="currency_guest" class="control-label">Extra Per Guest Price</label>
                                <p>
                                    <span>$
                                        <select name="currency_guest" style="display:none;">
                                            @foreach($currencies as $currency)
                                                <option value="{{$currency->id}}" @if($property->currency_guest==$currency->id) selected @endif>{{$currency->name}}</option>
                                            @endforeach
                                        </select>
                                    </span>
                                    <input class="form-control" placeholder="Price" name="priceguest" type="number" min=0 value="{{$property->priceguest}}" id="priceguest" /></p>
                            </div>

                            <div class="form-group mb-2 col-md-2 propertyPrice setSpace">
                                <label for="currency_security" class="control-label">Security Deposit</label>
                                <p>
                                    <span>$
                                        <select name="currency_security" style="display:none;">
                                            @foreach($currencies as $currency)
                                                <option value="{{$currency->id}}" @if($property->currency_security==$currency->id) selected @endif>{{$currency->name}}</option>
                                            @endforeach
                                        </select>
                                    </span>
                                    <input class="form-control" placeholder="Price" name="securitydeposit" type="number" min=0 value="{{$property->securitydeposit}}" id="securitydeposit" /></p>
                            </div>

                            <div class="form-group mb-2 col-md-2 setSpace">
                                <label for="number_bedroom" class="control-label required">Sofa Bed</label>
                                <select class="form-control" name="bedrooms" required id="number_bedroom">
                                    <option @if($property->bedrooms==0) selected @endif value="0">0</option>
                                    <option @if($property->bedrooms==1) selected @endif value="1">1</option>
                                    <option @if($property->bedrooms==2) selected @endif value="2">2</option>
                                    <option @if($property->bedrooms==3) selected @endif value="3">3</option>
                                    <option @if($property->bedrooms==4) selected @endif value="4">4</option>
                                    <option @if($property->bedrooms==5) selected @endif value="5">5</option>
                                    <option @if($property->bedrooms==6) selected @endif value="6">6</option>
                                    <option @if($property->bedrooms==7) selected @endif value="7">7</option>
                                    <option @if($property->bedrooms==8) selected @endif value="8">8</option>
                                    <option @if($property->bedrooms==9) selected @endif value="9">9</option>
                                    <option @if($property->bedrooms==10) selected @endif value="10">10</option>
                                </select>
                            </div>

                            <div class="form-group mb-2 col-md-2 setSpace">
                                <label for="number_bedroom" class="control-label required">King Bed</label>
                                <select class="form-control" name="kingbed" id="number_kingbed">
                                    <option @if($property->kingbed==0) selected @endif value="0">0</option>
                                    <option @if($property->kingbed==1) selected @endif value="1">1</option>
                                    <option @if($property->kingbed==2) selected @endif value="2">2</option>
                                    <option @if($property->kingbed==3) selected @endif value="3">3</option>
                                    <option @if($property->kingbed==4) selected @endif value="4">4</option>
                                    <option @if($property->kingbed==5) selected @endif value="5">5</option>
                                    <option @if($property->kingbed==6) selected @endif value="6">6</option>
                                    <option @if($property->kingbed==7) selected @endif value="7">7</option>
                                    <option @if($property->kingbed==8) selected @endif value="8">8</option>
                                    <option @if($property->kingbed==9) selected @endif value="9">9</option>
                                    <option @if($property->kingbed==10) selected @endif value="10">10</option>
                                </select>
                            </div>

                            <div class="form-group mb-2 col-md-2 setSpace">
                                <label for="number_bedroom" class="control-label required">Queen Bed</label>
                                <select class="form-control" name="queenbed" id="number_queenbed">
                                    <option @if($property->queenbed==0) selected @endif value="0">0</option>
                                    <option @if($property->queenbed==1) selected @endif value="1">1</option>
                                    <option @if($property->queenbed==2) selected @endif value="2">2</option>
                                    <option @if($property->queenbed==3) selected @endif value="3">3</option>
                                    <option @if($property->queenbed==4) selected @endif value="4">4</option>
                                    <option @if($property->queenbed==5) selected @endif value="5">5</option>
                                    <option @if($property->queenbed==6) selected @endif value="6">6</option>
                                    <option @if($property->queenbed==7) selected @endif value="7">7</option>
                                    <option @if($property->queenbed==8) selected @endif value="8">8</option>
                                    <option @if($property->queenbed==9) selected @endif value="9">9</option>
                                    <option @if($property->queenbed==10) selected @endif value="10">10</option>
                                </select>
                            </div>

                            <div class="form-group mb-2 col-md-2 setSpace">
                                <label for="number_bedroom" class="control-label required">Double Bed</label>
                                <select class="form-control" name="doublebed" id="number_doublebed">
                                    <option @if($property->doublebed==0) selected @endif value="0">0</option>
                                    <option @if($property->doublebed==1) selected @endif value="1">1</option>
                                    <option @if($property->doublebed==2) selected @endif value="2">2</option>
                                    <option @if($property->doublebed==3) selected @endif value="3">3</option>
                                    <option @if($property->doublebed==4) selected @endif value="4">4</option>
                                    <option @if($property->doublebed==5) selected @endif value="5">5</option>
                                    <option @if($property->doublebed==6) selected @endif value="6">6</option>
                                    <option @if($property->doublebed==7) selected @endif value="7">7</option>
                                    <option @if($property->doublebed==8) selected @endif value="8">8</option>
                                    <option @if($property->doublebed==9) selected @endif value="9">9</option>
                                    <option @if($property->doublebed==10) selected @endif value="10">10</option>
                                </select>
                            </div>

                            <div class="form-group mb-2 col-md-2 setSpace">
                                <label for="number_bedroom" class="control-label required">Single Bed</label>
                                <select class="form-control" name="singlebed" id="number_singlebed">
                                    <option @if($property->singlebed==0) selected @endif value="0">0</option>
                                    <option @if($property->singlebed==1) selected @endif value="1">1</option>
                                    <option @if($property->singlebed==2) selected @endif value="2">2</option>
                                    <option @if($property->singlebed==3) selected @endif value="3">3</option>
                                    <option @if($property->singlebed==4) selected @endif value="4">4</option>
                                    <option @if($property->singlebed==5) selected @endif value="5">5</option>
                                    <option @if($property->singlebed==6) selected @endif value="6">6</option>
                                    <option @if($property->singlebed==7) selected @endif value="7">7</option>
                                    <option @if($property->singlebed==8) selected @endif value="8">8</option>
                                    <option @if($property->singlebed==9) selected @endif value="9">9</option>
                                    <option @if($property->singlebed==10) selected @endif value="10">10</option>
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
                                    <option @if($property->number_guests==1) selected @endif value="1">1</option>
                                    <option @if($property->number_guests==2) selected @endif value="2">2</option>
                                    <option @if($property->number_guests==3) selected @endif value="3">3</option>
                                    <option @if($property->number_guests==4) selected @endif value="4">4</option>
                                    <option @if($property->number_guests==5) selected @endif value="5">5</option>
                                    <option @if($property->number_guests==6) selected @endif value="6">6</option>
                                    <option @if($property->number_guests==7) selected @endif value="7">7</option>
                                    <option @if($property->number_guests==8) selected @endif value="8">8</option>
                                    <option @if($property->number_guests==9) selected @endif value="9">9</option>
                                    <option @if($property->number_guests==10) selected @endif value="10">10</option>
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
                                    <option @if($property->number_bathroom==1) selected @endif value="1">1</option>
                                    <option @if($property->number_bathroom==2) selected @endif value="2">2</option>
                                    <option @if($property->number_bathroom==3) selected @endif value="3">3</option>
                                    <option @if($property->number_bathroom==4) selected @endif value="4">4</option>
                                    <option @if($property->number_bathroom==5) selected @endif value="5">5</option>
                                    <option @if($property->number_bathroom==6) selected @endif value="6">6</option>
                                    <option @if($property->number_bathroom==7) selected @endif value="7">7</option>
                                    <option @if($property->number_bathroom==8) selected @endif value="8">8</option>
                                    <option @if($property->number_bathroom==9) selected @endif value="9">9</option>
                                    <option @if($property->number_bathroom==10) selected @endif value="10">10</option>
                                </select>
                            </div>

                            <div class="form-group mb-2 col-md-2 setSpace">
                                <label for="number_kitchen" class="control-label ">Kitchen</label>
                                <select class="form-control" name="number_kitchen" id="number_kitchen">
                                    <option @if($property->number_kitchen==1) selected @endif value="1">1</option>
                                    <option @if($property->number_kitchen==2) selected @endif value="2">2</option>
                                    <option @if($property->number_kitchen==3) selected @endif value="3">3</option>
                                    <option @if($property->number_kitchen==4) selected @endif value="4">4</option>
                                    <option @if($property->number_kitchen==5) selected @endif value="5">5</option>
                                    <option @if($property->number_kitchen==6) selected @endif value="6">6</option>
                                    <option @if($property->number_kitchen==7) selected @endif value="7">7</option>
                                    <option @if($property->number_kitchen==8) selected @endif value="8">8</option>
                                    <option @if($property->number_kitchen==9) selected @endif value="9">9</option>
                                    <option @if($property->number_kitchen==10) selected @endif value="10">10</option>
                                </select>
                            </div>

                            <div class="form-group mb-2 col-md-2 setSpace">
                                <label for="size" class="control-label ">Size in ft2</label>
                                <input class="form-control" placeholder="Size in ft2" name="size" value="{{$property->size}}" type="number" min=0 id="size" />
                            </div>

                            <div class="form-group mb-2 col-md-2 setSpace">
                                <label for="rooms" class="control-label ">Bedrooms</label>
                                <select class="form-control" name="rooms" id="rooms">
                                    <option @if($property->rooms==1) selected @endif value="1">1</option>
                                    <option @if($property->rooms==2) selected @endif value="2">2</option>
                                    <option @if($property->rooms==3) selected @endif value="3">3</option>
                                    <option @if($property->rooms==4) selected @endif value="4">4</option>
                                    <option @if($property->rooms==5) selected @endif value="5">5</option>
                                    <option @if($property->rooms==6) selected @endif value="6">6</option>
                                    <option @if($property->rooms==7) selected @endif value="7">7</option>
                                    <option @if($property->rooms==8) selected @endif value="8">8</option>
                                    <option @if($property->rooms==9) selected @endif value="9">9</option>
                                    <option @if($property->rooms==10) selected @endif value="10">10</option>
                                </select>
                            </div>

                            <div class="form-group mb-2 col-md-2 setSpace">
                                <label for="minimumbooking" class="control-label required">Minimum Booking</label>
                                <select name="minimumbooking" required style="width: 100%;">
                                    <option value="">Select</option>
                                    <option value="nights" @if($property->minimumbooking=='nights') selected @endif>Nights</option>
                                    <option value="months" @if($property->minimumbooking=='months') selected @endif>Months</option>
                                </select>
                            </div>

                            <div class="form-group mb-2 col-md-2 propertyPrice setSpace">
                                <label for="currency_cancellationfee" class="control-label">Cancellation Fee</label>
                                <p>
                                    <span>%
                                        <select name="currency_cancellationfee" style="display:none;">
                                            @foreach($currencies as $currency)
                                                <option value="{{$currency->id}}" @if($property->currency_cancellationfee==$currency->id) selected @endif>{{$currency->name}}</option>
                                            @endforeach
                                        </select>
                                    </span>
                                    <input class="form-control" placeholder="Cancellation Fee" name="cancellationfee" type="number" min=0 value="{{$property->cancellationfee}}" id="cancellationfee" /></p>
                            </div>

                            <div class="form-group mb-2 col-md-2 setSpace">
                                <label for="minimumbookingnumber" class="control-label required">Minimum Booking Nights/Months</label>
                                <input type="number" style="width: 100%;"  name="minimumbookingnumber" min=0 value="{{$property->minimumbookingnumber}}">
                            </div>

                       </div>

                        @if($serviceFees!=null)
                            <div class="widget-title" style="background:unset;border-bottom-color:#ebeae8;">
                                <h4>
                                    <span>Service Fees</span>
                                </h4>
                            </div>
                            <div class="widget-body" style="min-height: 100px;">

                                <div class="row">

                                    @php
                                        $serviceFeeName=explode(",",$property->serviceFeeName);
                                        $serviceFeeCurrency=explode(",",$property->serviceFeeCurrency);
                                        $serviceFeeValue=explode(",",$property->serviceFeeValue);
                                        $ii=-1;
                                    @endphp
                                    
                                    @foreach($serviceFees as $serviceFee)
                                        
                                            @if($serviceFee->amount==0)

                                                @php
                                                    $ServiceFeesActive=false;
                                                    for($i=0;$i<count($serviceFeeName);$i++){
                                                        if($serviceFeeName[$i]==$serviceFee->id){
                                                            $ServiceFeesActive=true;
                                                            $ii=$ii+1;
                                                        }
                                                    }
                                                @endphp

                                                <div class="form-group mb-3 col-md-3 propertyPrice">
                                                    <label for="serviceFee{{$serviceFee->id}}" class="control-label">{{$serviceFee->title}}</label>
                                                    <p style="display: flex;">
                                                        <input type="hidden" name="serviceFeeName[]" value="{{$serviceFee->id}}">
                                                        <span style=" display: inline-flex; align-items: center; padding-right: 10px; ">$
                                                            <select name="serviceFeeCurrency[]" style="display: none;">
                                                                @foreach($currencies as $currency)
                                                                    <option value="{{$currency->id}}" @if($ServiceFeesActive && isset($serviceFeeValue[$ii]) && $serviceFeeCurrency[$ii]==$currency->id) selected @endif >{{$currency->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </span>
                                                        <input style="border-top-left-radius: unset; border-bottom-left-radius: unset;" class="form-control" name="serviceFeeValue[]" type="number" min=0 @if($ServiceFeesActive && isset($serviceFeeValue[$ii])) value="{{$serviceFeeValue[$ii]}}" @else value="0" @endif id="serviceFee{{$serviceFee->id}}" />
                                                    </p>
                                                </div>

                                            @endif
                                        
                                    @endforeach

                                </div>
                                
                            </div>
                        @endif

                        <div class="form-group mb-3">
                            <label for="privatenotes" class="control-label">Private Notes</label>
                            <textarea class="form-control" rows="4" placeholder="Private Notes" name="privatenotes" cols="50" id="privatenotes">{{$property->privatenotes}}</textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="cancellationpolicy" class="control-label">Cancellation Policy</label>
                            <textarea class="form-control" rows="4" placeholder="Cancellation Policy" name="cancellationpolicy" cols="50" id="cancellationpolicy">{{$property->cancellationpolicy}}</textarea>
                        </div>

                        <div class="form-group mb-3 propertyVideo">
                            <label for="location" class="control-label">Video (Max Size: 5MB)</label>
                            <div class="upload_document">
                                <label for="hiddenBtn" class="choose-btn" id="chooseBtnvideo">Upload Video</label>
                                <input type="file" onchange="validateSize(this)"  multiple name="video" accept="video/mp4,video/x-m4v,video/*" id="hiddenBtnvideo">
                                <input type="hidden" name="video_old" value="{{$property->video}}">
                            </div>
                        </div>

                        <div class="form-group mb-3 propertyDocument">
                            <label for="location" class="control-label">Document (Max Size: 5MB)</label>
                            <div class="upload_document">
                                <label for="hiddenBtn" class="choose-btn" id="chooseBtndocument">Upload Document</label>
                                <input type="file" onchange="validateSize(this)"  multiple accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" name="dcoument" id="hiddenBtndocument">
                                <input type="hidden" name="dcoument_old" value="{{$property->document}}">
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
                                    <input name="services[]" type="checkbox" @if(in_array($service->id,explode(',',$property->services))) checked @endif value="{{$service->id}}" />
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
                                    <input name="apartmentFeatures[]" type="checkbox" @if(in_array($amenity->id,explode(',',$property->apartmentFeatures))) checked @endif value="{{$amenity->id}}" />
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
                                    <label>
                                    <input name="buildingAmenities[]" type="checkbox" @if(in_array($amenity->id,explode(',',$property->buildingAmenities))) checked @endif value="{{$amenity->id}}" />
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
                            @php
                                $terms=explode('/seperator/',$property->terms);
                            @endphp
                            @for($t_i=0;$t_i<count($terms);$t_i++)
                                @if($t_i==0)
                                    <li><input type="text" name="terms[]" value="{{$terms[$t_i]}}" class="terms"><i class="fa fa-plus"></i></li>
                                @else
                                    <li><input type="text" name="terms[]" value="{{$terms[$t_i]}}" class="terms"><i class="fa fa-times"></i></li>
                                @endif
                            @endfor
                            @if($t_i==0)
                                <li><input type="text" name="terms[]" class="terms"><i class="fa fa-plus"></i></li>
                            @endif
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
                                    <option @if($property->ownerstatus=='Owner') selected @endif value="Owner">Owner</option>
                                    <option @if($property->ownerstatus=='Leaseholder') selected @endif value="Leaseholder">Leaseholder</option>
                                </select>
                            </div>

                            <div class="form-group mb-3 col-md-6">
                                <label for="companyname" class="control-label">Company Name</label>
                                <input class="form-control" placeholder="Company Name" name="companyname" value="{{$property->owner_company}}" type="text" id="companyname">
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
                            <button type="button" id="publish_this_property_action" class="btn btn-info"><i class="fa fa-save"></i> @if($property->status==1){{'Update'}}@else{{'Publish'}}@endif</button>
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
                                <option value="{{$typez->id}}" @if($typez->id==$property->bookingtype) selected @endif>{{$typez->title}}</option>
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
                                <option value="{{$typex->id}}" @if($typex->id==$property->propertytype) selected @endif>{{$typex->title}}</option>
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
                                                    <input type="checkbox" value="{{$category->id}}" @if(in_array($category->id,explode(',',$property->category))) checked @endif name="categories[]" />
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
                                @php
                                $tags=explode('/seperator/',$property->tag);
                                @endphp
                                @for($t_i=0;$t_i<count($tags);$t_i++)
                                    @if($tags[$t_i]!='')
                                        <li><i class="fa fa-times"></i><input type="hidden" name="tags[]" value="{{$tags[$t_i]}}"> {{$tags[$t_i]}}</li>
                                    @endif
                                @endfor
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