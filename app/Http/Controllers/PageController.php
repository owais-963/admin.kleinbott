<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function index(){
        $pages = Page::all();
        return view('pages.index', compact('pages'));
    }

    public function create(){
        return view('pages.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'heading' => 'required',
            'content' => 'required',
            'image' => 'required'
            ]);

        if($request->hasFile){
            $file = $request->file('image')->getClientOriginalName();
            
        }

        Page::create($request->all());

        return redirect()->route('pages.index');
    }

    public function edit($id){
        $page = Page::findOrFail($id);
        return view('pages.edit', compact('page'));
    }

    public function update(Request $request, $id){
        $page = Page::findOrFail($id);
        $page->update($request->all());
        return redirect()->route('pages.index');
    }

    public function destroy($id){
        $page = Page::findOrFail($id);
        $page->delete();
        return back();
    }
}
