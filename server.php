<?php
$titlePage = "Stampa la lista degli Hotel";
$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP HOTEL</title>
</head>

<body>
    <h1 class="text-center py-2">
        <?= $titlePage ?>
    </h1>

    <!-- <ul>
        STAMPO CON IL TAG PRE TUTTA LA LISTA DEGLI HOTEL CON TUTTE LE PROPRIETA'
        <pre>
            <?= var_dump($hotels) ?>
        </pre>
        STAMPO IN UN LI IL NOME DELL'HOTEL ALL'INDICE [0]
        <li>
            <?= $hotels[0]['name'] ?>
        </li>
        </ul> 
    -->

    <!-- STAMPO IN PAGINA TUTTI GLI HOTEL CON IL VOTO E SE HANNO PARCHEGGIO -->
    <ul class="row m-0 p-0 justify-content-between">
        <?php
        foreach ($hotels as $hotel) {
            echo "<li class='bg-primary col-4 p-0 px-2 m-1'>" . "Il nome dell'hotel è:" . " " . $hotel['name'] . "</li>";
            echo "<li class='bg-danger col-3 p-0 px-2 m-1'>" . " C'è parcheggio?" . " " . $hotel['parking'] . "</li>";
            echo "<li class='bg-warning col-4 p-0 px-2 m-1'>" . " Il voto è: " . " " . $hotel['vote'] . "</li>";
        }
        ?>
    </ul>
</body>

</html>