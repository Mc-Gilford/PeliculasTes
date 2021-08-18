<?php
    error_reporting(E_ALL);
    ini_set('ignore_repeated_errors',TRUE);
    ini_set('display_errors',FALSE);
    ini_set('log_errors',TRUE);
    ini_set('error_log','php-error.log');
    require_once "config/connect.php";
    require_once 'libs/database.php';
    require_once 'libs/controller.php';
    require_once 'libs/model.php';
    require_once 'libs/view.php';
    require_once 'libs/app.php';
    require_once 'config/config.php';
    include_once "models/filmsModel.php";

    $app = new App();
?>
<!--<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Examen">
    <meta name="author" content="McGilford">
    <link href="views/src/css/style.css" rel="stylesheet">
    <link href="views/src/css/style-personalize.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
</html>
<body>
    <div class="container">
        <header><h1>Peliculas</h1></header>
        <section class="movie-section">
            <div class="poster-image">
                <img src="views/src/img/wrong-turn-3.jpg">
            </div>
            <article class="text-information">
                <div class="film-information">
                    <h1>Film Name</h1>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nihil quis non quia modi illo, 
                        rem architecto libero nam esse mollitia, molestiae et temporibus, culpa tenetur odio recusandae voluptas? Quos.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nihil quis non quia modi illo, 
                        rem architecto libero nam esse mollitia, molestiae et temporibus, culpa tenetur odio recusandae voluptas? Quos.
                    </p>
                    <p class="director">Director name</p>
                    <p class="actors">Actors name</p>
                <div>
            </article>
        </section>
        <section class="movie-section">
            <div class="poster-image">
                <img src="views/src/img/wrong-turn-3.jpg">
            </div>
            <article class="text-information">
                <div class="film-information">
                    <h1>Film Name</h1>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nihil quis non quia modi illo, 
                        rem architecto libero nam esse mollitia, molestiae et temporibus, culpa tenetur odio recusandae voluptas? Quos.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nihil quis non quia modi illo, 
                        rem architecto libero nam esse mollitia, molestiae et temporibus, culpa tenetur odio recusandae voluptas? Quos.
                    </p>
                    <p class="director">Director name</p>
                    <p class="actors">Actors name</p>
                <div>
            </article>
        </section>
    </div>
</body>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong|Sulphur Point">
</html>-->