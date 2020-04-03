<?php


require_once '../Model.php';
require_once 'TodoController.php';

$model = new Model();

$controller = new TodoController($model);

if ('GET' === $_SERVER['REQUEST_METHOD']) {
    
    $controller->getAll();
}
