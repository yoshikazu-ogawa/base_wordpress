<?php get_header(); ?>

<div id="content">

	<main id="main" role="main">
		<?php
		$postslist = get_posts('post_type=post&numberposts=5');
		foreach ($postslist as $post) : setup_postdata($post);?> 
		 <article>
			<p><time datetime="<?php the_time('c'); ?>"><?php the_time('Y年m月d日 G:i'); ?></time></p>
			<h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
		 </article>
		<?php endforeach; ?>
	</main>

	<?php get_sidebar(); ?>

</div><!-- #content -->

<?php get_footer(); ?>