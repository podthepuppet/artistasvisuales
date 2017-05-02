<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): the_post(); ?>
		<?php if ( get_the_author_meta('description')) : ?>
<!-- ############################################################################################# -->

<div class="section" id="cuerpo-author">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="col-md-12">
					<div class="section">
						<div class="container">
							<div class="row">
								<div class="col-md-3" id="avatar-author">
									<?php echo get_avatar(get_the_author_meta('user_email')); ?>
								</div>
								<div class="col-md-4" id="grid-autor">
									<h1><?php echo get_the_author() ; ?></h1>
									<p><?php echo wpautop( get_the_author_meta('description') ); ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12" id="miniaturas-author"><?php if ( is_active_sidebar( 'slide-wget' ) ) : ?>
	        <div id="slide-wget" class="primary-sidebar widget-area" role="complementary">
	            <?php dynamic_sidebar( 'slide-wget' ); ?>
	        </div><!-- #primary-sidebar -->
	    <?php endif; ?></div>
				<div class="col-md-12" id="contenido-author">	
					<?php rewind_posts(); while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<!-- post thumbnail -->
						<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
							</a>
						<?php endif; ?>
						<!-- /post thumbnail -->

						<!-- post title -->
						<h2>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h2>
						<!-- /Post title -->

						<!-- post details -->
						<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
						<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
						<span class="comments"><?php comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
						<!-- /post details -->

						<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

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
								<?php get_template_part('pagination'); ?>
				<?php endif; ?>
				</div>
			</div>
			<div class="col-md-4" id="lateral"><?php get_sidebar(); ?></div>
		</div>
	</div>
</div>
<?php endif; ?>
<!-- ############################################################################################# -->



			<!-- article -->



		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
