<?php 
/*
*
* The file for display blog content for asthir theme
*
*/

$asthir_blog_btn_text = get_theme_mod( 'asthir_blog_btn_text', __('Read More','asthir-blog') );
?>
<div class="asthir-blog1">
	 	<?php asthir_post_thumbnail(); ?>
	<div class="content-text asthir-shadow">
		<header class="entry-header text-center mb-5">
				<?php
				if ( is_singular() ) :
					the_title( '<h2 class="entry-title">', '</h2>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				if ( 'post' === get_post_type() ) :
					?>
					<div class="entry-meta">
						<?php
						asthir_posted_on();
						asthir_posted_by();
						?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->


			<div class="entry-content">
				<?php
				the_excerpt();
				?>
				<a href="<?php the_permalink(); ?>"><?php echo esc_html( $asthir_blog_btn_text ); ?></a>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php asthir_entry_footer(); ?>
			</footer><!-- .entry-footer -->

		</div>
	</div>