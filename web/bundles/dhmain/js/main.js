$(document).ready(function () {

//Smooth scroll to anchor
$(document).on('click', 'a', function(event){
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
});

//Add and remove active class
$('.dhNav').click(function(){
    $('.active').removeClass('active');
    $(this).addClass('active');
});



});