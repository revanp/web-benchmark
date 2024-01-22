<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $text = '';
        for($i = 0; $i < 100; $i++){
            $text .= "Hello World! \n";
        }

        return response($text)->header('content-type', 'text/plain');
    }
}
