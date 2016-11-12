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

    //Scrolllock
    $('.scrollock').toggle(function(){
        $('body').addClass('scrolllockToggle');
    }, function() {
        $('body').removeClass('scrolllockToggle');
    });


    /*
    $('.fa-arrow-up').click(function(){
      var current = $('.sectionStyle');
      current.prev().before(current);
    });
    $('fa-arrow-down').click(function(){
      var current = $('.sectionStyle');
      current.next().after(current);
    });
    */

    //$(document).ready(function() {
    //var movementStrength = 25;
    //var height = movementStrength / $(window).height();
    //var width = movementStrength / $(window).width();
    //$("#container").mousemove(function(e){
    //          var pageX = e.pageX - ($(window).width() / 2);
    //          var pageY = e.pageY - ($(window).height() / 2);
    //          var newvalueX = width * pageX * -1 - 25;
    //          var newvalueY = height * pageY * -1 - 50;
    //          $('.frontPage').css("background-position", newvalueX+"px     "+newvalueY+"px");
    //});
    //});

    //$("#container").mousemove(function(e){
    //  $('.frontPage').css({'top': e.clientY - 20, 'left': e.clientX - 20});
    //});


});