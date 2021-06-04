$(function(){
	// question-wrapper
	// $('.faq-list-item').click(function(){
	$('.question').click(function(){

    // var $answer = $(this).find('.answer');
    var $answer = $(this).next('.answer');

    if($answer.hasClass('open')){
      $answer.slideUp();
      $answer.removeClass('open');
      $(this).find('i').removeClass('fa-chevron-up');
			$(this).find('i').addClass('fa-chevron-down');
    } else {
      $answer.slideDown();
      $answer.addClass('open');
			$(this).find('i').removeClass('fa-chevron-down');
      $(this).find('i').addClass('fa-chevron-up');
    }
  });

	// flow-wrapper
	$('.flow-detail-title').click(function(){
	
    var $detail = $(this).next('.flow-detail-text');

    if($detail.hasClass('open')){
      $detail.slideUp();
      $detail.removeClass('open');
      $(this).find('i').removeClass('fa-chevron-up');
			$(this).find('i').addClass('fa-chevron-down');
    } else {
      $detail.slideDown();
      $detail.addClass('open');
			$(this).find('i').removeClass('fa-chevron-down');
      $(this).find('i').addClass('fa-chevron-up');
    }
  });

  /*--------------*/
	/*--Back to Top--*/
	/*-------------*/
	
	$('#back_to_top').hide();
	
	$(window).scroll(function() {
		if ($(this).scrollTop() > 60) {
			$('#back_to_top').fadeIn();
		} else {
			$('#back_to_top').fadeOut();
		}
	});
	
	$('#back_to_top').click(function() {
			$('body, html').animate({
				scrollTop:0
			}, 500);
			return false;
		});
	
	// if (window.matchMedia( "(max-width: 1000px)" ).matches) {
	// 	/* ウィンドウサイズが 768px以下の場合のコードをここに */
	// 	var contactPadding = 60;
	// } else {
	// 	/* ウィンドウサイズが 768px以上の場合のコードをここに */
	// 	contactPadding = 75;
	// 	}	

  var contactPadding = $('header').height();
		$('.doc-icon').click(function(){
		// var contactPadding = 75;
        var targetTop = $('#form-wrapper').offset().top;
        $('html,body').animate({
            scrollTop: targetTop-contactPadding
        }, 500);
        return false;
    });
	$('.doc-btn').click(function(){
        var targetTop = $('#form-wrapper').offset().top;
        $('html,body').animate({
            scrollTop: targetTop-contactPadding
        }, 500);
        return false;
    });

});