<?php

global $mytheme, $post;
get_header();
?>
<div class="container">
    <?php echo get_template_part('templates/breadcrumb', null); ?>
    <h2 class="header-section"><?php _e('Раздел категории/метки', THEME_OPT); ?></h2>
    <section class="blog row">
        <div class='col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12 mx-auto'>
            <div class="blog-content row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 ">
                    <?php get_sidebar(); ?>
                </div>
                <div class='col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 '>
                    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    <div class="blog-item">
                        <h3 class="blog-header mb-3"><?php the_title() ?></h3>
                        <?php echo substr($post->post_content,0, 300); ?>
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt="" class=' w-100 mb-3'>
                        <a href="<?php the_permalink() ?>" class="content-link blog-link-next justify-content-end">читать полностью</a>

                    <?php endwhile; endif; ?>
                </div>

            </div>
        </div>
    </section>
</div>

<?php
get_footer();
?>
