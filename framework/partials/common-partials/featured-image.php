<?php
if (has_post_thumbnail()):
    $attachment_id = get_post_thumbnail_id(get_the_ID());
    $image_src = wp_get_attachment_image_src($attachment_id, 'restaurant-pt-boxed-9');

    echo '<img src="' . esc_url($image_src[0]) . '" alt="' . esc_attr(__('featured image', 'restaurant-pt')) . '" width="' . $image_src[1] . '" height="' . $image_src[2] . '" />';
endif; ?>

<div class="rpt blog-item-time">
    <div class="blog-item-date">
        <span class="date-number"><?php echo get_the_time('d'); ?>.</span>
        <span class="date-month"><?php echo get_the_time('M'); ?></span>
    </div>
    <div class="blog-item-year">
        <span><?php echo get_the_time('Y'); ?></span>
    </div>
</div>
