<?php

namespace App\Http\Controllers;

use App\User as Moloquent;
use Illuminate\Http\Request;
use Faker\Factory as Faker;
use  Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class RegistrationController extends Controller
{
 
    function welcome(){
        if (session()->has('checking')) {
            return redirect()->route('main');
        }
        else {
            return view('welcome');   
        }
    }
    function created(Request $request){
        $this->validate($request, [
            'name' => 'required|min:6|max:50',
            'email' => 'email',
            'password' => 'confirmed|min:6',
        ]);

        $getTable = new Moloquent;
        $getTable->username = $request->input('name');
        $getTable->email = $request->input('email');
        $getTable->password = $request->input('password');
        $getTable->save();

       print($getTable);
    }


    function login(Request $request){
    

        echo ($request->email);


        if(($request->email === "nerdware@gmail.com") && ($request->password==="nerdware")){
            session(["checking" => "true"]);
            echo($request->session()->get('checking'));
      
            return redirect()->route('main');
            
        }
       else {
           echo($request->session()->get('checking'));
        return redirect()->route('outer');
       }
  
        
    }

    function logout(Request $request){
        $request->session()->flush();
        return redirect()->route('outer');

    }
}
