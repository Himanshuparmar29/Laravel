<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class studentController extends Controller
{
    public function show(){
        $students=DB::table('students')->get();
        return view('show',['data'=>$students]);
    }
    public function showOne($id){
        $student=DB::table('students')->where('id',$id)->get();
        return view('show',['data'=>$student]);
    }
    public function delete($id){
        DB::table('students')->where('id',$id)->delete();
    }
    public function update($id){
        DB::table('students')->where('id',$id)->update([
            'name'=>'Himanshu',
            'age'=>20
        ]);
        // return view('show',['data'=>])
    }
}
