<?php

namespace App\Http\Controllers\Front\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FileUpload;
use App\Models\Category;
use Response;
use Illuminate\Support\Facades\Storage;
use Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class HomePageController extends Controller
{


    //PROPRTE Upload
    const PATH      = '/uploads/file';
    const SUBPATH   = '/100x100/';
    const SIZE      = '100,100';
    const NAMEFILE  = 'uploadfile';
    const NAMEMERGE = 'file';

    /**
    * @return all Articles ::  paginate 10 page 
    */ 
    public function Welcome()
    {
    	return view('welcome');
    }

    public function UploadFile()
    {
         return  view('layouts.uploadfile');
    }


    public function Upload(Request $request)
    {

          //uploade image
          //$this->uploadIMage($request,self::PATH,self::SUBPATH,self::SIZE,self::NAMEFILE,self::NAMEMERGE);

          $uploadedFile = $request->file('uploadfile');
          $originalName = $uploadedFile->getClientOriginalName();
          $filename = time().$uploadedFile->getClientOriginalName();

          $explode_File  = explode('.', $originalName);

          $searchfor = 'Test';

          Storage::disk('local')->putFileAs(
            'files/'.$filename,
            $uploadedFile,
            $filename
          );

          $file =  'app/files/'.$filename.'/'.$filename;

          $path = storage_path($file);

          $content = File::get($path);

          $psychology = ['Abnormal Psychology','psychology','Communication','Customer Demographics','Emotions','Extroverts','Introverts','Life Advice','Mental Health','Neuroscience','Personality','Social'];

          $financial = ['accounting','Capitalism','economic','Funding Investing','Microeconomics','Money','Personal','Taxes','Money','Mathematics','Finance','investors'];

          header('Content-Type: text/plain');


          $contains = Str::contains($content, $psychology);
           
          // Test if string contains the word 
          if($contains){
            $request->merge(['file'=>'psychology']);
          }else{

              $contains = Str::contains($content, $financial);
               
              // Test if string contains the word 
              if($contains){
                   $request->merge(['file'=>'financial']);
              }

              if ($request->file == null) {
                 $request->merge(['file'=>'File type is not supported']);
              }

          }

        

         
          $category = Category::get();


          //Merge Author
          $request->merge(['user_id'=>Auth::user()->id]);

          $request->merge(['type'=>$request->file]);

          

          FileUpload::create($request->all());

          // Message success After Add
          session()->flash('success','File Upload successfully'.'--'.'and Kind the a file is '.'-' .$request->file);
          return redirect()->to(url('/upload-file'));


    }
    
}
