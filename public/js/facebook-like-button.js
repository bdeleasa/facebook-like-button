(function($) {

    $(document).ready(function() {

        setTimeout(function() {
            loadFacebook();
        }, 3000);

    });


    function loadFacebook()
    {
        if (typeof (FB) != 'undefined') {
            FB.init({ status: true, cookie: true, xfbml: true });
        } else {
            $.getScript("http://connect.facebook.net/en_US/all.js#xfbml=1", function () {
                FB.init({ status: true, cookie: true, xfbml: true });
            });
        }
    }

})(jQuery);