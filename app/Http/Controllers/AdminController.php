<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\User;
use App\Models\product;

class AdminController extends Controller
{

    public function dashboard()
    {
        return view('admin/dashboard', [
            'page_name' => 'Dashboard',
            'data' => (object) [
                'users_count' => DB::table('users')->where(['role' => 'user'])->get()->count(),
                'e_unverified' => DB::table('users')->where('email_verified', 0)->count(),
                'm_unverified' => DB::table('users')->where(['role' => 'user', 'mobile_verified' => 0])->count(),
                'products_count' => DB::table('product')->where('active', 1)->get()->count(),
                'contacts' => DB::table('contacts')->get()->count(),
                'buy_history' => DB::table('transactions')->get()->count(),
                'total_income' => DB::table('transactions')->sum('price'),
                'weekly_income' => DB::table('transactions')
                    ->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
                    ->sum('price'),
                'sell_history' => DB::table('transactions')->get()
            ]
        ]);
    }
    public function admin_login(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $admin_user = User::where('email', $data['username'])->first();

        if (!$admin_user) {
            return redirect()->back()->withErrors('Admin verileri bulunamadı.');
        }

        if (Hash::check($data['password'], $admin_user->password)) {
            Auth::loginUsingId($admin_user->id);

            return redirect('/admin');
        } else {
            return redirect()->back()->withErrors('Yanlış şifre ve ya email.');
        }
    }
    
    public function products_list(Request $request)
    {
        $list = product::all();

        return view('admin/detail_list', [
            'page_name' => 'Ürünler',
            'page' => 'products',
            'list' => $list
        ]);
    }
    
    public function users_list(Request $request)
    {
        $list_of = $request->item;

        switch ($list_of) {
            case "e":
                $list = User::where([
                    'role' => 'user',
                    'email_verified' => 0
                ])->get();
                break;
            case "m":
                $list = User::where([
                    'role' => 'user',
                    'mobile_verified' => 0
                ])->get();
                break;
            default:
                $list = User::where(
                    'role', 'user'
                )->get();
        }

        return view('admin/detail_list', [
            'page_name' => 'Kullanıcılar',
            'page' => 'users',
            'list' => $list
        ]);
    }
    
    public function buy_history(Request $request)
    {
        $list = DB::table('transactions')->get();

        return view('admin/detail_list', [
            'page_name' => 'Satın Alma Geçmişi',
            'page' => 'buy_history',
            'list' => $list
        ]);
    }
    public function contact_list(Request $request)
    {
        $list = DB::table('contacts')->get();

        return view('admin/detail_list', [
            'page_name' => 'İletişim Mesajları',
            'page' => 'contacts',
            'list' => $list
        ]);
    }
    public function user_control(Request $request)
    {
        $list = User::where('id', $request->id)->first();

        return view('admin/user_control', [
            'page_name' => 'Kullanıcı',
            'list' => $list
        ]);
    }
}
