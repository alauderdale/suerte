<?php



if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
}


//main nav

register_nav_menu( 'main_nav', __( 'Main navigation menu', 'mytheme' ) );


//create post types

add_action( 'init', 'create_my_post_types' );

function create_my_post_types() {

	register_post_type( 'tequila',
		array(
			'labels' => array(
				'name' => __( 'Tequila Types' ),
				'singular_name' => __( 'Tequila Type' )
			),
			'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
			'public' => true,

		)
	);


}


?>
