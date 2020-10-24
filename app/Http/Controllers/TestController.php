<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function index() {

        $posts = Test::orderBy('created_at', 'desc')->get();
        
        return view('index', compact('posts'));
    }

    public function show($id) {

        $post = Test::findOrfail($id);

        return view('show', ['post' => $post]);
    }

    public function create() {
        return view('create');
    }

    public function store(Request $post){

        $post = new Test();

        $post->title = request('title');
        $post->description = request('description');
        $post->toppings = request('toppings');

        // $validatedData = $post->validate([
        //     'title' => 'required|max:255',
        //     'description' => 'required',
        // ]);

        $post->save();
    
        return redirect('/index');
    }

    public function destroy($id)
    {
        $post = Test::findOrFail($id);
        $post->delete();

        return redirect('/index');
    }
}
