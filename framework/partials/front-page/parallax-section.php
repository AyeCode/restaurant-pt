<?php
$reservation_page = absint(get_theme_mod('restaurant_pt_reservations_page', ''));
$btn_text = get_theme_mod('restaurant_pt_parallax_btn_text','');
$btn_url = get_theme_mod('restaurant_pt_parallax_btn_url','');

if(!empty($reservation_page)):
    $reservations = get_post($reservation_page);
$thumb_id  = get_post_thumbnail_id( $reservations->ID);
$thumb_src = wp_get_attachment_image_src( $thumb_id, 'full' );
    ?>
<div class="full-section-60" id="reservations" data-stellar-background-ratio="0.4" style="background:url('<?php echo esc_url($thumb_src[0]);?>')">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <h4 class="parallax-title">
            <?php echo esc_attr($reservations->post_title); ?>
          </h4>

          

          <p class="parallax-text">
            <?php echo $reservations->post_content; ?>
          </p>

          
          <?php if($btn_text != '' && $btn_url !=''): ?>
          
          <a class="rpt-btn" href="<?php echo esc_url($btn_url); ?>">
            <?php echo esc_html($btn_text); ?>
          </a>
          
          <?php endif; ?>
          
        </div>
      </div>
    </div>
</div><!-- #parallax ends here -->
<?php endif; ?>