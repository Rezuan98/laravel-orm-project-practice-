<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;


class orm extends Controller
{
    public function orm(Request $req){

        $select = student::all();

        return view('index',compact('select'));
    }

    public function orminsert(Request $req){

         $data = new student();

        $data->name=$req->stname;
        $data->email=$req->stemail;
        $data->dept=$req->stdept;

        $insert = $data->save();

        if($insert){
            return redirect('/');
        }else{
            echo "failed";
        }
        
}
public function ormdelete($id){

    $delete = student::find($id);
    $delete->delete();

    return redirect('/');
   


}
 public function ormedit($id){

    $select = student::find($id);

    return view('edit',compact('select'));
 }
public function ormupdate(Request $req,$id){
    $data = student::find($id);
    // $data = new student();

    $data->name=$req->stname;
    $data->email=$req->stemail;
    $data->dept=$req->stdept;
    

    $data->save(); 

    return redirect('/');
}
}
