<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentController extends Controller
{
   public function show(){
    $students=DB::table('students')->where('age','>',20)->get();
    return view('show',[
        'data'=>$students
    ]);
   }
}
