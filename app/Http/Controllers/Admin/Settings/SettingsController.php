<?php

namespace App\Http\Controllers\Admin\Settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\Settings\StoreSettingsRequest;
use App\Repositories\Settings\SettingsRepositories;
use App\Models\Settings;
use Storage,Session,Image,File;


class SettingsController extends Controller {


  //PROPRTE Upload
  const PATHLOGO      = '/uploads/logo';
  const SUBPATHLOGO   =  null;
  const SIZELOGO      =  null;
  const NAMEFILELOGO  = 'logo_main';
  const NAMEMERGELOGO = 'logo';


  protected $modelSettings;

  function __construct(Settings $settings){
    $this->modelSettings     = new SettingsRepositories($settings);
  }

  // Return view page settings And Return first Settings
  public function index()
  {
    $setting =  $this->modelSettings->all();
  	return view('admin.settings.index',compact('setting'));
  }


  // Store Settings 
  public function store(StoreSettingsRequest $request)
  {

    // upload image : logo
     $this->uploadIMage($request,self::PATHLOGO,self::SUBPATHLOGO,self::SIZELOGO,self::NAMEFILELOGO,self::NAMEMERGELOGO);

    // create data
    $settings  =  $this->modelSettings->store($request);

    Session::flash('success','Update  Successfully');
    return back();
  }


  //Update Settings 
  public function update($id,StoreSettingsRequest $request)
  {

  
    // get data Settings by id 
     $update    =  $this->modelSettings->show($id);
     
       // update image : logo
    $this->updateImage($update,$request,self::PATHLOGO,self::SUBPATHLOGO,self::SIZELOGO,self::NAMEFILELOGO,self::NAMEMERGELOGO);
       
    // update data
		$this->modelSettings->update($request,$id);

    Session::flash('success','Update  Successfully');
  	return back();
  }


}
