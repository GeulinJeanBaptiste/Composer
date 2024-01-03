<?php

require __DIR__ . '/vendor/autoload.php';

use \Colors\RandomColor;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Composer</title>
</head>
<style>
    .colAI {
        color: <?= RandomColor::one() ?>;
    }
</style>

<body>
    <h1 class="colAI">Ben Con</h1>

</body>

</html>