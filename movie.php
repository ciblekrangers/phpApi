<?php
include 'db.php';
$movieDetail = $_GET["imdbID"];
$idIMDB = "http://www.omdbapi.com/?apikey=f4196ce9&i=$movieDetail";
$details = file_get_contents($idIMDB);
$jsonID = json_decode($details, true);


?>
<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    <table border="1">
        <tr>
            <th>Cover</th>
            <th>tittle</th>
            <th>Year</th>
            <th>Plot</th>
        </tr>
        <tr>
            <td><img src="<?= $jsonID["Poster"] ?>" alt=""></td>
            <td><?= $jsonID["Title"] ?></td>
            <td><?= $jsonID["Year"] ?></td>
            <td><?= $jsonID["Plot"] ?></td>
        </tr>
    </table>


</body>

</html>