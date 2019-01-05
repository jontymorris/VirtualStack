var isMenuToggled = false;

// (TODO: Fix hiding on resize)
$('.menu-toggle').click(function() {
    isMenuToggled = !isMenuToggled;
    $('.menu').slideToggle() // Hide/Show mobile nav with animation
});