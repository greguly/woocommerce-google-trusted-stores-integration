<?php
/**
 * Plugin Name: WooCommerce Google Trusted Stores Integration
 * Description: Integrates Google Trusted Stores with your WooCommerce store
 * Author: enollo
 * Author URI: https://enollo.com
 * Version: 1.0.0
 * Text Domain: wc-google-trusted-stores
 * Domain Path: /i18n/languages/
 */

/**
 * Register the integration with WooCommerce
 *
 * @since 1.0.0
 * @param array $integrations The array of integrations
 */
function wc_google_trusted_stores_add_integration( $integrations ) {

	include_once( 'includes/class-wc-google-trusted-stores-integration.php' );
	$integrations[] = 'WC_Google_Trusted_Stores';

	return $integrations;
}
add_filter( 'woocommerce_integrations', 'wc_google_trusted_stores_add_integration', 10 );


/**
 * Load plugin text domain
 *
 * @since 1.0.0
 */
function wc_google_trusted_stores_load_translation() {

	load_plugin_textdomain( 'wc-google-trusted-stores', false, dirname( plugin_basename( __FILE__ ) ) . '/i18n/languages' );
}
add_action( 'init', 'wc_google_trusted_stores_load_translation' );
