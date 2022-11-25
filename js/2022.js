//dreamspring.js

var dreamspring = {

    hamburger: function(){
      var $hamburger = $('.nav-trigger a');
      var $mobileNav = $('ul.header-nav');
      $hamburger.on('click touchend', function(e){
        $(this).toggleClass('active');
        $mobileNav.toggleClass('active');
        e.preventDefault();
      })
    },

    circles: function(){
      var $circle = $('#circle-animate').find('.rounded-circle');
      $circle.each(function(){
        var $index = $(this).index();
      });
    },

    productGrid: function(){
      var $content = $('.product .content');
      $content.each(function(){
        var $expandTrigger = $(this).find('.expand-trigger a');
        var $expandable = $(this).find('.extra');
        $expandTrigger.on('click', function(e){
          var $moreText = $(this).find('em');
          var $lessText = $(this).find('strong');
          $moreText.toggle();
          $lessText.toggle();
          $(this).parents('.content').toggleClass('expanded');
          e.preventDefault();
          $expandable.slideToggle();
        });

      });
    },
    pacId: function(){
      var $IDinput = $('input.pac-id-field');
      var $IDsubmit = $('input.pac-id-submit');
      var $minLength = 5;
      var $maxLength = 7;
      //var $letters = /[a-zA-Z]/g;
      var $hint = $('.form-hint'); 
      var $baseURL = 'https://flare.dreamspring.org/loan_applications/new';
      var $parameter = '?utm_partner_member_id=';
      var $cleanID = 0;
      
      //validate that it's 5-7 characters long
      $IDinput.keyup(function() {
        var $textlength = $(this).val().length;
        $finalURL = '';
        if ( $textlength >= $minLength && $textlength <= $maxLength ) { 
          $hint.addClass('hidden');
          $IDsubmit.removeAttr('disabled');
          $cleanID = $(this).val();
        }
        if ( $textlength < $minLength ) { 
          $hint.removeClass('hidden');
          $IDsubmit.attr('disabled', 'disabled');
          $cleanID = '';
        }
        $finalURL = $baseURL + $parameter + $cleanID;
        console.log($finalURL);
      });
      $IDsubmit.on('click', function(){
        window.location.href = $finalURL;
      });
    }


}

$(document).ready(function(){
    dreamspring.hamburger();
    dreamspring.circles();
    dreamspring.productGrid();
    dreamspring.pacId();
});
