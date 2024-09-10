<?php

namespace App\Http\Controllers\API\V1;

use App\Events\SeeEvent;
use App\Events\SeePostsEvent;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    /**
     * Display all the specified V1 posts.
     * @return objects all posts
     */
    public function index()
    {
        SeePostsEvent::dispatch();
        return Post::all();
    }

    /**
     * Display the post by route model binding.
     * @param object $post
     * @return object post
     */
    public function show(Post $post)
    {
        return $post;
    }
}
