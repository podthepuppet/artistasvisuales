<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div class="section">
	      <div class="container">
	        <div class="row">
	          <div class="col-md-8">
	            <div class="col-md-12"><h1><?php _e( 'Tag Archive: ', 'html5blank' ); echo single_tag_title('', false); ?></h1></div>
	            <div class="col-md-12"><?php get_template_part('loop'); ?>
							<?php get_template_part('pagination'); ?></div>
	            <div class="col-md-12"></div>
	          </div>
	          <div class="col-md-4"><?php get_sidebar(); ?></div>
	        </div>
	      </div>
	    </div>




		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
