<?php

declare(strict_types=1);

namespace App\Controller;

class IndexController extends AbstractController
{
    public function index()
    {
        $text = '';
        for($i = 0; $i < 100; $i++){
            $text .= "Hello World! \n";
        }

        return $text;
    }
}
