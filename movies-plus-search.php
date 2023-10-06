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
        }

        div:hover {
            background-color: #fff;
            border: 1px solid lightgrey;
        }
    </style>
</head>
<body>
    <h1>Кінофільми</h1>
    <?php
$movies = ["Стажер" => ["Меєрс", 2015, "194 464 672 $"], "Диявол носить «Прада»" => ["Франкель", 2006, "326 000 000 $"], "Щоденники принцеси" => ["Маршал", 2001, "165 335 153 $"], "Дружина напрокат" => ["Дуґан", 2011, "214 900 000 $"], "Нестерпні боси" => ["Гордон", 2011, "209 000 000 $"]];

function try_walk($val, $key, $data)
{
    echo "\t<p>$data\"$key\": $val[0], $val[1], ($val[2])</p>\n";
}

echo "\n\t<div><h2>ksort():</h2>\n";
ksort($movies);
array_walk($movies, "try_walk", "Фільм - ");
echo "</div>";

function cmp_director($a, $b)
{
    return $a[0] <=> $b[0];
}
uasort($movies, "cmp_director");
echo "\n\t<div><h2>uasort()[director]:</h2>\n";
array_walk($movies, "try_walk", "Фільм - ");
echo "</div>";

function cmp_year($a, $b)
{
    return $a[1] <=> $b[1];
}
uasort($movies, "cmp_year");
echo "\n\t<div><h2>uasort()[year]:</h2>\n";
array_walk($movies, "try_walk", "Фільм - ");
echo "</div>";

function cmp_name($a, $b)
{
    return $a <=> $b;
}
uksort($movies, "cmp_name");
echo "\n\t<div><h2>uksort()[name]:</h2>\n";
array_walk($movies, "try_walk", "Фільм - ");
echo "</div>";

function search($movies, $data) {
    $result = [];
    foreach ($movies as $movie_name => $movie) {
        if (stristr($movie_name, $data)) {
            $result[] = $movie_name;
        }
        foreach ($movie as $value) {
            if (stristr($value, $data)) {
                $result[] = $movie_name;
            }
        }
    }

    $noDuplic = array_unique($result);
    $search_result = array_flip($noDuplic);
    $movies_search_result = array_intersect_key($movies, $search_result);
    return $movies_search_result;
}
echo "\n\t<div><h2>Результат пошуку:</h2>\n";
$searchRes = search($movies, 2011);
array_walk($searchRes, "try_walk", "Фільм - ");
echo "</div>";
?>
</body>
</html>