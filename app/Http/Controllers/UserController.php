<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserVerificationMail;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Password;

use App\Models\User;

use Str;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $creds = $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($creds)) {
            $request->session()->regenerate();
            $request->session()->put('email', $request->input('email'));

            return redirect()->intended('/account')->with('success', 'Başarıyla giriş yaptınız.');
        }

        return back()->withErrors([
            'login_error' => 'E-mail veya şifre yanlış.',
        ])->withInput($request->except('password'));
    }

    public function register(Request $request)
    {
        $existing_user = User::where('email', $request->email)->first();
        $verification_code = Str::random(6);

        if ($existing_user) {
            return redirect()->intended('user?type=register')->with('fail', 'Email adresi zaten kayıtlı.');
        }

        $user = new User();
        $user->email = $request->email;
        $user->verification_code = $verification_code;
        $user->email_verified_at = null;
        $user->email_verified = false;
        $user->mobile_verified = false;
        $user->password = Hash::make($request->password);
        $user->remember_token = null;
        $user->balance = 0;
        $user->created_at = now();
        $user->updated_at = now();
        $user->save();

        Mail::to($request->email)->send(new UserVerificationMail($verification_code));

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/')->with('success', 'Hesap oluşturuldu, mail adresinize doğrulama kodu gönderildi.');
        }

        return redirect()->intended('user?type=register')->with('fail', 'Kayıt başarılı ama giriş yaparken bir sorun oluştu.');
    }

    public function contact_signup(Request $request)
    {
        return redirect()->intended('user?type=register')->with('email', $request->input('email'));
    }
    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
            return redirect('/')->with('success', 'Çıkış Yapıldı.');
        }

        return redirect('/');
    }
    public function account_page()
    {
        $user = User::where('id', Auth::user()->id)->first();

        if (!$user->email_verified) {
            if ($user->verification_code == '') {
                return redirect()->intended('verify-email');
            } else {
                return redirect()->intended('verify');
            }
        }

        $transactions = DB::table('transactions')->where('email', $user->email)->get();

        return view('main/account')->with([
            'page_name' => 'Hesabım',
            'transactions' => $transactions
        ]);
    }
    public function send_verify_code()
    {
        $email = Auth::user()->email;

        if (!$email) {
            return response()->json(['error' => 'E-posta gereklidir'], 400);
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return response()->json(['error' => 'Geçersiz e-posta formatı'], 400);
        }

        $user = DB::table('users')->where('email', $email)->first();

        Mail::to($email)->send(new UserVerificationMail($user->verification_code));

        return redirect()->intended('verify');
    }
    public function verify_account(Request $request)
    {
        $user = DB::table('users')->where('id', Auth::user()->id)->first();

        if ($user && $user->verification_code == $request->input('verification_code')) {
            DB::table('users')->where('id', $user->id)->update(['verification_code' => '', 'email_verified' => 1]);

            return redirect()->intended('account');
        }

        return redirect()->back()->withErrors(['message' => 'Doğrulama kodu geçersiz.']);
    }
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();

        $user = DB::table('users')->where('email', $googleUser->email)->first();

        if (!$user) {
            DB::table('users')->insert([
                'first_name' => explode(' ', $googleUser->name)[0],  // İlk isim
                'last_name' => explode(' ', $googleUser->name)[1] ?? '',  // Soyisim
                'email' => $googleUser->email,  // E-posta
                'verification_code' => null,  // Boş bırakabilirsiniz
                'email_verified_at' => now(),  // Şu anki tarih
                'email_verified' => 1,  // E-posta doğrulandı
                'password' => bcrypt(Str::random(16)),  // Rastgele şifre (kullanıcıya gerekli olmayabilir)
                'remember_token' => null,  // Boş bırakabilirsiniz
                'phone_number' => null,  // Boş
                'about' => null,  // Boş
                'balance' => 0,  // Varsayılan 0
                'created_at' => now(),
                'updated_at' => now(),
            ]);


            $user = DB::table('users')->where('email', $googleUser->email)->first();
        } else {
            DB::table('users')
                ->where('email', $googleUser->email)
                ->update([
                    'updated_at' => now(),
                ]);
        }

        Auth::loginUsingId($user->id);

        return redirect('/');
    }
}
