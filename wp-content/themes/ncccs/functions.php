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
    register_block_type(get_template_directory() . "/template-parts/blocks/page-heading/block.json");
    register_block_type(get_template_directory() . "/template-parts/blocks/button/block.json");
    register_block_type(get_template_directory() . "/template-parts/blocks/wysiwyg/block.json");
    register_block_type(get_template_directory() . "/template-parts/blocks/media-embed/block.json");
    register_block_type(get_template_directory() . "/template-parts/blocks/location/block.json");
  }
}

add_filter('acf/fields/wysiwyg/toolbars', 'my_toolbars');
function my_toolbars($toolbars)
{
  $toolbars['Very Simple'] = array();
  $toolbars['Very Simple'][1] = array('bold', 'italic', 'link', 'unlink','bullist', 'numlist', 'undo', 'redo', 'removeformat');

  $toolbars['Simple'] = array();
  $toolbars['Simple'][1] = array('bold', 'italic',  'link', 'unlink','bullist', 'numlist', 'undo', 'redo', 'removeformat', 'table', 'formatselect', 'alignleft', 'aligncenter', 'alignright');


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
        'menu_title' => __('Settings'),
        'menu_slug' => 'settings',
        'capability' => 'edit_posts',
        'redirect' => false,
        'show_in_graphql' => true
      )
    );
  }
}

function my_acf_google_map_api( $api ){
  $api['key'] = 'AIzaSyAqTeKtK62XIK_hlHvL8OO31nmDVseH0fk
  ';
  return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
