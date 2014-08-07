<?php get_header(); ?>

<div id="contents" class="clearfix">

<div id="main">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<article>
	<?php the_time('Y年n月j日(D)');?> - <?php the_title();?>
	<?php the_content(); ?>
	</article>
	
	<?php endwhile; endif;?>

</div><!--/main-->

<?php get_sidebar(); ?>

</div><!--/contents-->

<?php get_footer(); ?>