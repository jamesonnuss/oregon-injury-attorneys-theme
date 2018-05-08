<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/responsive-navigation/
 */
?>

<div class="row" id="main-menu">
	<div class="large-3 medium-3 small-12 columns">
		<div class="top-bar-left">
			<ul class="menu">
				<li><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
			</ul>
		</div>
	</div>
	<div class="large-9 medium-9 small-12 columns">
		<div class="top-bar-right">
			<?php joints_top_nav(); ?>
		</div>
		<div class="mobile-menu-container"><!-- Mobile Menu Populated Here --></div>
	</div>
</div>
