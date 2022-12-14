<?php 
var_dump($_GET);

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
$loggedin = 0;
foreach ($hotels as $key => $hotel) {
    if($hotel['vote'] == $_GET['vote']){
        $loggedin = $hotel['vote'] >= 3;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="GET">
        <select name="parking" id="parking">
            <option value="yes">Parking si</option>
            <option value="no">Parking no</option>
        </select>
        <select name="vote" id="vote">
            <option value="votazione">1</option>
            <option value="votazione">2</option>
            <option value="votazione">3</option>
            <option value="votazione">4</option>
            <option value="votazione">5</option>
        </select>
        <button type="submit">Search</button>
    </form>
    <?php foreach ($hotels as $key => $hotel) { ?>
        <li>Parking: <?php echo $hotel['parking']; ?></li>
        <li>Vote: <?php echo $hotel['vote']; ?></li>        
    <?php } ?>
</body>
</html>