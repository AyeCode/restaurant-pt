<!DOCTYPE html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>"/>
	<link rel="profile" href="http://gmpg.org/xfn/11"/>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- Loader -->
<div id="site-loader"></div>
<!-- Load Header area partials -->


<?php get_template_part( 'framework/partials/header-partials/mobile-navigation' ); ?>
<section id="rpt-header" class="bistro-header <?php echo restaurant_pt_sticky_menu(); ?>  <?php echo( restaurant_pt_transparent_header() == true ? ' trans-header' : '' ); ?>">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">

				<!-- Logo -->
				<?php get_template_part( 'framework/partials/header-partials/logo' ); ?>

			</div>
			<div class="col-lg-9 clearfix">

				<!-- Main Navigation -->
				<?php get_template_part( 'framework/partials/header-partials/main-navigation' ); ?>

			</div>
		</div>
	</div>
</section><!-- #rpt-header -->


<!-- Load Header Image
- You can turn the header image on from the customizer settings.
- If the slider is enabled then the header is not visible.
- Header image should be of 1920x820px
-->
<?php if ( restaurant_pt_get_header_image() != false && is_front_page() ): ?>
	<section id="rpt-header-image" style="background:url(<?php echo get_custom_header()->url; ?>); height:700px; background-position: center; background-size:cover;">
		<?php  ?>

		<?php
		$header_above_text = get_theme_mod( 'restaurant_pt_header_above_title', '' );
		$header_title      = get_theme_mod( 'restaurant_pt_header_title', '' );
		$header_below_text = get_theme_mod( 'restaurant_pt_header_subtitle', '' );
		$header_note       = get_theme_mod( 'restaurant_pt_header_subtitle_note', '' );
		$header_btn_text   = get_theme_mod( 'restaurant_pt_header_btn_text', '' );
		$header_btn_url    = get_theme_mod( 'restaurant_pt_header_btn_url', '' );

		?>
		<div class="rpt-header-content">
			<?php if ( $header_above_text != '' ): ?>

				<div class="rpt-header-above-text">
					<?php echo esc_attr( $header_above_text ); ?>
				</div>

			<?php endif; ?>

			<?php if ( $header_title != "" ): ?>
				<div class="rpt-header-title">
					<?php echo esc_attr( $header_title ); ?>
				</div>
			<?php endif; ?>

			<?php if ( $header_below_text != '' ): ?>
				<div class="rpt-below-header">
					<?php echo esc_attr( $header_below_text ); ?>
				</div>
			<?php endif; ?>

			<?php if ( $header_note != '' ): ?>
				<div class="rpt-note">
					<?php echo esc_attr( $header_note ); ?>
				</div>
			<?php endif; ?>


			<?php if ( $header_btn_text != '' && $header_btn_url != '' ): ?>

				<a class="rpt-btn" href="<?php echo esc_url( $header_btn_url ); ?>">
					<?php echo esc_attr( $header_btn_text ); ?>
				</a>

			<?php endif; ?>


		</div>

	</section>

<?php endif; ?>
