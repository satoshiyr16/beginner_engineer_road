<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function store(Request $request) {
        $postContent = $request->input('content');
        $postTable = new Post;
        $postTable->title = ('あ');
        $postTable->content = $postContent;
        $postTable->save();

        return redirect('/');
    }
}
