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
    <title>PHP HOTEL</title>
</head>

<body>
    <h1>
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

    <ul>
        <?php
        foreach ($hotels as $hotel) {
            echo "<li>" . "Il nome dell'hotel è:" . $hotel['name'] . "</li>";
            echo "<li>" . " C'è parcheggio?" . $hotel['parking'] . "</li>";
            echo "<li>" . " Il voto è: " . $hotel['vote'] . "</li>";
        }
        ?>
    </ul>
</body>

</html>