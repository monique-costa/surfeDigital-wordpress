jQuery(document).ready(function() {
    jQuery('.toggle-nav').click(function(e) {
        jQuery('.navigation-menu').slideToggle(500);

        e.preventDefault();
    });
    
});