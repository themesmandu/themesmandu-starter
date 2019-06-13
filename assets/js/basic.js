// Dropdown link JavaScript

jQuery(document).ready(

    /**
     * Compatible drop-down menu issue.
     */
    function($) {
        var windowWidth = window.innerWidth;

        /**
         * Add active parent links on navigation
         */
        $('.navbar .dropdown > a').click(
            function() {
                //Do nothing if it's an empty hash.

                if ($(this).attr('href') === '#') {
                    return false;
                }
                location.href = this.href;
                return false;
            }
        );
    }
    (jQuery));


// added class on dropdown menu span

jQuery(document).ready(function($) {
    if ($(document).width() < 1200) {
        var $menu_item = $('.menu-item-has-children');

        $menu_item.append('<span class="caret"></span>');

        $('.caret').click(function() {
            $(this).parent().toggleClass('menu-open');
        });
    }
});

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