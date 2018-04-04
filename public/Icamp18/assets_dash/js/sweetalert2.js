
var SweetAlert2Demo = function() {

    var initDemos = function() {       
      

        $('#track_tech').click(function(e) {
            swal("Function Not Available!", "Track Selection Will Open Soon, Stay Tuned...", "info");
        });
        $('#track_market').click(function(e) {
            swal("Function Not Available!", "Track Selection Will Open Soon, Stay Tuned...", "info");
        });
        $('#track_innovation').click(function(e) {
            swal("Function Not Available!", "Track Selection Will Open Soon, Stay Tuned...", "info");
        });
        $('#track_startup').click(function(e) {
            swal("Function Not Available!", "Track Selection Will Open Soon, Stay Tuned...", "info");
        });   

    };

    return {
        //== Init
        init: function() {
            initDemos();
        },
    };
}();

//== Class Initialization
jQuery(document).ready(function() {
    SweetAlert2Demo.init();
});