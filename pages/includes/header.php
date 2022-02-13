<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">
        <a href="action.php?pages=home" class="navbar-brand">Logo</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="action.php?pages=calculator" class="nav-link">Calculator</a></li>
            <li class="nav-item"><a href="action.php?pages=odd-even" class="nav-link">Odd Even</a></li>
            <li class="nav-item"><a href="action.php?pages=prime" class="nav-link">Prime</a></li>
            <li class="nav-item"><a href="action.php?pages=all-products" class="nav-link">All Product</a></li>
            <?php foreach ($categories as $category) { ?>
            <li class="nav-item"><a href="action.php?pages=category&&id=<?php echo $category['id'] ?> class="nav-link">All Product</a></li>
            <?php } ?>
        </ul>
    </div>
</nav>