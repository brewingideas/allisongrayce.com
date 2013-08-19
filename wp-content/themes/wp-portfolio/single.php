<?php get_header(); ?>

<div class="grid_12 omega none">

	<?php if (have_posts()) : while ( have_posts ()) : the_post(); ?>

		<?php get_template_part( 'content', 'post');?>

		<?php endwhile; else: ?>

		<p>There are no posts available</p>

	<?php endif; ?>
</div>

<?php get_template_part( 'content', 'testimonials');?>


<?php get_footer(); ?>