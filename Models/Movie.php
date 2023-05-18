<?php
require_once __DIR__ . "/Genre.php";

/**
 * ## Movie Class
 * defines a movie class
 * @author Ruggero Coco
 */
class Movie
{
    public $title;
    public $duration;
    public $poster;
    public $genre;

    /**
     * @param String $_title
     * @param Int $_duration
     * @param String $_poster
     */
    function __construct(Genre $_genre, $_title, $_duration, $_poster = "img/default.jpg")
    {
        $this->genre = $_genre;
        $this->title = $_title;
        $this->duration = $_duration;
        $this->poster = $_poster;
    }

    public function get_movie_data()
    {
        return "Movie: {$this->title}, Duration: {$this->duration} min, Genre: {$this->genre->get_genre_data()}";
    }
}
