<?php

/* Model Bindings */
Route::model('post','Post');

/* User routes */
Route::get('/post/{post}/show',['as' => 'post.show','uses' => 'PostController@showPost']);

/* Admin routes */
Route::group(['prefix' => 'admin','before'=>'auth'],function()
{
    /*get routes*/
    Route::get('dash-board',function()
    {
        $layout = View::make('master');
        $layout->title = 'DashBoard';
        $layout->main = View::make('dash')->with('content','Hi admin, Welcome to Dashboard!');
        return $layout;
 
    });
    Route::get('/post/list',['as' => 'post.list','uses' => 'PostController@listPost']);
    Route::get('/post/new',['as' => 'post.new','uses' => 'PostController@newPost']);
    Route::get('/post/{post}/edit',['as' => 'post.edit','uses' => 'PostController@editPost']);
    Route::get('/post/{post}/delete',['as' => 'post.delete','uses' => 'PostController@deletePost']);
 
    /*post routes*/
    Route::post('/post/save',['as' => 'post.save','uses' => 'PostController@savePost']);
    Route::post('/post/{post}/update',['as' => 'post.update','uses' => 'PostController@updatePost']);
 
});


//--------LOGIN----------------/
Route::get('login', 'AuthController@showLogin');

// Validamos los datos de inicio de sesión.
Route::post('login', 'AuthController@postLogin');

// Nos indica que las rutas que están dentro de él sólo serán mostradas si antes el usuario se ha autenticado.
Route::group(array('before' => 'auth'), function()
{
    // Esta será nuestra ruta de bienvenida.
    Route::get('/admin', function()
    {
        return View::make('admin.inicio');
    });
    // Esta ruta nos servirá para cerrar sesión.
    Route::get('logout', 'AuthController@logOut');
});
//--------FIN LOGIN----------------/

//
//Route::get('/', function(){return View::make('inicio');});
Route::get('/contacto','ContactoController@getContacto');
Route::post('/contacto','ContactoController@postContacto');


/* Home routes */
Route::controller('/','BlogController');


  View::composer('sidebar', function($view)
{
    $view->recentPosts = Post::orderBy('id','desc')->take(5)->get();
});
?>
