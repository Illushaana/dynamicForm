<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DynamicField;
use Validator;


class DynamicFieldController extends Controller
{

    public function addmore(){
        return view("dynamic_field");
    }

    public function addMorePost(Request $request){
            $rules = [];

            foreach($request->input('name') as $key => $value){
                $rules["name.{$key}"] ='required';
            }

            $validator = Validator::make($request->all(), $rules);

            if($validator->passes()){

                foreach($request->input('name') as $key => $value ){
                    DynamicField::create(['name'=>$value]);
                }
                return response()->json(['success'=>'done']);
            }

            return response()->json(['error'=>$validator->errors()->all()]);
    }

}