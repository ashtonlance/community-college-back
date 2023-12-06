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

require_once get_template_directory() . '/custom-post-types.php';
require_once get_template_directory() . '/tax-reorder.php';

new SlashAdmin\TaxonomyOrder();

add_action('acf/init', 'acf_init_block_types');

function acf_init_block_types()
{
  if (function_exists('register_block_type')) {
    register_block_type(get_template_directory() . "/template-parts/blocks/hero/block.json");
    register_block_type(get_template_directory() . "/template-parts/blocks/text/block.json");
    register_block_type(get_template_directory() . "/template-parts/blocks/stats/block.json");
    register_block_type(get_template_directory() . "/template-parts/blocks/testimonial/block.json");
    register_block_type(get_template_directory() . "/template-parts/blocks/links/block.json");
    register_block_type(get_template_directory() . "/template-parts/blocks/cta/block.json");
    register_block_type(get_template_directory() . "/template-parts/blocks/general-cards/block.json");
    register_block_type(get_template_directory() . "/template-parts/blocks/related-resources/block.json");
    register_block_type(get_template_directory() . "/template-parts/blocks/text-and-image/block.json");
    register_block_type(get_template_directory() . "/template-parts/blocks/contact-block/block.json");
    register_block_type(get_template_directory() . "/template-parts/blocks/features-and-benefits/block.json");
    register_block_type(get_template_directory() . "/template-parts/blocks/testimonial-slider/block.json");
    register_block_type(get_template_directory() . "/template-parts/blocks/text-and-media-slider/block.json");
    register_block_type(get_template_directory() . "/template-parts/blocks/page-heading/block.json");
    register_block_type(get_template_directory() . "/template-parts/blocks/button/block.json");
    register_block_type(get_template_directory() . "/template-parts/blocks/wysiwyg/block.json");
    register_block_type(get_template_directory() . "/template-parts/blocks/media-embed/block.json");
    register_block_type(get_template_directory() . "/template-parts/blocks/location/block.json");
    register_block_type(get_template_directory() . "/template-parts/blocks/accordion/block.json");
    register_block_type(get_template_directory() . "/template-parts/blocks/event-cards/block.json");
  }
}

