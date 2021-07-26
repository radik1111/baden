        <footer>
            <div class="container">
                <div class="foot-col-1">
                    <?php if ( have_rows( 'rep_foot', 'option' ) ) : ?>
	                    <?php $cont=0; while ( have_rows( 'rep_foot', 'option' ) ) : the_row(); $cont++; ?>
                            <div class="adress<?php echo $cont ?>">
                                <div class="title"><?php the_sub_field( 'foot_office' ); ?></div>
                                <span><?php the_sub_field( 'foot_adress' ); ?></span>
                            </div>
	                    <?php endwhile; ?>
                    <?php else : ?>
                    	<?php // no rows found ?>
                    <?php endif; ?>
                    <div class="rejim">
                        <?php the_field( 'foot_rejim', 'option' ); ?>
                    </div>
                </div>
                <div class="foot-col-2">
                    <div class="social">
                        <a href="<?php the_field( 'social_foot_link_youtube', 'option' ); ?>" class="youtube">
                        </a>
                        <a href="<?php the_field( 'social_foot_link_insta', 'option' ); ?>" class="insta">
                        </a>
                        <a href="<?php the_field( 'social_foot_link_facebook', 'option' ); ?>" class="fb">
                        </a>
                        <a href="<?php the_field( 'social_foot_link_vk', 'option' ); ?>" class="vk">
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="info">
                        <a href="tel:<?php the_field( 'number', 'option' ); ?>"><?php the_field( 'number', 'option' ); ?></a>
                        <a href="mailto:<?php the_field( 'mail', 'option' ); ?>"><?php the_field( 'mail', 'option' ); ?></a>
                        <a href="<?php the_field( 'foot_zastroisika', 'option' ); ?>">Сайт застройщика</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <p><?php the_field( 'foot_obiev', 'option' ); ?></p>
            </div>
        </footer>
        <script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
        <?php if ( get_field( 'show_fade_call_me', 'option' ) == 1 ) : ?>
            <div class="call-me">
                <a href="##" class="bron1">Забронировать таунхаус</a>
                <div class="bron1_open"><div class="close">✗</div><?php echo do_shortcode("[contact-form-7 id='154' title='Забронировать таунхаус']") ?></div>
                <a href="##" class="bron2">Записаться на просмотр домов</a>
                <div class="bron2_open"><div class="close">✗</div><?php echo do_shortcode("[contact-form-7 id='155' title='Записаться на просмотр домов']") ?></div>
            </div>
            <div class="overlay"></div>
        <?php else : ?>
        <?php endif; ?>
        <?php wp_footer(); ?>
    </body> 
</html>