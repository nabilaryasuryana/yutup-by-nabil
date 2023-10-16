<?php

if (isset($_SESSION['username']) === 0 || isset($_SESSION['username']) === null || isset($_SESSION['username']) == null || isset($_SESSION['username']) == 0) {
    $user = "guest";
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Yutup</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Itim&display=swap">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        @vite('resources/css/app.css')
  </head>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary itim">
            <div class="container-fluid itim">
                <a class="navbar-brand itim flex-grow-1" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="" width="30" height="30">
                    Yutup
                </a>
                <button class="navbar-toggler ms-5" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex" role="search">
                    <div class="input-group">
                        <input type="Search" class="form-control rounded-start-5" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary rounded-end-5" type="button" id="button-addon2">Search</button>
                    </div>
                </form>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>
                </ul>
                    <div class="nav-item">
                        <?php 
                        if ($user == "guest") {
                            echo '<a class="btn btn-outline-primary" href="#">Login</a>';
                        } elseif ($user == $_SESSION['username']) {
                            echo '<a class="nav-link" href="#">My Channel</a>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </nav>
        
        <script src="{{ asset('js/app.js') }}" async defer></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>
