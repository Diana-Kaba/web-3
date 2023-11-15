<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather</title>
    <style>
        body {
            font-family: 'Open Sans', Arial;
        }

        .title {
            text-align: center;
        }

        .name {
            text-transform: uppercase;
        }

        .icon {
            width: 150px;
            height: 150px;
        }

        .descr {
            margin-top: 0;
        }

        .cont-weath {
            padding: 20px;
            width: 400px;
            height: 500px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            flex-direction: column;
            border: 1px solid lightgrey;
            border-radius: 5px;
        }

        form {
           display: flex;
           justify-content: center;
           align-items: center;
        }

        label {
            margin: 10px;
            font-size: 18px;
        }

        select, input {
            margin: 10px;
            border: none;
            background-color: lightgrey;
            width: 100px;
            height: 45px;
            font-size: 17px;
            border-radius: 5px;
            cursor: pointer;
        }

        select:hover, input:hover {
            border: 1px solid lightgrey;
            background-color: #fff;
        }
    </style>
</head>
<body>
<h1 class="title">Weather App</h1>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" name="countries">
    <label for="country">Choose country: </label>
    <select name="country">
            <option value="Kyiv" <?php if (isset($_POST["countries"]) && $_POST["countries"] == "Kyiv") echo "selected"; ?>>Kyiv</option>
            <option value="Kharkiv" <?php if (isset($_POST["countries"]) && $_POST["countries"] == "Kharkiv") echo "selected"; ?>>Kharkiv</option>
            <option value="Poltava" <?php if (isset($_POST["countries"]) && $_POST["countries"] == "Poltava") echo "selected"; ?>>Poltava</option>
            <option value="Odesa" <?php if (isset($_POST["countries"]) && $_POST["countries"] == "Odesa") echo "selected"; ?>>Odesa</option>
            <option value="Lviv" <?php if (isset($_POST["countries"]) && $_POST["countries"] == "Lviv") echo "selected"; ?>>Lviv</option>
            <option value="Ternopil" <?php if (isset($_POST["countries"]) && $_POST["countries"] == "Ternopil") echo "selected"; ?>>Ternopil</option>
            <option value="Lutsk" <?php if (isset($_POST["countries"]) && $_POST["countries"] == "Lutsk") echo "selected"; ?>>Lutsk</option>
    </select>
    <input type="submit" value="Save" name="sendingCountry">
</form>

<?php

$country = isset($_POST["country"]) ? $_POST["country"] : "Kharkiv";
$weather_json = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q={$country},ua&units=metric&APPID=06ddd03d11d9a328c9ecbdd226fb407f");
$weather = json_decode($weather_json);

echo "<h2 class='title name'>{$weather->name} ({$weather->sys->country})</h2>";
echo '<div class="cont-weath">';
$temp = round($weather->main->temp, 0);
$feels_like = round($weather->main->feels_like, 0);
echo "<h3>{$temp} &deg;C</h3>";
echo "<h3>Feels like {$feels_like} &deg;C</h3>";
echo "<img src=\"https://openweathermap.org/img/w/{$weather->weather[0]->icon}.png\" alt='Weather Icon'class='icon'>";
echo "<p class='descr'><b>{$weather->weather[0]->main}</b> ({$weather->weather[0]->description})</p>";
echo "<p><i>Humidity: </i>{$weather->main->humidity}%</p>";
$wind_speed = round($weather->wind->speed, 0);
echo "<p><i>Wind speed: </i>{$wind_speed} km/h</p>";
$press = round($weather->main->pressure, 0);
echo "<p><i>Pressure: </i>{$press} mbar</p>";
echo '</div>';
?>
</body>
</html>