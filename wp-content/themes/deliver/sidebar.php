<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package deliver
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="col-md-4 widget-area" role="complementary">
<!--    <div class="cat-container">-->
<!--        <div class="cat-list-container">-->
<!--            <h3 class="text-uppercase cat-headline">Blog categories</h3>-->
<!--            --><?php //wp_list_categories(array(
//                    'hide_empty' => 0,
//                    'title_li' => '',
//                    'show_count' => true
//            )) ?>
<!--        </div>-->
<!--        <div class="post-list-container">-->
<!--            <h3 class="text-uppercase archive-headline">Archives</h3>-->
<!--            --><?php //wp_get_archives(array(
//                    'limit' => 12,
//                    'show_post_count' => true
//            )) ?>
<!--        </div>-->
<!---->
<!--    </div>-->
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
