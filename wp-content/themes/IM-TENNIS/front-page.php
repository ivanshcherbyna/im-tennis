<?php
/*
 * Template Name: Home
 * Template Post Type: page
 */
global $mytheme, $post;

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

<?php get_footer();
