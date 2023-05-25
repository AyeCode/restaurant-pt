<?php
/*
 * 1. Constants to help us throughout the theme.
 */
DEFINE('RESTAURANT_PT_CSS_PATH', get_template_directory_uri() . '/assets/css/');
DEFINE('RESTAURANT_PT_JS_PATH', get_template_directory_uri() . '/assets/js/');
DEFINE('RESTAURANT_PT_IMAGES_PATH', get_template_directory_uri() . '/assets/images/');
DEFINE('RESTAURANT_PT_FONTS_PATH', get_template_directory_uri() . '/assets/fonts/');
DEFINE('RESTAURANT_PT_STYLESHEET_PATH', get_stylesheet_uri());
DEFINE('RESTAURANT_PT_FRAMEWORK_PATH', get_template_directory_uri() . '/framework/');
DEFINE('RESTAURANT_PT_FRAMEWORK_REQUIRED_PATH', get_template_directory() . '/framework/');

/*
 * 2. After setup theme
 */
add_action('after_setup_theme', 'restaurant_pt_setup');
if (!function_exists('restaurant_pt_setup')):
    function restaurant_pt_setup()
    {

        if (!isset($content_width))
            $content_width = 750;

        add_theme_support('automatic-feed-links');
        load_theme_textdomain('restaurant-pt', get_template_directory() . '/languages');
        add_theme_support('html5', array('gallery', 'caption'));


        add_theme_support('title-tag');


        register_nav_menus(array(
            'main' => __('Main Navigation', 'restaurant-pt'),
            'footer' => __('Bottom Navigation', 'restaurant-pt')
        ));

        $rpt_bg_defaults = array(
            'default-color' => 'ffffff',
            'default-image' => '',
            'wp-head-callback' => 'restaurant_pt_bg_callback',
        );
        add_theme_support('custom-background', $rpt_bg_defaults);

        $rpt_header_defaults = array(
            'default-image' => '',
            'random-default' => false,
            'width' => '1920',
            'height' => '820',
            'flex-height' => false,
            'flex-width' => false,
            'default-text-color' => '',
            'header-text' => false,
            'uploads' => true,
            'wp-head-callback' => '',
            'admin-head-callback' => '',
            'admin-preview-callback' => '',
        );

        add_theme_support('custom-header', $rpt_header_defaults);

        add_theme_support('custom-logo', array(
            'height' => 50,
            'width' => 280,
            'flex-width' => true,
        ));

        add_theme_support('post-thumbnails');
        add_image_size('restaurant-pt-boxed-9', 847, 385, true); // slider image size.
        add_image_size('restaurant-pt-boxed-12', 1170, 550, true); // Single post type image (boxed 3/4 layout)
    }
endif;

/*
 * 3. Fallback Functions
 */
if (!function_exists('restaurant_pt_bg_callback')):

    function restaurant_pt_bg_callback()
    {
        $background = set_url_scheme(get_background_image());
        $color = get_theme_mod('background_color', get_theme_support('custom-background', 'default-color'));
        $color = sanitize_hex_color($color); // added this
        if (!$background && !$color)
            return;


        $style = $color ? "background-color: #$color;" : '';

        if ($background) {
            $image = " background-image: url('$background');";

            $repeat = get_theme_mod('background_repeat', get_theme_support('custom-background', 'default-repeat'));
            if (!in_array($repeat, array('no-repeat', 'repeat-x', 'repeat-y', 'repeat')))
                $repeat = 'repeat';
            $repeat = " background-repeat: $repeat;";

            $position = get_theme_mod('background_position_x', get_theme_support('custom-background', 'default-position-x'));
            if (!in_array($position, array('center', 'right', 'left')))
                $position = 'left';
            $position = " background-position: top $position;";

            $attachment = get_theme_mod('background_attachment', get_theme_support('custom-background', 'default-attachment'));
            if (!in_array($attachment, array('fixed', 'scroll')))
                $attachment = 'scroll';
            $attachment = " background-attachment: $attachment;";

            $style .= $image . $repeat . $position . $attachment;
        }
        ?>
        <style type="text/css" id="custom-background-css">
            body.custom-background {
            <?php echo trim( $style ); ?>
            }
        </style>
        <?php
    }
