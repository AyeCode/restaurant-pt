<?php
$about_page = absint(get_theme_mod('restaurant_pt_theme_about_page', ''));
$subtitle = esc_attr(get_theme_mod('restaurant_pt_about_subtitle', ''));
?>
<?php if (!empty($about_page)):
    $about = get_post($about_page);
    ?>
    <div class="full-section-60" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="section-title">
                        <?php echo $about->post_title; ?>
                    </h2>
                    <?php if ($subtitle != ''): ?>
                        <h3 class="section-subtitle">
                            <?php echo $subtitle; ?>
                        </h3>
                    <?php endif; ?>
                </div>

                <div class="col-md-7">

                    <div class="about-texts">

                        <div class="about-text">

                            <?php echo $about->post_content; ?>

                        </div>

                    </div>

                </div>


                <div class="col-md-5">

                    <div id="about-images">
                        <?php
                        $thumb_id = get_post_thumbnail_id($about->ID);
                        $thumb_src = wp_get_attachment_image_src($thumb_id, 'full');
                        ?>
                        <img src="<?php echo esc_url($thumb_src[0]);?>"/>
                    </div>

                </div>

            </div> <!--.row -->

        </div>
        <!-- .container -->
    </div>
    <!-- .full-section-60-->
<?php endif; ?>