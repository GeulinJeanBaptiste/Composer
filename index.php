<?php

require __DIR__ . '/vendor/autoload.php';

use \Colors\RandomColor;

// dump(RandomColor::one());

$faker = Faker\Factory::create('fr_FR');

$faker->name() . '<br>';

$faker->email() . '<br>';

$faker->text() . '<br>';


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

    body {
        background-color: whitesmoke;
    }

    .card {
        display: flex;
        flex-wrap: wrap;
        margin: 0.2rem;
    }

    .card article {
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        width: 25%;
        margin: auto;
        border: 2px solid black;
    }
</style>

<body>
    <section class="card">
        <?php for ($i = 0; $i < 10; $i++) : ?>
            <article>
                <h1 class="colAI"><?= ucfirst($faker->words(5, true)) ?></h1>
                <p><img src="<?= $faker->imageUrl(360, 360, 'animals', true) ?>" alt=""></p>
                <p><?= $faker->text() ?></p>
                <p><?= $faker->name() ?></p>
                <p><?= $faker->email() ?></p>
                <p><?= $faker->date('d/m/Y') ?></p>
                <p><?= $faker->time() ?></p>
            </article>
        <?php endfor ?>
    </section>

</body>

</html>