endif;

/*
 * 4. Enqueue styles + scripts.
 */
add_action('wp_enqueue_scripts', 'restaurant_pt_styles');
if (!function_exists('restaurant_pt_styles')):
    function restaurant_pt_styles()
    {

        wp_enqueue_style('restaurant-pt-lora-font', RESTAURANT_PT_FONTS_PATH . 'Lora/stylesheet.css', '', '', 'all');
        wp_enqueue_style('restaurant-pt-alex-font', RESTAURANT_PT_FONTS_PATH . 'AlexBrush/stylesheet.css', '', '', 'all');
        wp_enqueue_style('restaurant-pt-montserrat-font', RESTAURANT_PT_FONTS_PATH . 'Montserrat/stylesheet.css', '', '', 'all');
        wp_enqueue_style('restaurant-pt-minified-css', RESTAURANT_PT_CSS_PATH . 'minified.css.php', '', '', 'all');
        wp_enqueue_style('restaurant-pt-main-stylesheets', RESTAURANT_PT_STYLESHEET_PATH);

        wp_enqueue_style('restaurant-pt-bistro-css', RESTAURANT_PT_CSS_PATH . 'rpt-bistro.css', '', '', 'all');
    }
endif;

add_action('wp_enqueue_scripts', 'restaurant_pt_scripts');
if (!function_exists('restaurant_pt_scripts')):
    function restaurant_pt_scripts()
    {
        if (is_singular() && get_option('thread_comments'))
            wp_enqueue_script('comment-reply');

        wp_enqueue_script('restaurant-pt-bootstrap', RESTAURANT_PT_JS_PATH . 'bootstrap.min.js', array('jquery'), '', true);

        wp_enqueue_script( 'html5shiv', RESTAURANT_PT_JS_PATH . 'html5shiv.min.js', array('jquery'), '',true );
        wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );

        wp_enqueue_script('restaurant-pt-slicknav', RESTAURANT_PT_JS_PATH . 'jquery.slicknav.js', array('jquery'), '', true);
        wp_enqueue_script('restaurant-pt-sticky', RESTAURANT_PT_JS_PATH . 'jquery.sticky.js', array('jquery'), '', true);
        wp_enqueue_script('restaurant-pt-matchHeight', RESTAURANT_PT_JS_PATH . 'jquery.matchHeight-min.js', array('jquery'), '', true);
        wp_enqueue_script('restaurant-pt-customS', RESTAURANT_PT_JS_PATH . 'jquery.mCustomScrollbar.concat.min.js', array('jquery'), '', true);

        wp_enqueue_script('restaurant-pt-waypoints', RESTAURANT_PT_JS_PATH . 'jquery.waypoints.min.js', array('jquery'), '', true);
        wp_enqueue_script('restaurant-pt-stellar', RESTAURANT_PT_JS_PATH . 'jquery.stellar.min.js', array('jquery'), '', true);

        wp_enqueue_script('restaurant-pt-main-js', RESTAURANT_PT_JS_PATH . 'main-js.js', array('jquery'), '', true);
        wp_enqueue_script('restaurant-pt-ext-js', RESTAURANT_PT_JS_PATH . 'rpt.js', array('jquery'), '', true);
    }
endif;

function restaurant_pt_customizer_preview()
{
    wp_enqueue_script('restaurant-pt-customizer-js', get_template_directory_uri() . '/assets/js/customizer.js', array('jquery', 'customize-preview'), '', true);
}

add_action('customize_preview_init', 'restaurant_pt_customizer_preview');
/*
 * 5. Comments
 */
