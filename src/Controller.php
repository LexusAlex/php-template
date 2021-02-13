<?php

namespace Application;

use App;

abstract class Controller
{
    public App $app;
    public $db;

    public function __construct(App $app)
    {
        $this->app = $app;
        $this->db = $app->mariadb;
    }
}