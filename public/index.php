<?php

declare(strict_types=1);

use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

require __DIR__ . '/../vendor/autoload.php';

// Проектируем систему без фреймворков

// Подключаем обработчик ошибок
// docker-compose run --rm --user="root" php-cli-alpine composer require filp/whoops

$whoops = new Run();
$whoops->pushHandler(new PrettyPageHandler);
$whoops->register();

// Подключаем библиотеку для работы с http
// docker-compose run --rm --user="root" php-cli-alpine composer require slim/psr7

//$request = new \Slim\Psr7\Request();