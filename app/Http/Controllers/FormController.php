<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return view('formpage');
    }

    public function workAtData(Request $request){

        $answer = new Answer();
        $answer->name=$request->name;
        $answer->city=$request->city;
        $answer->pet_name=$request->pet_name;
        $answer->month=$request->month;
        $answer->count = $request->count;
        $answer->breed=$request->breed;
        $answer->save();
        return response()->json($request, 200);
    }


}
