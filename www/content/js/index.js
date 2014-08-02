jQuery(document).ready(function($) {
    $('.placeholder .alternate').hide();
    $('.placeholder .loading').show();
    $.ajax({
        url: '/ajax/announcements',
        success: function(data)
        {
            $('.messages .placeholder').remove();
            $('.messages').append(data.messages);
            if (data.more)
            {
                $('section.announcements .gutter').append(data.more);
            }
        },
        error: function()
        {
            $('.messages .placeholder .loading').hide();
            $('.messages .placeholder .alternate').show();
        },
        dataType:'json'
    });
    $.ajax({
        url: '/ajax/events',
        success: function(data)
        {
            $('.upcoming .placeholder').remove();
            $('.upcoming').append(data.content);
        },
        error: function()
        {
            $('.upcoming .placeholder .loading').hide();
            $('.upcoming .placeholder .alternate').show();
        },
        dataType:'json'
    });
});
