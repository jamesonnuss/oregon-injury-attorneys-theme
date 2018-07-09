<?php
/**
 * Template part for advanced custom fields content blocks
 */
?>
<section class="content-blocks">
	<?php if( have_rows('content_blocks') ): ?>
		<article class="content-blocks-container" id="index">
		    <?php while ( have_rows('content_blocks') ) : the_row(); ?>
		        <?php if( get_row_layout() == 'text_block' ): ?>
					<?php if( get_sub_field('text_box_width') == 'full-width' ): ?>
						<?php $tWidth = 'full-width'; ?>
					<?php else: ?>
						<?php $tWidth = 'half-width'; ?>
					<?php endif; ?>
					<div class="block text-block row <?php echo $tWidth; ?>">
						<div class="large-12 medium-12 small-12 columns">
							<?php if( get_sub_field('text_block_title') ): ?>
								<h1><?php the_sub_field('text_block_title'); ?></h1>
							<?php endif; ?>
							<div>
								<?php the_sub_field('text_block_content'); ?>
							</div>
						</div>
					</div>
				<?php elseif( get_row_layout() == 'list_block' ): ?>
					<div class="block list-block">
						<div class="row">
							<div class="large-12 medium-12 small-12 columns">
								<?php if( get_sub_field('list_block_title') ): ?>
									<h1><?php the_sub_field('list_block_title'); ?></h1>
								<?php endif; ?>
								<?php if( have_rows('list') ): ?>
									<div class="row small-up-1 medium-up-2 large-up-2">
										<?php while ( have_rows('list') ) : the_row(); ?>
											<div class="column column-block">
												<?php the_sub_field('list_item'); ?>
											</div>
										<?php endwhile; ?>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				<?php elseif( get_row_layout() == 'contact_block' ): ?>
					<div class="block contact-block">
						<div class="row">
							<div class="large-12 medium-12 small-12 columns">
								<?php if( get_sub_field('contact_block_title') ): ?>
									<h1><?php the_sub_field('contact_block_title'); ?></h1>
								<?php endif; ?>
								<div class="contact-block-content">
									<?php the_sub_field('contact_block_content'); ?>
								</div>
								<div class="contact-block-contact-form">
									<?php echo do_shortcode("[gravityform id=1 title=false description=false ajax=true tabindex=49]"); ?>
								</div>
							</div>
						</div>
					</div>
		        <?php elseif( get_row_layout() == 'video_block' ): ?>
					<div class="block video-block row">
						<div class="large-12 medium-12 small-12 columns">
							<?php if( get_sub_field('video_block_width') == 'full-width' ): ?>
								<?php $vWidth = 'full-width'; ?>
							<?php else: ?>
								<?php $vWidth = 'half-width'; ?>
							<?php endif; ?>
							<div class="<?php echo $vWidth; ?>">
								<?php if( get_sub_field('video_block_title') ): ?>
									<h1><?php the_sub_field('video_block_title'); ?></h1>
								<?php endif; ?>
								<?php if( get_sub_field('video_block_content') ): ?>
									<div>
										<?php the_sub_field('video_block_content'); ?>
									</div>
								<?php endif; ?>
							</div>
							<div class="video-js-container">
								<video class="video-js" controls preload="auto" width="100%" poster="<?php the_sub_field('video_poster'); ?>" data-setup="{}">
									<source src="<?php the_sub_field('video_block_url'); ?>" type="video/mp4">
									<p class="vjs-no-js">
										Your browser does not support HTML5 video.
									</p>
								</video>
							</div>
						</div>
					</div>
				<?php elseif( get_row_layout() == 'box_block' ): ?>
					<div class="block box-block" <?php if( get_sub_field('box_block_margin') == 'Small' ): ?>style="margin-bottom:0;"<?php endif; ?>>
						<div class="row">
							<div class="large-12 medium-12 small-12 columns">
								<?php if( get_sub_field('box_block_section_title') ): ?>
									<h1><?php the_sub_field('box_block_section_title'); ?></h1>
								<?php endif; ?>
								<?php if( have_rows('box') ): ?>
									<div class="row small-up-1 medium-up-2 large-up-3" data-equalizer>
									    <?php while ( have_rows('box') ) : the_row(); ?>
											<div class="column column-block">
												<div class="column-block-inner-container" data-equalizer-watch>
													<div>
														<h3><a href="<?php the_sub_field('box_block_link'); ?>"><?php the_sub_field('box_block_title'); ?></a></h3>
														<p>
															<?php the_sub_field('box_block_content'); ?>
														</p>
														<a href="<?php the_sub_field('box_block_link'); ?>" class="box-block-link"><?php the_sub_field('box_block_link_text'); ?></a>
													</div>
												</div>
											</div>
									    <?php endwhile; ?>
									</div>
								<?php endif; ?>
							</div>
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
					<script type="text/javascript">
						jQuery(document).ready(function($) {
							var randomNum = Math.floor(Math.random() * 1000);
							var randomRange = Math.random().toString(36).substring(7);
						    jQuery('.testimonial-slide-container').attr("id","testimonial_" + randomNum + randomRange);
							jQuery("#testimonial_" + randomNum + randomRange).slick({
								dots: true,
								infinite: true,
								arrows:true,
								speed: 300,
								slidesToShow: 1,
								adaptiveHeight: true
							});
						});
					</script>
				<?php elseif( get_row_layout() == 'call_to_action_block' ): ?>
					<div class="block call-to-action-block-container" <?php if( get_sub_field('call_to_action_block_margin') == 'Small' ): ?>style="margin-bottom:0;"<?php endif; ?>>
						<?php if( get_sub_field('call_to_action_block_bg_image_overlay_opacity')): ?>
							<div class="screen" data-opacity="<?php the_sub_field('call_to_action_block_bg_image_overlay_opacity'); ?>"></div>
						<?php endif; ?>
						<div class="call-to-action-block" style="background-image:url('<?php the_sub_field('call_to_action_block_bg_image'); ?>');">
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
					</div>
				<?php elseif( get_row_layout() == 'tab_block' ): ?>
					<div class="block tab-block <?php if( get_sub_field('tab_block_background_color') == 'Grey' ): ?>grey-bg<?php endif; ?>" <?php if( get_sub_field('tab_block_margin') == 'Small' ): ?>style="margin-bottom:0;"<?php endif; ?>>
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
												<?php if( have_rows('tab_block_content_repeater') ): ?>
													<div class="row small-up-1 medium-up-2 large-up-2">
														<?php while ( have_rows('tab_block_content_repeater') ) : the_row(); ?>
															<div class="column column-block">
																<?php the_sub_field('tab_block_title'); ?>
																<?php the_sub_field('tab_block_content'); ?>
															</div>
														<?php endwhile; ?>
													</div>
												<?php endif; ?>
											</div>
										<?php $i++; endwhile;?>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				<?php elseif( get_row_layout() == 'employee_block' ): ?>
					<div class="block team-block <?php if( get_sub_field('team_block_background_color') == 'Grey' ): ?>grey-bg<?php endif; ?>" <?php if( get_sub_field('team_block_margin') == 'Small' ): ?>style="margin-bottom:0;"<?php endif; ?>>
						<div class="row">
							<div class="large-12 medium-12 small-12 columns">
								<?php if( get_sub_field('team_block_title') ): ?>
									<h1><?php the_sub_field('team_block_title'); ?></h1>
								<?php endif; ?>
								<?php $count = count( get_sub_field('team_block_members') ); ?>
								<?php $members = get_sub_field('team_block_members'); if( $members ): ?>
									<?php if ($count == 4){ ?>
									<div class="row small-up-1 medium-up-2 large-up-4" data-equalizer>
								  	<?php } else { ?>
									<div class="row small-up-1 medium-up-2 large-up-3" data-equalizer>
									<?php } ?>
									    <?php foreach( $members as $member): // variable must be called $member (IMPORTANT) ?>
									        <?php setup_postdata($member); ?>
									        <div class="column column-block">
												<div class="column-block-inner-container" data-equalizer-watch>
													<div>
														<?php $memberPhoto = get_field('employee_photo', $member->ID); ?>
														<a href="<?php echo get_permalink( $member->ID ); ?>" class="team-member-profile-img-link"><img src="<?php echo $memberPhoto['url']; ?>" alt="<?php echo $memberPhoto['alt']; ?>" /></a>
											            <h3><a href="<?php echo get_permalink( $member->ID ); ?>" class="team-member-name"><?php echo get_the_title( $member->ID ); ?></a></h3>
														<span class="team-member-position"><?php the_field('employee_position', $member->ID); ?></span>
														<p class="team-member-introduction">
															<?php the_field('employee_introduction', $member->ID); ?>
														</p>
														<a href="<?php echo get_permalink( $member->ID ); ?>" class="team-member-profile-link">View Profile</a>
													</div>
												</div>
									        </div>
									    <?php endforeach; ?>
								    </div>
								    <?php wp_reset_postdata(); // IMPORTANT - reset the $member object so the rest of the page works correctly ?>
								<?php endif; ?>
							</div>
						</div>
					</div>
				<?php elseif( get_row_layout() == 'faq_block' ): ?>
					<div class="block faq-block <?php if( get_sub_field('faq_block_background_color') == 'Grey' ): ?>grey-bg<?php endif; ?>" <?php if( get_sub_field('faq_block_margin') == 'Small' ): ?>style="margin-bottom:0;"<?php endif; ?>>
						<div class="row">
							<div class="large-12 medium-12 small-12 columns">
								<?php if( get_sub_field('faq_block_title') ): ?>
									<h1><?php the_sub_field('faq_block_title'); ?></h1>
								<?php endif; ?>
								<?php if( have_rows('faq_block_repeater') ):  $i = 0; ?>
									<div class="row">
										<?php while ( have_rows('faq_block_repeater') ) : the_row(); ?>
											<li class="accordion-item" data-accordion-item="accordion-item_<?php echo $i; ?>">
												<a href="#" class="accordion-title"><?php the_sub_field('faq_block_question'); ?></a>
												<div class="accordion-content" data-tab-content>
											    	<?php the_sub_field('faq_block_answer'); ?>
											    </div>
											</li>
										<?php $i++; endwhile;?>
									</div>
									<script type="text/javascript">
									jQuery(document).ready(function($) {
										// Accordion Splitting
										var $li = $('li.accordion-item');
										if ($li.length % 2 == 0) {
											half = Math.floor($li.length/2);
											$li.filter(function(i){ return i < half; }).wrapAll('<ul class="left-accordion large-6 medium-6 small-12 columns" data-accordion="one" data-multi-expand="true" data-allow-all-closed="true">');
											$li.filter(function(i){ return i >= half; }).wrapAll('<ul class="right-accordion large-6 medium-6 small-12 columns" data-accordion="two" data-multi-expand="true" data-allow-all-closed="true">');
										} else {
											half = Math.floor($li.length/2 + 1);
											$li.filter(function(i){ return i < half; }).wrapAll('<ul class="left-accordion large-6 medium-6 small-12 columns" data-accordion="one" data-multi-expand="true" data-allow-all-closed="true">');
											$li.filter(function(i){ return i >= half; }).wrapAll('<ul class="right-accordion large-6 medium-6 small-12 columns" data-accordion="two" data-multi-expand="true" data-allow-all-closed="true">');
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
				<?php elseif( get_row_layout() == 'slider_block' ): ?>
					<div class="block slider-block row">
						<div class="large-12 medium-12 small-12 columns">
							<?php if( get_sub_field('slider_block_title') ): ?>
								<h1><?php the_sub_field('slider_block_title'); ?></h1>
							<?php endif; ?>
							<?php if( have_rows('slider') ): ?>
								<div class="row slider-slide-container">
								    <?php while ( have_rows('slider') ) : the_row(); ?>
										<div class="slider-slide">
											<?php $image = get_sub_field('slide');
											if( !empty($image) ): ?>
												<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
											<?php endif; ?>
										</div>
								    <?php endwhile; ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
					<script type="text/javascript">
						jQuery(document).ready(function($) {
							var randomNum = Math.floor(Math.random() * 1000);
							var randomRange = Math.random().toString(36).substring(7);
						    jQuery('.slider-slide-container').attr("id","slide_" + randomNum + randomRange);
							jQuery("#slide_" + randomNum + randomRange).slick({
								dots: true,
								infinite: true,
								arrows:true,
								speed: 300,
								slidesToShow: 1,
								adaptiveHeight: true,
								useTransform: false
							});
						});
					</script>
				<?php endif; ?>
		    <?php endwhile; ?>
		</article>
	<?php else : ?>
		<div class="block spacer-block"></div>
	<?php endif; ?>
</section>
