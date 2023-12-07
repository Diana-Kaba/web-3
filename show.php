<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        h1, h2 {
            margin: 30px;
            text-align: center;
        }
    </style>
</head>
<body>
<?php

echo '<h1>Hello, ' . $_COOKIE["login"] . '!</h1>';
echo "<h2><i>{$_COOKIE['time']}</i></h2>";
?>
</body>
</html>