<?php $front_page_id = get_page_by_title( 'Front Page' )->ID; ?>
<?php $flippers = get_post_meta($front_page_id, 'flip_blocks', false); ?>

<?php if(!empty($flippers)): ?>

    <?php $i = 0;  ?>

    <?php foreach($flippers as $flipper): ?>
        
        <?php $filter_flipper = array_filter($flipper); ?>

        <?php if(!empty($filter_flipper)): ?>

            <?php $i ++; ?>

            <?php $prefix = '_front_page_flip_'; ?>
            <?php $img_id = $flipper[$prefix . 'image' ]; ?>
            <?php $flip_link = $flipper[$prefix . 'hyperlink' ]; ?>
            <?php $flip_text = $flipper[$prefix . 'text' ]; ?>

            <div class="brand-block columns medium-3 small-6 landmark--half gutter--half card-container">
                <div class="card">
                    <div class="front">
                        <a href="<?php echo $flip_link; ?>">
                            <?php include(locate_template('parts/imagery/flip-listing.php')); ?>
                        </a>
                    </div>
                    <a href="<?php echo $flip_link; ?>">
                        <div class="back">

                            <h2><?php echo $flip_text; ?></h2>
                           
                        </div>
                    </a>
                </div>
            </div>

        <?php endif; ?>
        
    <?php endforeach; ?>
<?php endif; ?>