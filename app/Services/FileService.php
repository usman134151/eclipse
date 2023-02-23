<?php
namespace app\Services;

use Illuminate\Http\Request;
use App\Models\Tenant\Document;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FileService
{
    /**
     *  Request: document_title,no_expiration_date,expiration_date,title,record_id 
     */
    static function upload(Request $request , $inputName = null, $storage_path = 'uploads/provider' )
    {
      try {
        $checkExistDocs = '';
        $docTitle = $request->document_title;
        if(isset($request->no_expiration_date) && !empty($request->no_expiration_date))
        {
          $expiration_date = NULL;
        }
        else 
        {
          $expire_date = $request->expiration_date;
          $expiration_date = \Carbon\Carbon::createFromFormat('m/d/Y', $expire_date)->format('Y-m-d h:i:s');
        }
        $title = $request->title;
        $userId = $request->record_id;
        if($docTitle == 'Other')
        {
          $docTitle = $title;
        }
  
        $docsName = '';
        if ($request->hasFile($inputName)) {
          if ($request->file($inputName)->isValid()) {
            $file = $request->file($inputName);
            $docsName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $docsType = $request->file($inputName)->extension();
            Storage::disk('public')->put($storage_path.'/'.$docsName, $inputName);
          }
        }
        $documents= new Document();
        $documents->document_title = $docTitle;
        $documents->document_name = $docsName;
        $documents->description = $request->description;
        $documents->expiration_date = isset($expiration_date)?$expiration_date:null;
        $documents->no_expiration_date = isset($request->no_expiration_date)?1:'';
        $documents->document_type = isset($docsType)?$docsType:'docs';
        $documents->user_id   = $userId;
        $documents->added_by  = Auth::user()->id;
        $documents->save();
        return $documents;
      } catch (\Exception $e) {
        echo $e->getMessage(); die;
      }
    }
    static function url($file_name)
    {
      return $path = Storage::url($file_name);
    }
}
