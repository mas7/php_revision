<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header {
            background-color: #e5e5e5;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>

<body>

    <header>
        <h1>
            <?php
            $greeting = 'Hello World <br>';
            echo $greeting;
            $name = $_GET['name'];
            echo $name;
            ?>
        </h1>
        <h1><?= 'Hello, ' . htmlspecialchars($_GET['name']); ?></h1>
    </header>

</body>

</html>