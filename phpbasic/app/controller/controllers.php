<?php
function _BlogController($category = null, $id = null) {
    if($category != null) {
        $cat = $category;
        echo $cat;
    }
    if($id != null) {
        $post_id = $id;
        echo $post_id;
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