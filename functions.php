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
	
	register_post_type( 'recipie',
			array(
				'labels' => array(
					'name' => __( 'Drink Recipies' ),
					'singular_name' => __( 'Drink Recipie' )
				),
				'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
				'public' => true,
	
			)
		);
		
		register_post_type( 'media',
				array(
					'labels' => array(
						'name' => __( 'Photos & Videos' ),
						'singular_name' => __( 'media item' )
					),
					'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
					'public' => true,
		
				)
			);
			
			
		register_post_type( 'processslider',
				array(
					'labels' => array(
						'name' => __( 'Process Steps' ),
						'singular_name' => __( 'process step' )
					),
					'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
					'public' => true,
		
				)
			);
			
			register_post_type( 'person',
					array(
						'labels' => array(
							'name' => __( 'The people behind suerte' ),
							'singular_name' => __( 'person' )
						),
						'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
						'public' => true,
			
					)
				);
			
            
            register_post_type( 'storelocate',
            		array(
            			'labels' => array(
            				'name' => __( 'Store Locator Container' ),
            				'singular_name' => __( 'Store Locator Container' )
            			),
            			'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
            			'public' => true,
            
            		)
            	);
}

///custom categories

 function my_custom_taxonomies() {
 	register_taxonomy(
 		'recipiedrink',		// internal name = machine-readable taxonomy name
 		'recipie',		// object type = post, page, link, or custom post-type
 		array(
 			'hierarchical' => true,
 			'label' => 'recipie tequilla',	// the human-readable taxonomy name
 			'query_var' => true,	// enable taxonomy-specific querying
 			'rewrite' => array( 'slug' => '?recipie=' ),	// pretty permalinks for your taxonomy?
 		)
 	);
 	
 	register_taxonomy(
 		'mediatype',		// internal name = machine-readable taxonomy name
 		'media',		// object type = post, page, link, or custom post-type
 		array(
 			'hierarchical' => true,
 			'label' => 'media type',	// the human-readable taxonomy name
 			'query_var' => true,	// enable taxonomy-specific querying
 			'rewrite' => array( 'slug' => '?media=' ),	// pretty permalinks for your taxonomy?
 		)
 	);
 }

 add_action('init', 'my_custom_taxonomies', 0);
 
 
 
 
 // Add the recipie category select Box
 
 
 
 function add_custom_meta_box($postType) {
   $types = array( 'tequila' );
   if(in_array($postType, $types)){
     add_meta_box(
     'custom_meta_box', // $id
     'Recipie Tequilla', // $title 
     'show_custom_meta_box', // $callback
     $postType, // $page
     'normal', // $context
     'high'); // $priority
   }
 }
 
 add_action('add_meta_boxes', 'add_custom_meta_box');
 
 
 // Field Array
 $prefix = 'custom_';
 $custom_meta_fields = array(
   array(
     'label'=> 'Recipie Tequilla',
     'desc'  => 'Enter the recipie tequilla slug you would like to pull in for this tequilla',
     'id'  => $prefix.'text',
     'type'  => 'text'
   ) ,
   
   array(
     'label'=> 'Title Color',
     'desc'  => 'Enter the hex color here ex: #000000',
     'id'  => $prefix.'text2',
     'type'  => 'text'
   )
 
 );
 
 // The Callback
 function show_custom_meta_box() {
 global $custom_meta_fields, $post;
 // Use nonce for verification
 echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';
   
   // Begin the field table and loop
   echo '<table class="form-table">';
   foreach ($custom_meta_fields as $field) {
     // get value of this field if it exists for this post
     $meta = get_post_meta($post->ID, $field['id'], true);
     // begin a table row with
     echo '<tr>
         <th><label for="'.$field['id'].'">'.$field['label'].'</label></th>
         <td>';
         switch($field['type']) { 
           // text
           case 'text':
             echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" />
               <br /><span class="description">'.$field['desc'].'</span>';
           break;
         } //end switch
     echo '</td></tr>';
   } // end foreach
   echo '</table>'; // end table
 }
 
 // Save the Data
 function save_custom_meta($post_id) {
     global $custom_meta_fields;
   
   // verify nonce
   if (!wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__))) 
     return $post_id;
   // check autosave
   if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
     return $post_id;
   // check permissions
   if ('page' == $_POST['post_type']) {
     if (!current_user_can('edit_page', $post_id))
       return $post_id;
     } elseif (!current_user_can('edit_post', $post_id)) {
       return $post_id;
   }
   
   // loop through fields and save the data
   foreach ($custom_meta_fields as $field) {
     $old = get_post_meta($post_id, $field['id'], true);
     $new = $_POST[$field['id']];
     if ($new && $new != $old) {
       update_post_meta($post_id, $field['id'], $new);
     } elseif ('' == $new && $old) {
       delete_post_meta($post_id, $field['id'], $old);
     }
   } // end foreach
 }
 add_action('save_post', 'save_custom_meta');  

?>
