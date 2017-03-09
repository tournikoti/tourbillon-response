<?php

use Tourbillon\Response\HttpResponse;
use Tourbillon\Response\ViewFactory;

require '../vendor/autoload.php';

$params = [
    'variable1' => 'test',
    'variable2' => 'toto'
];

$view = ViewFactory::createInstance(__DIR__ . '/views/index.tpl', $params, Tourbillon\Response\View\Dwoo::class);

$httpResponse = new HttpResponse();

$httpResponse->setView($view);

$httpResponse->render();
