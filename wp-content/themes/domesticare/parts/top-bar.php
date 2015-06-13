<?php $tel = of_get_option( 'contact_telephone' ); ?>
<?php $email = of_get_option( 'contact_email' ); ?>

<div class="show-for-large-up" data-equalizer>
    <nav class="header" data-topbar role="navigation">
        <section class="row collapse landmark--half">
            <div class="columns medium-3 header--leftcol" data-equalizer-watch>
                <?php if("" != $tel && false != $tel): ?>
                    <span>Tel: <a href="tel:<?php echo $tel; ?>"><?php echo $tel; ?></a></span>
                <?php endif; ?>
            </div>
            <div class="columns medium-6 text-center site-title" data-equalizer-watch>
                <div class="title__wrap">
                    <h1><a href="<?php echo home_url(); ?>" class=""><?php bloginfo( 'name' ); ?></a></h1>
                </div>
                <h2><a href="<?php echo home_url(); ?>" class=""><?php bloginfo( 'description' ); ?></a></h2>
            </div>
            <div class="columns medium-3 header--rightcol" data-equalizer-watch>
                <?php if("" != $email && false != $email): ?>
                    <span><a href="mailto:<?php echo antispambot($email); ?>">Email us </a></span>
                <?php endif; ?>
            </div>
        </section>
        <section class="row collapse">
           <?php get_template_part( 'parts/primary-nav' ); ?>
        </section>
    </nav>
</div>
