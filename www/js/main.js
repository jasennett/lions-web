jQuery(document).ready(function($) {
    $("nav.mobile-nav").hide();
    $("button.menu").click(function() {
        $("nav.mobile-nav").slideToggle(250);
    });
});
