<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP loves HTML</title>
</head>
<body>
    <!-- normal php tags used for logical expressions -->
    <?php
        $header = 'Greeting, user!';
        $content = 'You are awesome!';
    ?>

    <!-- shorthand tags used to print -->
    <h1><?= $header ?></h1>
    <p><?= $content ?></p>
</body>
</html>