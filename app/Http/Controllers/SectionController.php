<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SSS;

use Illuminate\Support\Facades\DB;

class SectionController extends Controller
{
    public function index(Request $request)
    {
        if ($request->page == "sss") {
            return view("admin/sections/sss")->with('data', SSS::get());
        }

        return view("admin/sections/" . $request->page);
    }
    public function add(Request $request)
    {
        if ($request->page == 'mps') {
            $data = $request;

            $update = DB::table('sections')->where('type', 'mps')->update([
                'title' => $data->title,
                'content' => $data->content,
                'type' => 'juc'
            ]);

            if(!$update){
                return back()->with('error','Veriler güncellenemedi.');
            }
        }
        if ($request->page == 'juc') {
            $data = $request;

            $update = DB::table('sections')->where('type', 'juc')->update([
                'content' => $data->content,
                'type' => 'juc'
            ]);

            if(!$update){
                return back()->with('error','Veriler güncellenemedi.');
            }
        }
        if ($request->page == 'sss') {
            $data = $request->input('questions');

            $existingRecords = SSS::all();

            foreach ($data as $index => $question) {
                $title = $question['title'];
                $content = $question['content'];

                if ($existingRecords->count() >= 4) {
                    $existingRecords[$index]->update([
                        'answer' => $title,
                        'question' => $content
                    ]);
                } else {
                    SSS::create([
                        'answer' => $title,
                        'question' => $content
                    ]);
                }
            }

            if ($existingRecords->count() > 4) {
                $excessCount = $existingRecords->count() - 4;
                $existingRecords->slice(4)->each(function ($record) {
                    $record->delete();
                });
            }
        }
        return redirect()->back();
    }
}
