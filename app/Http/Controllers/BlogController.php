<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function list() {
        return view('listblog');
    }

    public function create() {
        return view('createblog');
    }

    public function create_procces(Request $request) {
        // Validasi
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required'
        ]);

        // Proses Create Blog
        $data = [
            'user_id' => $request->user_id,
            'title' => $request->title,
            'slug' => $request->slug,
            'content' => $request->content,
            'viewer' => $request->viewer
        ];

        Blog::create($data);
    }
}
