<?php
/*
 * Template Name: Home
 * Template Post Type: page
 */
global $mytheme, $post;
query_posts(array('post_type' => 'product', 'posts_per_page' => 9));

get_header();
?>

    <div class='container '>
        <section class="banner" style="background: url(<?php echo $mytheme['banner-img-background']['url']?>) no-repeat;">
            <div class="banner-content ">
                <h1 class="banner-content-header"><?php echo $mytheme['banner-content-header']?></h1>
                <h2 class="banner-content-text"><?php echo $mytheme['banner-content-text']?></h2>
            </div>
            <a href="<?php echo $mytheme['banner-btn-link'] ?>" class="btn-banner"><?php echo $mytheme['banner-btn-text'] ?></a>
        </section>
    </div>
<?php $best_sell_products_query = query_posts([
        'post_type' => 'product',
        'post_status' => 'publish',
        'ignore_sticky_posts' => 1,
        'posts_per_page' => '10',
        'columns' => '4',
        'meta_key' => 'total_sales',
        'orderby' => 'meta_value_num',
        'meta_query' => WC()->query->get_meta_query(),
        'product_tag' => 'Хит'
]);

if ($best_sell_products_query): ?>
    <div class="container">
        <section class="popular-products category-product">

            <h2 class="header-section"><?php _e('Самые популярные', THEME_OPT) ?></h2>
            <?php echo do_action('ProductSlider',$best_sell_products_query); ?>

        </section>
    </div>
<?php endif; ?>
<?php $stock_products_query = query_posts([
    'post_type' => 'product',
    'post_status' => 'publish',
    'ignore_sticky_posts' => 1,
    'posts_per_page' => '10',
    'columns' => '4',
    'meta_key' => 'total_sales',
    'orderby' => 'meta_value_num',
    'meta_query' => WC()->query->get_meta_query(),
    'product_tag' => 'Акция'
]); ?>
<?php if ($stock_products_query): ?>
    <section class="promotion ">
    <div class="container">
        <div class="promotion-products category-product">

            <h2 class="header-section"><?php _e('Акции', THEME_OPT) ?></h2>
            <?php echo do_action('ProductSlider',$stock_products_query); ?>

        </div>
    </div>
    </section>
<?php endif; ?>
<?php $new_products_query = query_posts([
    'post_type' => 'product',
    'post_status' => 'publish',
    'ignore_sticky_posts' => 1,
    'posts_per_page' => '10',
    'columns' => '4',
    'meta_key' => 'total_sales',
    'meta_query' => WC()->query->get_meta_query(),
    'limit' => 10,
    'orderby' => 'date',
    'order' => 'DESC',
    'product_tag' => 'Новинка'
]); ?>
<?php if ($new_products_query): ?>
    <div class="container">
    <section class="new-products category-product">
        <h2 class="header-section"><?php _e('Новинки', THEME_OPT) ?></h2>
        <?php echo do_action('ProductSlider',$new_products_query); ?>
    </section>
    </div>
<?php endif; ?>
<?php get_footer();
