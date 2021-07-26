<!DOCTYPE html>
<html>
    <head>
        <title><?php echo bloginfo(); ?></title>
    
        <meta charset="utf-8">
        <meta description="<?php bloginfo('description'); ?>">
        
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/ibmplexsans.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/slick.css">        
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
        
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <?php wp_head(); ?>
    </head>
    <body>
        <header style="<?php if(! is_front_page()){echo 'position:relative;'; ?>">
            <a href="/" class="logo">
                <img src="<?php echo get_theme_mod( 'title_tagline_logo2' ); ?>" alt="">
            </a>
            <?php } else { ?>
            <a href="/" class="logo">
                <?php
                    $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); 
                ?>
	           <img src="<?php echo $custom_logo__url[0]; ?>" alt="">
            </a>
            <?php } ?>
            <div class="burger">
                <div style="<?php if(! is_front_page()){echo 'background-color: #C69B51';} ?>"></div>
                <div style="<?php if(! is_front_page()){echo 'background-color: #C69B51';} ?>"></div>
            </div>
            <div class="menu">
                <div class="cl-btn-2">
                    <div>
                        <div class="leftright"></div>
                        <div class="rightleft"></div>
                    </div>
                </div>
                <?php wp_nav_menu( [ 
                    'theme_location'  => 'menu',
                    'container' => false,
                    'items_wrap'      => '<ul id="%1$s" class="%2$s sub-menu">%3$s</ul>',
                    'menu_class'      => null
                    ] );
                ?>
                <div class="info">
                    <a href="tel:<?php the_field( 'number', 'option' ); ?>"><?php the_field( 'number', 'option' ); ?></a>
                    <a href="mailto:<?php the_field( 'mail', 'option' ); ?>"><?php the_field( 'mail', 'option' ); ?></a>
                </div>
            </div>
        </header>
        <?php if (is_front_page()){ ?>
        <div class="block-1">
            <div class="container">
                <div>
                    <div class="block-1-title"><?php the_field( 'zag_main', 'option' ); ?></div>
                    <div class="block-1-desc"><?php the_field( 'desc_main', 'option' ); ?></div>
                    <a href="##" id="scrollBtn"> Подробнее
                        <svg width="16" height="19" viewBox="0 0 16 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.2501 11.8913L8.88612 18.2552C8.49559 18.6458 7.86243 18.6458 7.4719 18.2552L1.10794 11.8913C0.717415 11.5008 0.717415 10.8676 1.10794 10.4771C1.49847 10.0865 2.13163 10.0865 2.52215 10.4771L7.17901 15.1339L7.17901 0.39795L9.17901 0.397949L9.17901 15.1339L13.8359 10.4771C14.2264 10.0865 14.8596 10.0865 15.2501 10.4771C15.6406 10.8676 15.6406 11.5008 15.2501 11.8913Z" fill="white"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <?php } ?>