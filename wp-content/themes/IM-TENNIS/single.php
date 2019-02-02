<?php get_header(); ?>

<div class="container">
    <?php echo get_template_part('templates/breadcrumb', null); ?>
	<!-- section -->
    <h2 class="header-section"><?php _e('БЛОГ', THEME_OPT); ?></h2>
	<section class="blog_article row">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12 mx-auto">
            <h3 class="blog-header mb-3"><?php the_title(); ?></h3>

        <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>

                <?php the_post_thumbnail('full', array('alt' => '', 'class' => ' w-100 mb-4')); // Fullsize image for the single post ?>

        <?php endif; ?>
		<!-- article -->
		<div id="post-<?php the_ID();?>" <?php post_class(); ?> >

			<?php the_content(); // Dynamic Content ?>

		</div>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', THEME_OPT ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
</div>

<?php get_footer(); ?>
