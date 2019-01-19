var slideIndex = 0;
var slides = [
    {
        'lead': 'Web development',
        'sub': 'We offer the entire web development suite, from designing to hosting your site.'
    },
    {
        'lead': 'Mobile apps',
        'sub': 'Mobile solutions help give your business an edge over the competition.'
    },
    {
        'lead': 'CMS integration',
        'sub': 'Use the CMS that you\'re comfortable with (Wordpress, Sporty, Drupal).'
    }
];

function nextSlide() {
    slideIndex += 1;
    if (slideIndex >= slides.length) {
        slideIndex = 0;
    }

    let lead = $('#header-lead');
    let sub = $("#header-sub");

    lead.animate({ 'left': '150%' }, 800, function() {
        lead.text(slides[slideIndex].lead);
        lead.animate({ 'left': '0px' }, 800);
    });

    sub.animate({ 'left': '-150%' }, 800, function() {
        sub.text(slides[slideIndex].sub);
        sub.animate({ 'left': '0px' }, 800);
    })

    setTimeout(nextSlide, 5000 + 1600);
}

// start the slider
$(document).ready(function() {
    setTimeout(nextSlide, 4000);
});