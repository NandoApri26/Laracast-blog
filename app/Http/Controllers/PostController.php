<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    public function index()
    {

        // $this->authorize('admin');
        
        return view('posts.index', [
            'posts' => Post::latest()->filter(
                request(['search', 'category', 'author'])
                )->paginate(6)->withQueryString()
        ]);
    }

    // Show
    public function show (Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }

}
