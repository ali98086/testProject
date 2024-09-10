<?php

use App\Http\Controllers\EmailController;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use App\Notifications\WelcomeNotification;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;




Route::get('/',function(){

    return view('welcome');

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
