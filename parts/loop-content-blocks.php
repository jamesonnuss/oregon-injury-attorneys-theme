<?php
/**
 * Template part for advanced custom fields content blocks
 */
?>
<section class="content-blocks">
	<?php if( have_rows('content_blocks') ): ?>
		<article class="content-blocks-container">
		    <?php while ( have_rows('content_blocks') ) : the_row(); ?>
		        <?php if( get_row_layout() == 'text_block' ): ?>
					<div class="block text-block row">
						<div class="large-12 medium-12 small-12 columns">
							<?php if( get_sub_field('text_block_title') ): ?>
								<h1><?php the_sub_field('text_block_title'); ?></h1>
							<?php endif; ?>
							<div>
								<?php the_sub_field('text_block_content'); ?>
							</div>
						</div>
					</div>
		        <?php elseif( get_row_layout() == 'video_block' ): ?>
					<div class="block video-block row">
						<div class="large-12 medium-12 small-12 columns">
							<?php if( get_sub_field('video_block_title') ): ?>
								<h1><?php the_sub_field('video_block_title'); ?></h1>
							<?php endif; ?>
							<video width="100%" controls poster="<?php the_sub_field('video_poster'); ?>">
							  <source src="<?php the_sub_field('video_block_url'); ?>" type="video/mp4">
							  Your browser does not support HTML5 video.
							</video>
						</div>
					</div>
				<?php elseif( get_row_layout() == 'box_block' ): ?>
					<div class="block box-block row">
						<div class="large-12 medium-12 small-12 columns">
							<?php if( get_sub_field('box_block_section_title') ): ?>
								<h1><?php the_sub_field('box_block_section_title'); ?></h1>
							<?php endif; ?>
							<?php if( have_rows('box') ): ?>
								<div class="row small-up-1 medium-up-2 large-up-3">
								    <?php while ( have_rows('box') ) : the_row(); ?>
										<div class="column column-block">
								        	<h3><?php the_sub_field('box_block_title'); ?></h3>
											<p>
												<?php the_sub_field('box_block_content'); ?>
											</p>
											<a href="<?php the_sub_field('box_block_link'); ?>"><?php the_sub_field('box_block_link_text'); ?></a>
										</div>
								    <?php endwhile; ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				<?php elseif( get_row_layout() == 'testimonials_block' ): ?>
					<div class="block testimonials-block row">
						<div class="large-12 medium-12 small-12 columns">
							<?php if( get_sub_field('testimonials_block_title') ): ?>
								<h1><?php the_sub_field('testimonials_block_title'); ?></h1>
							<?php endif; ?>
							<?php if( have_rows('testimonial') ): ?>
								<div class="row testimonial-slide-container">
								    <?php while ( have_rows('testimonial') ) : the_row(); ?>
										<div class="testimonial-slide">
								        	<p class="quote"><?php the_sub_field('testimonial_quote'); ?></p>
											<span class="author"><?php the_sub_field('testimonial_author'); ?></span>
											<?php if( get_sub_field('testimonial_relationship') ): ?>
												<span class="author-title"><?php the_sub_field('testimonial_relationship'); ?></span>
											<?php endif; ?>
										</div>
								    <?php endwhile; ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				<?php elseif( get_row_layout() == 'call_to_action_block' ): ?>
					<div class="block call-to-action-block" style="background-image:url('<?php the_sub_field('call_to_action_block_bg_image'); ?>');">
						<div class="row">
							<div class="large-12 medium-12 small-12 columns">
								<?php if( get_sub_field('call_to_action_block_title') ): ?>
									<h1><?php the_sub_field('call_to_action_block_title'); ?></h1>
								<?php endif; ?>
								<p>
									<?php the_sub_field('call_to_action_block_content'); ?>
								</p>
								<div class="flexible-button-container">
								 	<?php if( have_rows('call_to_action_block_button') ): ?>
								 		<div class="flexible-button-inner-container">
								 			<?php while ( have_rows('call_to_action_block_button') ) : the_row(); ?>
												<?php if( get_row_layout() == 'call_to_action_block_page_link_button' ): ?>
													<div class="btn-center">
														<a href="<?php the_sub_field('button_link'); ?>" class="button"><?php the_sub_field('button_text'); ?></a>
													</div>
												<?php elseif( get_row_layout() == 'call_to_action_block_url_link_button' ): ?>
													<div class="btn-center">
														<a href="<?php the_sub_field('button_link'); ?>" class="button" target="_blank"><?php the_sub_field('button_text'); ?></a>
													</div>
												<?php elseif( get_row_layout() == 'call_to_action_block_pdf_button' ): ?>
													<div class="btn-center">
														<a href="<?php the_sub_field('button_file'); ?>" class="button" target="_blank"><?php the_sub_field('button_text'); ?></a>
													</div>
												<?php endif; ?>
								 			<?php endwhile; ?>
								 		</div>
								 	<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				<?php elseif( get_row_layout() == 'tab_block' ): ?>
					<div class="block tab-block">
						<div class="row">
							<div class="large-12 medium-12 small-12 columns">
								<?php if( get_sub_field('tab_block_section_title') ): ?>
									<h1><?php the_sub_field('tab_block_section_title'); ?></h1>
								<?php endif; ?>
								<?php if( have_rows('tab_block_tab') ): $i = 0; ?>
									<script type="text/javascript">
										jQuery(document).ready(function($) {
											var randomNum = Math.floor(Math.random() * 1000);
											var randomRange = Math.random().toString(36).substring(7);
										    jQuery('.tabs').attr("id","tab_" + randomNum + randomRange);
										    jQuery('.tabs-content').attr("data-tabs-content","tab_" + randomNum + randomRange);
										});
									</script>
									<ul class="tabs" data-tabs id="">
									    <?php while ( have_rows('tab_block_tab') ) : the_row(); ?>
											<li class="tabs-title <?php if (!$i) { ?>is-active<?php } ?>">
												<a href="#tabs-panel-<?php echo $i; ?>"><?php the_sub_field('tab_block_title'); ?></a>
											</li>
									    <?php $i++; endwhile;?>
									</ul>
								<?php endif; ?>
								<?php if( have_rows('tab_block_tab') ):  $i = 0; ?>
									<div class="tabs-content" data-tabs-content="">
										<?php while ( have_rows('tab_block_tab') ) : the_row(); ?>
											<div class="tabs-panel <?php if (!$i) { ?>is-active<?php } ?>" id="tabs-panel-<?php echo $i; ?>">
												<div>
													<?php the_sub_field('tab_block_content'); ?>
												</div>
											</div>
										<?php $i++; endwhile;?>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				<?php elseif( get_row_layout() == 'employee_block' ): ?>
					<div class="block team-block">
						<div class="row">
							<div class="large-12 medium-12 small-12 columns">
								<?php if( get_sub_field('team_block_title') ): ?>
									<h1><?php the_sub_field('team_block_title'); ?></h1>
								<?php endif; ?>
								<?php $members = get_sub_field('team_block_members'); if( $members ): ?>
								    <ul>
									    <?php foreach( $members as $member): // variable must be called $member (IMPORTANT) ?>
									        <?php setup_postdata($member); ?>
									        <li>
									            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									        </li>
									    <?php endforeach; ?>
								    </ul>
								    <?php wp_reset_postdata(); // IMPORTANT - reset the $member object so the rest of the page works correctly ?>
								<?php endif; ?>
							</div>
						</div>
					</div>
				<?php elseif( get_row_layout() == 'faq_block' ): ?>
					<div class="block faq-block">
						<div class="row">
							<div class="large-12 medium-12 small-12 columns">
								<?php if( get_sub_field('faq_block_title') ): ?>
									<h1><?php the_sub_field('faq_block_title'); ?></h1>
								<?php endif; ?>
								<?php if( have_rows('faq_block_repeater') ):  $i = 0; ?>

										<?php while ( have_rows('faq_block_repeater') ) : the_row(); ?>
											<li class="accordion-item" data-accordion-item="accordion-item_<?php echo $i; ?>">
												<a href="#" class="accordion-title"><?php the_sub_field('faq_block_question'); ?></a>
												<div class="accordion-content" data-tab-content>
											    	<?php the_sub_field('faq_block_answer'); ?>
											    </div>

											</li>
										<?php $i++; endwhile;?>
									
									<script type="text/javascript">
									jQuery(document).ready(function($) {
										// Accordion Splitting
										var $li = $('li.accordion-item');
										if ($li.length % 2 == 0) {
											half = Math.floor($li.length/2);
											$li.filter(function(i){ return i < half; }).wrapAll('<ul class="left-accordion" data-accordion="one" data-multi-expand="true" data-allow-all-closed="true">');
											$li.filter(function(i){ return i >= half; }).wrapAll('<ul class="right-accordion" data-accordion="two" data-multi-expand="true" data-allow-all-closed="true">');
										} else {
											half = Math.floor($li.length/2 + 1);
											$li.filter(function(i){ return i < half; }).wrapAll('<ul class="left-accordion" data-accordion="one" data-multi-expand="true" data-allow-all-closed="true">');
											$li.filter(function(i){ return i >= half; }).wrapAll('<ul class="right-accordion" data-accordion="two" data-multi-expand="true" data-allow-all-closed="true">');
										}
										$('.left-accordion').foundation();
										$('.right-accordion').foundation();
									});
									</script>
								<?php endif; ?>
							</div>
						</div>
					</div>

				<?php elseif( get_row_layout() == 'spacer_block' ): ?>
					<div class="block spacer-block"></div>
				<?php endif; ?>
		    <?php endwhile; ?>
		</article>
	<?php else : ?>
		<article class="content-blocks-container">
			<h1>No Blocks Found</h1>
		</article>
	<?php endif; ?>
</section>
