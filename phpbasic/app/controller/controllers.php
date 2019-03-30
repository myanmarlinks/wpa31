<?php
function _BlogController($category = null) {
    if($category != null) {
        $cat = $category;
    }
    make_view("blog");
} 

function _HomeController() {
    make_view("home");
}

function _PageController() {
    make_view("pageone");
}
?>