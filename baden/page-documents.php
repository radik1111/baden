<?php /*
*    Template Name: Документы
*/
?>
<?php get_header(); ?>
    <div class="container inner">
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('  &nbsp;&nbsp;/&nbsp;&nbsp; '); ?>
        <div class="title"><?php the_title(); ?></div>
        <?php the_content(); ?>
        <div class="docs__blocks">
            <?php if ( have_rows( 'document_rep' ) ) : ?>
            	<?php while ( have_rows( 'document_rep' ) ) : the_row(); ?>
            <div class="docs__blockItem">
                <div class="docs__blockTitle">
                    <?php the_sub_field( 'document_zag' ); ?>
                </div>
            		<?php if ( have_rows( 'document_item_zag' ) ) : ?>
            			<?php while ( have_rows( 'document_item_zag' ) ) : the_row(); ?>
                            <div class="docs__item">
                                <div class="docs__description">
                                    <?php the_sub_field( 'document_item_datadesc' ); ?>
                                </div>
            				<?php if ( get_sub_field( 'document_item_file' ) ) : ?>
                                                                            
                                <a class="docs__file" href="<?php the_sub_field( 'document_item_file' ); ?>" download="">      
                                    <img class="docs__icon" src="http://badenold-nn.ru/wp-content/uploads/2020/09/google-docs.png">                                                              
                                    Посмотреть документ
                                </a>

            				<?php endif; ?>
                            </div>
            			<?php endwhile; ?>
            		<?php else : ?>
            			<?php // no rows found ?>
            		<?php endif; ?>
            </div>
            	<?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
<?php get_footer(); ?>