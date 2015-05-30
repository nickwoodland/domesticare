<?php if( false != $block['_front_page_cat'] ) : ?>

	<?php $term_obj = get_term($block['_front_page_cat'], 'product_cat'); ?>

	<?php $term_img_id = get_woocommerce_term_meta( $term_obj->term_id, 'thumbnail_id', true ); ?>

	<?php include(locate_template('parts/term-listing-block.php')); ?>

<?php else : ?>

	<?php if( false != $block['_front_page_image'] ) : ?>
		<div class="cta-block landmark">
			<a href="<?php echo $block['_front_page_hyperlink']; ?>">
				<?php if ( false != wp_get_attachment_image_src( $block['_front_page_image'] ) ) : ?>
					<?php
				    $args = array(				
				    	'image' => $block['_front_page_image'],
				    	'settings' => array(
				            	
							array(
								'name' => 'small',
								'width' => 288,
								'height' => 324,
								'crop' => true,
								'resize' => true,
							),

							array(
								'name' => 'medium',
								'breakpoint' => 640,
								'width' => 267,
								'height' => 300,
								'crop' => true,
								'resize' => true,
							),
							
							array(
								'name' => 'large',
								'breakpoint' => 1025,
								'width' => 184,
								'height' => 208,
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
			</a>
		</div>
	<?php endif; ?>

<?php endif; ?>