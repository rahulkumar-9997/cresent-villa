var $ = jQuery.noConflict();
$(document).ready(function() {

  
function callAll(jsfiles) {
    var src = document.createElement("script");
    src.setAttribute("type", "text/javascript");
    src.setAttribute("src", jsfiles);
    document.getElementsByTagName("head")[0].appendChild(src);
}
callAll("../vendor/jquery/jquery.min.js");
callAll("assets/vendor/bootstrap/js/bootstrap.bundle.min.js");
callAll("assets/vendor/jquery.easing/jquery.easing.min.js");
callAll("assets/vendor/jquery-sticky/jquery.sticky.js");
callAll("assets/vendor/isotope-layout/isotope.pkgd.min.js");
callAll("assets/vendor/venobox/venobox.min.js");
callAll("assets/vendor/owl.carousel/owl.carousel.min.js");
callAll("assets/js/main.js");

});