if (!function_exists('restaurant_pt_comment')):
    function restaurant_pt_comment($comment,
                                   $args,
                                   $depth)
    {
        $GLOBALS['comment'] = $comment;
        extract($args, EXTR_SKIP);

        if ('div' == $args['style']) {
            $tag = 'div';
            $add_below = 'comment';
        } else {
            $tag = 'li';
            $add_below = 'div-comment';
        }
        ?>
        <<?php echo $tag ?><?php comment_class(empty($args['has_children']) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
        <?php if ('div' != $args['style']) : ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
    <?php endif; ?>
        <div class="row">

            <div class="col-md-2">


                <div class="comment-author vcard">
                    <?php
                    if ($args['avatar_size'] != 0) echo get_avatar($comment, $args['avatar_size']); ?>

                </div>

            </div>

            <div class="col-md-10">
                <?php if ($comment->comment_approved == '0') : ?>
                    <em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.', 'restaurant-pt'); ?></em>
                    <br/>
                <?php endif; ?>

                <?php printf(__('<cite class="fn">%s</cite>', 'restaurant-pt'), get_comment_author_link()); ?>

                <div class="comment-meta commentmetadata">
                    <a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)); ?>">
                        <?php
                        printf(__('%1$s at %2$s', 'restaurant-pt'), get_comment_date(), get_comment_time()); ?></a><?php edit_comment_link(__('(Edit)', 'restaurant-pt'), '  ', '');
                    ?>
                </div>
                <hr class="comment-name-hr">

                <div class="restaurant_pt_comment_body">
                    <?php comment_text(); ?>
                </div>
                <div class="reply">
                    <?php comment_reply_link(array_merge($args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
                </div>
            </div>
        </div>
        <?php if ('div' != $args['style']) : ?>
        </div>
    <?php endif; ?>
        <?php
    }
endif;
/*
 * 6. Widgets Initialization
 */
/**== Add some sidebars ==**/
add_action('widgets_init', 'restaurant_pt_sidebars');
function restaurant_pt_sidebars()
{

    /**== Right sidebar ==**/
    register_sidebar(array(
        'name' => __('Sidebar', 'restaurant-pt'),
        'id' => 'sidebar',
        'description' => __('This is the main sidebar.It is in every page - post. However you can override this setting from within each post.',
            'restaurant-pt'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));

    /**== Footer Sidebar 1 ==**/
    register_sidebar(array(
        'name' => __('Footer Sidebar 1', 'restaurant-pt'),
        'id' => 'rpt-footer-1',
        'description' => __('This is the sidebar in the footer, on the left', 'restaurant-pt'),
        'before_widget' => '<aside id="%1$s" class="footerwidget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
    /**== Footer Sidebar 2 ==**/
    register_sidebar(array(
        'name' => __('Footer Sidebar 2', 'restaurant-pt'),
        'id' => 'rpt-footer-2',
        'description' => __('This is the sidebar in the footer, the second on the left', 'restaurant-pt'),
        'before_widget' => '<aside id="%1$s" class="footerwidget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
    /**== Footer Sidebar 3 ==**/
    register_sidebar(array(
        'name' => __('Footer Sidebar 3', 'restaurant-pt'),
        'id' => 'rpt-footer-3',
        'description' => __('This is the sidebar in the footer, the second on the right', 'restaurant-pt'),
        'before_widget' => '<aside id="%1$s" class="footerwidget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
    /**== Footer Sidebar 4 ==**/
    register_sidebar(array(
        'name' => __('Footer Sidebar 4', 'restaurant-pt'),
        'id' => 'rpt-footer-4',
        'description' => __('This is the sidebar in the footer, on the right', 'restaurant-pt'),
        'before_widget' => '<aside id="%1$s" class="footerwidget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
}

/*
 * . Required Files
 */
require_once(RESTAURANT_PT_FRAMEWORK_REQUIRED_PATH . 'base-init.php');