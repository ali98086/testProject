<?php

namespace App\Http\Controllers\API\V2;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display all the specified V2 posts.
     * @return objects all posts
     */
    public function index()
    {
        return Post::all();
    }

}
