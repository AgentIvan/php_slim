<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$routes = require __DIR__ . '/../app/routes/routes.php';
$routes($app);

$app->run();

// sftp://admin:Qq123456@185.244.172.190