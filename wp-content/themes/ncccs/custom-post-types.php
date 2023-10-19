<?php
function register_custom_post_type($post_type_name, $singular_name, $plural_name, $slug, $menu_icon, $taxonomy1_name = null, $taxonomy1_singular_name = null, $taxonomy1_plural_name = null, $taxonomy2_name = null, $taxonomy2_singular_name = null, $taxonomy2_plural_name = null) {

    $singular_name_camel = lcfirst(str_replace(' ', '', ucwords($singular_name)));
    $plural_name_camel = lcfirst(str_replace(' ', '', ucwords($plural_name)));

    $args = [
        'label' => esc_html__( $plural_name, 'twentytwentyone' ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_rest' => true,
        'rest_base' => '',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'rest_namespace' => 'wp/v2',
        'has_archive' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'delete_with_user' => false,
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => true,
        'can_export' => false,
        'rewrite' => [ 'slug' => $slug, 'with_front' => false ],
        'query_var' => true,
        'supports' => [ 'title', 'editor', 'thumbnail', 'page-attributes' ],
        'show_in_graphql' => true,
        'graphql_single_name' => $singular_name_camel,
        'graphql_plural_name' => $plural_name_camel,
        'menu_icon' => $menu_icon,
    ];

    register_post_type( $post_type_name, $args );

    if ($taxonomy1_name && $taxonomy1_singular_name && $taxonomy1_plural_name) {

        $taxonomy1_singular_name_camel = lcfirst(str_replace(' ', '', ucwords($taxonomy1_singular_name)));
        $taxonomy1_plural_name_camel = lcfirst(str_replace(' ', '', ucwords($taxonomy1_plural_name)));

        $taxonomy_args = [
            'label' => esc_html__( $taxonomy1_plural_name, 'twentytwentyone' ),
            'public' => true,
            'publicly_queryable' => true,
            'rewrite' => ['slug' => $taxonomy1_name],
            'hierarchical' => false,
            'show_in_rest' => true,
            'show_in_graphql' => true,
            'graphql_single_name' => $taxonomy1_singular_name_camel,
            'graphql_plural_name' => $taxonomy1_plural_name_camel,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'capabilities' => [
                'manage_terms' => 'edit_posts',
                'edit_terms' => 'edit_posts',
                'delete_terms' => 'edit_posts',
                'assign_terms' => 'edit_posts',
            ],
        ];

        register_taxonomy( $taxonomy1_name, $post_type_name, $taxonomy_args );
    }

    if ($taxonomy2_name && $taxonomy2_singular_name && $taxonomy2_plural_name) {

        $taxonomy2_singular_name_camel = lcfirst(str_replace(' ', '', ucwords($taxonomy2_singular_name)));
        $taxonomy2_plural_name_camel = lcfirst(str_replace(' ', '', ucwords($taxonomy2_plural_name)));


        $taxonomy_args = [
            'label' => esc_html__( $taxonomy2_plural_name, 'twentytwentyone' ),
            'public' => true,
            'publicly_queryable' => true,
            'rewrite' => ['slug' => $taxonomy2_name],
            'hierarchical' => false,
            'show_in_rest' => true,
            'show_in_graphql' => true,
            'graphql_single_name' => $taxonomy2_singular_name_camel,
            'graphql_plural_name' => $taxonomy2_plural_name_camel,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'capabilities' => [
                'manage_terms' => 'edit_posts',
                'edit_terms' => 'edit_posts',
                'delete_terms' => 'edit_posts',
                'assign_terms' => 'edit_posts',
            ],
        ];

        register_taxonomy( $taxonomy2_name, $post_type_name, $taxonomy_args );
    }
}

add_action( 'init', function() {
    register_custom_post_type('colleges', 'College', 'Colleges', '/', 'dashicons-bank');
    register_custom_post_type('program-areas', 'Program Area', 'Program Areas', '/students/what-we-offer/program-areas', 'dashicons-clipboard');
    register_custom_post_type('programs', 'Program', 'Programs', '/students/what-we-offer/programs', 'dashicons-book', 'program-areas', 'Tagged Program Area', 'Tagged Program Areas', 'colleges', 'College', 'Colleges');
    register_custom_post_type('annual-reports', 'Annual Reporting Plan', 'Annual Reporting Plans', '/college-faculty-staff/policy-legal-support/annual-reporting-plans', 'dashicons-chart-bar');
    register_custom_post_type('numbered-memos', 'Numbered Memo', 'Numbered Memos', '/about-us/system-office/numbered-memos', 'dashicons-portfolio', 'numbered-memo-categories', 'Numbered Memo Category', 'Numbered Memo Categories');
    register_custom_post_type('staff', 'Staff', 'Staff', '/about-us/system-office/staff', 'dashicons-groups', 'organization', 'Organization', 'Organizations');
    register_custom_post_type('board-members', 'Board Member', 'Board Members', '/about-us/board-members', 'dashicons-groups', 'board-members-categories', 'Board Members Category', 'Board Members Categories');
    register_custom_post_type('events', 'Event', 'Events', '/events', 'dashicons-calendar-alt', 'events-categories', 'Event Category', 'Events Categories', 'events-tags', 'Event Tag', 'Events Tags');
    register_custom_post_type('news', 'News Item', 'News Items', '/news', 'dashicons-megaphone', 'news-categories', 'News Category', 'News Categories', 'news-tags', 'News Tag', 'News Tags');
    register_custom_post_type('board-meetings', 'Board Meeting', 'Board Meetings', '/about-us/board-meetings', 'dashicons-edit-page', 'board-meeting-categories', 'Board Meeting Category', 'Board Meeting Categories');
    register_custom_post_type('data-dashboards', 'Data Dashboard', 'Data Dashboards', '/about-us/resources/data-dashboards', 'dashicons-dashboard', 'data-dashboards-categories', 'Data Dashboard Category', 'Data Dashboards Categories');
    register_custom_post_type('apprenticeship-opp', 'Apprenticeship Opportunity', 'Apprenticeship Opportunities', '/students/what-we-offer/apprenticeships/apprenticeship-opportunities', 'dashicons-hammer', 'app-opp-program-areas', 'Apprenticeship Opportunity Program Area', 'Apprenticeship Opportunities Program Areas');
    register_custom_post_type('proprietary-schools', 'Proprietary School', 'Proprietary Schools', '/about-us/system-office/state-board/state-board-of-proprietary-schools/proprietary-schools', 'dashicons-building');
    // Add more post types here
});

// Remove default post type
function remove_default_post_type($args, $postType) {
    if ($postType === 'post') {
        $args['public']                = false;
        $args['show_ui']               = false;
        $args['show_in_menu']          = false;
        $args['show_in_admin_bar']     = false;
        $args['show_in_nav_menus']     = false;
        $args['can_export']            = false;
        $args['has_archive']           = false;
        $args['exclude_from_search']   = true;
        $args['publicly_queryable']    = false;
        $args['show_in_rest']          = false;
    }

    return $args;
}
add_filter('register_post_type_args', 'remove_default_post_type', 0, 2);
?>