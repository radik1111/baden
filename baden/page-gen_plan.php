<?php /*
*    Template Name: Генплан
*/
?>
<?php get_header(); ?>
    <div class="container inner">
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('  &nbsp;&nbsp;/&nbsp;&nbsp; '); ?>
        <div class="title"><?php the_title(); ?></div>
        <?php the_content(); ?>
        <a href="<?php if ( get_field( 'genplan_link' ) ) : ?><?php the_field( 'genplan_link' ); ?><?php endif; ?>" class="genplan" download>Скачать генплан</a>
    </div>
<?php get_footer(); ?>