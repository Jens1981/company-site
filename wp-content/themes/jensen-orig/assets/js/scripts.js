$(function(){

/*
  $('.hero-slider .slides').owlCarousel({
    loop: true,
    items: 1,
    autoplay: true,
    autoplayTimeout: 5000,
    mouseDrag: false,
    touchDrag: false,
    animateIn: 'fadeIn',
    animateOut: 'fadeOut',
    URLhashListener: true,
    nav: true,
    navText: ['<span class="icon-prev"></span>','<span class="icon-next"></span>']
  });
*/

  mobileNav = function() {
    var mobileBtn = $('.btn-mobile');
    var mainMenu = $('.menu-main-menu-container');
    mobileBtn.on('click', function(e){
      e.preventDefault();
      mainMenu.toggleClass('show');
      $(this).toggleClass('active');
    });
  }

  $(".body").fitVids();
  
  mobileNav();

});