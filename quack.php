<?php
/*
 * Plugin Name:       Quack Form
 * Plugin URI:        https://quack.test/
 * Description:       Form plugin for sending email and generating links with PDF downloads.
 * Version:           0.0.1
 * Requires PHP:      7.4 or higher
 * Author:            Quack
 * Author URI:        https://quack.test/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       quack-form
 * Domain Path:       /languages
 */

use Quack\Form\QuackForm;

if (!defined('ABSPATH')) {
    return;
}

define('QUACK_FORM_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('QUACK_FORM_PLUGIN_URL', plugin_dir_url(__FILE__));
define('QUACK_FORM_ASSETS_URL', QUACK_FORM_PLUGIN_URL . 'assets/');
define('QUACK_FORM_PLUGIN_FILE', __FILE__);
define('QUACK_FORM_VIEW_DIR', __DIR__ . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);


define('QUACK_FORM_BASENAME', plugin_basename(__FILE__));
define('QUACK_FORM_PHP_MIN_VERSION', '7.4');
define('QUACK_FORM_TEXTDOMAIN', 'quack-form');

if (QUACK_FORM_PHP_MIN_VERSION > phpversion()) {
    deactivate_plugins(QUACK_FORM_BASENAME);
    wp_die(__('Quack Form has been deactivated because it requires a minimum PHP version of ' . QUACK_FORM_PHP_MIN_VERSION, QUACK_FORM_TEXTDOMAIN));
}


require_once __DIR__.'/vendor/autoload.php';


load_plugin_textdomain(QUACK_FORM_TEXTDOMAIN, false, dirname(plugin_basename(__FILE__)) . '/languages');


$quack = new QuackForm();
$quack->boot();
