<?php 
/*This file is part of Asthir child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/

if ( ! defined( 'ASTHIR_BLOG_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	$asthir_blog_theme = wp_get_theme();
	define( 'ASTHIR_BLOG_VERSION', $asthir_blog_theme->get( 'Version' ) );
}



function asthir_blog_fonts_url() {
	$fonts_url = '';

		$font_families = array();

		$font_families[] = 'Oxygen:400,500,700';
		$font_families[] = 'Rubik:400,500,500i,700,700i';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );


	return esc_url_raw( $fonts_url );
}


function asthir_blog_enqueue_child_styles() {
	wp_enqueue_style( 'asthir-blog-google-font',asthir_blog_fonts_url(), array(), null );
	wp_enqueue_style( 'asthir-blog-parent-style', get_template_directory_uri() . '/style.css',array('asthir-main','asthir-google-font', 'asthir-default','asthir-woocommerce-style'), '', 'all');
  	wp_enqueue_style( 'asthir-blog-main',get_stylesheet_directory_uri() . '/assets/css/main.css',array(), ASTHIR_BLOG_VERSION, 'all');

  
}
add_action( 'wp_enqueue_scripts', 'asthir_blog_enqueue_child_styles');




/**
 * Customizer additions.
 */
 require get_stylesheet_directory() . '/inc/customizer.php';


 function asthir_blog_body_class( $classes ) {
	$asthir_blog_style = get_theme_mod('asthir_blog_style', 'blog1');

		$classes[] = 'as-'.$asthir_blog_style;

		return $classes;
 }
 add_action('body_class','asthir_blog_body_class');
// // Nav walker for menu

// create action for text and image logo for site
	function asthir_blog_text_item(){
		$asthir_blog_dheader_text = get_theme_mod( 'display_header_text', 1 );
		$asthir_blog_logo_position = get_theme_mod( 'asthir_logo_position', 'center' );
?>
		<div class="site-branding text-center">
			<div class="headerlogo-text">
			<div class="container pb-5 pt-5">
				<div class="asthir-logotext text-<?php echo esc_attr($asthir_blog_logo_position); ?>">
					<?php the_custom_logo(); ?>
				<?php if (display_header_text() == true || (display_header_text() == true && is_customize_preview()) ): ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
					$asthir_description = get_bloginfo( 'description', 'display' );
					if ( $asthir_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $asthir_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?>	
					<?php endif; ?>	
				</div>
			</div>
			</div>
		</div><!-- .site-branding -->
<?php
	}
add_action('asthir_blog_logo_text','asthir_blog_text_item');
