<?php
$brands_term = get_term_by('slug', 'brands', 'product_cat'); 
$brands_term_id = $brands_term->term_id;

$args = array(
    'parent' => $brands_term_id,
    'hide_empty' => 'false'
); 

$brand_terms = get_terms('product_cat', $args);
?>

<?php if(!is_wp_error($brand_terms) && !empty($brand_terms)): ?>
    <?php foreach($brand_terms as $brand): ?>
        <div class="brand-block columns medium-3 small-6 landmark--half gutter--half card-container">
            <?php $brand_img_id = get_woocommerce_term_meta( $brand->term_id, 'thumbnail_id', true ); ?>
            <div class="card">
                <div class="front">
                    <a href="<?php echo get_term_link($brand); ?>">
                        <?php include(locate_template('parts/imagery/brand-listing.php')); ?>
                    </a>
                </div>
                <a href="<?php echo get_term_link($brand); ?>">
                    <div class="back">

                        <h2> <?php echo $brand->name; ?> </h2>
                       
                    </div>
                </a>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>