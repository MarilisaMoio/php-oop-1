<?php
    class Movie{
        public $title;
        public $director;
        public $year;
        public $description;
        public $main_actors;
        public $genre;
    
        public function __construct($_title, Person $_director, $_year, $_description, array $_main_actors, $_genre){
            $this->title = $_title;
            $this->director = $_director;
            $this->year = $_year;
            $this->description = $_description;
            $this->main_actors = $_main_actors;
            $this->genre = $_genre;
        }

        public function actorsInThisFilm(){
            $list = "";

            foreach ($this->main_actors as $actor){
                $list .= $actor->name . " " . $actor->surname . ", ";
            }

            $list = rtrim($list, ', ');

            return $list;
        }
    }
?>