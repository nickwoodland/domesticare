<div class="columns medium-12 text-center">
	<?php if ( has_nav_menu( 'primary' ) ) : 

		$args = array( 
			'theme_location' => 'primary', 
			'container' => 'nav', 
			'container_class' => '', 
			'menu_class' => 'inline-list visible-for-medium-up menu-primary--oncanvas', 
			'menu_id' => 'nav-primary', 
			'fallback_cb' => '',
			//'walker' => new bc_add_cpt_descendants_primary_menu_walker,
		);

		wp_nav_menu( $args ); 

	endif; ?>
</div>



