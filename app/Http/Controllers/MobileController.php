<?php

namespace App\Http\Controllers;

use App\Services\TwilioService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class MobileController extends Controller
{
    protected $twilioService;

    public function __construct(TwilioService $twilioService)
    {
        $this->twilioService = $twilioService;
    }
    public function showPhoneNumberForm()
    {
        return view("main/get_phone")->with('page_name', 'Doğrulama');
    }
    public function sendVerificationCode(Request $request)
    {
        $code = rand(10000, 99999);

        $phonenumber = "+90".$request->phone_number;
        $result = $this->twilioService->sendSMS($phonenumber, $code);

        if ($result) {
            User::where('id', Auth::user()->id)->update([
                'phone_number' => $phonenumber,
                'mobile_verification_code' => $code
            ]);
            
            return redirect('/mobile/verify')->with('page_name', 'Doğrulama');
        }else {
            dd("Başarısız");
        }
    }
    public function showVerificationForm()
    {
        return view("main/verify_mobile");
    }
    public function verifyCode(Request $request)
    {
        $user = User::where('id', Auth::user()->id)->first();

        if ($user->mobile_verification_code == $request->verification_code) {
            User::where('id', Auth::user()->id)->update([
                'mobile_verification_code' => null,
                'mobile_verified' => 1
            ]);
            return redirect('/');
        }else{
            return redirect()->back();
        }
    }
}
