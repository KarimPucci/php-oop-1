<?php

// models
require_once __DIR__ . '/../Models/Genre.php';
require_once __DIR__ . '/../Models/Movie.php';

$genres_film1 = [
    new Genre('Fantasy'),
    new Genre('Action')
];
$genres_film2 = [
    new Genre('Fantasy'),
    new Genre('Science Fiction'),
    new Genre('Action')
];

$movies = [
    new Movie('The Matrix', 120, 'https://www.themoviedb.org/t/p/original/hv7o3VgfsairBoQFAawgaQ4cR1m.jpg', $genres_film1),
    new Movie('Starwars', 120, 'https://www.themoviedb.org/t/p/original/nJcAQO0zauDTp72SEMcneIDjA7c.jpg', $genres_film2),
    new Movie('The Matrix', 120, 'https://www.themoviedb.org/t/p/original/hv7o3VgfsairBoQFAawgaQ4cR1m.jpg', $genres_film1),
    new Movie('Starwars', 120, 'https://www.themoviedb.org/t/p/original/nJcAQO0zauDTp72SEMcneIDjA7c.jpg', $genres_film2)
];
