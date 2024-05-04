<?php
$url = $_SERVER['REQUEST_URI'];

$rutas = array(
    '/'      => 'controllers/movies.php',
    '/about' => 'controllers/about.php',
);

if (array_key_exists($url, $rutas)) {
    include($rutas[$url]);
} else {
    header("HTTP/1.0 404 Not Found");
    echo 'Página no encontrada';
}
?>
