jQuery(document).ready(function($){

	// Home Slides
	jQuery('.testimonial-slides').slick({
	  infinite: true,
	  slidesToShow: 2,
	  slidesToScroll: 1,
	  arrows:false,
	 autoplaySpeed: 2000,
	  dots:false,
	  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
	});
	jQuery('.hassle-slider').slick({
	  infinite: true,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows:false,
	  dots:false,
	  autoplaySpeed: 2000,
	  autoplay: true,
	});

	jQuery('.images_property_search_slides').slick({
	  infinite: true,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows:true,
	  dots:false,
	  autoplay: false,
	});

	//-----JS for Price Range slider-----
	// jQuery( "#slider-range" ).slider({
	//   range: true,
	//   min: 0,
	//   max: 50000,
	//   values: [ 0, 50000 ],
	//   slide: function( event, ui ) {
	//   	jQuery( "#properties_amount" ).val( "USD " + ui.values[ 0 ] + " to USD " + ui.values[ 1 ] );
	//   }
	// });
	// jQuery( "#properties_amount" ).val( "USD " + jQuery( "#slider-range" ).slider( "values", 0 ) + " to USD " + jQuery( "#slider-range" ).slider( "values", 1 ) );
	jQuery('.adv_extended_options_text').click(function(){
	    jQuery(this).hide();
	    jQuery('.extended_search_check_wrapper').slideDown();
	    jQuery('.extended_search_check_wrapper').css('display', 'flex');
	});
	jQuery('.adv_extended_close_button').click(function(){
	    jQuery('.extended_search_check_wrapper').slideUp();
	    jQuery('.adv_extended_options_text').show();
	});
 
	
	// Properties Inner Page Banner
	
	jQuery('.properties-banner').slick({
	  infinite: true,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  arrows:true,
	  dots:false,
	  autoplay: true,
	});

	jQuery(window).resize(function(){
	  // jQuery('.properties-banner')[0].slick.refresh();
	});

	jQuery('#reveal_register').on('click', function () {
	  // Load up a new modal...
	  jQuery('#signUpModal').modal('show')
	});
	jQuery('#reveal_login').on('click', function () {
	  // Load up a new modal...
	  jQuery('#loginModal').modal('show')
	});
	jQuery('#forgot_password_mod').on('click', function () {
	  // Load up a new modal...
	  jQuery('#forgotModal').modal('show')
	});
	jQuery('#reveal_login_mod').on('click', function () {
	  // Load up a new modal...
	  jQuery('#loginModal').modal('show')
	});

	jQuery('[data-fancybox="property_gallery"]').fancybox({
		loop : false,
		thumbs : {
		   autoStart : true,
		},
		afterLoad: function(){
            window.dispatchEvent(new Event('resize'));
        },	
    });

    jQuery(document).on('click','div.add_entries_detail ul li button.minus',function(){
    	var min=parseInt($(this).attr('min'));
    	var getValue=parseInt(jQuery(this).parent().find('input').val());
    	if(min<getValue){
    		var getValueInput = getValue-1;
    		jQuery(this).parent().find('input').val(getValueInput);
    		jQuery(this).parent().parent().parent().parent().parent().find('.add_entries_detail_show span').text(getValueInput);
    	}
    });
    jQuery(document).on('click','div.add_entries_detail ul li button.plus',function(){
    	var max=parseInt($(this).attr('max'));
    	var getValue=parseInt(jQuery(this).parent().find('input').val());
    	if(max>getValue){
    		var getValueInput = getValue+1;
    		jQuery(this).parent().find('input').val(getValueInput);
    		jQuery(this).parent().parent().parent().parent().parent().find('.add_entries_detail_show span').text(getValueInput);
    	}
    });
    jQuery(document).on('click','.add_entries_detail_show',function(){
    	$('.add_entries_detail').slideUp();
    	$(this).parent().find('.add_entries_detail').slideDown();
    });
    jQuery(document).on('click','.add_entries_detail .close',function(){
    	$('.add_entries_detail').slideUp();
    });
    $(document).on('click', function (e) {
	    if($(e.target).closest(".add_entries_detail_outside").length === 0) {
	        $('.add_entries_detail').slideUp();
	    }
	    if($(e.target).closest(".inner_page_propery_close_click").length === 0) {
	        $('.inner_page_propery_close_click .detail').slideUp();
	    }
	    if($(e.target).closest("section.property-inner .col-md-8").length > 0) {
	    	  $('.inner_page_propery_close_calender_click').removeClass('active');
	    }
	});

  $(document).on('input','.login_modal_wrapper form.signup_popup div input',function(){
  		if($(this).val()!=''){
  			$(this).removeClass('error');
  		}
  });
  $(document).on('input','.login_modal_wrapper form.signup_popup div textarea',function(){
  		if($(this).val()!=''){
  			$(this).removeClass('error');
  		}
  });

  // $(document).on('click','form.signup_popup .firstStep button.next_register_step',function(){
  // 		var firstname = $('form.signup_popup .firstStep input[name="firstname"]').val();
  // 		var lastname = $('form.signup_popup .firstStep input[name="lastname"]').val();
  // 		var phone = $('form.signup_popup .firstStep input[name="phone"]').val();
  // 		var address = $('form.signup_popup .firstStep input[name="address"]').val();
  // 		var city = $('form.signup_popup .firstStep input[name="city"]').val();
  // 		var state = $('form.signup_popup .firstStep input[name="state"]').val();
  // 		var postcode = $('form.signup_popup .firstStep input[name="postcode"]').val();
  // 		var country = $('form.signup_popup .firstStep input[name="country"]').val();
  // 		var roleType = $('form.signup_popup .firstStep input[name="accounttype"]:checked').attr('data-role-name');
  // 		if(firstname==''){
  // 			$('form.signup_popup .firstStep input[name="firstname"]').addClass('error');
  // 		}
  // 		if(lastname==''){
  // 			$('form.signup_popup .firstStep input[name="lastname"]').addClass('error');
  // 		}
  // 		if(phone==''){
  // 			$('form.signup_popup .firstStep input[name="phone"]').addClass('error');
  // 		}
  // 		if(address==''){
  // 			$('form.signup_popup .firstStep input[name="address"]').addClass('error');
  // 		}
  // 		if(city==''){
  // 			$('form.signup_popup .firstStep input[name="city"]').addClass('error');
  // 		}
  // 		if(state==''){
  // 			$('form.signup_popup .firstStep input[name="state"]').addClass('error');
  // 		}
  // 		if(postcode==''){
  // 			$('form.signup_popup .firstStep input[name="postcode"]').addClass('error');
  // 		}
  // 		if(country==''){
  // 			$('form.signup_popup .firstStep input[name="country"]').addClass('error');
  // 		}
  // 		if(roleType==undefined){
  // 			swal('Select role');
  // 		}
  // 		if(firstname!='' && lastname!='' && phone!='' && address!='' && city!='' && state!='' && postcode!='' && country!='' && roleType!=undefined){
  // 			 $('form.signup_popup .firstStep').hide();
  // 			 if(roleType=='Owner'){
  // 			 		$('form.signup_popup .secondStep div.bank_information').show();
  // 			 }else{
  // 			 		$('form.signup_popup .secondStep div.bank_information').hide();
  // 			 }
  // 			 $('form.signup_popup .secondStep').show();
  // 		}
  // });

  // $(document).on('click','form.signup_popup .secondStep button.next_register_step',function(){
  // 		var roleType = $('form.signup_popup .firstStep input[name="accounttype"]:checked').attr('data-role-name');
  // 		if(roleType=='Owner'){
  // 			  var bankName = $('form.signup_popup .secondStep input[name="bankName"]').val();
	// 	  		var routingName = $('form.signup_popup .secondStep input[name="routingName"]').val();
	// 	  		var accountName = $('form.signup_popup .secondStep input[name="accountName"]').val();
	// 	  		var beneficiaryName = $('form.signup_popup .secondStep input[name="beneficiaryName"]').val();
	// 	  		if(bankName==''){
	// 	  			$('form.signup_popup .secondStep input[name="bankName"]').addClass('error');
	// 	  		}
	// 	  		if(routingName==''){
	// 	  			$('form.signup_popup .secondStep input[name="routingName"]').addClass('error');
	// 	  		}
	// 	  		if(accountName==''){
	// 	  			$('form.signup_popup .secondStep input[name="accountName"]').addClass('error');
	// 	  		}
	// 	  		if(beneficiaryName==''){
	// 	  			$('form.signup_popup .secondStep input[name="beneficiaryName"]').addClass('error');
	// 	  		}
	// 	  		if(bankName!='' && routingName!='' && accountName!='' && beneficiaryName!=''){
	// 	  			 $('form.signup_popup .secondStep').hide();
  // 			  	 $('form.signup_popup .thirdStep').show();
	// 	  		}
  // 		}else{
  // 				$('form.signup_popup .secondStep').hide();
  // 			  $('form.signup_popup .thirdStep').show();
  // 		}
  // });

  // $(document).on('click','form.signup_popup .secondStep button.previous_register_step',function(){
  // 		$('form.signup_popup .secondStep').hide();
  // 		$('form.signup_popup .firstStep').show();
  // });

  // $(document).on('click','form.signup_popup .thirdStep button.previous_register_step',function(){
  // 		var roleType = $('form.signup_popup .firstStep input[name="accounttype"]:checked').attr('data-role-name');
  // 		if(roleType=='Owner'){
	// 		 		$('form.signup_popup .secondStep div.bank_information').show();
	// 		 }else{
	// 		 		$('form.signup_popup .secondStep div.bank_information').hide();
	// 		 }
  // 		$('form.signup_popup .thirdStep').hide();
  // 		$('form.signup_popup .secondStep').show();
  // });


  $(document).on('change','form.signup_popup input.uploadFileInput',function(){
      if($(this).val()!=''){
          var filename = $(this).val().replace(/.*(\/|\\)/, '');
          $(this).parent().find('b').html(filename);
      }else{
          $(this).parent().find('b').html('Choose a file...');
      }
  });

});