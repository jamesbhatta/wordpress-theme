<?php get_header(); ?>
<div id="main">
	<?php if (have_posts()): ?>
		<?php while (have_posts()) {
			the_post();
			?>
			<div class="container">
				<h1><?php the_title(); ?></h1>
				<p class="text-muted">
					<?php echo get_the_date('M j, Y'); ?>
				</p>
				<div>
					<?php the_content(); ?>
				</div>
			</div>
			<?php
		} ?>
	<?php endif ?>
</div>
<?php get_footer(); ?>