<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TitleController extends Controller
{
    public function index() {
        $name = 'Thaísa';

        $arr = [1, 2, 3, 4, 5];
    
        $names =['Matheus', 'Maria', 'João', 'Carol'];
    
        return view('welcome',
            [
                'name' => $name,
                'arr' => $arr,
                'names' => $names
            ]
        );
    }

    public function create() {
        return view('titles.create');
    }
}
