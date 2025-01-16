<?php
/**
 * The template for displaying all pages, single posts and attachments.
 *
 * This is a new template file that WordPress introduced in
 * version 4.3.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package     Bloghash
 * @author      Peregrine Themes
 * @since       1.0.0
 */

?>

<?php
get_header();
$class_no_media = ! has_post_thumbnail() ? 'no-entry-media' : '';
do_action( 'bloghash_before_singular_container' );
?>

<?php do_action( 'bloghash_before_container' ); ?>

<div class="bloghash-container">

	<?php do_action( 'bloghash_before_content_area', 'before_post_archive' ); ?>

	<div id="primary" class="content-area">

		<?php do_action( 'bloghash_before_content' ); ?>

		<main id="content" class="site-content <?php echo esc_attr( $class_no_media ); ?>" role="main"<?php bloghash_schema_markup( 'main' ); ?>>

			<?php
			do_action( 'bloghash_before_singular' );

			do_action( 'bloghash_content_singular' );

			do_action( 'bloghash_after_singular' );
			?>

		</main><!-- #content .site-content -->

		<?php do_action( 'bloghash_after_content' ); ?>

	</div><!-- #primary .content-area -->

	<?php do_action( 'bloghash_sidebar' ); ?>

	<?php do_action( 'bloghash_after_content_area' ); ?>

</div><!-- END .bloghash-container -->

<?php do_action( 'bloghash_after_container' ); ?>

<?php
do_action( 'bloghash_after_singular_container' );
get_footer();
