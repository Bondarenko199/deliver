<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package deliver
 */

get_header(); ?>

	<section class="single-intro">
		<div class="single-header">
			<div class="container">
				<h2>Blog</h2>
			</div>
		</div>
	</section>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );

				the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
