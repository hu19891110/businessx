<?php
/* ------------------------------------------------------------------------- *
 *	Page heading template					
/* ------------------------------------------------------------------------- */
?>

<header id="top-header-<?php the_ID(); ?>" class="grid-wrap page-heading heading-full-width clearfix"<?php businessx_sp_parallax(); ?>>
	<div class="grid-overlay"></div>
    <?php do_action( 'businessx_phfw__inner_top' ); ?>
	<div class="sec-hs-elements ta-center">
    	<?php do_action( 'businessx_phfw__heading_top' ); ?>
    	<h2 class="hs-primary-large"><?php the_title(); ?></h2>
        <?php do_action( 'businessx_phfw__heading_bottom' ); ?>
    </div>
    <?php do_action( 'businessx_phfw__inner_bottom' ); ?>
</header>

<?php do_action( 'businessx_phfw__after' ); ?>