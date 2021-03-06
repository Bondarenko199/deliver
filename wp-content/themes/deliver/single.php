<?php

/* Template Name: Blog Posts*/


get_header();

?>

    <section class="page-intro">
        <div class="page-header">
            <div class="container">
                <h2 class="text-uppercase light-text blog-headline">Our Blog</h2>
            </div>
        </div>
    </section>
    <section class="posts">
        <div class="container">
            <div class="row">
                <ul class="col-md-8 posts-list">
					<?php if (have_posts()) :
						while (have_posts()) : the_post();?>
                            <li>
                                <div class="post-media-container">
									<?php the_post_thumbnail() ?>
                                </div>
                                <h3 class="post-title">
                                    <a href="<?php the_permalink()?>"><?php the_title() ?></a>
                                </h3>
                                <ul class="d-flex post-taxonomies-list margin">
                                    <li class="date-container padding margin"><?php the_date() ?></li>
                                    <li class="author-container padding margin"><?php the_author() ?></li>
                                    <li class="cat-container padding margin"><?php the_category() ?></li>
                                    <li class="comments-amount-container padding margin"><?php comments_number() ?></li>
                                </ul>
                                <div class="dark-text post-text-container"><?php the_content() ?></div>
                            </li>
                            <?php if ( comments_open() || get_comments_number() ) : comments_template(); ?>
                            <?php endif ?>
						<?php endwhile; ?>
					<?php endif; ?>
                </ul>
				<?php get_sidebar() ?>
            </div>

        </div>
    </section>




<?php get_footer() ?>


<!---->
<?php
//		while ( have_posts() ) : the_post();
//
//			get_template_part( 'template-parts/content', get_post_format() );
//
//			the_post_navigation();
//
//			// If comments are open or we have at least one comment, load up the comment template.
//			if ( comments_open() || get_comments_number() ) :
//				comments_template();
//			endif;
//
//		endwhile; // End of the loop.
//		?>
<!---->
<!--		</main><!-- #main -->-->
<!--	</div><!-- #primary -->-->
<!---->
<?php
//get_footer();
