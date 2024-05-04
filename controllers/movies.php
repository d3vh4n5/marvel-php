<?php
// Mejor estos imports absolutos, porque recordar que ahora este
// archivo está en el index, entonces cambia la ruta relativa
require_once 'utils/functions.php';
require_once 'config/consts.php';
require_once 'classes/NextMovie.php';


$next_movie = NextMovie::fetch_and_create_movie(API_URL);
$next_movie_data = $next_movie->get_data();

render_template('head', ["title" => $next_movie_data["title"]]);
render_template('main', array_merge(
    $next_movie_data,
    ["until_message" => $next_movie->get_until_message()]
));
render_template('foot');