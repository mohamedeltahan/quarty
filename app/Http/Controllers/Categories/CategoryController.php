<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::paginate();
        $categories=json_decode($categories->toJson(),true);
        return view("categories.index",compact("categories"));
        
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
            'ar_title' => 'required|string|max:255',
            'en_title' => 'required|string|max:255',
            'en_description' => 'required|string',
            'ar_description' => 'required|string',  
            'photo_link' =>'required',
          
        ]);
        $data=$request->all();

        

        try {

            if($request->hasfile('photo_link')){
              $file = $request->file('photo_link');
              $extension = $file->getClientOriginalExtension(); // getting image extension
              $filename =time().'.'.$extension;
              Storage::disk('public')->putFileAs("categories-photos",$file,$filename);
              $data["photo_link"]=$filename;
             }
            // $data["sub_categories"]=json_encode($request->sub_categories);
             Category::create($data);


           } catch (\Throwable $th) {
              dd($th->getMessage());
             return redirect()->back()->withErrors(["there is some error happend....kindly contact support"]);;
         }


     

        return redirect()->back()->withErrors("Category has been added successfully");


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $validatedData = $request->validate([
            'ar_title' => 'required|string|max:255',
            'en_title' => 'required|string|max:255',
            'en_description' => 'required|string',
            'ar_description' => 'required|string',            
        ]);

        $data=$request->all();
        
        

     

          try {

            if($request->hasfile('photo_link')){
                
              $file = $request->file('photo_link');
              $extension = $file->getClientOriginalExtension(); // getting image extension
              $filename =time().'.'.$extension;
              Storage::disk('public')->putFileAs("subcategories-photos",$file,$filename);
              $data["photo_link"]=$filename;

             }

            $category=Category::find($id);
            
            $category->update($data);

            


           } catch (\Throwable $th) {
               
                
             return redirect()->back();
         }

         return redirect()->back()->withErrors(["Category has updated successfully"]);
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

    
    public function Search(Request $request)
    {
        try {

            $value=$request->value;
            $categories=Category::where("title","like","%".$value."%")->paginate(100);
            $categories=json_decode($categories->toJson(),true);
            if(str_contains(url()->current(), 'api')){
                return json_encode($categories,JSON_UNESCAPED_UNICODE);
            }
            
            return view("categories.index",compact("categories","value"));

        } catch (\Throwable $th) {
            return redirect()->back()->withErrors([$th->getMessage()]);
        }
       

    }
}
