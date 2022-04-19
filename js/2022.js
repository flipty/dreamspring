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
    }

}

$(document).ready(function(){
    dreamspring.hamburger();
    dreamspring.circles();
    dreamspring.productGrid();
});
