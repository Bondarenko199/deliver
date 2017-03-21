<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package deliver
 */

?>

<!--	</div><!-- #content -->
<!---->
<!--	<footer id="colophon" class="site-footer" role="contentinfo">-->
<!--		<div class="site-info">-->
<!--			<a href="--><?php //echo esc_url( __( 'https://wordpress.org/', 'deliver' ) ); ?><!--">--><?php //printf( esc_html__( 'Proudly powered by %s', 'deliver' ), 'WordPress' ); ?><!--</a>-->
<!--			<span class="sep"> | </span>-->
<!--			--><?php //printf( esc_html__( 'Theme: %1$s by %2$s.', 'deliver' ), 'deliver', '<a href="https://automattic.com/" rel="designer">Underscores.me</a>' ); ?>
<!--		</div><!-- .site-info -->
<!--	</footer><!-- #colophon -->
<!--</div><!-- #page -->

<footer class="main-footer dark-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-4 site-info-container">
                <div class="col-12 d-flex flex-wrap justify-content-between logo-social-container margin">
                    <div class="navbar-brand">
                        <span><img src="<?php echo get_theme_mod( 'home_page_logo' ) ?>"</span>
                    </div>
                    <ul class="d-flex social-media">
                        <li>
                            <a href="<?php echo get_theme_mod( 'twitter' ) ?>" class="fa fa-twitter social-container margin dark-text dark-hover">
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_theme_mod( 'facebook' ) ?>" class="fa fa-facebook social-container margin dark-text dark-hover"></a>
                        </li>
                        <li>
                            <a href="<?php echo get_theme_mod( 'rss' ) ?>" class="fa fa-rss social-container margin dark-text dark-hover"></a>
                        </li>
                    </ul>
                </div>
                <p class="site-info">
					<?php bloginfo( 'description' ) ?>
                </p>
            </div>
            <div class="col-md-3 d-flex flex-column contact-info-container">
                <h2 class="text-uppercase light-text footer-headline margin">Contact info</h2>
                <p class="contacts margin">222 Ave C South Saskatoon, Saskatchewan Canada S7K 2N5</p>
                <a href="#" class="email margin">info@deliver.ca</a>
                <a href="tel:1.306.222.3456" class="light-text phone margin">1.306.222.3456</a>
            </div>
            <div class="col-md-2 footer-nav-container">
                <h2 class="text-uppercase light-text nav-header footer-headline margin">Quick Links</h2>
                <?php wp_nav_menu( array(
	                'menu_class'=>'d-flex flex-column footer-nav',
	                'theme_location' => 'menu-footer',
	                'menu_id' => '',
                    'before' => '>'
                )); ?>
            </div>
            <div class="col-md-3 newsletter-container">
                <h2 class="text-uppercase light-text newsletter footer-headline margin">Newsletter</h2>
                <p class="newsletter-text margin">Lorem ipsum dolor sit amet dolor consectetur adipiscing elit.</p>
                <div><?php echo do_shortcode( '[contact-form-7 id="82" title="Email"]' )?></div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
