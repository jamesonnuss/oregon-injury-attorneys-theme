<?php
/**
 *  Navigation Main Menu
 */
?>
<div class="row main-menu">
	<div class="large-3 medium-12 small-12 columns">
		<div class="top-bar-left">
			<ul class="menu">
				<li><a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/site-logo.png" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>"/></a></li>
			</ul>
		</div>
	</div>
	<div class="large-9 medium-12 small-12 columns navigation-container">
		<div class="top-bar-right">
			<div class="top-menu" itemscope itemtype="http://schema.org/LocalBusiness">
				<h1 itemprop="name"><?php bloginfo('name'); ?></h1>
				<span><?php the_field('phone_number_label','option'); ?></span>
				<span itemprop="telephone">
					<a href="tel:+1-<?php the_field('phone_number','option'); ?>" title=""><?php the_field('phone_number','option'); ?></a>
				</span>
			</div>
			<?php joints_top_nav(); ?>
		</div>
		<div class="mobile-menu-container"><!-- Mobile Menu Populated Here --></div>
	</div>
</div>
