<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <?php foreach($blogs as $blog) { ?> 
                <div class="col-12">
                <h3><?php echo $blog["id"]; ?></h3>
                <h1><?php echo $blog["title"]; ?></h1>
                <p><?php echo $blog['body']; ?></p>
                </div>        
            <?php } ?>
        </div>
    </div>
</body>
</html>