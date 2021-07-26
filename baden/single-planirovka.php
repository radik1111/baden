<?php get_header(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/zoom.js"></script>
    <div class="container inner single-planirovka">
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('  &nbsp;&nbsp;/&nbsp;&nbsp; '); ?>
        
        <div class="tabs-plan">
            <div class="tab active" id="tab-plan-wrapper1">Экстерьер</div> 
            <div class="tab" id="tab-plan-wrapper2">Интерьер</div>
            <div class="tab" id="tab-plan-wrapper3">Планировка</div>
        </div>
        <div class="planirovka-items">
            <div class="planirovka-item tab-plan tab-plan-wrapper1 active">
                <?php $thumb_id = get_post_thumbnail_id();
                $thumb_url = wp_get_attachment_image_src($thumb_id,'Требуемый_thumbnail-size', false);
                ?>
                <div class="planirovka-item-img" style="background-image: url(<?php echo $thumb_url[0]; ?>);"></div>               
            </div>
            <div class="planirovka-item tab-plan tab-plan-wrapper2">
            <?php if ( have_rows( 'planirovka_interier_rep' ) ) : ?>
	            <?php while ( have_rows( 'planirovka_interier_rep' ) ) : the_row(); ?>
	        	    <?php if ( have_rows( 'planirovka_interier__tab_img_rep' ) ) : ?>
	        	    	<?php $interier_img; while ( have_rows( 'planirovka_interier__tab_img_rep' ) ) : the_row();  $interier_img++; ?>
	                    <div class="tab-plan-wrapper2-img interier<?php echo $interier_img; ?> <?php if( $interier_img == 1 ){ echo 'active'; } ?>">
                            <div class="planirovki-slider">
	        	    		<?php if ( have_rows( 'planirovka_interier__tab_image' ) ) : ?>
        		    			<?php while ( have_rows( 'planirovka_interier__tab_image' ) ) : the_row(); ?>
	        	    				<?php if ( get_sub_field( 'planirovka_interier__tab_image_rep' ) ) : ?>
	        	    					<img src="<?php the_sub_field( 'planirovka_interier__tab_image_rep' ); ?>" class="planirovki-item-img" />
	        	    				<?php endif ?>
	        	    			<?php endwhile; ?>
	        	    		<?php endif; ?>
	        	            </div>
                        </div>
	        	    	<?php endwhile; ?>
	        	    <?php endif; ?>
	            <?php endwhile; ?>
            <?php endif; ?>

                <div class="button-interier">
                <?php if ( have_rows( 'planirovka_interier_rep' ) ) : ?>
                	<?php while ( have_rows( 'planirovka_interier_rep' ) ) : the_row(); ?>
                		<?php if ( have_rows( 'planirovka_interier__tabs_rep' ) ) : ?>
                			<?php $interier; while ( have_rows( 'planirovka_interier__tabs_rep' ) ) : the_row(); $interier++; ?>
                            <div class="button-interier-item <?php if( $interier == 1 ){ echo 'active'; } ?>" id="interier<?php echo $interier ?>"><?php the_sub_field( 'planirovka_interier_tab' ); ?></div>
                			<?php endwhile; ?>
                		<?php else : ?>
                			<?php // no rows found ?>
                		<?php endif; ?>
                	<?php endwhile; ?>
                <?php endif; ?>
                </div>
            </div>
            <div class="planirovka-item tab-plan tab-plan-wrapper3">
    <?php if ( have_rows( 'planirovka_etachi' ) ) : ?>
    <script>
    jQuery(function($){
        $( '.detail-view' ).each(function(index) {
            var ind = index + 1;
            magnify( "myimage" + ind + "", 3);
        });
    });
    </script>
    	<?php while ( have_rows( 'planirovka_etachi' ) ) : the_row(); ?>
		    <?php if ( have_rows( 'planirovka_etach_image' ) ) : ?>
		    	<?php $etash; while ( have_rows( 'planirovka_etach_image' ) ) : the_row(); $etash++; ?>
		    		<div class="tab-plan-wrapper3-img etach<?php echo $etash; ?> <?php if( $etash == 1 ){ echo 'active'; } ?>">
                        <div class="img-magnifier-container">
                            <img class="planirovka-item-img detail-view" id="myimage<?php echo $etash; ?>" src="<?php the_sub_field( 'planirovka_etach_image_rep' ); ?>" />
                        </div>
                    </div>
		    	<?php endwhile; ?>
		    <?php else : ?>
		    	<?php // no rows found ?>
		    <?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>
                <div class="button-etach">
                <?php if ( have_rows( 'planirovka_etachi' ) ) : ?>
                	<?php while ( have_rows( 'planirovka_etachi' ) ) : the_row(); ?>
                		<?php if ( have_rows( 'planirovka_etach_rep' ) ) : ?>
                			<?php $button_etash; while ( have_rows( 'planirovka_etach_rep' ) ) : the_row(); $button_etash++; ?>
                				<div class="button-etach-item <?php if( $button_etash == 1 ){ echo 'active'; } ?>" id="etach<?php echo $button_etash ?>"><?php the_sub_field( 'planirovka_etach_text' ); ?></div>
                			<?php endwhile; ?>
                		<?php else : ?>
                			<?php // no rows found ?>
                		<?php endif; ?>
                	<?php endwhile; ?>
                <?php endif; ?>
                </div>
            </div>
            <div class="planirovka-item">
                <div class="dopinfo">
                    <div class="dopinfo-item">
                        <img src="/wp-content/themes/baden/images/cub.png" alt="">
                        <?php the_field( 'planirovka_plosad' ); ?>
                    </div>
                    <div class="dopinfo-item">
                        <img src="/wp-content/themes/baden/images/plitka1.png" alt="">
                        <?php the_field( 'planirovka_wall' ); ?>
                    </div>
                    <div class="dopinfo-item">
                        <img src="/wp-content/themes/baden/images/divan.png" alt="">
                        <?php the_field( 'planirovka_bed' ); ?>
                    </div>
                </div>
                <?php if ( have_rows( 'planirovka_info_rep' ) ) : ?>
                	<?php while ( have_rows( 'planirovka_info_rep' ) ) : the_row(); ?>
                        <ul>
                		    <div class="sub-title"><?php the_sub_field( 'planirovka_info_zag' ); ?></div>
                		<?php if ( have_rows( 'planirovka_info_zag_rep' ) ) : ?>
                			<?php while ( have_rows( 'planirovka_info_zag_rep' ) ) : the_row(); ?>
                            <li><div><?php the_sub_field( 'planirovka_info_subzag' ); ?></div><div><?php the_sub_field( 'planirovka_info_desc' ); ?></div></li>
                			<?php endwhile; ?>
                		<?php else : ?>
                			<?php // no rows found ?>
                		<?php endif; ?>
                        </ul>
                	<?php endwhile; ?>
                <?php else : ?>
                	<?php // no rows found ?>
                <?php endif; ?>

            </div>
        </div>

        <p>
            <?php the_content(); ?>
        </p>
        <div class="consulting">
            <?php echo do_shortcode('[contact-form-7 id="460" title="Консультация"]'); ?>
        </div>
        <div class="clearfix"></div>
        <div class="other-planirovki">
            <div class="title">Другие планировки</div>

            <div class="planirovki-items">
                <div class="other-planirovki-slider">
                <?php
                $query = new WP_Query( array(
                    'post_type' => 'planirovka',
                    'orderby' => 'date',
                    'order' => 'ASC',
                    'post_parent' => 0,
                    'post__not_in' => array($post->ID)

                )  );
                if( $query->have_posts() ){
                    while( $query->have_posts() ){
                        $query->the_post();
                    ?>
                    <div>
                        <div class="planirovki-item">
                            <a href="<?php the_permalink(); ?>" class="planirovki-item-img" style="background-image: url(<?php  echo $thumb_url[0]; ?>);"></a>
                            <div class="planirovki-dop-info">
                                <div>Площадь <span><?php the_field( 'planirovka_plosad' ); ?></span></div>
                                <div class="planirovki-border-right">Комнат <span><?php the_field( 'planirovka_rooms' ); ?></span></div>
                                <div>Этажей <span><?php the_field( 'planirovka_etash' ); ?></span></div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                wp_reset_postdata(); // сбрасываем переменную $post
            }
            ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>