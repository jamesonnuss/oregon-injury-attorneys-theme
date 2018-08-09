<?php get_header(); ?>

	<div class="content blog-content">
		<section class="content-blocks content-blocks-employee">
			<div class="content-blocks-container">
				<div class="block text-block">
					<div class="row">
						<div class="large-12 medium-12 small-12 columns">
							<div class="employee-title-container">
								<h1 class="page-title"><?php the_archive_title();?></h1>
								<?php the_archive_description('<div class="taxonomy-description">', '</div>');?>
							</div>
						</div>
					</div>
				</div>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive' ); ?>

				<?php endwhile; ?>

					<?php joints_page_navi(); ?>

				<?php else : ?>

					<?php get_template_part( 'parts/content', 'missing' ); ?>

				<?php endif; ?>
			</div>
		</section>
	</div> <!-- end #content -->

<?php get_footer(); ?>
