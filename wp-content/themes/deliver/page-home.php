
<?php

/* Template Name: Home*/


get_header();

?>


<section class="intro">
	<div class="container">
		<div class="owl-carousel owl-theme" id="owl">
			<?php
			$args = array(
				'post_type' => 'slide'
			);

			$the_query = new WP_Query($args);

			if ($the_query->have_posts()) :?>
                <?php while ($the_query->have_posts()) : ?>
                    <div class="col-12 d-flex flex-column align-items-center">
                        <?php $the_query->the_post(); ?>
                        <div class="row d-flex flex-column text-center">
                            <h2 class="margin light-text text-uppercase slider-headline margin"><?php the_title(); ?></h2>
                            <div class="margin light-text slider-text margin"><?php the_excerpt(); ?></div>
                        </div>
                        <a href="<?php the_permalink() ?>" class="light-text main-button margin">Read more</a>
                    </div>
                <?php endwhile; ?>
            <?php else : //no posts ?>
			<?php endif; wp_reset_postdata(); ?>
        </div>
</section>
<section class="services">
    <div class="container">
        <div class="col-12 text-center section-header margin services-header dark-border">
            <h2 class="header-headline margin dark-text"><?php echo get_theme_mod('section_2_headline') ?></h2>
            <p class="header-text margin dark-text"><?php echo get_theme_mod('section_2_text') ?></p>
        </div>
        <div class="row">
            <ul class="d-flex justify-content-between">
                <?php
                $args = array(
                    'post_type' => 'service'
                );

                $the_query = new WP_Query($args);

                if ($the_query->have_posts()) :?>
                    <?php while ($the_query->have_posts()) : ?>
                        <?php $the_query->the_post(); ?>
                        <li class="col-md-4 text-center service-container d-flex flex-column justify-content-between align-items-center">
                            <div class="service-img-container margin">
	                            <?php the_post_thumbnail() ?>
                            </div>
                            <h2 class="margin dark-text text-uppercase service-title margin"><?php the_title(); ?></h2>
                            <div class="margin dark-text service-text margin"><?php the_excerpt(); ?></div>
                            <a href="<?php the_permalink() ?>" class="main-button margin dark-text service-button">Read more</a>
                        </li>

                    <?php endwhile; ?>
                <?php else : //no posts ?>
                <?php endif; wp_reset_postdata(); ?>
            </ul>
        </div>
    </div>
</section>
<section class="latest-works">
    <div class="container">
        <div class="col-12 text-center section-header margin latest-works-header">
            <h2 class="header-headline margin dark-text"><?php echo get_theme_mod('section_3_headline') ?></h2>
            <p class="header-text margin dark-text"><?php echo get_theme_mod('section_3_text') ?></p>
        </div>
        <div class="row">
            <ul class="col-12 d-flex justify-content-between flex-wrap latest-works-list">
                <?php
                $args = array(
                    'post_type' => 'portfolio'
                );

                $the_query = new WP_Query($args);

                if ($the_query->have_posts()) :?>
                    <?php while ($the_query->have_posts()) : ?>
                        <?php $the_query->the_post(); ?>
                        <li class="col-md-3 text-center latest-work-container">
                            <?php the_post_thumbnail() ?>
                            <a href="<?php the_permalink() ?>" class="latest-work-hover"></a>
                            <span class="dark-text text-uppercase d-block text-center latest-work-title margin"><?php the_title() ?></span>
                        </li>

                    <?php endwhile; ?>
                <?php else : //no posts ?>
                <?php endif; wp_reset_postdata(); ?>
            </ul>
        </div>
    </div>
</section>
<section class="do-you-like">
    <div class="container">
        <div class="col-12 text-center section-header margin do-you-like-header">
            <h2 class="header-headline margin dark-text"><?php echo get_theme_mod('section_4_headline') ?></h2>
            <p class="header-text margin dark-text"><?php echo get_theme_mod('section_4_text') ?></p>
        </div>
        <div class="d-flex justify-content-center do-you-like-button-container margin">
            <a href="#" class="main-button light-text do-you-like-button margin">Purchase</a>
        </div>

    </div>
</section>

<?php get_footer() ?>
