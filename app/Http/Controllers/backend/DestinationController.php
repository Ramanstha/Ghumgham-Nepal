<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\DestinationRequest;
use App\Models\Destination;
use File;

class DestinationController extends Controller
{
    public function View(){
        $file=Destination::orderby('id','desc')->get();
        return view('backend.destination.view',['file'=>$file]);
    }

    public function Destination(){
        return view('backend.destination.create');
    }

    public function Store(DestinationRequest $request){

        $data=$request->except('_token','image');
        $filename = $request->file('image');        
        $file = time() . '-' . 'image' . '.' .$filename->getClientOriginalExtension();
        $destination = public_path('storage/destination/');
        $filename-> move($destination, $file);
        $data['image']=$file;
        $data=Destination::insert($data);
        return redirect()->route('view.destination')->with('message','Data Inserted Successfully');

    }

    public function Edit($id){
        $data=Destination::find($id);
        return view('backend.destination.edit',['data'=>$data]);
    }

    public function Update(Request $request,$id){
        $data=Destination::find($id);
        $data1=$request->except('_token','image');
        if($request->file('image')){
                File::delete(public_path('storage/destination/'.$data->image));
                $filename=$request->file('image');
                $file= time(). '-'. 'image'. $filename->getClientOriginalExtension();
                $destination=public_path('storage/destination/');
                $filename->move($destination,$file);
                $data1['image']=$file;
        }
        $data->update($data1);
        return redirect()->route('view.destination')->with('message', 'Data Updated Successfully');        
   
    }
    public function Delete($id){
        $data=Destination::find($id);
        $img_path=public_path('storage/destination/').$data->image;
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
