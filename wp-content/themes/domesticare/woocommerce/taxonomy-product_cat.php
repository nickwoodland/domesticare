<?php
/**
 * The Template for displaying products in a product category. Simply includes the archive template.
 *
 * Override this template by copying it to yourtheme/woocommerce/taxonomy-product_cat.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$term_id = get_queried_object_id();

$term_children = get_term_children($term_id, 'product_cat');

if(!empty($term_children)):

	include(locate_template('woocommerce/archive-child-terms.php'));

else :

	include(locate_template('woocommerce/archive-product.php'));

endif;