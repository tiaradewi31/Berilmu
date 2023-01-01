<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\Category;
use Illuminate\Http\Request;

class FormPostController extends Controller
{
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'category_id' => 'required',
            'excerpt' => 'required'
            
        ]);

        $validateData['user_id'] = user()->id;
        Post::create($validateData);

        return redirect('/searchpage');
    }
    public function create()
    {
        $class = Category::select('id', 'name')->get();

        return view ('posts', [
            'class' => $class]);
    }

    // public function store(Request $request)
    // {
    //     $post = new post;
    //     $post->title = $request->title;
    //     $post->category = $request->category;
    //     $post->excerpt = $request->excerpt;
    //     $post->save();

    // }
}
