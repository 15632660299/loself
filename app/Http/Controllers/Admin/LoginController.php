<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Adminuser;
use Session,Redirect;
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function index(){
        return view('admin/login');
    }
    public function login(Request $request){
         $info = $request->All();
         $info['Username']=addslashes( $info['Username']);
          $adminuser =  new Adminuser();
          $user_info = $adminuser->userPassword($info['Username']);
          ///dd(md5(md5($info['Password']).$user_info['salt']).'---'.$user_info['salt'].$user_info['password'].'1---'.$info['Password']);
          if(md5(md5($info['Password']).$user_info['salt'])==$user_info['password']){
              session(['username'=>$info['Username']]);
                return Redirect::to('welcome');
          }else{
              echo '返回';
          }

    }
    public function loginout(){
        Session()->forget('username');
       // Cookie::queue('usersname', null , -1);
        return Redirect::to('admin');


    }
}
