<?php

if (class_exists('WP_Customize_Control') && !class_exists('Restaurant_PT_Custom_Content')) :
    class Restaurant_PT_Custom_Content extends WP_Customize_Control
    {
        public $content = '';
        /**
         * Render the control's content.
         *
         * Allows the content to be overriden without having to rewrite the wrapper.
         *
         * @since   1.0.0
         * @return  void
         */
        public function render_content()
        {
            if (isset($this->label)) {
                echo '<span class="customize-control-title">' . $this->label . '</span>';
            }
            if (isset($this->content)) {
                echo $this->content;
            }
            if (isset($this->description)) {
                echo '<span class="description customize-control-description">' . $this->description . '</span>';
            }
        }
    }
endif;
/*
* Homepage builder
*/
$wp_customize->add_panel('restaurant_pt_home_builder', array(
    'priority' => 9,
    'title' => __('Homepage Builder', 'restaurant-pt'),
    'description' => __('Build the home page like the demo', 'restaurant-pt'),
));

$wp_customize->add_section(
    'restaurant_pt_homepage_settings_section',
    array(
        'title' => __('Header Text & Buttons', 'restaurant-pt'),
        'description' => __('After uploading a header image fill this forms to enhance your header.', 'restaurant-pt'),
        'panel' => 'restaurant_pt_home_builder',
    )
);
$wp_customize->add_section(
    'restaurant_pt_homepage_about_section',
    array(
        'title' => __('About Section', 'restaurant-pt'),
        'description' => __('Set your about section.', 'restaurant-pt'),
        'panel' => 'restaurant_pt_home_builder',
    )
);
$wp_customize->add_section(
    'restaurant_pt_homepage_today_specials_section',
    array(
        'title' => __('Todays Specials', 'restaurant-pt'),
        'description' => __('Add the today specials plates.', 'restaurant-pt'),
        'panel' => 'restaurant_pt_home_builder',
    )
);
$wp_customize->add_section(
    'restaurant_pt_homepage_parallax_section',
    array(
        'title' => __('Reservation Section', 'restaurant-pt'),
        'description' => __('Add a nice reservation section.', 'restaurant-pt'),
        'panel' => 'restaurant_pt_home_builder',
    )
);
$wp_customize->add_section(
    'restaurant_pt_homepage_contact_section',
    array(
        'title' => __('Contact Section', 'restaurant-pt'),
        'description' => __('This is our contact section. You can use it among with the Contact form 7 plugin.', 'restaurant-pt'),
        'panel' => 'restaurant_pt_home_builder',
    )
);

$wp_customize->add_setting(
    'restaurant_pt_header_above_title',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'restaurant_pt_header_above_title',
    array(
        'type' => 'text',
        'label' => __('The small text above the header title', 'restaurant-pt'),
        'section' => 'restaurant_pt_homepage_settings_section',
        'settings' => 'restaurant_pt_header_above_title',

    ));

$wp_customize->add_setting(
    'restaurant_pt_header_title',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    )
);
$wp_customize->add_control(
    'restaurant_pt_header_title',
    array(
        'type' => 'text',
        'label' => __('The title of the header.', 'restaurant-pt'),
        'section' => 'restaurant_pt_homepage_settings_section',
        'settings' => 'restaurant_pt_header_title',

    ));


$wp_customize->add_setting(
    'restaurant_pt_header_subtitle',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'restaurant_pt_header_subtitle',
    array(
        'type' => 'text',
        'label' => __('The small text below the header title', 'restaurant-pt'),
        'section' => 'restaurant_pt_homepage_settings_section',
        'settings' => 'restaurant_pt_header_subtitle',

    ));

$wp_customize->add_setting(
    'restaurant_pt_header_subtitle_note',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'restaurant_pt_header_subtitle_note',
    array(
        'type' => 'text',
        'label' => __('The small note below subtitle', 'restaurant-pt'),
        'section' => 'restaurant_pt_homepage_settings_section',
        'settings' => 'restaurant_pt_header_subtitle_note',

    ));

$wp_customize->add_setting(
    'restaurant_pt_header_btn_text',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    )
);
$wp_customize->add_control(
    'restaurant_pt_header_btn_text',
    array(
        'type' => 'text',
        'label' => __('The header button text.', 'restaurant-pt'),
        'section' => 'restaurant_pt_homepage_settings_section',
        'settings' => 'restaurant_pt_header_btn_text',

    ));

