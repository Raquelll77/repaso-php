<?php 



const API_URL = "https://whenisthenextmcufilm.com/api";

#inicializar una nueva sesion de curl
$ch = curl_init(API_URL);

//indicar que queremos recibir el resultado de la peticion y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
/* Ejecutar la peticion
y guardamos el resultado */
$result= curl_exec($ch);
$data = json_decode($result, true);
curl_close($ch);



?>
<head>
    <title>La próxima pelicula de Marvel</title>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"/>
</head>
<main>

    <section>
        <img src="<?= $data["poster_url"];?>" width="300" alt= "poster de <?= $data["title"];?>">
    </section>

    <hgroup>
        <h2><?= $data["title"]?> se estrena en <?= $data["days_until"]?> días</h2>
        <P>Fecha de estreno: <?= $data["release_date"]?></P>
        <p>La siguiente es: <?= $data["following_production"]["title"] ?></p>
    </hgroup>
    
</main>


<style>
    :root {
        background-color: black;
    }

    body{
        display: grid;
        place-content: center;
    }

    section{
        display: flex;
        justify-content: center;
        text-align: center;
    }

    hgroup{
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }
</style>