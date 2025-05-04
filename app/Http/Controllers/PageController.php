<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $activeRoute = \Route::currentRouteName(); // Aktif route adını al
        return view('home', compact('activeRoute'));
    }
}
