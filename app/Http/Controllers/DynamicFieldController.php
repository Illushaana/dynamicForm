<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DynamicField;
use Validator;


class DynamicFieldController extends Controller
{
    function index(){
        return view('dynamic_field');
    }

    function insert(Request $request){
        if($request->ajax()){
            $rules = array([
                'nama.*'=> 'required',
                'username.*' => 'required',
                'password.*' => 'required',
                'email.*' => 'required',
                'phone.*' => 'required',
                'occupation.*'=> 'required']);

                $error = Validator::make($request->all(), $rules);
                if($error->fails()){
                    return response()->json(['error' => $error->errors()->all]);

                }

                $name = $request->nama;
                $username = $request->username;
                $password = $request->password;
                $email = $request->email;
                $phone = $request->phone;
                $occupation= $request->occupation;


                for($count = 0; $count < count($name); $count++){


                    $data = array ([
                        'nama.*'=> $nama[$count],
                        'username.*' => $username[$count],
                        'password.*' => $password[$count],
                        'email.*' => $email[$count],
                        'phone.*' => $phone[$count],
                        'occupation.*'=> $occupation[$count]  
                    ]);
                    $insert_data[] = $data;

                }

                DynamicField::insert($insert_data);
                return response()->json([
                    'success' => 'Data Added successfully.'
                ]);
        }
    }
}
