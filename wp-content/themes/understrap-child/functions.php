<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( ! function_exists( 'chld_thm_cfg_locale_css' ) ):
	function chld_thm_cfg_locale_css( $uri ) {
		if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) ) {
			$uri = get_template_directory_uri() . '/rtl.css';
		}

		return $uri;
	}
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );


/**
 *  shortcode load post object  [load]
 */

if ( ! function_exists( 'load_post' ) ) {
	function load_post() {

		get_template_part( 'templates/section/load' );

		$ret = ob_get_contents();

		ob_end_clean();

		return $ret;

	}
}

add_shortcode( 'load', 'load_post' );


/**
 * add scripts
 */
if ( ! function_exists( 'add_scripts' ) ) {
	function add_scripts() {

		wp_register_script( 'load', get_stylesheet_directory_uri() . '/js/load-more.js', array(), null, true );
		wp_enqueue_script( 'load' );
		wp_localize_script( 'load', 'ajax_posts', array(
			'url' => admin_url( 'admin-ajax.php' )
		) );

	}
}

add_action( 'wp_enqueue_scripts', 'add_scripts' );


/**
 * ajax load more post action
 */
if ( ! function_exists( 'load_more' ) ) {
	function load_more() {

		$posts_per_page = ( isset( $_POST["posts_per_page"] ) ) ? $_POST["posts_per_page"] : 1;
		$page           = ( isset( $_POST['pageNumber'] ) ) ? $_POST['pageNumber'] : 0;
		$args = array(
			'suppress_filters' => true,
			'post_type'        => 'post',
			'posts_per_page'   => $posts_per_page,
			'paged'            => $page
		);

		$query = new WP_Query( $args );
		if ( $query->have_posts() ): ?>
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
		wp_reset_postdata();
		die();
	}
}
add_action( 'wp_ajax_nopriv_load_more', 'load_more' );
add_action( 'wp_ajax_load_more', 'load_more' );


