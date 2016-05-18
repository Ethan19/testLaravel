<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Contracts\View\Factory;
/**
 * 后台基类
 */
class Controller extends BaseController{

	function __construct(){
		view()->share('title', "laravel站点");

	}

    public function index(){
		
    	//echo "this admin index";
    	$a = ["name"=>"ethan","sex"=>"男"];
		
    	
    	return view('admin.index',$a);
     
    }

    function __destruct(){

    }

}
