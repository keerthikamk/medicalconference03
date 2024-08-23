<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Psr\Http\Message\RequestInterface;
use Illuminate\Support\Facades\DB;
use App\Models\Page;
use App\Models\Package;

class RegisterController extends Controller
{
    private function myList()
    {
        $settings = DB::table('settings')->first();
        $clients = DB::table('clients')->get();

        return [$settings, $clients];
    }

    public function index()
    {
        $url = 'https://v6.exchangerate-api.com/v6/e1c7e5b4b8263e6816b63bc6/latest/USD';
        $response = Http::withRequestMiddleware(
            function (RequestInterface $request) {
                return $request->withHeader('X-Example', 'Value');
            }
        )->get($url);
        $eur_rate = $response->json($key = 'conversion_rates');
        // return $eur_rate;
        
        $packages = Package::distinct()->get(['package']);
        $currency['USD'] = 1;
        $currency['EUR'] = $response->json($key = 'conversion_rates.EUR');
        $currency['GBP'] = $response->json($key = 'conversion_rates.GBP');
        
        foreach($packages as $package)
        {
            $package->data = DB::table('packages')->where("package", $package->package)->get();
        }
        // return compact('currency','packages');
        $page = Page::find(10);
        $myList = $this->myList(); 
        return view('auth.register', compact('currency','packages','page','myList'));
    }

    public function store(Request $request) {
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required|unique:users,email',
                'phone'=>'required|unique:users,phone',
                'password'=>'required|confirmed',
            ]
        );

        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->password = 'jhgjhg';
        $user->role = $request->input('role');
        $user->status = 'active';
        $user->save();

        // Auth::login($user);
        return redirect('login');
    }

}
