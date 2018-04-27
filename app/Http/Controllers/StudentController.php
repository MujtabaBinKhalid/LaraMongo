<?php

namespace App\Http\Controllers;

use App\Student as Moloquent;
use Illuminate\Http\Request;
use Faker\Factory as Faker;
use Input, Redirect;
use Illuminate\Support\Facades\DB;



class StudentController extends Controller
{
     function index(Request $request){

      if ($request->session()->has('checking')) {
        $students = Moloquent::all();
        return view('students.index',compact('students'));
       }
    else {
      return redirect()->route('outer');
    }

      
      
      
     }

     function create(){
      if (session()->has('checking')) {
     
        return view('students.create');
      }
      else {
        return redirect()->route('outer');
      }

     }
     function store(Request $request){
      if ($request->session()->has('checking')) {
        $getTable = new Moloquent;
        $getTable->name = $request->input('name');
        $getTable->id = $request->input('id');
        $getTable->email = $request->input('email');
        $getTable->phone = $request->input('phone');
        $getTable->gender = $request->input('gender');
        $getTable->save();
  
        return redirect()->route('main');
   
      }
      else {
        return redirect()->route('outer');
      }

      
  }

  function editrecord($eid){
    if (session()->has('checking')) {
      $sid = $eid;
      session(['editid' => $sid]);
    
  $student =Moloquent::where('id',$eid)->first();
      return view('students.edit',compact('student'));
       
    }
    else {
      return redirect()->route('outer');
    }

      }


      function updatingrecord(Request $request){

        if (session()->has('checking')) {
          Moloquent::where('id',$request->session()->get('editid'))
          ->update(['name'=> $request->input('name'),
                    'id'=>$request->input('id'),
                    'email'=> $request->input('email'),
                   'phone'=> $request->input('phone'),
                    'gender'=>$request->input('gender')]);
                   return redirect()->route('main');
  
        }
        else {
          return redirect()->route('outer');
        }
    

     
                }
  function deleterecord($id){
    if (session()->has('checking')) {
      $students =Moloquent::where('id',$id)->first();
      $students->delete();
      return redirect()->route('main');

    }
    else {
      return redirect()->route('outer');
    }
     }


}