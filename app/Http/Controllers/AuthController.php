<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Str;
use Hash;
use Auth;
class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function loginpost(Request $request){
        $request->validate([
            'email' =>'required',
            'password'=>'required'
        ]);
            if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password], true)){
            if(Auth::User()->is_role == '2'){
                return redirect()->intended('superadmin/dashboard');
            }else if(Auth::User()->is_role =='1'){
                return redirect()->intended('dashboard');
            }
            else if(Auth::User()->is_role=='0'){
                 return redirect()->intended('user/dashboard');
            }else{
                return redirect()->route('login')->with('info','data yang anda masukan tdk terdaftar');

            }
        }
        
        else{
            return redirect()->back()->with('info','masukan data anda dengan benar');
        }
    }
    public function registrasi(){
        return view('auth.registrasi');
    }

    public function registrasipost(Request $request){
     $request->validate([
        'name'=>'required',
        'email'=>'required|unique:users',
        'password'=>'required',
        'confirm_password'=>'required_with:password|same:password|min:6'
     ]);
     $user = new User;
     $user->name = trim($request->name);
     $user->email = trim($request->email);
     $user->password = Hash::make($request->password);
     $user->is_role = trim($request->is_role);
     $user->remember_token = Str::random(50);
     $user->save();
     return redirect()->route('userlist')->with('info','registrasi berhasil');
    
    }

    public function userlist(){

        $user = User::latest()->paginate(5);
        return view('auth.userlist', compact('user'));
    }

    public function delete($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('userlist')->with('info',' data user berhasil dihapus');

    }

    public function logout(){
        Auth::logout();
        return redirect(url('/'));
    }
}
