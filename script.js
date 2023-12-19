(function($) {
$(function() {

  $('.wp-make-quiz-question li').click(function(){

    var question = $(this).parents('.wp-make-quiz-wrapper');

    if(question.hasClass('open')){
      return false;
    }

    question.addClass('open');
    question.find('.wp-make-quiz-question li').addClass('disabled');

    $(this).addClass('choice');
    $(this).find('img').fadeIn();

    if($(this).hasClass('correct')){
      //正解
      question.find('.wp-make-quiz-result.correct').show();
    }else{
      //不正解
      question.find('.wp-make-quiz-result.incorrect').show();
    }

    question.find('.wp-make-quiz-answer').fadeIn();

  });
});
})(jQuery);
