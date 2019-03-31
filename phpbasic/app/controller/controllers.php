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
    $data = [
        "blogs" => [
            [
                'id'    => 1,
                 'title' => 'Why do we use it?',
                'body'  => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)."
            ],
            [
                'id'    => 2,
                 'title' => 'Why do we use it?',
                'body'  => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)."
            ],
            [
                'id'    => 3,
                 'title' => 'Why do we use it?',
                'body'  => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)."
            ]
        ]
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