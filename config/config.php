<?php

$app->configureMode('production', function () use ($app) {
    $app->config(array(
        'log.enable' => true,
        'debug' => false
    ));
});

$app->configureMode('local', function () use ($app) {
    $app->config(array(
        'log.enable' => false,
        'debug' => true
    ));
});
