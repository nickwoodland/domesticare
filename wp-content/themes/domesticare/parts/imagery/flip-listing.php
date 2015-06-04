<?php if ( false != wp_get_attachment_image_src($img_id) ) : ?>
	<?php
    $args = array(				
    	'image' => $img_id,
    	'settings' => array(
            	
				array(
					'name' => 'small',
					'width' => 310,
					'height' => 155,
					'crop' => true,
					'resize' => true,
				),

				array(
					'name' => 'medium',
					'breakpoint' => 640,
					'width' => 260,
					'height' => 130,
					'crop' => true,
					'resize' => true,
				),
				
				array(
					'name' => 'large',
					'breakpoint' => 1025,
					'width' => 300,
					'height' => 150,
					'crop' => true,
					'resize' => true,
				),

			),
    );
    $ri = BC_Responsive_Images::get_instance(); 
    $image_data = $ri->image_data( $args );    
    ?>
        
    <?php foreach( $image_data['sized_imagery'] AS $break_name => $img_set ) : ?>    
    	<?php $sets[] = '['.$img_set['src'].', ('.$break_name.')]' ?>    
    <?php endforeach; ?>
    
    <img class="brand-block__img" data-interchange="<?php echo implode( ',', $sets ); ?>">
<?php endif; ?>