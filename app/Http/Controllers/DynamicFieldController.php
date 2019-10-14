<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DynamicField;
use Validator;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;


class DynamicFieldController extends Controller
{

    public function addmore(){
        return view("dynamic_field");
        
    }

     function addMorePost(Request $request){
        //  return json_encode($request->all());

        // $ePassword = Crypt::encryptString($request->get('password'));


        if($request->ajax()){

                $rules = array(
                    'name.*' => 'required',
                    'username.*' => 'required',
                    'password.*' => 'required',
                    'email.*' => 'required|regex:/^([a-z0-9+-]+)(.[a-z0-9+-]+)*@([a-z0-9-]+.)+[a-z]{1,6}$/ix',
                    'phone.*' => 'required|min:10',    
                    'occupation.*' => 'required'
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
                    $data = array('nama' => $nama[$count],
                    'username' => $username[$count],
                    'password'=> $password[$count],
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


            




        // foreach($request as $key=>$value){
        //     $data[]=[
        //         'nama'=>$value['nama'],
        //     'username'=>$value['username'],
        //     'password'=>$value['password'],
        //     'email'=>$value['email'],
        //     'phone'=>$value['phone'],
        //     'occupation'=>$value['occupation']];
        // }

        // DB::table('dynamic-fields')->insert($data);

        // return redirect('/addmore')->with('status', 'Data berhasil di tambahkan');




        // $ePassword = Crypt::encryptString($request->get('password'));
            // if($request->ajax()){
            //     $nama=$request->nama;
            //     $username=$request->username;
            //     $password=$request->password;
            //     $email=$request->email;
            //     $phone=$request->phone;
            //     $occupation=$request->occupation;

            //     $data=array();
            //     foreach($nama as $nam){
            //         if(!empty($nam)){
            //             $data[] = ['nama' => $nama,
            //             'username' => $username,
            //             'password' => $password,
            //             'email'=> $email,
            //             'phone' => $phone,
            //             'occupation' => $occupation];
            //         }
            //     }
            //         dynamic_fields::insert($data);

            //         return redirect('/addmore')->with('status', 'Form Berhasil di Tambahkan');

            
            


            // $data = array();
            // $data['nama'] = $request->get('nama');
            // $data['username'] = $request->get('username');
            // $data['password'] = $ePassword;
            // $data['email'] = $request->get('email');
            // $data['phone'] = $request->get('phone');
            // $data['occupation'] = $request->get('occupation');

            // $insertData = collect($data);
            // $insertData->prepend($request->get('nama'), 'nama');
            // $insertData->prepend($request->get('username'), 'username');
            // $insertData->prepend($request->get('password'), 'password');
            // $insertData->prepend($request->get('email'), 'email');
            // $insertData->prepend($request->get('phone'), 'phone');
            // $insertData->prepend($request->get('occupation'), 'occupation');

            // $request->validate([
            //     'nama' => 'required|max:30',
            //     'username' => 'required|max:30',   
            //     'password' => 'required|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/|',
            //     'email' => 'required|email|regex:/^([a-z0-9+-]+)(.[a-z0-9+-]+)*@([a-z0-9-]+.)+[a-z]{1,6}$/ix',
            //     'phone' => 'required|min:10|regex:^[+]*[62][0-9]{1,9}[]{0,9}[-\s\./0-9]*$^',
            // ]);
                
          
            // $decrypted = Crypt::decryptString($);


            // $query_insert = DB::table('dynamic_fields')->insert($insertData);

            // return redirect('/addmore')->with('status', 'Form Berhasil di Tambahkan');

        // $request->validate([ 
        //             'nama' => 'required|min:3|max:30',
        //             'username' =>'required|max:30',
        //             'password'=>'required',
        //             'email'=>'required|email|regex:/^([a-z0-9+-]+)(.[a-z0-9+-]+)*@([a-z0-9-]+.)+[a-z]{1,6}$/ix'                    ,
        //             'phone' => 'required|min:10|regex:^[+]*[62][0-9]{1,9}[]{0,9}[-\s\./0-9]*$^']);
        //             // 'occupation'=>'required'

        //             $error = Validator::make($request->all(),$request);
        //                 if($error->fails()){
        //                     return response()->json(['error' => $error->errors()->all()
        //                     ]);

        //                 }else{

        //      DynamicField::create($request->all());       
        //     return redirect('/addmore')->with('status', 'Form Berhasil di Tambahkan');

//             if($request->ajax()){
//                 $rules = array(
//                         'nama.*' => 'required|min:3|max:30',
//                         'username.*' =>'required|max:30',
//                         'password.*'=>'required',
//                         'email.*'=>'required|email',
//                         'phone.*' => 'required|min:10|numeric|starts_with:+62',
//                         'occupation.*'=>'required'
//                 );
//                 $error = Validator::make($request->all(),$rules);
//                 if($error->fails()){
//                     return response()->json(['error' => $error->errors()->all()
//                     ]);
//                 }

//                 $nama = $request->nama;
//                 $username = $request->username;
//                 $password = $request->password;
//                 $email = $request->email;
//                 $phone = $request->phone;
//                 $occupation = $request->occupation;
                
//                 for($count = 0; $count < count($nama);$count++){
                
//                     $data = array(
//                         'nama' => $nama[$count],
//                         'username' => $username[$count],
//                         'password' => $password[$count],
//                         'email' => $email[$count],
//                         'phone' => $phone[$count],
//                         'occupation' => $occupation[$count]
//                     );
//                     $insert_data[] = $data;
//                 }

//                 $encrypted = Crypt::encryptString('$password');
//                 $decrypted = Crypt::decryptString('$encrypted');

//                 DynamicField::insert($insert_data);
//                 return redirect('/addmore')->with('status', 'Form Berhasil di Tambahkan');
//      }
}
//     }
    public function list(){
        $listforms = DB::table('dynamic_fields')->get();
        // dd($listforms);
        return view('list_form',['listforms' => $listforms]);

    }
        
      
    public function update(Request $request, DynamicField $listforms){

        $rules = array(
            'name.*' => 'required',
            'username.*' => 'required',
            'password.*' => 'required',
            'email.*' => 'required|regex:/^([a-z0-9+-]+)(.[a-z0-9+-]+)*@([a-z0-9-]+.)+[a-z]{1,6}$/ix',
            'phone.*' => 'required|min:10',    
            'occupation.*' => 'required'
        );

        DynamicField::where('id', $listforms->id)->update([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => $request->password,
            'email' => $request->email,
            'phone' => $request->phone,
            'occupation' => $request->occupation
        ]);
        return redirect('addmore')->with('status', 'data mahasiswa berhasil diubah');

    }

    public function delete(Request $request){
            $listforms = DynamicField::find($request->id);
            $listforms->delete();
        return redirect('/lists')->with('status', 'Form Has Been Deleted');
    }

     }

     
// }
              