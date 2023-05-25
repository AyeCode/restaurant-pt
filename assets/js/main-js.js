/*
 ** This is the main js file. However , we use the compressed one with the same name and the .min extension **/

function restaurant_pt_menu_height(){

    var outer_header_height = jQuery('section#rpt-header').outerHeight();
    var inner_logo_height  = jQuery('section#rpt-logo').height();
    var total_menu_item_height = inner_logo_height+20;

    var outer_header_height =  outer_header_height+20;

    jQuery('#rpt-logo').css('margin-top','12px');
    jQuery('section#rpt-header').css('max-height',outer_header_height+'px');
    jQuery('#rpt-main-navigation').css('line-height',inner_logo_height+'px');
    jQuery('#rpt-main-navigation ul li a').not('.sub-menu li a').not('.sub-menu ul li ul li a').css('height',total_menu_item_height+'px');
}

function restaurant_pt_add_slicknav(){
    jQuery('.slicknav-menu').slicknav();
}
function restaurant_pt_matchHeight(){
    jQuery('.matchHeight').matchHeight();
}

jQuery(window).load(function(){
  
    jQuery('#site-loader').fadeOut();
    restaurant_pt_menu_height();
    jQuery('ul.nav-tabs li:first-child').addClass('active');
  
});
function restaurant_pt_smooth_scrolling(){

        jQuery('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = jQuery(this.hash);
                target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    jQuery('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });

}

function restaurant_pt_add_sticky(){
    jQuery('.sticky-header').sticky({topSpacing:'0px'});

    jQuery('.sticky-header').removeClass('trans-header');
}

jQuery(document).ready(function(){
    'use-strict';

    var windoww = jQuery(window).width();


    if(windoww > 1048) {
        jQuery(window).stellar({
            horizontalScrolling: false,
            responsive: true
        });
    }
  
  
    restaurant_pt_menu_height();
    restaurant_pt_add_slicknav();
    restaurant_pt_matchHeight();
    restaurant_pt_smooth_scrolling();
    restaurant_pt_add_sticky();
});