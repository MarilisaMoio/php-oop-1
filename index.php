<?php 
    class Movie{
        public $name;
        public $director;
        public $year;
        public $description;
        public $main_actors;
        public $genre;
    
        public function __construct($_name, $_director, $_year, $_description, $_main_actors, $_genre){
            $this->name = $_name;
            $this->director = $_director;
            $this->year = $_year;
            $this->description = $_description;
            $this->main_actors = $_main_actors;
            $this->genre = $_genre;
        }

        public function peopleInThisFilm(){
            return $this->director . " " . $this->main_actors;
        }
    }
    
    $movies = [];
    $movie = new Movie("Titolo", "Director", 1984, "description", "main actor", "genre");
    $person = $movie->peopleInThisFilm();
    var_dump($person);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    
</body>
</html>