<?php
/*
Template Name: Contact Us
*/

get_header(); ?>

	<div class="content">

		<?php get_template_part( 'parts/content', 'header' ); ?>

		<div class="inner-content row">

		    <main class="main small-12 medium-12 large-12 columns" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<div class="intro-content-container">
						<?php the_field('contact_us_main_content'); ?>
					</div>
					
					<div class="form-container">
						<?php echo do_shortcode("[gravityform id=1 title=false description=false ajax=true tabindex=49]"); ?>
						<div class="terms-conditions-container">
							<?php the_field('contact_us_terms_and_conditions'); ?>
						</div>
					</div>

				<?php endwhile; endif; ?>

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
