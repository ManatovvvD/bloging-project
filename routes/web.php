<?php


Route::get('/test', function () {
    return App\User::find(1)->profile;
});


Route::get('/category/{id}',[
    'uses' => 'FrontEndController@category',
    'as' => 'category.single'
]);

Route::get('/results', function(){
    $posts = \App\Post::where('title','like','%'.request('query').'%')->get();

    return view('results')->with('posts',$posts)
        ->with('title','Search results: ' . request('query'))
        ->with('categories',\App\Category::take(5)->get())
        ->with('settings',\App\Setting::first());
});

Route::get('/', [
    'uses' => 'FrontEndController@index',
    'as' => 'index'
]);

Route::get('/post/{slug}',[
    'uses' => 'FrontEndController@singlePost',
    'as' => 'post.single'
    ]);



Auth::routes();


Route::group(['prefix' => 'admin', 'middleware' => 'auth'],function(){

    Route::get('/home', [
        'uses' => 'HomeController@index',
        'as' => 'home'
    ]);
    Route::get('/post/create',[
        'uses' => 'PostController@create',
        'as' => 'post.create'
    ]);
    Route::get('/posts',[
      'uses'=>'PostController@index',
      'as' => 'posts'
    ]);
    Route::get('/post/delete/{id}',[
      'uses'=>'PostController@destroy',
      'as' => 'post.delete'
    ]);
    Route::get('/post/trashed',[
      'uses'=>'PostController@trashed',
      'as' => 'posts.trashed'
    ]);

    Route::get('/post/kill/{id}',[
      'uses'=>'PostController@kill',
      'as' => 'post.kill'
    ]);

        Route::get('/post/restore/{id}',[
          'uses'=>'PostController@restore',
          'as' => 'post.restore'
        ]);
        Route::get('/post/edit/{id}',[
          'uses'=>'PostController@edit',
          'as' => 'post.edit'
        ]);

        Route::post('/post/update/{id}',[
          'uses'=>'PostController@update',
          'as' => 'post.update'
        ]);

    Route::post('/post/store',[
        'uses' => 'PostController@store',
        'as' => 'post.store'
    ]);
    Route::get('/category/create',[
        'uses' => 'CatigoriesController@create',
        'as' => 'category.create'
    ]);
    Route::get('/categories',[
        'uses' => 'CatigoriesController@index',
        'as' => 'categories'
    ]);

    Route::post('/category/store',[
        'uses' => 'CatigoriesController@store',
        'as' => 'category.store'
    ]);
    Route::get('/category/edit/{id}',[
        'uses' => 'CatigoriesController@edit',
        'as' => 'category.edit'
    ]);
    Route::get('/category/delete/{id}',[
        'uses' => 'CatigoriesController@destroy',
        'as' => 'category.delete'
    ]);
    Route::post('/category/update/{id}',[
        'uses' => 'CatigoriesController@update',
        'as' => 'category.update'
    ]);
    Route::get('/tags',[
        'uses' => 'TagsController@index',
        'as' => 'tags'
    ]);
    Route::get('/tag/edit/{id}',[
        'uses' => 'TagsController@edit',
        'as' => 'tag.edit'
    ]);
    Route::post('/tag/edit/{id}',[
        'uses' => 'TagsController@update',
        'as' => 'tag.update'
    ]);
    Route::get('/tag/delete/{id}',[
        'uses' => 'TagsController@destroy',
        'as' => 'tag.delete'
    ]);
    Route::get('/tag/create',[
        'uses' => 'TagsController@create',
        'as' => 'tag.create'
    ]);
    Route::post('/tag/store',[
        'uses' => 'TagsController@store',
        'as' => 'tag.store'
    ]);
    Route::get('/users',[
        'uses' => 'UsersController@index',
        'as' => 'users'
    ]);
    Route::get('/user/create',[
        'uses' => 'UsersController@create',
        'as' => 'user.create'
    ]);
    Route::post('/user/store',[
      'uses' => 'UsersController@store',
      'as' => 'user.store'
    ]);
    Route::get('/user/admin/{id}',[
        'uses' => 'UsersController@admin',
        'as' => 'user.admin'
    ])->middleware('admin');

    Route::get('/user/not_admin/{id}',[
        'uses' => 'UsersController@not_admin',
        'as' => 'user.not.admin'
    ]);

    Route::get('/user/profile',[
        'uses' => 'ProfilesController@index',
        'as' => 'user.profile'
    ]);

    Route::post('/user/profile/update',[
        'uses' => 'ProfilesController@update',
        'as' => 'user.profile.update'
    ]);

    Route::get('/settings',[
        'uses' => 'SettingsController@index',
        'as' => 'settings'
    ])->middleware('admin');
    
    Route::post('/settings/update',[
        'uses' => 'SettingsController@update',
        'as' => 'settings.update'
    ])->middleware('admin');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
