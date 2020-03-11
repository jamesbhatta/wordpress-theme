<?php get_header(); ?>
<div class="container grey lighten-4 p-4">
	<div class="text-center">
		<h2 class="display-1 text-primary font-weight-lighter">Welcome to my Protfolio</h2>
		<small class="font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas aspernatur ullam optio magnam eum labore voluptatibus ipsam odio. Nulla esse aliquid nesciunt numquam sit est dolore atque iste quas temporibus.</small>
	</div>
</div>
<div class="container-fluid p-4">
	<div class="row">
		<?php for ($i=1; $i < 12; $i++) { ?>
			<div class="col-md-3">
				<div class="card mb-4">
					<img src="https://dummyimage.com/600x400/c4bcc4/dedede" alt="" class="card-image-top">
					<div class="card-body">
						<div class="card-title"><h4>I am title</h4></div>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, est ipsum at quidem dolores cum, eveniet, consectetur facere provident maiores totam incidunt nesciunt repellendus? Libero a est molestiae quam veniam!</p>
						<div class="d-flex">
							<div class="ml-auto">
								<a class="btn btn-primary z-depth-0 rounded-0" href="">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>
<?php get_footer(); ?>