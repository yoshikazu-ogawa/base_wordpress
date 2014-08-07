<?php get_header(); ?>

<div id="contents" class="clearfix">

<?php get_sidebar(); ?>

<div id="main">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content();?>
	<?php endwhile; endif;?>

</div><!--/main-->

</div><!--/contents-->

<?php get_footer(); ?>