/**
 * Restaurant Skin
 */

function restaurant_pt_menu_height() {
    var image_height = jQuery('.rpt-menu-image-area > img').height();

    jQuery('.rpt-menu-items-area').css('height', image_height).css('max-height', image_height).mCustomScrollbar({
        theme: "rounded-dark"
    });
}
jQuery(window).load(function () {
    restaurant_pt_menu_height();
});