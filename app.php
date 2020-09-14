<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$app = new \Symfony\Component\Console\Application('Say hello time|s');

$app->add(new \App\SayHelloTimes());
$app->run();
