<?php

namespace App\Http\Controllers;

use App\MAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CAdmin extends Controller
{
    public function index(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('index');
        }
    }

    public function login(){
        return view('login');
    }

    public function loginPost(Request $request){
        $user = $request->user;
        $password = $request->password;
        $data = MAdmin::where('user',$user)->first();
        if(count($data) > 0){ //apakah email tersebut ada atau tidak
            if($data->password){
                Session::put('name',$data->name);
                Session::put('user',$data->user);
                Session::put('login',TRUE);
                return redirect('index');
            }
            else{
                return redirect('login')->with('alert','Password atau Email, Salah !'.Hash::check($password,$data->password));
            }
        }
        else{
            return redirect('login')->with('alert','Password atau Email, Salahaa!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('login')->with('alert','Kamu sudah logout');
    }
}
