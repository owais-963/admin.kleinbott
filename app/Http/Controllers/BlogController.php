<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(){
        $blog = Blog::orderBy("created_at","desc")->paginate(10);
        return view("blog.index", compact('blog'));       
    }
    
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.view', compact('blog'));
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {

        $blog = Blog::find($id);

        $data = [

            'title' => $request->title,
            'slug' => $request->slug,
            'content' => $request->content,
            'status' => $request->status,
            'order' => $request->order,
            'image' => $request->file('image')

        ];

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image');
        //  = image_upload($request->file('image'), 'blog/');
        }
        $blog->update($data);
        return redirect()->route('blogs.index')->with('success', 'blog deleted successfully.');

    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'blog deleted successfully.');
    }

    public function create()
    {


        return view('blog.create');
    }

    public function store(Request $request)
    {
        $data = [

            'title' => $request->title,
            'slug' => $request->slug,
            'content' => $request->content,
            'status' => $request->status,
            'order' => $request->order,
            'image' => $request->file('image')


        ];


        // $data['image']  = image_upload($request->file('image'), 'blog/');

        Blog::create($data);


        return redirect()->route('blogs.index')
            ->with('success', 'Blog created successfully.');
    }

    public function image(Request $request)

        {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp,svg,avif',
            ]);
            // image_upload($request->file('image'), 'blog/');
            // return response()->json(['location' => asset("uploads/$imageName")]);

    }




}
