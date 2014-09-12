<?php
/**
 * Plugin Name: Easy Subscribe
 * Description: Easily allows visitors to subscribe to your blog
 * Version: 0.0.1
 * Author: Andrew Hunton
 * Author URI: andrewhunton.me
 * License: http://www.gnu.org/licenses/gpl-2.0.html
 */

/*  Copyright 2014  Andrew Hunton  (email : huntonas@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
defined('ABSPATH') or die("No script kiddies please!");

require 'easy-subscribe-activate-deactivate.php';
require 'easy-subscribe-widget.php';


//plugin_dir_path(__FILE__); //Local path to the plugin

//sanitize_email($email); //Sanitizing the email address
