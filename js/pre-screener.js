//pre-screener.js

var $questions = $('.questions');
var $question = $questions.find('.question');

$questionImage = $('.question-image');
$screenerButton = $('.screener-button');
$screenerButtonContainer = $('.screener-button-container');

$question.each(function(){
  var $thisSelect = $(this).find('select');
  $thisSelect.each(function(){
    
    $(this).on('change', function(){
    
      var $selected = $(this).find("option:selected");
      var $thisValue = $selected.attr('value');
      var $thisDestination = '#' + $selected.attr('value');
      var $changeButtonText = $selected.data('buttonchange');
      var $thisButtonURL = $selected.data('buttonurl');
      var $thisImageURL = $(this).parents('.question').data('imageurl');
      var $buttonDelete = $selected.data('buttondelete');
      var $isExternal = false;
      if ( $thisValue.indexOf('external') != -1 ) {
        $isExternal = true;
      }
      $screenerButtonContainer.empty();

      var $destinationButtonText = $($thisDestination).data('questionbutton');
      var $newButtonText = 'Continue';
      
      if ($destinationButtonText) { $newButtonText = $destinationButtonText }
      
      if (!$isExternal){
        var $newButton = $('<a />').addClass('btn btn-sm btn-primary-primary transition-3d-hover screener-button').html('Continue<!--(internal)-->');
      }
      if ($isExternal){
        var $newButton = $('<a />').addClass('btn btn-sm btn-primary-primary transition-3d-hover screener-button').html('Continue<!--(external)-->');        
      }
      
      $screenerButtonContainer.append($newButton);  
      
      $newButton.on('click', function(){
        var $destinationQuestionImage = $(this).parents('.screener-button-container').siblings('.questions').children($thisDestination).data('imageurl');
        $questionImage.attr('src', $destinationQuestionImage);
        if ($isExternal){ 
          console.log('external link');
          $(this).text($changeButtonText); 
          //$(this).attr('href', $thisButtonURL);
          function buttonLinkChange(){
            $('.screener-button').attr('href', $thisButtonURL);
            $('.screener-button').attr('target', '_blank');
          }
          setTimeout(buttonLinkChange, 1000);
        }
        if (!$isExternal){ 
          console.log('internal link');
          $(this).text($newButtonText); 
          $(this).on('click', function(e){ e.preventDefault() });
        }
        $('.question').removeClass('active').addClass('inactive');
        $($thisDestination).removeClass('inactive').addClass('active');
        console.log('Activate ' + $thisDestination);
      });//button click 
  
    });//on change

  });//each select

});//each question