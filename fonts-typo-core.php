<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://author-fonts_typo.com/
 * @since             1.0.0
 * @package           Fonts_typo
 *
 * @wordpress-plugin
 * Plugin Name:       Fonts Typo | Fonts Typography
 * Plugin URI:        https://peacefulqode.com/
 * Description:       This plugins provide 1000+ Google fonts style for your theme.
 * Version:           1.0.0
 * Author:            PeacefulQode
 * Author URI:        http://author-fonts_typo.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       fonts-typo
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'FT_VERSION', '1.0.0' );
define( 'FT_DIR', plugin_dir_path( __FILE__ ) );
define( 'FT_URL', plugin_dir_url( __FILE__ ) );
define( 'FT_ASSETS_URL', plugin_dir_url( __FILE__ ) .'assets/');



/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-activator.php
 */
function ft_core_activate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-activator.php';
	FT_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-deactivator.php
 */
function ft_core_deactivate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-deactivator.php';
	FT_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'ft_core_activate' );
register_deactivation_hook( __FILE__, 'ft_core_deactivate' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function ft_core_run() {

	$plugin = new FT_Admin();
	$plugin->run();

}
ft_core_run();

//add admin dashboard menu

function ft_dashboard_tab() {
    add_menu_page(
        'Fonts Typo',
        'Fonts Typo',
        'manage_options',
        'fonts_typo_tab',
        'ft_tab_content',
        FT_URL.'assets/img/typo_icon.png',
        56 // Change this to  "customize.php" menu position
    );
}

function ft_tab_content() {
    // Add your custom tab content here.
    ?>
    <div class="font-typo-main-wrapper">
        <div class="font-typo-panel font-typo-panel-mask profileheader border-default-light">
          <div class="coverprofile bg-cover" ></div>
          <h1 class="font-3x margtop-none inblock text-center"><b>Fonts Typography</b></h1>
          <div class="text-center"><img alt='Fonts typo image' src='<?php echo FT_URL.'assets/img/typo_icon.png'; ?>' ></div>
          <div class="font-typo-panel-body">
            <div class="text-center">
              <div class="dropdown inblock">
              </div>
              <h1>Thank You For Installing Fonts Typo For WordPress!</h1>
              <p>You can customize your fonts style from <b>Appearance ->  customize</b> or click below link</p>
              <a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[section]=ft-typography-section' ) ); ?>"><b>Click Here to Customize The Fonts</b></a>
          </div>
      </div>
  </div>
</div>
<?php   
}

add_action( 'admin_menu', 'ft_dashboard_tab' );


//to redirect after activating the plugin
function ft_activation_redirect( $plugin ) {
    if( $plugin == plugin_basename( __FILE__ ) ) {
        exit( wp_redirect( admin_url( '?page=fonts_typo_tab' ) ) );
    }
}
add_action( 'activated_plugin', 'ft_activation_redirect' );

//enqueue style for admin area

function ft_enqueue_styles() {
    wp_enqueue_style( 'fonts-typo-css', FT_ASSETS_URL.'css/style.css', array(), '1.0', 'all' );
}
add_action( 'init', 'ft_enqueue_styles' );


function ft_tab_js() {
    wp_enqueue_script( 'fonts-typo-js', FT_ASSETS_URL . 'js/fonts-typo.js', array( 'jquery' ), '1.0', true );
}
add_action( 'admin_enqueue_scripts', 'ft_tab_js' );