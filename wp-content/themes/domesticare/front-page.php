<?php get_header(); ?>

<div class="row">
	<div class="small-12 columns landmark" role="main">

		<?php do_action( 'foundationpress_before_content' ); ?>



		<?php
		/**
		 * Repeatable Content Blocks
		 */	
		?>
		<?php /* $content_blocks = get_post_meta( $post->ID, 'content_blocks', false ); ?>
		
		<?php if(isset($content_blocks) && !empty($content_blocks)): ?>

			<?php $block_count = count($content_blocks); ?>
			<?php $i = 0; ?>

			<div class="row">
				<div class="columns small-12 medium-11 small-centered">
					<div class="row">
						<?php foreach( $content_blocks AS $block ) : ?>

							<?php $i++; ?>
							<div class="columns large-2 medium-4 small-6 <?php echo($block_count == $i ? 'end' : ''); ?>">
								<div class="cta-block landmark">
									<?php include locate_template( 'parts/cmb-repeatable-block.php' ); ?>
								</div>
							</div>
						<?php if($i % 6 == 0): ?>	
							</div>
							<div class="row">
						<?php endif; ?>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		<?php endif; */ ?>

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="landmark">
					<?php the_content(); ?>
				</div>



			<?php endwhile; ?>

		<?php endif; ?>

		<?php $image = get_post_thumbnail_id( $post->ID ); ?>
		    <?php if ( false != wp_get_attachment_image_src( $image ) ) : ?>
		    <a href="<?php the_permalink() ?>">
		    	<?php
		        $args = array(				
		        	'image' => $image,
		        	'settings' => array(
		                	
		    				array(
		    					'name' => 'default',
		    					'width' => 1200,
		    					'height' => 450,
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
		        
		        <img data-interchange="<?php echo implode( ',', $sets ); ?>">   
		    </a>
		<?php endif; ?>


		
		<?php do_action( 'foundationpress_after_content' ); ?>

	</div>
</div>
<?php get_footer(); ?>
