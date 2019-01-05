var isMenuToggled = false;

$('.menu-toggle').click(function() {
    isMenuToggled = !isMenuToggled;
    $('.menu').css({ 'display': isMenuToggled ? 'block' : '' });
});