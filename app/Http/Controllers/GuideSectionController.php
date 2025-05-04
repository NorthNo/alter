<?php

namespace App\Http\Controllers;

use App\Models\GuideSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuideSectionController extends Controller
{
    public function index()
    {
        $nav_titles = DB::table('guide_sections')->pluck('title');

        $guideSections = GuideSection::all();

        // Verileri view'e gönderelim
        return view('main.kurulum',[
            'page_name' => 'Kurulum',
            'items_nav' => $nav_titles
        ], compact('guideSections'));
    }
}
