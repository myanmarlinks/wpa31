<?php
function _BlogController($id) {
    $blogs = _config("app.blogs");
    $out_blog = [];
    foreach($blogs as $blog) {
        if($blog['id'] == $id) {
            $out_blog = $blog;
            break;
        }
    }
    $data = [
        "blog" => $out_blog
    ];
    make_view("blog", $data);
} 

function _HomeController() {
    $data = [
        "blogs" => _config("app.blogs")
    ];
    make_view("home", $data);
}

function _PageController() {
    make_view("pageone");
}

function _HelloController($name) {
    $data = [
        "name"  => $name,
    ];
    make_view("hello", $data);
}
?>