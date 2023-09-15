<?php
/**
 * NextWord functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage NextWord
 * @since NextWord 1.0
 */

add_action('acf/init', 'acf_init_block_types');

// add_action( 'graphql_register_types', function() {

// 	register_graphql_connection([
// 		'fromType' => 'RootQuery',
// 		'toType' => 'resource',
// 		'fromFieldName' => 'popularPosts',
// 		'connectionTypeName' => 'RootQueryToPopularPostsConnection',
// 		'resolve' => function( $root, $args, \WPGraphQL\AppContext $context, $info ) {

// 			$resolver = new \WPGraphQL\Data\Connection\PostObjectConnectionResolver( $root, $args, $context, $info );

// 			// Get the query amount from the resolver.
// 			// This takes into account the arguments for `first` and `last` on the connection
// 			// and determines how many items to ask for
// 			$per_page = $resolver->get_query_amount();

// 			// Query for the popular posts. It's important to JUST get the ids
// 			$popular_post_ids = new WP_Query( [
// 				'posts_per_page' => $per_page,
// 				'meta_key' => 'wpb_post_views_count',
// 				'orderby' => 'meta_value_num',
// 				'order' => 'DESC',
// 				'fields' => 'ids', // Just ask for the IDs. WPGraphQL connection resolver will get the full objects for you
// 				'no_found_rows' => true,
// 			] );

// 			// If there are no popular posts, return null for the connection
// 			if ( empty( $popular_post_ids->posts ) ) {
// 				return null;
// 			}

// 			$resolver->set_query_arg( 'post__in', $popular_post_ids->posts );
// 			return $resolver->get_connection();
// 		}
// 	]);

// } );

function acf_init_block_types(){
	if(function_exists('register_block_type')){
		register_block_type(get_template_directory() . "/template-parts/blocks/hero/block.json");
		register_block_type(get_template_directory() . "/template-parts/blocks/hero-event/block.json");
		register_block_type(get_template_directory() . "/template-parts/blocks/external-event/block.json");
		register_block_type(get_template_directory() . "/template-parts/blocks/text/block.json");
		register_block_type(get_template_directory() . "/template-parts/blocks/stats/block.json");
		register_block_type(get_template_directory() . "/template-parts/blocks/testimonial/block.json");
		register_block_type(get_template_directory() . "/template-parts/blocks/links/block.json");
		register_block_type(get_template_directory() . "/template-parts/blocks/cta/block.json");
		register_block_type(get_template_directory() . "/template-parts/blocks/general-cards/block.json");
		register_block_type(get_template_directory() . "/template-parts/blocks/related-resources/block.json");
		register_block_type(get_template_directory() . "/template-parts/blocks/text-and-image/block.json");
		register_block_type(get_template_directory() . "/template-parts/blocks/team-member-cards/block.json");
		register_block_type(get_template_directory() . "/template-parts/blocks/contact-block/block.json");
		register_block_type(get_template_directory() . "/template-parts/blocks/features-and-benefits/block.json");
		register_block_type(get_template_directory() . "/template-parts/blocks/testimonial-slider/block.json");
		register_block_type(get_template_directory() . "/template-parts/blocks/resource-featured-card/block.json");
		register_block_type(get_template_directory() . "/template-parts/blocks/resource-download/block.json");
		register_block_type(get_template_directory() . "/template-parts/blocks/page-heading/block.json");
		register_block_type(get_template_directory() . "/template-parts/blocks/button/block.json");
		register_block_type(get_template_directory() . "/template-parts/blocks/wysiwyg/block.json");
	}
}


if (!function_exists("twentytwentytwo_support")):
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * @since NextWord 1.0
   *
   * @return void
   */
  function twentytwentytwo_support()
  {
    // Add support for block styles.
    add_theme_support("wp-block-styles");

    // Enqueue editor styles.
    add_editor_style("style.css");
  }
endif;

add_action("after_setup_theme", "twentytwentytwo_support");

