var isMenuToggled = false;

$('.menu-toggle').click(function() {
    isMenuToggled = !isMenuToggled;

    // Hide/Show mobile nav with animation
    $('.menu').slideToggle(function() {
        if (!isMenuToggled) {
            $('.menu').css({ 'display': '' });
        }
    })
});