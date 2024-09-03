<?php

namespace App\Http\Controllers\API\V1;

use App\Events\SeeEvent;
use App\Events\SeePostsEvent;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {        
    SeePostsEvent::dispatch(); 
        // return Post::paginate(2);
        return Post::all();
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        // SeeEvent::dispatch($post); 
        return $post;
    }
    
}
