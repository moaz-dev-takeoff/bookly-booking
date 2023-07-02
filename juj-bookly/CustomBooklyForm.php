<?php

namespace MyChildPlugin;

use Bookly\Backend\Modules\Appearance\BooklyForm as OriginalBooklyForm;
use Bookly\Lib as Lib;
use Bookly\Lib\Plugin; 

class CustomBooklyForm extends OriginalBooklyForm
{
    public static function render()
    {
      echo 'test';
    }
    
    public static function renderTemplate($template, $variables = array(), $echo = true)
    {
        // Extract the variables to a local namespace
        extract($variables, EXTR_OVERWRITE);

        // Start output buffering
        ob_start();

        // Include the template file
        include plugin_dir_path(__FILE__) . 'templates/' . $template . '.php';

        // End buffering and return its contents
        $output = ob_get_clean();

        if ($echo) {
            echo $output;
        } else {
            return $output;
        }
    }

}