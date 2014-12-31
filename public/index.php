<?php

$basePath = dirname(__DIR__);

require __DIR__.'/../vendor/autoload.php';

$app = new \Slim\Slim();

// Global config
$app->config(array(
    'mode' => 'local', // Can be set by $_ENV['SLIM_MODE'] = 'production';
    'templates.path' => $basePath . '/resources/templates',
));

// Configure Views
$app->view(new \Slim\Views\Twig());
$app->view->parserOptions = array(
    'charset' => 'utf-8',
    'cache' => $basePath . '/storage/templates',
    'auto_reload' => true,
    'strict_variables' => false,
    'autoescape' => true
);
$app->view->parserExtensions = array(new \Slim\Views\TwigExtension());

// Load app
require $basePath . '/app/app.php';

$app->run();
