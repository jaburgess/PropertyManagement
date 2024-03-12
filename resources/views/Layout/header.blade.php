<!doctype html>
<html lang="en">
<head>
<title>
  @if(Route::is('homePage')){{'Home'}}@endif
  @if(Route::is('aboutPage')){{'About'}}@endif
  @if(Route::is('businessPage')){{'Business'}}@endif
  @if(Route::is('contactPage')){{'Contact'}}@endif
  @if(Route::is('propertiesPage')){{'Properties'}}@endif
  @if(Route::is('propertiesSearch')){{'Properties Search'}}@endif
  @if(Route::is('propertyDetailPage')){{$property->title}}@endif
  @if(Route::is('blogsPage')){{'Blogs'}}@endif
  @if(Route::is('faqPage')){{'FAQ'}}@endif
  @if(Route::is('blogDetailPage')){{$post->title}}@endif
 | Hotel Booking
</title>
<meta charset="utf-8">

@if(Route::is('propertyDetailPage'))
<meta property="og:url"         content="{{ URL::to('/property/'.$property->slug) }}" />
<meta property="og:type"        content="Property" />
<meta property="og:title"       content="{{$property->title}}" />
<meta property="og:description" content="{{$property->description}}" />
<meta property="og:image"       content="{{URL::to('/uploaded/properties/'.$property->cover)}}" />
@endif
@if(Route::is('blogDetailPage'))
<meta property="og:url"         content="{{ URL::to('/blog/'.$post->slug) }}" />
<meta property="og:type"        content="Blog" />
<meta property="og:title"       content="{{$post->title}}" />
<meta property="og:description" content="{{$post->description}}" />
<meta property="og:image"       content="{{URL::to('/uploaded/posts/'.$post->image)}}" />
@endif

<link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favIcon.png') }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="{{ asset('fontAwesome6/css/all.min.css') }}" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/solid.min.css">
<link rel="stylesheet" href="{{ asset('assets/css/slick-theme.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
<link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGEZwRuLPebN1skjbwTIIXlnrB8Q5ZDkk&libraries=places&v=3.exp&sensor=false"></script>
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
</head>
<body class="hmain">
<nav class="navbar navbar-expand-lg navbar-light" id="header-outer">
  <div class="container">
    <header class="d-flex justify-content-between w-100 align-items-center">
        <div class="right-menu d-flex">
            <div class="logo">
                <a class="navbar-brand" href="{{ route('homePage') }}"><img style="width:100%;max-width: 180px;" src="{{ asset('assets/img/logo-removebg-preview.png') }}" alt="logo"></a>
            </div>
        </div>
        <div class="text-center">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-right" id="navbarNav">
              <ul class="navbar-nav navbar-right">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{ route('homePage') }}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('aboutPage') }}">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('propertiesPage') }}">Rentals</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('contactPage') }}">Contact Us</a>
                </li>
              </ul>
            </div>
        </div>
        <div class="text-end">
          @auth
            <a href="{{ route('adminDashboard') }}" class="header_dashboard_btn"><i class="fa-solid fa-user"></i> Dashboard</a>
            <a href="{{ route('logout') }}" class="header_dashboard_btn"><i class="fa-solid fa-sign-out"></i> Sign Out</a>
          @else
            <button type="button" class="login_btn" data-bs-toggle="modal" data-bs-target="#loginModal">
                <i class="fa-solid fa-lock"></i> Sign In
            </button>
            <button type="button" class="signup_btn" data-bs-toggle="modal" data-bs-target="#signUpModal">
                <i class="fa-solid fa-user"></i> Sign Up
            </button>
          @endauth
        </div>
        
          <div class="text-center mob">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-right" id="navbarNav">
                <div class="boxx">
                    
                     @auth
            <a href="{{ route('adminDashboard') }}" class="header_dashboard_btn"><i class="fa-solid fa-user"></i> Dashboard</a>
            <a href="{{ route('logout') }}" class="header_dashboard_btn"><i class="fa-solid fa-sign-out"></i> Sign Out</a>
          @else
            <button type="button" class="login_btn" data-bs-toggle="modal" data-bs-target="#loginModal">
                <i class="fa-solid fa-lock"></i> Sign In
            </button>
            <button type="button" class="signup_btn" data-bs-toggle="modal" data-bs-target="#signUpModal">
                <i class="fa-solid fa-user"></i> Sign Up
            </button>
          @endauth
                    
                </div>
              <ul class="navbar-nav navbar-right">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{ route('homePage') }}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('aboutPage') }}">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('propertiesPage') }}">Rentals</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('contactPage') }}">Contact Us</a>
                </li>
              </ul>
             
            </div>
        </div>
    </header>
 </div>
