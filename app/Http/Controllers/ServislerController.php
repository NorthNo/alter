<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServislerController extends Controller
{
    public function index(Request $request){
        $products = DB::table('product')->get();

        return view('main/servisler', [
            'page_name' => 'Servis',
            'products' => $products
        ]);
    }
}
