<?php get_header(); ?>

<div class="container">
    <?php echo get_template_part('templates/breadcrumb', null); ?>
    <h2 class="header-section"><?php _e('Результаты поиска', THEME_OPT) ?></h2>
    <section class="search-page row mb-5">
        <div class=' col-12 '>
            <span class='search-rezult'><?php printf(__('Найдено <span class=\'font-weight-bold\'> %d </span> товара</span>', THEME_OPT),  $wp_query->found_posts ); ?>
            <div class='d-flex justify-content-between align-items-center  mt-2 row'>
                <form class='header-search col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-4 search' method="get" action="<?php echo home_url(); ?>" role="search">
                    <div class="input-group search-input">
                        <input type="text" class="form-control search-input" id="searchInput" placeholder="<?php _e('Поиск',THEME_OPT); ?>" type="search" name="s" >
                        <input type="hidden" value="product" name="post_type">
                        <div class="input-group-append">
                            <div class="input-group-text"><button type="submit" role="button" class="icon-search" style="background: none; border: none;"></button></div>
                        </div>
                    </div>
                </form>
                <?php get_template_part( 'woocommerce/loop/orderby' ); ?>
<!--                <div class="form-group products-filter-select col-xl-3 col-lg-4 col-md-5 col-sm-12 col-12 mb-4">-->
<!--                    <select class="form-control " id="exampleFormControlSelect1">-->
<!--                        <option>Сначала недорогие</option>-->
<!--                        <option>2</option>-->
<!--                        <option>3</option>-->
<!--                        <option>4</option>-->
<!--                        <option>5</option>-->
<!--                    </select>-->
<!--                </div>-->
            </div>
            <div class="card-deck search-cards">
                <?php get_template_part('templates/loop-products'); ?>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
