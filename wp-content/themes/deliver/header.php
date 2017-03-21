<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package deliver
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <header id="masthead" class="site-header" role="banner">
        <nav id="site-navigation" class="navbar navbar-toggleable-md navbar-inverse main-nav d-flex column" role="navigation">
            <div class="container d-flex flex-wrap">
                <div class="col-12 d-flex flex-wrap justify-content-between logo-social-container margin">
                    <button class="navbar-toggler navbar-toggler-right collapsed toggle-button" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-brand">
                        <?php if (is_front_page()) : ?>
                                <span><img src="<?php echo get_theme_mod('home_page_logo') ?>"</span>
                            <?php else : ?>
                                <?php if ( function_exists( 'the_custom_logo' ) )  :the_custom_logo(); ?>
                                <?php endif; ?>
                       <?php endif; ?>
                    </div>
	                <?php if (is_front_page()) : ?>
                        <ul class="d-flex social-media">
                            <li>
                                <a href="<?php echo get_theme_mod('twitter') ?>" class="fa fa-twitter social-container margin dark-text dark-hover">
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo get_theme_mod('facebook') ?>" class="fa fa-facebook social-container margin dark-text dark-hover"></a>
                            </li>
                            <li>
                                <a href="<?php echo get_theme_mod('rss') ?>" class="fa fa-rss social-container margin dark-text dark-hover"></a>
                            </li>
                        </ul>
	                <?php else : ?>
                        <ul class="d-flex social-media">
                            <li>
                                <a href="<?php echo get_theme_mod('twitter') ?>" class="fa fa-twitter social-container margin light-text light-hover">
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo get_theme_mod('facebook') ?>" class="fa fa-facebook social-container margin light-text light-hover"></a>
                            </li>
                            <li>
                                <a href="<?php echo get_theme_mod('rss') ?>" class="fa fa-rss social-container margin light-text light-hover"></a>
                            </li>
                        </ul>
	                <?php endif; ?>
                </div>
                <div class="row">
                    <?php if (is_front_page()) : ?>
                        <?php wp_nav_menu( array(
                            'menu_class'=>'col-12 navbar-nav light-text',
                            'theme_location' => 'menu-header',
                            'menu_id' => 'primary-menu',
                            'container_class'=> 'navbar-collapse collapse justify-content-end',
                            'container_id'=>'navbarsExampleDefault'
                        )); ?>
                    <?php else : ?>
                        <?php wp_nav_menu( array(
                            'menu_class'=>'col-12 navbar-nav dark-text',
                            'theme_location' => 'menu-header',
                            'menu_id' => 'primary-menu',
                            'container_class'=> 'navbar-collapse collapse justify-content-end',
                            'container_id'=>'navbarsExampleDefault'
                        )); ?>
                    <?php endif; ?>
                </div>

            </div>
        </nav>
    </header>

    <div id="content" class="site-content">
