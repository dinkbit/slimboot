<?php

$app->configureMode('production', function () use ($app) {
    $app->config([
        'log.enable' => true,
        'debug'      => false,
    ]);
});

$app->configureMode('local', function () use ($app) {
    $app->config([
        'log.enable' => false,
        'debug'      => true,
    ]);
});
