<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Manager;
class UserController extends Controller
{
	// public function __construct(){
	// 	//$this->middleware('auth');
	// 	// $this->middleware('log',['only'=>['fooAction','barAction']]);
	// 	// $this->middleware('subscribed');
	// }

    public function showProfile()
    {
    	echo 111111;
    	return redirect()->route('admin',['id'=>1]);
    	//echo "userController showProfile";
    	//echo $url = Request::path();

    	//return view('user.profile')->with("name","abc");
    }
    public function admin(){
    	var_dump($_REQUEST);

    	echo "this is show";
    }
    // public function store(Request $request){
    // 	$name = $request->input('name');
    // }
    // public function edit(Request){
    // 	$input = Request::has("name"); 
    // 	$input = Request::except("name"); 
    // }
}
