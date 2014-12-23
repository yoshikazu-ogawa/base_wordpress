<?php get_header(); ?>

<div id="content">

	<main id="main" role="main">

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>

		<?php endwhile; endif;?>

	</main>

	<?php get_sidebar(); ?>

</div><!-- #content -->

<?php get_footer(); ?>