<?php
/*
 Plugin Name: Quizbook
 Plugin URI:
 Description: Plugin para adicionar quiz ou questionarios com Wordpress
 Version: 1.0
 Author: Bruno
 Author URI: github.com/bbwithpointers
License: GPL2
License URI: www.gnu.org/licences/gpl-2.0.html
Text Domain: quizbook
 */

require_once plugin_dir_path(__FILE__) . 'includes/postypes.php';


/*
 * 
 *  Recreate regras de URL (htaccess)
 * 
 */
register_activation_hook(__FILE__, 'rewrite_flush');