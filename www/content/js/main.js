jQuery(document).ready(function($) {
    $("nav.mobile-nav").hide();
    $("nav.mobile-nav").removeClass('hidden');
    $("button.menu").click(function() {
        $("nav.mobile-nav").slideToggle(250);
    });
});
