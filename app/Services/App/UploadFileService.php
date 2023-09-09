<?php
namespace app\Services\App;

use Illuminate\Support\Facades\File;

class UploadFileService{

    
    public function saveFile($dirName,$temp_file, $existing_file = null,$name=null)
    {

        if ($temp_file) {
            if ($existing_file != null) {
                //delete existing file
                if (File::exists(public_path($existing_file)))
                    File::delete(public_path($existing_file));
            }
            if($name==null)
                $name = time() . '.' . $temp_file->getClientOriginalExtension() ;
                // . '_' . $temp_file->getClientOriginalName(); //system assigned name
            else
                $name = $name.'.'.$temp_file->getClientOriginalExtension(); //name is passed

            $uploadPath = $temp_file->storeAs('/'.$dirName, $name, 'public');
            //dd($uploadPath);
            return '/tenant' . tenant('id') . '/app/public/'.$dirName.'/' . $name;  //change domain here and in config/filesystems
        } else
            return null;
    }

    public function deleteFile($path=null){
        if ($path != null) {
            //delete existing file
            if (File::exists(public_path($path)))
                File::delete(public_path($path));
        }
           
    }
    // public function saveImage()
    // {

    //     if ($this->temp_image) {
    //         if ($this->team->team_image != null) {
    //             //delete existing image
    //             if (File::exists(public_path($this->team->team_image)))
    //                 File::delete(public_path($this->team->team_image));
    //         }
    //         $name = md5(microtime()) . '.' . $this->temp_image->extension();
    //         $uploadPath = $this->temp_image->storeAs('/admin_teams', $name, 'public');
    //         //dd($uploadPath);
    //         return '/tenant' . tenant('id') . '/app/public/admin_teams/' . $name;  //change domain here and in config/filesystems
    //     } else
    //         return null;
    // }


}
