<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

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
    protected $redirectTo; 


    protected function Authenticated(){
        switch(Auth::user()->role_id){
            case '300':
            $this->redirectTo = 'admin';
            return redirect()->route('admin');
                break;
            case '200':
                $this->redirectTo = 'librarian';
                 return redirect()->route('librarian');
                break;
            case '100':
                $this->redirectTo = 'student';
                 return redirect()->route('student');
                break;
            default:
                $this->redirectTo = 'login';
                return redirect()->route('login');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
