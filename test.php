<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <select name="type" id="">
            <option value="movie">Movie</option>
            <option value="series">Series</option>
        </select>
        <button type="submit" name="submit">submit</button>
    </form>
    <?php
    if (isset($_GET["submit"])) {
        echo ($_GET["type"]);
        # code...
    }




    ?>

</body>

</html>