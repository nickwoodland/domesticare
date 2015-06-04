<?php
/**
 * SITE -> Custom Meta for Home Page
 */	
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function cmb_front_page_metaboxes( array $meta_boxes ) {
	
	$prefix = '_front_page_';
	$front_page_id = get_page_by_title( 'Front Page' )->ID;

	$meta_boxes[] = array(
		'id' => $prefix.'flip_blocks',
		'title' => 'Repeatable Flip Blocks',
		'pages' => array( 'page' ),
		'show_on' => array( 'id' => array( $front_page_id) ),
		'context' => 'normal',
		'priority' => 'default',
		'show_names' => true,
		'fields' => array(
			
			array( 
				'id'   			=> 'flip_blocks',  
				'type' 			=> 'group',
				'repeatable' 	=> true,
				'repeatable_max' => 8,
				'fields' 		=> array(
					
		            array(
						'name' 	=> 'Image',
						'id'	=> $prefix.'flip_image',
						'type'	=> 'image',
						'cols' 	=> 6,
		            ),
		            
		            array(
						'name' 	=> 'Hyperlink',
						'id'	=> $prefix.'flip_hyperlink',
						'type'    => 'text_url', 
						'cols' 	=> 6,
		            ),		
					
					array(
						'name' 	=> 'Text',
						'id'	=> $prefix.'flip_text',
						'type'    => 'text',
						'cols' 	=> 12,
					)
		            	
				),
			),
			
		),
	);	
	
	
	
    $meta_boxes[] = array(
		'id' => $prefix.'content_blocks',
		'title' => 'Repeatable Content Blocks',
		'pages' => array( 'page' ),
		'show_on' => array( 'id' => array( $front_page_id) ),
		'context' => 'normal',
		'priority' => 'default',
		'show_names' => true,
		'fields' => array(
			
			array( 
				'id'   			=> 'content_blocks',  
				'type' 			=> 'group',
				'repeatable' 	=> true,
				'fields' 		=> array(
					
		            array(
						'name' 	=> 'Image',
						'id'	=> $prefix.'image',
						'type'	=> 'image',
						'cols' 	=> 6,
		            ),
		            
		            array(
						'name' 	=> 'Hyperlink',
						'id'	=> $prefix.'hyperlink',
						'type'    => 'text_url', 
						'cols' 	=> 6,
		            ),		
					
					array(
						'name' 	=> 'Product Category',
						'id'	=> $prefix.'cat',
						'desc' => 'If you select a category, it will override the image and hyperlink options.',
						'type'    => 'taxonomy_select',
						'taxonomy' => 'product_cat', 
						'allow_none' => true,
						'cols' 	=> 12,
					)
		            	
				),
			),
			
		),
	);	
	
	return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'cmb_front_page_metaboxes' );