<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            $req->session()->put('user',$user);
            return 'Korisnik il sifra nisu validni!';
           
        }
        else{
            return redirect('/');
       }
       
     
    }
}
