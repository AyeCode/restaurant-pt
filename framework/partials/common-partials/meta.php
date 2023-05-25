<?php
$post_terms = wp_get_post_terms(get_the_ID(), 'category');
$counter = 1;
?>
<span class="fa fa-tag"></span><span class="post-categories">
    <?php echo get_the_category_list(','); ?>
</span>
<span class="fa fa-user"></span> <span class="by-author"><?php echo __('By ', 'restaurant-pt') . ' ' . get_the_author_meta('display_name'); ?></span>
<span class="fa fa-comments"></span><span class"comments-number"> <a
    href="<?php the_permalink(); ?>#comments"><?php printf(_nx('One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'restaurant-pt'), number_format_i18n(get_comments_number()
    ));
    ?></a></span>