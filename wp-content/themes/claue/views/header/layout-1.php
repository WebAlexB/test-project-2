<?php
/**
 * The header layout 1.
 *
 * @since   1.0.0
 * @package Claue
 */
?>
<header id="jas-header" class="header-1" <?php jas_claue_schema_metadata( array( 'context' => 'header' ) ); ?>>
	<div class="header__top bgbl fs__12 pl__15 pr__15">
		<?php if ( cs_get_option( 'header-top-left' ) || cs_get_option( 'header-top-center' ) || cs_get_option( 'header-top-right' ) || cs_get_option( 'header-currency' ) ) : ?>
			<?php if ( cs_get_option( 'header-boxed' ) ) : echo '<div class="jas-container">'; endif; ?>

			<div class="jas-row middle-xs pt__10 pb__10">
				<div class="jas-col-md-4 jas-col-sm-6 jas-col-xs-12 flex middle-xs start-md start-sm center-xs">
					<?php if ( cs_get_option( 'header-top-left' ) ) : ?>
						<div class="header-text"><?php echo do_shortcode( cs_get_option( 'header-top-left' ) ); ?></div>
					<?php endif; ?>
				</div>
				<div class="jas-col-md-4 jas-col-sm-6 jas-col-xs-12 center-md end-sm center-xs">
					<?php if ( cs_get_option( 'header-top-center' ) ) : ?>
						<div
							class="header-text"><?php echo do_shortcode( cs_get_option( 'header-top-center' ) ); ?></div>
					<?php endif; ?>
				</div>
				<div class="header-text" id="cross"></div>
			</div>
			<?php if ( cs_get_option( 'header-boxed' ) ) : echo '</div>'; endif; ?>
		<?php endif; ?>
	</div><!-- .header__top -->
	<div
		class="header__mid pl__15 pr__15<?php echo( cs_get_option( 'header-transparent' ) ? ' header__transparent pa w__100' : '' ); ?>">
		<?php if ( cs_get_option( 'header-boxed' ) ) : echo '<div class="jas-container">'; endif; ?>
		<div class="jas-row middle-xs pt__10 pb__10">
			<div class="jas-col-md-3 jas-col-sm-3 jas-col-xs-3 flex middle-xs laptop__menu">
				<div class="container">
					<div id="menu__icon" class="menu-icon">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
			</div>
			<div class="jas-col-md-6 jas-col-sm-6 jas-col-xs-6 tc mobile__logo">
				<?php jas_claue_logo(); ?>
			</div>
			<div class="jas-col-md-3 jas-col-sm-3 jas-col-xs-3">
				<div class="jas-action flex end-xs middle-xs">
					<?php if ( cs_get_option( 'header-search-icon' ) ) : ?>
						<a class="sf-open cb chp hidden-xs" href="javascript:void(0);"
						   title="<?php echo esc_html__( 'Search', 'claue' ); ?>"><i class="pe-7s-search"></i>
							<p>
								<?php if ( pll_current_language() == 'uk' ) {
									echo esc_html__( 'Пошук', 'claue' );
								}
								if ( pll_current_language() == 'en' ) {
									echo esc_html__( 'Search', 'claue' );
								}
								?>
							</p>
						</a>
					<?php endif; ?>
					<div id="select-leng-2 "><?php pll_the_languages(); ?></div>
					<div id="select-leng"><?php echo do_shortcode( '[woocs sd=1]' ); ?></div>
					<?php if ( class_exists( 'YITH_WCWL' ) ) {
						global $yith_wcwl;
						echo '<a class="cb chp hidden-xs" href="' . esc_url( $yith_wcwl->get_wishlist_url() ) . '" title="' . esc_html__( 'View your Wishlist', 'claue' ) . '"><i class="pe-7s-like"></i></a>';

						if ( class_exists( 'WooCommerce' ) ) {
							echo jas_claue_wc_my_account();
						}
						echo do_shortcode( '[xt_woofc_shortcode]' );
					}
					?>
				</div><!-- .jas-action -->
			</div>
			<div class="jas-col-md-3 jas-col-sm-3 jas-col-xs-3 flex middle-xs mobile__menu">
				<div class="container">
					<div class="menu-icon-mobile">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
			</div>
		</div><!-- .jas-row -->
		<?php if ( cs_get_option( 'header-boxed' ) ) : echo '</div>'; endif; ?>
	</div><!-- .header__mid -->
	<form class="header__search w__100 dn pf" role="search" method="get"
	      action="<?php echo esc_url( home_url( '/' ) ); ?>" <?php jas_claue_schema_metadata( array( 'context' => 'search_form' ) ); ?>>
		<div class="pa">
			<input class="w__100 jas-ajax-search icon-search" type="text" name="s"
			       placeholder="<?php if ( pll_current_language() == 'uk' ) {
				       echo esc_html__( 'Пошук...', 'claue' );
			       }
			       if ( pll_current_language() == 'en' ) {
				       echo esc_html__( 'Search for...', 'claue' );
			       }
			       ?>"/>
			<input type="hidden" name="post_type" value="product">
		</div>
		<a id="sf-close" class="pa" href="#"><i class="pe-7s-close"></i></a>
	</form><!-- #header__search -->
	<div class="jas-canvas-menu jas-push-menu jas-canvas-menu-mobile">
		<div class="burger-logo-mobile">
			<?php jas_claue_logo(); ?>
		</div>
		<h3 class="mg__0 tc cw bgb tu ls__2"><?php esc_html_e( 'Menu', 'claue' ); ?> <i
				class="close-menu pe-7s-close pa"></i></h3>
		<div class="hide-md visible-sm visible-xs mt__30 center-xs flex tc">
			<?php if ( cs_get_option( 'header-top-right' ) ) : ?>
				<div class="header-text mr__15"><?php echo do_shortcode( cs_get_option( 'header-top-right' ) ); ?></div>
			<?php endif; ?>
			<?php
			if ( class_exists( 'WooCommerce' ) && cs_get_option( 'header-currency' ) ) {
				echo jas_claue_wc_currency();
			}
			?>
		</div>
		<div class="jas-action flex center-xs middle-xs hide-md hidden-sm visible-xs mt__10">
			<?php if ( cs_get_option( 'header-search-icon' ) ) : ?>
			<div class="menu-search">
				<div>
					<a class="sf-open cb chp" href="javascript:void(0);"><i class="pe-7s-search"></i></a>
				</div>
				<div>
					<?php if ( pll_current_language() == 'uk' ) { ?>
						<p class="menu-search-text"> <?php echo esc_html( 'Пошук', 'claue' ) ?></p>
					<?php };
					if ( pll_current_language() == 'en' ) { ?>
						<p class="menu-search"> <?php echo esc_html( 'Search', 'claue' ) ?></p>
					<?php }; ?>
					<?php endif; ?>
				</div>
			</div>
		</div><!-- .jas-action -->
		<div class="border-burger-top"></div>
		<?php ?>
		<div class="menu-images">
			<?php wp_nav_menu(
				array(
					'theme_location' => 'primary-menu',
					'container_id'   => 'jas-mobile-menu',
					'walker'         => new JAS_Claue_Mobile_Menu_Walker(),
					'fallback_cb'    => null
				)
			); ?>
		</div>
		<div class="border-burger-lower"></div>
		<div class="menu-burger-icon-mobile">
			<?php if ( class_exists( 'WooCommerce' ) ) { ?>
			<div>
				<?php if ( cs_get_option( 'header-my-account-icon' ) ) {
					echo '<a class="cb chp db jas-my-account" href="' . esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ) . '"><i class="pe-7s-user"></i><a>';
				} ?>
			</div>
			<div class="languages">
				<?php pll_the_languages( array( 'show_flags' => 1, 'show_names' => 0 ) ); ?>
			</div>
			<div id="select-leng-mobile">
				<?php echo do_shortcode( '[woocs sd=1]' ); ?>
			</div>
			<div>
				<?php if ( class_exists( 'YITH_WCWL' ) ) {
					global $yith_wcwl;
					echo '<a class="cb chp wishlist-icon" href="' . esc_url( $yith_wcwl->get_wishlist_url() ) . '"><i class="pe-7s-like"></i></a>';
				} ?>
				<?php } ?>
			</div>
		</div>
	</div><!-- .jas-canvas-menu -->

	<?php if ( class_exists( 'WooCommerce' ) ) : ?>
		<div class="jas-mini-cart jas-push-menu">
			<div class="jas-mini-cart-content">
				<h3 class="mg__0 tc cw bgb tu ls__2"><?php esc_html_e( 'Mini Cart', 'claue' ); ?> <i
						class="close-cart pe-7s-close pa"></i></h3>
				<div class="widget_shopping_cart_content"></div>
			</div>
		</div><!-- .jas-mini-cart -->
	<?php endif ?>
</header><!-- #jas-header -->