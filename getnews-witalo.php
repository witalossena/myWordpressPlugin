<?php

/**
 * @package Getnews
 */
/*
Plugin Name: getnews-witalo
Plugin URI: https://getnews-witalo.com
Description: para pegar as noticias do g1
Version: 1.0
Author: witalossena
Author URI: https://witalossena.heroku.com
License: GPLv2 or later
Text Domain: getnews
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2020 Automattic, Inc.
*/

defined( 'ABSPATH' ) or die( 'Hey, what are you doing here? You silly human!' );

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

define( 'PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'PLUGIN', plugin_basename( __FILE__ ) );

use Inc\Base\Activate;
use Inc\Base\Deactivate;

/**
 * The code that runs during plugin activation
 */
function activate_alecaddd_plugin() {
	Activate::activate();
}

/**
 * The code that runs during plugin deactivation
 */
function deactivate_alecaddd_plugin() {
	Deactivate::deactivate();
}

register_activation_hook( __FILE__, 'activate_alecaddd_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_alecaddd_plugin' );

if ( class_exists( 'Inc\\Init' ) ) {
	Inc\Init::register_services();
}