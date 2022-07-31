<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;
Session_start();

class HomeController extends Controller
{
    public function index(){
    	//return view('pages.home_content');


    	$all_post_published=DB::table('tbl_posts')
			->join('tbl_category','tbl_posts.category_id','=','tbl_category.category_id')
			 ->select('tbl_posts.*','tbl_category.category_name')
			  ->where('tbl_posts.publication_status',1)
             ->limit(9)

			->get();
			     
			     $manage_post=view('pages.home_content')
			     ->with('all_post_published',$all_post_published);

			     return view('layout')
			     ->with('pages.home_content',$manage_post);







    }

    public function category_by_feture($category_id){

		//return view('pages.category_by_feture');



		$category_by_feture=DB::table('tbl_posts')
			->join('tbl_category','tbl_posts.category_id','=','tbl_category.category_id')
			 ->select('tbl_posts.*','tbl_category.category_name')
			 ->where('tbl_posts.publication_status',1)
			 ->where('tbl_category.category_id',$category_id)
			 ->limit(9)
			->get();
			     
			     $manage_category_by_feture=view('pages.category_by_feture')
			     ->with('category_by_feture',$category_by_feture);

			     return view('layout')
			     ->with('pages.category_by_feture',$manage_category_by_feture);



    }


    public function view_details($post_id){


$view_details_info=DB::table('tbl_posts')
			->join('tbl_category','tbl_posts.category_id','=','tbl_category.category_id')
			 ->select('tbl_posts.*','tbl_category.category_name')
			 ->where('tbl_posts.publication_status',1)
			 ->where('tbl_posts.post_id',$post_id)
			 ->limit(9)
			->first();
			     
			     $manage_view_details_info=view('pages.view_details')
			     ->with('view_details_info',$view_details_info);

			     return view('layout')
			     ->with('pages.view_details',$manage_view_details_info);


    }

    
}
