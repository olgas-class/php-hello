<?php
// Leggo il nome dell'utente passato nel get
$user_name = $_GET["name"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ciao <?php echo $user_name; ?></h1>
</body>

</html>