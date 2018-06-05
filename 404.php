<?php
/**
 * The template for displaying 404 (page not found) pages.
 *
 * For more info: https://codex.wordpress.org/Creating_an_Error_404_Page
 */

get_header(); ?>
	<div class="content">
		<section class="content-header">
			<div class="content-header-image" style="background-image:url('https://www.placecage.com/1400/700');">
				<div class="row content-header-image-row">
					<div class="large-12 medium-12 small-12 columns">
						<h1><?php _e( '404 - Page Not Found', 'jointswp' ); ?></h1>
						<p>
							<p><?php _e( 'The page you were looking for was not found.', 'jointswp' ); ?></p>
						</p>
						<div class="btn-center">
							<a href="<?php echo get_home_url(); ?>" class="button">Home</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div> <!-- end #content -->
<?php get_footer(); ?>
