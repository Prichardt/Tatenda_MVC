$(window).scroll(function() {
    if ($(this).scrollTop()>300)
     {
        $('.top-bar').hide(1000);
        $('.navbar-brand').addClass('navbar-brand-scroll');
        $('.navbar').addClass("navbar-scroll");      
     }
    else
     {
      $('.top-bar').show(1000);
      $('.navbar-brand').removeClass('navbar-brand-scroll');
      $('.navbar').removeClass("navbar-scroll");
     }
 });