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

class DataPostController extends Controller
{
    public function update(Request $request, DynamicField $listforms){

        $listforms = DynamicField::find($request->id);

        Validator::extend('phoneval', function($atribute, $value){
            return Str::startsWith($value, '0') ||Str::startsWith($value, '+62');
        });

        Validator::extend('occupationval', function($atribute, $value){
            return $value=='Frontend' || $value=='Backend' || $value=='Fullstack';
        });


    $rules = array(
        'nama' => 'required|max:30',
        'username' => 'required',
        'password' => 'required',
        'email' => 'required|regex:/^([a-z0-9+-]+)(.[a-z0-9+-]+)*@([a-z0-9-]+.)+[a-z]{1,6}$/ix',
        'phone' => 'required|min:10|phoneval',    
        'occupation' => 'required|occupationval'
    );

    
    // $error = Validator::make($request->all(),$rules);
    // if($error->fails()){
    //     $errorMessage=$error->errors()->all();
    //     $stringError=implode("<br>", $errorMessage);
    //    return redirect('/addmore')->with('status'.$request->id, $stringError);
        
    // }else{
       
        $listforms = DynamicField::find($request->id);
            
    // dd($listforms);
    // // }
    return view('show',['listforms' => $listforms]);
    //         $ePassword = Crypt::encryptString($request->password);
    //     dd($listforms->id);

    // DynamicField::where('id', $listforms->id)->update([
    //     'nama' => $request->nama,
    //     'username' => $request->username,
    //     'password' => $ePassword,
    //     'email' => $request->email,
    //     'phone' => $request->phone,
    //     'occupation' => $request->occupation
    // ]);
  

    // return redirect('addmore')->with('status', 'data mahasiswa berhasil diubah');

}

function delete(Request $request){
    $listforms = DynamicField::find($request->id);
    $listforms->delete();
return redirect('/lists')->with('status', 'Form Has Been Deleted');
}

 
}
