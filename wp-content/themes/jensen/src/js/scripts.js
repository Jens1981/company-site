$(function(){

  mobileNav = function() {
    var mobileBtn = $('.btn-mobile');
    var mainMenu = $('.menu-main-menu-container');
    mobileBtn.on('click', function(e){
      e.preventDefault();
      mainMenu.toggleClass('show');
      $(this).toggleClass('active');
    });
  }
  
  formValidation = function() {
  	$('.wpcf7-form').submit(function(e) {
  		e.preventDefault();
  		var errorcount = 0;
  		
  		inputField = $('input[type="text"], input[type="email"]');
  		
  		$(inputField).each(function() {
  	    inputVal = $(this).val();
    		if(inputVal == '') {
          $(this).addClass('error');
          errorcount++;
    		}
  		});
    });

  	$(inputField).focus(function() {
      if ($(this).hasClass('error')) {
        $(this).keyup(function() {
          $(this).removeClass('error');
        });
      }
  	});
  }
  
  $('.project-images .slider').bxSlider({
    mode: 'fade',
    pager: false,
    prevText: '<svg class="icon-prev" viewBox="0 0 18 33"><use xlink:href="#icon-prev"></use></svg>',
    nextText: '<svg class="icon-next" viewBox="0 0 18 33"><use xlink:href="#icon-next"></use></svg>'
  });

  $(".body").fitVids();
  
  mobileNav();
  //formValidation();

});