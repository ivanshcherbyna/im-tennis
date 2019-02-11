<?php
if (have_posts()): while (have_posts()) : the_post();

            $product = wc_get_product(get_the_ID());
            $link = get_the_permalink($product);
            $product_name = $product->get_name();
            $price = $product->get_regular_price() . ' ' . __('грн', THEME_OPT);
            ($product->get_sale_price()) ? $sale_price = $product->get_sale_price() . ' ' . __('грн', THEME_OPT) : $sale_price = null;
            if (has_post_thumbnail()) $product_image = get_the_post_thumbnail_url(get_the_ID(), 'medium');
            $product_buy = $product->add_to_cart_url();
            $product_short_desc = $product->get_short_description();
            $tags = get_the_terms(get_the_ID(), 'product_tag');
            (is_object($tags[0])) ? $tag = __($tags[0]->name, THEME_OPT) : $tag = null;
            if ($tag == 'Хит') $tag_class = 'popular-product-label';
            elseif ($tag == 'Новинка') $tag_class = 'new-products-label';
            elseif ($tag == 'Под заказ') $tag_class = 'order-products-label';
            elseif ($tag == 'Акция') {
                $tag_class = 'promotion-products-label';
                $tag = round(($price - $sale_price) / $price * 100) . '%';
            }
            ?>
                <div class="card text-center ">
                    <a href="<?php echo $link ?>" class='card-container-img' style='background-image: url(<?php echo $product_image ?>);'>
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

<?php endwhile;?>


<?php endif; ?>


