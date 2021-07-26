<?php /*
*    Template Name: Онлайн трансляция
*/
?>
<?php get_header(); ?>
    <div class="container inner online">
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('  &nbsp;&nbsp;/&nbsp;&nbsp; '); ?>
        <div class="title"><?php the_title(); ?></div>
        <?php the_content(); ?>
        <!--СКРЫВАТЬ ТУТ НАЧАЛО

<style type="text/css">
	.containerFrame {
		  position: relative;
		  overflow: hidden;
		  width: 100%;
		  padding-top: 56.25%; /* 16:9 Aspect Ratio (divide 9 by 16 = 0.5625) */
	}

	/* Then style the iframe to fit in the container div with full height and width */
	.responsive-iframe {
	  position: absolute;
	  top: 0;
	  left: 0;
	  bottom: 0;
	  right: 0;
	  width: 100%;
	  height: 100%;
	}

</style>
                        <h3>Камера 1</h3>
                        <div class="iv-embed" style="margin:0 auto;padding:0;border:0;" data-iv="1">
                            <div class="iv-v " style="display:block;margin:0;padding:1px;border:0;background:#000;">
                            
                            	<div class="containerFrame">
                            		<iframe class="iv-i responsive-iframe" style="display:block;margin:0;padding:0;border:0;" src="https://open.ivideon.com/embed/v2/?server=100-6iwGftK2d1NcUvSK14nj0w&amp;camera=0&amp;width=&amp;height=&amp;lang=ru"  frameborder="0" allowfullscreen=""></iframe>
                            	</div>
                                
                            </div>
                            <div class="iv-b" style="display:block;margin:0;padding:0;border:0;">
                                <div style="float:right;text-align:right;padding:0 0 10px;line-height:10px;">
                                    <a class="iv-a" style="font:10px Verdana,sans-serif;color:inherit;opacity:.6;" href="https://www.ivideon.com/" target="_blank">Powered by Ivideon</a>
                                </div>
                                <div style="clear:both;height:0;overflow:hidden;">&nbsp;</div>
                                <script src="https://open.ivideon.com/embed/v2/embedded.js"></script>
                            </div>
                        </div>
					 
                        <h3>Камера 2</h3>
                        <div class="iv-embed" style="margin:0 auto;padding:0;border:0;" data-iv="1">
                            <div class="iv-v " style="display:block;margin:0;padding:1px;border:0;background:#000;">
                            
                            	<div class="containerFrame">
                            		<iframe class="iv-i responsive-iframe" style="display:block;margin:0;padding:0;border:0;" src="https://open.ivideon.com/embed/v2/?server=100-bVC3pPGzc3v3ccv1aU7M8a&amp;camera=0&amp;width=&amp;height=&amp;lang=ru"  frameborder="0" allowfullscreen=""></iframe>
                            	</div>
                                
                            </div>
                            <div class="iv-b" style="display:block;margin:0;padding:0;border:0;">
                                <div style="float:right;text-align:right;padding:0 0 10px;line-height:10px;">
                                    <a class="iv-a" style="font:10px Verdana,sans-serif;color:inherit;opacity:.6;" href="https://www.ivideon.com/" target="_blank">Powered by Ivideon</a>
                                </div>
                                <div style="clear:both;height:0;overflow:hidden;">&nbsp;</div>
                                <script src="https://open.ivideon.com/embed/v2/embedded.js"></script>
                            </div>
                        </div>
                     
                    </div>
                </div>
 
СКРЫВАТЬ ПОСЛЕ СТРОКИ!!! -->
    </div>
<?php get_footer(); ?>