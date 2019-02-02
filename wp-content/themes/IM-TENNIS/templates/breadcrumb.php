<?php
/*
 * Breadcrumb template loop
 */
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <?php if (is_404()): ?>

            <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>/shop/"><?php _e('Магазин', THEME_OPT) ?></a></li>
            <li class="breadcrumb-item active" aria-current="page">404</li>

        <?php elseif (is_search()): ?>

        <?php elseif (is_account_page() || is_page_template('registration-page.php')): ?>

            <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>/shop/"><?php _e('Магазин', THEME_OPT) ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php _e('Войти в кабинет', THEME_OPT) ?></li>

        <?php elseif (is_search()): ?>

            <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>/shop/"><?php _e('Магазин', THEME_OPT) ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php _e('Результаты поиска', THEME_OPT) ?></li>

        <?php elseif (is_single()): ?>

            <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>/shop/"><?php _e('Магазин', THEME_OPT) ?></a></li>
            <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>/blog/"><?php _e('Блог', THEME_OPT) ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>

        <?php else: ?>

            <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>/shop/"><?php _e('Магазин', THEME_OPT) ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>

        <?php endif; ?>
    </ol>
</nav>

