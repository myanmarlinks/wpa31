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

function _ApiController() {
    echo json_encode(_config("app.blogs"));
}

function _HomeController() {
   
    make_view("home");
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