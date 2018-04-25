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
                                    <span class="city"><?php the_sub_field('city', 'option'); ?></span>
                                    <span class="phone"><?php the_sub_field('phone_number', 'option'); ?></span>
                                    <span class="email"><?php the_sub_field('email_address', 'option'); ?></span>
                                    <p class="address">
                                        <?php the_sub_field('address', 'option'); ?>
                                    </p>
                                </div>
                    		<?php endwhile; ?>
                    	</div>
                    <?php endif; ?>
                </section>

				<footer class="footer" role="contentinfo">

					<div class="row">

						<div class="small-12 medium-12 large-12 columns">
							<nav role="navigation">
	    						<?php joints_footer_links(); ?>
	    					</nav>
	    				</div>

						<div class="small-12 medium-12 large-12 columns">
							<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
						</div>

					</div> <!-- end #inner-footer -->

				</footer> <!-- end .footer -->

			</div>  <!-- end .off-canvas-content -->

		</div> <!-- end .off-canvas-wrapper -->

		<?php wp_footer(); ?>

	</body>

</html> <!-- end page -->
