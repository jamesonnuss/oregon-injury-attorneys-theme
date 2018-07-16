<?php
/**
 * The template for displaying search results pages
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 */

get_header(); ?>

	<div class="content">

        <?php get_template_part( 'parts/content', 'header' ); ?>

        <section class="content-blocks">
            <article class="content-blocks-container" id="index">
                <div class="block text-block">
                    <div class="row">
                        <div class="large-12 medium-12 small-12 columns">

                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            					<!-- To see additional archive styles, visit the /parts directory -->
            					<?php get_template_part( 'parts/loop', 'archive' ); ?>

            				<?php endwhile; ?>

            					<?php joints_page_navi(); ?>

            				<?php else : ?>

            					<?php get_template_part( 'parts/content', 'missing' ); ?>

            			    <?php endif; ?>
                            
                        </div>
                    </div>
                </div>
            </article>
        </section>

	</div> <!-- end #content -->

<?php get_footer(); ?>
