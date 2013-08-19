<?php get_header(); ?>

<p>This is the single-work.php</p>

<?php if (have_posts()) : while ( have_posts ()) : the_post(); ?>

	<h3><?php the_title(); ?></h3>
	<?php the_field('description'); ?>
	<hr>

	<?php endwhile; else: ?>

	<p>There are no posts available</p>

<?php endif; ?>


<?php get_footer(); ?>