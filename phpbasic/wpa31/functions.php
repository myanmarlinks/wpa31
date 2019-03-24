<?php

/*
* function must have app/view/ folder
*/
function make_view($view) {
    $file = DD . '/app/view/' . $view . ".php";
    if(file_exists($file)) {
        include $file;
    } else {
        echo "404 Not Found!";
    }
}
?>