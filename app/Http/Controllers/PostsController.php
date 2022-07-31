<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;
Session_start();



class PostsController extends Controller
{
    public function add_post(){
    	return view('admin.add_post');

    }


    public function save_post(Request $request){

    	$data=array();

    	$data['author_name']=$request->author_name;
    	$data['category_id']=$request->category_id;
    	$data['post_title']=$request->post_title;
    	$data['post_body']=$request->post_body;
    	$data['publication_status']=$request->publication_status;
    

    	$image=$request->file('post_image');

    	if($image){

    		$image_name=str_random(20);
    		$ext=strtolower($image->getClientOriginalExtension());
    		$image_full_name=$image_name.'.'.$ext;
    		$path='image/';
    		$image_url=$path.$image_full_name;

    		$success=$image->move($path,$image_full_name);

    		if($success){

    			$data['post_image']=$image_url;
    			DB::table('tbl_posts')->insert($data);
    			return Redirect::to('/add-post');

    		}

    	}


 				$data['post_image']='';
    			DB::table('tbl_posts')->insert($data);
    			return Redirect::to('/add-post');


    }


    public function all_posts(){

			$all_post=DB::table('tbl_posts')
			->join('tbl_category','tbl_posts.category_id','=','tbl_category.category_id')
			 ->select('tbl_posts.*','tbl_category.category_name')

			->get();
			     
			     $manage_post=view('admin.all_posts')
			     ->with('all_post',$all_post);

			     return view('admin_layout')
			     ->with('admin.all_posts',$manage_post);

   


    }

    public function delete_posts($post_id){


    	DB::table('tbl_posts')
    	->where('post_id',$post_id)
    	->delete();
    	return Redirect::to('all-posts');



    }

    public function edit_post($post_id){

    	$edit_post=DB::table('tbl_posts')
    	->where('post_id',$post_id)
    	->join('tbl_category','tbl_posts.category_id','=','tbl_category.category_id')
			 ->select('tbl_posts.*','tbl_category.category_name')
    	->first();


    	$manage_post=view('admin.edit_posts')
    	->with('edit_post',$edit_post);

    	return view('admin_layout')
    	->with('admin.edit_posts',$manage_post);
     


    }



    public function update_post(Request $request,$post_id){

        $data=array();

        $data['author_name']=$request->author_name;
        $data['category_id']=$request->category_id;
        $data['post_title']=$request->post_title;
        $data['post_body']=$request->post_body;
       
    // print_r($data);

        $image=$request->file('post_image');

        if($image){

            $image_name=str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $path='image/';
            $image_url=$path.$image_full_name;

            $success=$image->move($path,$image_full_name);

            if($success){

                $data['post_image']=$image_url;
                DB::table('tbl_posts')->insert($data);
                return Redirect::to('/all-posts');

            }

        }


                $data['post_image']='';
                DB::table('tbl_posts')->insert($data);
                return Redirect::to('/all-posts');





    }


    public function unactive_post($post_id){

        DB::table('tbl_posts')
       ->where('post_id',$post_id)
       ->update(['publication_status'=>0]);
       return Redirect::to('all-posts');


    }


    public function active_post($post_id){

         DB::table('tbl_posts')
       ->where('post_id',$post_id)
       ->update(['publication_status'=>1]);
       return Redirect::to('all-posts');

    }



}
