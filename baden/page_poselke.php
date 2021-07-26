<?php /*
*    Template Name: О поселке
*/
?>
<?php get_header(); ?>
    <div class="container inner poselok">
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('  &nbsp;&nbsp;/&nbsp;&nbsp; '); ?>

        <?php the_content(); ?>
        
    </div>
<?php get_footer(); ?>