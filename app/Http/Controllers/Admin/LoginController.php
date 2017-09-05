<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Adminuser;
use App\Models\Adminnav;
use Illuminate\Support\Facades\Cookie;
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
              $adminnav =  new Adminnav();
              $nav_list = $adminnav->get_child_tree(0);
              $nav_list = self::navList($nav_list);
              session(['usernav'=>$nav_list]);
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
    private function navList($nav_list){
         $html = '';
           foreach ($nav_list as $k=>$v){
               $html.='<ul class="nav nav-list"><li><a href="#" class="dropdown-toggle"><i class="icon-desktop"></i><span class="menu-text">'.$nav_list[$k]['name'];
               $html.='</span><b class="arrow icon-angle-down"></b></a><ul class="submenu">';
               foreach ($nav_list[$k]['cat_id'] as $value){
                   $html.='<li><a href="'.$value['url'].'"><i class="icon-double-angle-right"></i>'.$value['name'].'</li></a>';
               }
               $html.='</ul></li></ul></li></ul></li></ul>';
           }
           return $html;
    }
}
