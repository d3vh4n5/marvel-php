<?php
// Obtener la URL solicitada
$url = $_SERVER['REQUEST_URI'];

// Definir las rutas y sus controladores correspondientes
$rutas = array(
    '/inicio' => 'controlador_inicio.php',
    '/perfil' => 'controlador_perfil.php',
    '/productos' => 'controlador_productos.php'
    // Agrega más rutas según sea necesario
);

// Verificar si la ruta solicitada está definida
if (array_key_exists($url, $rutas)) {
    // Incluir el controlador correspondiente
    include($rutas[$url]);
} else {
    // Mostrar un error 404 si la ruta no está definida
    header("HTTP/1.0 404 Not Found");
    echo 'Página no encontrada';
}
?>
