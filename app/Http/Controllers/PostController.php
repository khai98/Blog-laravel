<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::paginate(6);
        return view('post.lists', compact('posts'));
    }

    public function simple($id)
    {
        $post = Post::find($id);
        return view('post.posts', compact('post'));
    }


    public function search(Request $request)
    {
        $key = $request->input('search');
        $posts = Post::where('title', 'like', "%" . $key . "%")->paginate(100);
        if (!$posts === null) {
            return view('post.lists', compact('posts'));
        } else {
            echo(' khong co bai viet nao ');
        }
    }

}
