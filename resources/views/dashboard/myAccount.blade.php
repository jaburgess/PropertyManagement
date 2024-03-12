@extends('../dashboardLayouts.master')
@section('body')

<div class="propertyCreate dashboardProperties">
    
    <ol class="breadcrumb"> 
        <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}"><i class="metismenu-icon pe-7s-rocket"></i> Dashboard</a></li>
        <li class="breadcrumb-item active">My Account</li>
    </ol>

    <ul class="top_above_error" @if($message=='') style="display:none;" @endif>
        <li>{{$message}}</li>
    </ul>

    <form method="POST" class="faq formvalidationappeared accountCreateForm" action="{{ route('dashboardMyAccountPost') }}" id="botble-real-estate-forms-property-form" enctype="multipart/form-data" >
        @csrf
        <div class="row">
            <div class="col-md-9">
                <div class="main-form">
                    <div class="form-body">
                        
                        <div class="form-group mb-3 title_div col-md-3" style="display:inline-block;vertical-align:top;">
                            <label for="firstname" class="control-label" aria-required="true">Account Created Date</label>
                            <p>{{date("F d, Y h:i:s A", strtotime($account->created_at))}}</p>
                        </div>
                        
                        <div class="form-group mb-3 title_div col-md-3" style="display:inline-block;vertical-align:top;">
                            <label for="firstname" class="control-label" aria-required="true">Account Updated Date</label>
                            <p>{{date("F d, Y h:i:s A", strtotime($account->updated_at))}}</p>
                        </div>

                        <div class="form-group mb-3 title_div col-md-3" style="display:inline-block;vertical-align:top;">
                            <label for="firstname" class="control-label" aria-required="true">Last Time Logged In</label>
                            <p>{{$account->last_login}}</p>
                        </div>

                        <div class="form-group mb-3 title_div dobdate_div">
                            <label for="firstname" class="control-label required" aria-required="true">First Name</label>
                            <input class="form-control" placeholder="First Name" name="firstname" type="text" value="{{$account->firstname}}" id="firstname" required />
                        </div>

                        <div class="form-group mb-3 title_div dobdate_div">
                            <label for="lastname" class="control-label required" aria-required="true">Last Name</label>
                            <input class="form-control" placeholder="Last Name" name="lastname" type="text" value="{{$account->lastname}}" id="lastname" required />
                        </div>
                        
                        <div class="form-group mb-3 title_div" style="display:none;">
                            <label for="username" class="control-label required" aria-required="true">Username</label>
                            <input class="form-control" placeholder="Username" name="username" type="text" value="{{$account->username}}" id="username" required />
                        </div>

                        <div class="form-group mb-3 title_div dobdate_div">
                            <label for="company" class="control-label" >Company Name</label>
                            <input class="form-control" placeholder="Company Name" name="company" type="text" value="{{$account->company}}" id="company" />
                        </div>

                        <div class="form-group mb-3 title_div dobdate_div last">
                            <label for="phone" class="control-label required" aria-required="true">Phone</label>
                            <input class="form-control" placeholder="Phone" name="phone" type="tel" id="phone" value="{{$account->phone}}" required />
                        </div>

                        <div class="form-group mb-3 title_div dobdate_div fourthDiv">
                            <label for="dobYear" class="control-label" aria-required="true">Date of birth (Year)</label>
                            <select name="dobYear">
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='2015') selected @endif value="2015">2015</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='2014') selected @endif value="2014">2014</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='2013') selected @endif value="2013">2013</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='2012') selected @endif value="2012">2012</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='2011') selected @endif value="2011">2011</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='2010') selected @endif value="2010">2010</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='2009') selected @endif value="2009">2009</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='2008') selected @endif value="2008">2008</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='2007') selected @endif value="2007">2007</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='2006') selected @endif value="2006">2006</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='2005') selected @endif value="2005">2005</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='2004') selected @endif value="2004">2004</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='2003') selected @endif value="2003">2003</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='2002') selected @endif value="2002">2002</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='2001') selected @endif value="2001">2001</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='2000') selected @endif value="2000">2000</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1999') selected @endif value="1999">1999</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1998') selected @endif value="1998">1998</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1997') selected @endif value="1997">1997</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1996') selected @endif value="1996">1996</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1995') selected @endif value="1995">1995</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1994') selected @endif value="1994">1994</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1993') selected @endif value="1993">1993</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1992') selected @endif value="1992">1992</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1991') selected @endif value="1991">1991</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1990') selected @endif value="1990">1990</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1989') selected @endif value="1989">1989</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1988') selected @endif value="1988">1988</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1987') selected @endif value="1987">1987</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1986') selected @endif value="1986">1986</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1985') selected @endif value="1985">1985</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1984') selected @endif value="1984">1984</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1983') selected @endif value="1983">1983</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1982') selected @endif value="1982">1982</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1981') selected @endif value="1981">1981</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1980') selected @endif value="1980">1980</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1979') selected @endif value="1979">1979</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1978') selected @endif value="1978">1978</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1977') selected @endif value="1977">1977</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1976') selected @endif value="1976">1976</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1975') selected @endif value="1975">1975</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1974') selected @endif value="1974">1974</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1973') selected @endif value="1973">1973</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1972') selected @endif value="1972">1972</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1971') selected @endif value="1971">1971</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1970') selected @endif value="1970">1970</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1969') selected @endif value="1969">1969</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1968') selected @endif value="1968">1968</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1967') selected @endif value="1967">1967</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1966') selected @endif value="1966">1966</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1965') selected @endif value="1965">1965</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1964') selected @endif value="1964">1964</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1963') selected @endif value="1963">1963</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1962') selected @endif value="1962">1962</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1961') selected @endif value="1961">1961</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1960') selected @endif value="1960">1960</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1959') selected @endif value="1959">1959</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1958') selected @endif value="1958">1958</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1957') selected @endif value="1957">1957</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1956') selected @endif value="1956">1956</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1955') selected @endif value="1955">1955</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1954') selected @endif value="1954">1954</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1953') selected @endif value="1953">1953</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1952') selected @endif value="1952">1952</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1951') selected @endif value="1951">1951</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1950') selected @endif value="1950">1950</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1949') selected @endif value="1949">1949</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1948') selected @endif value="1948">1948</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1947') selected @endif value="1947">1947</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1946') selected @endif value="1946">1946</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1945') selected @endif value="1945">1945</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1944') selected @endif value="1944">1944</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1943') selected @endif value="1943">1943</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1942') selected @endif value="1942">1942</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1941') selected @endif value="1941">1941</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1940') selected @endif value="1940">1940</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1939') selected @endif value="1939">1939</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1938') selected @endif value="1938">1938</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1937') selected @endif value="1937">1937</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1936') selected @endif value="1936">1936</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1935') selected @endif value="1935">1935</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1934') selected @endif value="1934">1934</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1933') selected @endif value="1933">1933</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1932') selected @endif value="1932">1932</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1931') selected @endif value="1931">1931</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1930') selected @endif value="1930">1930</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1929') selected @endif value="1929">1929</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1928') selected @endif value="1928">1928</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1927') selected @endif value="1927">1927</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1926') selected @endif value="1926">1926</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1925') selected @endif value="1925">1925</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1924') selected @endif value="1924">1924</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[0]=='1923') selected @endif value="1923">1923</option>
                            </select>
                        </div>

                        <div class="form-group mb-3 title_div dobdate_div fourthDiv">
                            <label for="dobMonth" class="control-label" aria-required="true">Date of birth (Month)</label>
                            <select name="dobMonth">
                                <option @if($account->dob!='' && explode('-', $account->dob)[1]=='1') selected @endif value="1">1</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[1]=='2') selected @endif value="2">2</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[1]=='3') selected @endif value="3">3</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[1]=='4') selected @endif value="4">4</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[1]=='5') selected @endif value="5">5</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[1]=='6') selected @endif value="6">6</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[1]=='7') selected @endif value="7">7</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[1]=='8') selected @endif value="8">8</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[1]=='9') selected @endif value="9">9</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[1]=='10') selected @endif value="10">10</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[1]=='11') selected @endif value="11">11</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[1]=='12') selected @endif value="12">12</option>
                            </select>
                        </div>

                        <div class="form-group mb-3 title_div dobdate_div fourthDiv">
                            <label for="dobDate" class="control-label" aria-required="true">Date of birth (Date)</label>
                            <select name="dobDate">
                                <option @if($account->dob!='' && explode('-', $account->dob)[2]=='1') selected @endif value="1">1</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[2]=='2') selected @endif value="2">2</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[2]=='3') selected @endif value="3">3</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[2]=='4') selected @endif value="4">4</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[2]=='5') selected @endif value="5">5</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[2]=='6') selected @endif value="6">6</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[2]=='7') selected @endif value="7">7</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[2]=='8') selected @endif value="8">8</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[2]=='9') selected @endif value="9">9</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[2]=='10') selected @endif value="10">10</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[2]=='11') selected @endif value="11">11</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[2]=='12') selected @endif value="12">12</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[2]=='13') selected @endif value="13">13</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[2]=='14') selected @endif value="14">14</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[2]=='15') selected @endif value="15">15</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[2]=='16') selected @endif value="16">16</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[2]=='17') selected @endif value="17">17</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[2]=='18') selected @endif value="18">18</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[2]=='19') selected @endif value="19">19</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[2]=='20') selected @endif value="20">20</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[2]=='21') selected @endif value="21">21</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[2]=='22') selected @endif value="22">22</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[2]=='23') selected @endif value="23">23</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[2]=='24') selected @endif value="24">24</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[2]=='25') selected @endif value="25">25</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[2]=='26') selected @endif value="26">26</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[2]=='27') selected @endif value="27">27</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[2]=='28') selected @endif value="28">28</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[2]=='29') selected @endif value="29">29</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[2]=='30') selected @endif value="30">30</option>
                                <option @if($account->dob!='' && explode('-', $account->dob)[2]=='31') selected @endif value="31">31</option>
                            </select>
                        </div>

                        <div class="form-group mb-3 title_div fourthDiv">
                            <label for="userid" class="control-label" aria-required="true">ID</label>
                            <input class="form-control" placeholder="ID" name="userid" type="text" value="{{$account->userid}}" id="userid" />
                        </div>

                        <div class="form-group mb-3 title_div dobdate_div fourthDiv last">
                            <label for="gender" class="control-label" aria-required="true">Gender</label>
                            <select name="gender">
                                <option @if($account->gender=='male') selected @endif value="male">Male</option>
                                <option @if($account->gender=='female') selected @endif value="female">Female</option>
                            </select>
                        </div>

                        <div class="form-group mb-3 title_div">
                           <label for="address" class="control-label" aria-required="true">Address</label>
                           <div style="display:flex;">
                             <input style="margin-right: 1%;" class="form-control" placeholder="Address" name="address" type="text" value="{{$account->address}}" id="address" />
                             <input style="margin-right: 1%;" class="form-control" placeholder="Suite" name="suite" type="text" value="{{$account->suite}}" id="suite" />
                             <input style="margin-right: 1%;" class="form-control" placeholder="City" name="city" type="text" value="{{$account->city}}" id="city" />
                             <input style="margin-right: 1%;" class="form-control" placeholder="State" name="state" type="text" value="{{$account->state}}" id="state" />
                             <input style="margin-right: 1%;" class="form-control" placeholder="Postcode" name="postcode" type="text" value="{{$account->postcode}}" id="postcode"/>
                             <input class="form-control" placeholder="Country" name="country" type="text" value="{{$account->country}}" id="country" /> 
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-md-3 right-sidebar">
                
                <div class="widget meta-boxes form-actions form-actions-default action-horizontal">
                    <div class="widget-title">
                        <h4>
                            <span>Account</span>
                        </h4>
                    </div>
                    <div class="widget-body">
                        <div class="btn-set">
                            <button type="submit" name="submit" class="btn btn-info"><i class="fa fa-save"></i> Update</button>
                        </div>
                    </div>
                </div>
             
                <div class="widget meta-boxes">
                    <div class="widget-title">
                        <h4><label class="control-label">Profile</label></h4>
                    </div>
                    
                    <div class="form-group mb-3 modalshg propertyImage">
                        <div class="modal-body">
                            <label for="images" class="control-label">Images</label>
                            <div class="step">
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type="hidden" name="image_old" value="{{$account->image}}">
                                        <input type='file' id="accountCreateImage" name="image" data-placeholder="{{ URL::to('dashboard_assets/assets/images/placeholder.png') }}" accept="image/png, image/gif, image/jpeg" />
                                        <label for="accountCreateImage"></label>
                                    </div>
                                    <div class="avatar-preview">
                                        @if($account->image!='')
                                            <div id="accountCreateImagePreview" style="background-image: url({{ URL::to('uploaded/profiles/'.$account->image) }});">
                                            </div>
                                        @else
                                            <div id="accountCreateImagePreview" style="background-image: url({{ URL::to('dashboard_assets/assets/images/placeholder.png') }});">
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-3 modalshg governmentIDImage">
                        <div class="modal-body">
                            <label for="governmentID" class="control-label">Geovernment Issued ID</label>
                            <div class="step">
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type="hidden" name="governmentIDOld" value="{{$account->governmentID}}">
                                        <input type='file' id="governmentID" name="governmentID" data-placeholder="{{ URL::to('dashboard_assets/assets/images/placeholder.png') }}" accept="image/png, image/gif, image/jpeg" />
                                        <label for="governmentID"></label>
                                    </div>
                                    <div class="avatar-preview">
                                        @if($account->governmentID!='')
                                            <div id="governmentIDPreview" style="background-image: url({{ URL::to('uploaded/document/'.$account->governmentID) }});">
                                            </div>
                                        @else
                                            <div id="governmentIDPreview" style="background-image: url({{ URL::to('dashboard_assets/assets/images/placeholder.png') }});">
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </form>

</div>

@endsection