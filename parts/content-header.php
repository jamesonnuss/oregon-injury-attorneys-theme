<?php
/**
 * Template part for the page header
 */
?>
<section class="content-header">
	<?php if( get_field('header_image_overlay_opacity')): ?>
		<div class="screen" data-opacity="<?php the_field('header_image_overlay_opacity'); ?>"></div>
	<?php endif; ?>
	<?php if( get_field('image_or_video') == 'Image' ): ?>
		<div class="content-header-image" style="background-image:url('<?php the_field('header_image'); ?>');">
			<div class="row content-header-image-row">
				<div class="large-12 medium-12 small-12 columns">
					<?php if( get_field('custom_page_title') == 'Yes' ): ?>
						<h1><?php the_field('page_title'); ?></h1>
					<?php else: ?>
						<h1><?php the_title(); ?></h1>
					<?php endif; ?>
					<?php if( get_field('header_content')): ?>
						<p>
							<?php the_field('header_content'); ?>
						</p>
					<?php endif; ?>
					<?php if( have_rows('header_button_group') ): ?>
						<div class="flexible-button-container">
							<div class="flexible-button-inner-container">
								<?php while ( have_rows('header_button_group') ) : the_row(); ?>
									<?php if( get_row_layout() == 'header_page_link_button' ): ?>
										<div class="btn-center">
											<a href="<?php the_sub_field('button_link'); ?>" class="button"><?php the_sub_field('button_text'); ?></a>
										</div>
									<?php elseif( get_row_layout() == 'header_url_link_button' ): ?>
										<div class="btn-center">
											<a href="<?php the_sub_field('button_link'); ?>" class="button" target="_blank"><?php the_sub_field('button_text'); ?></a>
										</div>
									<?php elseif( get_row_layout() == 'header_pdf_button' ): ?>
										<div class="btn-center">
											<a href="<?php the_sub_field('button_file'); ?>" class="button" target="_blank"><?php the_sub_field('button_text'); ?></a>
										</div>
									<?php endif; ?>
								<?php endwhile; ?>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	<?php else: ?>
		<div class="content-header-video">
			<div class="row content-header-video-row">
				<div class="large-12 medium-12 small-12 columns">
					<?php if( get_field('custom_page_title') == 'Yes' ): ?>
						<h1><?php the_field('page_title'); ?></h1>
					<?php else: ?>
						<h1><?php the_title(); ?></h1>
					<?php endif; ?>
				</div>
			</div>
			<?php if( get_field('header_video')): ?>
				<video class="video-js" controls preload="auto" width="100%" poster="<?php the_field('header_video_poster'); ?>" data-setup="{}">
					<source src="<?php the_field('header_video'); ?>" type="video/mp4">
					<p class="vjs-no-js">
						Your browser does not support HTML5 video.
					</p>
				</video>
			<?php endif; ?>
		</div>
	<?php endif; ?>
</section>
