<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); ?>

<!-- Row for main content area -->
<div class="pad-wrapper">
	<div class="row">

		<div class="small-12 large-9 columns products-list negative-offest-left" role="main">

			<?php $block_count = count($term_children); ?>
			<?php $i = 0; ?>

			<?php foreach($term_children as $term_id) : ?>

				<?php $term_obj = get_term($term_id, 'product_cat'); ?>
				<?php $term_img_id = get_woocommerce_term_meta( $term_obj->term_id, 'thumbnail_id', true ); ?>
				<?php $i++; ?>

				<div class="columns medium-3 small-6 <?php echo($block_count == $i ? 'end' : ''); ?>">
					<div class="product-block landmark">
						<?php include(locate_template('parts/term-listing-block.php')); ?>
					</div>
				</div>	

			<?php endforeach; ?>

		</div>
		<?php
			/**
			 * woocommerce_sidebar hook
			 *
			 * @hooked woocommerce_get_sidebar - 10
			 */
			do_action( 'woocommerce_sidebar' );
		?>
		<?php // get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>