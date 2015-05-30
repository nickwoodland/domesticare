</section>
<?php do_action( 'foundationpress_before_footer' ); ?>
<footer class="pad">
	<div class="row">
		<div class="columns medium-3 small-6">	
			<?php include(locate_template('parts/vcard.php')); ?>
		</div>
		<div class="columns medium-3 small-6">
		<div class="row">
			<div class="columns small-12 medium-6">
				<?php if( is_active_sidebar( 'footer-menu-1'  )): ?>
					<?php dynamic_sidebar( 'footer-menu-1' ); ?>
				<?php endif; ?>
			</div>
			<div class="columns small-12 medium-6">
				<?php if( is_active_sidebar( 'footer-menu-2'  )): ?>
					<?php dynamic_sidebar( 'footer-menu-2' ); ?>
				<?php endif; ?>
			</div>
		</div>

		</div>
		<div class="columns medium-3 small-6">
			<?php if( is_active_sidebar( 'footer-opening'  )): ?>
				<?php dynamic_sidebar( 'footer-opening' ); ?>
			<?php endif; ?>
		</div>
		<div class="columns medium-3 small-6">
			<h6>Follow Us</h6>
		</div>
	</div>
</footer>
<?php do_action( 'foundationpress_after_footer' ); ?>
<a class="exit-off-canvas"></a>

	<?php do_action( 'foundationpress_layout_end' ); ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
