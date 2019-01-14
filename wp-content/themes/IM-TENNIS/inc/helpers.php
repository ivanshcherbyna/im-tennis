<?php
/* ---------- ADD ACTION BY SHOW USER ON FRONT-END HEADER----------------*/
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
add_action('my_show_user','get_user');
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
/* --------------------update minicart count with total price--------------------------*/
add_action('ProductSlider','getProductsSlider');
function getProductsSlider($query_products){
    if(is_array($query_products)): ?>
        <div class="card-deck slick-slider">
            <?php foreach($query_products as $item):
                $product = wc_get_product($item->ID);
                $product_name = $product->get_name();
                $price = $product->get_regular_price().' '. __('грн', THEME_OPT);
                ($product->get_sale_price()) ? $sale_price = $product->get_sale_price().' '. __('грн', THEME_OPT) : $sale_price = null ;
                $product_image = get_the_post_thumbnail_url($item->ID,'medium');
                $product_buy = $product->add_to_cart_url();
                $product_short_desc = $product->get_short_description();
                $tags =  get_the_terms( $item->ID, 'product_tag' );
                (is_object($tags[0]))? $tag = __($tags[0]->name, THEME_OPT) : $tag = null ;
                if ($tag == 'Хит' ) $tag_class = 'popular-product-label';
                elseif ($tag == 'Новинка' ) $tag_class = 'new-products-label';
                elseif ($tag == 'Акция' ) {
                    $tag_class = 'promotion-products-label';
                    $tag = round( ( $price - $sale_price ) / $price * 100 ).'%';
                }
                ?>
                <div class="card text-center ">
                    <a class='card-container-img' style='background-image: url(<?php echo $product_image ?>);'>
                    </a>
                    <div class="card-label <?php echo $tag_class ?>"><?php echo $tag ?></div>
                    <div class="card-body">
                        <a class="card-title mb-2"><?php echo $product_name ?></a>
                        <p class="card-text"><?php echo $product_short_desc ?></p>
                    </div>
                    <div class="card-footer">
                        <?php if (!$sale_price): ?>
                            <div class="price d-flex justify-content-center"><?php echo $price ?></div>
                        <?php else: ?>
                            <div class="price d-flex justify-content-center"><span class='text-success mr-3'><?php echo $sale_price ?></span><span class='price-secondary'><?php echo $price ?></span></div>
                        <?php endif; ?>
                        <a href="<?php echo $product_buy ?>" class="btn card-btn d-flex justify-content-center align-items-center"><?php _e('Купить', THEME_OPT) ?></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <a href="<?php echo get_permalink() ?>" class="products-more d-flex justify-content-center align-items-center"><?php _e('Смотреть все',THEME_OPT) ?></a>

    <?php
    endif;
}