<?php 

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
<header>
        <h1 class="text-center text-info m-4">Password Generator</h1>
    </header>

    <main>
        <div class="container">
            <form class="d-flex flex-column align-items-center justify-content-center" action="<?php echo $_SERVER['PHP_SELF']?>">
                <label class="my-2" for="psswLength">Scegli la lunghezza della tua nuova password</label>
                <input class="form-control my-2 w-50" type="number" name="psswLength" id="psswLength" min="8" max="40" placeholder="Scegli un numero da 8 a 40">
                <button class="btn bg-secondary-subtle border my-2" type="submit">Genera password</button>
            </form>
        </div>

        <div class="container">
            <p class="text-decoration-underline text-success">
                La tua nuova password è: 
            </p>
        </div>
    </main>
</body>
</html>