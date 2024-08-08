<?php
/*
 * Plugin Name:       Quantity based price for woocommerce
 * Plugin URI:        https://woocopilot.com/plugins/quantity-based-price/
 * Description:       Quantity based price
 * Version:           1.0.1
 * Requires at least: 6.5
 * Requires PHP:      7.2
 * Author:            WooCopilot
 * Author URI:        https://woocopilot.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       quantity-based-price
 * Domain Path:       /languages/
*/

/*
Quantity based price your WooCommerce store.

You should have received a copy of the GNU General Public License
along with Product Countdown Timer for Woocommerce. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

defined( 'ABSPATH' ) || exit; // Exist if accessed directly.

// Including classes.
require_once __DIR__ . '/includes/class-quantity-based-price.php';
require_once __DIR__ . '/includes/class-admin.php';

/**
 * Initializing Plugin.
 *
 * @since 1.0.0
 * @retun Object Plugin object.
 */
function quantity_based_price() {
    return new Quantity_Based_Price( __FILE__, '1.0.1' );
}

quantity_based_price();