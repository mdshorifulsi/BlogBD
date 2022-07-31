<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;
Session_start();

class MenuController extends Controller
{
    public function show_category(){

    	$all_category_show=DB::table('tbl_category')
    	->where('publication_status',1)
    	->get();

    		$show_manage_category=view('pages.category')
    		->with('all_category_show',$all_category_show);

    	return view('layout')
    	->with('pages.category',$show_manage_category);
    } 

    public function all_picture(){


    	$all_picture=DB::table('tbl_posts')
			->join('tbl_category','tbl_posts.category_id','=','tbl_category.category_id')
			 ->select('tbl_posts.*','tbl_category.category_name')

			->get();
			     
			     $manage_picture=view('pages.all_picture')
			     ->with('all_picture',$all_picture);

			     return view('layout')
			     ->with('pages.all_picture',$manage_picture);
    }
}
