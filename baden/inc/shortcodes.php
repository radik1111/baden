<?php

    function block_o_proekte() {
        $output     = "";
        ob_start();
    ?>
    <div class="block-2">
        <div class="container">
            <div class="block-2-col">
                <div class="title"><?php the_field( 'block1_zag' ); ?></div>
                <div class="desc">
                    <div>
                        <?php the_field( 'block1_desc' ); ?>
                    </div>
                    <a href="<?php the_field( 'block1_link' ); ?>" download>Скачать презентацию</a>
                </div>
            </div>
            <?php if ( get_field( 'block1_img' ) ) : ?>
            <div class="block-2-col">
                <img src="<?php the_field( 'block1_img' ); ?>" />
            </div>
            <?php endif ?>
        </div>
    </div>
    <?php 
        $output = ob_get_contents();
	    ob_end_clean();
	    return $output;
    }
    add_shortcode('o_proekte', 'block_o_proekte'); 

    function block_preimyshestva() {
        $output     = "";
	    ob_start();
	?>
    <div class="block-3">
        <div class="title"><?php the_field( 'block2_zag' ); ?></div>
        <div class="container">
            <?php if ( have_rows( 'block2_rep' ) ) : ?>
            	<?php while ( have_rows( 'block2_rep' ) ) : the_row(); ?>
            <figure>
            	<?php if ( get_sub_field( 'block2_img' ) ) : ?>
            		<img src="<?php the_sub_field( 'block2_img' ); ?>" />
            	<?php endif ?>
                <figcaption><?php the_sub_field( 'block2_text' ); ?></figcaption>
            </figure>
            	<?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <?php
        $output = ob_get_contents();
	    ob_end_clean();
	    return $output;
    }
    add_shortcode('preimyshestva', 'block_preimyshestva');

    function block_tab() {
        $output     = "";
	    ob_start();
    ?>
    <div class="block-4">
        <div class="container">
            <div class="tabs-toggle">
                <?php if ( have_rows( 'tabs_rep' ) ) : ?>
                	<?php $tab; while ( have_rows( 'tabs_rep' ) ) : the_row(); $tab++; ?>
                        <div class="tab <?php if($tab == 1){ echo active; } ?>" id="tab<?php echo $tab ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/yakor.svg" alt=""><?php the_sub_field( 'tabs_name' ); ?></div>
                	<?php endwhile; ?>
                <?php else : ?>
                	<?php // no rows found ?>
                <?php endif; ?> 
            </div>
            <?php if ( have_rows( 'tab_text_rep' ) ) : ?>
            	<?php $tab_text; while ( have_rows( 'tab_text_rep' ) ) : the_row(); $tab_text++; ?>
                    <div class="tab-wrapper tab<?php echo $tab_text ?> <?php if($tab_text == 1){ echo active; } ?>">
                        <?php the_sub_field( 'tab_text' ); ?>
                    </div>
            	<?php endwhile; ?>
            <?php else : ?>
            	<?php // no rows found ?>
            <?php endif; ?>

        </div>
    </div>    
    <?php
        $output = ob_get_contents();
	    ob_end_clean();
	    return $output;
    }
    add_shortcode('tabs', 'block_tab');    
    
    function block_kypit() {
        $output     = "";
	    ob_start();
    ?>
    <div class="block-5">
        <div class="container">
            <div class="block-5-col">
                <?php if ( get_field( 'buy_img' ) ) : ?>
                	<img src="<?php the_field( 'buy_img' ); ?>" />
                <?php endif ?>
            </div>
            <div class="block-5-col">
                <div class="title"><?php the_field( 'buy_zag' ); ?></div>
                <div class="text">
                    <?php if ( have_rows( 'buy_rep' ) ) : ?>
                    	<?php while ( have_rows( 'buy_rep' ) ) : the_row(); ?>
                    		<?php if ( get_sub_field( 'buy_iconka' ) ) : ?>
                            <div>
                                <img src="<?php the_sub_field( 'buy_iconka' ); ?>" />
                    		<?php endif ?>
                    		    <div><?php the_sub_field( 'buy_text' ); ?></div>
                            </div>
                    	<?php endwhile; ?>
                    <?php else : ?>
                    	<?php // no rows found ?>
                    <?php endif; ?>
                </div>
                <a href="" class="button">Получить консультацию</a>
            </div>
        </div>
    </div>   
    <?php
        $output = ob_get_contents();
	    ob_end_clean();
	    return $output;
    }
    add_shortcode('kypit', 'block_kypit');
    
    function block_video() {
        $output     = "";
	    ob_start();
    ?>
    <div class="block-6">
        <div class="container">
            <div class="title"><?php the_field( 'block-6_title' ); ?></div>
        </div>
        <video id="myvideo">
            <?php if ( get_field( 'block-6_file' ) ) : ?>
                <source src="<?php the_field( 'block-6_file' ); ?>" type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"' />
            <?php endif; ?>
        </video>
        <div id="controls">
            <span id="playpause"><img src="<?php echo get_template_directory_uri(); ?>/images/play.png" alt=""></span>
        </div>
        <div id="progress">
            <div id="total">
                <div id="buffered"><div id="current"></div></div>
            </div>
        </div>
    </div>    
    <?php
        $output = ob_get_contents();
	    ob_end_clean();
	    return $output;
    }
    add_shortcode('video', 'block_video');
    
    function block_nashi_doma() {
        $output     = "";
	    ob_start();
    ?>
    <div class="block-7">
        <div class="title"><?php the_field( 'block-7_title' ); ?></div>
        <div class="container">
            <?php if ( get_field( 'block-7_img' ) ) : ?>
	            <img src="<?php echo get_template_directory_uri(); ?>/images/our-home.png" alt="">
            <?php endif ?>
            <div class="block-7-inner">
                <?php if ( have_rows( 'block-7_rep' ) ) : ?>
                	<?php while ( have_rows( 'block-7_rep' ) ) : the_row(); ?>
                        <div class="block-7-inner-item">
                		<?php if ( get_sub_field( 'block-7_icon' ) ) : ?>
                			<img src="<?php the_sub_field( 'block-7_icon' ); ?>" />
                		<?php endif ?>
                        <div class="text">
                            <?php the_sub_field( 'block-7_text' ); ?>
                        </div>
            </div>
                	<?php endwhile; ?>
                <?php else : ?>
                	<?php // no rows found ?>
                <?php endif; ?>

            </div>
        </div>
    </div>   
    <?php
        $output = ob_get_contents();
	    ob_end_clean();
	    return $output;
    }
    add_shortcode('nashi_doma', 'block_nashi_doma');
    
    function block_generalnii_plan() {
        $output     = "";
	    ob_start();
    ?>
    <div class="block-8" style="background-image: url( '<?php if ( get_field( 'block-8_img' ) ) : ?><?php the_field( 'block-8_img' ); ?><?php endif ?>' );">
        <div class="container">
            <div class="title">
                <?php the_field( 'block-8_title' ); ?>
            </div>
        </div>
    </div>
    <?php
        $output = ob_get_contents();
	    ob_end_clean();
	    return $output;
    }
    add_shortcode('generalnii_plan', 'block_generalnii_plan');

    function block_cf7_1() {
        $output     = "";
	    ob_start();
    ?>    
    <div class="block-9" style="background-image: url('/wp-content/uploads/2021/04/dog.png')">
        <div class="container">
            <div class="title">Записаться на просмотр</div>
            <?php echo do_shortcode('[contact-form-7 id="123" title="Записаться на просмотр"]'); ?>
        </div>
    </div>
    <?php
        $output = ob_get_contents();
	    ob_end_clean();
	    return $output;
    }
    add_shortcode('cf7_1', 'block_cf7_1');

    function block_gallery() {
        $output     = "";
	    ob_start();
    ?>    
    <div class="block-10">
        <ul class="slickslide">
            <?php if ( have_rows( 'galery_img_rep' ) ) : ?>
            	<?php while ( have_rows( 'galery_img_rep' ) ) : the_row(); ?>
                <li>
                    <img src="<?php the_sub_field( 'galery_img' ); ?>"  title="img" alt="img" />
                </li>
            	<?php endwhile; ?>
            <?php endif; ?>
        </ul>
        <div class="slick-thumbs">
            <ul>
            <?php if ( have_rows( 'galery_img_rep' ) ) : ?>
            	<?php while ( have_rows( 'galery_img_rep' ) ) : the_row(); ?>
                <li>
                    <img src="<?php the_sub_field( 'galery_img' ); ?>" />
                </li>
            	<?php endwhile; ?>
            <?php endif; ?>
            </ul>
        </div>
    </div>
    <?php
        $output = ob_get_contents();
	    ob_end_clean();
	    return $output;
    }
    add_shortcode('gallery', 'block_gallery');
    
    function block_info_stroy() {
        $output     = "";
	    ob_start();
    ?>    
    <div class="block-11">
        <div class="container">
            <div class="block-2-col">
                <div class="title"><?php the_field( 'info_stroy_zag' ); ?></div>
                <div class="desc">
                    <div>
                        <?php the_field( 'info_stroy_desc' ); ?>
                    </div>
                    <a href="<?php the_field( 'info_stroy_link' ); ?>" download>Наши награды</a>
                </div>
            </div>
            <div class="block-2-col">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo_euro.png" alt="">
            </div>
        </div>
    </div>
    <?php
        $output = ob_get_contents();
	    ob_end_clean();
	    return $output;
    }
    add_shortcode('info_stroy', 'block_info_stroy');
    
    function block_cf7_2() {
        $output     = "";
	    ob_start();
    ?>    
    <div class="block-12" style="background-image: url('/wp-content/uploads/2021/04/zayavkafin.png')">
        <div class="container">
            <div class="title">Оставить заявку</div>
            <div class="desc">Остались вопросы?<br />Мы готовы ответить на них!</div>
            <?php echo do_shortcode('[contact-form-7 id="126" title="Оставить заявку"]'); ?>
        </div>
    </div>
    <?php
        $output = ob_get_contents();
	    ob_end_clean();
	    return $output;
    }
    add_shortcode('cf7_2', 'block_cf7_2');

    function poselok_main_func() {
        $output     = "";
	    ob_start();
    ?>    
        <div class="poselok-block-1">
            <div class="title"><?php the_title(); ?></div>
            <p>
                <?php the_field( 'poselok_main_desc' ); ?>
            </p>
            <?php if ( get_field( 'poselok_main_img' ) ) : ?>
            	<img src="<?php the_field( 'poselok_main_img' ); ?>" alt="" />
            <?php endif ?>
        </div>        
    <?php
        $output = ob_get_contents();
	    ob_end_clean();
	    return $output;
    }
    add_shortcode('poselok_main', 'poselok_main_func');
    
    function poselok_blocks( $atts ) {
        shortcode_atts(
          array(
            'block'  => '',
          ), $atts
        );
        ob_start();
        $i="";

        if ( have_rows( 'o_poselke_rep' ) ) : ?>
        	<?php while ( have_rows( 'o_poselke_rep' ) ) : the_row(); $i++;
        	    if( $atts['block'] == $i ){ ?>
        <div class="poselok-block-2">
            <div class="poselok-block-2-sub <?php if ( get_sub_field( 'o_poselke_desc_full' ) == 1 ) : echo "width"; endif; ?> <?php if ( get_sub_field( 'o_poselke_icons_yes' ) == 1 ){ echo "pad"; } ?>">
                <div class="title"><?php the_sub_field( 'o_poselke_zag' ); ?></div>
                <p>
                    <?php the_sub_field( 'o_poselke_desc_main' ); ?>
                </p>
            </div>
		    <?php if ( get_sub_field( 'o_poselke_change' ) == 1 ) : ?>
		    <img src="<?php the_sub_field( 'o_poselke_icons_img' ); ?>" class="<?php if ( get_sub_field( 'o_poselke_change' ) == 1 ) : echo "changed"; endif; ?>"/>
            <div class="poselok-block-2-items <?php if ( get_sub_field( 'o_poselke_info_one' ) == 1 ) { echo 'fouricons'; } ?> <?php if ( get_sub_field( 'o_poselke_change' ) == 1 ) : echo "changedi"; endif; ?>">
        		<?php if ( have_rows( 'o_poselke_icons_rep' ) ) : ?>
        			<?php while ( have_rows( 'o_poselke_icons_rep' ) ) : the_row(); ?>
                <div class="poselok-block-2-item">
                    <div>
        				<?php if ( get_sub_field( 'o_poselke_icon' ) ) : ?>
        					<img src="<?php the_sub_field( 'o_poselke_icon' ); ?>" />
        				<?php endif ?>
                    </div>
                    <?php the_sub_field( 'o_poselke_desc' ); ?>
                </div>
        			<?php endwhile; ?>
        		<?php else : ?>
        			<?php // no rows found ?>
        		<?php endif; ?>
            </div>
		    <?php else : ?>
            <?php if ( get_sub_field( 'o_poselke_icons_yes' ) == 0 ) : ?>
            <div class="poselok-block-2-items">
        		<?php if ( have_rows( 'o_poselke_icons_rep' ) ) : ?>
        			<?php while ( have_rows( 'o_poselke_icons_rep' ) ) : the_row(); ?>
                <div class="poselok-block-2-item">
                    <div>
        				<?php if ( get_sub_field( 'o_poselke_icon' ) ) : ?>
        					<img src="<?php the_sub_field( 'o_poselke_icon' ); ?>" />
        				<?php endif ?>
                    </div>
                    <?php the_sub_field( 'o_poselke_desc' ); ?>
                </div>
        			<?php endwhile; ?>
        		<?php else : ?>
        			<?php // no rows found ?>
        		<?php endif; ?>
            </div>
            <?php endif; ?>
		    <img src="<?php the_sub_field( 'o_poselke_icons_img' ); ?>" />
		    <?php endif; ?>
		    <?php if ( get_sub_field( 'o_poselke_info_one' ) == 1 ) { $onecolumn = 'onecolumn'; } ?>
		    <?php if ( get_sub_field( 'o_poselke_info_no' ) == 1 ) : ?>
		    <?php if ( have_rows( 'o_poselke_info' ) ) : ?>
            <div class="poselok-info <?php echo $onecolumn ?>"  >
		    	<?php while ( have_rows( 'o_poselke_info' ) ) : the_row(); ?>

                    <div class="poselok-info_item">
		    		<?php if ( get_sub_field( 'o_poselke_info_img' ) ) : ?>
                        <div style="background-image:url('<?php the_sub_field( 'o_poselke_info_img' ); ?>')" class="poselok-info_item-img"></div>
		    		<?php endif ?>

                        <div class="poselok-info_item-zag"><?php the_sub_field( 'o_poselke_info_zag' ); ?></div>
		    		<?php if ( have_rows( 'o_poselke_info_desc_rep' ) ) : ?>
                        <ul>
		    		    	<?php
		    		    	    while ( have_rows( 'o_poselke_info_desc_rep' ) ) : the_row();
		    		    	?>
		    		    	    <li><?php the_sub_field( 'o_poselke_info_desc' ); ?></li>
		    		    	<?php endwhile; ?>
                        </ul>
		    		<?php else : ?>
		    			<?php // no rows found ?>
		    		<?php endif; ?>

                    </div>
		    	<?php endwhile; ?>
            </div>
		    <?php else : ?>
		    	<?php // no rows found ?>
		    <?php endif; ?>             
		    <?php endif; ?>
        </div>
		<?php if ( get_sub_field( 'o_poselke_gallery' ) == 1 ) : ?>
        <div class="gallery">
            <ul class="gallery-slick">
		    <?php if ( have_rows( 'o_poselke_gallery_rep' ) ) : ?>
		    	<?php while ( have_rows( 'o_poselke_gallery_rep' ) ) : the_row(); ?>
		    		<?php if ( get_sub_field( 'o_poselke_gallery_img' ) ) : ?>
                    <li>
                        <img src="<?php the_sub_field( 'o_poselke_gallery_img' ); ?>"  title="img" alt="img" />
                    </li>
		    		<?php endif ?>
		    	<?php endwhile; ?>
		    <?php endif; ?>
            </ul>
            <div class="slick-thumbs">
                <ul>
		    <?php if ( have_rows( 'o_poselke_gallery_rep' ) ) : ?>
		    	<?php while ( have_rows( 'o_poselke_gallery_rep' ) ) : the_row(); ?>
		    		<?php if ( get_sub_field( 'o_poselke_gallery_img' ) ) : ?>
                    <li>
                        <img src="<?php the_sub_field( 'o_poselke_gallery_img' ); ?>"  title="img" alt="img" />
                    </li>
		    		<?php endif ?>
		    	<?php endwhile; ?>
		    <?php endif; ?>
                </ul>
            </div>            
        </div>
		<?php endif; ?>

        	<?php } endwhile; ?>
        <?php else : ?>
        	<?php // no rows found ?>
        <?php endif; ?>                
            <?php
        
        return ob_get_clean();
    }
    add_shortcode( 'poselok', 'poselok_blocks' );
    
?>