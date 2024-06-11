<?php
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
    <title>php-hotel</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1 class="d-flex justify-content-center p-2">php-hotel</h1>
    <hr>

    <!-- stampo l'array hotels in pagina -->
    <!-- <pre>
         <?= var_dump($hotels); ?>  
    </pre> -->

    <!-- <h3>Stampo elemento singolo</h3>
    <p><?= $hotels[0]["name"] ?></p> -->


    <!-- stampo con ciclo for each -->
    <!-- <h3>Ciclo ForEach</h3>
    <?php
    foreach($hotels as $hotel) {
        echo "<p>" . $hotel["name"] . " " .  $hotel["vote"]. " " .  $hotel["distance_to_center"] . "</p>";
    }
    ?> -->

<table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">hotel 1</th>
      <th scope="col">hotel 2</th>
      <th scope="col">hotel 3</th>
      <th scope="col">hotel 4</th>
      <th scope="col">hotel 5</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">name</th>
      <?php
    foreach($hotels as $hotel) {
        echo "<td>" . $hotel["name"] . "</td>";
    }
    ?>
    </tr>
    <tr>
      <th scope="row">description</th>
      <?php
    foreach($hotels as $hotel) {
        echo "<td>" . $hotel["description"] . "</td>";
    }
    ?>
    </tr>
    <tr>
      <th scope="row">parking</th>
      <?php
    foreach($hotels as $hotel) {
        echo "<td>" . $hotel["parking"] . "</td>";
    }
    ?>
    </tr>
    <tr>
      <th scope="row">vote</th>
      <?php
    foreach($hotels as $hotel) {
        echo "<td>" . $hotel["vote"] . "</td>";
    }
    ?>
    </tr>
    <tr>
      <th scope="row">distance to center</th>
      <?php
    foreach($hotels as $hotel) {
        echo "<td>" . $hotel["distance_to_center"] . "</td>";
    }
    ?>
    </tr>
  </tbody>
</table>


</body> 
</html>