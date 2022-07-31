<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\support\Facades\Redirect;
use App\Http\Requests;
Session_start();

class AdminController extends Controller
{
    public function index(){
    	return view('admin_login');



    }








public function admin_dashboard(Request $request){

	$admin_emial=$request->admin_emial;
	$admin_password=md5($request->admin_password);
	$result=DB::table('tbl_admin')
	->where('admin_emial',$admin_emial)
	->where('admin_password',$admin_password)
	->first();
	// print_r($result);
	// exit();


	if ($result) {
		Session::put('admin_name',$result->admin_name);
		Session::put('admin_id',$result->admin_id);
		return Redirect::to('/dashboard');

	}else{

		Session::put('msg','Email and Password Invallid');

		return Redirect::to('/admin');


	}

}



}
