<?php
$bg = get_theme_mod('restaurant_pt_contact_bg', '');
$bg_color = get_theme_mod('restaurant_pt_contact_bg_color', '');
$title = get_theme_mod('restaurant_pt_contact_title', '');
$subtitle = get_theme_mod('restaurant_pt_contact_subtitle', '');
$cf7 = get_theme_mod('restaurant_pt_contact_subtitle', '');
?>

<div class="full-section-60"
     id="contact" <?php echo($bg != '' || $bg_color != '' ? 'style="background:' . sanitize_hex_color($bg_color) . ' url(' . esc_url($bg) . ');"' : ''); ?> >
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <?php if ($title != ''): ?>
                    <h2 class="section-title">
                        <?php echo esc_attr($title); ?>
                    </h2>
                <?php endif; ?>

                <?php if ($subtitle != ''): ?>
                    <h3 class="section-subtitle">
                        <?php echo esc_attr($subtitle); ?>
                    </h3>
                <?php endif; ?>

            </div><!-- col-md-12 -->

        </div>
        <?php if ($cf7 != ''): ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="rpt-contact-section-form-container">
                        <?php
                        if (has_shortcode($cf7,'contact-form-7')):
                            echo do_shortcode($cf7);
                        else:
                            echo esc_attr($cf7);
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
