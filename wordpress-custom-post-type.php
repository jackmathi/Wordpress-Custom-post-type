<?php
  //// Wordpress Custom Post code  Kok-India Mathivanan Marimuthu /////
/*
 * Add Kok Post 
 */
function kok_custom_post_types() {
  $types = array(

    // KoK
    array('type'          => 'post type',
          'typePlural'    => 'post type',
          'labelSingle'   => 'Post type',
          'labelPlural'   => 'Post type'
      )
  );
  // This foreach loops the $types array and creates labels and arguments for each Costom post type
  foreach ($types as $type) {

    $typeSingle = $type['type'];
    $typePlural = $type['typePlural'];
    $labelSingle = $type['labelSingle'];
    $labelPlural = $type['labelPlural'];
    // These strings will be displayed in the Vedic Cosmos admin panel
    $labels = array(
      'name'               => _x( $labelPlural, ' post type general name' ),
      'singular_name'      => _x( $labelSingle, ' post type singular name' ),
      'add_new'            => _x( 'Add-New ', $labelSingle ),
      'add_new_item'       => __( 'Add '. $labelSingle ),
      'edit_item'          => __( 'Edit-page '. $labelSingle ),
      'new_item'           => __( 'New '. $labelSingle ),
      'all_items'          => __( 'All '. $labelPlural ),
      'view_item'          => __( 'view '. $labelSingle ),
      'search_items'       => __( 'search-page '. $labelPlural ),
      'not_found'          => __( 'Not-found-page '. $labelSingle .' not-found' ),
      'not_found_in_trash' => __( 'Not-found-trash-page '. $labelSingle .' Not-found-tras' ),
      'parent_item_colon'  => '',
      'menu_name'          => __( $labelPlural ),
    );
    // Arguments (some settings, to learn more see WordPress docs)
    $args = array(
      'labels'        => $labels,
      'description'   => 'Kok our products and product specific data',
      'public'        => true,
      'supports'      => array( 'title', 'author', 'editor', 'thumbnail', 'excerpt', 'comments', 'page-attributes' ),
      'taxonomies'          => array( 'category', 'post_tag' ),
      'has_archive'         => false,
      'hierarchical'        => false,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => 5,
      'menu_icon'           => 'dashicons-admin-site',
      'can_export'          => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'rewrite'             => true, // default
     // 'menu_icon'     => get_template_directory_uri().'/assets/img/cpt-'.$typeSingle.'.png'
    );
    // KoK India can registers the post types
    register_post_type( $typeSingle, $args );
  } // end foreach
}
add_action( 'init', 'kok_custom_post_types' );

              //////Wordpress Custom post type - Code ////////
?>