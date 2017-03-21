<?php

/* Template Name: Home*/


get_header();

?>


<section class="page-intro">
    <div class="page-header">
        <div class="container">
            <h2 class="text-uppercase light-text blog-headline"><?php echo wp_title( $sep = '' ) ?></h2>
        </div>
    </div>
</section>
<section class="services">
    <div class="container">
        <div class="col-12 text-center section-header margin services-header dark-border">
            <h2 class="header-headline margin dark-text"><?php echo get_theme_mod( 'section_2_headline' ) ?></h2>
            <p class="header-text margin dark-text"><?php echo get_theme_mod( 'section_2_text' ) ?></p>
        </div>
        <div class="row">
            <ul class="d-flex justify-content-between">
                <li class="col-md-4 about-us-text-container margin">
                    <h3 class="text-uppercase about-us-headline margin dark-text"><?php echo get_theme_mod( 'about_us_text1_headline' ) ?></h3>
                    <p class="about-us-text"><?php echo get_theme_mod( 'about_us_text1' ) ?></p>
                </li>
                <li class="col-md-4 about-us-text-container margin">
                    <h3 class="text-uppercase about-us-headline margin dark-text"><?php echo get_theme_mod( 'about_us_text2_headline' ) ?></h3>
                    <p class="about-us-text"><?php echo get_theme_mod( 'about_us_text2' ) ?></p>
                </li>
                <li class="col-md-4 about-us-text-container margin">
                    <h3 class="text-uppercase about-us-headline margin dark-text"><?php echo get_theme_mod( 'about_us_text3_headline' ) ?></h3>
                    <p class="about-us-text"><?php echo get_theme_mod( 'about_us_text3' ) ?></p>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="team">
    <div class="container">
        <div class="col-12 text-center section-header margin team-header">
            <h2 class="header-headline margin dark-text"><?php echo get_theme_mod( 'section_3_headline' ) ?></h2>
            <p class="header-text margin dark-text"><?php echo get_theme_mod( 'section_3_text' ) ?></p>
        </div>
        <div class="row">
            <ul class="col-12 d-flex justify-content-between team-list">
		        <?php
		        $args = array(
			        'post_type' => 'team'
		        );

		        $the_query = new WP_Query( $args );

		        if ( $the_query->have_posts() ) :?>
			        <?php while ( $the_query->have_posts() ) : ?>
				        <?php $the_query->the_post(); ?>
                        <li class="col-md-3 team-container">
                            <a href="<?php the_permalink() ?>" class="">
						        <?php the_post_thumbnail() ?>
                            </a>
                            <div class="team-header margin">
                                <h3 class="dark-text text-uppercase team-title margin"><?php the_title() ?></h3>
                                <span class="position margin"><?php echo get_post_custom_values( 'position' )[0]; ?></span>
                            </div>
                            <div class="team-text margin"><?php the_excerpt() ?></div>
                            <ul class="d-flex social-media">
                                <li>
                                    <a href="<?php echo get_post_custom_values( 'twitter' )[0]; ?>" class="fa fa-twitter social-container margin dark-text color-hover">
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo get_post_custom_values( 'facebook' )[0]; ?>" class="fa fa-facebook social-container margin dark-text color-hover"></a>
                                </li>
                                <li>
                                    <a href="<?php echo get_post_custom_values( 'rss' )[0]; ?>" class="fa fa-rss social-container margin dark-text color-hover"></a>
                                </li>
                            </ul>
                        </li>

			        <?php endwhile; ?>
		        <?php else : //no posts ?>
		        <?php endif;
		        wp_reset_postdata(); ?>
            </ul>
        </div>
    </div>
</section>
<section class="do-you-like">
    <div class="container">
        <div class="col-12 text-center section-header margin do-you-like-header">
            <h2 class="header-headline margin dark-text"><?php echo get_theme_mod( 'section_4_headline' ) ?></h2>
            <p class="header-text margin dark-text"><?php echo get_theme_mod( 'section_4_text' ) ?></p>
        </div>
        <div class="d-flex justify-content-center do-you-like-button-container margin">
            <a href="#" class="main-button light-text do-you-like-button margin">Purchase</a>
        </div>

    </div>
</section>

<?php get_footer() ?>
