
// Blur dissolve scroll animation
(function() {
    const blurEls = document.querySelectorAll('.blur-dissolve');
    if (!blurEls.length) return;
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.3 });
    blurEls.forEach(function(el) { observer.observe(el); });
})();

$(document).ready(function(){

    // SCROLL to Top
    var offset = 620;
    var duration = 500;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-to-top').fadeIn(duration);
            $('body').addClass('need-padding');
        } else {
            jQuery('.back-to-top').fadeOut(duration);
        }
    });

    jQuery('.back-to-top').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    })

  //MOBILE MENU TOGGLES

    $(".nav-button").click(function(e) {
        $(".nav-button,.main-menu").addClass("activated").toggleClass("open");
    });

    $("body").click(function(e) {
        $(".main-menu,.nav-button").on("transitionend", function() {
            $(".main-menu,.nav-button").removeClass("activated");
        });
    });


    $(".hamburger").click(function(e) {
        $("body, .main-menu").addClass("activated").toggleClass("menu-open");
    });

    $("body").click(function(e) {
        $(".main-menu").on("transitionend", function() {
            $(".main-menu").removeClass("activated");
        });
    });

});

//clickable
$('.clickable').click(function() {
    window.location=$(this).find("a").attr("href");
});
