<?php

namespace App\Http\Controllers;

use App\r;
use Illuminate\Http\Request;
use App\Register;
use Illuminate\Support\Facades\Cache;
use Mail;
use App\Mail\verifyMail;
use Session;
class TwoController extends Controller
{

    public function store(Request $request)
    {
       $verify = Register::where('email',$request->email)->where('password',$request->password)->first();
       if ($verify) {
           return "Login is Done";
       }else {
           return back()->with('Not_match','Email and password are incorrect!');
       }
    }

    public function register(Request $request)
    {

         $register  = Register::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        $register->save();
        if ($register) {
            $OTP = rand(100000,999999);
            Mail::to($request->email)->send(new verifyMail($OTP));
            $OTP_Cached = Cache::put('OTP', $OTP, 40);
            if ($OTP_Cached) {
                Session::put('user', $request->email);
                return redirect('/secondVerify');
            }else{
                return "something is worng";
            }
            
            
        }
    }
    public function secondeVerify()
    {
        return view('2FA.secondVerify');
    }

    public function OTP_Verify(Request $request)
    {
        $chacheOtp = Cache::get('OTP');
        if ($chacheOtp == $request->OTP) {
            return redirect('/homePage');
        }elseif ($chacheOtp  == '') {
            return back()->with('timeout','OTP Session expired please try again..');
        }
        else {
            return back()->with('unvalidOTP','OTP doesn\'t match please try again..');
        }
    }

    public function ResentOTP()
    {
        $OTP = rand(100000,999999);
        $user_mail = Session::get('user');
            Mail::to($user_mail)->send(new verifyMail($OTP));
            $OTP_Cached = Cache::put('OTP', $OTP, 40);
            if ($OTP_Cached) {
                return redirect('/secondVerify');
            }else{
                return "something is worng";
            }
    }


   
}
