<?php
/**
 * Main Navigation
 *
 * @version 1.2
 * @package Donovan
 */
?>

<?php if ( has_nav_menu( 'primary' ) ) : ?>

	<div id="main-navigation-wrap" class="primary-navigation-wrap">

		<div id="main-navigation-container" class="primary-navigation-container container">

			<?php do_action( 'donovan_header_search' ); ?>

			<button class="primary-menu-toggle menu-toggle" aria-controls="primary-menu" aria-expanded="false" <?php donovan_amp_menu_toggle(); ?>>
				<?php
				echo donovan_get_svg( 'menu' );
				echo donovan_get_svg( 'close' );
				?>
				<span class="menu-toggle-text"><?php esc_html_e( 'Menu', 'donovan' ); ?></span>
			</button>

			<div class="primary-navigation">

				<nav id="site-navigation" class="main-navigation" role="navigation" <?php donovan_amp_menu_is_toggled(); ?> aria-label="<?php esc_attr_e( 'Primary Menu', 'donovan' ); ?>">

					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'menu_id'        => 'primary-menu',
							'container'      => false,
						)
					);
					?>
				</nav><!-- #site-navigation -->

			</div><!-- .primary-navigation -->

		</div>

	</div>

<?php endif; ?>

<?php do_action( 'donovan_after_navigation' ); ?>
