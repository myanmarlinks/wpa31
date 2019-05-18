<?php

class Config {
    public static function get($config) {
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
}