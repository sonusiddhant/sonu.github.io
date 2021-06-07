<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Asthir
 */

$asthir_blog_style = get_theme_mod( 'asthir_blog_style', 'blog1' );
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php get_template_part( 'template-parts/content', $asthir_blog_style ); ?>

</article><!-- #post-<?php the_ID(); ?> -->

