<?php
/*
Template Name: Site Map
*/

get_header(); ?>

	<div class="content">

		<?php get_template_part( 'parts/content', 'header' ); ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        	<div class="row site-map">
				<div class="large-6 medium-6 small-12 columns">
					<h3>Main Menu</h3>
					<?php wp_nav_menu(array('menu'=>'Main Menu')); ?>
				</div>
				<div class="large-6 medium-6 small-12 columns">
					<h3>Footer Menu</h3>
					<?php wp_nav_menu(array('menu'=>'Footer Menu')); ?>
				</div>
			</div>

		<?php endwhile; endif; ?>

	</div> <!-- end #content -->

<?php get_footer(); ?>
