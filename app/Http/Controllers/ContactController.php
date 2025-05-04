<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        return view('main/contact')->with([
            "page_name" => "İletişim",
            "data" => DB::table("sections")->where('type', 'juc')->first() ??
            'Quisque nec enim vitae libero tempor dignissim a a purus. Morbi tempus quis odio id faucibus.
            Praesent facilisis nisl pretium, posuere velit lobortis, semper nunc. Cras fringilla turpis at posuere tincidunt.
            Quisque id tristique lorem.'
        ]);
    }
    public function contact_form(Request $request)
    {
        $validatedData = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email',
            'title' => 'nullable|string',
            'message_content' => 'required|string',
        ]);

        Mail::send('emails.contact', $validatedData, function ($message) {
            $message->to(env('MAIL_FROM_ADDRESS'))
                ->subject('Yeni İletişim Mesajı');
        });

        DB::table('contacts')->insert([
            'user_id' => null,
            'name' => $request->fullname,
            'email' => $request->email,
            'title' => $request->title,
            'content' => $request->message_content,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return back()->with('success', 'Mesajınız iletildi, E-Mail adresinize geri dönüş sağlanacaktır.');
    }
    public function contact_message(Request $request)
    {
        if (!$request->has('id')) {
            return redirect()->back()->withErrors('ID bulunamadı.');
        }

        $data_of_id = DB::table('contacts')->where('id', $request->id)->first();

        return view('admin/contact_message', [
            'page_name' => $data_of_id->email ?? '',
            'data' => $data_of_id
        ]);
    }

    public function send_reply(Request $request)
    {
        if (!$request->has('id') || !$request->has('reply_message')) {
            return redirect()->back()->withErrors('ID veya cevap mesajı eksik.');
        }

        //Yapılacaklar var 
        //Admin yanıtları veritabanında tutulacak
        //Kullanıcıya admin yanıtları mail olarak gönderilecek

        return redirect('contact_message?id=' . $request->id)
            ->with('success', 'Yanıt başarıyla gönderildi.');

    }


}
