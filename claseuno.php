    <style>
        body{
            background-color: black;
            color: yellowgreen;
        }

        code {
            padding: 5px 10px;
            background-color: rgba(250, 250, 250, .1);
        }
    </style>

    <?php

        $mi_variable = "VARIABLE";

        echo "Hola Mundo \n"; // el \n solo afecta e la consola
        echo "Hola Mundo $mi_variable";

    ?>
    <div>

        <h2><?= TEST ?></h2>

        <h3>
            Levantar entorno de desarrollo:
            Escribir en la consola:
        </h3>
        
        <code>
            <mark>
                php -S localhost:8000
            </mark>
        </code>
        <p>
            <?= "$mi_variable" ?>
        </p>
        <!-- <pre>
            <?= phpinfo() ?>
        </pre> -->
    </div>
<?php 

$age= 22;

$outputAge = match (true) {
    $age < 2    => "Eres un bebe.",
    $age < 10   => "Eres un niño.",
    $age < 18   => "Eres un adolecente.",
    $age === 18 => "Eres Mayor de edad.",
    $age < 40   => "Eres un adulto joven",
    $age < 60   => "Eres un adulto viejo",
    default     => "Tas muy grande ya, espero que hayas tenido buena vida."
};

$miArray = ["PHP", "JavaScript"];

// Una forma de hacer un push:
$miArray[] = 'Typescript';

?>

<h2><?= $outputAge ?></h2>

<ul>
    <?php foreach ($miArray as $item): ?>
        <li> <?= $item ?> </li>
    <?php endforeach ?>
</ul>


<?php 

const API_URL = 'https://whenisthenextmcufilm.com/api';

# Inicializar una nueva sesión de CURL; ch = cURL handle

$ch = curl_init(API_URL);

// Indicar que queremos recibir el resuladode la petición y no mostrarla en pantalla

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
$data = json_decode($result, true);
curl_close($ch);


// Una alternativa sería utisar file_get_contents
// $result = file_get_contents(API_URL)


?>

<head>
    <style>
        html{
            color-scheme: light dark;
            background: #000;
            color: antiquewhite;
        }

        img {
            border-radius: 20px;
        }
        b{
            color: royalblue
        }
    </style>
    <!-- Centered viewport --> 
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
/>
</head>

<body>
    <main style="
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    ">
        <!-- <pre>
            <?php var_dump($data) ?>
        </pre> -->
        <h1>La próxima película de Marvel</h1>
        <section>
            <img src="<?= $data["poster_url"] ?>" width="300" alt="Poster de <?= $data["title"] ?>">
        </section>
        <hgroup>
            <h2 style="text-align: center;"><?= $data["title"] ?> se estrena en <?= $data["days_until"] ?> días</h2>
            <p style="text-align: center;">Fecha de estreno: <?= $data["release_date"] ?></p>
            <p style="text-align: center;">
                La siguiente película será: <b><?= $data["following_production"]['title'] ?></b>
            </p>

        </hgroup>
    </main>
</body>