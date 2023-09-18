<?php function register_colleges_cpt() {
    $args = [
        'label' => esc_html__( 'Colleges', 'twentytwentyone' ),
        'public' => true, // If the CPT is not public, it can not be properly resolved in Faust.
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_rest' => true,
        'rest_base' => '',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'rest_namespace' => 'wp/v2',
        'has_archive' => true, // Important for creating an archive in Faust.
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'delete_with_user' => false,
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => false,
        'can_export' => false,
        'rewrite' => [ 'slug' => '/what-we-offer/colleges', 'with_front' => true ],
        'query_var' => true,
        'supports' => [ 'title', 'editor', 'thumbnail' ],
        'show_in_graphql' => true,
        'graphql_single_name' => 'College',
        'graphql_plural_name' => 'Colleges',
        'menu_icon' => 'dashicons-bank',
    ];

    register_post_type( 'colleges', $args );
}

add_action( 'init', 'register_colleges_cpt' );
?>