<?php /*
*    Template Name: Ипотека
*/
?>
<?php get_header(); ?>
    <div class="container inner ipoteka">
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('  &nbsp;&nbsp;/&nbsp;&nbsp; '); ?>
        <div class="title"><?php the_title(); ?></div>
        <?php the_content(); ?>
        <div class="page__ipoteka-banner">
            <div class="page__ipoteka-bannerText">
                <div class="page__ipoteka-bannerTextPercent">
                    <?php the_field( 'ipoteka_pr' ); ?>
                </div>
                <div class="page__ipoteka-bannerTextPercentLabel">
                    <?php the_field( 'ipoteka_st' ); ?>
                </div>
                <?php the_field( 'ipoteka_name' ); ?>
            </div>
        </div>
        <div class="page__ipoteka-terms">
            <?php if ( have_rows( 'ipoteka_rep' ) ) : ?>
            	<?php while ( have_rows( 'ipoteka_rep' ) ) : the_row(); ?>
            <div class="page__ipoteka-termsBox">
                <div class="page__ipoteka-termsValue">
                    <?php the_sub_field( 'ipoteka_text1' ); ?>
                </div>
                <div class="page__ipoteka-termsLabel">
                    <?php the_sub_field( 'ipoteka_text2' ); ?>
                </div>
            </div>
            	<?php endwhile; ?>
            <?php endif; ?>
            <div class="page__ipoteka-termsBox">
                <a href="##" class="bron3 ipoteka">
                    Рассчитать платеж
                </a>
                <div class="bron3_open"><div class="close">✗</div><?php echo do_shortcode('[contact-form-7 id="242" title="Рассчитать платёж"]') ?></div>
            </div>
        </div>
        <div class="page__ipoteka-contentTitle">
            <?php the_field( 'ipoteka_gal' ); ?>
        </div>
        <div class="page__ipoteka-content">
            <?php if ( have_rows( 'ipoteka_gal_rep' ) ) : ?>
            	<?php while ( have_rows( 'ipoteka_gal_rep' ) ) : the_row(); ?>
                    <div class="page__ipoteka-contentBox">
                        <?php the_sub_field( 'ipoteka_gal_rep_text' ); ?>
                    </div>
            	<?php endwhile; ?>
            <?php else : ?>
            	<?php // no rows found ?>
            <?php endif; ?>
        </div>
    </div>
<?php get_footer(); ?>