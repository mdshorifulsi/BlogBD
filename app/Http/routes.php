<?php




//Frontend route......
Route::get('/','HomeController@index');

//front category show...... 
Route::get('/show-category','MenuController@show_category');
Route::get('/all-picture','MenuController@all_picture');




//Backend Route............
Route::get('/dashboard','SuperAdminController@index');
Route::get('/logout','SuperAdminController@logout');
Route::get('/admin','AdminController@index');
Route::post('/admin-dashboard','AdminController@admin_dashboard');


//Category Route.........

Route::get('/add-category','CategoryController@add_category');
Route::get('/all-category','CategoryController@all_category');
Route::post('/save-category','CategoryController@save_category');

Route::get('/delete-category/{category_id}','CategoryController@delete_category');
Route::get('/edit-category/{category_id}','CategoryController@edit_category');
Route::post('/update-category/{category_id}','CategoryController@update_category');
Route::get('/unactive_category/{category_id}','CategoryController@unactive_category');
Route::get('/active_category/{category_id}','CategoryController@active_category');


//posts Route.........
Route::get('/add-post','PostsController@add_post');
Route::post('/save-post','PostsController@save_post');
Route::get('/all-posts','PostsController@all_posts');
Route::get('/delate-post/{post_id}','PostsController@delete_posts');
Route::get('/edit-post/{post_id}','PostsController@edit_post');
Route::post('/update-post/{post_id}','PostsController@update_post');

Route::get('/unactive_post/{post_id}','PostsController@unactive_post');
Route::get('/active_post/{post_id}','PostsController@active_post');




//show by category
Route::get('/category_by_feture/{category_id}','HomeController@category_by_feture');
Route::get('/view-details/{post_id}','HomeController@view_details');




