<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SocialmediaRequest;
use App\Models\Socialmedia;

class SocialmediaController extends Controller
{
    public function View(){
        $file=Socialmedia::orderby('id','desc')->get();
        return view('backend.socialmedia.view',['file'=>$file]);
    }

    public function socialmedia(){
        return view('backend.socialmedia.create');
    }

    public function Store(SocialmediaRequest $request){

        $data=$request->except('_token');
        $data=Socialmedia::insert($data);
        return redirect()->route('view.socialmedia')->with('message','Data Inserted Successfully');

    }

    public function Edit($id){
        $data=Socialmedia::find($id);
        return view('backend.socialmedia.edit',['data'=>$data]);
    }

    public function Update(Request $request,$id){
        $data=Socialmedia::find($id);
        $data1=$request->except('_token');
        $data->update($data1);
        return redirect()->route('view.socialmedia')->with('message', 'Data Updated Successfully');        
   
    }
    public function Delete($id){
        $data=Socialmedia::find($id);
        $img_path=public_path('storage/socialmedia/').$data->image;
        if(file_exists($img_path) && $data->image!=null){
            unlink($img_path);
            $data->delete();
        }
        else{
            $data->delete();
        }
        return redirect()->back()->with('message','Data Deleted Successfully');
    }
}
