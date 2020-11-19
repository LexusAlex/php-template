<?php
return [
    'id' => 'base-yii2',
    'basePath' => dirname(__DIR__),
    // это пространство имен где приложение будет искать все контроллеры
    'controllerNamespace' => 'test\controllers',
    'aliases' => [
        '@test' => dirname(__DIR__),
    ],
    'defaultRoute' => 'test/index'
];