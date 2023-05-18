<?php
require_once __DIR__ . "/Models/Movie.php";
require_once __DIR__ . "/Models/Genre.php";

$matrix = new Movie(new Genre('action'), 'Matrix', 120, 'https://www.themoviedb.org/t/p/original/hv7o3VgfsairBoQFAawgaQ4cR1m.jpg');

var_dump($matrix);

echo $matrix->get_movie_data();
