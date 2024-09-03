<?php

// use App\Http\Controllers\API\V1\PostController as V1PostController;
use App\Http\Controllers\API\V2\PostController as V2PostController;
use App\Http\Controllers\EmailController;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use App\Notifications\WelcomeNotification;
use App\Services\Versioning;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;


Route::get('/',function(){

    return view('welcome');

});

Route::get('{version}/posts/{post?}',function($version , Post $post = null){

    return Versioning::showPost($version , $post);

});
 


Route::get('posts', ['App\Http\Controllers\API\V1\PostController', 'index'])->middleware('signed')->name('posts');


Route::get('all-posts', function(){
     return redirect(URL::signedRoute('posts'));
})->name('all-posts');


Route::get('send-mail', [EmailController::class , 'sendMail']);


Route::get('send-notify/{user}', function(User $user){
    
    $messages= ['hi'=>$user->name. "سلام " , 'body'=> '.کاربر محترم صمیمانه به شما خوش آمد می گوییم'];
    $user->notify(new WelcomeNotification($messages));

    return 'Notify Email Send successfully !';

});

// Route::get('/a', function(){

//      Tag::create(['tag'=> 'bnm', 'status'=> 1]);

// });


// Route::get('post/{post}', [V1PostController::class , 'show']); 


// Route::get('post/{post:title}', [V1PostController::class , 'show']);