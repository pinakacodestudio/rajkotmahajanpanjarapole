'use strict';


// hide sidebar on mobile view
if ($(window).width() < 900) {
    $('body').removeClass('sb-r-o').addClass('mobile-view sb-l-m sb-r-c');
}
function goBack() {
    event.preventDefault();
    history.back(1);
}

jQuery(document).ready(function() {

    "use strict";
    if (jQuery.fn.dataTableExt) {
        jQuery.extend(jQuery.fn.dataTableExt.oSort, {
            "date-uk-pre": function(a) {
                if (a == null || a == "") {
                    return 0;
                }
                var ukDatea = a.split('-');
                return (ukDatea[2] + ukDatea[1] + ukDatea[0]) * 1;
            },

            "date-uk-asc": function(a, b) {
                return ((a < b) ? -1 : ((a > b) ? 1 : 0));
            },

            "date-uk-desc": function(a, b) {
                return ((a < b) ? 1 : ((a > b) ? -1 : 0));
            }
        });
    }

});