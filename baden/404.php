<?php get_header(); ?>
    <div class="container inner mistake">
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('  &nbsp;&nbsp;/&nbsp;&nbsp; '); ?>
        <div class="title">Страница не найдена</div>
        <p class="h3">К сожалению, запрошенной вами страницы не существует на сайте. Это могло произойти по нескольким причинам:</p>
        <ul>
            <li>Возможно страница была удалена</li>
            <li>Вы перешли по неверной ссылке</li>
            <li>Адрес был введен c ошибкой</li>
        </ul>
        <p>Вы можете перейти на <a href="/">главную страницу</a> или попробовать найти искомую информацию вручную.</p>
    </div>
<?php get_footer(); ?>