</nav>
<!-- Button trigger modal -->
<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
      <div class="modal-body">
        <div class="login_modal_wrapper">
          <h2>Log in to your account</h2>
          <form action="{{ route('login') }}" method="POST" class="login_popup">
            @csrf
            <input type="hidden" name="pageLocation" class="pageLocation">
            <div class="form-control">
              <input type="text" name="username" placeholder="Username/Email" @if(isset($_COOKIE["username"])) value="{{$_COOKIE['username']}}" @endif required>
            </div>
            <div class="form-control">
              <input type="password" name="password" placeholder="Password" @if(isset($_COOKIE["password"])) value="{{$_COOKIE['password']}}" @endif required >
            </div>
            <div class="form-control rememberMyPassword">
              <label><input type="checkbox" name="rememberMyPassword" placeholder="Password" @if(isset($_COOKIE["login"])) checked @endif >remember my password</label>
            </div>
            @if(false && session('login_error')!='')
              <p class="login_validation_message">{{session('login_error')}}</p>
            @endif
            @if(false && session('resetPasswordForm_success')!='')
              <p class="login_validation_message_sucess">{{session('resetPasswordForm_success')}}</p>
            @endif
            <p style="display: none;" class="login_validation_message"></p>
            <button type="submit" name="submit" name="login_btn">Login</button>
          </form>
          <div class="navigation_links">
              <a href="#" id="reveal_register" data-bs-dismiss="modal" aria-label="Close">Create account</a> |
              <a href="#" id="forgot_password_mod" data-bs-dismiss="modal" aria-label="Close">Forgot Password</a>
          </div>
        </div>
        <div class="modal_login_image_wrapper">
          <div class="modal_login_image" style="background-image:url({{ asset('assets/img/modal_default.png')}})"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- SignUp Modal -->
<div class="modal fade" id="signUpModal" tabindex="-1" aria-labelledby="signUpModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
      <div class="modal-body">
        <div class="login_modal_wrapper">
          <h2>Create an account</h2>
          <form action="{{ route('register') }}" method="POST" class="signup_popup" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="pageLocation" class="pageLocation">
            <div class="firstStep" @if(session('signup_error')!='') style="display:none;" @endif>
                <div class="form-control two">
                  <label>First Name</label>
                  <input type="text" name="firstname" value="{{old('firstname')}}" placeholder="First Name" required>
                </div>
                <div class="form-control two" style="padding-left:10px;">
                  <label>Last Name</label>
                  <input type="text" name="lastname" value="{{old('lastname')}}" placeholder="Last Name" required>
                </div>
                <div class="form-control two">
                  <label>Phone</label>
                  <input type="text" name="phone" value="{{old('phone')}}" placeholder="Phone" required>
                </div>
                <div class="form-control two" style="padding-left:10px;">
                  <label>Address</label>
                  <input type="text" name="address" value="{{old('address')}}" placeholder="Address" required>
                </div> 
                <div class="form-control two">
                  <label>Email</label>
                  <input type="email" name="email" value="{{old('email')}}" placeholder="Email" required>
                </div>
                <div class="form-control two" style="padding-left:10px;">
                  <label>Password</label>
                  <input type="password" name="password" value="{{old('password')}}" placeholder="Password" required>
                </div>
                @if(false && session('signup_error')!='')
                  <p class="login_validation_message">{{session('signup_error')}}</p>
                @endif
                <p style="display:none;" class="login_validation_message"></p>
                <button type="submit" name="submit" class="next_register_step" >Create an account</button>
            </div>
          </form>
          <div class="navigation_links">
              <a href="#" id="reveal_login" data-bs-dismiss="modal" aria-label="Close">Already a member? Sign in!</a>
          </div>
        </div>
        <div class="modal_login_image_wrapper">
          <div class="modal_login_image" style="background-image:url({{ asset('assets/img/modal_default.png')}})"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Forgot Password Modal -->
<div class="modal fade" id="forgotModal" tabindex="-1" aria-labelledby="forgotModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
      <div class="modal-body">
        <div class="login_modal_wrapper">
          <h2>Forgot Password</h2>
          <form action="{{ route('forgot') }}" method="POST" class="forgot_popup">
            @csrf
            <div class="form-control">
              <input type="email" name="email" placeholder="Email" required>
            </div>
            @if(session('forgot_error')!='')
              <p class="login_validation_message">{{session('forgot_error')}}</p>
            @endif
            @if(session('forgot_sucess')!='')
              <p class="login_validation_message_sucess">{{session('forgot_sucess')}}</p>
            @endif
            <button type="submit" name="submit" >Reset Password</button>
          </form>
          <div class="navigation_links">
              <a href="#" id="reveal_login_mod" data-bs-dismiss="modal" aria-label="Close">Return to Login</a>
          </div>
        </div>
        <div class="modal_login_image_wrapper">
          <div class="modal_login_image" style="background-image:url({{ asset('assets/img/modal_default.png')}})"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="resetPasswordModal" tabindex="-1" aria-labelledby="resetPasswordModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
      <div class="modal-body">
        <div class="login_modal_wrapper">
          <h2>Reset Password</h2>
          <form action="{{ route('resetPasswordPost') }}" method="POST" class="reset_popup">
            @csrf
            <input type="hidden" name="userID"  @if(isset($resetPasswordForm)) value="{{$resetPasswordForm}}" @endif>
            <div class="form-control">
              <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-control">
              <input type="password" name="retype_password" placeholder="Retype Password" required>
            </div>
            @if(session('resetPasswordForm_error')!='')
              <p class="login_validation_message">{{session('resetPasswordForm_error')}}</p>
            @endif
            <button type="submit" name="submit" >Reset Password</button>
          </form>
        </div>
        <div class="modal_login_image_wrapper">
          <div class="modal_login_image" style="background-image:url({{ asset('assets/img/modal_default.png')}})"></div>
        </div>
      </div>
    </div>
  </div>
</div>