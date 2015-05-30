<?php get_header(); ?>

<?php $page_meta = get_post_meta($post->ID); ?>

<?php
$hero_img = ($page_meta['_banner_image'][0] != '' ? $page_meta['_banner_image'][0] : false);
$content = ($page_meta['_banner_banner_text'][0] != '' ? $page_meta['_banner_banner_text'][0] : false);
$strapline = ($page_meta['_banner_strapline_text'][0] != '' ? $page_meta['_banner_strapline_text'][0] : false);
?>

<?php if(false != $hero_img && wp_get_attachment_image_src($hero_img)): ?>
	<div class="hero-banner__wrapper landmark show-for-large-up">

		<?php include(locate_template('parts/hero-banner.php')); ?>

	</div>
<?php endif; ?>

<div class="pad-wrapper">
	<div class="row">
		<div class="small-12" role="main">

		<?php do_action( 'foundationpress_before_content' ); ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<header>
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>
				<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
				<div class="row">
					<div class="columns medium-6">
						<?php include(locate_template('parts/vcard.php')); ?>
					</div>
					<div class="columns medium-6">
						<section class="contact__form">
							<?php  gravity_form( 'Contact', $display_title = false, $display_description = true, $display_inactive = false, $field_values = null, $ajax = false); ?>
						</section>
					</div>
				</div>
				<div class="row entry-content landmark">
					<?php wpautop(the_content()); ?>
				</div>
				<footer>
					<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
					<p><?php the_tags(); ?></p>
				</footer>
				<?php do_action( 'foundationpress_page_before_comments' ); ?>
				<?php comments_template(); ?>
				<?php do_action( 'foundationpress_page_after_comments' ); ?>
			</article>
		<?php endwhile;?>

		<?php do_action( 'foundationpress_after_content' ); ?>

		</div>
	</div>
</div>

<iframe class="gmap--embed" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2498.6346323165053!2d-2.3213780000000117!3d51.225806000000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaa0d2aa78bc80ca2!2sDomesticare!5e0!3m2!1sen!2s!4v1433018384371" width="100%" height="350" frameborder="0" style="border:0"></iframe>

<?php get_footer(); ?>
