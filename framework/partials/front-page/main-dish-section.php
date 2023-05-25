<?php

$title      = get_theme_mod( 'restaurant_pt_main_dish_title', '' );
$subtitle   = get_theme_mod( 'restaurant_pt_main_dish_subtitle', '' );
$text_title = get_theme_mod( 'restaurant_pt_main_dish_text_title', '' );
$dish_image = get_theme_mod( 'restaurant_pt_main_dish_image','');
$dish1_name = get_theme_mod( 'restaurant_pt_dish_1_title','');
$dish1_ing = get_theme_mod( 'restaurant_pt_dish_1_ing','');
$dish1_price = get_theme_mod( 'restaurant_pt_dish_1_price','');

$dish2_name = get_theme_mod( 'restaurant_pt_dish_2_title','');
$dish2_ing = get_theme_mod( 'restaurant_pt_dish_2_ing','');
$dish2_price = get_theme_mod( 'restaurant_pt_dish_2_price','');

$dish3_name = get_theme_mod( 'restaurant_pt_dish_3_title','');
$dish3_ing = get_theme_mod( 'restaurant_pt_dish_3_ing','');
$dish3_price = get_theme_mod( 'restaurant_pt_dish_3_price','');

$dish4_name = get_theme_mod( 'restaurant_pt_dish_4_title','');
$dish4_ing = get_theme_mod( 'restaurant_pt_dish_4_ing','');
$dish4_price = get_theme_mod( 'restaurant_pt_dish_4_price','');

?>

<div class="full-section-60" id="todays-dish">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<?php if ( $title != '' ): ?>
					<h2 class="features-title">
						<?php echo esc_html( $title ); ?>
					</h2>
				<?php endif; ?>

				<?php if ( $subtitle != '' ): ?>
					<h3 class="features-subtitle">
						<?php echo esc_html( $subtitle ); ?>
					</h3>
				<?php endif; ?>

			</div><!-- col-md-12 -->
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="rpt-single-menu">

					<div class="row">

						<?php if($dish_image != ''): ?>
						<div class="col-lg-6 rpt-menu-image-area">
							<img src="<?php echo esc_url($dish_image); ?>" class="img-responsive" alt=""/>
						</div>
						<?php endif; ?>
						<div class="col-lg-6 rpt-menu-items-area">
							<ul class="rpt-menu-items-list">


								<li>
									<div class="rpt-list-menu-item clearfix">

										<?php if($dish1_name != ''): ?>
											<h4 class="pull-left"><?php echo esc_html($dish1_name); ?></h4>
										<?php endif; ?>

										<?php if($dish1_price != ''): ?>
											<span class="pull-right price"><?php echo esc_html($dish1_price); ?></span>
										<?php endif; ?>

									</div>
									<?php if($dish1_ing != ''): ?>
									<div class="rpt-list-menu-item-details">
										<?php echo esc_html($dish1_ing); ?>
									</div>
									<?php endif; ?>
								</li> <!-- Dish 1 -->

								<li>
									<div class="rpt-list-menu-item clearfix">

										<?php if($dish2_name != ''): ?>
											<h4 class="pull-left"><?php echo esc_html($dish2_name); ?></h4>
										<?php endif; ?>

										<?php if($dish2_price != ''): ?>
											<span class="pull-right price"><?php echo esc_html($dish2_price); ?></span>
										<?php endif; ?>

									</div>
									<?php if($dish2_ing != ''): ?>
										<div class="rpt-list-menu-item-details">
											<?php echo esc_html($dish2_ing); ?>
										</div>
									<?php endif; ?>
								</li> <!-- Dish 2 -->

								<li>
									<div class="rpt-list-menu-item clearfix">

										<?php if($dish3_name != ''): ?>
											<h4 class="pull-left"><?php echo esc_html($dish3_name); ?></h4>
										<?php endif; ?>

										<?php if($dish3_price != ''): ?>
											<span class="pull-right price"><?php echo esc_html($dish3_price); ?></span>
										<?php endif; ?>

									</div>
									<?php if($dish3_ing != ''): ?>
										<div class="rpt-list-menu-item-details">
											<?php echo esc_html($dish3_ing); ?>
										</div>
									<?php endif; ?>
								</li> <!-- Dish 3 -->

								<li>
									<div class="rpt-list-menu-item clearfix">

										<?php if($dish4_name != ''): ?>
											<h4 class="pull-left"><?php echo esc_html($dish4_name); ?></h4>
										<?php endif; ?>

										<?php if($dish4_price != ''): ?>
											<span class="pull-right price"><?php echo esc_html($dish4_price); ?></span>
										<?php endif; ?>

									</div>
									<?php if($dish4_ing != ''): ?>
										<div class="rpt-list-menu-item-details">
											<?php echo esc_html($dish4_ing); ?>
										</div>
									<?php endif; ?>
								</li> <!-- Dish 4 -->


							</ul>

						</div>

					</div>

				</div>
			</div>
		</div>
	</div>
</div>