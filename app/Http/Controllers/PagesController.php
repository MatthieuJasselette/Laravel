<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        $tasks = [
            'Go to the store',
            'Go t the market',
            'Go to work',
            'Go to the cafe'
        ];
    
        // developped form
        return view('welcome', [
            'tasks' => $tasks
        ]);
    
        /*
        contracted laravel form
        return view('welcome')->withTasks($tasks)
        */
    }
}
