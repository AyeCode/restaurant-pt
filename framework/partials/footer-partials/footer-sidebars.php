<?php if (restaurant_pt_active_footer() != false): ?>
    <section id="rpt-footer-area" class="full-section-60">
        <?php 
        $rpt_footer_info = restaurant_pt_active_footer();
        $rpt_footer_class = $rpt_footer_info['class'];
        $rpt_sidebars_count = $rpt_footer_info['sidebars_count'];
        ?>

        <div class="container">
            <div class="row">

                <div id="rpt-footer-sidebars">

                    <div class="col-lg-12">
                        <?php get_template_part('framework/partials/footer-partials/bottom-nav'); ?>
                    </div>

                    <?php for($i=1; $i<$rpt_sidebars_count+1; $i++): ?>

                        <div class="<?php echo $rpt_footer_class; ?> rpt-footer-sidebar">
                            <?php if (!dynamic_sidebar('rpt-footer-'.$i)): ?>
                                <div class="pre-widget">

                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
      </div>
    </section>
<?php endif; ?>