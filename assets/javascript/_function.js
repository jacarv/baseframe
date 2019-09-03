emergence.init({
  reset: false
});


// Menu Offset
$('a[href^="#"]').on('click',function (e) {
    e.preventDefault();

    var target = this.hash;
    var $target = $(target);

    $('html, body').stop().animate({
        'scrollTop': $target.offset().top
    }, 1000);
    $('.menu-wrap').slideUp();
    $('.close-icon').css('display', 'none');
    $('.menu-icon').css('display', 'block');
});

$(".menu-icon").on('click',function (e) {
    $('.menu-wrap, .close-icon').css('display', 'block');
    $('.menu-icon').css('display', 'none');
});

$(".close-icon").on('click',function (e) {
    $('.menu-wrap, .close-icon').css('display', 'none');
    $('.menu-icon').css('display', 'block');
});
