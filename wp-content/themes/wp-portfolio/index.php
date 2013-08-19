<?php get_header(); ?>

<div class="grid_12 omega none">

	<?php if (have_posts()) : while ( have_posts ()) : the_post(); ?>

		<h3><?php the_title(); ?></h3>
		<?php the_content(); ?>
		<hr>

		<?php endwhile; else: ?>

		<p>There are no posts available</p>

	<?php endif; ?>
</div>

<?php get_template_part( 'content', 'testimonials');?>


<?php get_footer(); ?>