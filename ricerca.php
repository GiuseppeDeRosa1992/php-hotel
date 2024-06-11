<?php
$ciao = "Ciao Giuseppe, funziona tutto";
$searchHotelParking = "Vuoi sapere gli hotel con parcheggio?";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <title>RICERCA PHP</title>
</head>

<body>
    <!-- <h1 class="text-center">
        <?= $ciao ?>
    </h1>
    <form action="server.php" method="GET" class="text-center">
        <label for=""> <?= $searchHotelParking ?></label>
        <input type="text" name="parking" placeholder="C'è il Parcheggio? True or False">
        <button type="submit">Cerca</button>
    </form> -->

    <h1 class="text-center bg-danger py-2">
        <?= $searchHotelParking ?>
    </h1>
    <form action="server.php" method="GET" class="text-center py-2">
        <input type="radio" id="true" name="parking" value="1">
        <label for="true">C'è Parcheggio</label><br>
        <input type="radio" id="false" name="parking" value="">
        <label for="false">Non c'è parcheggio</label><br>
        <button type="submit">Cerca</button>
    </form>
</body>

</html>