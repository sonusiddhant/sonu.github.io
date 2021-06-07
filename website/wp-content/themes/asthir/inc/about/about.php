<?php
/**
 * About setup
 *
 * @package asthir
 */

if ( ! function_exists( 'asthir_about_setup' ) ) :

	/**
	 * About setup.
	 *
	 * @since 1.0.0
	 */
	function asthir_about_setup() {

		$theme = wp_get_theme();
		$asthir_theme_name = $theme->get( 'Name' );
		$theme_slug = $theme->get( 'TextDomain' );




		$config = array(
		// Menu name under Appearance.
		'menu_name'               => sprintf( esc_html__( '%s Info', 'asthir' ),$asthir_theme_name),
		// Page title.
		'page_name'               => sprintf( esc_html__( '%s Info', 'asthir' ),$asthir_theme_name),
		/* translators: Main welcome title */
		'welcome_title'         => sprintf( esc_html__( 'Welcome to %s! - Version ', 'asthir' ), $theme['Name'] ),
		// Main welcome content
			// Welcome content.
			'welcome_content' => sprintf( esc_html__( '%1$s is now installed and ready to use. We want to make sure you have the best experience using the theme and that is why we gathered here all the necessary information for you. Thanks for using our theme!', 'asthir' ), $theme['Name'] ),

			// Tabs.
			'tabs' => array(
				'getting_started' => esc_html__( 'Getting Started', 'asthir' ),
				'recommended_actions' => esc_html__( 'Recommended Actions', 'asthir' ),
				'useful_plugins'  => esc_html__( 'Useful Plugins', 'asthir' ),
				'free_pro'  => esc_html__( 'Free Vs Pro', 'asthir' ),
				),

			// Quick links.
			'quick_links' => array(
                'update_url' => array(
                    'text'   => esc_html__( 'UPGRADE ASTHIR PRO', 'asthir' ),
                    'url'    => 'https://wpthemespace.com/product/asthir-pro/?add-to-cart=3508',
                    'button' => 'danger',
                ),
                'xmagazine_url' => array(
                    'text'   => esc_html__( 'View Pro Demo', 'asthir' ),
                    'url'    => 'https://wpcolors.net/aspro/asthir-demos/',
                    'button' => 'primary',
                ),
                'show_video' => array(
                    'text'   => esc_html__( 'View Details', 'asthir' ),
                    'url'    => 'https://wpthemespace.com/product/asthir',
                    'button' => 'primary',
                ),
                
            ),

			// Getting started.
			'getting_started' => array(
				'one' =>array(
					'title'       => esc_html__( 'Demo Content', 'asthir' ),
					'icon'        => 'dashicons dashicons-layout',
					'description' => sprintf( esc_html__( 'Demo content is pro feature. To import sample demo content, %1$s plugin should be installed and activated. After plugin is activated, visit Import Demo Data menu under Appearance.', 'asthir' ), esc_html__( 'One Click Demo Import', 'asthir' ) ),
					'button_text' => esc_html__( 'UPGRADE For  Demo Content', 'asthir' ),
					'button_url'  => 'https://wpthemespace.com/product/asthir-pro',
					'button_type' => 'primary',
					'is_new_tab'  => true,
					),
				 
				'two' => array(
					'title'       => esc_html__( 'Theme Options', 'asthir' ),
					'icon'        => 'dashicons dashicons-admin-customizer',
					'description' => esc_html__( 'Theme uses Customizer API for theme options. Using the Customizer you can easily customize different aspects of the theme.', 'asthir' ),
					'button_text' => esc_html__( 'Customize', 'asthir' ),
					'button_url'  => wp_customize_url(),
					'button_type' => 'primary',
					),
				'five' => array(
				    'title'       => esc_html__( 'Set Widgets', 'asthir' ),
				    'icon'        => 'dashicons dashicons-tagcloud',
				    'description' => esc_html__( 'Set widgets in your sidebar, Offcanvas as well as footer.', 'asthir' ),
				    'button_text' => esc_html__( 'Add Widgets', 'asthir' ),
				    'button_url'  => admin_url().'/widgets.php',
				    'button_type' => 'link',
				    'is_new_tab'  => true,
				),
				'six' => array(
					'title'       => esc_html__( 'Theme Preview', 'asthir' ),
					'icon'        => 'dashicons dashicons-welcome-view-site',
					'description' => esc_html__( 'You can check out the theme demos for reference to find out what you can achieve using the theme and how it can be customized. Theme demo only work in pro theme', 'asthir' ),
					'button_text' => esc_html__( 'View Demo', 'asthir' ),
					'button_url'  => 'https://wpcolors.net/aspro/asthir-demos/',
					'button_type' => 'link',
					'is_new_tab'  => true,
					),
                'seven' => array(
                    'title'       => esc_html__( 'Contact Support', 'asthir' ),
                    'icon'        => 'dashicons dashicons-sos',
                    'description' => esc_html__( 'Got theme support question or found bug or got some feedbacks? Best place to ask your query is the dedicated Support forum for the theme.', 'asthir' ),
                    'button_text' => esc_html__( 'Contact Support', 'asthir' ),
                    'button_url'  => 'https://wpthemespace.com/support/',
                    'button_type' => 'link',
                    'is_new_tab'  => true,
                ),
				),

					'useful_plugins'        => array(
						'description' => esc_html__( 'Theme supports some helpful WordPress plugins to enhance your site. But, please enable only those plugins which you need in your site. For example, enable WooCommerce only if you are using e-commerce.', 'asthir' ),
						'already_activated_message' => esc_html__( 'Already activated', 'asthir' ),
						'version_label' => esc_html__( 'Version: ', 'asthir' ),
						'install_label' => esc_html__( 'Install and Activate', 'asthir' ),
						'activate_label' => esc_html__( 'Activate', 'asthir' ),
						'deactivate_label' => esc_html__( 'Deactivate', 'asthir' ),
						'content'                   => array(
							array(
								'slug' => 'magical-blocks'
							),
							array(
								'slug' => 'magical-posts-display'
							),
							array(
								'slug' => 'magical-products-display'
							),
							array(
								'slug' => 'click-to-top'
							),
							array(
								'slug' => 'gallery-box',
								'icon' => 'svg',
							),
							array(
								'slug' => 'magical-addons-for-elementor',
								'icon' => 'svg',
							),
							array(
								'slug' => 'easy-share-solution',
								'icon' => 'svg',
							),
							array(
								'slug' => 'wp-edit-password-protected',
								'icon' => 'svg',
							),
						),
					),
					// Required actions array.
					'recommended_actions'        => array(
						'install_label' => esc_html__( 'Install and Activate', 'asthir' ),
						'activate_label' => esc_html__( 'Activate', 'asthir' ),
						'deactivate_label' => esc_html__( 'Deactivate', 'asthir' ),
						'content'            => array(
							'magical-blocks' => array(
								'title'       => __('Magical Blocks', 'asthir' ),
								'description' => __( 'Now you can add or update your site elements very easily by Magical Blocks. Supercharge your Gutenberg block with highly customizable Magical Blocks For Gutenberg.', 'asthir' ),
								'plugin_slug' => 'magical-blocks',
								'id' => 'magical-blocks'
							),
							'go-pro' => array(
								'title'       => '<a target="_blank" class="activate-now button button-danger" href="https://wpthemespace.com/product/asthir-pro/?add-to-cart=3508">'.__('UPGRADE ASTHIR PRO','asthir').'</a>',
								'description' => __( 'You will get more frequent updates and quicker support with the Pro version.', 'asthir' ),
								//'plugin_slug' => 'x-instafeed',
								'id' => 'go-pro'
							),
							
						),
					),
			// Free vs pro array.
			'free_pro'                => array(
				'free_theme_name'     => $asthir_theme_name,
				'pro_theme_name'      => $asthir_theme_name.__(' Pro','asthir'),
				'pro_theme_link'      => 'https://wpthemespace.com/product/asthir-pro',
				/* translators: View link */
				'get_pro_theme_label' => sprintf( __( 'Get %s', 'asthir' ), 'Asthir Pro' ),
				'features'            => array(
					array(
						'title'       => esc_html__( 'Daring Design for Devoted Readers', 'asthir' ),
						'description' => esc_html__( 'Asthir\'s design helps you stand out from the crowd and create an experience that your readers will love and talk about. With a flexible home page you have the chance to easily showcase appealing content with ease.', 'asthir' ),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__( 'Mobile-Ready For All Devices', 'asthir' ),
						'description' => esc_html__( 'Asthir makes room for your readers to enjoy your articles on the go, no matter the device their using. We shaped everything to look amazing to your audience.', 'asthir' ),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__( 'Woocommerce Support', 'asthir' ),
						'description' => esc_html__( 'Asthir theme support the Woocommerce plugin. So you can easily create a shop website with Asthir theme.', 'asthir' ),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__( 'Home slider', 'asthir' ),
						'description' => esc_html__( 'Asthir gives you extra slider feature. You can create awesome home slider in this theme.', 'asthir' ),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__( 'Widgetized Sidebars To Keep Attention', 'asthir' ),
						'description' => esc_html__( 'Asthir comes with a widget-based flexible system which allows you to add your favorite widgets over the Sidebar as well as on offcanvas too.', 'asthir' ),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__( 'Multiple Header Layout', 'asthir' ),
						'description' => esc_html__( 'Asthir gives you extra ways to showcase your header with miltiple layout option you can change it on the basis of your requirement', 'asthir' ),
						'is_in_lite'  => 'true',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__( 'Posts & Products Slider Options', 'asthir' ),
						'description' => esc_html__( 'Asthir PRO version comes with posts & products Slider options to display and filter posts & products. For instance, you can have far more control on setting the source of the posts or how they are displayed, everything to push the content to the right people and promote it by the blink of an eye.', 'asthir' ),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__( 'Elementor Advanced Addons', 'asthir' ),
						'description' => esc_html__( 'Elementor now most popular page builder. You will get advanced Elementor addons with Ashthir Pro version. ', 'asthir' ),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__( 'Flexible Home Page Design', 'asthir' ),
						'description' => esc_html__( 'Asthir\'s PRO version has more controll available to enable you to place widgets on Footer or Below the Post at the end of your articles.', 'asthir' ),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__( 'Six Diffrent Blog Layout.', 'asthir' ),
						'description' => esc_html__( 'Asthir Pro version has six different blog layouts. So you can easily setup your website layout in many different ways.', 'asthir' ),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__( 'Eight Diffrent Shop Layout.', 'asthir' ),
						'description' => esc_html__( 'Asthir Pro version has eight different shop layouts. So you can easily setup your shop website layout in many different ways.', 'asthir' ),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__( 'Advance Customizer Options', 'asthir' ),
						'description' => esc_html__( 'Advance control for each element gives you different way of customization and maintained you site as you like and makes you feel different.', 'asthir' ),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__( 'Advance Pagination', 'asthir' ),
						'description' => esc_html__( 'Multiple Option of pagination via customizer can be obtained on your site like Infinite scroll, Ajax Button On Click, Number as well as classical option are available.','asthir' ),
						'is_in_lite'  => 'ture',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__( 'One Click Demo install', 'asthir' ),
						'description' => esc_html__( 'You can import demo site only one click so you can setup your site like demo very easily.','asthir' ),
						'is_in_lite'  => 'ture',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__( 'Premium Support and Assistance', 'asthir' ),
						'description' => esc_html__( 'We offer ongoing customer support to help you get things done in due time. This way, you save energy and time, and focus on what brings you happiness. We know our products inside-out and we can lend a hand to help you save resources of all kinds.','asthir' ),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
					array(
						'title'       => esc_html__( 'No Credit Footer Link', 'asthir' ),
						'description' => esc_html__( 'You can easily remove the Theme: Asthir by asthir copyright from the footer area and make the theme yours from start to finish.', 'asthir' ),
						'is_in_lite'  => 'false',
						'is_in_pro'   => 'true',
					),
				),
			),

			);

		asthir_About::init( $config );
	}

endif;

add_action( 'after_setup_theme', 'asthir_about_setup' );


//Admin notice 
function asthir_new_optins_texts() {
		
    if(get_option('asthir6')){
        return;
    }
	$class = 'eye-notice notice notice-warning is-dismissible';
	$message = __( '<strong> Good News!! Asthir pro version now available.</br> Asthir Pro version has six different blog layouts, Eight different product layouts. Pro version has a huge options panel and Elementor advanced addons with posts and product slider.Asthir pro version also has different products style and effects. Pro Version has many more options. So why late? upgrade today....</strong> ', 'asthir' );
    $url1 = esc_url('https://wpthemespace.com/product/asthir-pro/');
    $url3 =esc_url('https://wpthemespace.com/product/asthir-pro/?add-to-cart=3508');

	printf( '<div class="%1$s" style="padding:10px 15px 20px;text-transform:uppercase"><p>%2$s</p><a target="_blank" class="button button-primary" href="%3$s" style="margin-right:10px">'.__('Asthir Pro Details','asthir').'</a><a target="_blank" class="button button-primary" href="%4$s" style="margin-right:10px">'.__('Upgrade Pro','asthir').'</a><button class="button button-info btnend" style="margin-left:10px">'.__('Dismiss the notice','asthir').'</button></div>', esc_attr( $class ), wp_kses_post( $message ),$url1,$url3 ); 
}
add_action( 'admin_notices', 'asthir_new_optins_texts' );

function asthir_new_optins_texts_init(){
    if(isset($_GET['xbnotice']) && $_GET['xbnotice'] == 1 ){
		delete_option('asthir4' );
        update_option( 'asthir6', 1);
    }
}
add_action('init','asthir_new_optins_texts_init');