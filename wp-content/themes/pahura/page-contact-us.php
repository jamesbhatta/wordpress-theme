<?php get_header(); ?>
<div id="main">
	<?php if (have_posts()): ?>
		<?php while (have_posts()) {
			the_post();
			?>
			<div class="container grey lighten-5 p-4">
				<h1 class="text-primary"><?php the_title(); ?></h1>
				<div class="row">
					<div class="col-md-8">
						<div>
							<p class="text-muted">
								<?php the_content(); ?>
							</p>
							<?php echo do_shortcode('[wpforms id="19" title="false" description="false"]', false); ?>
						</div>
					</div>
				</div>
			</div>
			<?php
		} ?>
	<?php endif ?>
</div>
<?php get_footer(); ?>