// These are the scripts that make the Category pages work
var $j = jQuery.noConflict();
(function($) {
$(function() {
$(document).ready(function() {	
    
    // DUI page dropdown magic	
    $('#offense, #BAC').on('change', function(){
        // set reference to select elements
        var offense = $('#offense');
        var BAC = $('#BAC');
        
        // check if user has made a selection on both dropdowns
        if ( offense.prop('selectedIndex') > 0 && BAC.prop('selectedIndex') > 0 ) {
            // remove active class from current active div element
            $('.table_container.active').removeClass('active');
            
            // get all result divs, and filter for matching data attributes
            $('.table_container').filter('[data-offense="' + offense.val() + '"][data-BAC="' + BAC.val() + '"]').addClass('active');            
        }
    });
});
});
})(jQuery);