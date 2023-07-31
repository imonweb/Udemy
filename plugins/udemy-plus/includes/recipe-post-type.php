<?php 


function up_recipe_post_type(){
  $labels = array(
		'name'                  => _x( 'Recipes', 'Post type general name', 'udemy_plus' ),
		'singular_name'         => _x( 'Recipe', 'Post type singular name', 'udemy_plus' ),
		'menu_name'             => _x( 'Recipes', 'Admin Menu text', 'udemy_plus' ),
		'name_admin_bar'        => _x( 'Recipe', 'Add New on Toolbar', 'udemy_plus' ),
		'add_new'               => __( 'Add New', 'udemy_plus' ),
		'add_new_item'          => __( 'Add New Recipe', 'udemy_plus' ),
		'new_item'              => __( 'New Recipe', 'udemy_plus' ),
		'edit_item'             => __( 'Edit Recipe', 'udemy_plus' ),
		'view_item'             => __( 'View Recipe', 'udemy_plus' ),
		'all_items'             => __( 'All Recipes', 'udemy_plus' ),
		'search_items'          => __( 'Search Recipes', 'udemy_plus' ),
		'parent_item_colon'     => __( 'Parent Recipes:', 'udemy_plus' ),
		'not_found'             => __( 'No Recipes found.', 'udemy_plus' ),
		'not_found_in_trash'    => __( 'No Recipes found in Trash.', 'udemy_plus' ),
		'featured_image'        => _x( 'Recipe Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'udemy_plus' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'udemy_plus' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'udemy_plus' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'udemy_plus' ),
		'archives'              => _x( 'Recipe archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'udemy_plus' ),
		'insert_into_item'      => _x( 'Insert into Recipe', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'udemy_plus' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Recipe', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'udemy_plus' ),
		'filter_items_list'     => _x( 'Filter Recipes list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'udemy_plus' ),
		'items_list_navigation' => _x( 'Recipes list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'udemy_plus' ),
		'items_list'            => _x( 'Recipes list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'udemy_plus' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'recipe' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 20,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields'),
    // enable gutenberg blocks
    'show_in_rest'       => true,
    'description'        => __('A custom post type for recipes', 'udemy-plus'),
    // enable categories and tags
    'taxonomies'         => ['category', 'post_tag']
	);

	register_post_type( 'recipe', $args );

  register_taxonomy('cuisine', 'recipe', [
    'label'         => __('Cuisine', 'udemy-plus'),
    'rewrite'       => ['slug' => 'cuisine'],
    'show_in_rest'  => true
  ]);

  // Registering Term Meta
  register_term_meta('cuisine', 'more_info_url', [
    'type' => 'string',
    'description' => __('A URL for more information on a cuisine', 'udemy-plus'),
    'single' => true,
    'show_in_rest' => true,
    'default' => '#'
  ]);

  // Registering Post Metadata - add the "custom-fields" support for post-type
  register_post_meta( 'recipe', 'recipe_rating', [
    'type'  =>  'number',
    'description' => __('The rating for a recipe', 'udemy-plus'),
    'single'  =>  true,
    'default' =>  0,
    'show_in_rest'  => true
  ] );
}