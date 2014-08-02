jQuery(document).ready(function($) {
    var initFunction = function()
    {
        skrollr.init(
        {
            forceHeight:false
        });
    }

    // initialize skrollr if the window width is large enough
    if ($(window).width() >= 768)
    {
        initFunction();
    }

    // disable skrollr if the window is resized below 768px wide
    $(window).on('resize', function ()
    {
        if ($(window).width() < 768)
        {
            // skrollr.init() returns the singleton created above
            var s = skrollr.get();
            if (s)
            {
                s.destroy();
            }
        }
        else
        {
            var s = skrollr.get();
            if (!s)
            {
                initFunction();
            }
        }
    });
});
