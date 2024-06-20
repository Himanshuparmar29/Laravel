<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentController extends Controller
{
   public function showOne($id){
    $students=DB::table('students')->where('id','=',$id)->get();
    return view('show',[
        'data'=>$students
    ]);
   }
   public function show(){
    $students=DB::table('students')->get();
    return view('show',[
        'data'=>$students
    ]);
   }
   public function update($id){
        DB::table('students')
        ->where('id',$id)
        ->update([
            'name'=>'Nidhim'
        ]);
   }

   public function delete($id){
    DB::table('students')
        ->where('id',$id)
        ->delete();
   }
}
