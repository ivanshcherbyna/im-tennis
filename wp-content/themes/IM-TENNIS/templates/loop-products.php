<?php  if (have_posts()): ?>

<div class="card-deck search-cards">
    <?php get_template_part('templates/products-view'); ?>
</div>
    <!-- add two empty blocks -->
    <div class="card card-empty text-center "></div>
    <div class="card card-empty text-center "></div>
<?php else: ?>
    <article>
        <h2><?php _e( 'Пардон, заданный товар не найден в поиске, попробуйте снова или перейдите в магазин', THEME_OPT ); ?></h2>
    </article>
<?php endif; ?>
