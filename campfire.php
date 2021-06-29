<?php

/**
 * Plugin Name: Campfire API
 * Description: A collection of Restfull API for Campfire Application
 * Version: 1.0.0
 * Author: James Jomuad
 * Author URI: http://jamesjomuad.github.io/
 * License: GPL v3
 * Text Domain: campfire
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see http://www.gnu.org/licenses/.
 */

use Wpvr\Base\Activate;
use Wpvr\Base\Deactivate;
use Wpvr\Init;

if (!defined('ABSPATH')) {
    exit;
}

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

/**
 * Version.
 */
if (!defined('CAMPFIRE_PLUGIN_VERSION')) {
    define('CAMPFIRE_PLUGIN_VERSION', '1.0.0');
}

/**
 * Plugin URL.
 */
if (!defined('CAMPFIRE_PLUGIN_URL')) {
    define('CAMPFIRE_PLUGIN_URL', plugin_dir_url(__FILE__));
}

/**
 * The code that runs during plugin activation
 */
function campfire_activate_plugin()
{
    Activate::activate();
}

register_activation_hook(__FILE__, 'campfire_activate_plugin');

/**
 * The code that runs during plugin deactivation
 */
function campfire_deactivate_plugin()
{
    Deactivate::deactivate();
}

register_activation_hook(__FILE__, 'campfire_deactivate_plugin');

/**
 * Register services for plugin.
 */
Init::registerServices();