if (!function_exists("twentytwentytwo_styles")):
  /**
   * Enqueue styles.
   *
   * @since NextWord 1.0
   *
   * @return void
   */
  function twentytwentytwo_styles()
  {
    // Register theme stylesheet.
    $theme_version = wp_get_theme()->get("Version");

    $version_string = is_string($theme_version) ? $theme_version : false;
    wp_register_style(
      "twentytwentytwo-style",
      get_template_directory_uri() . "/style.css",
      [],
      $version_string
    );

    // Enqueue theme stylesheet.
    wp_enqueue_style("twentytwentytwo-style");
  }
endif;

add_action("wp_enqueue_scripts", "twentytwentytwo_styles");

if (!function_exists("hs_sample_setup_header")):
  function hs_sample_setup_header()
  {
    register_nav_menus([
      "main-menu" => esc_html__("Main Menu", "textdomain"),
    ]);
  }
  add_action("after_setup_theme", "hs_sample_setup_header");
endif;

// Add block patterns
require get_template_directory() . "/inc/block-patterns.php";

function wpcc_allowed_block_types() {
	$post_type = get_post_type();
	if ( $post_type === 'resource' ) {
		return array(
			'core/paragraph',
			'core/heading',
			'core/list',
			'core/quote',
			'core/table', //SHOW THIS ONLY FOR RESOURCE
			'core/image',
			'core/gallery',
			'core/video',
			'core/buttons',
			'core/separator',
			'core/shortcode',
			'nextword/resourcefeaturedcard',
			'nextword/resourcedownload'
		);
	} else if ( $post_type === 'event' ) {
		return array(
			'core/paragraph',
			'core/heading',
			'core/list',
			'core/quote',
			'core/table',
			'core/image',
			'core/gallery',
			'core/video',
			'core/buttons',
			'core/separator',
			'core/shortcode',
			'nextword/resourcefeaturedcard',
			'nextword/heroevent',
			'nextword/text',
			'nextword/stats',
			'nextword/featuresandbenefits',
			'nextword/testimonialslider',
			'nextword/testimonial',
			'nextword/relatedresourcesblock',
			'nextword/links',
			'nextword/cta',
			'nextword/generalcards',
			'nextword/eventcards',
			'nextword/textandimage',
			'nextword/teammembercards',
			'nextword/contactblock',
			'nextword/pageheading',
			'nextword/externalevent'
		);
	} else if( $post_type === 'page'){
		return array(
			'core/paragraph',
			'core/image',
			'core/heading',
			'core/list',
			'core/quote',
			'core/shortcode',
			'core/gallery',
			'core/video',
			'core/buttons',
			'core/separator',
			'nextword/hero',
			'nextword/text',
			'nextword/stats',
			'nextword/featuresandbenefits',
			'nextword/testimonialslider',
			'nextword/testimonial',
			'nextword/relatedresourcesblock',
			'nextword/links',
			'nextword/cta',
			'nextword/generalcards',
			'nextword/eventcards',
			'nextword/textandimage',
			'nextword/teammembercards',
			'nextword/contactblock',
			'nextword/pageheading',
			'nextword/wysiwyg'
		);
	} else {
		return array(
			'core/paragraph',
			'core/image',
			'core/heading',
			'core/list',
			'core/quote',
			'core/gallery',
			'core/video',
			'core/buttons',
			'core/separator',
			'core/shortcode',
		);
	}
}
add_filter( 'allowed_block_types', 'wpcc_allowed_block_types' );

add_filter( 'graphql_request_results', function( $response ) {
	if ( is_array( $response ) && isset( $response['extensions'] ) ) {
		unset( $response['extensions'] );
	}
	if ( is_object( $response ) && isset( $response->extensions ) ) {
		unset( $response->extensions );
	}
	return $response;
}, 99, 1 );

function add_menus() {
  register_nav_menus(
    array(
      'faculty-and-staff' => __( 'Faculty and Staff' ),
      'employers' => __( 'Employers' ),
			'system-office' => __( 'System Office' )
    )
  );
}
add_action( 'init', 'add_menus' );

