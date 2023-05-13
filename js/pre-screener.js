//found in the HubSpot Module "Application Screener - Static"

$('a.btn.next').click(function(e){
  $(".slick").slick('slickNext');
  e.preventDefault();
});
$('a.btn.prev').click(function(e){
  $(".slick").slick('slickPrev');
  e.preventDefault();
});

var $flareURL = $('.flareURL').text();
var $partnerURL = $('.partnerURL').text();

$('select.button-assign').each(function(){
  var $theseButtons = $(this).parents('.card-body').siblings('.card-footer').find('a.btn');
  
  $(this).on('change', function(){
    var $thisSelected = $(this).find("option:selected");
    
    // Next Question
    if ($thisSelected.hasClass('nextstep')){
      $('.redirect-content').removeClass('active');
      $('.redirect-content .flare').removeClass('active');
      $theseButtons.each(function(e){
        $(this).addClass('next');
        $(this).text('Continue');
        $(this).click(function(e){
          $(".slick").slick('slickNext');
          e.preventDefault();
        });
      });      
    }

    // Forward to DreamSpring (Flare)
    if ($thisSelected.hasClass('goFlare')){
      //show the transport message
      $('.redirect-content .partner').removeClass('active');
      $('.redirect-content').addClass('active');
      $('.redirect-content .flare').addClass('active');
      //change link to Flare and un-bind this button
      $theseButtons.each(function(e){
        $(this).unbind('click');
        $(this).removeClass('next');
        $(this).attr('href', $flareURL);
        $(this).text('Continue to Our Application Form');
      });      
    }

    // Forward to Partner (Flare)
    if ($thisSelected.hasClass('goPartner')){
      //show the transport message
      $('.redirect-content').addClass('active');
      $('.redirect-content .flare').removeClass('active');
      $('.redirect-content .partner').addClass('active');
      //change link to Partner and un-bind this button
      $theseButtons.each(function(e){
        $(this).unbind('click');
        $(this).removeClass('next');
        $(this).attr('href', $partnerURL);
        $(this).text('Continue to the Funding Circle Application Form');
      });      
    }
    
    
  });

  
});