<?php

declare(strict_types=1); // Para que mire los tipos

function get_data(string $url): array 
{
    $result = file_get_contents($url); // Solo para GET
    $data = json_decode($result, true);
    return $data;
}

function get_until_message (int $days): string
{
    return match (true) {
        $days === 0 => "Hoy se estrena! 🥳",
        $days === 1 => "Mañana se estrena! 🚀",
        $days < 7   => "Esta semana se estrena 🤭",
        $days < 30  => "Este mes se estrena...🗓️",
        default     => "Se estrena en $days días 🗓️"
    };
}


function render_template(string $template, array $data = [])
{
    extract($data); // transforma las variables del array, en variables solas
   require "templates/$template.php";
}

?>
