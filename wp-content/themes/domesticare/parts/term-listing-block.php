<a href="<?php echo get_term_link($term_obj); ?>">
	<?php if ( false != wp_get_attachment_image_src($term_img_id) ) : ?>
		<?php
	    $args = array(				
	    	'image' => $term_img_id,
	    	'settings' => array(
	            	
				array(
					'name' => 'small',
					'width' => 288,
					'height' => 292,
					'crop' => true,
					'resize' => true,
				),

				array(
					'name' => 'medium',
					'breakpoint' => 640,
					'width' => 267,
					'height' => 252,
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
	    
	    <img class="" data-interchange="<?php echo implode( ',', $sets ); ?>">
	<?php endif; ?>


	<div class="cta-block__text pad--half">
		<?php echo $term_obj->name; ?>
	</div>
</a>