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
      // console.log('CIRCLES!');
      $circle.each(function(){
        var $index = $(this).index();
        // console.log($(this));
      });
    }

}

$(document).ready(function(){
    dreamspring.hamburger();
    dreamspring.circles();
});
