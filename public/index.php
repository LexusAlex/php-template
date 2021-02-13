<?php

declare(strict_types=1);

use Whoops\Handler\PrettyPageHandler;
use DI\ContainerBuilder;
use Whoops\Run;
use Application\IndexController;

require __DIR__ . '/../vendor/autoload.php';

// Проектируем систему без фреймворков и приступов злости

// Подключаем обработчик ошибок
// docker-compose run --rm --user="root" php-cli-alpine composer require filp/whoops

$whoops = new Run();
$whoops->pushHandler(new PrettyPageHandler);
$whoops->register();

// Подключаем контейнер внедрения зависимостей
// docker-compose run --rm --user="root" php-cli-alpine composer require php-di/php-di
$builder = new ContainerBuilder();
// Добавляем зависимости
$builder->addDefinitions([
    PDO::class => static function (\Psr\Container\ContainerInterface $container) {
        /**
         * @var array $confuguration
         * @psalm-suppress MixedArrayAccess
         * @psalm-suppress MixedArgument
         */
        $confuguration = $container->get('configurations')['mariadb'];
        $dsn = $confuguration['driver'] . ':dbname=' . $confuguration['dbname'] . ';host=' . $confuguration['host']  .
            ';port=' . $confuguration['port'];
        return new PDO(
            $dsn,
            $confuguration['user'],
            $confuguration['password'],
            $confuguration['constants']
        );
    },
    'configurations' => [
        'mariadb' => [
            'driver' => 'mysql',
            'dbname' => 'template_dev',
            'host' => 'mariadb-ubuntu',
            'port' => 3306,
            'user' => 'root',
            'password' => 'template',
            'constants' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ]
        ],
    ],
]);
try {
    $container = $builder->build();
} catch (Exception $e) {
}

class App {

    public \PDO $mariadb;

    public function __construct(\Psr\Container\ContainerInterface $container)
    {
        $this->mariadb = $container->get(\PDO::class);
    }

    public function runAction($class, $method) {
        $obj = new $class($this);
        return $obj->$method();
    }
}

$app = new App($container);

// Простейший роутер
$url = $_SERVER["REQUEST_URI"];

if ($url == '/') {
    echo $app->runAction(Application\IndexController::class, 'actionMain');
} elseif ($url == '/test') {
    echo 'TEST';
} else {
    echo 'Не определено';
}





// Подключаем библиотеку для работы с http
// docker-compose run --rm --user="root" php-cli-alpine composer require slim/psr7

//$request = new \Slim\Psr7\Request();