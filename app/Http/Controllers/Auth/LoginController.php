<?php

namespace App\Http\Controllers\Auth;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use App\Http\Requests\CunstomerRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->redirectTo = URL::previous();
        $this->middleware('guest')->except('logout');
    }

    public function userLogin(Request $request)
    {
        if (Auth::attempt(array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ))) {
            session([
                'name' => $request->get('username')
            ]);
            return redirect()->intended();
        } else {
            Session::flash('message', "Invalid Credentials , Please try again.");
            return Redirect::back();
        }
    }

    public function register(CunstomerRequest $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        if (Customer::create($data)) {
            Auth::attempt(array(
                'email' => $request->get('email'),
                'password' => $request->get('password')
            ));
            return redirect()->intended();
        }
    }


    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
