<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;
Session_start();


class CategoryController extends Controller
{
    public function all_category(){

    	$all_category=DB::table('tbl_category')->get();

    		$manage_category=view('admin.all_category')
    		->with('all_category',$all_category);

    	return view('admin_layout')
    	->with('admin.all_category',$manage_category);


    }



    public function add_category(){


    	return view('admin.add_category');
    }


    public function save_category(Request $request){

   
    	$data=array();
    	$data['category_name']=$request->category_name;
    	$data['publication_status']=$request->publication_status;

    	$image=$request->file('category_image');

    	if($image){

    		$image_name=str_random(20);
    		$ext=strtolower($image->getClientOriginalExtension());
    		$image_full_name=$image_name.'.'.$ext;
    		$path='image/';
    		$image_url=$path.$image_full_name;

    		$success=$image->move($path,$image_full_name);

    		if($success){

    			$data['category_image']=$image_url;
    			DB::table('tbl_category')->insert($data);
    			return Redirect::to('/add-category');

    		}

    	}


 				$data['category_image']='';
    			DB::table('tbl_category')->insert($data);
    			return Redirect::to('/add-category');

    	
}

public function delete_category($category_id){


	DB::table('tbl_category')
	->where('category_id',$category_id)
	->delete();
	return Redirect::to('all-category');



	
}



public function edit_category($category_id){

        $edit_category_info=DB::table('tbl_category')
        ->where('category_id',$category_id)
        ->first();

        $edit_category_manage=view('admin.edit_category')
        ->with('edit_category_info',$edit_category_info);

        return view('admin_layout')
        ->with('admin.edit_category',$edit_category_manage);

    }


    public function update_category(Request $request,$category_id){


        $data=array();
        $data['category_name']=$request->category_name;



        $image=$request->file('category_image');

        if($image){

            $image_name=str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $path='image/';
            $image_url=$path.$image_full_name;

            $success=$image->move($path,$image_full_name);

            if($success){

                $data['category_image']=$image_url;

                DB::table('tbl_category')
                ->where('category_id',$category_id)
                ->update($data);

                return Redirect::to('/add-category');


            


            }

        }


                $data['category_image']='';
                DB::table('tbl_category')
                 ->where('category_id',$category_id)
                ->update($data);
                return Redirect::to('/add-category');



    }


     public function unactive_category($category_id){

       DB::table('tbl_category')
       ->where('category_id',$category_id)
       ->update(['publication_status'=>0]);
       return Redirect::to('all-category');
     }    

   

public function active_category($category_id){


    DB::table('tbl_category')
    ->where('category_id',$category_id)
    ->update(['publication_status'=>1]);
    return Redirect::to('all-category');
}



public function show_category(){

    $category_show=DB::table('tbl_category')->get();

            $show_manage_category=view('pages.category')
            ->with('category_show',$category_show);

        return view('admin_layout')
        ->with('pages.category',$show_manage_category);


}



}








