<?php
/*
 * Main Navigation
 */
?>
<nav id="rpt-main-navigation">
    <?php
    $rpt_menu_args = array(
        'theme_location' => 'main',
        'container' => false,
        'menu_id' => false,
        'menu_class' => 'responsive-menu',
        'echo' => true);
    wp_nav_menu($rpt_menu_args);
    ?>
</nav>

