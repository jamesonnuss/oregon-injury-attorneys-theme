<?php get_header(); ?>

	<div class="content">

		<?php get_template_part( 'parts/content', 'header' ); ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<section class="content-blocks">
				<article class="content-blocks-container" id="index">
					<div class="block text-block">
						<div class="row">
							<div class="large-12 medium-12 small-12 columns">
								<p class="byline">
									<?php the_category(', ') ?>
								</p>
								<?php the_content(); ?>
								<?php if(has_tag()): ?>
									<footer class="article-footer">
								    	<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
									</footer> <!-- end article footer -->
								<?php endif; ?>
							</div>
						</div>
					</div>
				</article>
			</section>

		<?php endwhile; endif; ?>

	</div> <!-- end #content -->

<?php get_footer(); ?>
