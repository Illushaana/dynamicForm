<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DynamicField;
use Validator;
use Illuminate\Support\Facades\Crypt;


class DynamicFieldController extends Controller
{

    public function addmore(){
        return view("dynamic_field");
    }

    public function addMorePost(Request $request){
           
            if($request->ajax()){
                $rules = array(
                        'nama.*' => 'required|min:3|max:30',
                        'username.*' =>'required|max:30',
                        'password.*'=>'required',
                        'email.*'=>'required|email',
                        'phone.*' => 'required|min:10|numeric|starts_with:+62',
                        'occupation.*'=>'required'
                );
                $error = Validator::make($request->all(),$rules);
                if($error->fails()){
                    return response()->json(['error' => $error->errors()->all()
                    ]);
                }

                $nama = $request->nama;
                $username = $request->username;
                $password = $request->password;
                $email = $request->email;
                $phone = $request->phone;
                $occupation = $request->occupation;
                
                for($count = 0; $count <count($nama);$count++){
                
                    $data = array(
                        'nama' => $nama[$count],
                        'username' => $username[$count],
                        'password' => $password[$count],
                        'email' => $email[$count],
                        'phone' => $phone[$count],
                        'occupation' => $occupation[$count]
                    );
                    $insert_data[] = $data;
                }

                DynamicField::insert($insert_data);
                return response ()->json(['success' => 'Data Added Successfully']);
            }

            }
            

}