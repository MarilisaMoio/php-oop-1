<?php 
    require_once __DIR__ . "/Models/Person.php";
    require_once __DIR__ . "/Models/Movie.php";

    //people
    $direc1 = new Person("Pippo", "Franco");
    $direc2 = new Person("Gino", "Paoli");

    $actor1 = new Person("Sylvester", "Stallone");
    $actor2 = new Person("Jason", "Momoa");
    $actor3 = new Person("James", "McAvoy");
    $actor4 = new Person("Sandra", "Mondaini");
    $actor5 = new Person("Eva", "Green");

    //descriptions
    $descr1 = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam ullam repellat rem eum omnis magnam quas est id delectus temporibus fugit, facere iure consectetur nostrum fugiat labore, et harum numquam!";
    $descr2 = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam eius, quae iusto explicabo tempora dolores modi? Incidunt, ad ratione hic corporis, debitis totam quam non, eligendi ut dolorum reiciendis nemo.";

    //movie building
    $actors = [$actor2, $actor1, $actor4];
    $movie1 = new Movie("Alla ricerca del cuculo argentato", $direc1, 1984, $descr1, $actors, "action");

    $actors = [$actor3, $actor5, $actor2];
    $movie2 = new Movie("Il giallo sul treno dell'ovest", $direc2, 1997, $descr2, $actors, "crime");

    $moviesArray = [$movie1, $movie2];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <main>
        <?php foreach ($moviesArray as $movie) { ?>
            <div class="movie-container">
                <h2><?= $movie->title ?></h2>
                <div>Anno: <?= $movie->year ?></div>
                <div>Genere: <?= $movie->genre ?></div>
                <div>Regista: <?= $movie->director->name . " " . $movie->director->surname ?></div>
                <div>Descrizione: <?= $movie->description ?></div>
                <div>Attori: <?= $movie->actorsInThisFilm() ?></div>
            </div>
        <?php } ?>
</body>
</html>