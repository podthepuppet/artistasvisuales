<?php /* Template Name: Demo Page Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div class="section">
	      <div class="container">
	        <div class="row">
	          <div class="col-md-8">
	            <div class="col-md-12"><h1><?php the_title(); ?></h1>

						<?php if (have_posts()): while (have_posts()) : the_post(); ?>

							<!-- article -->
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

								<?php the_content(); ?>

								<?php comments_template( '', true ); // Remove if you don't want comments ?>

								<br class="clear">

								<?php edit_post_link(); ?>

							</article>
							<!-- /article -->

						<?php endwhile; ?>

						<?php else: ?>

							<!-- article -->
							<article>

								<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

							</article>
							<!-- /article -->

						<?php endif; ?></div>
	            <div class="col-md-12"></div>
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
