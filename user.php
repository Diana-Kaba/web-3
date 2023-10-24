<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <style>
        h1 {
            text-align: center;
        }

        b {
            color: lightgrey;
        }
    </style>
</head>
<body>
    <h1>Hello, <b><?php echo $_GET['login']; ?></b>!</h1>
</body>
</html>