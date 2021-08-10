<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("home.index");
    }

    public function login(Request $request){
$request->validate([
    'email' => 'required|email',
    'senha' => 'required',
]);

$credentials = ['email' =>$request->email, 'password' =>$request->senha];
if(Auth::attempt($credentials)){
    return redirect()->intended('painel');
}else{
    return redirect() ->with('msg' , 'Acesso negado para essas credenciais');
}
}

public function painel(){

    return view('auth.painel');
}
}

