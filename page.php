<?php get_header(); ?>

<div id="contents" class="clearfix">

<?php get_sidebar(); ?>

<div id="main">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div id="icatch">
	<img src="<?php echo get_template_directory_uri(); ?>/images/contents/main/totalbeauty/icatch.jpg" alt="">
	<!--/icatch--></div>
	<?php the_content();?>
	<?php endwhile; endif;?>

<!--/main--></div>

<!--/contents--></div>

<?php get_footer(); ?>