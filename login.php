<?php

if (isset($_POST['submit'])) {
    $login = $_POST["login"];

    date_default_timezone_set('Europe/Kyiv');

    setcookie("login", $login, time() + 3600);
    setcookie("time", date("d.m.Y H:i"), time() + 3600);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        form {
            margin: 30px;
            padding: 20px;
            background-color: #E7E9EB;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        h1 {
            text-align: center;
            padding-top: 10px;
        }

        .alert {
            margin: 30px;
        }
    </style>
</head>

<body>


    <h1>Log in</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <div class="mb-3 mt-3">
            <label for="login" class="form-label">Login:</label>
            <input type="text" class="form-control" id="login" placeholder="Enter name your login" name="login" required>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Ok</button>
    </form>

    <?php

    if (isset($_COOKIE["login"])){
        echo '<div class="alert alert-success"><strong>Success!</strong> Your info: <a href="show.php">'. $_COOKIE["login"].'.</a></div>';
    }
    ?>
</body>

</html>