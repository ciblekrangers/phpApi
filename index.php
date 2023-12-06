<?php

$movie = "http://www.omdbapi.com/?apikey=f4196ce9&type=movie&s=";
if (isset($_GET["enter"])) {
    $type = $_GET["Type"];
    $filmName = $_GET["film"];
    $movies = "$movie$filmName";
    echo $movies;
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
            <select name="Type" id="Type">
                <option value="movie">Movie</option>
                <option value="series">Series</option>
            </select>
            <label for="film">search film</label>
            <input type="text" name="film" id="film">
            <button type="submit" name="enter">Search</button>
        </h1>
        <?php foreach ($jsonMovies["Search"] as $row) { ?>
            <?php if ($row["Type"] = "movie") { ?>
                <div>
                    <img src="<?= $row['Poster'] ?>" alt="">
                    <a href="movie?<?= $row["Title"] ?>"></a>
                    <p><a href="movie.php?imdbID=<?= $row["imdbID"] ?>"><?= $row["Title"] ?></a></p>
                    <br>
                    <p>
                        jenis <?= $row["Type"] ?>
                    </p>
                </div>
            <?php } else {
                continue;
            } ?>

        <?php } ?>

    </form>
    <?php
    echo "<br>";
    // var_dump($jsonMovies);
    // isset($jsonMovies);
    echo count($jsonMovies["Search"]);
    ?>

</body>

</html>