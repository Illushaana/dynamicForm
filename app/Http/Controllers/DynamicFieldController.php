<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DynamicField;
use Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Str;


class DynamicFieldController extends Controller
{

    public function addmore(){
        return view("dynamic_field");
        
    }

     function addMorePost(Request $request){
        //  return json_encode($request->all());

        
        if($request->ajax()){
            Validator::extend('phoneval', function($atribute, $value){
                return Str::startsWith($value, '0') ||Str::startsWith($value, '+62');
            });

            Validator::extend('occupationval', function($atribute, $value){
                return $value=='Frontend' || $value=='Backend' || $value=='Fullstack';
            });

                $rules = array(
                    'nama.*' => 'required|max:30',
                    'username.*' => 'required|max:30',
                    'password.*' => 'required',
                    'email.*' => 'required|regex:/^([a-z0-9+-]+)(.[a-z0-9+-]+)*@([a-z0-9-]+.)+[a-z]{1,6}$/ix',
                    'phone.*' => 'required|min:10|phoneval',    
                    'occupation.*' => 'required|occupationval'
                );

                $error = Validator::make($request->all(), $rules);
                if($error->fails()){
                    return response()->json([
                        'error' => $error->errors()->all()
                    ]);

                }
                $nama =$request->nama;
                $username = $request->username;
                $password = $request->password;
                $email = $request->email;
                $phone = $request->phone;
                $occupation = $request->occupation;

                // $ePassword = Crypt::encryptString($request->password);

                for($count = 0; $count < count($nama); $count++){
                    $ePassword = Crypt::encryptString($password[$count]);


                    $data = array('nama' => $nama[$count],
                    'username' => $username[$count],
                    'password'=> $ePassword,
                    'email' => $email[$count],
                    'phone'=>$phone[$count],
                    'occupation' => $occupation[$count]
                );
                $insert_data[] = $data;
                   
            }
                    DynamicField::insert($insert_data);
                    // return redirect('/addmore')->with(['status', 'Data Added Successfully']);
                    return response()->json([
                        'success'  => 'Data Added successfully.']);
            }
}
//     }
    public function list(){
        $listforms = DB::table('dynamic_fields')->get();
        // dd($listforms);
        return view('list_form',['listforms' => $listforms]);

    }
        
      
  
    }

  
     
    

// }
              