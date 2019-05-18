<?php
define ("DD", realpath('../'));

// require DD . "/vendor/autoload.php";
require DD . "/wpa31/provider/config.php";
require DD . '/wpa31/provider/database.php';

$students = DB::table("students")->get();
