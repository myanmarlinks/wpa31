<?php

/*
* function must have app/view/ folder
*/
function make_view($view) {
    $file = DD . '/app/view/' . $viewd . ".php";
    if(file_exists($file)) {
        include $file;
    } else {
        trigger_error(_lang("system.view_file_not_found"), E_USER_WARNING);
    }
}

function _lang($lang) {
    $default_lang = _config("app.lang");
    
}

function _config($config) {
    $e_config = explode(".", $config);
    $file = DD . "/app/config/" . $e_config[0] . ".php";
    if(file_exists($file)) {
        $config_value = require $file;
        if(array_key_exists($e_config[1], $config_value)) {
            return $config_value[$e_config[1]];
        } else {
            trigger_error("Config key not found", E_USER_ERROR);
        }
    } else {
        trigger_error("Config file not found, idiot!", E_USER_ERROR);
    }
}
 

?>