<?php

use Tourbillon\Response\HttpResponse;
use Tourbillon\Response\View\Dwoo;
use Tourbillon\Response\ViewFactory;

require '../vendor/autoload.php';

$params = [
    'variable1' => 'test',
    'variable2' => 'toto'
];

$factory = new ViewFactory();

$view = $factory->create(__DIR__ . '/views/index.tpl', $params, Dwoo::class);

$httpResponse = new HttpResponse();

$httpResponse->setView($view);

$httpResponse->render();
