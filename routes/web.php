<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\TestController;

/*
function getUsers(){
        [
        1 => ['name' => 'sumon', 'id' => '456', 'city' => 'dhaka'],
        2 => ['name' => 'shoshi', 'id' => '466', 'city' => 'Barishal'],
        3 => ['name' => 'emon', 'id' => '476', 'city' => 'Bayarn'],
        4 => ['name' => 'sujon', 'id' => '486', 'city' => 'Roma'],
    ];

}*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/',[pageController::class,'showUsers']);
Route::get('/user',[pageController::class,'showHome']);
Route::get('/test',TestController::class);






/*Route::get('/show', function () {
    return view('index');
});*/
/*Route::get('/post/{id?}/comment/{commentid?}', function (string $id = null, string $comment = null ) {
    if($id){
        return "<h1>Post ID: ". $id ."</h1><h2>". $comment ."</h2>";
    }
    else{
        return "<h1>No id found</h1>";
    }
    
}); */
/*Route::get('/post/{id}/comment/{commentid}', function (string $id , string $comment) {
    if($id){
        return "<h1>Post ID: ". $id ."& Comment :". $comment ."</h1>";
    }
    else{
        return "<h1>No id found</h1>";
    }
    
})->where('id', '[0-9]+')->whereAlpha('commentid');*/








/*
Route::get('/postforyou', function () {
    return view('post');
})->name('my post');

Route::get('/test', function () {
    return view('about');
});
Route::redirect('/about','/test');
*/

/*
Route::get('/test', function () {
    return view('test');
});
*/



/*

Route::get('/user', function () {
    $names= getUsers();

    return view('user',[
                 'key'=>$names,
                    'city'=>'Dhaka'
                ]);
});
Route::get('/user/{id}', function ($id) {
    $user= getUsers();
    $users= $user[$id];

    return  view('users',['id'=> $users]);
})->name('view.user');*/

