<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    public function manageBlog()
    {
        $data = [
            'blogs' => Blog::all(),
        ];
        return view('admin.pages.blog.manage', $data);
    }

    public function addBlog()
    {
        return view('admin.pages.blog.add');
    }

    public function storeBlog(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'details' => 'required',
            'photo' => 'required',
        ]);

        $blog = new Blog();
        $baseSlug = Str::slug($request->title, '-');
        $slug = $baseSlug;
        $counter = 1;
        while (Blog::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }
        $blog->slug = $slug;
        $blog->title = $request->title;
        $blog->details = $request->details;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $time = md5(time()) . '.' . $photo->getClientOriginalExtension();
            $photo->move('site/uploads/blog/', $time);
            $blog->photo = $time;
        }
        $blog->save();
        alert::success('Blog Added Successfully');
        return redirect()->route('manageBlog');
    }

    public function editBlog($slug)
    {
        $data = [
            'blog' => Blog::where('slug', $slug)->first(),
        ];
        return view('admin.pages.blog.edit', $data);
    }

    public function updateBlog(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'details' => 'required',
        ]);

        $blog = Blog::where('slug', $slug)->first();
        $baseSlug = Str::slug($request->title, '-');
        $slug = $baseSlug;
        $counter = 1;
        while (Blog::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }
        $blog->slug = $slug;
        $blog->title = $request->title;
        $blog->details = $request->details;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            unlink('site/uploads/blog/' . $blog->photo);
            $time = md5(time()) . '.' . $photo->getClientOriginalExtension();
            $photo->move('site/uploads/blog/', $time);
            $blog->photo = $time;
        }
        $blog->save();
        alert::success('Blog Updated Successfully');
        return redirect()->route('manageBlog');
    }

    public function deleteBlog($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        unlink('site/uploads/blog/' . $blog->photo);
        $blog->delete();
        alert::success('Blog Deleted Successfully');
        return redirect()->route('manageBlog');
    }

}
