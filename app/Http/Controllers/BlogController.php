<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class BlogController extends Controller
{
    public function list() {
        $data = Blog::orderBy('id', 'desc')->get();
        return view('blog.listblog')->with('data', $data);
    }

    // Create Blog
    public function create() {
        return view('blog.createblog');
    }

    public function create_procces(Request $request) {
        // Session
        Session::flash('title', $request->title);
        Session::flash('slug', $request->slug);
        Session::flash('content', $request->content);
        Session::flash('viewer', $request->viewer);

        // Validasi
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
            'viewer' => 'required'
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
        return redirect('blog')->with('success','Blog Created');
    }

    // Edit Blog
    public function edit($id) {
        $data = Blog::where('id',$id)->first();
        return view('blog.editblog')->with('data',$data);
    }

    public function edit_procces(Request $request, $id) {
        // Validasi
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
            'viewer' => 'required'
        ]);

        // Proses Edit Blog
        $data = [
            'title' => $request->title,
            'slug' => $request->slug,
            'content' => $request->content,
            'viewer' => $request->viewer
        ];

        Blog::where('id', $id)->update($data);
        return redirect('blog')->with('success_edit','Blog Updated');
    }

    // Delete Blog
    public function delete($id) {
        Blog::where('id', $id)->delete();
        return redirect('blog')->with('success_delete','Blog Deleted');
    }
}
