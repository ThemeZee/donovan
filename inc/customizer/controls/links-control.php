<?php
/**
 * Theme Links Control for the Customizer
 *
 * @package Donovan
 */

/**
 * Make sure that custom controls are only defined in the Customizer
 */
if ( class_exists( 'WP_Customize_Control' ) ) :

	/**
	 * Displays the theme links in the Customizer.
	 */
	class Donovan_Customize_Links_Control extends WP_Customize_Control {
		/**
		 * Render Control
		 */
		public function render_content() {
			?>

			<div class="theme-links">

				<span class="customize-control-title"><?php esc_html_e( 'Theme Links', 'donovan' ); ?></span>

				<p>
					<a href="<?php echo esc_url( __( 'https://themezee.com/themes/donovan/', 'donovan' ) ); ?>?utm_source=customizer&utm_medium=textlink&utm_campaign=donovan&utm_content=theme-page" target="_blank">
						<?php esc_html_e( 'Theme Page', 'donovan' ); ?>
					</a>
				</p>

				<p>
					<a href="http://preview.themezee.com/?demo=donovan&utm_source=customizer&utm_campaign=donovan" target="_blank">
						<?php esc_html_e( 'Theme Demo', 'donovan' ); ?>
					</a>
				</p>

				<p>
					<a href="<?php echo esc_url( __( 'https://themezee.com/docs/donovan-documentation/', 'donovan' ) ); ?>?utm_source=customizer&utm_medium=textlink&utm_campaign=donovan&utm_content=documentation" target="_blank">
						<?php esc_html_e( 'Theme Documentation', 'donovan' ); ?>
					</a>
				</p>

				<p>
					<a href="<?php echo esc_url( __( 'https://themezee.com/changelogs/?action=themezee-changelog&type=theme&slug=donovan/', 'donovan' ) ); ?>" target="_blank">
						<?php esc_html_e( 'Theme Changelog', 'donovan' ); ?>
					</a>
				</p>

				<p>
					<a href="<?php echo esc_url( __( 'https://wordpress.org/support/theme/donovan/reviews/', 'donovan' ) ); ?>" target="_blank">
						<?php esc_html_e( 'Rate this theme', 'donovan' ); ?>
					</a>
				</p>

			</div>

			<?php
		}
	}

endif;
