<?php

namespace App\Http\Controllers\Projects;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project=Project::find(1);
        
        $projects=Project::paginate();
        $projects=json_decode($projects->toJson(),true);
        return view("projects.index",compact("projects"));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ar_title' => 'required|string',
            'en_title' => 'required|string',
            'en_description' => 'required|string',
            'ar_description' => 'required|string',  
            'en_location' => 'required|string',
            'ar_location' => 'required|string', 
            'order_date' => 'required',
            'final_date' => 'required',
            'photo_link' =>'required',
          
        ]);
        $data=$request->all();


        try {

            if($request->hasfile('photo_link')){
              $file = $request->file('photo_link');
              $extension = $file->getClientOriginalExtension(); // getting image extension
              $filename =time().'.'.$extension;
              Storage::disk('public')->putFileAs("projects-photos",$file,$filename);
              $data["photo_link"]=$filename;
             }
             
            if($request->has('images')){
                $images=$request->images;
                $data["folder_name"]=Str::random(20);
                foreach($images as $file){
                    $extension = $file->getClientOriginalExtension(); // getting image extension
                    $filename =time().'.'.$extension;
                    Storage::disk('public')->putFileAs($data["folder_name"],$file,$filename);
                }
            }
             Project::create($data);


           } catch (\Throwable $th) {
              dd($th->getMessage());
             return redirect()->back()->withErrors(["there is some error happend....kindly contact support"]);;
         }


     

        return redirect()->back()->withErrors("Category has been added successfully");


        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project=Project::find($id);
        $project->category_name=Category::find($project->category_id)->en_title;
        return view("normal.project",compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function DeleteProjectPhoto(Request $request)
    {    
         $folder_name=$request->folder_name;
         $folderPath=public_path($folder_name);
         $dd =File::delete($folderPath);
         return $dd;
    }

    public function portfolio()
    {
        return view("normal.portfolio");
    }
}
