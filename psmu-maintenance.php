<?php
/*
Plugin Name: PSMU Maintenance Mode
Version: 1.2
Description: A WordPress plugin that allows users to put their sites under maintenance mode. Also works with Multisite.

Author:	Jason Jersey
Author URI: https://twitter.com/degersey
License: GNU General Public License v2.0
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Copyright 2015 Belkin Capital Ltd (contact: https://belkincapital.com/contact/)

This plugin is opensource; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published
by the Free Software Foundation; either version 2 of the License,
or (at your option) any later version (if applicable).

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111 USA
*/


/* No direct linking */
if (!defined( 'ABSPATH' ) ) die('Access Forbidden');

/* Load functions */
require_once(dirname(__FILE__)."/functions.php");

/* Load admin pages */
require_once(dirname(__FILE__)."/panel.php");

/* Admin menu */
add_action('admin_menu', 'psmu_maintenance_menu');
