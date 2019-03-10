(function () {
    'use-strict';
    $('document').ready(function() {
        var path = window.location.pathname;
        var page = path.split("/").pop();
        var selector = '[href="' + page + '"]';
        
        $('.nav-item').each(function() {
            $(this).removeClass('active');
        });

        if (page === "") {
            $('[href="index.php"]').closest('.nav-item').addClass('active');    
        } else {
            $(selector).closest('.nav-item').addClass('active');
        }
    });
})();