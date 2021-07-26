<?php /*
*    Template Name: Расположение
*/
?>
<?php get_header(); ?>
    <div class="container inner">
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('  &nbsp;&nbsp;/&nbsp;&nbsp; '); ?>
        <div class="title"><?php the_title(); ?></div>
        <?php the_content(); ?>
        <div class="page-location__list">
            <?php if ( have_rows( 'position_rep' ) ) : ?>
            	<?php while ( have_rows( 'position_rep' ) ) : the_row(); ?>
            <div class="page-location__item">
                <div class="page-location__icon">
                    <?php the_sub_field( 'position' ); ?>
                </div>
                <div class="page-location__text">
                    <?php the_sub_field( 'position_do' ); ?>
                </div>
            </div>
            	<?php endwhile; ?>
            <?php else : ?>
            	<?php // no rows found ?>
            <?php endif; ?>

        </div>
    </div>
<?php get_footer(); ?>