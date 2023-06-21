<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>php-hotel</title>
<!-- cdn Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">;


</head>

<body class=container>
    <!-- salvo i dati in php -->
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

    <!-- creo tabella -->
    <table border=1px>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Parking</th>
            <th>Vote</th>
            <th>Distance_To_Center</th>
        </tr>
        <?php
        

            foreach ($hotels as $hotel) {
                echo "<tr>";
                echo "<td>" . $hotel["name"] . " " . "</td>";
                echo "<td>" . $hotel["description"] . " " . "</td>";
                echo "<td>" . ($hotel['parking'] ? 'yes' : 'no') . " " . "</td>";
                echo "<td>" . $hotel["vote"] . " " . "</td>";
                echo "<td>" . $hotel["distance_to_center"] . " " . "</td>";
                echo "<tr>";
            }
            ;
        ?>

    </table>

   

    <?php
    // var_dump($hotels);
    ?>

        
</body>
</html>



   