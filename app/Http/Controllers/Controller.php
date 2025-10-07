<?php

namespace App\Http\Controllers;

abstract class Controller
{
     /**
     * Unique Name Generator 
     */
    protected function uniqueFileName($file = null){

        if( $file ){
            $uniqueName =  md5(rand(100000,10000000) . '_' .time() . '_' . str_shuffle("qwertyuiopplkjhgfdsazxcvbnm")). "." . $file -> getClientOriginalExtension();
        }else {
            $uniqueName =  md5(rand(100000,10000000) . '_' .time() . '_' . str_shuffle("qwertyuiopplkjhgfdsazxcvbnm"));
        }

        return $uniqueName;
    }


    /**
     * File Upload Method
     */
    protected function fileUpload($file = null, $path = 'media'){

        if($file){
            // generate a unique filename 
            $fileName = $this->uniqueFileName($file);

            // upload file to path
            $file -> move(public_path($path), $fileName);

            // return file name
            return $fileName; 
        }

        return false;
    }


    protected function createSlug($string) {
        // Convert to lowercase
        $slug = strtolower($string);
        
        // Remove special characters
        $slug = preg_replace('/[^a-z0-9\s-]/', '', $slug);
        
        // Replace multiple spaces or hyphens with a single hyphen
        $slug = preg_replace('/[\s-]+/', '-', $slug);
        
        // Trim hyphens from start and end
        $slug = trim($slug, '-');
        
        return $slug;
    }

}
