<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Slim\Slim(require_once __DIR__.'/config.php');

require_once __DIR__.'/controllers/main.php';

return $app;
