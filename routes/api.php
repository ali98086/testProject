<?php

use App\Models\Post;
use App\Services\Versioning;
use Illuminate\Support\Facades\Route;



Route::get('{version}/posts/{post?}',function($version , Post $post = null){

    return Versioning::showPost($version , $post);

});