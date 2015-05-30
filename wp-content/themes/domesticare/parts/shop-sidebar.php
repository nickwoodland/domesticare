<?php get_product_search_form(); ?>

<?php $categories_term = get_term_by('slug', 'categories', 'product_cat'); ?> 
<?php $categories_term_id = $categories_term->term_id; ?>

<?php $args = array(
		'orderby' => 'name',
		'order' => 'ASC',
		'parent' => $categories_term_id,
		'hide_empty' => false,
	);
?>
<?php $product_categories = get_terms( 'product_cat', $args ); ?>

<h4>Product Categories</h4>
<ul>
	<?php foreach($product_categories as $cat): ?>

		<li>
			<a href="<?php echo get_term_link($cat); ?>"><?php echo $cat->name; ?></a>
		</li>

		<?php $term_children = get_term_children($cat->term_id, 'product_cat'); ?>

		<?php if(!empty($term_children)): ?>
			<ul class="child-terms">
				<?php foreach($term_children as $term_id): ?>
					<li>
						<?php $term_obj = get_term($term_id, 'product_cat'); ?>
						<a href="<?php echo get_term_link($term_obj); ?>">
							<?php echo $term_obj->name; ?>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>

	<?php endforeach; ?>
</ul>