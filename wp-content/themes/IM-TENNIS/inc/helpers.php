<?php
/* ---------- ADD ACTION BY SHOW USER ON FRONT-END HEADER----------------*/
add_action('my_show_user','get_user');
function get_user(){
    $user_id = get_current_user_id();
    if (!empty($user_id)) {
        $user = get_user_by('ID', $user_id);
        $username = $user->display_name;
        $all_meta_for_user = get_user_meta($user_id);
        echo $username;
    }
    else _e('Войти',THEME_OPT);
}
/* ---------- ADD ACTION BY SHOW USER ON FRONT-END HEADER----------------*/

/* --------------------update minicart count with total price --------------------------*/
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );
function woocommerce_header_add_to_cart_fragment( $fragments ) {
    ob_start();
    ?>
    <a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf (_n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a>
    <?php
    $fragments['span.items-count'] = ob_get_clean();
    return $fragments;
}
/* --------------------product slider--------------------------*/
add_action('ProductSlider','getProductsSlider');
function getProductsSlider($query_products){
    if(is_array($query_products)): ?>

        <div class="card-deck slick-slider">
          <?php  get_template_part('templates/products-view')?>
        </div>
        <a href="<?php echo home_url()?>/shop/" class="products-more d-flex justify-content-center align-items-center"><?php _e('Смотреть все',THEME_OPT) ?></a>

    <?php
    endif;
}
add_action ('get_tags','get_blog_tags');

function get_blog_tags()
{
    $args = array(
        'number'       => 0,
        'offset'       => 0,
        'orderby'      => 'id',
        'order'        => 'ASC',
        'hide_empty'   => false,
        'fields'       => 'all',
        'slug'         => '',
        'hierarchical' => true,
        'name__like'   => '',
        'pad_counts'   => false,
        'get'          => '',
        'child_of'     => 0,
        'parent'       => '',
    );

    $tags = get_terms( 'post_tag', $args );
    $html = '<div class="blog-list">';
    $html .= '<h3 class="blog-header mb-3">'.__('Теги', THEME_OPT).'</h3>';
    if ($tags) {
        $html .= "<ul>";
        foreach ($tags as $tag) {
            $tag_link = get_tag_link($tag->term_id);
            $html .= "<li class='blog-link-item'><a href='{$tag_link}' title='{$tag->name} Tag' class='content-link'>";
            $html .= "{$tag->name}</a></li>";
        }
        $html .= '</ul>';
        $html .= '</div>';
        echo $html;
    }
}

add_action ('get_cats','get_blog_cats');

function get_blog_cats()
{
    $args = array(
        'number'       => 0,
        'offset'       => 0,
        'orderby'      => 'id',
        'order'        => 'ASC',
        'hide_empty'   => false,
        'fields'       => 'all',
        'slug'         => '',
        'hierarchical' => true,
        'name__like'   => '',
        'pad_counts'   => false,
        'get'          => '',
        'child_of'     => 0,
        'parent'       => '',
    );

    $cats = get_terms( 'category', $args );
    $html = '<div class="blog-list">';
    $html .= '<h3 class="blog-header mb-3">'.__('Категории', THEME_OPT).'</h3>';
    if ($cats) {
        $html .= "<ul>";
        foreach ($cats as $cat) {
            $cat_link = get_tag_link($cat->term_id);
            $html .= "<li class='blog-link-item'><a href='{$cat_link}' title='{$cat->name} Tag' class='content-link'>";
            $html .= "{$cat->name}</a></li>";
        }
        $html .= '</ul>';
        $html .= '</div>';
        echo $html;
    }
}
add_action ('get_last_posts','get_blog_last_posts');

function get_blog_last_posts()
{
    $args = array(
        'numberposts' => 5,
        'category'    => 0,
        'orderby'     => 'date',
        'order'       => 'DESC',
        'include'     => array(),
        'exclude'     => array(),
        'meta_key'    => '',
        'meta_value'  =>'',
        'post_type'   => 'post',
        'suppress_filters' => true,
    );

    $posts = get_posts(  $args );
    $html = '<div class="blog-list">';
    $html .= '<h3 class="blog-header mb-3">'.__('Последние записи', THEME_OPT).'</h3>';
    if ($posts) {
        $html .= "<ul>";
        foreach ($posts as $post) {
            $post_link = get_the_permalink($post->ID);
            $html .= "<li class='blog-link-item'><a href='{$post_link}' title='{$post->name} Tag' class='content-link'>";
            $html .= "{$post->post_title}</a></li>";
        }
        $html .= '</ul>';
        $html .= '</div>';
        echo $html;

    }
    wp_reset_postdata();
}


