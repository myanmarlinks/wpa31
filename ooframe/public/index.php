<?php
define ("DD", realpath('../'));

// require DD . "/vendor/autoload.php";
require DD . "/wpa31/provider/config.php";
require DD . '/wpa31/provider/database.php';

// $students = DB::table("students")->get();
// select * from students where id = 1
$student = DB::table("students")->where(["name" => "Aung Aung"])->get();
var_dump($student);
$students = DB::table("students")->get();
var_dump($students);
// foreach($students as $student) {
//     var_dump($student->name);
// }
