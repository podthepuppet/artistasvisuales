<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<div class="section">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<center><h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>
										<?php get_template_part('loop'); ?>
											<?php get_template_part('pagination'); ?></center>
								</div>
							</div>
						</div>
					</div>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
