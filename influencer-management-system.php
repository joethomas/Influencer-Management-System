<?php
/*
	Plugin Name: Influencer Management System
	Description: Manage your influencers and associated on-site marketing efforts by offering two new post types, Partners and Deals, with associated meta boxes and taxonomies.
	Plugin URI: https://github.com/joethomas/influencer-management-system
	Version: 0.9.0
	Author: Joe Thomas
	Author URI: https://github.com/joethomas
	License: GNU General Public License v3.0
	License URI: http://www.gnu.org/licenses/gpl-3.0.html
	Text Domain: influencer-ms
	Domain Path: /languages/

	GitHub Plugin URI: https://github.com/joethomas/influencer-management-system
	GitHub Branch: master
*/

// Prevent direct file access
defined( 'ABSPATH' ) or exit;


/* Global Variables & Constants
==============================================================================*/

/**
 * Define the constants for use within the plugin
 */

// Plugin
function joe_ims_get_plugin_data_version() {
	$plugin = get_plugin_data( __FILE__, false, false );

	define( 'JOE_IMS_VER', $plugin['Version'] );
	define( 'JOE_IMS_TEXTDOMAIN', $plugin['TextDomain'] );
	define( 'JOE_IMS_NAME', $plugin['Name'] );
}
add_action( 'init', 'joe_ims_get_plugin_data_version' );

define( 'JOE_IMS_PREFIX', 'influencer-ms' );


/* Bootstrap
==============================================================================*/

require_once( 'includes/partner-comments.php' ); // controls comments on Partner CPT
require_once( 'includes/partner-cpt.php' ); // controls Partner CPT
require_once( 'includes/partner-taxonomies.php' ); // controls Partner CPT taxonomies
require_once( 'includes/partner-metabox.php' ); // controls Partner CPT meta boxes

require_once( 'includes/deal-comments.php' ); // controls comments on Deal CPT
require_once( 'includes/deal-cpt.php' ); // controls Deal CPT
require_once( 'includes/deal-taxonomies.php' ); // controls Deal CPT taxonomies
require_once( 'includes/deal-metabox.php' ); // controls Deal CPT meta boxes

require_once( 'includes/updates.php' ); // controls plugin updates