<?php get_header(); ?>
    <div class="container inner">
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('  &nbsp;&nbsp;/&nbsp;&nbsp; '); ?>
        <div class="title"><?php the_title(); ?></div>
        <?php the_content(); ?>
    </div>
<?php get_footer(); ?>