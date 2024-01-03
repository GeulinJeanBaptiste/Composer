<?php

require __DIR__ . '/vendor/autoload.php';


//https://uuid.ramsey.dev/en/stable/

use Ramsey\Uuid\Uuid;

$uuid = Uuid::uuid4();

// var_dump($uuid);

printf(
    "UUID: %s\nVersion: %d\n",
    $uuid->toString(),
    $uuid->getFields()->getVersion()
);
