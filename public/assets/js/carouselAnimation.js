var $myCarousel = $('#homeCarousel');

// Initialize carousel
$myCarousel.carousel();
let animationInTypes = ['zoomIn', 'slideInUp', 'rotateIn', 'flipInt', 'fadeIn', 'fadeInUp'];
let animationOutTypes = ['zoomOut', 'slideOutUp', 'rotateOut', 'flipOut', 'fadeOut', 'fadeOutUp'];

let randomNumber = 0;

function doAnimations(elems, beforeDiv = null) {
    if (beforeDiv != null)
        beforeDiv.removeClass("animated " + animationOutTypes[randomNumber]);
    var animEndEv = whichAnimationEvent();
    // console.log(randomNumber);
    elems.each(function () {
        var $this = $(this),
            $animationType = 'animated ' + animationInTypes[randomNumber];

        // Add animate.css classes to
        // the elements to be animated
        // Remove animate.css classes
        // once the animation event has ended
        $this.addClass($animationType).one(animEndEv, function () {
            $this.removeClass($animationType);
            // console.log(randomNumber)

        });
    });
}

// Select the elements to be animated
// in the first slide on page load
var $firstAnimatingElems = $myCarousel.find('.carousel-item:first')
    .find('[data-animation ^= "animated"]');
doAnimations($firstAnimatingElems)

function doAnimationBefore(div) {
    var animEndEv = 'animationend webkitAnimationEnd oAnimationEnd';
    var animationEnd = whichAnimationEvent();
    $animationType = "animated " + animationOutTypes[randomNumber];
    div.eq(0).addClass($animationType).one("animationend", function () {
    });

}

// Attach the doAnimations() function to the
// carousel's slide.bs.carousel event
$myCarousel.on('slide.bs.carousel', function (e) {
    randomNumber = Math.floor(Math.random() * Math.floor(6));
    // Select the elements to be animated inside the active slide
    var $animteBefore = $('.carousel-item').eq(e.from);
    doAnimationBefore($animteBefore);
    var $animatingElems = $(e.relatedTarget)
        .find("[data-animation ^= 'animated']");

    doAnimations($animatingElems, $animteBefore)


});

function sleep(milliseconds) {
    var start = new Date().getTime();
    for (var i = 0; i < 1e7; i++) {
        if ((new Date().getTime() - start) > milliseconds) {
            break;
        }
    }
}

function whichAnimationEvent() {
    var t;
    var el = document.createElement('fakeelement');
    var animations = {
        'animation': 'animationend',
        'OAnimation': 'oAnimationEnd',
        'MozAnimation': 'Animationend',
        'WebkitAnimation': 'webkitAnimationEnd'
    };
    for (t in animations) {
        if (el.style[t] !== undefined) {
            return animations[t];
        }
    }
}