<?php

namespace App\Http\Controllers\Admin\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Repositories\Users\UsersRepositories;
use App\Models\User;

class DashboardController extends Controller
{


	protected $modelUser;

    function __construct(User $user){
        $this->modelUser       = new UsersRepositories($user);
    }



    public function index()
    {
        // data 
        $user   = $this->modelUser->count();
    	return view('admin.dashboard.index',compact('user'));
    }
}
