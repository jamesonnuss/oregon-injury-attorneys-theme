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
					<div class="block text-block <?php if( get_sub_field('text_block_background_color') == 'Grey' ): ?>grey-bg<?php endif; ?>">
						<div class="row">
							<div class="large-12 medium-12 small-12 columns">
								<div class="<?php echo $tWidth; ?>">
									<?php if( get_sub_field('text_block_title') ): ?>
										<h2><?php the_sub_field('text_block_title'); ?></h2>
									<?php endif; ?>
									<div>
										<?php the_sub_field('text_block_content'); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php elseif( get_row_layout() == 'list_block' ): ?>
					<div class="block list-block <?php if( get_sub_field('list_block_background_color') == 'Grey' ): ?>grey-bg<?php endif; ?>">
						<div class="row">
							<div class="large-12 medium-12 small-12 columns">
								<?php if( get_sub_field('list_block_title') ): ?>
									<h2><?php the_sub_field('list_block_title'); ?></h2>
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
				<?php elseif( get_row_layout() == 'awards_block' ): ?>
					<div class="block awards-block <?php if( get_sub_field('awards_block_background_color') == 'Grey' ): ?>grey-bg<?php endif; ?>">
						<div class="row">
							<div class="large-12 medium-12 small-12 columns">
								<?php if( get_sub_field('awards_block_title') ): ?>
									<h2><?php the_sub_field('awards_block_title'); ?></h2>
								<?php endif; ?>
								<?php if( get_sub_field('awards_block_content')): ?>
									<?php if( get_sub_field('awards_block_content_width') == 'full-width' ): ?>
										<?php $awardsContent = 'full-width'; ?>
									<?php else: ?>
										<?php $awardsContent = 'half-width'; ?>
									<?php endif; ?>
									<div class="awards-content <?php echo $awardsContent; ?>">
										<?php the_sub_field('awards_block_content'); ?>
									</div>
								<?php endif; ?>
								<?php if( get_sub_field('awards_block_content') && have_rows('awards')): ?>
									<script type="text/javascript">
										jQuery(document).ready(function($) {
											jQuery('.awards-content').addClass('multiple-award-types');
										});
									</script>
								<?php endif; ?>
								<?php if( have_rows('awards') ): ?>
									<div class="row small-up-2 medium-up-3 large-up-3">
										<?php while ( have_rows('awards') ) : the_row(); ?>
											<div class="column column-block">
												<?php
												$image = get_sub_field('award');
												if( !empty($image) ): ?>
													<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
												<?php endif; ?>
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
									<h2><?php the_sub_field('contact_block_title'); ?></h2>
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
							<?php if( get_sub_field('video_block_width') == 'full-width' && get_sub_field('video_block_title') ): ?>
								<?php $vWidth = 'full-width'; ?>
							<?php elseif(get_sub_field('video_block_title')): ?>
								<?php $vWidth = 'half-width'; ?>
							<?php endif; ?>
							<div class="<?php echo $vWidth; ?>">
								<?php if( get_sub_field('video_block_title') ): ?>
									<h2><?php the_sub_field('video_block_title'); ?></h2>
								<?php endif; ?>
								<?php if( get_sub_field('video_block_content') ): ?>
									<div>
										<?php the_sub_field('video_block_content'); ?>
									</div>
								<?php endif; ?>
							</div>
							<div class="video-js-container">
								<div class="video-js-inner-container">
									<video class="video-js" controls preload="auto" width="100%" poster="<?php the_sub_field('video_poster'); ?>" data-setup="{}">
										<source src="<?php the_sub_field('video_block_url'); ?>" type="video/mp4">
										<p class="vjs-no-js">
											Your browser does not support HTML5 video.
										</p>
									</video>
								</div>
							</div>
						</div>
					</div>
				<?php elseif( get_row_layout() == 'box_block' ): ?>
					<div class="block box-block <?php if( get_sub_field('box_block_background_color') == 'Grey' ): ?>grey-bg<?php endif; ?>">
						<div class="row">
							<div class="large-12 medium-12 small-12 columns">
								<?php if( get_sub_field('box_block_section_title') ): ?>
									<h2><?php the_sub_field('box_block_section_title'); ?></h2>
								<?php endif; ?>
								<?php if( have_rows('box') ): ?>
									<div class="row small-up-1 medium-up-2 large-up-3 column-block-container" data-equalizer>
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
								<h2><?php the_sub_field('testimonials_block_title'); ?></h2>
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
					<div class="block call-to-action-block-container">
						<?php if( get_sub_field('call_to_action_block_bg_image_overlay_opacity')): ?>
							<div class="screen<?php if( get_sub_field('call_to_action_block_bg_image_overlay_color') == 'Black' ): ?> black-overlay<?php endif; ?>" data-opacity="<?php the_sub_field('call_to_action_block_bg_image_overlay_opacity'); ?>"></div>
						<?php endif; ?>
						<div class="call-to-action-block" style="background-image:url('<?php the_sub_field('call_to_action_block_bg_image'); ?>');">
							<div class="row">
								<div class="large-12 medium-12 small-12 columns">
									<?php if( get_sub_field('call_to_action_block_title') ): ?>
										<h2><?php the_sub_field('call_to_action_block_title'); ?></h2>
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
					<div class="block tab-block <?php if( get_sub_field('tab_block_background_color') == 'Grey' ): ?>grey-bg<?php endif; ?>">
						<div class="row">
							<div class="large-12 medium-12 small-12 columns">
								<?php if( get_sub_field('tab_block_section_title') ): ?>
									<h2><?php the_sub_field('tab_block_section_title'); ?></h2>
								<?php endif; ?>
								<?php if( get_sub_field('tab_block_section_introduction')): ?>
									<?php if( get_sub_field('tab_block_intro_width') == 'full-width' ): ?>
										<?php $tabIntroWidth = 'full-width'; ?>
									<?php else: ?>
										<?php $tabIntroWidth = 'half-width'; ?>
									<?php endif; ?>
									<div class="section-introduction <?php echo $tabIntroWidth; ?>">
										<?php the_sub_field('tab_block_section_introduction'); ?>
									</div>
								<?php endif; ?>
								<?php if( get_sub_field('tab_block_width') == 'full-width' ): ?>
									<?php $tabWidth = 'full-width'; ?>
								<?php else: ?>
									<?php $tabWidth = 'half-width'; ?>
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
													<div class="row small-up-1 medium-up-2 large-up-2 <?php echo $tabWidth; ?>">
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
					<div class="block team-block <?php if( get_sub_field('team_block_background_color') == 'Grey' ): ?>grey-bg<?php elseif( get_sub_field('team_block_background_color') == 'White' ): ?>white-bg<?php endif; ?>">
						<div class="row">
							<div class="large-12 medium-12 small-12 columns">
								<?php if( get_sub_field('team_block_title') ): ?>
									<h2><?php the_sub_field('team_block_title'); ?></h2>
								<?php endif; ?>
								<?php $count = count( get_sub_field('team_block_members') ); ?>
								<?php $members = get_sub_field('team_block_members'); if( $members ): ?>
									<?php if ($count == 4){ ?>
									<div class="row small-up-1 medium-up-2 large-up-4" data-equalizer>
								  	<?php } else { ?>
									<div class="row small-up-1 medium-up-2 large-up-3 column-block-container" data-equalizer>
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
					<div class="block faq-block <?php if( get_sub_field('faq_block_background_color') == 'Grey' ): ?>grey-bg<?php endif; ?>">
						<div class="row">
							<div class="large-12 medium-12 small-12 columns">
								<?php if( get_sub_field('faq_block_title') ): ?>
									<h2><?php the_sub_field('faq_block_title'); ?></h2>
								<?php endif; ?>
								<?php if( have_rows('faq_block_repeater') ):  $i = 0; ?>
									<div class="row">
										<ul class="accordion large-12 medium-12 small-12 columns" data-accordion="one" data-multi-expand="true" data-allow-all-closed="true">
										<?php while ( have_rows('faq_block_repeater') ) : the_row(); ?>
											<li class="accordion-item" data-accordion-item="accordion-item_<?php echo $i; ?>">
												<a href="#" class="accordion-title"><?php the_sub_field('faq_block_question'); ?></a>
												<div class="accordion-content" data-tab-content>
											    	<?php the_sub_field('faq_block_answer'); ?>
											    </div>
											</li>
										<?php $i++; endwhile;?>
										</ul>
									</div>
									<script type="text/javascript">
									jQuery(document).ready(function($) {
										// Accordion Splitting
										// var $li = $('li.accordion-item');
										// if ($li.length % 2 == 0) {
										// 	half = Math.floor($li.length/2);
										// 	$li.filter(function(i){ return i < half; }).wrapAll('<ul class="left-accordion large-6 medium-6 small-12 columns" data-accordion="one" data-multi-expand="true" data-allow-all-closed="true">');
										// 	$li.filter(function(i){ return i >= half; }).wrapAll('<ul class="right-accordion large-6 medium-6 small-12 columns" data-accordion="two" data-multi-expand="true" data-allow-all-closed="true">');
										// } else {
										// 	half = Math.floor($li.length/2 + 1);
										// 	$li.filter(function(i){ return i < half; }).wrapAll('<ul class="left-accordion large-6 medium-6 small-12 columns" data-accordion="one" data-multi-expand="true" data-allow-all-closed="true">');
										// 	$li.filter(function(i){ return i >= half; }).wrapAll('<ul class="right-accordion large-6 medium-6 small-12 columns" data-accordion="two" data-multi-expand="true" data-allow-all-closed="true">');
										// }
										// $('.left-accordion').foundation();
										// $('.right-accordion').foundation();
									});
									</script>
								<?php endif; ?>
							</div>
						</div>
					</div>
				<?php elseif( get_row_layout() == 'spacer_block' ): ?>
					<div class="block spacer-block <?php if( get_sub_field('spacer_block_background_color') == 'Grey' ): ?>grey-bg<?php elseif( get_sub_field('spacer_block_background_color') == 'Blue'):?>blue-bg<?php endif; ?>"></div>
				<?php elseif( get_row_layout() == 'slider_block' ): ?>
					<div class="block slider-block row">
						<div class="large-12 medium-12 small-12 columns">
							<?php if( get_sub_field('slider_block_title') ): ?>
								<h2><?php the_sub_field('slider_block_title'); ?></h2>
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

				<?php elseif( get_row_layout() == 'map_block' ): ?>

					<style type="text/css">

						.acf-map {
							width: 100%;
							height: 400px;
						}

						/* fixes potential theme css conflict */
						.acf-map img {
						   max-width: inherit !important;
						}

						</style>

						<?php if( have_rows('locations') ): ?>
							<div class="acf-map">
								<?php while ( have_rows('locations') ) : the_row();

									$location = get_sub_field('location');

									?>
									<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
										<h5><?php the_sub_field('title'); ?></h5>
										<p class="address"><?php echo $location['address']; ?></p>
										<p class="phone">
											<a href="tel:+1-<?php the_sub_field('phone_number'); ?>" title="<?php the_field('phone_number_label','option'); ?> - <?php the_sub_field('phone_number'); ?>"><?php the_sub_field('phone_number'); ?></a>
										</p>
										<p class="directions"><a href="<?php the_sub_field('directions'); ?>" target="_blank">Get Directions</a></p>
									</div>
							<?php endwhile; ?>
							</div>
						<?php endif; ?>

						<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAI9fVFyOTDVssBFd6UdwUa_HrmK4dWwqs"></script>
						<script type="text/javascript">
						(function($) {

						/*
						*  new_map
						*
						*  This function will render a Google Map onto the selected jQuery element
						*
						*  @type	function
						*  @date	8/11/2013
						*  @since	4.3.0
						*
						*  @param	$el (jQuery element)
						*  @return	n/a
						*/

						function new_map( $el ) {

							// var
							var $markers = $el.find('.marker');


							// vars
							var args = {
								zoom		: 12,
								center		: new google.maps.LatLng(0, 0),
								mapTypeId	: google.maps.MapTypeId.ROADMAP
							};


							// create map
							var map = new google.maps.Map( $el[0], args);


							// add a markers reference
							map.markers = [];


							// add markers
							$markers.each(function(){

						    	add_marker( $(this), map );

							});

							// center map
							center_map( map );


							// return
							return map;

						}

						/*
						*  add_marker
						*
						*  This function will add a marker to the selected Google Map
						*
						*  @type	function
						*  @date	8/11/2013
						*  @since	4.3.0
						*
						*  @param	$marker (jQuery element)
						*  @param	map (Google Map object)
						*  @return	n/a
						*/

						function add_marker( $marker, map ) {

							// var
							var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

							// create marker
							var image = '<?php echo get_template_directory_uri(); ?>/assets/images/map-marker.png';
							var marker = new google.maps.Marker({
								position	: latlng,
								map			: map,
								icon		: image
							});

							// add to array
							map.markers.push( marker );

							// if marker contains HTML, add it to an infoWindow
							if( $marker.html() )
							{
								// create info window
								var infowindow = new google.maps.InfoWindow({
									content		: $marker.html()
								});

								// show info window when marker is clicked
								google.maps.event.addListener(marker, 'click', function() {

									infowindow.open( map, marker );

								});
							}

						}

						/*
						*  center_map
						*
						*  This function will center the map, showing all markers attached to this map
						*
						*  @type	function
						*  @date	8/11/2013
						*  @since	4.3.0
						*
						*  @param	map (Google Map object)
						*  @return	n/a
						*/

						function center_map( map ) {

							// vars
							var bounds = new google.maps.LatLngBounds();

							// loop through all markers and create bounds
							$.each( map.markers, function( i, marker ){

								var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

								bounds.extend( latlng );

							});

							// only 1 marker?
							if( map.markers.length == 1 )
							{
								// set center of map
							    map.setCenter( bounds.getCenter() );
							    map.setZoom( 16 );
							}
							else
							{
								// fit to bounds
								map.fitBounds( bounds );
							}

						}

						/*
						*  document ready
						*
						*  This function will render each map when the document is ready (page has loaded)
						*
						*  @type	function
						*  @date	8/11/2013
						*  @since	5.0.0
						*
						*  @param	n/a
						*  @return	n/a
						*/
						// global var
						var map = null;

						$(document).ready(function(){

							$('.acf-map').each(function(){

								// create map
								map = new_map( $(this) );

							});

						});

						})(jQuery);

						</script>
				<?php endif; ?>
		    <?php endwhile; ?>
		</article>
	<?php else : ?>
		<div class="block spacer-block"></div>
	<?php endif; ?>
	<script type="text/javascript">
		jQuery(document).ready(function($){
			if ($('.block').length && $('.block').length <= 2 && $('.faq-block').length){
				$('.content-blocks-container').css( "padding-top", "0" );
			}
		});
	</script>
</section>
