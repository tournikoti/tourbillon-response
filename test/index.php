<?php

use Tourbillon\Response\ViewFactory;

require '../vendor/autoload.php';

$view = ViewFactory::createInstance(__DIR__ . '/views/index.html', [
    'variable1' => 'test',
    'variable2' => 'toto'
]);

print $view->render();
