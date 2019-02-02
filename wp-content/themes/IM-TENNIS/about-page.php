<?php
/**
 * Template Name: About
 *
 *
 */
get_header(); ?>

<div class="container">
    <?php echo get_template_part('templates/breadcrumb', null); ?>

    <h2 class="header-section"><?php the_title(); ?></h2>
    <section class="about mb-5">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <img src="<?php the_post_thumbnail_url(array(350,255)) ?>" alt="" class='about-img mr-4 mb-3 w-100'>

		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php the_content(); ?>

		</div>

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h2><?php _e( 'Sorry, nothing to display.', THEME_OPT ); ?></h2>

		</article>
		<!-- /article -->

	<?php endif; ?>
    </section>
</div>
	<!-- /section -->

<?php get_footer(); ?>
