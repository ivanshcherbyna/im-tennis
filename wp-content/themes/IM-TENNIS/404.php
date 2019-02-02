<?php get_header(); ?>
<?php
$linkHome = "<a href=". get_home_url() ." class='content-link d-inline'>". __('главную страницу', THEME_OPT) ."</a>";
$linkBack = "<a href='#back' class='content-link d-inline' onclick='window.history.back()'>". __('предыдущую страницу', THEME_OPT) ."</a>";
?>
<div class="container">
    <?php echo get_template_part('templates/breadcrumb', null); ?>
    <h2 class="header-section"><?php _e('страница не найдена', THEME_OPT) ?></h2>
    <div class='d-flex flex-column align-items-center not_found'>
        <div class='col-xl-3 col-lg-3 col-md-6 col-sm-8 col-10 p-0 mb-5'>
            <img src="<?php echo get_template_directory_uri(); ?>/inc/urich/img/404-image.png" alt="" class='w-100'>
        </div>
        <div class='col-xl-6 col-lg-6 col-md-8 col-sm-12 col-12 p-0 not_found-text'>
            <?php printf( __( 'Пардон, но страница не найдена. Попробуйте перейти на %s или вернуться на %s.', THEME_OPT),
                $linkHome, $linkBack) ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
