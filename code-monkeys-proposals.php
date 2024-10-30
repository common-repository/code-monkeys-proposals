<?php
/**
 * Created by Code Monkeys LLC
 * http://www.codemonkeysllc.com
 * User: Spencer
 * Date: 1/6/2018
 * Time: 1:22 PM
 *
 * Plugin Name: Code Monkeys Proposals
 * Plugin URI: https://www.codemonkeysllc.com/wordpress-plugins/proposals/index.html
 * Description: Create and generate custom web design and development proposals quickly and efficiently.
 * Version: 1.0.1
 * Author: Code Monkeys LLC
 * Author URI: https://www.codemonkeysllc.com/
 * License: GPL2
 */

//* REQUIRE ENQUEUE FILE
require(plugin_dir_path(__FILE__) . 'enqueue.php');

//* REQUIRE CODE MONKEYS PROPOSALS OPTIONS
require(plugin_dir_path(__FILE__) . 'includes/options.php');

//* REQUIRE CLASS FILE
require(plugin_dir_path(__FILE__) . 'includes/class-cm-proposals.php');

//* REQUIRE AJAX FUNCTIONS
require(plugin_dir_path(__FILE__) . 'ajax-functions.php');

//* REQUIRE ADMIN PAGE
require(plugin_dir_path(__FILE__) . 'admin-page.php');