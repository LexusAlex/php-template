<?php

declare(strict_types=1);

namespace Application;

class Application
{
    public function sum (array $numbers) : int {
        if (empty($numbers)) {
            return 0;
        } else {
            return array_sum($numbers);
        }
    }

}