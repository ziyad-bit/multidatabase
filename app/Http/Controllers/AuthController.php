<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:web1,web2,web3')->except('logout');
        $this->middleware('auth:web1,web2,web3')->only('logout');
    }

    public function get_login()
    {
        return view('login');
    }

    public function post_login(Request $request)
	{
		$credentials = $request->only('email', 'password');

		if (auth()->attempt($credentials) | auth('web2')->attempt($credentials) | auth('web3')->attempt($credentials)) {
			return redirect()->route('items.index');
		} else {
			return redirect()->route('get.login')->with(['error' => 'incorrect password or email']);
		}
	}

    public function get_signup()
    {
        return view('signup');
    }

    public function post_signup(UserRequest $request)
    {
        $db   = rand(1,3);
        $user = User::on('mysql'.$db)->create($request->validated() + ['db'=>$db]);

        /** @var \Illuminate\Contracts\Auth\Authenticatable $user */
        Auth::guard('web'.$db)->login($user);

        return redirect()->route('items.index')->with('success','you created account successfully');
    }

    public function logout()
	{
		Auth::logout();

		return redirect()->route('get.login');
	}
}
