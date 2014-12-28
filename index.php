<?php get_header(); ?>

<div id="content">

	<main id="main" role="main">
		<?php
		$postslist = get_posts('post_type=post&numberposts=5');
		foreach ($postslist as $post) : setup_postdata($post);?> 
		 <article>
			<time datetime="<?php echo get_the_date('c');?>"><?php echo get_the_date();?></time>
			<h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
		 </article>
		<?php endforeach; ?>
	</main>

	<?php get_sidebar(); ?>

</div><!-- #content -->

<?php get_footer(); ?>