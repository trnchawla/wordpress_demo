<?php
/**
 * Plugin header.
 *
 * @package InstantImages
 */

?>
<header class="instant-images-header-wrap">
	<h1>
		<?php echo esc_attr( INSTANT_IMAGES_TITLE ); ?> <em><?php echo esc_attr( INSTANT_IMAGES_VERSION ); ?></em>
		<?php echo wp_kses_post( InstantImages::instant_images_get_tagline() ); ?>
	</h1>
	<?php
	if ( $show_settings && InstantImages::instant_img_has_settings_access() ) {
	?>
	<div>
		<a href="<?php echo esc_url( INSTANT_IMAGES_ADDONS_URL ); ?>" class="button button-primary button-large" target="_blank">
			<?php esc_attr_e( 'Browse Add-ons', 'instant-images' ); ?>
		</a>
		<a href="<?php echo esc_url( INSTANT_IMAGES_WPADMIN_SETTINGS_URL ); ?>" class="button button-secondary button-large">
			<i class="fa fa-cog" aria-hidden="true"></i> <?php esc_attr_e( 'Settings', 'instant-images' ); ?>
		</a>
	</div>
	<?php } ?>
</header>
