<?php





Route::name('blogs_path')->get('/blogs','BlogsController@index');
Route::name('create_blog_path')->get('/blogs/create','BlogsController@create');
Route::name('store_blog_path')->post('/blogs','BlogsController@store');
Route::name('blog_path')->get('/blogs/{id}','BlogsController@show');
Route::name('eidt_blog_path')->get('/blogs/{id}/edit','BlogsController@edit');
Route::name('update_blog_path')->put('/blogs/{id}','BlogsController@update');
Route::name('delete_blog_path')->delete('/blogs/{id}','BlogsController@destroy');
Route::name('welcome_blog_path')->get('/','BlogsController@welcome');
