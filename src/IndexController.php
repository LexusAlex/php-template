<?php

namespace Application;

class IndexController extends Controller {

    public function actionMain(): string
    {
        $this->db;
        $result = $this->db->query('SELECT VERSION()')->fetch();
        return 'Главная';
    }
}