<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class BlogController extends Controller
{
    public function list(Request $request) {
        // Search Blog
        $katakunci = $request->katakunci;
        if(strlen($katakunci)){
            $data = Blog::where('title', 'like', "%$katakunci%")
                ->orWhere('content', 'like', "%$katakunci%")->get();
        } else {
            $data = Blog::orderBy('id', 'desc')->get();
        }

        return view('blog.listblog')->with('data', $data);
    }

    // Create Blog
    public function create() {
        return view('blog.createblog');
    }

    public function create_procces(Request $request) {
        // Session
        Session::flash('title', $request->title);
        Session::flash('content', $request->content);
        Session::flash('viewer', $request->viewer);

        // Validasi
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'viewer' => 'required'
        ]);

        // Proses Create Blog
        $data = [
            'user_id' => $request->user_id,
            'title' => $request->title,
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
            'content' => 'required',
            'viewer' => 'required'
        ]);

        // Proses Edit Blog
        $data = [
            'title' => $request->title,
            'content' => $request->content,
            'viewer' => $request->viewer
        ];

        Blog::where('id', $id)->update($data);
        return redirect('blog')->with('success_edit','Blog Updated');
    }

    // Detail Blog
    public function detail($slug) {
        $data = Blog::where('slug', $slug)->first();
        return view('blog.detailblog')->with('data', $data);
    }

    // Delete Blog
    public function delete($id) {
        Blog::where('id', $id)->delete();
        return redirect('blog')->with('success_delete','Blog Deleted');
    }
}
