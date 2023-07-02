<?php
/**
 * Plugin Name: juj Bookly
 * Plugin URI: http://juj.ai/
 * Description: This is a custom plugin to extend the functionality of the Bookly plugin for juj.ai
 * Version: 1.0
 * Author: juj
 * Author URI: http://juj.ai/
 **/

// Include the CustomBooklyForm class
require_once plugin_dir_path(__FILE__) . 'CustomBooklyForm.php';

// Define the shortcode
function override_bookly_form_shortcode()
{
    ob_start(); // Start output buffering
    $form = new MyChildPlugin\CustomBooklyForm();
    $form->render();
    return ob_get_clean(); // End output buffering and return the captured output
}

add_shortcode('juj-bookly-form', 'override_bookly_form_shortcode');
