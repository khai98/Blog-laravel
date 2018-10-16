<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.admin', compact('posts'));
    }

    /**
     * @param $id
     * @throws \Exception
     */
    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('home');

    }


    public function addNew(Request $request)
    {
        $create = new Post();
        $create->title = $request->input('title');
        $create->describe = $request->input('describe');
        $create->save();
        return redirect()->route('home');

    }



    public function edit(Request $request, $id)
    {

        $edit = Post::find($id);
        dd($edit);

        $edit->title = $request->input('title1');
        $edit->describe = $request->input('describe1');
        $edit->save();

        return redirect()->route('admin.edit');
    }

}
