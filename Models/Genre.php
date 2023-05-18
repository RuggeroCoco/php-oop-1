<?php

/**
 * ## Genre Class
 * defines a genre class
 * @author Ruggero Coco
 */
class Genre
{
    public $name;

    /**
     * @param String $name
     */
    function __construct($_name)
    {
        $this->name = $_name;
    }

    public function get_genre_data()
    {
        return $this->name;
    }
}
