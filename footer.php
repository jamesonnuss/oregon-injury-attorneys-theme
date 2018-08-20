<?php
/**
 * The template for displaying the footer.
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
 ?>

        <section class="pre-footer">
            <?php if( have_rows('global_locations','option') ): ?>
            	<div class="row small-up-1 medium-up-3 large-up-3">
            		<?php while ( have_rows('global_locations','option') ) : the_row(); ?>
            			<div class="column column-block">
                            <div class="column-block-inner" itemscope itemtype="http://schema.org/LocalBusiness">
                                <span itemprop="name" class="hidden"><?php bloginfo('name'); ?></span>
                                <span itemprop="city" class="city"><?php the_sub_field('city', 'option'); ?></span>
                                <span itemprop="title" class="title"><?php the_sub_field('location_title','option'); ?></span>
                                <span itemprop="telephone" class="phone"><a href="tel:+1-<?php the_sub_field('phone_number','option'); ?>" title="<?php the_field('phone_number_label','option'); ?> - <?php the_sub_field('phone_number','option'); ?>"><?php the_sub_field('phone_number','option'); ?></a><span>
                                <?php if( get_sub_field('email_address', 'option') ): ?>
	                                   <span itemprop="email" class="email"><?php the_sub_field('email_address', 'option'); ?></span>
                                <?php endif; ?>
                                <p itemprop="streetAddress" class="address">
                                    <?php the_sub_field('address', 'option'); ?>
                                </p>
                            </div>
                        </div>
            		<?php endwhile; ?>
            	</div>
            <?php endif; ?>
        </section>

		<footer class="footer" role="contentinfo">
			<div class="row">
				<div class="small-12 medium-12 large-12 columns footer-navigation">
                    <div class="social-media">
                        <ul>
                            <?php if( get_field('facebook_url', 'option') ): ?>
                                <li>
                                    <a href="<?php the_field('facebook_url', 'option'); ?>" class="icon-facebook"></a>
                                </li>
                            <?php endif; ?>
                            <?php if( get_field('instagram_url', 'option') ): ?>
                                <li>
                                    <a href="<?php the_field('instagram_url', 'option'); ?>" class="icon-instagram"></a>
                                </li>
                            <?php endif; ?>
                            <?php if( get_field('linkedin_url', 'option') ): ?>
                                <li>
                                    <a href="<?php the_field('linkedin_url', 'option'); ?>" class="icon-linkedin"></a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
					<nav role="navigation">
						<?php joints_footer_links(); ?>
					</nav>
				</div>
				<div class="small-12 medium-12 large-12 columns">
					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <span class="copyright-reserved">All Rights Reserved.</span></p>
				</div>
			</div> <!-- end #inner-footer -->
		</footer> <!-- end .footer -->

    <?php wp_footer(); ?>

	</body>

</html> <!-- end page -->
