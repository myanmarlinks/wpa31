<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="js/vue.js"></script>
<script src="js/axios.min.js"></script>
</head>
<body>
<div id="app" class="container">
<div class="row">
    <div v-for="blog in blogs" class="col-12">
        <h3>{{ blog.id }}</h3>
        <h1>
            <a href="<?php echo _config('app.app_link') ?>/blog/">
                {{ blog.title }}
            </a>
        </h1>
        <p>{{ blog.body }}</p>
    </div>        
</div>
</div>
    <script>
    var app = new Vue({
        el: "#app",
        data: {
            blogs: []
        },
        methods: {
            getBlogs: function() {
                var that = this
                axios.get('/api')
                    .then(function (response) {
                        that.blogs = response.data
                        console.log(response.data);
                    })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
                .then(function () {
                    // always executed
                });
            }
        },
        mounted: function() {
            this.getBlogs()
        },
    })
    </script>
    </body>
    </html>