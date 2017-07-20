<?php

use Tourbillon\Response\HttpResponse;
use Tourbillon\Response\View\Dwoo\Dwoo;
use Tourbillon\Response\ViewFactory;

require '../vendor/autoload.php';

$params = [
    'variable1' => 'test',
    'variable2' => 'toto'
];

$factory = new ViewFactory();

$view = $factory->create(__DIR__ . '/views/index.tpl', $params, Dwoo::class);

$view->addPlugin('title', function (\Dwoo\Core $core, $str) {
    return "<h1>" . $str . "</h1>";
});

$httpResponse = new HttpResponse();

$httpResponse->setView($view);

$httpResponse->render();
