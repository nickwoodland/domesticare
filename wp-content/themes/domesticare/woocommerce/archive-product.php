<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); ?>

<!-- Row for main content area -->
<div class="pad-wrapper">
	<div class="row">
		<div class="columns small-12 large-9 negative-offest-left">
			<div class="row">
				<div class="columns small-12 medium-9">
					<?php woocommerce_breadcrumb(); ?>
					<?php woocommerce_result_count(); ?>
				</div>
				<div class="columns small-12 medium-3">
					<?php woocommerce_catalog_ordering(); ?>
				</div>
			</div>
			<div class="product-list">
				<?php if ( have_posts() ) : ?>

					<?php woocommerce_product_subcategories(); ?>

					<section class="row" data-equalizer>
						<div class="columns small-12">
						<?php wc_print_notices(); ?>
						</div>

						<?php $post_count = count($posts); ?>
						<?php $i = 0; ?>
					
						<?php while ( have_posts() ) : the_post(); ?>
							<?php $i++; ?>
							<article class="columns xlarge-3 medium-4 small-6 landmark <?php echo($post_count == $i ? 'end' : ''); ?>"  data-equalizer-watch>	
								<?php include(locate_template('woocommerce/content-product.php')); ?>
							</article>
						<?php endwhile; // end of the loop. ?>

					</section>

				<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

						<?php wc_get_template( 'loop/no-products-found.php' ); ?>

				<?php endif; ?>
				<div class="landmark">
					<?php woocommerce_pagination(); ?>
				</div>
			</div>
		</div>

				<?php
			/**
			 * woocommerce_sidebar hook
			 *
			 * @hooked woocommerce_get_sidebar - 10
			 */
			do_action( 'woocommerce_sidebar' );
		?>


	</div>
</div>
<?php get_footer(); ?>
