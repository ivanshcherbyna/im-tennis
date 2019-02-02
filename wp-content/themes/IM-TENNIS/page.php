<?php get_header(); ?>

<div class="container">
    <?php echo get_template_part('templates/breadcrumb', null); ?>

    <h2 class="header-section"><?php the_title(); ?></h2>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php the_content(); ?>

			<?php comments_template( '', true ); // Remove if you don't want comments ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h2><?php _e( 'Sorry, nothing to display.', THEME_OPT ); ?></h2>

		</article>
		<!-- /article -->

	<?php endif; ?>

</div>
	<!-- /section -->

<?php get_footer(); ?>
