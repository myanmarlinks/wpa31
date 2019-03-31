<?php

define("DD", realpath("../"));
include DD . "/wpa31/functions.php";
include DD . "/app/controller/controllers.php";

$request_uri = explode("/", $_SERVER['REQUEST_URI']);
$script_name = explode("/", $_SERVER['SCRIPT_NAME']);
$request = array_diff($request_uri, $script_name);
$final_request = array_values($request);
if(empty($final_request)) {
    $page = "home";
} else {
    $page = $final_request[0];
}
$controller = "_" . ucfirst($page) . "Controller";

if(function_exists($controller)) {
    array_shift($final_request);
    call_user_func_array($controller, $final_request);
} else {
    echo "404 Not Found!";
}
?>