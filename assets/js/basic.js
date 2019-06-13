// To top Java Script

jQuery(document).ready(function($) {
    $(window).scroll(function() {
        var height = $(window).scrollTop();
        if (height > 300) {
            $('#up-btn').fadeIn();
        } else {
            $('#up-btn').fadeOut();
        }
    });
    $(document).ready(function() {
        $("#up-btn").click(function(event) {
            event.preventDefault();
            $("html, body").animate({ scrollTop: 0 }, "slow");
            return false;
        });

    });

    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('#up-btn').addClass('ayotothetop');
        } else {
            $('#up-btn').removeClass('ayotothetop');
        }
    });
});