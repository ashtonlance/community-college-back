<?php
function register_custom_post_type($post_type_name, $singular_name, $plural_name, $slug, $menu_icon, $taxonomy1_name = null, $taxonomy1_singular_name = null, $taxonomy1_plural_name = null, $taxonomy2_name = null, $taxonomy2_singular_name = null, $taxonomy2_plural_name = null) {
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
        'hierarchical' => false,
        'can_export' => false,
        'rewrite' => [ 'slug' => $slug, 'with_front' => true ],
        'query_var' => true,
        'supports' => [ 'title', 'editor', 'thumbnail' ],
        'show_in_graphql' => true,
        'graphql_single_name' => $singular_name,
        'graphql_plural_name' => $plural_name,
        'menu_icon' => $menu_icon,
    ];

    register_post_type( $post_type_name, $args );

    if ($taxonomy1_name && $taxonomy1_singular_name && $taxonomy1_plural_name) {
        $taxonomy_args = [
            'label' => esc_html__( $taxonomy1_plural_name, 'twentytwentyone' ),
            'public' => true,
            'rewrite' => ['slug' => $taxonomy1_name],
            'hierarchical' => true,
            'show_in_rest' => true,
            'show_in_graphql' => true,
            'graphql_single_name' => $taxonomy1_singular_name,
            'graphql_plural_name' => $taxonomy1_plural_name,
        ];

        register_taxonomy( $taxonomy1_name, $post_type_name, $taxonomy_args );
    }

    if ($taxonomy2_name && $taxonomy2_singular_name && $taxonomy2_plural_name) {
        $taxonomy_args = [
            'label' => esc_html__( $taxonomy2_plural_name, 'twentytwentyone' ),
            'public' => true,
            'rewrite' => ['slug' => $taxonomy2_name],
            'hierarchical' => true,
            'show_in_rest' => true,
            'show_in_graphql' => true,
            'graphql_single_name' => $taxonomy2_singular_name,
            'graphql_plural_name' => $taxonomy2_plural_name,
        ];

        register_taxonomy( $taxonomy2_name, $post_type_name, $taxonomy_args );
    }
}

add_action( 'init', function() {
    register_custom_post_type('colleges', 'College', 'Colleges', '/students/what-we-offer/colleges', 'dashicons-bank');
    register_custom_post_type('program-areas', 'Program Area', 'Program Areas', '/students/what-we-offer/program-areas', 'dashicons-clipboard');
    register_custom_post_type('programs', 'Program', 'Programs', '/students/what-we-offer/programs', 'dashicons-book', 'program-areas', 'Program Area', 'Program Areas', 'colleges', 'College', 'Colleges');
    register_custom_post_type('annual-reports', 'Annual Report', 'Annual Reports', '/staff/policy-legal-support/annual-reports', 'dashicons-chart-bar');
    register_custom_post_type('numbered-memos', 'Numbered Memo', 'Numbered Memos', '/system-office/about/numbered-memos', 'dashicons-portfolio', 'numbered-memo-categories', 'Numbered Memo Category', 'Numbered Memo Categories');
    register_custom_post_type('staff', 'Staff', 'Staff', '/system-office/about/staff', 'dashicons-groups', 'organization', 'Organization', 'Organizations');
    register_custom_post_type('board-members', 'Board Member', 'Board Members', '/system-office/foundation/board-members', 'dashicons-groups', 'board-members-categories', 'Board Members Category', 'Board Members Categories');
    register_custom_post_type('events', 'Event', 'Events', '/events', 'dashicons-calendar-alt', 'events-categories', 'Event Category', 'Events Categories', 'events-tags', 'Event Tag', 'Events Tags');
    register_custom_post_type('news', 'News', 'News', '/news', 'dashicons-megaphone', 'news-categories', 'News Category', 'News Categories', 'news-tags', 'News Tag', 'News Tags');
    register_custom_post_type('board-meetings', 'Board Meeting', 'Board Meetings', '/system-office/foundation/board-meetings', 'dashicons-edit-page', 'board-meeting-categories', 'Board Meeting Category', 'Board Meeting Categories');
    register_custom_post_type('data-dashboards', 'Data Dashboard', 'Data Dashboards', '/system-office/resources/data-dashboards', 'dashicons-dashboard', 'data-dashboards-categories', 'Data Dashboard Category', 'Data Dashboards Categories');
    register_custom_post_type('apprenticeship-opp', 'Apprenticeship Opportunity', 'Apprenticeship Opportunities', '/students/what-we-offer/apprenticeships/apprenticeship-opportunities', 'dashicons-hammer', 'app-opp-program-areas', 'Apprenticeship Opportunity Program Area', 'Apprenticeship Opportunities Program Areas');
    // Add more post types here
});
?>