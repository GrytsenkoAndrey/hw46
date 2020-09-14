<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$app = new \Symfony\Component\Console\Application('Say hello application');

$app->add(new \App\SayHello());
$app->add(new \App\SayHelloTimes());
$app->add(new \App\SayHelloIt());
$app->run();
