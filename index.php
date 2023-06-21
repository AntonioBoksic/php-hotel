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

        // mi salvo input dell'utente del parcheggio
        $parking = $_GET["parking"];
        echo "input parcheggio:";
        var_dump($parking);

        // mi salvo input dell'utente del parcheggio
        $vote = $_GET["vote"] ?? -1;
        // qua con ?? -1 gli vado a dire che se il valore esiste me lo tengo, se il valore è null me lo sosstituisci con -1, funzionava anche senza perchè evidentemente il null che tornava dalle condizioni veniva interpretato come 0, ma così è più chiaro
        echo "input voto:";
        var_dump($vote);


    ?>

    <!-- creo form -->
    <form>
        <!-- filtro parcheggio -->
        <label for="Parcheggio">Parcheggio</label>
        <input type="radio" id="parking_yes" name="parking" value="yes">
        <label for="parking_yes">Yes</label>
        <input type="radio" id="parking_no" name="parking" value="no">
        <label for="parking_no">No</label>

        <!-- filtro stelle albergo -->
        <br>
        <label for="vote">vote</label>
        <select name="vote" id="vote">
            <option value="-1">seleziona voto minimo</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>

        <!-- bottone submit che uso per entrambi i filtri/input -->
        <br>
        <input type="submit" value="SEARCH">

    </form>

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
                // if (
                // $parking === null &&  $vote <= $hotel["vote"]
                // || ($parking === "yes" && $hotel['parking']) &&  $vote <= $hotel["vote"]
                // || ($parking === "no" && !$hotel['parking']) &&  $vote <= $hotel["vote"]
                 
                // )
                
                // si può sintetizzare anche così quando vogliamo aggiungere un secondo filtro che si applica in parallelo a tutte le altre condizioni già impostate
                if (
                ($parking === null 
                || ($parking === "yes" && $hotel['parking']) 
                || ($parking === "no" && !$hotel['parking']) 
                )&&  $vote <= $hotel["vote"]
                 
                ){
                    echo "<tr>";
                    echo "<td>" . $hotel["name"] . " " . "</td>";
                    echo "<td>" . $hotel["description"] . " " . "</td>";
                    echo "<td>" . ($hotel['parking'] ? "yes" : 'no') . " " . "</td>";
                    echo "<td>" . $hotel["vote"] . " " . "</td>";
                    echo "<td>" . $hotel["distance_to_center"] . " " . "</td>";
                    echo "<tr>";

                }
               
            };
        ?>
    </table>

    <?php
    // var_dump($hotels);
    ?>

</body>
</html>



   