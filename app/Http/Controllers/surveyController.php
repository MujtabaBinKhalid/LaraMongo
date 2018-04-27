<?php

namespace App\Http\Controllers;

use App\survey as Moloquent;
use Illuminate\Http\Request;
use Faker\Factory as Faker;
use Input, Redirect;
use Illuminate\Support\Facades\DB;
use Charts;

class surveyController extends Controller
{
    
   function survey(){
    return view('students.survey');
   }

   function surveydata(Request $request){

    $optionanswers = array($request->q1,$request->q2,$request->q3,$request->q4,$request->q5,$request->q6,$request->q7);
    
    // $poorvotes= $this->countingvalues($optionanswers,"Poor");
    // $excellentvotes= $this->countingvalues($optionanswers,"Excellent");
    // $goodvotes= $this->countingvalues($optionanswers,"Good");
    // $averagevotes= $this->countingvalues($optionanswers,"Average");


  // not a good approach. 
  $poorvotes = 0;
  $excellentvotes = 0;
  $goodvotes = 0;
  $averagevotes = 0;
  
  
  
  foreach($optionanswers as $thisvalue) /*go through every value in the array*/
  {
        if($thisvalue === "Poor"){ /*if this one value of the array is equal to the value we are checking*/
        $poorvotes++; /*increase the count by 1*/
        }
  }

  
  foreach($optionanswers as $thisvalue) /*go through every value in the array*/
  {
        if($thisvalue === "Excellent"){ /*if this one value of the array is equal to the value we are checking*/
        $excellentvotes++; /*increase the count by 1*/
        }
  }

  
  foreach($optionanswers as $thisvalue) /*go through every value in the array*/
  {
        if($thisvalue === "Good"){ /*if this one value of the array is equal to the value we are checking*/
        $goodvotes++; /*increase the count by 1*/
        }
  }

  
  
  foreach($optionanswers as $thisvalue) /*go through every value in the array*/
  {
        if($thisvalue === "Average"){ /*if this one value of the array is equal to the value we are checking*/
        $averagevotes++; /*increase the count by 1*/
        }
  }
  $getTable = new Moloquent;
  $getTable->average =$averagevotes ;
  $getTable->poor =$poorvotes;
  $getTable->good = $goodvotes;
  $getTable->excellent =$excellentvotes;
  
  $getTable->save();
 //print($getTable);
  return redirect()->route('main');

}


 function displayinggraph(){
      if (session()->has('checking')) {
            $totalp = Moloquent::sum('poor');
            $totala = Moloquent::sum('average');
            $totalg = Moloquent::sum('good');
            $totale = Moloquent::sum('excellent');
              return view ('home',compact('totalp','totala','totalg','totale'));
      }
      else{
            return redirect()->route('outer');
      }
     

 }

}
    


  

