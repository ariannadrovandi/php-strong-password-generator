<?php
    session_start();
    var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>php-strong-password-generator</title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <h2>La tua nuova password è:</h2>
            <p><?php echo $_SESSION['password']; ?></p>
        </div>
        <div>
            <a href="./index.php" class="btn btn-info">Torna alla home page</a>
        </div>
    </div>
</body>
</html>