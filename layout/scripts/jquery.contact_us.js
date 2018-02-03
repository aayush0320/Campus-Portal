/*jQuery("#footer").click(function () {
    jQuery("Contact Us").animate({
        scrollTo: 0
    }, 700);
});
jQuery(window).scroll(function () {
    if (jQuery(window).scrollTo() > 150) {
        jQuery("#footer").addClass("visible");
    } else {
        jQuery("#footer").removeClass("visible");
    }
}); */
$(function() { //When the document loads
  $("#contact us").bind("click", function() {
    $(window).scrollTo($("#footer").offset().to); //scroll to div with container as ID.
    return false; //Prevent Default and event bubbling.
  });
});