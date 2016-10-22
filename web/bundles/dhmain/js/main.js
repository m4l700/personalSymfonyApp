$(document).ready(function () {

    //Smooth scroll to anchor
    $(document).on('click', 'a', function(event){
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 700);
    });

    //Add and remove class based on scroll position
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();

        //if (scroll >= 500){
            //$('.fa-home').removeClass('active');
          //  $('.fa-home').addClass('active');
        //}
    })


    //Add and remove active class
    $('.dhNav').click(function(){
        $('.active').removeClass('active');
        $(this).addClass('active');
    });



});