add_filter('acf/fields/wysiwyg/toolbars', 'my_toolbars');
function my_toolbars($toolbars)
{
  $toolbars['Very Simple'] = array();
  $toolbars['Very Simple'][1] = array('bold', 'italic', 'link', 'unlink', 'bullist', 'numlist', 'undo', 'redo', 'removeformat');

  $toolbars['Simple'] = array();
  $toolbars['Simple'][1] = array('bold', 'italic', 'link', 'unlink', 'bullist', 'numlist', 'undo', 'redo', 'removeformat', 'table', 'formatselect', 'alignleft', 'aligncenter', 'alignright');


  // remove the 'Basic' toolbar completely
  unset($toolbars['Full']);
  // remove the 'Basic' toolbar completely
  unset($toolbars['Basic']);
  return $toolbars;
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

add_filter('graphql_request_results', function ($response) {
  if (is_array($response) && isset($response['extensions'])) {
    unset($response['extensions']);
  }
  if (is_object($response) && isset($response->extensions)) {
    unset($response->extensions);
  }
  return $response;
}, 99, 1);

function add_menus()
{
  register_nav_menus(
    array(
      'faculty-and-staff' => __('Faculty and Staff'),
      'employers' => __('Employers'),
      'system-office' => __('System Office')
    )
  );
}
add_action('init', 'add_menus');

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init()
{

  // Check function exists.
  if (function_exists('acf_add_options_page')) {

    // Register options page.
    $option_page = acf_add_options_page(
      array(
        'page_title' => __('Settings'),
        'menu_title' => __('Global Site Settings'),
        'menu_slug' => 'settings',
        'capability' => 'remove_users',
        'redirect' => false,
        'show_in_graphql' => true
      )
    );
  }
}

add_action( 'admin_print_scripts', 'remove_layout_option' );


function remove_layout_option() {
  echo "<style type='text/css'>";
  echo ".gb-toolbar-insert-layout { display: none; }";
  echo "#tab-panel-0-patterns { display: none; }";
  echo "</style>";
}


function my_acf_google_map_api($api)
{
  $api['key'] = 'AIzaSyAqTeKtK62XIK_hlHvL8OO31nmDVseH0fk';
  return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

add_action( 'graphql_register_types', function() {

	register_graphql_connection( [
		'fromType' => 'Page',
		'toType' => 'Page',
		'connectionTypeName' => 'PageSiblings',
		'fromFieldName' => 'siblings',
		'resolve' => function( $page, $args, $context, $info ) {
			$parent = $page->parentDatabaseId ?? null;

			if ( ! $parent ) {
				return null;
			}

			$resolver = new \WPGraphQL\Data\Connection\PostObjectConnectionResolver( $page, $args, $context, $info );
			$resolver->set_query_arg( 'post_parent', $parent );
			$resolver->set_query_arg( 'post__not_in', $page->databaseId );
			return $resolver->get_connection();
		}
	]);

} );

add_filter( 'graphql_PostObjectsConnectionOrderbyEnum_values', function( $values ) {

	$values['STAFF_NAME'] = [
		'value' => 'staff_name',
		'description' => __( 'The staff name', 'wp-graphql' ),
	];

  $values['DUE_DATE'] = [
		'value' => 'due_date',
		'description' => __( 'The due date', 'wp-graphql' ),
	];

	return $values;

} );

add_filter( 'graphql_post_object_connection_query_args', function( $query_args, $source, $input ) {

	if ( isset( $input['where']['orderby'] ) && is_array( $input['where']['orderby'] ) ) {

		foreach( $input['where']['orderby'] as $orderby ) {

			if ( ! isset( $orderby['field'] ) || 'staff_name' !== $orderby['field'] ) {
				continue;
			}

			$query_args['meta_type'] = 'TEXT';
			$query_args['meta_key'] = 'staff_name';
			$query_args['orderby']['meta_value_num'] = $orderby['order'];

		}

	}

	return $query_args;

}, 10, 3);

add_filter( 'graphql_post_object_connection_query_args', function( $query_args, $source, $input ) {

	if ( isset( $input['where']['orderby'] ) && is_array( $input['where']['orderby'] ) ) {

		foreach( $input['where']['orderby'] as $orderby ) {

			if ( ! isset( $orderby['field'] ) || 'due_date' !== $orderby['field'] ) {
				continue;
			}

			$query_args['meta_type'] = 'TEXT';
			$query_args['meta_key'] = 'due_date';
			$query_args['orderby']['meta_value_num'] = $orderby['order'];

		}

	}

	return $query_args;

}, 10, 3);

function wds_algolia_set_image_sizes() {
	return [
		'cta',
		'medium',
		'thumbnail',
		'hero',
	];
}
add_filter( 'algolia_post_images_sizes', 'wds_algolia_set_image_sizes', 10, 2 );
add_filter( 'graphql_connection_max_query_amount', function( $amount, $source, $args, $context, $info  ) {
  $amount = 1000; // increase post limit to 1000
  return $amount;
}, 10, 5 );

// add_filter( 'rest_colleges_collection_params','filter_add_rest_orderby_params', 10, 2 );

// function filter_add_rest_orderby_params( $params, $post_type  ) {
// $params['orderby']['enum'][] = 'menu_order';
// if ( $post_type->name === 'colleges' ) {
//     $params['orderby']['default'] = 'menu_order';
//     $params['order']['default'] = 'asc';
// }
// var_dump($params);
// return $params;
// }

function enqueue_admin_scripts_and_styles() {
	wp_enqueue_script('admin-scripts', get_template_directory_uri() . '/custom-admin.js', array('wp-blocks', 'wp-element', 'wp-hooks'), '', true);
}
add_action('admin_enqueue_scripts', 'enqueue_admin_scripts_and_styles');

function wpcc_allowed_block_types() {
	return array(
    'core/paragraph',
    // 'core/image',
    'core/heading',
    'core/list',
    'core/quote',
    'core/shortcode',
    'core/gallery',
    // 'core/video',
    'core/separator',
    'nextword/hero',
    'nextword/text',
    'nextword/stats',
    'nextword/featuresandbenefits',
    'nextword/testimonialslider',
    'nextword/textandmediaslider',
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
    'nextword/button',
    'nextword/accordion',
    'nextword/wysiwyg',
    'gravityforms/form',
    'nextword/eventcards',
    'nextword/location',
    'nextword/mediaembed'
  );
}
add_filter( 'allowed_block_types', 'wpcc_allowed_block_types' );


//Add Instructions to Featured Image Box

function change_post_type_labels() {
  $post_object = get_post_type_object( 'board-members' );

  if ( ! $post_object ) {
      return false;
}

  $post_object->labels->set_featured_image = 'Set featured image (800px x 800px)';

  return true;
}

add_action( 'wp_loaded', 'change_post_type_labels', 20 );

function register_custom_menu_page() {
  add_menu_page('Vercel', 'Vercel', 'add_users', 'custompage', '_custom_menu_page', null, 6); 
}
add_action('admin_menu', 'register_custom_menu_page');

function _custom_menu_page(){
  echo '<div style="margin:2rem 0;"><button class="components-button is-primary" id="triggerRedeploy" >Trigger Redeploy</button></div>';
  echo '<div id="deployStatus"></div>';
  echo '<script>
    document.getElementById("triggerRedeploy").addEventListener("click", function() {
      document.getElementById("deployStatus").innerText = "Pending";
      fetch("https://api.vercel.com/v1/integrations/deploy/prj_QOdLXdWbrr5DyZhEnEFkG8AT3K5f/6auzicvDFE", { method: "POST" })
        .then(response => response.json())
        .then(data => {
          if(data.job.state === "pending") {
            document.getElementById("deployStatus").innerText = "Pending";
          }
        });
    });
  </script>';
 }