$wp_customize->add_setting(
    'restaurant_pt_header_btn_url',
    array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    )
);

$wp_customize->add_control(
    'restaurant_pt_header_btn_url',
    array(
        'type' => 'text',
        'label' => __('The header button url.', 'restaurant-pt'),
        'section' => 'restaurant_pt_homepage_settings_section',
        'settings' => 'restaurant_pt_header_btn_url',

    ));


/*
* About Section
*/

$wp_customize->add_setting(
    'restaurant_pt_theme_about_page',
    array(
        'default' => '',
        'sanitize_callback' => 'absint'
    )
);
$wp_customize->add_control(
    'restaurant_pt_theme_about_page',
    array(
        'type' => 'dropdown-pages',
        'label' => __('Select the about page.', 'restaurant-pt'),
        'section' => 'restaurant_pt_homepage_about_section',
        'settings' => 'restaurant_pt_theme_about_page',

    ));

$wp_customize->add_setting(
    'restaurant_pt_about_subtitle',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',


    )
);
$wp_customize->add_control(
    'restaurant_pt_about_subtitle',
    array(
        'type' => 'text',
        'label' => __('Add section subtitle.', 'restaurant-pt'),
        'section' => 'restaurant_pt_homepage_about_section',
        'settings' => 'restaurant_pt_about_subtitle',

    ));


/*
* Main dish
*/
$wp_customize->add_setting(
    'restaurant_pt_main_dish_title',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',

    )
);
$wp_customize->add_control(
    'restaurant_pt_main_dish_title',
    array(
        'type' => 'text',
        'label' => __('Main dish section title', 'restaurant-pt'),
        'section' => 'restaurant_pt_homepage_today_specials_section',
        'settings' => 'restaurant_pt_main_dish_title',

    ));

$wp_customize->add_setting(
    'restaurant_pt_main_dish_subtitle',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',

    )
);
$wp_customize->add_control(
    'restaurant_pt_main_dish_subtitle',
    array(
        'type' => 'text',
        'label' => __('Main dish section subtitle', 'restaurant-pt'),
        'section' => 'restaurant_pt_homepage_today_specials_section',
        'settings' => 'restaurant_pt_main_dish_subtitle',
    ));

/*
 * Todays Dish image
 */
$wp_customize->add_setting(
    'restaurant_pt_main_dish_image',
    array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',

    )
);

$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'restaurant_pt_main_dish_image',
        array(
            'label' => __('Upload the main image.', 'restaurant-pt'),
            'section' => 'restaurant_pt_homepage_today_specials_section',
            'settings' => 'restaurant_pt_main_dish_image',
        )
    )
);


/*
 * Dish 1
 */

$wp_customize->add_setting(
    'restaurant_pt_dish_1_title',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',

    )
);
$wp_customize->add_control(
    'restaurant_pt_dish_1_title',
    array(
        'type' => 'text',
        'label' => __('Dish 1 name', 'restaurant-pt'),
        'section' => 'restaurant_pt_homepage_today_specials_section',
        'settings' => 'restaurant_pt_dish_1_title',

    ));
$wp_customize->add_setting(
    'restaurant_pt_dish_1_ing',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',

    )
);
$wp_customize->add_control(
    'restaurant_pt_dish_1_ing',
    array(
        'type' => 'text',
        'label' => __('Dish 1 Ingredients,comma separated', 'restaurant-pt'),
        'section' => 'restaurant_pt_homepage_today_specials_section',
        'settings' => 'restaurant_pt_dish_1_ing',

    ));
$wp_customize->add_setting(
    'restaurant_pt_dish_1_price',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',

    )
);
$wp_customize->add_control(
    'restaurant_pt_dish_1_price',
    array(
        'type' => 'text',
        'label' => __('Dish 1 price', 'restaurant-pt'),
        'section' => 'restaurant_pt_homepage_today_specials_section',
        'settings' => 'restaurant_pt_dish_1_price',

    ));
/*
 * Dish 2
 */
