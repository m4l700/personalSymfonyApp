$(document).ready(function () {

    //Smooth scroll to anchor
    $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 700);
            return false;
          }
        }
      });
    });

    //$(document).on('click', 'a', function(event){
    //    event.preventDefault();

    //    $('.sectionStyle').animate({
    //        scrollTop: $( $.attr(this, 'href') ).offset().top
    //    }, 700);
    //});

    //Add and remove class based on scroll position
    //$(window).scroll(function(){
    //   var scroll = $(window).scrollTop();

        //if (scroll >= 500){
            //$('.fa-home').removeClass('active');
          //  $('.fa-home').addClass('active');
        //}
    //})


    //Add and remove active class
    $('.dhNav').click(function(){
        $('.active').removeClass('active');
        $(this).addClass('active');
    });


    $("#container:first-child").mousemove(function(e){
      $('.sectionStyle .frontPage').css({'top': e.clientY - 20, 'left': e.clientX - 20});
    });


});