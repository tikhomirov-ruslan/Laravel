<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleController extends Controller
{
    public function index()
    {
        $title = 'That is a simple page!';
        $message = 'Tikhomirov Ruslan';
        $items = ['PHP', 'Laravel', 'Blade', 'HTML', 'CSS'];
        
        return view('simple', compact('title', 'message', 'items'));
    }
}