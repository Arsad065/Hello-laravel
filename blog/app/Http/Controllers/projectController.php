<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectController extends Controller
{
    public function home() {
        return view('welcome',[
            'foo' => 'Arsad',
            'tasks' => [
                'Learn Laravel',
                'Clear assignment company',
                'Complete freelance semi-funcsion'
            ]
        ]);
    }

    public function contact() {
        return view('contact');
    }
}
