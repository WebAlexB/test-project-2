<?php
/**
 * The template for load more sections
 *
 * @package WordPress
 * @subpackage  Theme
 * @since  Theme
 */
?>
<div id="ajax-posts" class="row">
	<?php
	$postsPerPage = 3;
	$args = array(
		'post_type' => 'post',
		'posts_per_page' => $postsPerPage,
	);
	$query = new WP_Query( $args );
	?>

	<?php if ( $query->have_posts() ): ?>
		<div class="container">
			<div class="row mt-n5" style="padding-top: 30px;">
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<div class="col-md-6 col-lg-4 mt-5 wow fadeInUp" data-wow-delay=".2s"
					     style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
						<div class="blog-grid">
							<div class="blog-grid-img position-relative">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
									<h3 class="h5 mb-3"><?php the_title(); ?></h3>
								</a>
								<p class="h5 mb-3"><?php the_content(); ?></p>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	<?php endif;
	wp_reset_postdata(); ?>
</div>
<button  id="more_posts" type="button" class="btn btn-primary btn-lg btn-block">Load More</button>
