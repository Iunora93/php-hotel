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

    foreach ($hotels as $key => $hotel)
    var_dump($hotel);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    <!-- Bootstrap-link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- /Bootstrap-link -->
</head>
<body>
    <ul class="container">
        <?php foreach ($hotels as $key => $hotel) { ?>
            <h3><?php echo $hotel['name']; ?></h3>
            <li><?php echo $hotel['description']; ?></li>
            <li><?php echo $hotel['parking']; ?></li>
            <li><?php echo $hotel['vote']; ?></li>
            <li><?php echo $hotel['distance_to_center']; ?></li>
        <?php } ?>
    </ul>
    
    <table class="table">
        <?php foreach ($hotels as $key => $hotel) { ?>
            <thead>           
                <tr>               
                    <th scope="col">Nome Hotel:</th>
                    <th><?php echo $hotel['name']; ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>  
                    <th scope="col">Descrizione:</th>         
                    <td><?php echo $hotel['description']; ?></td>
                </tr>
                <tr>  
                    <th scope="col">Parking:</th>         
                    <td><?php echo $hotel['parking']; ?></td>
                </tr>
                <tr>  
                    <th scope="col">Voto:</th>         
                    <td><?php echo $hotel['vote']; ?></td>
                </tr>
                <tr>  
                    <th scope="col">Distanza dal centro:</th>         
                    <td><?php echo $hotel['distance_to_center']; ?></td>
                </tr>                           
            </tbody>
        <?php } ?>
    </table>
    
</body>
</html>

<!-- Descrizione
Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G
Stampare tutti i nostri hotel con tutti i dati disponibili.
Iniziate in modo graduale.
Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.
Bonus:
1 - Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
2 - Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)
NOTA: deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore)
Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel. -->
