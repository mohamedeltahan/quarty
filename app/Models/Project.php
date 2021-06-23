<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Project extends Model
{
    use HasFactory;
    protected $fillable=["ar_title","en_title","order_date","final_date","ar_location","en_location","en_client","ar_client","ar_description","en_description","folder_name","photo_link","category_id"];


    public function GetPhotosNames()
    {
        $folder_name=$this->folder_name;
        $files = Storage::disk('public')->allFiles($folder_name);
        $arr=[];
        foreach($files as $file){
         $renamed_file=str_replace($folder_name."/","",$file);
         $arr[]=$file;
        }

        return json_encode($arr,JSON_UNESCAPED_UNICODE);
    }
    
}
