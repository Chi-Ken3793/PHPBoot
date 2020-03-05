<?php session_start() ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="index,follow">
    <link href="favicon-16.png" rel="icon" type="image/png">
    <link href="favicon-16.png" rel="shortcut icon" type="image/png">
    <link href="css/stylesheet.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="css/stylesheet.css" rel="stylesheet" type="text/css">
    <title>PHP - Bootstrap</title>
</head>
<body>
    <main>
        <?php include('php/login.php') ?>
        <?php include('php/nav.php') ?>
        <nav class="container-fluid">
            <ul class="row">
                <li class="col-6 text-center navstyle">Side 1</li>
                <li class="col-6 text-center navstyle">Side 2</li>
            </ul>
        </nav>
        <?php include('php/user_content.php') ?>
    </main>
    <footer>
        <div class="container-fluid navbottom text-center pt-3 pb-1"> <a href="https://motiverende-design.dk/" title="Motiverende Design">https://motiverende-design.dk/</a>
            <p>&copy; 2020</p>
        </div>
    </footer>
</body>
</html>