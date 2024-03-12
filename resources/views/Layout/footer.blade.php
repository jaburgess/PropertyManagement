<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="widget">
					<img src="{{ asset('assets/img/logo-removebg-preview.png') }}" style="width:100%;filter:invert(1);max-width: 180px;" class="img-fluid">
					<p><br>
					<i></i></p>
					<ul class="social">
						<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
						<li><a hre="#"><i class="fa-brands fa-twitter"></i></a></li>
						<li><a hre="#"><i class="fa-brands fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<div class="widget">
					<h3>INFORMATION</h3>
					<ul class="menu">
						<li><a href="{{ route('homePage') }}">Home</a></li>
						<li><a href="{{ route('aboutPage') }}">About Us</a></li>
						
					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<div class="widget">
					<h3>SUPPORT</h3>
					<ul class="menu">
						<li><a href="{{ URL::to('/dashboard/property/create') }}">Add Property</a></li>
						
					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<div class="widget">
					<h3>Address.</h3>
					<p><a href="#">1901 Jefferson Ln, New York</a></p>
					<h3>Phone</h3>
					<p><a href="#">021 34567890</a></p>
				</div>
			</div>
		</div>
	</div>
	<div id="copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>Copyright 2023 | ABRentals - All Rights Reserved.</p>
				</div>
			</div>
		</div>
	</div>
