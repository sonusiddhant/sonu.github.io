<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Asthir Blog
 */

get_header();



if( is_active_sidebar( 'sidebar-1' ) ||  is_active_sidebar( 'sidebar-left' )  ) {
	$asthir_blog_column_set = '9';
}else{
	$asthir_blog_column_set = '12';
}

?>
<div class="container mt-3 mb-5 pt-5 pb-3">
	<div class="row">
		<?php if ( is_active_sidebar( 'sidebar-left' ) ): ?>
			<div class="col-lg-3">
				<aside id="left-widget" class="widget-area">
				<?php dynamic_sidebar( 'sidebar-left' ); ?>
				</aside>
			</div>
		<?php endif; ?>
		<div class="col-lg-<?php echo esc_attr($asthir_blog_column_set); ?>">
			<main id="primary" class="site-main">

				<?php
				if ( have_posts() ) :
				?>
					<header class="page-header search-header text-center mb-5">
						<h1 class="page-title">
							<?php
							/* translators: %s: search query. */
							printf( __( 'Search Results for: %s', 'asthir-blog' ), '<span>' . get_search_query() . '</span>' );
							?>
						</h1>
					</header><!-- .page-header -->
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

					endwhile;

				the_posts_pagination();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>

			</main><!-- #main -->
		</div>
	<?php if ( is_active_sidebar( 'sidebar-1' ) ): ?>
		<div class="col-lg-3">
			<?php get_sidebar(); ?>
		</div>
	<?php endif; ?>
	</div> <!-- end row -->
</div> <!-- end container -->

<?php
get_footer();