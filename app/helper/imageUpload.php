<?php
if(!function_exists('uploadimage')){
     function imageUpload($request,$image, $object){
        if($request->hash_file('image'))
        {
            $file=$request->image;
            $newName=time() . "." . $file->getClientOriginalExtension();
            $file->move('images',$newName);
            $object->logo="images/$newName";
        }
    }
}