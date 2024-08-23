<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Page;
use App\Models\User;
use App\Models\ProductCategory;
use App\Models\Setting;


class LoginController extends Controller
{
    private function myList()
    {
        $settings = DB::table('settings')->first();
        $clients = DB::table('clients')->get();

        return [$settings, $clients];
    }

    public function index() {
        $page = Page::find(11);
        $myList = $this->myList(); 
        return view('auth.login', compact('page','myList'));
    }

    public function store(Request $request) {
        // return $request;
        $request->validate (
            [
                'email'=>'required|exists:users,email',
                'password'=>'required'
            ]
        );

        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email'=>$email,'password'=>$password], $request->remember)) {
            $user = User::where('email',$email)->first();
            Auth::login($user);
            return redirect($user->role);
        } else {
            return redirect('login')->withErrors('Invalid password!');
        }
    }

    public function show(string $id)
    {
        // Forgot Pasword View
        return view('auth.forgot');
    }

    public function update(Request $request, string $id)
    {
        // Forgot Pasword Post
        $request->validate(
            [
              'email'=>'required|exists:users,email',
            ]
        );

        $email = $request->input('email');
        $token = Str::random(64);
        $user = User::where('email', $email)->first();
        // $user->remember_token = $token;
        $user->update();

        // Mail::send('auth.forgot', ['token'=>$token], function($message) use($request){
        //   $message->to($request->input('email'));
        //   $message->subject('Reset Password');
        // });

        $to = "ranjith179228@gmail.com, ranjithkcrn@gmail.com";
        $subject = "Reset Password";
        
        $message = "
        <html>
        <head>
        <title>Reset Password</title>
        </head>
        <body>
        <p>Click below link to reset password</p>
        <p><a href='https://bluggleconferences.com/forgot?token=".$token."'>Click Here</a></p>
        </body>
        </html>
        ";
        
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        
        // More headers
        $headers .= 'From: noreplay@tankermilktrade.com' . "\r\n";
        // $headers .= 'Cc: myboss@example.com' . "\r\n";
        
        mail($to,$subject,$message,$headers);

        return back()->with('Success','We have sent password reset link to your email.');
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
