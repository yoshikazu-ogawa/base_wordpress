<?php get_header(); ?>

<div id="contents" class="clearfix">

<div id="main">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<?php the_time('Y年n月j日(D)');?> - <?php the_title();?>
	<?php the_content(); ?>
	
	<?php endwhile; endif;?>

<!--/main--></div>

<?php get_sidebar(); ?>

<!--/contents--></div>

<?php get_footer(); ?>