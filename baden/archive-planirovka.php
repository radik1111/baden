<?php get_header(); ?>
    <div class="container inner planirovki">
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('  &nbsp;&nbsp;/&nbsp;&nbsp; '); ?>

        <div class="planirovki-items">
        <?php
        if ( have_posts() ) : while (have_posts()) : the_post();
        $thumb_id = get_post_thumbnail_id();
        $thumb_url = wp_get_attachment_image_src($thumb_id, false);        
        ?>
            <div class="planirovki-item">
                <a href="<?php the_permalink(); ?>" class="planirovki-item-img" style="background-image: url(<?php  echo $thumb_url[0]; ?>);"></a>
                <div class="planirovki-dop-info">
                    <div>Площадь <span><?php the_field( 'planirovka_plosad' ); ?></span></div>
                    <div class="planirovki-border-right">Комнат <span><?php the_field( 'planirovka_rooms' ); ?></span></div>
                    <div>Этажей <span><?php the_field( 'planirovka_etash' ); ?></span></div>
                </div>
            </div>     
        <?php endwhile;  // завершаем цикл.
        endif;
        wp_reset_query();                
        ?>

        </div>
    </div>
<?php get_footer(); ?>