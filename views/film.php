<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Examen">
    <meta name="author" content="McGilford">
    <link href="views/src/css/style.css" rel="stylesheet">
    <link href="views/src/css/style-personalize.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong|Sulphur Point"> 
</head>
</html>
<body>
    <div class="container">
        <header><h1>Peliculas</h1></header>
        <div class="search">
            <input type="text" placeholder="Escribe una Pelicula" id="filmName"/>
            <input class="btn" type="button" value="Buscar" id="btnSend"/>
        </div>
        <?php
            /*foreach($data["envios"] as $dato)
            {
                $directors=$this->model->getDirectors($dato["filmId"]);
                $actors=$this->model->getActors($dato["filmId"]);
                echo '<section class="movie-section">
                <div class="poster-image">
                    <img src="'.$dato["poster"].'">
                </div>
                <article class="text-information">
                    <div class="film-information">
                        <h1>'.$dato["name"].'</h1>
                        <p class="description">'.$dato["description"].'</p>
                        <p class="director">Director:'.$directors.'</p>
                        <p class="actors">Actores: '.$actors.'</p>
                    <div>
                </article>
            </section>';
            $directors="";
            $actors="";
            }*/
        ?>
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
<script src="views/src/jquery/jquery.min.js"></script>
<script src="views/src/jquery-easing/jquery.easing.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="views/src/js/getFilm.js"></script>
</html>