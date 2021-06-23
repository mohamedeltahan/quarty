<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $about=About::all();
        
        return view('normal.home');
    }


    public function store(Request $request)
    {
        $about=About::create($request->all());
        return redirect()->back()->withErrors(["error"=>"About has been added successfully"]);
    }

    public function update(Request $request,$id)
    {
        $about=About::find($id)->update($request->all());
        return redirect()->back()->withErrors(["error"=>"About has been edited successfully"]);
    }


    

    public function GetPhotos($folder_name)
    {
        $files = Storage::disk('public')->allFiles($folder_name);
           
        $arr=[];
        foreach($files as $file){
        $renamed_file=str_replace($folder_name."/","",$file);
        $arr[explode("-",$renamed_file)[0]]=$file;
        }



    
      


        return view("photos",compact("arr"));
    
        
    }

    public function DestroyPhoto(Request $request)
    {
        try {
            Storage::disk('public')->delete($request->path);
            return redirect()->back()->withErrors(["photo has been deleted successfully"]);

        } catch (\Throwable $th) {
            return redirect()->back()->withErrors([$th->getMessage()]);

        }
        
    }


    public function StorePhoto(Request $request)
    {
            
            $file = $request->file('photo_link');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =$request->photo_name."-".time().'.'.$extension;
            Storage::disk('public')->putFileAs($request->folder_name,$file,$filename);
            if($request->filled("vendor")){
               $vendor=User::find($request->vendor);
               $vendor->banner_photo=$filename;
               $vendor->save();

            }
            return redirect()->back();            
    }


}
