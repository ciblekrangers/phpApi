<?php

$movie = "http://www.omdbapi.com/?apikey=f4196ce9";
if (isset($_GET["enter"])) {
    $type = $_GET["Type"];
    // if ($type = "movie") {
    //     $type = "type=movie";
    // } elseif ($type = "series") {
    //     $type = "type=series";
    // } else {
    //     echo "none";
    // }
    $filmName = $_GET["film"];
    $movies = "$movie&type=$type&s=$filmName";
    // echo $movies;
    echo "<br>";
    echo $type;
    echo "<br>";
    $contents = file_get_contents($movies);
    $jsonMovies = json_decode($contents, true);
    // var_dump($jsonMovies);
    // if
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <h1>
            <p>selamat datang</p>
            <select name="Type" id="">
                <option value="series">Series</option>
                <option value="movie">Movie</option>
            </select>
            <label for="film">search film</label>
            <input type="text" name="film" id="film">
            <button type="submit" name="enter">Search</button>
        </h1>
        <?php foreach ($jsonMovies["Search"] as $row) { ?>
            <div>
                <img src="<?= $row['Poster'] ?>" alt="">
                <a href="movie?<?= $row["Title"] ?>"></a>
                <p><a href="movie.php?imdbID=<?= $row["imdbID"] ?>"><?= $row["Title"] ?></a></p>
                <br>
                <p>
                    jenis <?= $row["Type"] ?>
                </p>
            </div>
        <?php } ?>

    </form>
    <?php
    echo "<br>";
    // var_dump($jsonMovies);
    // isset($jsonMovies);
    echo count($jsonMovies["Search"]);
    ?>
    <?= $jsonMovies["totalResults"] ?>
    <?= $jsonMovies["Response"] ?>
</body>

</html>