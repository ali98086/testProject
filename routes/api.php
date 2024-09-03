<?php

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\API\V1\PostController as V1PostController;
use App\Http\Controllers\API\V2\PostController as V2PostController;
use App\Services\Versioning;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


// Route::get('{version}/posts/{post?}',function($version , Post $post = null){



    //  Versioning::showPost($version , $post);
    // if($version != 'v1' && $version != 'v2'){

    //     abort(404);

    // }

    // if($version == 'v1'){

    //     $v1post= new V1PostController();

    //     return empty($post) ? $v1post->index() : $v1post->show($post);

    // }

    // if($version == 'v2'){

    //     $v2post= new V2PostController();

    //     if(empty($post)){

    //         return $v2post->index();

    //     }
    //     else{

    //         $v1post= new V1PostController();
    //         return $v1post->show($post);

    //     }
    // }

// });   