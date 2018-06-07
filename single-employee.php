<?php get_header(); ?>

	<div class="content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<section class="content-blocks content-blocks-employee">
				<article class="content-blocks-container">
					<div class="block text-block">
						<div class="row">
							<div class="large-12 medium-12 small-12 columns">
								<div class="employee-title-container">
									<h1><?php the_title(); ?></h1>
									<h5><?php the_field('employee_position'); ?></h5>
								</div>
								<?php $image = get_field('employee_photo'); ?>
								<?php if( !empty($image) ): ?>
									<img class="employee-photo" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								<?php endif; ?>
							</div>
						</div>
					</div>
				</article>
			</section>
			<?php get_template_part( 'parts/loop', 'content-blocks' ); ?>

		<?php endwhile; endif; ?>

	</div> <!-- end #content -->

<?php get_footer(); ?>
