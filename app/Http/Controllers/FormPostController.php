<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\Category;
use Illuminate\Http\Request;

class FormPostController extends Controller
{
    public function create()
    {
        $class = Category::select('id', 'name')->get();

        return view ('posts', [
            'class' => $class]);
    }

    public function store(Request $request)
    {
        $post = new post;
        $post->title = $request->title;
        $post->category = $request->category;
        $post->excerpt = $request->excerpt;
        $post->save();

    }
}
