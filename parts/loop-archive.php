<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
	<div class="block text-block">
		<div class="row">
			<div class="large-12 medium-12 small-12 columns">
				<div class="half-width">
					<header class="article-header">
						<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						<p class="byline">
							<?php the_time('F j, Y') ?> - <?php the_category(', ') ?>
						</p>
					</header> <!-- end article header -->
					<section class="entry-content" itemprop="articleBody">
						<a href="<?php the_permalink() ?>"><img src="<?php the_field('header_image'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>"></a>
						<?php the_excerpt(); ?>
					</section> <!-- end article section -->
					<?php if(has_tag()): ?>
						<footer class="article-footer">
					    	<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
						</footer> <!-- end article footer -->
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</article> <!-- end article -->
