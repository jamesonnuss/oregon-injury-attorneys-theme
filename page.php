<?php get_header(); ?>

	<div class="content">

		<?php get_template_part( 'parts/content', 'header' ); ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<section class="content-blocks">
				<article class="content-blocks-container" id="index">
					<div class="block text-block">
						<div class="row">
							<div class="large-12 medium-12 small-12 columns">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</article>
			</section>

		<?php endwhile; endif; ?>

	</div> <!-- end #content -->

<?php get_footer(); ?>
