<?php
// Register Custom Post Type
function register_custom_post_types() {
	// /**
    //  * Post Type: Eventos
    //  */
    // $labels = array(
    //     'name'                => __( 'Eventos', 'acrefi-theme' ),
    //     'singular_name'       => __( 'Evento', 'acrefi-theme' ),
    //     'all_items'           => __( 'Todos os Eventos', 'acrefi-theme' ),
    //     'add_new'             => __( 'Adicionar Novo Evento', 'acrefi-theme' ),
    //     'add_new_item'        => __( 'Adicionar Novo Evento', 'acrefi-theme' ),
    // );
    // $rewrite = array(
    //     'slug'                => 'evento',
    //     'with_front'          => true
    // );
    // $args = array(
    //     'label'               => __( 'Evento', 'acrefi-theme' ),
    //     'labels'              => $labels,
    //     'description'         => '',
    //     'public'              => true,
    //     'publicly_queryable'  => true,
    //     'show_ui'             => true,
    //     'show_in_rest'        => false,
    //     'rest_base'           => '',
    //     'show_in_menu'        => true,
    //     'exclude_from_search' => false,
    //     'capability_type'     => 'post',
    //     'menu_position'       => 5,
    //     'map_meta_cap'        => true,
    //     'hierarchical'        => false,
    //     'rewrite'             => $rewrite,
    //     'query_var'           => true,
    //     'menu_icon'           => 'dashicons-calendar-alt',
    //     'supports'            => array( 'title', 'editor','thumbnail' ),
    // );
    // register_post_type( 'events', $args );

    // flush_rewrite_rules();

	/**
     * Post Type: Redes Sociais
     */
    $labels = array(
        'name'                => __( 'Redes Sociais', 'rgs-theme' ),
        'singular_name'       => __( 'Rede Social', 'rgs-theme' ),
        // 'all_items'           => __( 'Todos os Eventos', 'rgs-theme' ),
        'add_new'             => __( 'Adicionar uma Nova Rede Social', 'rgs-theme' ),
        'add_new_item'        => __( 'Adicionar uma Nova Rede Social', 'rgs-theme' ),
    );
    $rewrite = array(
        'slug'                => 'social_media',
        'with_front'          => true
    );
    $args = array(
        'label'               => __( 'Rede Social', 'rgs-theme' ),
        'labels'              => $labels,
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_rest'        => false,
        'rest_base'           => '',
        'show_in_menu'        => true,
        'exclude_from_search' => false,
        'capability_type'     => 'post',
        'menu_position'       => 5,
        'map_meta_cap'        => true,
        'hierarchical'        => false,
        'rewrite'             => $rewrite,
        'query_var'           => true,
        'menu_icon'           => 'dashicons-share',
        'supports'            => array( 'title', 'editor','thumbnail' ),
    );
    register_post_type( 'social_media', $args );

    flush_rewrite_rules();

    /**
     * Post Type: Menu 
     */
    $labels = array(
        'name'                => __( 'Menu', 'rgs-theme' ),
        'singular_name'       => __( 'Menu', 'rgs-theme' ),
        // 'all_items'           => __( 'Todos os Eventos', 'rgs-theme' ),
        'add_new'             => __( 'Adicionar um novo menu', 'rgs-theme' ),
        'add_new_item'        => __( 'Adicionar um novo item ao menu', 'rgs-theme' ),
    );
    $rewrite = array(
        'slug'                => 'menu',
        'with_front'          => true
    );
    $args = array(
        'label'               => __( 'Menu', 'rgs-theme' ),
        'labels'              => $labels,
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_rest'        => false,
        'rest_base'           => '',
        'show_in_menu'        => true,
        'exclude_from_search' => false,
        'capability_type'     => 'post',
        'menu_position'       => 5,
        'map_meta_cap'        => true,
        'hierarchical'        => false,
        'rewrite'             => $rewrite,
        'query_var'           => true,
        'menu_icon'           => 'dashicons-menu-alt3',
        'supports'            => array( 'title', 'editor','thumbnail' ),
    );
    register_post_type( 'menu', $args );

    flush_rewrite_rules();
}
add_action( 'init', 'register_custom_post_types' );