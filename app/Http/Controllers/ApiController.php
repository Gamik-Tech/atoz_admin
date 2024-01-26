<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Session;
use Illuminate\Support\Facades\Auth;



class ApiController extends Controller
{
    public function admin_signin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $url = 'https://7a03-2405-201-d032-4018-35ba-8881-5631-256c.ngrok-free.app/admin/signin';

        $response = Http::asForm()->get($url, [
            'user_email' => $email,
            'user_password' => $password,
        ]);

        if ($response->successful()) 
        {
            $responseData = $response->json();
            $token=$responseData['token'];

            $response1 = Http::withToken($token)->get('https://7a03-2405-201-d032-4018-35ba-8881-5631-256c.ngrok-free.app/admin/order/getTotalTransactionToday', [
            ]);
           
            if ($response1->successful()) 
            {
                $responseData1 = $response->json();
            }
            if (isset($token) && !empty($token)) 
            {
                Session::put('api_token', $token);
                return redirect('/home');
            }
            else 
            {
                return redirect()->back()->with('message', 'Invalid credentials');
            }
        } 
        else 
        {
            return redirect()->back()->with('message', 'Invalid credentials');
        }
    }

    public function admin_logout()
	{

        if (Auth::check()) 
        {
            Auth::logout();
            Session::forget('api_token');
        }
        Session::flush();
        return redirect('/');
		
	}
    public function forgot_password()
	{
        return view('forgotpassword');
	}
}
