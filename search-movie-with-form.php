<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кінофільми</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1, h2 {
            text-align: center;
        }

        p {
            font-size: 18px;
        }

        div {
            margin: 0 auto;
            background-color: #F5F5F5;
            max-width: 600px;
            padding: 5px 20px 20px 20px;
            margin-bottom: 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        div:hover, .btn:hover {
            background-color: #fff;
            border: 1px solid lightgrey;
        }

        form {
            margin: 0 auto;
            max-width: 600px;
            padding: 20px;
            margin-bottom: 10px;
            border: 1px solid lightgrey;
            font-size: 18px;
            border-radius: 5px;
        }

        .btn {
            padding: 10px;
            margin-top: 10px;
            font-size: 14px;
            background-color: #F5F5F5;
            border: 1px solid lightgrey;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Кінофільми</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <label for="inputData">Введіть пошук: </label>
    <input type="text" name="inputData" required>
    <br>
    <label for="sort">Оберіть сортування: </label>
    <select name="sort">
            <option value="cmp_director">Режисер</option>
            <option value="cmp_year">Дата випуску</option>
            <option value="cmp_name">Назва</option>
    </select>
    <br>
    <input type="submit" value="Відправити" name="sending" class="btn">
    </form>

    <?php

include_once "db-movies.php";

function try_walk($val, $key, $data)
{
    echo "\t<p>$data\"$key\": $val[0], $val[1], ($val[2])</p>\n";
}

function cmp_director($a, $b)
{
    return $a[0] <=> $b[0];
}

function cmp_year($a, $b)
{
    return $a[1] <=> $b[1];
}

function cmp_name($a, $b)
{
    return $a <=> $b;
}

function search($movies, $data) {
    $result = [];
    foreach ($movies as $movie_name => $movie) {
        if (mb_stristr($movie_name, $data)) {
            $result[] = $movie_name;
        }
        foreach ($movie as $value) {
            if (mb_stristr($value, $data)) {
                $result[] = $movie_name;
            }
        }
    }

    $noDuplic = array_unique($result);
    $search_result = array_flip($noDuplic);
    $movies_search_result = array_intersect_key($movies, $search_result);
    return $movies_search_result;
}

$inputData = "";
$sort = "";
if (isset($_POST['sending'])) {
    $inputData = $_POST["inputData"];
    $sort = $_POST["sort"];

    echo "\n\t<div><h2>Результат пошуку:</h2>\n";
    $searchRes = search($movies, $inputData);
    uasort($movies, $sort);
    array_walk($searchRes, "try_walk", "Фільм - ");
    echo "</div>";
}
?>
</body>
</html>