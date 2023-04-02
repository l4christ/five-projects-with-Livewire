<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function showCalculator() {
        return view('showcalculator');
    }

    public function showTodo() {
        return view('showtodo');
    }

    public function showCascading() {
        return view('showcascading');
    }

    public function showImage() {
        return view('showimage');
    }
}
