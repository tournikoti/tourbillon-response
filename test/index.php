<?php

use Tourbillon\Response\HttpResponse;
use Tourbillon\Response\ViewFactory;

require '../vendor/autoload.php';

$view = ViewFactory::createInstance(__DIR__ . '/views/index.php', [
    'variable1' => 'test',
    'variable2' => 'toto'
]);

$httpResponse = new HttpResponse();

$httpResponse->setView($view);

$httpResponse->render();
