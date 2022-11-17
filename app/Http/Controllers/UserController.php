<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    //
    public function registeruser(Request $req){

        $req->validate([
            'name'=>'required',
            'email'=>'required|unique:users',
            'pass'=>'required'
        ]);
        $data=new User();
        $data->name=$req->name;
        $data->email=$req->email;
        $data->password= Hash::make($req->pass);
        $data->save();
        if($data){
           
             return redirect('/login');
        }
        else{
            return back()->with('fail','unable to sign up');
        }
    }

    public function loginuser(Request $req){

        $req->validate([
            'email'=>'required',
            'pass'=>'required'
        ]);

        $user=User::where('email','=',$req->email)->first();
        if($user)
        {
            if(Hash::check($req->pass,$user->password))
            {
                return redirect('/');
            }
            else{
                return back()->with('fail','password not matched');
            }
        }else{
            return back()->with('fail','not found');
        }
        
    }
}
