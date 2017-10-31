$(document).ready(function(){
    // header restyling
    $(window).on('scroll', function() {
        var header = $('.site-header');
        if ($(window).scrollTop() > 30) {
            header.addClass("header-restyle");
        } else {
            header.removeClass("header-restyle");
        }
    });
    
    // mobile nav
    $('.js-mobile-navicon').on('click', function(e){
    	e.preventDefault();
    	
    	$(this).toggleClass("navicon-close");
    	$('body').toggleClass("mobile-nav-open");
    });

    // tooltips
    $('.has-tooltip').tooltip();

    // scroll click actions
    $('.js-scroll').on('click', function(event){
        event.preventDefault();
        var targetID = $(this).attr("data-id");
        scrollToTarget('#' + targetID, 750);
    });
});

// scroll function
function scrollToTarget(id, speed){
    var offSet = 70;
    var targetOffset = $(id).offset().top - offSet;
    $('html,body').animate({scrollTop:targetOffset}, speed);
}
if (typeof console === "undefined") {
    console = {
        log: function() { }
    };
}