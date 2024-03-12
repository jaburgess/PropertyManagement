<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="Content-Language" content="en" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title> 
            @if(Route::is('adminDashboard')){{'Dashboard'}}@endif
            @if(Route::is('dashboardApartmentFeatures')){{'Apartment Features'}}@endif
            @if(Route::is('dashboardBuildingAmenities')){{'Building Amenities'}}@endif
            @if(Route::is('dashboardServices')){{'Services'}}@endif
            @if(Route::is('dashboardServicesFee')){{'Service Fees'}}@endif
            @if(Route::is('dashboardPropertyType')){{'Property Type'}}@endif
            @if(Route::is('dashboardBookingType')){{'Booking Type'}}@endif
            @if(Route::is('dashboardCategories')){{'Categories'}}@endif
            @if(Route::is('dashboardProperties')){{'All Properties'}}@endif
            @if(Route::is('pendingProperties')){{'Pending Properties'}}@endif
            @if(Route::is('dashboardPropertyCreate')){{'Create Property'}}@endif
            @if(Route::is('dashboardPropertiesEdit')){{'Property Edit'}}@endif
            @if(Route::is('dashboardFaqs')){{'FAQs'}}@endif
            @if(Route::is('dashboardfaqsCreate')){{'Create FAQ'}}@endif
            @if(Route::is('dashboardFaqsEdit')){{'Edit FAQ'}}@endif
            @if(Route::is('dashboardFaqsCategories')){{'FAQ Category'}}@endif
            @if(Route::is('dashboardCareer')){{'Career'}}@endif
            @if(Route::is('dashboardCareerCreate')){{'Career Create'}}@endif
            @if(Route::is('dashboardCareerCreateEdit')){{'Career Edit'}}@endif
            @if(Route::is('dashboardCareerCategories')){{'Career Categories'}}@endif
            @if(Route::is('dashboardPosts')){{'Posts'}}@endif
            @if(Route::is('dashboardPostsCreate')){{'Create Post'}}@endif
            @if(Route::is('dashboardPostsEdit')){{'Edit Post'}}@endif
            @if(Route::is('dashboardPostsCategories')){{'Post Categories'}}@endif
            @if(Route::is('dashboardContact')){{'Contact'}}@endif
            @if(Route::is('dashboardContactReceive')){{'Contact Receive'}}@endif
            @if(Route::is('dashboardSetting')){{'Setting'}}@endif
            @if(Route::is('dashboardMyAccount')){{'My Account'}}@endif
            @if(Route::is('dashboardCurrencies')){{'Currencies'}}@endif
            @if(Route::is('dashboardAccount')){{'Account'}}@endif
            @if(Route::is('dashboardAccountCreate')){{'Account Create'}}@endif
            @if(Route::is('dashboardAccountPost')){{'Account Create'}}@endif
            @if(Route::is('dashboardAccountEdit')){{'Account Edit'}}@endif
            @if(Route::is('dashboardAccountRoles')){{'Roles'}}@endif
            @if(Route::is('dashboardAccountRolesCreate')){{'Create New Role'}}@endif
            @if(Route::is('dashboardaccountRolesEdit')){{'Edit Role'}}@endif
            @if(Route::is('dashboardreservationRequest')){{'Reservation Request'}}@endif
            @if(Route::is('favoriteProperties')){{'Favorites'}}@endif
            @if(Route::is('dashboardReviews')){{'Reviews'}}@endif
            @if(Route::is('dashboardInvoicePage')){{'Reservations'}}@endif
            @if(Route::is('dashboardAccountBankDetails')){{'Bank Detail'}}@endif
            @if(Route::is('dashboardBookingDays')){{'Booking Disable Days'}}@endif
            | Hotel System
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="msapplication-tap-highlight" content="no" />
        <link rel="icon" type="image/x-icon" href="{{ asset('/dashboard_assets/assets/images/fav.png') }}">
        <link href="{{ asset('fontAwesome6/css/all.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('dashboard_assets/assets/styles/main.css') }}" rel="stylesheet" />
        <link href="{{ asset('dashboard_assets/assets/styles/style.css') }}" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.24/daterangepicker.min.css">
        @yield('stylesRun')
    </head>
    <body>
        <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
            @include('dashboardLayouts.header')
            <div class="app-main">
                @include('dashboardLayouts.sidebar')
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        @yield('body')
                    </div>
                    @include('dashboardLayouts.footer')
                </div>
            </div>
        </div>
        @include('dashboard.modals')
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGEZwRuLPebN1skjbwTIIXlnrB8Q5ZDkk&libraries=places&v=3.exp&sensor=false"></script>
        <script type="text/javascript" src="{{ asset('dashboard_assets/assets/scripts/main.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script type="text/javascript" src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
        <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js"></script>
        <script type="text/javascript" src="{{ asset('dashboard_assets/assets/scripts/script.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.24/moment.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.24/daterangepicker.min.js"></script>
        <script type="text/javascript">
            
            $("#addGallery").on("change", function(e) {
                  var files = e.target.files,
                  filesLength = files.length;
                  if(filesLength>0){
                      $("div.modalshg.propertyGallery .modal-body div.step .avatar-upload .avatar-preview .gallery").addClass('hideBG');
                  }else{
                      $("div.modalshg.propertyGallery .modal-body div.step .avatar-upload .avatar-preview .gallery").removeClass('hideBG');    
                  }
                  $("div.modalshg.propertyGallery .modal-body div.step .avatar-upload div.mycustomloader").attr('style','display:flex;');
                  var formData = new FormData($("form.propertyCreateForm")[0]);

                  $.ajax({
                        type: 'POST',
                        url: "{{ route('propertyCreateGallery') }}",
                        data: formData,
                        contentType: false,
                        cache: false,
                        processData:false,
                        beforeSend: function(){
                        },
                        success: function(msg){
                            var allData=$.parseJSON(msg);
                            $("div.modalshg.propertyGallery .modal-body div.step .avatar-upload div.mycustomloader").hide();
                            for(var i=0;i<allData.length;i++){
                                $("div.modalshg .modal-body div.step .avatar-upload .avatar-preview .gallery ul#addGalleryUL").append("<li><img class='imageThumb' src='{{ URL::to('/uploaded/galleries') }}/"+allData[i]['src']+"'' /><input type='hidden' name='uploaded_galleries[]' class='id' value='"+allData[i]['id']+"' /><i class='fa fa-times remove'></i></li>");
                            }
                        }
                    });

              });

              $("#additionGallery").on("change", function(e) {
                  var files = e.target.files,
                  filesLength = files.length;
                  if(filesLength>0){
                      $("div.modalshg.propertyGalleryAddition .modal-body div.step .avatar-upload .avatar-preview .gallery").addClass('hideBG');
                  }else{
                      $("div.modalshg.propertyGalleryAddition .modal-body div.step .avatar-upload .avatar-preview .gallery").removeClass('hideBG');    
                  }

                  $("div.modalshg.propertyGalleryAddition .modal-body div.step .avatar-upload div.mycustomloader").attr('style','display:flex;');

                    var formData = new FormData($("form.propertyCreateForm")[0]);

                    $.ajax({
                        type: 'POST',
                        url: "{{ route('propertyCreateGalleryAdd') }}",
                        data: formData,
                        contentType: false,
                        cache: false,
                        processData:false,
                        beforeSend: function(){
                        },
                        success: function(msg){
                            var allData=$.parseJSON(msg);
                            $("div.modalshg.propertyGalleryAddition .modal-body div.step .avatar-upload div.mycustomloader").hide();
                            for(var i=0;i<allData.length;i++){
                                $("div.modalshg.propertyGalleryAddition .modal-body div.step .avatar-upload .avatar-preview .gallery ul#additionGalleryUL").append("<li><img class='imageThumb' src='{{ URL::to('/uploaded/galleries') }}/"+allData[i]['src']+"'' /><input type='hidden' name='uploaded_galleries_add[]' class='id' value='"+allData[i]['id']+"' /><i class='fa fa-times remove'></i></li>");
                            }
                        }
                    });
              });


              $(document).on('click','div.modalshg.propertyGallery .modal-body div.step .avatar-upload .avatar-preview .gallery ul li i',function(){
                  var id=$(this).parent().find('input').val();
                  $(this).parent().remove();
                  $.ajax({
                        url:"{{ route('propertyCreateGalleryDelete') }}",
                        method:"post",
                        data:{id:id,_token: "{{ csrf_token() }}" },
                        beforeSend: function(){
                        },
                        success: function(msg){
                          if(msg=="done"){
                              if($("div.modalshg.propertyGallery .modal-body div.step .avatar-upload .avatar-preview .gallery ul li").length>0){
                                $("div.modalshg.propertyGallery .modal-body div.step .avatar-upload .avatar-preview .gallery").addClass('hideBG');  
                              }else{
                                $("div.modalshg.propertyGallery .modal-body div.step .avatar-upload .avatar-preview .gallery").removeClass('hideBG'); 
                              }
                          }
                        }
                    });
                  
              });

              $(document).on('click','div.modalshg.propertyGalleryAddition .modal-body div.step .avatar-upload .avatar-preview .gallery ul li i',function(){
                  var id=$(this).parent().find('input').val();
                  $(this).parent().remove();
                  $.ajax({
                        url:"{{ route('propertyCreateGalleryDelete') }}",
                        method:"post",
                        data:{id:id,_token: "{{ csrf_token() }}" },
                        beforeSend: function(){
                        },
                        success: function(msg){
                          if(msg=="done"){
                              if($("div.modalshg.propertyGalleryAddition .modal-body div.step .avatar-upload .avatar-preview .gallery ul li").length>0){
                                $("div.modalshg.propertyGalleryAddition .modal-body div.step .avatar-upload .avatar-preview .gallery").addClass('hideBG');  
                              }else{
                                $("div.modalshg.propertyGalleryAddition .modal-body div.step .avatar-upload .avatar-preview .gallery").removeClass('hideBG'); 
                              }
                           }
                        }
                    });
              });


              function validateSize(input) {
                  const fileSize = input.files[0].size / 1024 / 1024;
                  if(fileSize > 5){
                    $(input).val('');
                    swal('File is too big! Allowed to upload max 5MB file.');
                  }
              }


              $(document).on('click','.deleteQueryOperation',function(){
                           var actionDelete=$(this).attr('action-delete');
                           swal({
                              title: "Are you sure?",
                              text: "Your data delete permanently.",
                              type: "warning",
                              showCancelButton: true,
                              confirmButtonColor: "#DD6B55",
                              confirmButtonText: "Yes, delete it!",
                              cancelButtonText: "No, cancel please!",
                              closeOnConfirm: false,
                              closeOnCancel: false
                            },
                            function(isConfirm){
                              if (isConfirm) {
                                window.location.replace(actionDelete);
                              } else {
                                swal("Cancelled", "Your data is safe now", "error");
                              }
                            });
              });
              
              $(function () {
                  $('#botble-real-estate-tables-property-table').DataTable();
              });

              $(document).on('click','ul.vertical-nav-menu.metismenu li.expand',function(){
                    if($(this).hasClass('show')){
                        $(this).removeClass('show');
                        $(this).find('a.first').removeClass('mm-active');
                        $(this).find('ul').removeClass('mm-show');
                        $(this).find('ul').slideUp();
                    }else{
                        $(this).addClass('show');
                        $(this).find('a.first').addClass('mm-active');
                        $(this).find('ul').addClass('mm-show');
                        $(this).find('ul').slideDown();
                    }
              });

              $(function(){
                  var nowDate = new Date();
                  var today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);
                  $('.properties_checkin').daterangepicker({
                     autoUpdateInput: false,
                     opens: 'left',
                     "minDate": today,
                     "locale": {
                        format: 'MM-DD-YYYY',
                        cancelLabel: 'Clear'
                     }
                  }, function(start, end, label) {
                        $("input#properties_checkin_both").val(start.format('MM-DD-YYYY')+' to '+end.format('MM-DD-YYYY'));
                  });
              });  

        </script>
        @yield('scriptsRun');
    </body>
</html>