</footer>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/solid.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.validate.js') }}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" ></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/1.3.2/jquery.payment.min.js"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script>
	$("form.login_popup").validate();
	$("form.signup_popup").validate();
	$("form.forgot_popup").validate();
	$("form.reset_popup").validate();
	$("form.contactFormPage").validate();
	$("form.searchPropertyPage").validate();
	$("form.property_booking_form").validate();
	$("form.blog_replies").validate();
	$(document).ready(function($) {
		@if(session('login_error')!='')
			$('#loginModal').modal('toggle');
		@endif
		@if(session('signup_error')!='')
			$('#signUpModal').modal('toggle');
		@endif
		@if(session('forgot_error')!='')
			$('#forgotModal').modal('toggle');
		@endif
		@if(session('forgot_sucess')!='')
			$('#forgotModal').modal('toggle');
		@endif
		@if(session('resetPasswordForm_error')!='')
			$('#resetPasswordModal').modal('toggle');
		@endif
		@if(session('resetPasswordForm_success')!='')
			$('#loginModal').modal('toggle');
		@endif
		@if(isset($resetPasswordForm) && $resetPasswordForm!='')
			$('#resetPasswordModal').modal('toggle');
		@endif

		//google auto sugguest

	      function initialize() {
	          var propertyLocation = document.getElementById('properties_location');
	          var input2 = document.getElementById('properties_neighborhood');
	          var autocomplete = new google.maps.places.Autocomplete(propertyLocation);
	          var autocomplete2 = new google.maps.places.Autocomplete(input2);
	          google.maps.event.addListener(autocomplete, 'place_changed', function () {
	              var place = autocomplete.getPlace();
	              $("input#propertyLat").val(place.geometry.location.lat());
	              $("input#propertyLong").val(place.geometry.location.lng());
	              for(var i=0;i<place.address_components.length;i++){
	                if(place.address_components[i].types[0]=="country" && place.address_components[i].types[1]=="political"){
	                    $("input#propertyCountry").val(place.address_components[i].short_name);
	                }
	                if(place.address_components[i].types[0]=="administrative_area_level_1" && place.address_components[i].types[1]=="political"){
	                    $("input#propertyState").val(place.address_components[i].short_name);
	                }
	                if(place.address_components[i].types[0]=="locality" && place.address_components[i].types[1]=="political"){
	                    $("input#propertyCity").val(place.address_components[i].short_name);
	                }
	              }
	          });
	      }
	      google.maps.event.addDomListener(window, 'load', initialize);

	     //date picker
	      $(function() {
	      	  
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
			  		$("input#properties_checkin").val(start.format('MMMM D, YYYY'));
				    $("input#properties_checkout").val(end.format('MMMM D, YYYY'));
				    $("input#properties_checkin_both").val(start.format('MMMM D, YYYY')+' - '+end.format('MMMM D, YYYY'));
			  });

			  $('.properties_checkin').on('cancel.daterangepicker', function(ev, picker) {
				  $('.properties_checkin').val('');
			  });

			  $('.properties_checkin_booking').daterangepicker({
			  	 autoUpdateInput: false,
			  	 opens: 'left',
			  	 "minDate": today,
			     "locale": {
			        format: 'MM-DD-YYYY',
			        cancelLabel: 'Clear'
			     }
			  }, function(start, end, label) {
			    $("input#checkin_booking").val(start.format('MMMM D, YYYY'));
			    $("input#checkout_booking").val(end.format('MMMM D, YYYY'));
			  });

			  $('.properties_checkin_booking').on('cancel.daterangepicker', function(ev, picker) {
				  $('.properties_checkin_booking').val('');
			  });

		  });

		$('.form-control.single_property_guest div.result').click(function(){
		    $('.form-control.single_property_guest .detail').slideDown();
		    $('div#show_cost_form').slideUp();
		    $('.booking-form form button.property_detail_book').hide();
		    $('.booking-form form button.property_detail_proceed').show();
		});
		$('.form-control.single_property_guest .detail button.close').click(function(){
		    $('.form-control.single_property_guest .detail').slideUp();
		});
		$('.form-control.single_property_guest .detail ul li p button.plus').click(function(){
			var limitGuest=$('.form-control.single_property_guest .detail').attr('data-numberguest');
			var adults = $('.form-control.single_property_guest .detail ul li p input[name="adults"]').val();
			var children = $('.form-control.single_property_guest .detail ul li p input[name="children"]').val();
			var infants = $('.form-control.single_property_guest .detail ul li p input[name="infants"]').val();
			var checkLimit=false;
			if(limitGuest>0){ 
				var total=parseInt(adults)+parseInt(children)+parseInt(infants);
				if(total<limitGuest){
					checkLimit=true;
				}
			}else{
				checkLimit=true;
			}
			if(checkLimit){
				var inputIncrement = $(this).parent().find('input').val();
				$(this).parent().find('input').val(parseInt(inputIncrement)+1);
				var adults = $('.form-control.single_property_guest .detail ul li p input[name="adults"]').val();
				var children = $('.form-control.single_property_guest .detail ul li p input[name="children"]').val();
				var infants = $('.form-control.single_property_guest .detail ul li p input[name="infants"]').val();
				if(adults==0 && children==0 && infants==0){
					$('.form-control.single_property_guest div.result label').text('Guest');
				}else{
					$('.form-control.single_property_guest div.result label').text(adults+' Adults, '+children+' Children, '+infants+' Infants');
				}
			}else{
				swal('Guest limit of this property is '+limitGuest);
			}
		});
		$('.form-control.single_property_guest .detail ul li p button.minus').click(function(){
			var limitGuest=$('.form-control.single_property_guest .detail').attr('data-numberguest');
			var inputIncrement = $(this).parent().find('input').val();
			if(inputIncrement>0){
				$(this).parent().find('input').val(parseInt(inputIncrement)-1);
				var adults = $('.form-control.single_property_guest .detail ul li p input[name="adults"]').val();
				var children = $('.form-control.single_property_guest .detail ul li p input[name="children"]').val();
				var infants = $('.form-control.single_property_guest .detail ul li p input[name="infants"]').val();
				if(adults==0 && children==0 && infants==0){
					$('.form-control.single_property_guest div.result label').text('Guest');
				}else{
					$('.form-control.single_property_guest div.result label').text(adults+' Adults, '+children+' Children, '+infants+' Infants');
				}
			}
		});

	});
</script>
</body>
</html>