<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Users\StoreUsersRequest;
use App\Http\Requests\Users\UpdateUsersRequest;
use App\Repositories\Users\UsersRepositories;
use Spatie\Permission\Models\Role;
use DB;
use App\Models\User;

class UsersController extends Controller {
	

	//PROPRTE Upload
	const PATHUSER      = '/uploads/user';
	const SUBPATHUSER   =  null;
	const SIZEUSER      =  null;
	const NAMEFILEUSER  = 'user_image';
	const NAMEMERGEUSER = 'photo';


	protected $modelUsers;

    function __construct(User $user) {
       $this->modelUsers = new UsersRepositories($user);
	}
	
    // Return view page index Users And Return All Users 
    public function index()
    {
    	$users =  $this->modelUsers->WithoutCurrentLogged();		
    	return view('admin.users.index',compact('users'));
    }

	// Return view page create Users 
    public function create()
    {
    	return view('admin.users.create');
    }

	// Return view page Edit User And Return User by id
    public function edit($id)
    {
		 $update    =  $this->modelUsers->show($id);		
    	return view('admin.users.edit',compact('update'));
    }

	// Store Users
	public function store(StoreUsersRequest $request)
	{

	   // upload image : users photo
       $this->uploadIMage($request,self::PATHUSER,self::SUBPATHUSER,self::SIZEUSER,self::NAMEFILEUSER,self::NAMEMERGEUSER);

        // Merge password and Users Create   
		  $request   ->  merge(['password' => bcrypt($request->password)]); 
		
        $user = $this->modelUsers->store($request);

	     session()->flash('save','The Users has been successfully added');
	     return redirect()->to(url('dashboard/users'));
	}


	// update Users 
	public function update($id,UpdateUsersRequest $request)
	{

		// get User by id
		$update    =  $this->modelUsers->show($id);



		// update image : users photo
      $this->updateImage($update,$request,self::PATHUSER,self::SUBPATHUSER,self::SIZEUSER,self::NAMEFILEUSER,self::NAMEMERGEUSER);

		// check password empty and merge it  
        if($request->password != null ){
    	$request   ->  merge(['password' => bcrypt($request->password)]);
	      }else{
    	$request   ->  merge(['password' => $update->password]);}



		$this->modelUsers->update($request,$id);

		

		session()->flash('success','Data modified successfully');
		return redirect()->to(url('dashboard/users'));
	}

    // destroy Users by id
	public function destroy($id)
	{
	   $this->modelUsers->delete($id);
	   session()->flash('success','The manager was successfully deleted');
	   return redirect()->to(url('dashboard/users'));
	}

    // destroy Multi Users by id
	public function DeleteUsers(Request $request)
	{
	  if(!empty($request->check)){

		$this->modelUsers->deleteUsersCheck($request->check);

		session()->flash('success','Data deleted successfully');

		return back();
	  }else{
	  	session()->flash('warning','Please select a manager at least');
	  	return back();
	  }	
	}
}
