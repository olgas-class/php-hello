<?php
$username = 'Olga';
$another_username = "Alberto";
$greeting = "Ciao {$username}";
$another_greeting = 'Ciao ' . $another_username;
echo "<h2> $greeting </h2>";
echo "<br />";
echo $another_greeting;
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

    <?php
    echo 'Ciao l\'Olga';
    ?>
    <?php
    $long_string = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis porro nobis et consequuntur tempore, itaque consectetur quae atque tenetur alias minus nemo sapiente aperiam tempora, aliquid repellendus. Temporibus, reprehenderit blanditiis?";
    ?>

    <p>
        <?php echo $long_string; ?>
    </p>

    <h2>Stampo come array</h2>
    <?php
    $exploded_string = explode(" ", $long_string);
    ?>
    <p>
        <?php var_dump($exploded_string); ?>
    </p>

    <h2>Sostituzione</h2>
    <?php
    $new_string = str_replace("Lorem", "Olga", $long_string);
    ?>

    <p>
        <?php echo $new_string; ?>
    </p>
</body>

</html>