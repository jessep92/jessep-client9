<?php
/**
 * 'Hello World!' Plugin
 * 
 * @package HelloWorld
 * @author Jesse Peltonen
 * @copyright 2022 Jesse Peltonen
 * @license GPL-2.0-or-later
 * 
 * @wordpress-plugin
 * Plugin Name: 'Hello World!'
 * Plugin URI: http://client9.jpeltonen.imgd.ca/hello-world
 * Description: Prints 'Hello World!' in WordPress Admin
 * Vers. 0.0.1
 * Author: Jesse Peltonen
 * Author URI: http://client9.jpeltonen.imgd.ca
 * Text Domain: hello-world
 */
?>

<?php
function print_hello_world_title() {
    echo "<h1>Hello World!</h1>";
}

function hello_world_admin_menu() {
    add_menu_page(
        'Hello World!', // Page Title
        'Hello World Menu Title', // Menu Title
        'manage_options', // Capability
        'hello-world', // Menu Slug
        'print_hello_world_title' // Callback Function
    );
}

add_action('admin_menu', 'hello_world_admin_menu');
?>