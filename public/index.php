<?php

require 'vendor/autoload.php';

$app = new \Slim\Slim();

// Global config
$app->config(array(
    'mode' => 'local', // Can be set by $_ENV['SLIM_MODE'] = 'production';
    'templates.path' => './resources/templates',
));

// Configure Views
$app->view(new \Slim\Views\Twig());
$app->view->parserOptions = array(
    'charset' => 'utf-8',
    'cache' => realpath('./storage/templates'),
    'auto_reload' => true,
    'strict_variables' => false,
    'autoescape' => true
);
$app->view->parserExtensions = array(new \Slim\Views\TwigExtension());

// Load app
require './app/app.php';

$app->run();
