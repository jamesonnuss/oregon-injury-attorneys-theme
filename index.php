<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */

get_header(); ?>

	<?php get_template_part( 'parts/content', 'header' ); ?>

	<div class="content blog-content">
		<section class="content-blocks">
			<div class="content-blocks-container">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php get_template_part( 'parts/loop', 'archive' ); ?>
				<?php endwhile; ?>
					<?php joints_page_navi(); ?>
				<?php else : ?>
					<?php get_template_part( 'parts/content', 'missing' ); ?>
				<?php endif; ?>
			</div>
		</section>
	</div>

<?php get_footer(); ?>