$wp_customize->add_setting(
    'restaurant_pt_dish_2_title',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',

    )
);
$wp_customize->add_control(
    'restaurant_pt_dish_2_title',
    array(
        'type' => 'text',
        'label' => __('Dish 2 name', 'restaurant-pt'),
        'section' => 'restaurant_pt_homepage_today_specials_section',
        'settings' => 'restaurant_pt_dish_2_title',

    ));
$wp_customize->add_setting(
    'restaurant_pt_dish_2_ing',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',

    )
);
$wp_customize->add_control(
    'restaurant_pt_dish_2_ing',
    array(
        'type' => 'text',
        'label' => __('Dish 2 Ingredients,comma separated', 'restaurant-pt'),
        'section' => 'restaurant_pt_homepage_today_specials_section',
        'settings' => 'restaurant_pt_dish_2_ing',

    ));
$wp_customize->add_setting(
    'restaurant_pt_dish_2_price',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',

    )
);
$wp_customize->add_control(
    'restaurant_pt_dish_2_price',
    array(
        'type' => 'text',
        'label' => __('Dish 2 price', 'restaurant-pt'),
        'section' => 'restaurant_pt_homepage_today_specials_section',
        'settings' => 'restaurant_pt_dish_2_price',

    ));
/*
 * Dish 3
 */
$wp_customize->add_setting(
    'restaurant_pt_dish_3_title',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',

    )
);
$wp_customize->add_control(
    'restaurant_pt_dish_3_title',
    array(
        'type' => 'text',
        'label' => __('Dish 3 name', 'restaurant-pt'),
        'section' => 'restaurant_pt_homepage_today_specials_section',
        'settings' => 'restaurant_pt_dish_3_title',

    ));
$wp_customize->add_setting(
    'restaurant_pt_dish_3_ing',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',

    )
);
$wp_customize->add_control(
    'restaurant_pt_dish_3_ing',
    array(
        'type' => 'text',
        'label' => __('Dish 3 Ingredients,comma separated', 'restaurant-pt'),
        'section' => 'restaurant_pt_homepage_today_specials_section',
        'settings' => 'restaurant_pt_dish_3_ing',

    ));
$wp_customize->add_setting(
    'restaurant_pt_dish_3_price',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',

    )
);
$wp_customize->add_control(
    'restaurant_pt_dish_3_price',
    array(
        'type' => 'text',
        'label' => __('Dish 3 price', 'restaurant-pt'),
        'section' => 'restaurant_pt_homepage_today_specials_section',
        'settings' => 'restaurant_pt_dish_3_price',

    ));
/*
 * Dish 4
 */
$wp_customize->add_setting(
    'restaurant_pt_dish_4_title',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',

    )
);
$wp_customize->add_control(
    'restaurant_pt_dish_4_title',
    array(
        'type' => 'text',
        'label' => __('Dish 4 name', 'restaurant-pt'),
        'section' => 'restaurant_pt_homepage_today_specials_section',
        'settings' => 'restaurant_pt_dish_4_title',

    ));
$wp_customize->add_setting(
    'restaurant_pt_dish_4_ing',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',

    )
);
$wp_customize->add_control(
    'restaurant_pt_dish_4_ing',
    array(
        'type' => 'text',
        'label' => __('Dish 4 Ingredients,comma separated', 'restaurant-pt'),
        'section' => 'restaurant_pt_homepage_today_specials_section',
        'settings' => 'restaurant_pt_dish_4_ing',

    ));
$wp_customize->add_setting(
    'restaurant_pt_dish_4_price',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',

    )
);
$wp_customize->add_control(
    'restaurant_pt_dish_4_price',
    array(
        'type' => 'text',
        'label' => __('Dish 4 price', 'restaurant-pt'),
        'section' => 'restaurant_pt_homepage_today_specials_section',
        'settings' => 'restaurant_pt_dish_4_price',

    ));

/*
* Reservation
*/

$wp_customize->add_setting(
    'restaurant_pt_reservations_page',
    array(
        'default' => '',
        'sanitize_callback' => 'absint'
    )
);
$wp_customize->add_control(
    'restaurant_pt_reservations_page',
    array(
        'type' => 'dropdown-pages',
        'label' => __('Select the reservations page.', 'restaurant-pt'),
        'section' => 'restaurant_pt_homepage_parallax_section',
        'settings' => 'restaurant_pt_reservations_page',

    ));

