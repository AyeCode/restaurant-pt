<div id="mobile-header">
    <nav id="rpt-mobile-navigation">
        <?php
        $rpt_menu_args = array(
            'theme_location' => 'main',
            'container' => false,
            'menu_id' => false,
            'menu_class' => 'responsive-menu slicknav-menu',
            'echo' => true);
        wp_nav_menu($rpt_menu_args);
        ?>
    </nav>
</div>