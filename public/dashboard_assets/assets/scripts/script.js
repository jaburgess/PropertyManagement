$(document).ready(function(){
 
    // image upload here

    function business_logo_Preview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#business_logo_Preview').css('background-image', 'url('+e.target.result +')');
                $('#business_logo_Preview').hide();
                $('#business_logo_Preview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#business_logo").change(function() {
        if($(this).val()!=''){
            business_logo_Preview(this);
        }else{
            $('#business_logo_Preview').css('background-image', 'url('+$(this).attr('data-placeholder')+')');
            $('#business_logo_Preview').hide();
            $('#business_logo_Preview').fadeIn(650);
        }
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#addImagePreview').css('background-image', 'url('+e.target.result +')');
                $('#addImagePreview').hide();
                $('#addImagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#addImage").change(function() {
        if($(this).val()!=''){
            readURL(this);
        }else{
            $('#addImagePreview').css('background-image', 'url('+$(this).attr('data-placeholder')+')');
            $('#addImagePreview').hide();
            $('#addImagePreview').fadeIn(650);
        }
    });

    function postAddImagePreview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#postAddImagePreview').css('background-image', 'url('+e.target.result +')');
                $('#postAddImagePreview').hide();
                $('#postAddImagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#postImage").change(function() {
        if($(this).val()!=''){
            postAddImagePreview(this);
        }else{
            $('#postAddImagePreview').css('background-image', 'url('+$(this).attr('data-placeholder')+')');
            $('#postAddImagePreview').hide();
            $('#postAddImagePreview').fadeIn(650);
        }
    });

    function accountCreateImagePreview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#accountCreateImagePreview').css('background-image', 'url('+e.target.result +')');
                $('#accountCreateImagePreview').hide();
                $('#accountCreateImagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#accountCreateImage").change(function() {
        if($(this).val()!=''){
            accountCreateImagePreview(this);
        }else{
            $('#accountCreateImagePreview').css('background-image', 'url('+$(this).attr('data-placeholder')+')');
            $('#accountCreateImagePreview').hide();
            $('#accountCreateImagePreview').fadeIn(650);
        }
    });

    //government ID start

    function governmentIDPreview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#governmentIDPreview').css('background-image', 'url('+e.target.result +')');
                $('#governmentIDPreview').hide();
                $('#governmentIDPreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#governmentID").change(function() {
        if($(this).val()!=''){
            governmentIDPreview(this);
        }else{
            $('#governmentIDPreview').css('background-image', 'url('+$(this).attr('data-placeholder')+')');
            $('#governmentIDPreview').hide();
            $('#governmentIDPreview').fadeIn(650);
        }
    });

    //government ID end

    function propertyAddImagePreview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#propertyAddImagePreview').css('background-image', 'url('+e.target.result +')');
                $('#propertyAddImagePreview').hide();
                $('#propertyAddImagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#propertyAddImage").change(function() {
        if($(this).val()!=''){
            propertyAddImagePreview(this);
        }else{
            $('#propertyAddImagePreview').css('background-image', 'url('+$(this).attr('data-placeholder')+')');
            $('#propertyAddImagePreview').hide();
            $('#propertyAddImagePreview').fadeIn(650);
        }
    });

    function addCategoryImagePreview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#addCategoryImagePreview').css('background-image', 'url('+e.target.result +')');
                $('#addCategoryImagePreview').hide();
                $('#addCategoryImagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#addCategoryImage").change(function() {
        if($(this).val()!=''){
            addCategoryImagePreview(this);
        }else{
            $('#addCategoryImagePreview').css('background-image', 'url('+$(this).attr('data-placeholder')+')');
            $('#addCategoryImagePreview').hide();
            $('#addCategoryImagePreview').fadeIn(650);
        }
    });

    function updateCategoryImagePreview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#updateCategoryImagePreview').css('background-image', 'url('+e.target.result +')');
                $('#updateCategoryImagePreview').hide();
                $('#updateCategoryImagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#updateCategoryImage").change(function() {
        if($(this).val()!=''){
            updateCategoryImagePreview(this);
        }else{
            $('#updateCategoryImagePreview').css('background-image', 'url('+$(this).attr('data-placeholder')+')');
            $('#updateCategoryImagePreview').hide();
            $('#updateCategoryImagePreview').fadeIn(650);
        }
    });

    function addServicePreview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#addServicePreview').css('background-image', 'url('+e.target.result +')');
                $('#addServicePreview').hide();
                $('#addServicePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#addServiceImage").change(function() {
        if($(this).val()!=''){
            addServicePreview(this);
        }else{
            $('#addServicePreview').css('background-image', 'url('+$(this).attr('data-placeholder')+')');
            $('#addServicePreview').hide();
            $('#addServicePreview').fadeIn(650);
        }
    });

    function updateServicePreview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#updateServicePreview').css('background-image', 'url('+e.target.result +')');
                $('#updateServicePreview').hide();
                $('#updateServicePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#updateServiceImage").change(function() {
        if($(this).val()!=''){
            updateServicePreview(this);
        }else{
            $('#updateServicePreview').css('background-image', 'url('+$(this).attr('data-placeholder')+')');
            $('#updateServicePreview').hide();
            $('#updateServicePreview').fadeIn(650);
        }
    });


    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#addAmenityImagePreview').css('background-image', 'url('+e.target.result +')');
                $('#addAmenityImagePreview').hide();
                $('#addAmenityImagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#addAmenity").change(function() {
        if($(this).val()!=''){
            readURL(this);
        }else{
            $('#addAmenityImagePreview').css('background-image', 'url('+$(this).attr('data-placeholder')+')');
            $('#addAmenityImagePreview').hide();
            $('#addAmenityImagePreview').fadeIn(650);
        }
    });

    function updateReadURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#UpdateAmenityImagePreview').css('background-image', 'url('+e.target.result +')');
                $('#UpdateAmenityImagePreview').hide();
                $('#UpdateAmenityImagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#UpdateAmenity").change(function() {
        if($(this).val()!=''){ 
            updateReadURL(this);
        }else{
            $('#UpdateAmenityImagePreview').css('background-image', 'url('+$(this).attr('data-placeholder')+')');
            $('#UpdateAmenityImagePreview').hide();
            $('#UpdateAmenityImagePreview').fadeIn(650);
        }
    });


    function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#addAmenityImagePreview2').css('background-image', 'url('+e.target.result +')');
                $('#addAmenityImagePreview2').hide();
                $('#addAmenityImagePreview2').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#addAmenity2").change(function() {
        if($(this).val()!=''){
            readURL2(this);
        }else{
            $('#addAmenityImagePreview2').css('background-image', 'url('+$(this).attr('data-placeholder')+')');
            $('#addAmenityImagePreview2').hide();
            $('#addAmenityImagePreview2').fadeIn(650);
        }
    });

    function updateReadURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#UpdateAmenityImagePreview2').css('background-image', 'url('+e.target.result +')');
                $('#UpdateAmenityImagePreview2').hide();
                $('#UpdateAmenityImagePreview2').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#UpdateAmenity2").change(function() {
        if($(this).val()!=''){
            updateReadURL2(this);
        }else{
            $('#UpdateAmenityImagePreview2').css('background-image', 'url('+$(this).attr('data-placeholder')+')');
            $('#UpdateAmenityImagePreview2').hide();
            $('#UpdateAmenityImagePreview2').fadeIn(650);
        }
    });

    
    // upload document

    $("#hiddenBtnvideo").change(function(){
        if($(this).val()!=''){
          $("#chooseBtnvideo").text($(this).files[0].name);
        }else{
          $("#chooseBtnvideo").text('Upload Video');
        }
    });
    $("#hiddenBtndocument").change(function(){
        if($(this).val()!=''){
          $("#chooseBtndocument").text($(this).files[0].name);
        }else{
          $("#chooseBtndocument").text('Upload Document');
        }
    });

    $("div#addTagsAppearedInput button").click(function(){
        if($("div#addTagsAppearedInput input").val()!=''){
            $("ul#addTagsAppeared").append('<li><i class="fa fa-times"></i><input type="hidden" name="tags[]" value="'+$("div#addTagsAppearedInput input").val()+'"> '+$("div#addTagsAppearedInput input").val()+'</li>');
            $("div#addTagsAppearedInput input").val('');
        }
    });

    $(document).on('click','ul#addTagsAppeared li i',function(){
        $(this).parent().remove();
    });

    
      
      $(document).on('click','div.propertyCreate form .meta-boxes.terms ul li i.fa-plus',function(){
          $("div.propertyCreate form .meta-boxes.terms ul").append('<li><input type="text" name="terms[]" placeholder="Additional Rules" class="terms"><i class="fa fa-times"></i></li>');
      });

      $(document).on('click','div.propertyCreate form .meta-boxes.terms ul li i.fa-times',function(){
          $(this).parent().remove();
      });

      $("form.property button#draft_this_property").click(function(){
          $("div.propertyCreate input#statusHidden").val('');
          if($("div.propertyCreate input#propertyAddImage").val()!='' || $("div.propertyCreate input#propertyAddImageOld").val()!=''){
            $("ul.top_above_error").hide();
            $("div.propertyCreate input#InputSubmit").click();
          }else{
            $("ul.top_above_error li").text('Image required');
            $("ul.top_above_error").show();
          }
      });
      $("form.property button#publish_this_property").click(function(){
          $("div.propertyCreate input#statusHidden").val(0);
          if($("div.propertyCreate input#propertyAddImage").val()!='' || $("div.propertyCreate input#propertyAddImageOld").val()!=''){
            $("ul.top_above_error").hide();
            $("div.propertyCreate input#InputSubmit").click();
          }else{
            $("ul.top_above_error li").text('Image required');
            $("ul.top_above_error").show();
          }
      });

      // property form validtion appearence start

            $("form.property button#draft_this_property_action").click(function(){
                  $("div.propertyCreate input#statusHidden").val('');
                  if($("div.propertyCreate input#propertyAddImage").val()!='' || $("div.propertyCreate input#propertyAddImageOld").val()!=''){
                    $("ul.top_above_error").hide();
                    $("div.propertyCreate input#InputSubmit").click();
                  }else{
                    $("ul.top_above_error li").text('Cover image required');
                    $("ul.top_above_error").show();
                  }
            });
            $("form.property button#publish_this_property_action").click(function(){
                  $("div.propertyCreate input#statusHidden").val(0);
                  if($("div.propertyCreate input#propertyAddImage").val()!='' || $("div.propertyCreate input#propertyAddImageOld").val()!=''){
                    $("ul.top_above_error").hide();
                    $("div.propertyCreate input#InputSubmit").click();
                  }else{
                    $("ul.top_above_error li").text('Cover image required');
                    $("ul.top_above_error").show();
                  }
            });

      // proeprty form validation appearence end


      $("form.career button#draft_this_property").click(function(){
          $("div.propertyCreate input#statusHidden").val('');
          $("div.propertyCreate input#InputSubmit").click();
      });
      $("form.career button#publish_this_property").click(function(){
          $("div.propertyCreate input#statusHidden").val(0);
          $("div.propertyCreate input#InputSubmit").click();
      });

      $("form.faq button#draft_this_property").click(function(){
          $("div.propertyCreate input#statusHidden").val(0);
          $("div.propertyCreate input#InputSubmit").click();
      });
      $("form.faq button#publish_this_property").click(function(){
          $("div.propertyCreate input#statusHidden").val(1);
          $("div.propertyCreate input#InputSubmit").click();
      });


      $("form.post button#draft_this_property").click(function(){
          $("div.propertyCreate input#statusHidden").val('');
          if($("div.propertyCreate input#addImage").val()!=''){
            $("ul.top_above_error").hide();
            $("div.propertyCreate input#InputSubmit").click();
          }else{
            $("ul.top_above_error li").text('Image required');
            $("ul.top_above_error").show();
          }
      });
      $("form.post button#publish_this_property").click(function(){
          $("div.propertyCreate input#statusHidden").val(0);
          if($("div.propertyCreate input#addImage").val()!=''){
            $("ul.top_above_error").hide();
            $("div.propertyCreate input#InputSubmit").click();
          }else{
            $("ul.top_above_error li").text('Image required');
            $("ul.top_above_error").show();
          }
      });



      $("form.formvalidationappeared").validate();
      $("form.addService").validate();
      $("form.addService2").validate();
      $("form.addCategory").validate();
      $("form.addAmenity").validate();
      $("form.addAmenity2").validate();
      $("form.addType").validate();
      $("form.addType2").validate();
      $("form.addFAQCategory").validate();
      $("form.addJobCategory").validate();
      $("form.addPostCategory").validate();
      $("form.addCurrency").validate();
      $("form.loginForm").validate();
      $("form.addManagerpopup").validate();
      

      $("form.editService").validate();
      $("form.editService2").validate();
      $("form.updateCategory").validate();
      $("form.updateAmenity").validate();
      $("form.updateAmenity2").validate();
      $("form.updateType").validate();
      $("form.updateType2").validate();
      $("form.editFAQCategory").validate();
      $("form.editCareerCategory").validate();
      $("form.editPostCategory").validate();
      $("form.contactSend").validate();
      $("form.updateCurrency").validate();
      $("form.updatePostCategory").validate();
      
      $("form.contactSend select.selectContactUserRole").change(function(){
            if($(this).val()=='user'){
                $("form.contactSend div.step.user").show();
                $("form.contactSend div.step.manager").hide();
            }
            if($(this).val()=='manager'){
                $("form.contactSend div.step.user").hide();
                $("form.contactSend div.step.manager").show();
            }
      });

      // edit function start

      $("a.addManagerActionPerform").click(function(){
            var title=$(this).attr('data-title');
            var id=$(this).attr('data-id');
            var manager=$(this).attr('data-user');
            $('.addManagerpopup input[name="pid"]').val(id);
            $('.addManagerpopup input[name="ptitle"]').val(title);
            $('.addManagerpopup select option[value="'+manager+'"]').attr('selected','selected');
      });

      
      $(document).on('click','a.editPopupOpen',function(){

          var title=$(this).attr('data-tile');
          var type=$(this).attr('data-type');
          var charge=$(this).attr('data-charge');
          var amount=$(this).attr('data-amount');
          var status=$(this).attr('data-status');
          var id=$(this).attr('data-id');
          var modalclass=$(this).attr('data-modalclass');
          var placeholderData=$(this).attr('data-placeholder');
          var icons=$(this).attr('data-icons');
          var image='';
          var orginalImage='';
          if($(this).attr("data-image")){
            image=$(this).attr('data-image');
            orginalImage=$(this).attr('data-orginal-image');
          }

          $('div.'+modalclass+' input[name="name"]').val(title);
          if(type!=undefined){
            $('div.'+modalclass+' select[name="type"]').val(type);
          }
          if(amount!=undefined){
            $('div.'+modalclass+' input[name="amount"]').val(amount);
          }
          if(status==1){
            $('div.'+modalclass+' input[type="checkbox"]').attr('checked','checked');
          }else{
            $('div.'+modalclass+' input[type="checkbox"]').removeAttr('checked');
          }
          if(icons=='' && orginalImage!=''){
            $('div.'+modalclass+' .modal-body div.step .avatar-upload .avatar-preview > div').attr('style','background-image: url('+image+');');
            $('div.'+modalclass+' input[name="old"]').val(orginalImage);
          }else{
            if(icons!=''){
                $('div.modalshg .modal-body div.step div.selectedIcon input[name="selectedIcon"]').val(icons);
                $('div.modalshg .modal-body div.step div.selectedIcon label').html('<i class="'+icons+'"></i>');
            }else{
                $('div.'+modalclass+' .modal-body div.step .avatar-upload .avatar-preview > div').attr('style','background-image: url('+placeholderData+');');
            }
          }

          if(charge!=''){
            $('div.'+modalclass+' select[name="charge"]').val(charge);
          }

          $('div.'+modalclass+' input[name="id"]').val(id);

      });

      // edit function end

    $(document).on('click','div.modalshg .modal-body div.step div.icon_lists li input',function(){
        var checkedLength=$('div.modalshg .modal-body div.step div.icon_lists li input:checked').length;
        if(checkedLength>0){
            $('div.modalshg .modal-body div.step div.selectedIcon input[name="selectedIcon"]').val($(this).val());
            $('div.modalshg .modal-body div.step div.selectedIcon label').html('<i class="'+$(this).val()+'"></i>');
        }else{
            $('div.modalshg .modal-body div.step div.selectedIcon input[name="selectedIcon"]').val('');
            $('div.modalshg .modal-body div.step div.selectedIcon label').html('');
        }
    });

      //search function start

      $("#searchText").keyup(function(){
          _this = this;
            $.each($("#botble-real-estate-tables-property-table tbody tr"), function() {
               if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1){
                   $(this).hide();
                 }else{
                   $(this).show();
                }
            });
      });
   
      // search funciton end

      //google auto sugguest

      function initialize() { 
          var input = document.getElementById('propertyLocation');
          var input2 = document.getElementById('neighborhood');
          var autocomplete = new google.maps.places.Autocomplete(input);
          var autocomplete2 = new google.maps.places.Autocomplete(input2);
          google.maps.event.addListener(autocomplete, 'place_changed', function () {
              var place = autocomplete.getPlace();
              console.log(place);
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
                if(place.address_components[i].types[0]=="postal_code"){
                    $("input#zipcode").val(place.address_components[i].short_name);
                }
              }
          });
      }
      google.maps.event.addDomListener(window, 'load', initialize);

      //ckeditor

      ClassicEditor.create(document.querySelector("#createProperty"));

      var hiddenBtnvideo = document.getElementById('hiddenBtnvideo');
      var chooseBtnvideo = document.getElementById('chooseBtnvideo');
      hiddenBtnvideo.addEventListener('change', function() {
          if (hiddenBtnvideo.files.length > 0) {
              chooseBtnvideo.innerText = hiddenBtnvideo.files[0].name;
          } else {
              $('#hiddenBtnvideo').val('');
              chooseBtnvideo.innerText = 'Choose';
          }
      });
      var hiddenBtndocument = document.getElementById('hiddenBtndocument');
      var chooseBtndocument = document.getElementById('chooseBtndocument');
      hiddenBtndocument.addEventListener('change', function() {
          if (hiddenBtndocument.files.length > 0) {
              chooseBtndocument.innerText = hiddenBtndocument.files[0].name;
          } else {
              $('#hiddenBtndocument').val('');
              chooseBtndocument.innerText = 'Choose';
          }
      });

})