$wp_customize->add_setting(
    'restaurant_pt_parallax_btn_text',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'restaurant_pt_parallax_btn_text',
    array(
        'type' => 'text',
        'label' => __('Reservation button text', 'restaurant-pt'),
        'section' => 'restaurant_pt_homepage_parallax_section',
        'settings' => 'restaurant_pt_parallax_btn_text',
    ));

$wp_customize->add_setting(
    'restaurant_pt_parallax_btn_url',
    array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    )
);

$wp_customize->add_control(
    'restaurant_pt_parallax_btn_url',
    array(
        'type' => 'text',
        'label' => __('Reservation Button URL', 'restaurant-pt'),
        'section' => 'restaurant_pt_homepage_parallax_section',
        'settings' => 'restaurant_pt_parallax_btn_url',
    ));
/*
* Contact Settings
*/

/** Register Settings **/
$wp_customize->add_setting(
    'restaurant_pt_contact_bg',
    array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    )
);

$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'restaurant_pt_contact_bg',
        array(
            'label' => __('Use a background image in contact section.', 'restaurant-pt'),
            'section' => 'restaurant_pt_homepage_contact_section',
            'settings' => 'restaurant_pt_contact_bg',
        )
    )
);

$wp_customize->add_setting(
    'restaurant_pt_contact_bg_color',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    )
);


$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'restaurant_pt_contact_bg_color',
        array(
            'label' => __('Use a background color fot the contact section.', 'restaurant-pt'),
            'section' => 'restaurant_pt_homepage_contact_section',
            'settings' => 'restaurant_pt_contact_bg_color',
        )
    )
);


$wp_customize->add_setting(
    'restaurant_pt_contact_title',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'restaurant_pt_contact_title',
    array(
        'type' => 'text',
        'label' => __('Contact section title.', 'restaurant-pt'),
        'section' => 'restaurant_pt_homepage_contact_section',
        'settings' => 'restaurant_pt_contact_title',
    ));

$wp_customize->add_setting(
    'restaurant_pt_contact_subtitle',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'restaurant_pt_contact_subtitle',
    array(
        'type' => 'text',
        'label' => __('Contact section subtitle.', 'restaurant-pt'),
        'section' => 'restaurant_pt_homepage_contact_section',
        'settings' => 'restaurant_pt_contact_subtitle',
    ));

$wp_customize->add_setting(
    'restaurant_pt_contact_subtitle',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'restaurant_pt_contact_subtitle',
    array(
        'type' => 'text',
        'label' => __('Contact form shortcode. Paste it directly from the cf7 plugin.', 'restaurant-pt'),
        'section' => 'restaurant_pt_homepage_contact_section',
        'settings' => 'restaurant_pt_contact_subtitle',
    ));

/** GENERAL SECTION Options**/

$wp_customize->add_section(
    'restaurant_pt_general_settings_section',
    array(
        'title' => __('General Settings', 'restaurant-pt'),
        'description' => __('General Settings for this theme.', 'restaurant-pt'),
        'priority' => 10,
    )
);


/** Register Settings **/

$wp_customize->add_setting(
    'restaurant_pt_transparent_header',
    array(
        'default' => '0',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_setting(
    'restaurant_pt_sticky_menu',
    array(
        'default' => '0',
        'sanitize_callback' => 'sanitize_text_field'
    )
);


$wp_customize->add_control(
    'restaurant_pt_transparent_header',
    array(
        'type' => 'select',
        'label' => __('Enable transparent header. Front page', 'restaurant-pt'),
        'section' => 'restaurant_pt_general_settings_section',
        'settings' => 'restaurant_pt_transparent_header',
        'choices' => array(
            '0' => __('No', 'restaurant-pt'),
            '1' => __('Yes', 'restaurant-pt'),
        )
    ));

/** Register Controls **/
$wp_customize->add_control(
    'restaurant_pt_sticky_menu',
    array(
        'type' => 'select',
        'label' => __('Make navigation menu sticky', 'restaurant-pt'),
        'section' => 'restaurant_pt_general_settings_section',
        'settings' => 'restaurant_pt_sticky_menu',
        'choices' => array(
            '0' => __('No', 'restaurant-pt'),
            '1' => __('Yes', 'restaurant-pt'),
        )
    ));