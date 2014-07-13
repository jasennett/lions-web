jQuery(document).ready(function($) {
    var s = skrollr.init({
            forceHeight:false
        }
    );
    $("nav.mobile-nav").hide();
    $("button.menu").click(function() {
        $("nav.mobile-nav").slideToggle(250);
    });
});
